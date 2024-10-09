<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
   include('Conn.php');
   $query=mysqli_query($con,"select * from e_data where id=$id");
   $res=mysqli_fetch_assoc($query);
   $fname=$res['f_name'];
   $lname=$res['l_name'];
   $email=$res['email'];
   $number=$res['number'];
   $c_code=$res['c_code'];
   $hobby=$res['hobby'];
   $gender=$res['gender'];
   $address=$res['address'];
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>

<div style="width:50%;margin:10px auto;">
    <form method="post" action="" enctype="multipart/form-data">
        <table frame="box">
            <tr>
                <td colspan="2" align="center"><h1>Update Employee</h1></td>
            </tr>
            <tr>
                <td>FirstName:</td>
                <td><input type="text" name="fname" value="<?php echo$fname;?>"></td>
            </tr>
            <tr>
            <td>LastName:</td>
            <td><input type="text" name="lname" value="<?php echo$lname;?>"></td>
            </tr>
            <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo$email;?>"></td>
            </tr>
            <tr>
                <td>Number:</td>
                <td>
                    <select name="c_code">
                     <option value="<?php echo$c_code;?>"><?php echo$c_code;?></option>   
                    <option value="+91">+91</option>
                    <option value="+92">+92</option>
                    <option value="+44">+44</option>
                </select>
                <input type="number" name="number" value="<?php echo$number;?>">
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="<?php echo$address;?>"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                <?php
                 if($gender=="Male")
                 {
                    echo"Male<input type='radio' value='Male' name='gender' checked>
                    Female<input type='radio' value='Female' name='gender'>";
                 }
                 else
                 {
                    echo"Male<input type='radio' value='Male' name='gender' >
                    Female<input type='radio' value='Female' name='gender' checked>";

                 }
                ?>
                   

                </td>
            </tr>
            <tr>
                <td>Hobby:</td>
                <td>
                    Reading<input type="checkbox"  value="Reading" name="hobby[]">
                    Playing<input type="checkbox"  value="Playing" name="hobby[]">

                </td>
            </tr>
            <tr>
                <td>Image:</td>
                <td><input type="file" name="image"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="upd" value="Update"></td>
            </tr>
</table>
</form>
</div>
    
</body>
</html>

<?php

if(isset($_POST['upd']))
{
   
$fname1=$_POST['fname'];
$lname1=$_POST['lname'];
$email1=$_POST['email'];
$c_code1=$_POST['c_code'];
$number1=$_POST['number'];
$address1=$_POST['address'];
$gender1=$_POST['gender'];
$hobby1=isset($_POST['hobby'])?implode(',',$_POST['hobby']):'';

$image=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];
$folder='upload/'.$image;

if(!move_uploaded_file($temp,$folder))
{
    echo"<script>alert('Image not Uploaded')</script>";

}


$id=$res['id'];


$q=mysqli_query($con,"update e_data set f_name='$fname1' ,l_name='$lname1',email='$email1' , c_code='$c_code1',
number='$number1',address='$address1', gender='$gender1',hobby='$hobby1' , photo='$image' where id=$id
");


if($q)
{
    header('location:DataPrint.php');
}


}
}
else
{
    echo"Page Not Found";
}
?>