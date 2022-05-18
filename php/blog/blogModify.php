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
    <title>게시글 작성</title>
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
        <section id="blog-type" class="section center">
            <div class="container">
                <h3 class="section__title">게시글 수정하기</h3>
                <p class="section__desc">음식과 관련된 블로그를 수정할 수 있습니다.</p>
                <div class="blog__inner">
                    <div class="blog__write">
                        <form action="blogModifySave.php" name="blogModify" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <legend class="ir_so">블로그 게시글 수정 영역</legend>
<?php
    $blogID = $_GET['blogID'];

    $sql = "SELECT * FROM myBlog WHERE blogID = {$blogID}";
    $result = $connect -> query($sql);
    $blogInfo = $result -> fetch_array(MYSQLI_ASSOC);
    // echo "<pre>";
    // var_dump($("option[value=$blogInfo{'blogCategory'}]"));
    // echo "</pre>";
// if($blogInfo{"blogCategory"} == $("option[value=$blogInfo{'blogCategory'}]"){
//     $("option").prop("selected", true);
//     }

// const $selected = &("option").attr( 'class' );
//     echo "<pre>";
//     var_dump($selected);
//     echo "</pre>";
// function select(){
//     if($blogInfo{"blogCategory"} == $selected{
//         $("option").prop("selected", true);
//         }
// }
// select();
?>
        <div>
    <label for="blogCate">카테고리</label>
    <select name="blogCate" id="blogCate" value="<?=$blogInfo{'blogCategory'}?>">
        <option value="korea" <?php if($blogInfo['blogCategory'] == "korea") echo "SELECTED"?>>korea</option>
        <option value="china" <?php if($blogInfo['blogCategory'] == "china") echo "SELECTED"?>>china</option>
        <option value="japan" <?php if($blogInfo['blogCategory'] == "japan") echo "SELECTED"?>>japan</option>
    </select>
    <div style='display:none;'>
        <label for='blogID'>번호</label>
        <input type='text' name='blogID' id='blogID' value="<?=$blogInfo['blogID']?>">
    </div>
    <div>
        <label for="blogTitle">제목</label>
        <input type="text" name="blogTitle" id="blogTitle" placeholder="제목을 넣어주세요" required value="<?=$blogInfo["blogTitle"]?>">
    </div>
    <div>
        <label for="blogContents">내용</label>
        <textarea name="blogContents" id="blogContents" placeholder="내용을 넣어주세요!" required><?=$blogInfo["blogContents"]?></textarea>
        <div style="background: url(../asset/img/blog/<?=$blogInfo['blogImgFile']?>) center / cover; height: 800px; margin-bottom: 40px;"></div>
    </div>
    <div>
        <label for="blogFile">파일</label>
        <input type="file" name="blogFile" value="<?=$blogInfo{'blogImgFile'}?>" accept="image/jpeg, image/png, image/jpg, image/png, image/gif" id="blogFile" placeholder="사진을 넣어주세요! 사진은 jpg, gif, png 파일만 지원이 됩니다.">
    </div>
    <div>
        <label for='youPass'>비밀번호</label>
        <input type='password' name='youPass' id='youPass' placeholder='로그인 비밀번호를 입력해주세요!!' autocomplete='off' required>
    </div>
    <button type="submit" value="저장하기" >저장하기</button>
                            </fieldset>
                        </form>
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
<script>
</script>
</body>
</html>