function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "admin" && password == "admin") {
        alert("Login successfully");
        window.location = "registration.html"; // Redirecting to other page.
        return false;
    }
    else {
        alert("Wrong credentials");
        /*attempt--;// Decrementing by one.
        alert("You have left " + attempt + " attempt;");
        // Disabling fields after 3 attempts.
        if (attempt == 0) {
            document.getElementById("username").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
            return false;
        }*/
    }
}

function register() {
    window.location = "registration.html";
}


var admin = [];

function addElement()
{
	var name = document.getElementById('username').value;
	var email = document.getElementById('email').value;
    var pwd = document.getElementById('password').value;
    var cpwd = document.getElementById('password_confirm').value;
    var city = document.getElementById('citydrp').value;
    var state = document.getElementById('statedrp').value;
	 var admindata = {
		adname : name,
		ademail : email,
        adpass : pwd,
        adconfpass : cpwd,
        adcity : city,
        adstate : state
	};

	if(localStorage.getItem('admin'))
	{
		admin = JSON.parse(localStorage.getItem('admin'));
	}

	admin.push(admindata);
    console.log(admin);
	localStorage.setItem("array", JSON.stringify(admin));
	
	alert(name + " " + semail + " " + pwd + " " + cpwd + " " + city + " " + state);
	
};

function check()
{
    var array = localStorage.getItem('admin');
		var items = JSON.parse(array);
		
		array = items;
					
			if(array === null )
			{
				alert("Records not found!");
				window.location.href = "registration.html";
			}			
			else
			{
				window.location = "login.html";
			}

}
