<div>
    <?php
        $tmp = 0;
        $sum = 0;
        $arrs = array(2, 5, 6, 9, 2, 5, 6, 12 , 5);
        $countArr = count($arrs);
        for($i = 0; $i < $countArr; $i++){
            $tmp = $arrs[$i];
            $sum += $tmp;
        }
        echo $sum;
    ?>
</div>
<div>
<?php
    $tmp = 1;
    $sum = 1;
    $arrs = array(2, 5, 6, 9, 2, 5, 6, 12 , 5);
    $countArr = count($arrs);
    for($i = 0; $i < $countArr; $i++){
        $tmp = $arrs[$i];
        $sum *= $tmp;
    }
    echo $sum;
?>
</div>
<div>
    <?php
        $tmp = 0;
        $sum = 4;
        $arrs = array(2, 5, 6, 9, 2, 5, 6, 12 , 5);
        $countArr = count($arrs);
        for($i = 0; $i < $countArr; $i++){
            $tmp = $arrs[$i];
            $sum -= $tmp;
        }
        echo $sum;
    ?>
</div>
<div>
    <?php
        $tmp = 0;
        $sum = 4;
        $arrs = array(2, 5, 6, 9, 2, 5, 6, 12 , 5);
        $countArr = count($arrs);
        for($i = 0; $i < $countArr; $i++){
            $tmp = $arrs[$i];
            $sum /= $tmp;
        }
        echo $sum;
    ?>
</div>
<div>
    <?php
        $resultFor = "";
        $tmp = ", ";
        $array = array(12, 5, 200, 10, 125, 60, 90, 345, -123, 100,  -125, 0);
        $countArray = count($array);
        
        for($i = 0; $i < $countArray; $i++){
            if($array[$i] >= 100 && $array[$i] <= 200 && $array[$i] % 5 == 0){
                $end = end($array);
                if($array[$i] != $end){
                    $resultFor.= $array[$i];
                }
                $resultFor.= $array[$i].$tmp;
            }
        }
        echo $resultFor
    ?>
</div>
<div>
    <?php
        $phay = ", ";
        $tmp = 0;
        $sum = 0;
        $show_num_big = "";
        $show_num_small = "";
        $numbers = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
        $countNum = count($numbers);
        for($i = 0; $i < $countNum; $i++){
            $tmp = $numbers[$i];
            $sum += $tmp;
        }
        $resultAve = $sum / $countNum;
        echo $resultAve. $phay;
        for($i = 0; $i < $countNum; $i++){
            if($numbers[$i] > $resultAve){
                $show_num_big.= $numbers[$i];
            }
            
        }
        echo "Số lớn hơn số trung bình: ". $show_num_big. $phay;
        for($i = 0; $i < $countNum; $i++){
            if($numbers[$i] <= $resultAve){
                $show_num_small.= $numbers[$i];
            }
            
        }
        echo "Số bé hơn hoặc bằng số trung bình: ". $show_num_small;
    ?>
</div>
<div>
    <?php
        $show = "";
        $tmp = " - ";
        $n = 50;
        // $array_tmp = array();
        $array_real = "";
        for($i = 1; $i <= $n; $i++){
            switch ($i){
                case ($i < $n):
                    echo $i. $tmp;
                    break;
                case ($i = $n):
                    echo $i;
                    break;
            }
        }
    ?>
</div>