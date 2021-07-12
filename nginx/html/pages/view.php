<?php
include "../db.php";
?>
<!doctype html>

<head>
    <meta charset="UTF-8">
    <title>게시판</title>
</head>

<body>
    <?php
    $bno = $_GET['id'];
    $sql = query("select * from posts where ID='" . $bno . "'"); /* 받아온 idx값을 선택 */
    $board = $sql->fetch_array();
    ?>
    <!-- 글 불러오기 -->
    <div id="board_read">
        <h2><?php echo $board['title']; ?></h2>
        <div id="user_info">
            <div>
                작성자 : <?php echo $board['auther']; ?>
            </div>
            <div>
                작성 시간 : <?php echo $board['create_time']; ?>
            </div>
            <div id="bo_line"></div>
        </div>
        <div id="bo_content">
            <p>
                <?php echo nl2br("$board[content]"); ?>
            </p>
        </div>
        <!-- 목록, 수정, 삭제 -->
        <div id="bo_ser">
            <ul>
                <li><a href="/">[목록으로]</a></li>
                <li>
                    <a href="/pages/modify.php?id=<?php echo $board['ID'] ?>">
                        [수정]
                    </a>
                </li>
                <li>
                    <a href="/pages/delete.php?id=<?php echo $board['ID'] ?>">
                        [삭제]
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>