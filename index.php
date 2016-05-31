<?php
    $string=file_get_contents("articles.json");
    $json = json_decode($string, true);
?>

<head>
    <title>DBLessCMS</title>
    <style>
        
        body{
            background-color: #C7FFE3;    
            font-family: Arial;
            height: 100%;
        }
        
        #background{
            max-width: 650px;
            position: relative;
            margin: 0 auto;
            background-color: #E0FFF0;
            height: 100%;
            padding-top: 5px;
            padding-left: 15px;
            padding-right: 15px;
            border-left: 1px solid grey;
            border-right: 1px solid grey;
        }
        #article h1{
            color: #686966;    
            margin-bottom: 2px;
        }
    </style>
</head>
<body>
    <div id="background">
        <?php
            foreach($json as $i){
                echo "<div id='article'><h1>".$i['name'].":</h1>"."<i>".date('d.m.Y')." [THIS DATE IS NOT CORRECT, it is for demonstration pupuses.]</i><p>".$i['article']."</p><hr><br></div>";
            }
        ?>
    </div>
</body>
</html>
