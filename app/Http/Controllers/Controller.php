<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\Facades\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $origin_path            = 'images/origin.jpg';
        $origin_resize_path     = 'images/origin_resize.jpg';
        $origin_add_watermark   = 'images/origin_add_watermark';

        // 修改指定图片的大小
        $img = Image::make($origin_path)->resize(200, 200);



        // 将处理后的图片重新保存到其他路径
        $img->save($origin_resize_path);

        // 插入水印, 水印位置在原图片的右下角, 距离下边距 10 像素, 距离右边距 15 像素
        // $img->insert('images/watermark.png', 'bottom-right', 15, 10);
        // 这些逻辑可以通过下面的链式表达式搞定
        $img = Image::make($image_path)->resize(200, 200)
                                       ->insert('images/new_avatar.jpg', 'bottom-right', 15, 10)
                                       ->save($origin_add_watermark);


        return view('welcome', compact('image_path'));
    }
}
