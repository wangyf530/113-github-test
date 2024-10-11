<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace
        }
    </style>
</head>
<body>

<h1> - 直角三角形 - </h1>
    <?php
    for ($i=1; $i<=5; $i++){
        for ($j=1; $j<=$i; $j++){
            echo"*";
        }
    echo "<br>";
    }
    ?>

    <h1> - 倒直角三角形 - </h1>
    <?php
    for ($i=1; $i<=5; $i++){
        for ($j=5; $j>=$i; $j--){
            echo"*";
        }
    echo "<br>";
    }

    for ($i=5; $i>0; $i--){
        for ($j=$i; $j>0; $j--){
            echo"*";
        }
    echo "<br>";
    }
    ?>

    <h1> - 正三角形 - </h1>
    <?php
    for ($i=1; $i<=5; $i++){
        for ($j=1; $j<=(5-$i); $j++){
            echo "&nbsp;";
        }
        for ($k=1; $k<=(2*$i-1); $k++){
            echo "*";
        }
        echo "<br>";
    }

    for ($i=0; $i<5; $i++){
        for ($k=0; $k<(4-$i); $k++){
            echo "&nbsp";
        }
        for ($j=0; $j<(2*$i+1); $j++) {
            echo "*";
        }
        echo "<br>";
    }
    
    ?>
    <h3> 第二種解法(參照菱形) </h3>

    <?php
    for ($i=1; $i<=5; $i++){
        for ($j=1; $j<=(4+$i);$j++) {
            if($j<=(5-$i)){
                echo "&nbsp";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }
    ?>

    <h1> - 倒正三角形 - </h1>

    <?php
    
    for ($i=0; $i<5; $i++){
        for ($k=0; $k<$i; $k++){
            echo "&nbsp";
        }
        for ($j=0; $j<(2*(4-$i)+1); $j++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i=4; $i>=0; $i--){
        for ($k=0; $k<(4-$i); $k++){
            echo "&nbsp";
        }
        for ($j=0; $j<(2*$i+1); $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo"<h3> 第二種解法(參照菱形) </h3>";
    $line=5;
    for ($i=0; $i<$line; $i++){
        for ($j=0; $j<(2*$line)-1; $j++){
            if ($i>$j){
                echo "&nbsp";
            } else if ($j<(2*$line)-$i-1){
                echo "*";
            } else {
                echo "&nbsp";
            }
        }
        echo "<br>";
    }
    ?>

    <h1> - 菱形 - </h1>
    <?php
    $n=7;
    $nn=floor($n/2);
    $temp=0;
    for ($i=0; $i<$n; $i++) {
        if($i > $nn) { //$i=5,6,7,8
            /* $t=$i-4;
            $i              => 5,6,7,8
            $i-4            => 1,2,3,4
            2($i-4)         => 2,4,6,8
            2[$i-2($i-4)]+1 => 7,5,3,1 
            簡化後 17-2$i*/
            for ($k=0; $k<($i-$nn); $k++){
                echo "&nbsp";
            }
            for ($j=0; $j<2*($i-(2*($i-$nn)))+1; $j++) {
                echo "*";
            }
            echo "<br>";

        } else { //$i=5,6,7,8
            for ($k=0; $k<($nn-$i); $k++){
                echo "&nbsp";
            }
            for ($j=0; $j<(2*$i+1); $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    echo "<h3>精簡後</h3>";
    $n=7;
    $nn=floor($n/2);
    for($i=0; $i<$n; $i++){
        if($i>floor($n/2)){
            $k1 = $i-floor($n/2);
            $j1 = 2*($i-(2*($i-floor($n/2))))+1;
        } else {
            $k1 = floor($n/2)-$i;
            $j1 = 2*$i+1;
        }
        for ($k=0; $k<$k1; $k++){
            echo "&nbsp";
        }
        for ($j=0; $j<$j1; $j++){
            echo "*";
        }
        echo "<br>";
    }
    
    ?>

    <h4>參考答案</h4>

    <?php
    $temp=0;
    for ($i=1; $i<=9; $i++){
        if ($i>5){
            $temp--;
        }else {
            $temp=$i;
        }
        for ($j=1; $j<=(4+$temp);$j++) {
            if($j<=(5-$temp)){
                echo "&nbsp";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }
    ?>

    <h1> - 矩形 - </h1>
    <?php
    for ($i=1;$i<=7;$i++){
        if ($i==1 || $i%7==0){
            echo "*******";
        } else {
            echo "*&nbsp&nbsp&nbsp&nbsp&nbsp*";
        }
        echo "<br>";
    }
    ?>


    <h1> - 矩形2 - </h1>
    <?php
    for ($i=1;$i<=7;$i++){
        if ($i==1 || $i%7==0){
            echo "*******";
        } else {
            echo "*&nbsp&nbsp&nbsp&nbsp&nbsp*";
        }
        echo "<br>";
    }
    ?>


</body>
</html>