<?php
namespace Platform\PostInvestor\Http\Controllers;
use Platform\Base\Http\Controllers\BaseController;
use SlugHelper;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Illuminate\Http\Request;
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
}