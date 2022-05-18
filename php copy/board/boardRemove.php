<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessioncheck.php";
    $boardID = $_GET['boardID'];
    $boardID = $connect -> real_escape_string($boardID);

    $sql = "DELETE FROM myBoard WHERE boardID = {$boardID}";
    $connect -> query($sql);

    echo "<script> alert('삭제되었습니다.'); location.href = 'board.php'</script>";
?>