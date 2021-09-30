<?php

namespace Theme\Main\Http\Controllers;

use Platform\Theme\Http\Controllers\PublicController;
use BaseHelper;
use Platform\Page\Models\Page;
use Platform\Page\Services\PageService;
use Platform\Theme\Events\RenderingSingleEvent;
use Platform\Theme\Events\RenderingHomePageEvent;
use Platform\Theme\Events\RenderingSiteMapEvent;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use Response;
use SeoHelper;
use SiteMapManager;
use SlugHelper;
use Theme;
use RvMedia;
use Illuminate\Http\Request;
use Platform\Blog\Supports\FilterPost;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;
use Platform\Kernel\Repositories\Interfaces\PostInterface as PostInterfaceCustom;
use Illuminate\Support\Facades\Log;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Blog\Repositories\Interfaces\CategoryInterface;

class MainController extends PublicController
{
 /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getIndex()
    {
        SeoHelper::setTitle(theme_option('seo_title', 'Thacogroup'))
            ->setDescription(theme_option('seo_description', 'Thacogroup'))
            ->openGraph()
            ->setTitle(@theme_option('seo_title'))
            ->setSiteName(@theme_option('site_title'))
            ->setUrl(route('public.index'))
            ->setImage(RvMedia::getImageUrl(theme_option('seo_og_image'), 'og'))
            ->addProperty('image:width', '1200')
            ->addProperty('image:height', '630');

        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            $homepageId = BaseHelper::getHomepageId();
            if ($homepageId) {
                $slug = SlugHelper::getSlug(null, SlugHelper::getPrefix(Page::class), Page::class, $homepageId);

                if ($slug) {
                    $data = (new PageService)->handleFrontRoutes($slug);

                    return Theme::scope('index', $data['data'], $data['default_view'])->render();
                }
            }
        }

        SeoHelper::setTitle(theme_option('site_title'));

        Theme::breadcrumb()->add(__('Home'), route('public.index'));

        event(RenderingHomePageEvent::class);
       
    }
    public function getView($key = null)
    {
        SeoHelper::setTitle(theme_option('seo_title', 'ThacoGroup'))
            ->setDescription(theme_option('seo_description', 'ThacoGroup'))
            ->openGraph()
            ->setTitle(@theme_option('seo_title'))
            ->setSiteName(@theme_option('site_title'))
            ->setUrl(route('public.index'))
            ->setImage(RvMedia::getImageUrl(theme_option('seo_og_image'), 'og'))
            ->addProperty('image:width', '1200')
            ->addProperty('image:height', '630');

        if (empty($key)) {
            return $this->getIndex();
        }


        $slug = SlugHelper::getSlug($key, '');

        if (!$slug) {
            abort(404);
        }

        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            if ($slug->reference_type == Page::class && BaseHelper::isHomepage($slug->reference_id)) {
                return redirect()->to('/');
            }
        }

        $result = apply_filters(BASE_FILTER_PUBLIC_SINGLE_DATA, $slug);

        if (isset($result['slug']) && $result['slug'] !== $key) {
            return redirect()->route('public.single', $result['slug']); 
        }

        event(new RenderingSingleEvent($slug));
        Theme::layout('default');

        if (!empty($result) && is_array($result)) {
            $view = Arr::get($result, 'data.page')->template??Arr::get($result, 'view', '');
            return Theme::scope($view, $result['data'], Arr::get($result, 'default_view'))->render();
        }
        abort(404);
        Theme::breadcrumb()->add(__('Trang chủ'), url("public.index"));
    }

    public function getSearch(Request $request, PostInterface $postRepository) {
        $query = $request->input('keyword');
        if($request->has('keyword')) {
            $request->merge(['search'=>$request->keyword]);
            $request->request->remove('keyword');
        }
        
        $filters = FilterPost::setFilters($request->input());

        $posts = $postRepository->getFilters($filters);

        $total = $posts->count();
        $count = $posts->total().' '. __('kết quả được tìm thấy với từ khóa') .
            "<strong class='text-uppercase font20'> $query </strong>";

        return Theme::scope('search', compact('posts' ,'count'))->render();
    }
    public function getMedia(Request $request){
            $categoryId =  $request->categoryId;
            $allRequest = $request->toArray();

            //remove all url params
            foreach($allRequest as $key => $value) {
                $request->request->remove($key);
            }

            $category = app(CategoryInterface::class)->getFirstBy(
                [
                    'id' => $categoryId,
                    'status' => BaseStatusEnum::PUBLISHED
                ],
                
                ['*'],
                ['slugable']

            );    

            if(!$category->slug) {
                abort(404);
            }

            $data = [
                'reload' => false,
                'url'  => $category->url,
                'html' => ''
            ];

            if($category->template=='media') {
                $data['reload'] = true;
                return response()->json(
                    $data,
                    200
                );
            }

            $posts = app(PostInterface::class)->getByCategory($category->id, theme_option('number_post_media'));
            $postSlider = app(PostInterfaceCustom::class)->getFeaturedByCategory($category->id,3); 
            $postSlider_bottom = app(PostInterfaceCustom::class)->getFeaturedByCategory($category->id,3);
            $posts->withPath($category->url);   
            Theme::breadcrumb()
            ->add(__('Home'), route('public.index'));

            if($category->parent->id) {
                Theme::breadcrumb()->add($category->parent->name, $category->parent->url);
            }

            Theme::breadcrumb()->add($category->name, $category->url);
           
            $view = 'templates/'.$category->template;
            $html = Theme::partial($view, compact('posts','postSlider','category','postSlider_bottom'));
            
            $data['html'] = $html;
            
            return response()->json(
               $data,
                200
            );
    }

    
}



