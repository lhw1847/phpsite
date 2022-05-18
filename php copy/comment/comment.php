<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>
    <style>
        .card__inner {
            width: inherit !important;
        }
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

    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">김치찌개, 된장찌개, 고추장찌개</h3>
                <p class="section__desc">
                    여러분이 좋아하는 찌개는 어떤건가요? <br>
                    Gmarket Sans Light 22px 150% #67778A 
                </p>
                <div class="card__inner">
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../../../php/asset/img/card01.png" alt="이미지1">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">김치찌개</h3>
                            <p class="card__desc">한국 요리 중 하나. 김치를 기반으로 하는 찌개 요리다. 김치를 볶은 다음 물을 부어 끓이는 방법으로 조리한다. 된장찌개와 함께 한국인에게 가장 선호되는 한식이다. 한국의 대표적인 찌개 요리로 자리하고 있으며, 한국인이 가장 좋아하는 한식으로 꼽힌다.[2] 식사 때 밥에 곁들여지는 부식으로도 잘 어울리는 음식이지만 술안주, 캠핑요리로도 제격인 음식이다. 특히나 소주와는 거의 찰떡궁합이다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../../../php/asset/img/card02.jpg" alt="이미지2">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">된장찌개</h3>
                            <p class="card__desc">된장을 주재료로 끓인 대한민국 전통 국민찌개. 김치찌개와 투탑의 선호도로 한식의 상징과도 같은 요리로, 한식 찌개의 중심에 해당하는 요리. 충청도 일부에서는 장이라고 줄여서 부르기도 한다. 국 용도로 조금 묽게 끓인 것은 된장국, 혹은 토장국이라고 한다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../../../php/asset/img/card03.jpg" alt="이미지3">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">고추장찌개</h3>
                            <p class="card__desc">한국 요리 중 찌개의 한 종류. 다른 이름으로 캠핑찌개. 지역에 따라 짜글이라고도 부른다. 쉽게 말해 된장찌개에서 된장 대신 고추장이 들어갔다고 보면 된다. 그래서 부가재료[2]는 거의 비슷하다. 하지만 어째서인지 된장찌개와는 달리 경상도 지역 식당에서는 거의 팔지 않으며[3] 일부 고기집에서만 판매하고 있다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- //card-type -->

        <section id="comment-type" class="section center gray">
            <h3 class="section__title">의견 작성하기</h3>
            <p class="section__desc">의견 작성하기는 누구나 댓글을 달 수 있습니다. 회원가입 하지 않아도 신청 가능합니다.</p>
            <div class="comment__inner">
                <div class="comment__form">
                    <form action="commentSave.php" method="post" name="comment">
                        <fieldset>
                            <legend class="ir_so">댓글 쓰기</legend>
                            <div class="comment__wrap">
                                <div>
                                <label for="youName" class="ir_so">이름</label>
                                    <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                </div>
                                <div>
                                <label for="youText" class="ir_so">댓글 쓰기</label>
                                    <input type="text" name="youText" id="youText" class="input__style width" placeholder="소중한 의견을 작성해 주세요!" autocomplete="off" required>
                                </div>
                                <button class="comment__btn" type="sumit" value="댓글 작성하기">작성 하기</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="comment__list">
                    <!-- <div class="list">
                        <p class="comment__desc">너무 맛있어보여요! 오늘 저녁은 된장찌개 먹을래요 !!</p>
                        <div class="comment__icon">
                            <span class="face"><img src="../asset/img/face.png" alt="얼굴"></span>
                            <span class="name">작성자</span>
                            <span class="date">2022-03-16</span>
                        </div>
                    </div> -->
                    <!-- <?php
                        include "../connect/connect.php";

                        $sql = "SELECT * FROM myComment";
                        $result = $connect -> query($sql);
                        $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);

                        echo "<pre>";
                        var_dump($commentInfo);
                        echo "</pre>";
                    ?>
                    <?php while($commentInfo = $result -> fetch_array(MYSQLI_ASSOC)){ ?>
                            <div class="list">
                                <p class="comment__desc"><?=$commentInfo['youText']?></p>
                                <div class="comment__icon">
                                    <span class="face"><img src="../asset/img/face.png" alt="얼굴"></span>
                                    <span class="name"><?=$commentInfo['youName']?></span>
                                    <span class="date"><?=date('Y-m-d', $commentInfo['regTime'])?></span>
                                </div>
                            </div>
                    <?php } ?> -->
<?php
    include "../connect/connect.php";
    $sql = "SELECT * FROM myComment";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
        if($count > 0){
            for($i=1; $i<=$count; $i++){
                $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='list'>";
                echo "<p class='comment__desc'>".$commentInfo['youText']."</p>";
                echo "<div class='comment__icon'>";
                echo "<span class='face'><img src='../../../php/asset/img/face.png' alt='얼굴'></span>";
                echo "<span class='name'>".$commentInfo['youName']."</span>";
                echo "<span class='date'>".date('Y-m-d', $commentInfo['regTime'])."</span>";
                echo "</div>";
                echo "</div>";
            }
        }
    }
?>     
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