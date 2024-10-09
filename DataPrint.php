<?php
include('Conn.php');
$query=mysqli_query($con,"select * from e_data");
$data=mysqli_num_rows($query);
if($data==0)
{
    echo"No Data Available";
}
else
{
    echo$data."Number Of Records";



?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
<body>
<a href="insertEmp.php"><button type="button" class="btn btn-primary">AddEmployee</button></a>
    <table frame="box" class="table">
        <tr>
            <th>Image</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Country Code</th>
            <th>Number</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Hobby</th>
            <th>Action</th>
            


        </tr>
       
            <?php
            while($res=mysqli_fetch_assoc($query))
            { 
                
                ?>
                <tr>
                <td><img src="upload/<?php echo$res['photo'] ?>" width="40px" height="35px"></td>
                <td>
                    
                <?php echo$res['f_name'];?>
                </td>
                <td>
                <?php echo$res['l_name'];?>
                </td>  <td>
                <?php echo$res['email'];?>
                </td>  <td>
                <?php echo$res['c_code'];?>
                </td>  <td>
                <?php echo$res['number'];?>
                </td>  <td>
                <?php echo$res['address'];?>
                </td> 
                <td>
                <?php echo$res['gender'];?>
                </td>
                <td>
                <?php echo$res['hobby'];?>
                </td>
                <td><a href="delete.php?id=<?php echo$res['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a> </td>
                <td><a href="update.php?id=<?php echo$res['id'];?>"><button type="button" class="btn btn-secondary">Update</button></a></td>
                </tr>  <?php }
            ?>
        
    </table>
</body>
</html>
<?php
}
?>