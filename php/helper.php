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
            0 => '',
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            4.78 => 'four',
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
            21 => 'twentyone',
            22 => 'twentytwo',
            23 => 'twentythree',
            24 => 'twentyfour',
            25 => 'twentyfive',
            26 => 'twentysix',
            27 => 'twentyseven',
            28 => 'twentyeight',
            29 => 'twentynine',
            30 => 'thirty',
            31 => 'thirtyone',
            32 => 'thirtytwo',
            33 => 'thirtythree',
            34 => 'thirtyfour',
            35 => 'thirtyfive',
            36 => 'thirtysix',
            37 => 'thirtyseven',
            38 => 'thirtyeight',
            39 => 'thirtynine',
            40 => 'forty',
            41 => 'fortyone',
            42 => 'fortytwo',
            43 => 'fortythree',
            44 => 'fortyfour',
            45 => 'fortyfive',
            46 => 'fortysix',
            47 => 'fortyseven',
            48 => 'fortyeight',
            49 => 'fortynine',
            50 => 'fifty',
            51 => 'fiftyone',
            52 => 'fiftytwo',
            53 => 'fiftythree',
            54 => 'fiftyfour',
            55 => 'fiftyfive',
            56 => 'fiftysix',
            57 => 'fiftyseven',
            58 => 'fiftyeight',
            59 => 'fiftynine',
            60 => 'sixty',
            61 => 'sixtyyone',
            62 => 'sixtytwo',
            63 => 'sixtythree',
            64 => 'sixtyfour',
            65 => 'sixtyfive',
            66 => 'sixtysix',
            67 => 'sixtyseven',
            68 => 'sixtyeight',
            69 => 'sixtynine',
            70 => 'seventy',
            71 => 'seventyone',
            72 => 'seventytwo',
            73 => 'seventythree',
            74 => 'seventyfour',
            75 => 'seventyfive',
            76 => 'seventysix',
            77 => 'seventyseven',
            78 => 'seventyeight',
            79 => 'seventynine',
            80 => 'eighty',
            81 => 'eightyone',
            82 => 'eightytwo',
            83 => 'eightyhree',
            84 => 'eightyfour',
            85 => 'eightyfive',
            86 => 'eightysix',
            87 => 'eightyseven',
            88 => 'eightyeight',
            89 => 'eightynine',
            6061 => 6061,
            6063 => 6063,
            "T5" => "T5",
            "T6" => "T6"
        );
        $num = str_replace('"', "", $num);
        $num = str_replace(' ', "", $num);
        $num = str_replace('mm', "", $num);
        $num = str_replace('in', "", $num);
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