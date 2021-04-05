<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mycss.css">
<script src="../js/myjs.js"></script>
</head>
<body>

<div class="header">
  <h1>Welcome To my Site</h1>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>

</div>
</div>
<h2></h2>


<p id="mytext"></p>  



    <table width="100%">
        <tr>
            <td colspan="4" align="center">
                <h1>Registration Form</h1>
            </td>
        </tr>

        <tr>
            <td align="center">
                
                <form name="myForm" action="" onsubmit="return validateForm()" method="post">
                    <table>
                        
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>
                                <input name="name" type="text">
                            </td>
                            <td></td>
                        </tr>


                        <tr>
                            <td colspan="4">
                                <hr />
                            </td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input name="password" type="password">
                            </td>
                            <td></td>
                        </tr>

                        
                        <tr>
                            <td colspan="4">
                                <hr />
                            </td>
                        </tr>

                        <tr>
                            <td>Confirm Password</td>
                            <td>:</td>
                            <td>
                                <input name="cpassword" type="password">
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <hr />
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><input name="email" type="email"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <hr />
                            </td>
                        </tr>

                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td><input type="date" name="dob" />
                            <td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <hr />
                            </td>
                        </tr>

                        
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><select name="gender">
                                    <option value="">Please Select Gender</option>

                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>

                                </select> <br></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <hr />
                            </td>
                        </tr>
                        <tr>
                            <td>Profile Picture</td>
                            <td>:</td>
                            <td>
                                <input name="picture" type="file">
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                <hr />
                            </td>
                        </tr>

                        <tr>
                            <td align="center" colspan="3">
                                <input name="submit" type="submit" value="Submit">
                            </td>
                        </tr>
                        <tr>
                        </tr>

                    </table>

                </form>



            </td>



        </tr>


    </table>
</form>
<br>
<?php echo $error; ?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="footer">
<h3> my footer </h3>

</div>
</body>
</html>