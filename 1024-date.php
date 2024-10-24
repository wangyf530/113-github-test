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

    $weekString = [
    "Monday" =>['min' => "一", 'short' => '週一', 
    'fulltext' => "星期一"],
    "Tudaydy" => ['min' => '二', 'short' => '週二', 
    'fulltext' => "星期二"],
    "Wednesday" => ['min' => '三', 'short' => '週三', 
    'fulltext' => "星期三"],
    "Thursday" => ['min' => '四', 'short' => '週四', 
    'fulltext' => "星期四"],
    "Friday" => ['min' => '五', 'short' => '週五', 
    'fulltext' => "星期五"],
    "Saturday" => ['min' => '六', 'short' => '週六', 
    'fulltext' => "星期六"],
    "Sunday" => ['min' => '日', 'short' => '週日', 
    'fulltext' => "星期日"]];
    
    // d有零 -> 字串，j沒有零 -> 數字
    // 2021/10/05
    echo date("Y/m/d")."<br>";
    // 10月5日 Tuesday
    echo date("m月d日 l")."<br>";
    // 2021-10-5 12:9:5
    echo date("Y-m-j G:i:s")."<br>";
    // 2021-10-5 12:09:05
    echo date("Y-m-j")."<br>";
    // 
    echo date("m月d日 ").$weekString[date("l")]['min'];
    echo "<br>";
    echo date("m月d日 ").$weekString[date("l")]['short'];
    echo "<br>";
    echo date("m月d日 ").$weekString[date("l")]['fulltext'];
    echo "<br>";
    // 今天是西元2021年10月5日 上班日(或假日)
    echo "今天是西元".date("Y年m月d日 ");
    echo (date("N")<6)?"上班日":"假日";
?>
<hr>
<h3>利用迴圈來計算連續五個周一的日期</h3>
<h4>例: <br> 2021-10-04 星期一
<br> 2021-10-11 星期一
<br> 2021-10-18 星期一
<br> 2021-10-25 星期一
<br> 2021-11-01 星期一 </h4>

<?php
    for ($i=0; $i<5; $i++) { 
        $timestamp = strtotime("+ $i weeks".date("Y-m-d"));
        echo date("Y-m-d",$timestamp);
        echo "&nbsp";
        echo $weekString[date("l")]['fulltext'];
        echo "<br>";
    }
?>

<hr>
<h3>線上月曆製作</h3>
<ul>
    <li>以表格方式呈現整個月份的日期</li>
    <li>可以在特殊日期中顯示資訊(假日或紀念日)</li>
    <li>嘗試以block box或flex box的方式製作月曆</li>
</ul>
<style>
    table {
        border-collapse:collapse;
    }
    td,th{
        padding:5px 10px;
        text-align: center;
        border:1px solid #999;
    }

    .holiday{
        background: pink;
        color: red;
    }

    .grey-text{
        color:#999;
    }

    .today{
        background: blue;
        color: white;
        font-weight: bolder;
    }
</style>
<table>
<?php
    //$date = strtotime("2024-10");
    // 當月第一天
    $firstDay = date("Y-m-1");
    $firstDayTime = strtotime($firstDay);
    // 當月第一天是週幾
    $firstDayWeek= date("w",$firstDayTime);
    // $firstDayWeek = date("w",strtotime(date("Y-m-1")));
    
    // 印月份 
    $month = date('F',$firstDayTime);
    echo "<tr> <td colspan=8>".$month."</td>";
    // 印週幾
    $day=[' ','日','一','二','三','四','五','六'];
    echo "<tr>";
    foreach ($day as $key) {
        if ($key=='日' || $key =='六'){
            echo "<td class='holiday'> $key </td>";
        } else {
        echo "<td> $key </td>";
        }
    }
    echo "</tr>";

    // try
    // $d = strtotime("2024-10-41");
    // echo date("md/t",$d);

    // 印日期
    for ($i=0; $i<6; $i++) { 
        echo "<tr>";
        // 第幾週
        echo "<td>".($i+1)."</td>";
        // for ($j=0; $j<7; $j++) { 
        //     echo "<td>";
        //     $dayNum = $i*7+$j+1-$firstDayWeek;
        //     // 當月天數
        //     $dayTotal = date("t");
        //     // 確認是否是閏年的二月
        //     if (date("n"==2)) {
        //         $dayTotal+=date("L");
        //     }
        //     // 印日期 需同時滿足1-31
        //     if ($dayNum>0 && $dayNum <= $dayTotal){
        //         echo $dayNum;
        //     }
        //     echo "</td>";
        // }

        for ($j=0; $j<7; $j++) { 
            // if($j == 0 || $j == 6){
            //     echo "<td class = 'holiday'>";
            // } else {
            //     echo "<td>";
            // }
            $cell = $i*7 + $j - $firstDayWeek;
            $theDayTime = strtotime("$cell days".$firstDay);
            // 印出的日期月份是否與現在的月份相同
            $theMonth = date("m",$theDayTime)==date("m")?"":"grey-text";
            // 印出的日期月份是否是今天
            $isToday = date("Y-m-d",$theDayTime)==date("Y-m-d")?"today":"";
            // 印出的日期月份是否是周末
            $isHoliday = ($w == 0 || $w == 6)?"holiday":"";
            $w=date("w",$theDayTime);
            echo "<td class = '$isHoliday $theMonth $isToday'>";
        
            // 把時間給php就會自動算出日期
            echo date("m-d",$theDayTime);
            echo "</td>";
        }
        echo "</tr>";
    }

?>
</table>

</body>
</html>