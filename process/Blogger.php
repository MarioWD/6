<?php
if ($this->post['ajaxflag'] == 'month-changer')
{
    $res = $this->db->prepare("SELECT * FROM blog where UNIX_TIMESTAMP(timestamp) BETWEEN ? AND ?");
    $res->execute([$this->post['start'], $this->post['end']]); 
    $month_blogs = $res->fetchAll(PDO::FETCH_ASSOC);
    ob_start();
    ?>
    <div class='column'>
    <?php foreach ($month_blogs as $counter => $blog) { ?>
        <?php $blog['images'] = unserialize($blog['images'])[0];?>
            <a data-title='<?=$blog['title']?>' href='/Blog/?bi=<?=$blog['id']?>' class='js-blog-entry'><img src='<?=$blog['images']?>'/></a>
        <?php if ($counter%$this->per_column == 0) { ?>
            </div>
            <div class='column'>
        <?php } ?>
    <?php } ?>
    </div>
    <?php
    $html_blogs = ob_get_contents();
    ob_end_clean();
    echo $html_blogs;
    exit();
}

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
