<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$option1=$option2=$option3=$option4="";
$firstname=$email="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $password=$row["password"];
      $email=$row["email"];
      $address=$row["address"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}

      if(  $row["profession"]=="Academician" )
      { $option1="selected"; }
      else if($row["profession"]=="Student")
      { $option2="selected"; }
      else if($row["profession"]=="Official")
      { $option3="selected"; }
      else{$option4="selected";}
   
  } 
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
First Name : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >

<br> <br> 

Passowrd : <input type='text' name='password' value="<?php echo $password; ?>" >

<br> <br> 

Email : <input type='text' name='email' value="<?php echo $email; ?>" >

<br> <br> 

Address : <input type='text' name='address' value="<?php echo $address; ?>" >

<br> <br> 

 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php echo $radio3; ?> > Other

     <br><br>

    <label for="profession">Choose a profession:</label>
    <select name="profession" id="profession">
      <option value="Academician"<?php echo $option1; ?>>Academician</option>
      <option value="Student"<?php echo $option2; ?>>Student</option>
      <option value="Official"<?php echo $option3; ?>>Official</option>
      <option value="TA"<?php echo $option4; ?>>TA</option>
    </select>


     <br> <br> 

     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>