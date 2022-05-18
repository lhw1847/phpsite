<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessioncheck.php";
    $blogID = $_GET['blogID'];
    $blogID = $connect -> real_escape_string($blogID);

    $sql = "DELETE FROM myBlog WHERE blogID = {$blogID}";
    $result = $connect -> query($sql);


    echo "<script> alert('삭제되었습니다.'); location.href = 'blog.php'</script>";
?>