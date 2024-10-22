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
    <h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>
    <hr>
<?php

    $a=[1,2,3,4,5];
    $key=array_search('8',$a);
    echo $key;

    // 1-38 的隨機數字
    $result=[];
    while(count($result)<6){
        $num=rand(1,38);
        // 如果不在Array裡面
        if (!in_array($num,$result,true)){
            $result[]=$num;
        }
        // 極其精簡版
        // $nums[]=rand(1,38);
        // $nums=array_unique($nums);
    }
    
    // 下面是用 for loop 的(好弱智hhh)
    // for ($i=0; $i<6; $i++) { 
    //     $num=rand(1,38);
    //     if (in_array($num,$ball)){
    //         $i--;
    //     } else {
    //         $ball[]=$num;
    //     }
    // }

    // echo "<pre>";
    // print_r($ball);
    // echo "</pre>";
    foreach ($result as $n) {
        echo "$n, ";
    }
    echo "<br>";
    sort($result);
    foreach ($result as $n) {
        echo "$n, ";
    }

    echo "<hr>";

    echo join(", ", $result);

?>
    
    <h2>五百年內的閏年</h2>
    <ul>
        <li>請依照閏年公式找出五百年內的閏年</li>
        <li>使用陣列來儲存閏年</li>
        <li>使用迴圈來印出閏年</li>
    </ul>
<?php
    $now = 2024;
    $yr = 2024;
    $leap = [];
    while ($yr < $now+500) {
        if (($yr%4 == 0 && $yr%100 != 0) || ($yr%400 == 0)) {
            $leap[]=$yr;
        }
        $yr++;
    }
    // echo "<pre>";
    // print_r($leap);
    // echo "</pre>";

    foreach ($leap as $year) {
        echo "$year, ";
    }
    echo "<hr>";
    echo(join(", ", $leap));
?>

<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>

<?php
    $heavenly=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
    $earthly=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
    $result=[];
    
    for ($i=0; $i<60; $i++) {
        // 天干排序 - 每10個輪迴 
        $first=$i%count($heavenly);
        // 地支排序 - 每12個輪迴 
        $second=$i%count($earthly);
        // 把天干跟地支配對
        $result[]=$heavenly[$first].$earthly[$second];
    }
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
    echo "<table>";
    foreach ($result as $key => $value) {
        if ($key %10==0) { 
            echo "<tr><td>". $value . "</td>";
        } else if ($key%10==9) {
            echo "<td>". $value . "</td></tr>";
        } else {
            echo "<td>". $value . "</td>";
        }
    }
    echo "</table>";


    $n=2025;
    echo "$n 是 ".$result[($n-4)%60]."年";
?>

<h3>老師教法</h3>
<?php
    $sky=["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
    $land=["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];
    $skyLand=[];

    for ($i=0; $i<6; $i++) { 
        for ($j=0; $j<10; $j++) { 
            $idx=10*$i+$j;
            $landIdx=$idx%12;
            $skyLand[]=$sky[$j].$land[$landIdx];
        }
    }
    // echo "<pre>";
    // print_r($skyLand);
    // echo "</pre>";

    echo "<table>";
    foreach ($skyLand as $key => $value) {
        if ($key %10==0) { 
            echo "<tr><td>". $value . "</td>";
        } else if ($key%10==9) {
            echo "<td>". $value . "</td></tr>";
        } else {
            echo "<td>". $value . "</td>";
        }
    }

    echo "</table>";
?>

<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>
<ul>
    <li>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</li>
</ul>
<?php
    $a=[2,4,6,1,8];
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    $n=count($a)-1;
    for ($i=0; $i <count($a)/2; $i++) { 
        $temp=$a[$i];
        echo "第 $i 要跟第 $n 換: ";
        echo "a[$i] 是 $a[$i], a[$n] 是 $a[$n], ";
        $a[$i]=$a[$n];
        echo "現在 a[".$i."]. 是 ".$a[$i].", ";
        $a[$n]=$temp;
        echo "a[".$n."] 是 ".$a[$n];
        $n--;
        echo "<br>";
    }
    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>

    <h3>老師</h3>
<?php
    // floor 無條件捨去 ceil 無條件進位 round 四捨五入
    $a=[2,4,6,1,8,5];
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    // PHP自帶函式
    echo "<pre>";
    print_r(array_reverse($a));
    echo "</pre>";
    // 用 for loop
    for ($i=0; $i <floor(count($a)/2); $i++) { 
        $temp=$a[$i];  
        $a[$i]=$a[count($a)-1-$i];
        $a[count($a)-1-$i]=$temp;
    }
    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>

</body>
</html>