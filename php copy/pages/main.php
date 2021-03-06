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
    <title>PHP 사이트</title>
</head>
    <!-- style -->
    <?php
        include "../include/style.php"
    ?>
    <!-- //style -->
<body>
    <div id="wrap">
        <!-- skip -->
    <?php
    include "../include/skip.php"
    ?>
    <!-- //skip -->

     <!-- header -->
    <?php
        include "../include/header.php";
    ?>
    <!-- //header -->

    <!-- main -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="slide-type" class="type">
        <div class="slider__wrap">
                <div class="slider__img">
                    <div class="slider__inner">
                        <div class="slider s1">
                            <!-- <img src="../asset/img/bannerbg01.jpg" alt="이미지1"> -->
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    당신이 만들어갈 새로운 이야기<br>
                                    당신도 할 수 있습니다.
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s2">
                            <!-- <img src="../asset/img/bannerbg02.jpg" alt="이미지2"> -->
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    당신이 만들어갈 새로운 이야기<br>
                                    당신도 할 수 있습니다.
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s3">
                            <!-- <img src="../asset/img/bannerbg03.jpg" alt="이미지3"> -->
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    당신이 만들어갈 새로운 이야기<br>
                                    당신도 할 수 있습니다.
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s4">
                            <!-- <img src="../asset/img/bannerbg04.jpg" alt="이미지4"> -->
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    당신이 만들어갈 새로운 이야기<br>
                                    당신도 할 수 있습니다.
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s5">
                            <!-- <img src="../asset/img/bannerbg05.jpg" alt="이미지5"> -->
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    당신이 만들어갈 새로운 이야기<br>
                                    당신도 할 수 있습니다.
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                        <div class="slider s6">
                            <!-- <img src="../asset/img/bannerbg06.jpg" alt="이미지6"> -->
                            <div class="desc">
                                <span>DEVELOPER</span>
                                <h4>NEW FRONTEND</h4>
                                <p>
                                    당신이 만들어갈 새로운 이야기<br>
                                    당신도 할 수 있습니다.
                                </p>
                                <div class="btn">
                                <a href="#" class="white">자세히 보기</a>
                                <a href="#" class="black">사이트 보기</a>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="slider__btn">
                    <div class="prev"></div>
                    <div class="next"></div>
                </div>
                <div class="slider__dot">
                </div>
            </div>
</section>

        <section id="blog-type" class="section center type">
            <div class="container">
                <h3 class="section__title">강의 블로그</h3>
                <p class="section__desc">강의와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__cont">
<?php
    $sql = "SELECT * FROM myBlog ORDER BY blogID DESC LIMIT 3";
    $result = $connect -> query($sql);
?>
  <?php  foreach($result as $blog){ ?>
        <article class="blog">
                            <figuer class="blog__header" aria-hidden="true">
                                <a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../../../php/asset/img/blog/<?=$blog['blogImgFile']?>);"></a>
                            </figuer>
                            <div class="blog__body">
                                <span class="blog__cate"><?=$blog['blogCategory']?></span>
                                <div class="blog__title"><?=$blog['blogTitle']?></div>
                                <div class="blog__desc"><?=$blog['blogContents']?></div>
                                <div class="blog__info">
                                    <span class="author"><?=$blog['blogAuthor']?></span>
                                    <span class="date"><?=date('Y-m-d H:i', $blog['blogRegTime'])?></span>
                                </div>
                            </div>
                        </article>
<?php    }?>
                    </div>
                    <div class="blog__btn">
                            <a href="../blog/blog.php">더보기</a>
                        </div>
                </div>
            </div>
        </section>
        <!-- //blog-type -->

        <section id="quiz-type" class="section center gray">
            <div class="container">
                <h3 class="section__title">퀴즈</h3>
                <p class="section__desc">
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 강의 퀴즈입니다.
                </p>
                <div class="quiz__inner">
                    <div class="quiz__header">
                        <div class="quiz__subject">
                            <label for="quizSubject">과목 선택</label>
                            <select name="quizSubject" id="quizSubject">
                                <option value="javascript">javascript</option>
                                <option value="jquery">jquery</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                            </select>
                        </div>
                    </div>
                    <div class="quiz__body">
                        <div class="title">
                            <span class="quiz__num"></span>. <span class="quiz__ask"></span>
                            <div class="quiz__desc"></div>
                        </div>
                        <div class="contents">
                            <div class="quiz__selects">
                                <label for="select1">
                                    <input class="select" type="radio" id="select1" name="select" value="1">
                                    <span class="choice"></span>
                                </label>
                                <label for="select2">
                                    <input class="selectz" type="radio" id="select2" name="select" value="2">
                                    <span class="choice"></span>
                                </label>
                                <label for="select3">
                                    <input class="select" type="radio" id="select3" name="select" value="3">
                                    <span class="choice"></span>
                                </label>
                                <label for="select4">
                                    <input class="select" type="radio" id="select4" name="select" value="4">
                                    <span class="choice"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__footer">
                        <div class="quiz__btn">
                            <button class="comment pupple none">해설보기</button>
                            <button class="next orange right none ml10">다음문제</button>
                            <button class="confirm pupple right">정답확인</button>
                        </div>
                    </div>
                </div>
                <div class="quzi__more">
                <a href="../quiz/quiz.php">더보기</a>
                </div>
            </div>
            <div class="layer_bg"></div>
                <div class="layer">
                    <h2>문제 풀이</h2>
                    <div><span></span></div>
                    <button class="close"></button>
                </div>
        </section>
        <!-- //quiz -->

        <section id="notice-type" class="section center">
            <div class="container">
                <h3 class="section__title">새로운 소식</h3>
                <p class="section__desc">강의와 관련된 새로운 소식입니다. 다양한 정보를 확인하세요!</p>
                <div class="notice__inner">
                    <?php
    $sql = "SELECT * FROM myBoard ORDER BY boardID DESC LIMIT 4";
    $result = $connect -> query($sql);
    $sql2 = "SELECT * FROM myComment ORDER BY regTime DESC LIMIT 4";
    $result2 = $connect -> query($sql2);
