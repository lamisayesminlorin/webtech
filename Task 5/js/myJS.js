
function get(id) {
  return document.getElementById(id);
}

function validateForm() {

  var uname = get('username').value;
  var pass = get('password').value;
  var cpass = get('cpassword').value;
  var email = get('email').value;
  var dob = get('dob').value;
  var gender = get('gender').value;
  var picture = get('picture').value;


  if (uname == "") {
    document.getElementById("mytext").innerHTML = "Username Required <br>";
    return false;
  }

  if (pass == "") {
    document.getElementById("mytext").innerHTML = "Password Required <br>";
    return false;
  }

  if (pass.length < 5) {
    document.getElementById("mytext").innerHTML = "Please enter password";
    return false;
  }

  if (cpass == "") {
    document.getElementById("mytext").innerHTML = "Password Required <br>";
    return false;
  }

  if (email == "") {
    document.getElementById("mytext").innerHTML = "Email Required <br>";
    return false;
  }

  if (dob == "") {
    document.getElementById("mytext").innerHTML = "Date of birth Required <br>";
    return false;
  }

  if (gender == "") {
    document.getElementById("mytext").innerHTML = "Gender Required <br>";
    return false;
  }

  if (picture == "") {
    document.getElementById("mytext").innerHTML = "Picture Required <br>";
    return false;
  }

  return false;
}