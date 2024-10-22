<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black; /* 設定邊框樣式 */
        }
        th, td {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>利用程式來產生陣列</h2>
    <!-- ul>li*3 -->
    <ul>
        <li>以迴圈的方式產生一個九九乘法表</li>
        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
        <li>再以迴圈方式將陣列內容印出</li>
    </ul>

    <?php
    for ($i = 1; $i <= 9; $i++) {
        // echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            # code...
            echo "$i x $j = " . $i * $j . ",";
        }
        echo "<br>";
    }
    ?>

    <h2>老師</h2>
    <?php
    $nine = [];
    for ($i = 1; $i <= 9; $i++) {
        // echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            # code...
            $nine[] = "$i x $j = " . $i * $j;
        }
    }
    // echo "<pre>";
    // print_r($nine);
    // echo "</pre>";

    foreach ($nine as $idx => $n) {
        # code...
        echo $n;
        if ($idx %9==8) {
            # code...
            echo "<br>";
        } else if ( $idx < 80) {
            echo ",";
        } 
    }

    echo "<h2>做成Table</h2>";
    echo "<table>";
    foreach ($nine as $idx => $n) {
        # code...
        if ($idx %9==8) {
            # code...
            echo "<td>$n</td></tr>";
        } else if ($idx %9 == 0){
            echo "<tr><td>$n</td>";
        }else {
            echo "<td>$n</td>";
            
        } 
    }
    echo "</table>";

    echo "<h2>只保留結果</h2>";
    echo "<table>";
    foreach ($nine as $idx => $n) {
        # Explode 2x3=6 to [2x3, 6] 保留6
        $v = explode("=",$n)[1];
        if ($idx %9==8) {
            # code...
            echo "<td>$v</td></tr>";
        } else if ($idx %9 == 0){
            echo "<tr><td>$v</td>";
        }else {
            echo "<td>$v</td>";
            
        } 
        // echo "<pre>";
        // print_r(explode("=",$n));
        // echo "</pre>";
    }
    echo "</table>";
    ?>

    <h2> 弄成 [axb => ab] </h2>
    <?php
        $nine2 = [];
        for ($i=1; $i<=9; $i++) { 
            for ($j=1; $j<=9; $j++) { 
                // 指定 key 值
                $nine2["$i x $j"]=$i*$j;
            }
        }
        // echo "<pre>";
        // print_r($nine2);
        // echo "</pre>";

        $counter=0;
        echo "<table>";
        foreach ($nine2 as $key => $n) {
            $counter++;
            if ($counter==9) {
                echo "<td>".$key." = ".$n."</td></tr>";
                $counter=0;
            } else if ($counter==1){
                echo "<tr><td>".$key. " = ". $n."</td>";
            } else {
                echo "<td>".$key." = ".$n."</td>";
            }
        }
        echo "<table>";
    ?>

<h2> 弄成 [[formula => axb, value = ab]] 的形式 </h2>
    <?php
        $nine3 = [];
        for ($i=1; $i<=9; $i++) { 
            for ($j=1; $j<=9; $j++) { 
                // 指定 key 值
                $nine3[]=['formula' =>"$i x $j",'value' => $i*$j];
            }
        }
        // echo "<pre>";
        // print_r($nine3);
        // echo "</pre>";

        echo "<table>";
        foreach ($nine3 as $idx => $item) {
            if ($idx%9==8) {
                echo "<td>".$item['formula']." = ". $item['value']."</td></tr>";
            } else if ($idx%9==0){
                echo "<tr><td>".$item['formula']." = ". $item['value']."</td>";
            } else {
                echo "<td>".$item['formula']." = ". $item['value']."</td>";
            }
        }
        echo "</table>";
    ?>


    <h2>阿巴阿巴</h2>
    <?php
    // echo "<table border ='1'>";
        // foreach ($num as $x) {
        //     echo "<tr>";
        //     foreach ($num as $y) {
        //         echo "<td>";
        //         $num[$x]=$x*$y;
        //         echo "</td>;"
        //     }
        //     echo "</tr>";
        // }
        // echo "</table>";
    ?>


    <h2>another try</h2>
    <?php
    $number = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    foreach ($number as $num) {
        foreach ($number as $multi) {
            # code...
            echo "$num x $multi = " . $num * $multi . ", ";
        }
        echo "<br>";
        # code...
    }
    ?>
</body>

</html>