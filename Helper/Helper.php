<?php

class Helper
{
    public static function upload($fileName, $fileTmp)
    {
        // lấy đường dẫn thư mục lưu trữ file
        $dir = date('m') . "-" . date('y');
        $uploads = "./Uploads/";
        if (!file_exists($uploads . $dir) && !is_file($uploads . $dir)) {
            mkdir($uploads . $dir);
        }
        // lấy tên của image
        $imgName = time() . $fileName;
        // lấy đường dẫn tạm của image
        $image = $dir . '/' . $imgName;

        move_uploaded_file($fileTmp, $uploads . $image);
        return $image;
    }

    public static function validateInput($data): string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public static function back()
    {
        $previous_url = str_replace('http://candv.test:86/', '', $_SERVER['HTTP_REFERER']);
        header("Location:$previous_url");
    }

}
