<html>
    <head>
        <body>
            <h1>Prime numbers</h1>
            <?php
                function p($n){
                    if($n <= 1){
                        return false;
                    }
                    for($i = 2;$i <= sqrt($n);$i++){
                        if($n % $i == 0){
                            return false;
                        }
                    }
                    return true;
                }
                for($i = 1;$i <= 50;$i++){
                    if(p($i)){
                        echo $i." ";
                    }
                }  

                $s = "hello im op";
                $l = strlen($s);
                $r = strrev($s);
                $wc = str_word_count($s);
                $ss = "op";

                echo "length = $l";
                echo "<br>";
                echo "word count = $wc";
                echo "<br>";
                echo "reverse = $r";
                echo "<br>";
                if(strpos($s,$ss) !== false){
                    echo "specific string is found";
                }else {
                    echo "specific string is not found";
                }
            ?>
        </body>
    </head>
</html>
    