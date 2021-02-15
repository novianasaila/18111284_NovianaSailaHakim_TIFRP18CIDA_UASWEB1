function validationForm(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if(username == "" && password == "")
    {
        alert("Username dan Password Kosong!");
        return false;
    }
    else if(username == "")
    {
        alert("Username masih kosong!");
        return false;
    }
    else if( password == "")
    {
        alert("Password masih kosong!");
        return false;
    }
}