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
        <section id="board-type" class="section center">
            <div class="container">
                <h3 class="section__title">게시글 작성하기</h3>
                <p class="section__desc">자유 게시판의 게시글을 작성할 수 있습니다.</p>
                <div class="board__modify">
                    <form action="boardWriteSave.php" name="boardWrite" method="post">
                        <fieldset>
                            <legend class="ir_so">게시판 작상 영역</legend>
                            <div>
                                <label for="boardTitle">제목</label>
                                <input type="text" name="boardTitle" id="boardTitle" placeholder="제목을 작성해 주세요.">
                            </div>
                            <div>
                                <label for="boardContents">내용</label>
                                <textarea name="boardContents" id="boardContents" rows="15" placeholder="내용을 작성해 주세요."></textarea>
                            </div>
                            <div class="board-btn">
                                <button type="submit" value="저장하기">저장하기</button>
                            </div>
                        </fieldset>
                    </form>
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