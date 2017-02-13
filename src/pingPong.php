<?php
    class Pong
    {
        function pingify($something) {
            $newArray = array();
            for($x=1;$x<=$something;$x++){
                if($x %15 ==0){
                    array_push($newArray, "Ping-Pong");
                }else if($x %3 ==0){
                    array_push($newArray, "Ping");
                }else if($x %5 ==0){
                    array_push($newArray, "Pong");
                }else{
                    array_push($newArray, $x);
                }
            }
            return $newArray;
        }
    }

?>
