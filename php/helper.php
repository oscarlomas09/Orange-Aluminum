<?php 
    function getBaseUrl(){
        // output: /myproject/index.php
        $currentPath = $_SERVER['PHP_SELF']; 

        // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
        $pathInfo = pathinfo($currentPath); 

        // output: localhost
        $hostName = $_SERVER['HTTP_HOST']; 

        // output: http://
        $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';

        // return: http://localhost/myproject/
        return $protocol.$hostName."/Orange-Aluminum/";
    }
    define('BASE_URL', getBaseUrl());


    function num2text($num){
        $dictionary  = array(
            0 => 'zero',
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
            6 => 'six',
            7 => 'seven',
            8 => 'eight',
            9 => 'nine',
            10 => 'ten',
            11 => 'eleven',
            12 => 'twelve',
            13 => 'thirteen',
            14 => 'fourteen',
            15 => 'fifteen',
            16 => 'sixteen',
            17 => 'seventeen',
            18 => 'eighteen',
            19 => 'nineteen',
            20 => 'twenty',
        );
        $num = str_replace('"', "", $num);
        $arr = preg_split("/[\s,-\/]+/", $num);
        $text = "";
        for($k = 0; $k < count($arr); $k++){
            if($k > 0){
                if(intval($arr[$k]) == 4 && intval($arr[$k-1]) == 1){
                    $text .= "quarter";
                    continue;
                }
                else if(intval($arr[$k]) == 2 && intval($arr[$k-1]) == 1){
                    $text .= "half";
                    continue;
                }
            }
            $text .= $dictionary[intval($arr[$k])]."-";
        }
        return rtrim($text, "-");
    }
?>