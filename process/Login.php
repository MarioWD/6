<?php
$db = classes\Db::getInstance()->rawPDO();
$res = $db->query('SELECT * FROM users WHERE email=\''.$this->post['email'].'\' AND role=1');
$res->execute();
$res = $res->fetch(PDO::FETCH_ASSOC);
$hashed = password_hash($this->post['password'], PASSWORD_BCRYPT);
$verified = password_verify($this->post['password'], $res['hash']);
$this->verify = $verified;

if ($verified)
{
    $_SESSION['ui-hash'] = $res['hash'];
    $_SESSION['ui-mail'] = $res['email'];
    $this->setMsg("<strong>Success</strong> You were successfully logged in!", 'success');
    header('location: /Home');
    exit;
}
?>
