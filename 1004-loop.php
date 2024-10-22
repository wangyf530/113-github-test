<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重覆結構</title>
</head>
<body>
    <h1> 1. for loop </h1>
    <?php
    for ($i=0; $i<10; $i++) {
        //echo "first i = $i <br>";
        echo $i*10;
        echo "<br>";
        //echo "then i = $i <br> loop done <br>";
    }
    echo "finally i = $i";
    ?>

    <h1> 2. while loop </h1>
    <?php
    $score = 30;
    $counter = 0;
    while($score<60){
        $score+=10;
        $counter++;
    }
    echo "$score <br> $counter";
    ?>

    <h1>陣列</h1>
    <div>['a','b','good','sad','john',123,999]</div>
    <?php
    $a = ['a','b','good','sad','john',123,999];
    /* echo $a[0];
    echo "<br>";
    echo $a[1];
    echo "<br>"; */

    for ($i=0; $i<count($a); $i++) {
        echo $a[$i];
        echo "<br>";
    }
    // 方法A
    $b = ['Name' => 'MyName','Math' => 90,'Chinese' => 80, 'English' => 20];
    $keys = array_keys($b);
    for ($i=0; $i<count($b); $i++){
            $key = $keys[$i];
            $value = $b[$key];
            echo $key.":".$value."<br>";
    }

    // 方法B
   foreach ($b as $key => $value){
    echo $key.":".$value."<br>";
   }


   $c=[
    '數學'=>[
                ['姓名'=>'小明','成績'=>98],
                ['姓名'=>'小美','成績'=>22],
                ['姓名'=>'阿明','成績'=>60]
            ],
    '國文'=>[
                ['姓名'=>'小明','成績'=>58],
                ['姓名'=>'小美','成績'=>73 ],
                ['姓名'=>'阿明','成績'=>90]
            ]
        ];
    
    /* foreach($c as $key) { 
        foreach ($key as $value) {
            echo $value."<br>";
        }
    } */
    /* foreach ($c as $key => $value){
        echo $key.":".$value."<br>";
        } */

    ?>
    <p>&nbsp;</p> <!-- 不停斷的空格 -->




</body>
</html>