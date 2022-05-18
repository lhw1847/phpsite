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
    ?>
    <!-- main -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="join-type gray">
            <div class="member-form">
                <h3>회원정보</h3>
                <form action="mypageSave.php" name="join" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="ir_so">회원정보 입력폼</legend>
                        <div class="join-intro">
                        <div class="face">
                        <?php if($mypageInfo['youPhoto'] == null || false){
                                    $mypageInfo['youPhoto'] = "default.svg";
                                }
                                ?>
                                <img src="../asset/img/mypage/<?=$mypageInfo['youPhoto']?>" alt="프로필사진">


                            </div>
<?php
    echo "<div><label for='youPhoto'>사진추가</label><input type='file' id='youPhoto' value='".$mypageInfo['youPhoto']."' name='youPhoto'></div>";
    echo "<div class='modify'><label for='youIntro'>자기소개</label><input type='text' id='youIntro' value='".$mypageInfo['youIntro']."' name='youIntro' autocomplete='off'></div>";
?>
            </div>
            <div class="join-info">
            <div class="join-box">
                        <?php
                            $memberID = $_SESSION['memberID'];
                            $sql = "SELECT * FROM myMember WHERE memberID = '$memberID'";
                            $result = $connect -> query($sql);
                            if($result){
                                $mypageInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                // echo "<div class='modify'><label for='youEmail'>이메일</label><input type='email' id='youEmail' value='".$mypageInfo['youEmail']."' name='youEmail' autocomplete='off'></div>";
                                // echo "<div class='modify'><label for='youName'>이름</label> <input type='text' id='youName' value='".$mypageInfo['youName']."' name='youName' autocomplete='off'></div>";
                                // echo "<div class='modify'><label for='youBirth'>생년월일</label><input type='text' id='youBirth' value='".$mypageInfo['youBirth']."' name='youBirth' autocomplete='off'></div>";
                                // echo "<div class='modify'><label for='youPhone'>휴대폰 번호</label><input type='text' id='youPhone' value='".$mypageInfo['youPhone']."' name='youPhone' autocomplete='off'></div>";
                                // echo "<div class='modify'><label style='display: inline-block; margin: 0 10px 30px 0;' for='youGender'>성별</label><select name='youGender' id='youGender' value='".$mypageInfo['youGender']."'><option value='남자' "if($mypageInfo['youGender'] == '남자")SELECTED'">남자</option><option value='여자' "if($mypageInfo['youGender'] == '여자")SELECTED'">여자</option></select></div>";
                                // echo "<div class='modify'><label for='youSite'>사이트소개</label><input type='text' id='youSite' value='".$mypageInfo['youSite']."' name='youSite' autocomplete='off'></div>";
                                // echo "<div><label for='youPass'>비밀번호 입력</label><input type='password' id='youPass' name='youPass' placeholder='로그인 비밀번호를 입력해주세요!' maxlength='15' autocomplete='off' required></div>";
                            }
                        ?>
                            <div class="modify"><label for="youEmail">이메일</label><input type="email" id="youEmail" value="<?=$mypageInfo["youEmail"]?>" name="youEmail" autocomplete="off"></div>
                            <div class="modify"><label for="youName">이름</label> <input type="text" id="youName" value="<?=$mypageInfo["youName"]?>" name="youName" autocomplete="off"></div>
                            <div class="modify"><label for="youBirth">생년월일</label><input type="text" id="youBirth" value="<?=$mypageInfo["youBirth"]?>" name="youBirth" autocomplete="off"></div>
                            <div class="modify"><label for="youPhone">휴대폰 번호</label><input type="text" id="youPhone" value="<?=$mypageInfo["youPhone"]?>" name="youPhone" autocomplete="off"></div>
                            <div class="modify"><label style="display: inline-block; margin: 0 10px 30px 0;" for="youGender">성별</label><select name="youGender" id="youGender" value="<?=$mypageInfo["youGender"]?>"><option value="남자" <?php if($mypageInfo["youGender"] == "남자") echo "SELECTED" ?>>남자</option><option value="여자" <?php if($mypageInfo["youGender"] == "여자") echo "SELECTED" ?>>여자</option></select></div>
                            <div class="modify"><label for="youSite">사이트소개</label><input type="text" id="youSite" value="<?=$mypageInfo["youSite"]?>" name="youSite" autocomplete="off"></div>
                            <div><label for="youPass">비밀번호 입력</label><input type="password" id="youPass" name="youPass" placeholder="로그인 비밀번호를 입력해주세요!" maxlength="15" autocomplete="off" required></div>
                        </div>
                        <button id="joinBtn" class="join-submit" type="submit">회원정보 수정</button>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    <!-- //main -->
    <?php
        include "../include/footer.php";
    ?>
    <?php
        include "../include/footer.php";
    ?>
    <!-- //footer -->
</body>
</html>