<?php 
if ($this->post['action'] == 'delete')
{
    $id = $this->post['blog_id'];
    $res = $this->db->prepare("DELETE FROM blog WHERE id=?");
    $res->execute([$id]);
    $this->setMsg("<strong>Successful!</strong> Blog post deletion", 'success');
    header('location: /Home/');
    exit();
}
