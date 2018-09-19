<?php
$files = $_FILES['images'];
$folder = 'images/';
$types = [
    "video/mp4",
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
    "mp4"
];

foreach ($files['name'] as $i => $name)
{
    if (!in_array($files['type'][$i], $types) && 
        !in_array(pathinfo($name, PATHINFO_EXTENSION), $allowedExts) && 
        $files['size'][$i] > 20000)
    {
        $this->setMsg("<strong>$name</strong> is invalid to upload please upload in correct size and format", 'danger');
        header('location: /Blogger/');
    }
    $file_name = $folder.$name;
    $images[] = $file_name;
    move_uploaded_file($files['tmp_name'][$i], $file_name);
}

$images = serialize($images);
$params = [
    $this->post['title'],
    $this->post['body'],
    $images,
];

$sql = "INSERT INTO blog (title,body,images) VALUES (?,?,?)";
$res = $this->db->prepare($sql);
$res->execute($params);
$this->setMsg("<strong>Success!</strong> blog post is successfully uploaded!", 'success');
?>
