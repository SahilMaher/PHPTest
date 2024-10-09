<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    include('Conn.php');
    $query=mysqli_query($con,"delete from e_data where id=$id");
    if($query)
    {
        header('location:DataPrint.php');
    }
    
}
else
{
    echo"Page Not Fount";
}
?>