<?php
namespace Theme\Main\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\Blog\Models\Post;
use Illuminate\Support\Arr;

class ApiController extends Controller {
    protected $postRepository;

    public function __contruct(PostInterface $postRepository) {
        $this->postRepository = $postRepository;
    }

    public function getGalleryPost($id) {
        
        //get post by id
        $post = app(PostInterface::class)->getFirstBy(
            ['id'=> $id],
            ['*'],
            ['slugable']
        );

        //get gallery by post
        $gallery = gallery_meta_data($post);

        //return
        return response()->json([
            'data'=> $gallery,
            'message'=> 'success'
        ], 200);
    }
}