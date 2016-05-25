<html>
    <head>
        <title>DBLessCMS</title>
    </head>
    <body>
    <? php
        $string=file_get_contents("articles.json");
        $faggit=json_decode($string, true);
        $stephan=$faggit['articles'];
        for($stephan as $wauw){
            echo $wauw['name']." ".$wauw['article'];
        }
    ?>
    </body>
</html>