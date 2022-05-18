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
        include "../connect/sessioncheck.php";
        $youEmail = $_POST['youEmail'];
        $youName = $_POST['youName'];
        $youBirth = $_POST['youBirth'];
        $youPhone = $_POST['youPhone'];
        $youNickName = $_POST['youNickName'];
        $youIntro = $_POST['youIntro'];
        $youGender = $_POST['youGender'];
        $youSite = $_POST['youSite'];
        $youPass = $_POST['youPass'];
        $memberID = $_SESSION['memberID'];
        $youPhoto = $_FILES['youPhoto'];
        $myPageSize = $_FILES['youPhoto']['size'];
        $myPageType = $_FILES['youPhoto']['type'];
        $myPageName = $_FILES['youPhoto']['name'];
        $myPageTmp = $_FILES['youPhoto']['tmp_name'];
        // $blogImgSize = $_FILES['blogFile']['size'];
        // $blogImgType = $_FILES['blogFile']['type'];
        // $blogImgName = $_FILES['blogFile']['Name'];
        // $blogImgTmp = $_FILES['blogFile']['tmp_name'];
        echo $youGender;
        $sql = "SELECT youPass, memberID FROM myMember WHERE memberID = {$memberID}";
        $result = $connect -> query($sql);
        if($result){
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
            //이미지 업로드
            $fileTypeExtension = explode("/", $myPageType);
            $fileType = $fileTypeExtension[0];  //image
            $fileExtension = $fileTypeExtension[1];  //jpeg
            if($memberInfo['youPass'] == $youPass && $memberInfo['memberID'] == $memberID){
                $myPageDir = "../asset/img/mypage/";
                $myPageName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                    $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youIntro = '{$youIntro}', youGender = '{$youGender}', youSite = '{$youSite}', youName = '{$youName}', youBirth = '{$youBirth}', youPhone = '{$youPhone}', youPass = '{$youPass}', youPhoto = '{$myPageName}' WHERE memberID = '{$memberID}'";
                    $connect -> query($sql);
                    $result = $connect -> query($sql);
                    $result = move_uploaded_file($myPageTmp, $myPageDir.$myPageName);
                } else {
                    $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youName = '{$youName}', youBirth = '{$youBirth}', youPhone = '{$youPhone}', youGender = '{$youGender}', youIntro = '{$youIntro}', youSite = '{$youSite}' WHERE memberID = '{$memberID}'";
                    $connect -> query($sql);
                    $result = $connect -> query($sql);
                    $result = move_uploaded_file($myPageTmp, $myPageDir.$myPageName);
                }
            } else {
                echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번 확인해 주세요.'); history.back(1);</script>";
            }
        }
    ?>
    <script>
        location.href = "mypage.php";
    </script>
</body>
</html>