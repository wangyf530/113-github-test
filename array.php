<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>

<style>
    table{
        border-collapse:collapse;
    }
    td {
        padding:6px 10px;
        text-align:center;
        border:1px solid #ccc;
    }

</style>

<body>

<h3>直接輸入</h3>
<table>
    <tr>
        <td></td>
        <td>國文</td>
        <td>英文</td>
        <td>數學</td>
        <td>地理</td>
        <td>歷史</td>
    </tr>
    <tr>
        <td>judy</td>
        <td>95</td>
        <td>64</td>
        <td>70</td>
        <td>90</td>
        <td>84</td>
    </tr>
    <tr>
        <td>amo</td>
        <td>88</td>
        <td>78</td>
        <td>54</td>
        <td>81</td>
        <td>71</td>
    </tr>
    <tr>
        <td>john</td>
        <td>45</td>
        <td>60</td>
        <td>68</td>
        <td>70</td>
        <td>62</td>
    </tr>
    <tr>
        <td>peter</td>
        <td>59</td>
        <td>32</td>
        <td>77</td>
        <td>54</td>
        <td>42</td>
    </tr>
    <tr>
        <td>hebe</td>
        <td>71</td>
        <td>62</td>
        <td>80</td>
        <td>62</td>
        <td>64</td>
    </tr>
    
</table>
<hr></hr>
<?php
$array=[1,2,3,4];
$array2=['a'=>10, 'b'=>12, 'c'=>13];
foreach ($array as $idx => $value) {
    echo "index => ".$idx.":value =>".$value;
    echo "<br>";
}
foreach($array2 as $idx => $value) {
    echo "index => ".$idx.":value =>".$value;
    echo "<br>";
}
?>
<hr></hr>
<?php
$header=['','國文','英文','數學','地理','歷史'];
$judy=['judy','95','64','70','90','84'];
$amo=['amo','88','78','54','81','71'];
$john=['john','45','60','68','70','62'];
$peter=['peter','59','32','77','54','42'];
$hebe=['hebe','71','62','80','62','64'];
$students=[$judy,$amo,$john,$peter,$hebe];
?>

<h3>first try - 每個學生都用一個foreach</h3>
<table>
<tr>
<?php
    foreach($header as $value){
        echo "<td>{$value}</td>";
    }
?>
</tr>
<tr>
<?php
    foreach($judy as $value){
        echo "<td>{$value}</td>";
    }
?>
</tr>
<tr>
<?php
    foreach($amo as $value){
        echo "<td>{$value}</td>";
    }
?>
</tr>
<tr>
<?php
    foreach($john as $value){
        echo "<td>{$value}</td>";
    }
?>
</tr>
<tr>
<?php
    foreach($peter as $value){
        echo "<td>{$value}</td>";
    }
?>
</tr>
<tr>
<?php
    foreach($hebe as $value){
        echo "<td>{$value}</td>";
    }
?>
</tr>
</table>

<h3>second try - 把名字拉出來</h3>
<table>
<?php
/* $judy=['judy'=>'95','64','70','90','84'];
$amo=['amo'=>'88','78','54','81','71'];
$john=['john'=>'45','60','68','70','62'];
$peter=['peter'=>'59','32','77','54','42'];
$hebe=['hebe'=>'71','62','80','62','64']; */
$stus=['judy'=>['95','64','70','90','84'],
       'amo'=>['88','78','54','81','71'],
       'john'=>['45','60','68','70','62'],
       'peter'=>['59','32','77','54','42'],
       'hebe'=>['71','62','80','62','64']];
           
    echo "<tr>";
    foreach($header as $value){
        echo "<td>{$value}</td>";
    }
    echo "</tr>";
    /* foreach($students as $student){
        echo "<tr>";
        foreach($student as $value){
            echo "<td> $value </td>";
        }
        echo "</tr>";
    } */

    foreach ($stus as $name => $student) {
        echo "<tr>";
        echo "<td>";
        echo $name;
        echo "</td>";
        foreach($student as $score){
            echo "<td> $score </td>";
        }
        echo "</tr>";
    }

?>
</table>




<h3>final try - 合併在一個array後 (已give up)</h3>
<?php

    $stus2 =[
        'judy'=>[
                ['國文'=>95],
                ['英文'=>64],
                ['數學'=>70],
                ['地理'=>90],
                ['歷史'=>84]
                ],
        'amo'=>[
                ['國文'=>88],
                ['英文'=>78],
                ['數學'=>54],
                ['地理'=>81],
                ['歷史'=>71]
                ],
        'john'=>[
                ['國文'=>45],
                ['英文'=>60],
                ['數學'=>68],
                ['地理'=>70],
                ['歷史'=>62]
                ],
        'peter'=>[
                ['國文'=>59],
                ['英文'=>32],
                ['數學'=>77],
                ['地理'=>54],
                ['歷史'=>42]
                ],
        'hebe'=>[
                ['國文'=>71],
                ['英文'=>62],
                ['數學'=>80],
                ['地理'=>62],
                ['歷史'=>64]
                ]
            ];
    $temp=$stus2; //call by value
    //echo "<pre>";
    //print_r($stus2); //php內建的 但默認是亂碼
    //echo "</pre>"; //讓標籤內的內容保持原本的格式
    $keys=array_keys($stus2); //保留所有學生名字
    $first=array_shift($stus2);
    //先把第一筆資料移出來 key-judy 拿出來國文-分數這部分
    $header = array_keys($first);
    array_unshift($header,"學生");
    // array_unshift($score,$first);
    //$score[$key]=$first; //這樣judy會在最後面
    ?>


<table>
    <?php
    /* echo "<tr>";
    foreach($header as $value){
        echo "<td>{$value}</td>";
    }
    echo"</tr>";
    foreach($stus2 as $name => $student){
        echo "<tr>";
        echo "<td>";
        foreach ($tmp as $score){
            echo "<td> {$score} </td>";
        }
        echo "</td>";
    } */
    ?>
</table>
</body>
</html>