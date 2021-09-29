<?php
namespace Theme\Main\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Platform\Kernel\Repositories\Interfaces\PostInterface as PostInterfaceCustom;
use Platform\Blog\Models\Post;
use Illuminate\Support\Arr;
use ZipArchive;
use File;
use Carbon\Carbon;
use Menu;

class ApiController extends Controller {
    

    public function __contruct() {

    }

    // public function getAlbumImage(Request $request) {

    //     $filter = $request->data;

    //     if(!$filter['categoryId']) {
    //         return response()->json([
    //             'data'  => [],
    //         ], 200);
    //     }

    //     $paginate = theme_option('number_of_posts_in_a_category');

    //     $data = app(PostInterfaceCustom::class)->getFilterPostByCategory($filter, $paginate);
    //     foreach($data as $da) {
    //         $da['youtube_code'] = "";
    //         if(has_field($da, 'youtube_code')) {
    //             $da['youtube_code'] = has_field($da, 'youtube_code');
    //         }
    //     }

    //     return response()->json([
    //         'data'  => $data,
    //     ], 200);
    // }

    public function getAlbumImage(Request $request) {
        
        //get post by id
        $post = app(PostInterfaceCustom::class)->getFirstBy(
            ['id'=> $request->id],
            ['*'],
            ['slugable']
        );

        //get gallery by post
        $gallery = gallery_meta_data($post);

        //return
        return response()->json([
            'data'      => $gallery,
            'name'      => $post->name,
            'message'   => 'success'
        ], 200);
    }

    public function getFilterImage() {

    }

    public function zipDownload(Request $request) {
        
        $post = app(PostInterfaceCustom::class)->getFirstBy(
            ['id'=> $request->id],
            ['*'],
            ['slugable'] 
        );

        //get gallery by post
        $gallery = gallery_meta_data($post);
 
        $zip = new ZipArchive;
        
        $currentTime = Carbon::now();

        $fileName = 'album_'.$currentTime->format('d_m_Y').'_'.$currentTime->toArray()['timestamp'].'.zip';
        
        if($zip->open(public_path($fileName), ZipArchive::CREATE)==TRUE) {
            foreach($gallery as $file) {
                $relativeName = basename($file['img']);
                $zip->addFile(public_path('storage/'.$file['img']), $relativeName);
            }

            $zip->close();
        }

        //$delete = response()->download(public_path($fileName))->deleteFileAfterSend(true);

        return $fileName;
    }

    //video
    public function getAlbumVideo(Request $request) {
        $post = app(PostInterfaceCustom::class)->getFirstBy(
            ['id'=> $request->id],
            ['*'],
            ['slugable']
        );

        $data = [];
        $description = "";
        $youtube_code = "";

        foreach(has_field($post, 'repeater_video') as $row) {
            $description = has_sub_field($row, 'description');
            $youtube_code = has_sub_field($row, 'youtube');
            $data[] = [
                'description'   => $description,
                'youtube_code'  => $youtube_code,
            ];
        }

        return response()->json([
            'data'      => $data,
            'name'      => $post->name,
            'message'   => 'success'
        ], 200);
    }

    public function getMenuByLocation(Request $request) {
        $menu_name = $request->location;

        $menu_nodes = Menu::getDataMenu($menu_name);
        
        return response()->json([
            'data'  => $menu_nodes['menu_nodes'],
        ], 200);
    }
    public function FilterTime(){
        
    }

    public function getFilterGallery(Request $request) {

        $filter = $request->input();

        if(!$filter['categoryId']) {
            return response()->json([
                'data'  => [],
            ], 200);
        }

        $paginate = theme_option('number_of_posts_in_a_category');

        $data = app(PostInterfaceCustom::class)->getFilterPostByCategory($filter, $paginate);
        
        if($filter['format_type'] == 'gallery') {
            foreach($data as $da) {
                $da['album_total'] = count(gallery_meta_data($da));
            }
        }else {
            foreach($data as $da) {
                $da['youtube_code'] = "";
                if(has_field($da, 'youtube_code')) {
                    $da['youtube_code'] = has_field($da, 'youtube_code');
                }

                $da['album_total'] = count(has_field($da, 'repeater_video'));
            }
        }

        return response()->json([
            'data'  => $data,
        ], 200);
    }

    
}