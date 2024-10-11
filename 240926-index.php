<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎005</title>
</head>
<body> 
<!-- # sytle = 'text-aligh-center' -->

<?php #宣告方式
$price = 100;
echo "price is $price <br>";

$name = "名字";
echo "name is $name <br>";

$total = (100*5) + (32/10*3);
// $total = (int) $total; #更改類型
echo " $total <br>";

$num = rand(1,10); # 每次都會重新發請求,每次都會不一樣
echo " $num <br>";
$num = 1000;
echo " $num <br>";

echo "1/INF = ".(1/INF);
echo "<br>";
// define("PI",3.145);
echo "圓周率是".M_PI."<br>"; //why PI is not predefined???????

echo "<h1>練習1</h1>";
echo "例：$ a = 10; $ b = 50; 交換後 $ a = 50; $ b = 10; <br>";
$a = 10; $b = 50; 
echo "now a = $a, b = $b <br>";
// $a = ($a =10)? 50:10;
// $b = ($b = 50)? 10:50;
$temp = $a;
$a = $b;
$b = $temp;
echo "then a = $a, b = $b";
unset($temp);

echo "<h1>練習2</h1>";


?>
  
</body>
</html>