function validate()
{
    var data = JSON.parse(localStorage.getItem('array'));
    var uname, pwd;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    data.forEach(function(obj)
    {
        uname = obj.ademail;
        pwd = obj.adpass;
    });
    if(username === uname && password === pwd)
    {
        window.location = "dashboard.html";
    }
    else
    {
        alert("Wrong credentials..");
    }
};
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
