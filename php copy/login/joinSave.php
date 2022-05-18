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
        $youEmail = $_POST['youEmail'];
        $youPass = $_POST['youPass'];
        $youPassC = $_POST['youPassC'];
        $youNickName = $_POST['youNickName'];
        $youName = $_POST['youName'];
        $youBirth = $_POST['youBirth'];
        $youPhone = $_POST['youPhone'];
        $regTime = time();
        
        $youEmail = $connect -> real_escape_string(trim($_POST['youEmail']));
        $youNickName = $connect -> real_escape_string(trim($_POST['youNickName']));
        $youName = $connect -> real_escape_string(trim($_POST['youName']));
        $youBirth = $connect -> real_escape_string(trim($_POST['youBirth']));
        $youPhone = $connect -> real_escape_string(trim($_POST['youPhone']));

        $youPass = $connect -> real_escape_string(trim($_POST['youPass']));
        $youPass = sha1("web".$youPass);

        $sql = "INSERT INTO myMember(youEmail, youPass, youNickName, youName, youBirth, youPhone, regTime)
        VALUES('$youEmail', '$youPass', '$youNickName', '$youName', '$youBirth', '$youPhone', '$regTime')";
        $result = $connect -> query($sql);
        if($result){
            echo "INSERT INTO TRUE";
        } else {
            echo "INSERT INTO FALSE";
        }
        Header("Location: ../login/login.php");
    ?>
</body>
</html>