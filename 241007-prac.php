<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>流程練習3 - 數列</h1>
    <?php
    $n = 9;
    for ($i=1; $i<=$n; $i+=2){
        echo $i;
        echo ",";
    }
    echo "<br>";
    $n = 9;
    for ($i=1; $i<$n; $i++){
        echo $i*10;
        echo ",";
    }
    echo "<br>";

    //質數
    $n = 100;
    $count=0;
    for ($i=3; $i<=$n; $i++) {
        $t=true;
        for ($j=2; $j<$i; $j++) {
            if($i%$j==0){
                $t=false;
            }
            $count++;
        }
        if($t==true){
            echo "$i,";
        }
    }
    echo "<br> Run ".$count." times <br>";
    $count=0;
    for ($i=3; $i<=$n; $i++) {
        $t=true;
        for ($j=2; $j<=ceil($i/2); $j++) {
            if($i%$j==0){
                $t=false;
            }
            $count++;
        }
        if($t==true){
            echo "$i,";
        }
    }
    echo "<br> Run ".$count." times <br>";

    $count=0;
    for ($i=3; $i<=$n; $i++) {
        $t=true;
        for ($j=2; $j<=sqrt($i); $j++) {
            if($i%$j==0){
                $t=false;
            }
            $count++;
        }
        if($t==true){
            echo "$i,";
        }
    }
    echo "<br> Run ".$count." times <br>";

    $count=0;
    for ($i=3; $i<=$n; $i+=2) {
        $t=true;
        for ($j=2; $j<=sqrt($i); $j++) {
            if($i%$j==0){
                $t=false;
            }
            $count++;
        }
        if($t==true){
            echo "$i,";
        }
    }
    echo "<br> Run ".$count." times <br>";
    echo"<hr>";
    ?>


<h1>流程練習4 - 九九乘法表 </h1>
    <?php
    //first
    for ($i=1; $i<10; $i++){
        for ($j=1; $j<10; $j++) {
            echo $j." x ".$i." = ".$i*$j."&nbsp&nbsp&nbsp";
        }
        echo "<br>";
    }
    echo"<hr>";
    ?>
    <!-- table>tr*3>td*3 -->
    
    
    <?php
    //second
    echo "<table border='1'";
    for($i=1; $i<10; $i++){
        echo "<tr>";
        for($j=1; $j<10; $j++){
            echo "<td>";
            echo $j." x ".$i." = ".$i*$j;
            echo "</td>";
        }
        // echo "<br>";
        echo"</tr>";
    }
    echo"</table>";
    echo"<hr>";

    //third
    echo "<table border='1'";
    for($i=0; $i<10; $i++){ //外圈
        echo "<tr>";
        echo "<td>$i</td>";
        for($j=1; $j<10; $j++){
            if ($i==0){
                echo "<td>$j</td>";
            } else {
                echo "<td>";
                echo $i*$j;
                echo "</td>";
            }
        }
        echo"</tr>";
    }
    echo"</table>";
    echo"<hr>";
?>
    <!-- fourth -->
    <style>
    .multiple{
        border-collapse:collapse;
        margin:20px;
        border:1px solid blue;
    }
    .multiple td{
        border:1px solid #aaa;
        width:30px;
        height:30px;
        text-align:center;
    }
    /* 下面的子元素第幾個 */
    .multiple tr:nth-child(1),
    .multiple td:nth-child(1){ 
        background:pink;
        color:white;
    }
    /* .multiple td:nth-child(1){
        background:pink;
        color:white;
    } */

    </style>
    <?php
    echo "<table class='multiple' border='1'";
    for($i=0; $i<10; $i++){ //外圈
        echo "<tr>";
        for($j=0; $j<10; $j++){
            echo "<td>";
            if ($i==0 && $j==0){
                echo "";
            } else if ($i==0){
                echo $j;
            } else if($j==0){
                echo $i;
            } else {
                echo $i*$j;
            }
            echo "</td>";
        }
        echo"</tr>";
    }
    echo"</table>";
    echo"<hr>";
    ?>



</body>
</html>