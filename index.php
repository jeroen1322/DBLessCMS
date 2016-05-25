<html>
    <head>
        <title>DBLessCMS</title>
    </head>
    <body>
    <? php
        $string=file_get_contents("articles.json");
        $text=json_decode($string, true);
        $article=$text['articles'];
        for($text as $wauw){
            echo $wauw['name']." ".$wauw['article'];
        }
    ?>
    </body>
</html>
