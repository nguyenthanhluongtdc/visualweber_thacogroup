<?php
namespace Theme\Main\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\Blog\Models\Post;
use Illuminate\Support\Arr;
use ZipArchive;
use File;
use Carbon\Carbon;

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
        return basename($gallery[0]['img']);

        //return
        return response()->json([
            'data'      => $gallery,
            'name'      => $post->name,
            'message'   => 'success'
        ], 200);
    }
    
    public function getAlbumImage(Request $request) {
        $data = get_posts_type_by_category(15, 4, 'gallery');
        $filter = $request->data;

        

        return response()->json([
            'data'  => $data,
        ], 200);
    }

    public function getFilterImage() {

    }

    public function zipDownload($id) {
        $post = app(PostInterface::class)->getFirstBy(
            ['id'=> $id],
            ['*'],
            ['slugable']
        );

        //get gallery by post
        $galleries = gallery_meta_data($post);

        $zip = new ZipArchive;
        
        $currentTime = Carbon::now();

        return ;
        return 'album_'.$currentTime->format('d_m_Y').'_'.$currentTime->toArray()['timestamp'];

        return $post->name;
        
        if($zip->open(public_path($fileName), ZipArchive::CREATE)==TRUE) {
            foreach($galleries as $file) {
                $relativeName = basename($file['img']);
                $zip->addFile(public_path('storage/'.$file['img']), $relativeName);
            }

            $zip->close();
        }

        return response()->download(public_path($fileName));
    }
}