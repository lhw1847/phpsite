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

        $youName = $_POST['youName'];
        $youText = $_POST['youText'];
        $regTime = time();
        // echo $youName,  $youText,  $regTime;
        $sql = "INSERT INTO myComment(youName, youText, regTime) VALUES('$youName', '$youText', '$regTime')";
        $result = $connect -> query($sql);
        if($result){
            echo "INSERT INTO TRUE";
        } else {
            echo "INSERT INTO FALSE";
        }

        header("location: ../comment/comment.php#comment-type")
    ?>
</body>
</html>