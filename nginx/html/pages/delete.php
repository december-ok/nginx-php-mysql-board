<?php
include "../db.php";
$bno = $_GET['id'];
$sql = query("delete from posts where id='$bno';");
?>
<html>
<script>
    alert("삭제하였습니다.");
    location.href = "/index.php";
</script>

</html>