<html>
<head>
    <title>PHP_Counter</title>
    <style type="text/css">
        @font-face {
            	font-family: 'DESG7';
            	src: local('DSEG7Classic-Light'), 
            	     url('DSEG7-Classic/DSEG7Classic-Light.woff') format('woff'), 
            	     url('DSEG7-Classic/DSEG7Classic-Light.ttf')  format('truetype'); 
            }
        body{
            width: 150px;
            overflow: hidden;
            background-color: black;
            margin: 0px;
        }
        p{
            font-family: DESG7;
            height: 25px;
            color: white;
            margin: 5px;
            text-align: center;
        }
        span{
            padding: 3px;
            margin: -2px;
            border: 1px;
            border-color: initial;
            border-style: inset;
            font-size: small;
        }
    </style>
</head>
<body>
    <p>
    <?php
        $cnt = file_get_contents("counter.txt");
        $cnt_array =str_split($cnt);
        foreach ( $cnt_array as $cnt_word ) {
            echo "<span>" . $cnt_word . "</span>"."\n";
        }
        $cnt++;
        file_put_contents("counter.txt", $cnt);
    ?>

    </p>
</body>
</html>