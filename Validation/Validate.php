<?php

class Validate
{
    public static function createUser($data): bool
    {
        // kiểm tra xem có tồn tại giá trị không
        if (empty($data['name']) || empty($data['email']) || empty($data['password'])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            return false;
        }
        // kiểm tra nếu tạo mới thì phải thêm cả ảnh
        if ($_POST['password'] != $_POST['password_confirmation']) {
            $_SESSION['error'] = 'password and password confirmation not same.';
            return false;
        }
        return true;
    }

    public static function updateUser($data): bool
    {

        if (empty($data['name']) || empty($data['email'])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            return false;
        }
        return true;
    }

    public static function genre($data): bool
    {

        if (empty($data['name']) || empty($data['description'])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            return false;
        }
        return true;
    }

    public static function singer($data): bool
    {

        if (empty($data['name']) || empty($data['description'])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            return false;
        }

        if (!isset($_FILES['image']) && $_FILES['image']['name'] == null) {
            $_SESSION['error'] = 'Please fill avatar.';
            return false;
        }
        return true;
    }

    public static function album($data): bool
    {
        if (empty($data['name']) || empty($data['description'])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            return false;
        }

        if (!isset($_FILES['image']) && $_FILES['image']['name'] == null) {
            $_SESSION['error'] = 'Please fill avatar.';
            return false;
        }
        return true;
    }

    public static function createSong($data): bool
    {
        if (empty($data['name']) || empty($data['price']) || empty($data['album_id']) || empty($data['singer_id']) || empty($data['genre_id'])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            return false;
        }

        if (!isset($_FILES['song']) && $_FILES['song']['name'] == null) {
            $_SESSION['error'] = 'Please fill song.';
            return false;
        }

        if (!isset($_FILES['image']) && $_FILES['image']['name'] == null) {
            $_SESSION['error'] = 'Please fill image.';
            return false;
        }

        // Lấy phần mở rộng của tệp tin
        $fileExtension = pathinfo($_FILES['song']['name'], PATHINFO_EXTENSION);
        // Kiểm tra xem phần mở rộng có phải là mp3 không
        if ($fileExtension !== 'mp3') {
            $_SESSION['error'] = 'Please choose file mp3 extension song.';
            return false;
        }

        if ($data['price'] < 0) {
            $_SESSION['error'] = 'Please choose price > 0';
            return false;
        }

        return true;
    }

    public static function updateSong($data): bool
    {
        if (empty($data['name']) || empty($data['price']) || empty($data['album_id']) || empty($data['singer_id']) || empty($data['genre_id'])) {
            $_SESSION['error'] = 'Please fill in all required fields.';
            return false;
        }

        if (isset($_FILES['song']) && $_FILES['song']['name'] != null) {

            $fileExtension = pathinfo($_FILES['song']['name'], PATHINFO_EXTENSION);

            // Kiểm tra xem phần mở rộng có phải là mp3 không
            if ($fileExtension !== 'mp3') {
                $_SESSION['error'] = 'Please choose file mp3 extension song.';
                return false;
            }

            return false;
        }

        if ($data['price'] < 0) {
            $_SESSION['error'] = 'Please choose price > 0';
            return false;
        }

        return true;
    }

    public static function  isId($id): bool
    {
        if (empty($id) || !is_numeric($id)) {
            return false;
        }

        return true;
    }
}
