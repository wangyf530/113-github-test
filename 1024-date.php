<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time
    </title>
</head>
<body>
    <h3>給定兩個日期，計算中間間隔天數</h3>
<?php
// 要扣掉30這一天
// 預設是從0:00開始算
    $d1 = date_create("2024-10-01");
    echo date_format($d1,"Y/m/d")."<br>";
    $d2 = date_create("2024-10-30");
    echo date_format($d2,"Y/m/d")."<br>";
    $diff = date_diff($d1,$d2);
    echo $diff->format("%R%a days")."<br>";

    echo "<h4>老師內容</h4>";
    echo date("Y/m/d H:i:s")."<br>";

    $start = "2024-10-01";
    $end = "2024-10-30";
    $startTime = strtotime($start);
    echo '開始時間：'.$startTime."<br>";
    $endTime = strtotime($end);
    echo '結束時間：'.$endTime."<br>";
    $gap = $endTime - $startTime;
    echo '差距秒：'.$gap."<br>";
    // $minutes = $gap/60;
    // echo '差距分：'.$minutes."<br>";
    // $hours = $minutes/60;
    // echo '差距時：'.$hours."<br>";
    // $days = $hours/24;
    $days = $gap/(60*60*24);
    echo '差距天：'.$days."<br>";
?>
<hr>
    <h3>計算距離自己下一次生日還有幾天</h3>
<?php
    $start = date("Y-m-d");
    $end = "2025-08-14";
    $startTime = strtotime($start);
    echo "今天日期：".$startTime."<br>";
    $endTime = strtotime($end);
    echo "下次生日：".$endTime."<br>";
    $gap = $endTime - $startTime;
    echo '差距秒：'.$gap."<br>";
    $days = $gap/(60*60*24);
    echo '距離下次生日還有：'.$days."<br>";
?>
<hr>
<h3>利用date()函式的格式化參數，完成以下的日期格式呈現</h3>
<ul>
    <li>2021/10/05</li>
    <li>10月5日 Tuesday</li>
    <li>2021-10-5 12:9:5</li>
    <li>2021-10-5 12:09:05</li>
    <li>今天是西元2021年10月5日 上班日(或假日)</li>
</ul>
<?php

?>
<hr>
<h3>利用迴圈來計算連續五個周一的日期</h3>
<h4>例: <br> 2021-10-04 星期一
<br> 2021-10-11 星期一
<br> 2021-10-18 星期一
<br> 2021-10-25 星期一
<br> 2021-11-01 星期一 </h4>


</body>
</html>