<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그 글쓰기</title>
    <!-- style -->
    <?php include "../include/style.php";?>
    <!-- //style -->
    <style>
        .footer {
            background: #F5F5F5;
        }
    </style>
</head>
<body>
    <!-- skip -->
    <?php include "../include/skip.php";?>
    <!-- //skip -->
    <!-- header -->
    <?php include "../include/header.php";?>
    <!-- //header -->
    <!-- main -->
    <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center">
        <div class="container">
            <h3 class="section__title">블로그 검색 결과</h3>
            <p class="section__desc">축구와 관련된 블로그입니다. 다양한 정보를 확인하세요!</p>
            <div class="blog__inner">
                <div class="blog__search">
                    <form action="blogSearch.php" method="GET">
                        <fieldset>
                            <legend class="ir_so">검색 영역</legend>
                            <input type="serach" name="blogSearch" id="blogSearch" class="search" placeholder="검색어를 입력해주세요!" required>
                            <label for="blogSearch" class="ir_so"></label>
                            <button class="button">검색</button>
                        </fieldset>
                    </form>
                </div>
                <div class="blog__btn">
                    <a href="blogWrite.php">글쓰기</a>
                    <?php
    function msg($alert){
        echo "<p class='result'>총 ".$alert." 건이 검색되었습니다.</p>";
    }
    $searchKeyword = $_GET['blogSearch'];
    $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
    $sql = "SELECT b.blogID, b.blogTitle, b.blogContents, m.youName, b.blogRegTime, b.blogImgFile, b.blogView FROM myBlog b JOIN myMember m ON(b.memberID = m.memberID) WHERE b.blogTitle LIKE '%{$searchKeyword}%' ORDER BY blogID DESC";
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        msg($count);
    }
?>
                </div>
                <div class="blog__cont">
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }
    //게시판에 불러올 갯수
    $PageView = 5;
    $PageLimit = ($PageView * $page) - $PageView;
    $sql = "SELECT b.blogID, b.blogTitle, b.blogCategory, b.blogContents, m.youName, b.blogRegTime, b.blogImgFile, b.blogView FROM myBlog b JOIN myMember m ON(b.memberID = m.memberID) WHERE b.blogTitle LIKE '%{$searchKeyword}%' ORDER BY blogID DESC LIMIT {$PageLimit},{$PageView}";
    $result = $connect -> query($sql);
?>
           <?php foreach($result as $blog){ ?>
                <article class="blog">
                <figuer class="blog__header">
                <a href="blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../asset/img/blog/<?=$blog['blogImgFile']?>)"></a>
                </figuer>
                <div class="blog__body">
                <span class="blog__cate"><?=$blog['blogCategory']?></span>
                <div class="blog__title"><a href="blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogTitle']?></a></div>
                <div class="blog__desc"><a href="blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogContents']?></a></div>
                <div class="blog__info">
                    <span class="author"><a href="#"><?=$blog['blogAuthor']?></a></span>
                    <span class="date"><?=date('Y-m-d H:i:s', $blog['blogRegTime'])?></span>
                    <?php if($blog['youName'] == $_SESSION['youName']){ ?>
                    <span class="modify"><a href="blogModify.php?blogID=<?=$blog['blogID']?>">수정</a></span>
                    <span class="delete"><a href="blogRemove.php?blogID=<?=$blog['blogID']?>" onclick="return noticeRemove();">삭제</a></span>
                    <?php  } ?>
                </div>
                </div>
                </article>
        <?php } ?>
                </div>
                <div class="board__pages">
                    <ul>
                        <?php
                            //현재 페이지를 기준으로 보여주고싶은 갯수
                            $blogCount = ceil($count/$PageView);
                            // 현재 페이지를 기준으로 보여주고 싶은 갯수
                            $pageCurrent = 2;
                            $startPage = $page - $pageCurrent;
                            $endPage = $page + $pageCurrent;
                            // 처음 페이지 초기화
                            if($startPage < 1) $startPage = 1;
                            // 마지막 페이지 초기화
                            if($endPage >= $blogCount) $endPage = $blogCount;
                            // 이전 페이지
                            if($page != 1){
                                $prevPage = $page -1;
                                echo "<li><a href='blogSearch.php?page={$prevPage}&searchKeyword={$searchKeyword}'>이전</a></li>";
                            }
                            // 처음으로 페이지
                            if($page != 1){
                                echo "<li><a href='blogSearch.php?page=1&searchKeyword={$searchKeyword}'>처음으로</a></li>";
                            }
                            // 페이지 넘버 표시
                            for($i=$startPage; $i<=$endPage; $i++){
                                $active = "";
                                if($i == $page){
                                    $active = "active";
                                }
                                echo "<li class='{$active}'><a href='blogSearch.php?page={$i}&searchKeyword={$searchKeyword}'>{$i}</a></li>";
                            }
                            //다음 페이지
                            //$page != $endPage
                            if($page < $endPage){
                                $nextPage = $page +1;
                                echo "<li><a href='blogSearch.php?page={$nextPage}&searchKeyword={$searchKeyword}'>다음</a></li>";
                            }
                            // 마지막 페이지
                            //$page != $endPage
                            if($page < $endPage){
                                echo "<li><a href='blogSearch.php?page={$blogCount}&searchKeyword={$searchKeyword}'>마지막으로</a></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
    <?php include "../include/footer.php";?><!-- //footer -->
    <script>
        function noticeRemove(){
            let notice = confirm("정말 삭제하시겠습니까?", "");
            return notice;
        }
    </script>
</body>
</html>