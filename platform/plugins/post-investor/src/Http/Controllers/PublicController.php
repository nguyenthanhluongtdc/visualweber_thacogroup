<?php
namespace Platform\PostInvestor\Http\Controllers;
use Platform\Base\Http\Controllers\BaseController;
use SlugHelper;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Illuminate\Http\Request;
use Platform\Base\Enums\BaseStatusEnum;
use ZipArchive;
use File;
use Carbon\Carbon;
use Theme;

class PublicController extends BaseController {

    protected $postInvestorRepository;

    public function __construct(PostInvestorInterface $postInvestorRepository) {
        $this->postInvestorRepository = $postInvestorRepository;
    }


    public function getSearch($key, Request $request) {
        $keyword = $request->input('keyword');

        $slug = SlugHelper::getSlug($key);

        if(!$slug) {
            abort(404);
        }
        $categoryId = $slug->reference_id;

        $category = app(InvestorRelationsInterface::class)
        ->getFirstBy(['id'=>$categoryId], ['*'], ['slugable']);
        
        if ($category->slug!=null && $category->slug !== $slug->key) {
            $params = [];
            foreach($request->query() as $key => $value) {
                $params[] = $key.'='.$value;
            }

            $params = !empty($params)?'/search?'.implode('&', $params):'';

            return redirect()->to(route('public.single', $category->slug . $params));
        }

        $data = $this->postInvestorRepository->getModel()
        ->whereHas('categories', function ($model) use ($categoryId, $keyword) {
            $model
                ->where('app_investor_relations.id', $categoryId)
                ->where('app_post_investors.name','like', '%'. $keyword .'%');
        });

        if($request->input('year') && filter_var($request->input('year'), FILTER_VALIDATE_INT)) {
            $data->whereYear('app_post_investors.created_at', intval($request->input('year')));
        } 
        $data = $this->postInvestorRepository->applyBeforeExecuteQuery($data)->paginate(theme_option('number_of_posts_in_a_category'));

        $view = 'shareholder-relations';
        if($view) {
            return Theme::scope($view, compact('data','category'))->render();
        }

        abort(404);
    }

    function zipDownload(Request $request) {

        $zip = new ZipArchive;
        
        $currentTime = Carbon::now();

        $fileName = 'doc_'.$currentTime->format('d_m_Y').'_'.$currentTime->toArray()['timestamp'].'.zip';

        $id = $request->id;

        $post = app(PostInvestorInterface::class)->getFirstBy(
            [
                'id' => $id,
                'status' => BaseStatusEnum::PUBLISHED
            ],
            ['*'],
        );

        if(!$post) {
            return [];
        }
        
        if($zip->open(public_path($fileName), ZipArchive::CREATE)==TRUE) {
            foreach(has_field($post, 'repeater_file_post_investor') as $file) {
                $relativeName = basename(has_sub_field($file, 'file'));

                $zip->addFile(public_path('storage/'.has_sub_field($file, 'file')), $relativeName);
            }

            $zip->close();
        }

        if(File::exists($fileName)) {
            return response()->json(
                ['data'=>$fileName], 200
            );
        }

        return [];
    }
}