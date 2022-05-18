<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "../connect/connect.php";
        include "../connect/session.php";
        include "../connect/sessionCheck.php";

        $memberID = $_SESSION['memberID'];

        //쿼리문 작성(멤버ID값 삭제하기)
        $sql = "DELETE FROM myMember WHERE memberID = {$memberID}";
        $connect -> query($sql);

        echo "<script>alert('탈퇴되었습니다.'); location.href = '../pages/main.php';</script>"
    ?>
</body>
</html>