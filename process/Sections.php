<?php
$files = $_FILES['image'];
$types = [
    "image/pjpeg",
    "image/gif",
    "image/jpeg",
    "image/jpg",
    "image/png",
];

$allowedExts = [
    "pjpeg",
    "jpg",
    "jpeg",
    "gif",
    "png",
];

if ($name = $files['name'])
{
    if (!in_array($files['type'], $types) && 
        !in_array(pathinfo($name, PATHINFO_EXTENSION), $allowedExts) && 
        $files['size'] > 20000)
    {
        $this->setMsg("<strong>$name</strong> is invalid to upload please upload in correct size and format", 'danger');
        header('location: /Sections/');
    }
    $file_name = "banners/$name";
    $up = move_uploaded_file($files['tmp_name'], $file_name);
    $res = $this->db->prepare("UPDATE sections set image=? where id=?"); 
    $res->execute(["/".$file_name, $this->post['id']]);
}

