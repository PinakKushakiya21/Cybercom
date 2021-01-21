var admin = [];
function addElement()
{
	var name = document.getElementsByName('username').value;
	var email = document.getElementsByName('email').value;
    var pwd = document.getElementsByName('password').value;
    var cpwd = document.getElementsByName('password_confirm').value;
    var city = document.getElementsByName('citydrp').value;
    var state = document.getElementsByName('statedrp').value;
	 var admindata = {
		adname : name,
		ademail : email,
        adpass : pwd,
        adconfpass : cpwd,
        adcity : city,
        adstate : state
	};
    console.log(admindata);
	if(localStorage.getItem('admin'))
	{
		admin = JSON.parse(localStorage.getItem('admin'));
	}

	admin.push(admindata);
    console.log(admin);
	localStorage.setItem("array", JSON.stringify(admin));
	
	alert(name + " " + semail + " " + pwd + " " + cpwd + " " + city + " " + state);
	
};
