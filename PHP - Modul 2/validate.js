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