function formValidation(){

	var userPrefix = document.forms["myForm"]["uprefix"].value;
    if (userPrefix == "Prefix") {
        alert("Please Select Prefix");
        return false;
    }

    var firstName = document.forms["myForm"]["fname"].value;
    if (firstName == "") {
        alert(" First Name must be filled out");
        return false;
    }

    var lastName = document.forms["myForm"]["lname"].value;
    if (lastName == "") {
        alert("Last Name must be filled out");
        return false;
    }

    var userEmail = document.forms["myForm"]["uemail"].value;
    if (userEmail == "") {
        alert("Please Enter Valid Email");
        return false;
    }


    var userPass = document.forms["myForm"]["upass"].value;
    if (userPass == "") {
        alert("Password must be filled out");
        return false;
    }

    var userCpass = document.forms["myForm"]["ucpass"].value;
    if (userCpass == "") {
        alert("Please Must be filled out");
        return false;
    }

    if(userPass != userCpass){
        alert("Password And Confirm Password Must be Same..");
        return false;
    }

    var isChecked = !document.getElementById('agreement').checked;
    //console.log(isChecked);
    if(isChecked)
    {
        alert('You must agree to the terms first.');
        return false;
    }   
}