<?php

namespace App\Library;

use Illuminate\Support\Facades\File;
class UploadImage
{
    public function Upload($file)
    {

            $pathMain = "assets/uploads/";

            $extensionf = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $w = str_replace($extension, "webp", $extensionf);
            $fileName = md5(microtime()) .'.'."$extension";

            $file->move($pathMain, $fileName);

            $file = $fileName;
            return $file;
    }

    public function UploadResize($file, $path)
    {

            $pathMain = "assets/uploads/";
            $pathSmall = $path."/small/";
            $pathMedium = $path."/medium/";

            $extensionf = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $ext = ['jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG','webp','WEBP'];

            if (in_array($extension, $ext)) {
                if (!File::isDirectory($path)) {
                    File::makeDirectory($path);
                }
                if (!File::isDirectory($pathMain)) {
                    File::makeDirectory($pathMain);
                }

                if (!File::isDirectory($pathMedium)) {
                    File::makeDirectory($pathMedium);
                }
                if (!File::isDirectory($pathSmall)) {
                    File::makeDirectory($pathSmall);
                }

            }







            $w = str_replace($extension, "webp", $extensionf);
            $fileName = md5(microtime()) .'.'."$extension";


            $file->move($pathMain, $fileName);

            $kaboom = explode(".", $fileName);
            $fileExt = end($kaboom);

            Resizer::resizePic($pathMain . $fileName, $pathSmall . $fileName, 300, 200, $fileExt);
            Resizer::resizePic($pathMain . $fileName, $pathMedium . $fileName, 600, 400, $fileExt);



            return $fileName;
    }
}
