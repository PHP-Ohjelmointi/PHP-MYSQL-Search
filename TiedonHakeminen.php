<?php
    $hostname="localhost";
    $dbname="ocelot";
    $username="root";
    $password="";

    $conn=mysqli_connect($hostname,$username,$password,$dbname);

    $query="select * from emps";

    $result=mysqli_query($conn,$query);

    while($row=mysqli_fetch_array($result))
    {
        $output[]=$row;
    }
    echo json_encode($output);
?>

