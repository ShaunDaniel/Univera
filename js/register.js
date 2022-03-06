function userCheck() {
    correctUname = /^[A-Za-z0-9]+$/;

    var unm = document.getElementById("uname").value;


    // UserName Validation

    if (unm.match(correctUname))
        true;
        else {
        document.getElementById("error_Message").innerHTML = "Username cannot have special characters!"
        return false;
    }

}
