<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>
        body{
            font-size:16px;
        }

        span{
            font-size:28px; 
            color:blue;
        }
    </style>
</head>
<body>
    <h3>字串取代<br>將”aaddw1123”改成”*********”</h3>
<?php
    $str="aaddw1123";
    echo $str."<br>";
    echo "一個一個慢慢改：<br>";    
    $str = str_replace('aa',"**",$str);
    echo $str."<br>";
    $str = str_replace('d',"*",$str);
    echo $str."<br>";

    echo "需要事先知道字串內容：<br>";
    $str="aaddw1123";
    $str = str_replace(['a','d','w','1','2','3'],"*",$str);
    echo $str."<br>";

    echo "根據字串長度全部更改：<br>";
    $str="aaddw1123";
    $str = str_repeat("*",mb_strlen($str));
    echo $str."<br>";

    // for ($i=0; $i <strlen($str); $i++) { 
    //     $str=str_replace(substr($str,$i,1),"*",$str);
    // }
    // echo $str;
    
?>
    <h3>字串分割 <br>將”this,is,a,book”依”,”切割後成為陣列</h3>
<?php
    $str = "this,is,a,book";
    $cut = explode(",",$str);
    echo"<pre>";
    print_r($cut);
    echo"</pre>";
?>

    <h3>字串組合 <br> 將上例陣列重新組合成“this is a book”</h3>
<?php
    $combine = join(" ",$cut);
    echo $combine;
?>


    <h3>子字串取用 <br> 將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”</h3>
<?php
    $str = "The reason why a great man is great is that he resolves to be a great man";
    echo $str."<br>";
    $firstTen = mb_substr($str,0,10)."...";
    echo $firstTen."<br>";

    $str = "一個偉人的偉大之所以存在，是因為他下定決心要成為一個偉人。";
    $firstTen = mb_substr($str,0,10)."...";
    echo $firstTen."<br>";
    $firstTen = substr($str,0,10)."...";
    echo $firstTen."<br>";
?>

    <h3>尋找字串與HTML、css整合應用</h3>
    <ul>
        <li>給定一個句子，將指定的關鍵字放大</li>
        <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li>請將上句中的 “程式設計” 放大字型或變色.</li>
    </ul>
<?php
    $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $key = "程式設計";
    $large = "<span>".$key."</span>";
    $str = str_replace($key, $large, $str);
    echo $str;
?>
</body>
</html>