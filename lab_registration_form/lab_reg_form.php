<!DOCTYPE html>
<html>
<head>
    <h2>Registration Form</h2>
<title>Sign up</title>
<style>
.myDiv1 {
  border: 1px outset black;
  height: 370px;
  width: 60%;
  text-align: left;
}
.myDiv2 {
  border: 1px outset black;
  height: 30px;
  width: 200%;
  text-align: left;
}
.myDiv3 {
  border: 1px outset black;
  height: 30px;
  width: 200%;
  text-align: center;
}
</style>
</head>
<body>

<div class="myDiv1">

<table>
<tr> <td>First Name: </td> 
<td><input type="text" name='firstname' ></td></tr>

<tr> <td>Email: </td>
<td><input type="text" name='email' ></td></tr>
<br>

<tr> <td>Password: </td>
<td><input type="password" name='password' ></td></tr>
<br>


<tr> <td>Confirm Password: </td>
<td><input type="password" name='confirmpassword' ></td></tr>
<br>


  <tr> <td>Gender:
<div class="myDiv2">
  <input type="radio" id="male" name="gender" value="male">

  <label for="male" >Male</label>

  <input type="radio" id="female" name="gender" value="female">

  <label for="female">Female</label>

  <input type="radio" id="other" name="gender" value="other">

  <label for="other">other</label><br> </td> </tr>

	<tr><td><br>
</div>

<label for="birthday">Date of Birth:</label>

<div class="myDiv3">
  <input type="date" id="dob" name="dob">
  <br><br>
</div>
<br>
<input type="submit" value="Submit">

<input type="reset" value="Reset">

</tr></td>

</table>

</from>

</div>

</body>
</html>

