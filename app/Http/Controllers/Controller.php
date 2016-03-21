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
        $image_path = 'images/avatar.jpg';

        // 修改指定图片的大小
        $img = Image::make($image_path)->resize(200, 200);

        // 插入水印, 水印位置在原图片的右下角, 距离下边距 10 像素, 距离右边距 15 像素
        $img->insert('images/watermark.png', 'bottom-right', 15, 10);

        // 将处理后的图片重新保存到其他路径
        $img->save('images/new_avatar.jpg');

        /* 上面的逻辑可以通过链式表达式搞定 */
        $img = Image::make($image_path)->resize(200, 200)->insert('images/new_avatar.jpg', 'bottom-right', 15, 10);


        return view('welcome', compact('image_path'));
    }
}
