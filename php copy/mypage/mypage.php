<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessioncheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>
    <style>
        .join-info {margin-top: 0px !important;}
    </style>
    <!-- style -->
    <?php
    include "../include/style.php"
    ?>
    <!-- //style -->
</head>
<body>
    <!-- skip -->
     <?php
    include "../include/skip.php"
    ?>
    <!-- //skip -->

    <!-- header -->
    <?php
        include "../include/header.php"    
    ?>
    <!-- //header -->
    <?php
    $memberID = $_SESSION['memberID'];
    $sql = "SELECT * FROM myMember WHERE memberID = '$memberID'";
    $result = $connect -> query($sql);
    $mypageInfo = $result -> fetch_array(MYSQLI_ASSOC);
    //youEmail, youNickName, youName, youBirth, youPhone, youGender, youIntro, youSite
    echo "<div class='intro'>".$mypageInfo['youIntro']."</div>";
?>
    <!-- main -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="join-type gray">
            <div class="member-form">
                <h3>회원정보</h3>
                <form action="mypageSave.php" name="mypage" method="post">
                    <fieldset>
                        <legend class="ir_so">회원정보 입력폼</legend>
                        <div class="join-intro">
                            <div class="face">
                            <?php if($mypageInfo['youPhoto'] == null){
                                    $mypageInfo['youPhoto'] = "default.svg";
                                }?>
                                <img src="../asset/img/mypage/<?=$mypageInfo['youPhoto']?>" alt="프로필사진">
                            </div>
            </div>
            <div class="join-info">
                <ul>
<?php
        echo "<li><strong>자기소개</strong><span>".$mypageInfo['youIntro']."</span></li>";
        echo "<li><strong>이메일</strong><span>".$mypageInfo['youEmail']."</span></li>";
        echo "<li><strong>이름</strong><span>".$mypageInfo['youName']."</span></li>";
        echo "<li><strong>성별</strong><span>".$mypageInfo['youGender']."</span></li>";
        echo "<li><strong>생년월일</strong><span>".$mypageInfo['youBirth']."</span></li>";
        echo "<li><strong>휴대폰 번호</strong><span>".$mypageInfo['youPhone']."</span></li>";
        echo "<li><strong>사이트 소개</strong><span>".$mypageInfo['youSite']."</span></li>";
?>
                    </ul>
                </div>

                <div class="join-btn">
                    <a href="mypageModify.php">수정하기</a>
                    <a href="mypageRemove.php">탈퇴하기</a>
                </div>
                     
            </div>
        </section>
    </main>
    <!-- //main -->

    <!-- footer -->
    <?php
        include "../include/footer.php"    
    ?>
    <!-- //footer -->
</body>
</html>