?>
                    <article class="notice">
                        <h4>공지사항</h4>
                        <ul>
                            <?php foreach($result as $board){ ?>
                            <li><a
                                    href="../board/boardView.php?boardID=<?=$board['boardID']?>"><?=$board['boardTitle']?></a><span
                                    class="time"><?=date('Y-m-d H:i', $board['regTime'])?></span></li>
                            <?php } ?>
                        </ul>
                        <a href="../board/board.php" class="more">더보기</a>
                    </article>
                    <article class="notice">
                        <h4>댓글</h4>
                        <ul>
                            <?php foreach($result2 as $comment){ ?>
                            <li><a href="../comment/comment.php"><?=$comment['youText']?></a><span
                                    class="time"><?=date('Y-m-d H:i', $comment['regTime'])?></span></li>
                            <?php } ?>
                        </ul>
                        <a href="../board/board.php" class="more">더보기</a>
                    </article>
                </div>
            </div>
        </section>
        <!-- //notice-type -->
        
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let quizAnswer = "";
        function quizView(view){
            $(".quiz__num").text(view.quizID);
            $(".quiz__ask").text(view.quizAsk);
            $("#select1 + span").text(view.quizChoice1);
            $("#select2 + span").text(view.quizChoice2);
            $("#select3 + span").text(view.quizChoice3);
            $("#select4 + span").text(view.quizChoice4);
            $(".layer > div > span").text(view.quizComment);
            quizAnswer = view.quizAnswer;
        }
        //정답 체크
        function quizCheck(){
            let selectCheck = $(".quiz__selects input:checked").val();
            //정답을 체크 안했으면
            if(selectCheck == null || selectCheck == ''){
                alert("정답을 체크해주세요!!!")
            } else {
                $(".quiz__btn .next").fadeIn();  // <-> fadeOut , fadeToggle
                $(".quiz__selects input").attr("disabled", true);
                //정답을 체크 했으면
                if(selectCheck == quizAnswer){
                //정답
                $(".quiz__selects #select"+quizAnswer).addClass("correct");
                } else {
                //오답
                $(".quiz__selects #select"+selectCheck).addClass("incorrect");
                $(".quiz__selects #select"+quizAnswer).addClass("correct");
                }
            }
        }
        //문제 데이터 가져오기
        function quizData(){
            let quizSubject = $("#quizSubject").val();
            $.ajax({
                url: "../quiz/quizInfo.php",
                method: "POST",
                data: {"quizSubject": quizSubject},
                dataType: "json",
                success: function(data){
                    console.log(data.quiz);
                    quizView(data.quiz);
                },
                error: function(reqeust, status, error){
                    console.log('reqeust' + reqeust);
                    console.log('status' + status);
                    console.log('error' + error);
                }
            })
        }
        quizData();
       //과목 선택
       $("#quizSubject").change(function(){
            $(".quiz__selects input").removeClass("correct");
            $(".quiz__selects input").removeClass("incorrect");
            $(".quiz__btn .next").fadeOut();
            $(".quiz__btn .comment").fadeOut();
            $(".quiz__selects input").prop("checked", false);
            $(".quiz__selects input").attr("disabled", false);
            quizData();
        })

        //정답 확인
        $(".quiz__btn .confirm").click(function(){
            //정답을 클릭했는지 안했는지 판단
            quizCheck();
            $(".quiz__btn .comment").fadeIn();
            // $(".quiz__btn .next").slideDown();   // <-> slideUp , slideToggle
            // $(".quiz__btn .next").show();   // <-> hide() , Toggle()
        });
        //다음 문제 버튼
        $(".quiz__btn .next").click(function(){
            quizData();
            $(".quiz__selects input").prop("checked", false);
            $(".quiz__btn .next").fadeOut();
            $(".quiz__btn .comment").fadeOut();
            $(".quiz__selects input").removeClass("correct");
            $(".quiz__selects input").removeClass("incorrect");
            $(".quiz__selects input").attr("disabled", false);
            $(".quiz__selects input").prop("checked", false);
        });
        let quizHeight = "";
        $(window).scroll(function(){
            let quizHeight = window.scrollY + 250;
        $(".layer").css("top", quizHeight+"px");
        });
        
        $(".comment").click(function(){
            $(".layer").slideDown(300);
            $(".layer_bg").show();
        })
        $(".layer .close").click(function(){
            $(".layer").slideUp(300);
            $(".layer_bg").hide();
        })

    const sliderWrap = document.querySelector(".slider__wrap");
    const sliderImg = document.querySelector(".slider__img");
    const sliderInner = document.querySelector(".slider__inner");
    const slider = document.querySelectorAll(".slider");
    const sliderBtn = document.querySelector(".slider__btn");
    const sliderBtnPrev = document.querySelector(".slider__btn .prev");
    const sliderBtnNext = document.querySelector(".slider__btn .next");
    const sliderDot = document.querySelector(".slider__dot");
    let posInitial = "";
    let dotIndex = "";
    let sliderTimer = "";
    let interval = 2500;

    let currentIndex = 0;
    let sliderWidth = sliderImg.offsetWidth;    //이미지 가로 값
    let sliderLength = slider.length    //이미지 갯수
    let slideFirst = slider[0]; //첫 번째 이미지
    let slideLast = slider[sliderLength - 1]; //마지막 이미지
    let cloneFirst = slideFirst.cloneNode(true);    //첫 번째 이미지 복사
    let cloneLast = slideLast.cloneNode(true);  //마지막 이미지 복사

    //이미지 복사 jQrery = appendTo()/preppendTo
    sliderInner.appendChild(cloneFirst);
    sliderInner.insertBefore(cloneLast, slideFirst);

    //이미지 복사 jQrery = appendTo()/preppendTo
    sliderInner.appendChild(cloneFirst);
    sliderInner.insertBefore(cloneLast, slideFirst);

    function gotoSlider(index){
        sliderInner.classList.add("transition");
        sliderInner.style.left = -sliderWidth * (index + 1) + "px";
        console.log(currentIndex);
        currentIndex = index;
        // console.log(index)
        dotActive();
    }

    function dotInit(){
        for(let i=0; i<sliderLength; i++){
            dotIndex += "<div class='dot'></div>";
        }
        dotIndex += "<div class='play'>play</div>";
        dotIndex += "<div class='stop show'>stop</div>";
        sliderDot.innerHTML = dotIndex;
        sliderDot.firstElementChild.classList.add("active");
    }

    //닷 버튼 활성화
    function dotActive(){
        let dotAll = document.querySelectorAll(".slider__dot .dot");
        dotAll.forEach(dot => { //전체 닷 메뉴 비활성화
            dot.classList.remove("active");
        })
        //현재 보고 있는 이미지 닷 활성화
        if(currentIndex == sliderLength){   //마지막 이미지 왔을 때
            dotAll[0].classList.add("active");
        } else if(currentIndex == -1){     //처음 이미지 왔을 때
            dotAll[sliderLength -1].classList.add("active");
        } else {
            dotAll[currentIndex].classList.add("active");
        }
    }
    
    dotInit();

    function autoPlay(){
        sliderTimer = setInterval(()=>{
            gotoSlider(currentIndex + 1);
        }, interval)
    }
    autoPlay()
    function stopPlay(){
        clearInterval(sliderTimer);
    }

    sliderBtnPrev.addEventListener("click", () => {
        let prevIndex = currentIndex - 1;
        gotoSlider(prevIndex);
    });
    sliderBtnNext.addEventListener("click", () => {
        let nextIndex = currentIndex + 1;
        gotoSlider(nextIndex);
    });
    
    sliderInner.addEventListener("transitionend", () => {
        sliderInner.classList.remove("transition");
        if(currentIndex == -1){
            sliderInner.style.left =  -(sliderLength * sliderWidth) + "px";
        console.log(currentIndex);
        currentIndex = sliderLength -1;
        }
        if(currentIndex == sliderLength){
            sliderInner.style.left = -(1 * sliderWidth) + "px";
        console.log(currentIndex);
        currentIndex = 0;
        }
    });

    sliderInner.addEventListener("mouseenter", ()=>{
        stopPlay();
    })
    sliderInner.addEventListener("mouseleave", ()=>{
        if(document.querySelector(".play").classList.contains("show")){
            stopPlay();
        } else {
            autoPlay();
        }
    })

    document.querySelector(".play").addEventListener("click", () => {
        document.querySelector(".play").classList.remove("show");
        document.querySelector(".stop").classList.add("show");
        autoPlay();
    ;})
    document.querySelector(".stop").addEventListener("click", () => {
        document.querySelector(".play").classList.add("show");
        document.querySelector(".stop").classList.remove("show");
        stopPlay();
    })
</script>
</body>
</html>