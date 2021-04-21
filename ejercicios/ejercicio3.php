<?php

echo "* Del 1 al 10 : ";

    for ($i = 1; $i <= 10; $i++) {
        echo " $i ," ;
}
?><br>
<?php
echo "* Del 1 al 10 pero de 2 en 2 :";

    for ($i = 1; $i <= 10; $i=$i+2) { 
        
        echo " $i ," ;
}
?><br>
<?php
echo "* Del 1 y al 100 pero de 10 en 10 :";
    for ($i = 1; $i <= 100; $i=$i+10) { 
        
        echo " $i ," ;
}
?><br>
<?php
echo "* Del 10 al 1 :";
    for($i=10;$i>0;$i--){
    
        echo " $i ," ;
    }
?><br>
<?php
echo "* Que inicie en 1 y vaya duplicando el valor sin pasarse de 10000 (1,2,4,8,….) :";
    for($i=1;$i<=10000;$i=$i+$i){
    
        echo " $i ," ;
    }
?><br>
//<?php
//echo "* Que empiece en 100 y vaya restando 1, después 2, después 3 y asi siguiendo hasta volverse negativo (100,99,97,94….) :";
//    for($i=100;$i>0;$i--){
//        echo " $i ," ;
//    
//        if($i==70){
//            for($i=70;$i>0;$i=$i-2){
//            echo " $i ," ;
//    }}
//        ($i==40){
//            for($i=40;$i>0;$i=$i-3){
//            echo " $i ," ;
//        }
//        }
//    }
?><br>
<?php
    