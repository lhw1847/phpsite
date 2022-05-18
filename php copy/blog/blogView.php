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
    <title>블로그 보기</title>
    <link rel="stylesheet" href="../asset/css/like.css">
    <style>
        #footer {background: #f5f5f5;}
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

    <!-- main -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="center">
<?php 
    $blogID = $_GET['blogID'];

    $sql = "SELECT * FROM myBlog WHERE blogID = {$blogID}";
    $result = $connect -> query($sql);

    $sql = "UPDATE myBlog SET blogView = blogView + 1 WHERE blogID = {$blogID}";
    $connect -> query($sql);
    
    $blogInfo = $result -> fetch_array(MYSQLI_ASSOC);
?>
          <div class="blog__label" style="background-image:url(../../../php/asset/img/blog/<?=$blogInfo["blogImgFile"]?>);">
              <h3 class="section__title"><?=$blogInfo["blogTitle"]?></h3>
              <div class="">
                  <span class="author"><a href="#"><?=$blogInfo["blogAuthor"]?></a></span>
                  <span class="date"><?=date("Y-m-d H:i:s", $blogInfo["blogRegTime"])?></span>
                  <span classview>조회수: <?=$blogInfo['blogView']?></span><br>
                  <span class="modify"><a href="blogModify.php?blogID=<?=$blogID?>">수정</a></span>
                  <?php
                  if($result){
                  if ($blogInfo['blogAuthor'] == $_SESSION['youName'] || $_SESSION['memberID'] == 1){ ?>
                    <span class="delete"><a href="blogRemove.php?blogID=<?=$blogID?>" onclick="return noticeRemove();">삭제</a></span>
                  <?php  }} ?>
              </div>
          </div>
          <div class="container">
              <div class="blog__laayout">
                  <div class="blog__left"><h3 class="section__title"><?=$blogInfo["blogTitle"]?></h3><?=$blogInfo["blogContents"]?>
                  <div class="like_text"><span>LIKE:<?=$blogInfo['blogLike']?></span></div>
                  <div class='middle-wrapper'>
  <div class='like-wrapper' name="like" onclick="boardLike(<?=$blogInfo['blogID']?>)">
    <a class='like-button #c'>
      <span class='like-icon'>
        <div class='heart-animation-1'></div>
        <div class='heart-animation-2'></div>
      </span>
      Like
    </a>
  </div>
</div>
                </div>
                  <div class="blog__right">
                      <div class="ad">
                      <iframe src="https://ads-partners.coupang.com/widgets.html?id=572092&template=carousel&trackingCode=AF2665590&subId=&width=300&height=300" width="300" height="300" frameborder="0" scrolling="no" referrerpolicy="unsafe-url"></iframe>
                      </div>
                  </div>
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../asset/js/like.js"></script>
    <script>
        function noticeRemove(){
            let notice = confirm("정말 삭제 하시겠습니까?", "");
            return notice;
        }
        function boardLike(blogID){
            console.log(blogID)
            $.ajax({
            type : "POST",           
            url : "likeCheck.php",     
            data : { "blogID" : blogID},     
            success : function(data){ 
                document.querySelector(".like_text").innerHTML = data;
            },
            error : function(request, status, error){
                console.log("request" + request);
                console.log("status" + status);
                console.log("error" + error);
            }
            });
        }

        const heartSvg = document.querySelector('.feed-icon.like-default');
const heartPath = document.querySelector('.feed-icon.like-default path');

heartSvg.addEventListener('click', () => changeClass(heartSvg, heartPath));
function fillHeartRed(heartSvg, heartPath){
	if(heartSvg.classList.contains("like-default")){
		heartSvg.classList.remove("like-default");
		heartSvg.classList.add("like-fill");
		heartPath.setAttribute('d','M34.6 3....')
	}
	else{
	 	heartSvg.classList.remove("like-fill");
	 	heartSvg.classList.add("like-default");
	 	heartPath.setAttribute('d','M34.6 6....')
	 }
}
    </script>
</body>
</html>