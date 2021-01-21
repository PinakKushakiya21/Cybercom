// login credentials verification..
function validate()
{
    var data = JSON.parse(localStorage.getItem('array'));
    var data = JSON.parse(localStorage.getItem('user'));
    var uname, pwd, umn, upsd;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    data.forEach(function(obj)
    {
        uname = obj.adname;
        pwd = obj.adpass;
    });
    userdata.forEach(function(obj)
    {
        unm=obj.name;
        upsd=obj.pswd;
    });

    
    if(username === uname && password === pwd)
    {
        window.location = "dashboard.html";
    }
    else if(username === unm && password === upsd)
    {
        window.location = "sub_user.html";
    }
    else
    {
        alert("Wrong credentials..");
    }
};

//check the already admin is registered or not
function check()
{
    var array = localStorage.getItem('admin');
		var items = JSON.parse(array);
		
		array = items;
					
			if(array === null )
			{
				window.location.href = "registration.html";
			}			
			else
			{
                alert("Admin already registered");
				window.location = "login.html";
			}

}

function logout()
{
    var data = JSON.parse(localStorage.getItem('user'));
    var uname;
    data.forEach(function(obj)
    {
        uname=obj.uname;
    });
}