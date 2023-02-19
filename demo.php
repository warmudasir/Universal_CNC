<?php
    include('conn.php');
    // $v1='60%';
    // $v2='10hours';
    // $v3=20;
    // $v4='40%';
    // $v5='30 degree';
    // $v6='NO';
    // $v7=50;
    // $v8='7hours';
    // $v9='NO';
    // $v10='40%';
    $query="INSERT INTO `data` (`id`, `Effifciency`, `Active hours`, `Work done`, `Performance`, `Temperature`, `Data Failure`, `Overall Work done`, `Machine Service time`, `Malfunction`, `Overall Performance`) VALUES (NULL, '60%', '7', '10', '20', '20', '80', '100', '1000', 'NO', '0');";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "Success";
    }
    else
    {
        echo "failed";
    }
    

    ?>