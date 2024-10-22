<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>威力彩</h2>
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <?php

    $a=[1,2,3,4,5];
    $key=array_search('8',$a);
    echo $key;

    // 1-38 的隨機數字
    $ball=[];
    $count=0;
    while($count<6){
        $num=rand(1,38);
        if (!in_array($num,$ball)){
            $ball[]=$num;
        }
    }

    
    // for ($i=0; $i<6; $i++) { 
    //     $num=rand(1,38);
    //     if (in_array($num,$ball)){
    //         $i--;
    //     } else {
    //         $ball[]=$num;
    //     }
    // }
    echo "<pre>";
    print_r($ball);
    echo "</pre>";
    foreach ($ball as $result) {
        echo "$result ,";
    }

    ?>
    
</body>
</html>