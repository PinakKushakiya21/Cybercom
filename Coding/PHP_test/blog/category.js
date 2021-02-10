function formValidation(){
    var userName = document.forms["myForm"]["title"].value;
    if (userName == "") {
        alert("Name must be filled out");
        return false;
    }

    var userName = document.forms["myForm"]["mtitle"].value;
    if (userName == "") {
        alert("Name must be filled out");
        return false;
    }


    var userAddress = document.forms["myForm"]["content"].value;
    if (userAddress == "") {
        alert("Address must be filled out");
        return false;
    }


    var userAge = document.forms["myForm"]["pcat"].value;
    if (userAge === "Select pcat") {
        alert("Please Select Valid Age");
        return false;
    }

    var userImage = document.forms["myForm"]["uimage"].value;
    if (userImage == "") {
        alert("Please Choose Image");
        return false;
    }

}