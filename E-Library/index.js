// a javascript file to make a validation between the password and secondary password
function check(form){

    var pass1 = form.password.value; 
    var pass2 = form.password2.value; 
    

    if(pass1 == pass2){
        alert("Password matched!");
        return true;
    }else{
        alert("password isn't match! please try again.")
        return false;
    }
};

