<?php
include "../db.php";

$bno = $_GET['id'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$sql = query("update posts set auther='" . $username . "',password='" . $userpw . "',title='" . $title . "',content='" . $content . "' where id='" . $bno . "'"); ?>

<script type="text/javascript">
    alert("수정되었습니다.");
    location.href = '/index.php';
</script>