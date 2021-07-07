<?php
    $md5word = "MD5 Result";
    if($_POST['word']) {
        $md5word = substr(md5($_POST['word']), 0, 16);
    }
    //echo "hello world";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MD5 Encrypter</title>
    </head>
    <body>
        <h1>MD5 Encrypter</h1>

        <form method="post">
            <label for="word">Enter Word:</label>
            <input type="text" id="word" name="word"><br><br>
            <p><?php echo $md5word; ?></p>
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>