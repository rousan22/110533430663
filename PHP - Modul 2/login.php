<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registeration form</title>
<link href="default.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="validate.js"></script>
</head>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //Cek validitas harus huruf
return al.test(a);
}
function validate(loginform) {
    var username1 = loginform.username.value;
    var username = username1.trim();
        var password1 = loginform.password.value;
    var password = password1.trim();

    if (username == null || username == "") {
        alert("Username is empty.Please Enter Username.");
        loginform.username.focus();
        return false;
    }
        if (password == null || password == "") {
        alert("Password is empty.Please Enter Password.");
        loginform.password.focus();
        return false;
    }

    else
              return true;
}
	<body>
<center>
<!-- Start of login form code -->
<div id="formdiv">
<h2>Login Form</h2>
<p>Enter the below details to login</p>
<form action="validasi.php" name="loginform" class="" id="form1" method="POST" onsubmit="return validate(this)">
<label>Username </label>
<input type="text" name="username" title="Enter Your Username" placeholder="enter username"/><br />
<label>Password </label>
<input type="password" name="password" title="Enter Your Password" placeholder="enter password"/><br/>
<button type="submit" title="Login">Login</button> <button type="reset" title="Reset Fields">Clear</button>
</form>
</div>
<!-- End of login form code -->
</center>
	</body>
</html>
