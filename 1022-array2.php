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
    
</body>
</html>