<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <div style="width:50%;margin:10px auto;">
    <form method="post" action="#" enctype="multipart/form-data">
        <table frame="box">
            <tr>
                <td colspan="2" align="center"><h1>Add Employee</h1></td>
            </tr>
            <tr>
                <td>FirstName:</td>
                <td><input type="text" name="fname" require></td>
            </tr>
            <tr>
            <td>LastName:</td>
            <td><input type="text" name="lname" require></td>
            </tr>
            <tr>
            <td>Email:</td>
            <td><input type="text" name="email" require></td>
            </tr>
            <tr>
                <td>Number:</td>
                <td>
                    <select name="c_code">
                    <option value="+91">+91</option>
                    <option value="+92">+92</option>
                    <option value="+44">+44</option>
                </select>
                <input type="number" name="number" require>
                </td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" require></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    Male<input type="radio" value="Male" name="gender">
                    Female<input type="radio" value="Female" name="gender">

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
                <td colspan="2" align="center"><input type="submit" name="ins" value="Insert"></td>
            </tr>
</table>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['ins']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$c_code=$_POST['c_code'];
$number=$_POST['number'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$hobby=isset($_POST['hobby'])?implode(',',$_POST['hobby']):'';
$image=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];
$folder='upload/'.$image;
if(!move_uploaded_file($temp,$folder))
{
    echo"<script>alert('Image not Uploaded')</script>";

}
else
{
    include('Conn.php');
    $query=mysqli_query($con,"insert into e_data(f_name,l_name,email,c_code,number,address,gender,hobby,photo) values(
    '$fname','$lname','$email','$c_code','$number','$address','$gender','$hobby','$image')");
    if($query)
    {
        echo"<script>alert('Data Inserted')</script>";

    }
}

}

?>