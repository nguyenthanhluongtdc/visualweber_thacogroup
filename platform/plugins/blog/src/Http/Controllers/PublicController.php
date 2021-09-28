<?php

namespace Platform\Blog\Http\Controllers;

use Platform\Blog\Models\Category;
use Platform\Blog\Models\Post;
use Platform\Blog\Models\Tag;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\Blog\Services\BlogService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Response;
use SeoHelper;
use SlugHelper;
use Theme;
use Platform\Base\Enums\BaseStatusEnum;
use ZipArchive;
use File;
use Carbon\Carbon;
use Illuminate\Support\Str;


class PublicController extends Controller
{
    /**
     * @param Request $request
     * @param PostInterface $postRepository
     * @return Response
     */
    public function getSearch(Request $request, PostInterface $postRepository)
    {
        $query = $request->input('q');

        $title = __('Search result for: ":query"', compact('query'));
        SeoHelper::setTitle($title)
            ->setDescription($title);

        $posts = $postRepository->getSearch($query, 0, 12);

        Theme::breadcrumb()
            ->add(__('Home'), route('public.index'))
            ->add($title, route('public.search'));

        return Theme::scope('search', compact('posts'))
            ->render();
    }

    /**
     * @param string $slug
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function getTag($slug, BlogService $blogService)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Tag::class));

        if (!$slug) {
            abort(404);
        }

        $data = $blogService->handleFrontRoutes($slug);

        if (isset($data['slug']) && $data['slug'] !== $slug->key) {
            return redirect()->to(route('public.single', SlugHelper::getPrefix(Tag::class) . '/' . $data['slug']));
        }

        return Theme::scope($data['view'], $data['data'], $data['default_view'])
            ->render();
    }

    /**
     * @param string $slug
     * @param BlogService $blogService
     * @return RedirectResponse|Response
     */
    public function getPost($slug, BlogService $blogService)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Post::class));

        if (!$slug) {
            abort(404);
        }

        $data = $blogService->handleFrontRoutes($slug);

        if (isset($data['slug']) && $data['slug'] !== $slug->key) {
            return redirect()->to(route('public.single', SlugHelper::getPrefix(Post::class) . '/' . $data['slug']));
        }

        return Theme::scope($data['view'], $data['data'], $data['default_view'])
            ->render();
    }

    /**
     * @param string $slug
     * @param BlogService $blogService
     * @return RedirectResponse|Response
     */
    public function getCategory($slug, BlogService $blogService)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Category::class));

        if (!$slug) {
            abort(404);
        }

        $data = $blogService->handleFrontRoutes($slug);

        if (isset($data['slug']) && $data['slug'] !== $slug->key) {
            return redirect()->to(route('public.single', SlugHelper::getPrefix(Category::class) . '/' . $data['slug']));
        }

        return Theme::scope($data['view'], $data['data'], $data['default_view'])
            ->render();
    }
    function zipDownload(Request $request) {

        $id = $request->id;

        $post = app(PostInterface::class)->getFirstBy(
            [
                'id' => $id,
                'status' => BaseStatusEnum::PUBLISHED
            ],
            ['*'],
        );

        $zip = new ZipArchive;
        
        $currentTime = Carbon::now();

        $fileName = Str::slug($post->name??'undefined', '-').'_'.$currentTime->format('d_m_Y').'_'.$currentTime->toArray()['timestamp'].'.zip';

        if(!$post) {
            return [];
        }
        
        if($zip->open(public_path($fileName), ZipArchive::CREATE)==TRUE) {
            foreach(has_field($post, 'repeater_file_media') as $file) {
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
