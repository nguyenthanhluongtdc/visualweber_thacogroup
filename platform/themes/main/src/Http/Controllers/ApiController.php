<?php
namespace Theme\Main\Http\Controllers;

use Platform\Kernel\Repositories\Interfaces\PostInterface as PostInterfaceCustom;
use Platform\Theme\Http\Controllers\PublicController;
use Platform\Blog\Services\BlogService;
use SlugHelper;
use Platform\Blog\Models\Post;

class ApiController extends PublicController {
    
    public function getMedia($type, $categoryId) {

        $data = app(PostInterfaceCustom::class)->getPostsTypeByCategory($categoryId, 6, $type);

        foreach ($data as $item) {
            $album = count(gallery_meta_data($item));
            $item['album'] = $album;
        }

        return response()->json([
            'data'=>$data,
        ], 200);
    }

    public function galleryMetaData($slug, BlogService $blogService) {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Post::class));

        $post = $blogService->handleFrontRoutes($slug);

        $gallerys = gallery_meta_data($post['data']['post']);

        return response()->json([
            'data'=> $gallerys
        ], 200);
    }
}