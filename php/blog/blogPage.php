<?php
    $sql = "SELECT count(blogID) FROM myBlog";
    $result = $connect -> query($sql);
    $blogCount = $result -> fetch_array(MYSQLI_ASSOC);
    $blogCount = $blogCount['count(blogID)'];
    // echo "<pre>";
    // var_dump($blogCount);
    // echo "</pre>";
    //echo $blogCount;
    // 페이지 넘버 갯수
    // 300/10 = 30
    // 301/10 = 31
    // 306/10 = 31
    // 309/10 = 31
    //총 페이지 갯수
    $blogCount = ceil($blogCount/$pageView);
    //1 2 3 4 5 6 7 8 9 10 11 12 13 14......

    //현재 페이지를 기준으로 보여주고 싶은 개수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    //처음 페이지 초기화
    if($startPage < 1)$startPage = 1;
    //마지막 페이지 초기화
    if($endPage >= $blogCount)$endPage = $blogCount;
    //처음으로
    if($page != 1){
        echo "<li><a href='blog.php?page=1'>처음으로</a></li>";
    }
    //이전 페이지
    if($page != 1){
        $prePage = $page - 1;
        echo "<li><a href='blog.php?page={$prePage}'>이전</a></li>";
    }
    //페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page){
            $active = "active";
        }
        echo "<li class='{$active}'><a href='blog.php?page={$i}'>{$i}</a></li>";
    }
    //다음 페이지
    if($page != $endPage){
        $nextPage = $page + 1;
        echo "<li><a href='blog.php?page={$nextPage}'>다음</a></li>";   
    }
    //마지막 페이지

    if($page != $endPage){
        echo "<li><a href='blog.php?page={$blogCount}'>마지막으로</a></li>";
    }
?>