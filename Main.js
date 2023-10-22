function ValidateForm(){
    var email = document.getElementById("email").value;
    var number = document.getElementById("cnumber").value;

    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))){
        alert("You have entered an invalid email address!");
        return false;
    }
    else if(!(/^(0|\+94)[0-9]{9}$/.test(number))){
        alert("You have entered an invalid contact number!");
        return false;
    }
    else{
        alert("You have registered successfully!");
        return true;
    }
}