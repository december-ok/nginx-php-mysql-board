<?php
include "../db.php";
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
if ($username && $userpw && $title && $content) {
    $sql = query("insert into posts (auther,password,title,content) values ('" . $username . "','" . $userpw . "','" . $title . "','" . $content . "')");
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='/index.php';</script>";
} else {
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>
<html>

</html>