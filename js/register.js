function userCheck() {
    correctUname = /^[A-Za-z0-9]+$/;

    var unm = document.getElementById("uname").value;
    var password = document.getElementById("pwd").value;
    var cpassword = document.getElementById("cpwd").value;

    // UserName Validation
  
    if (unm.match(correctUname))
        if (password==cpassword)
        true;
        else {
        document.getElementById("error_Message").innerHTML = "Passwords dont match!"
        return false;
    }
        else {
        document.getElementById("error_Message").innerHTML = "Username cannot have special characters!"
        return false;
    }


}