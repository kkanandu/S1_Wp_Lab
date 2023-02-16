function validate(){
    let status = false;
    let fname = document.getElementByid("fname").value;
    let email = document.getElementByid("email").value;
    let psw = document.getElementByid("psw").value;
    let ph = document.getElementByid("ph").value;
    console.log(fname);
    if(fname == "" || email == "" || psw == "" || ph == ""){
        document.getElementById("error").innerHTML = "Please Enter All Fields";
        return status;
    }
    else{
        status = true;
        return status;
    }
}