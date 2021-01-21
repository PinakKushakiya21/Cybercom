// Insert Function..
var userarr = [];

function adduser()
{
	var usname = document.getElementById('name').value;
	var usemail = document.getElementById('email').value;
    var uspass = document.getElementById('password').value;
    var usbdate = document.getElementById('dob').value;
	 var userdata = {
		name : usname,
        email : usemail,
        pswd : uspass,
		birthdate : usbdate
    };
    
    if(usname==="" || usemail==="" || uspass==="" || usbdate==="")
    {
        alert('Please fill the record..');
    }

	else if(localStorage.getItem('userarr'))
	{
		userarr = JSON.parse(localStorage.getItem('userarr'));
	}

	userarr.push(userdata);
    console.log(userarr);
	localStorage.setItem("user", JSON.stringify(userarr));
};

function getAge(date){
    var d = new Date(date)
    var dt = new Date();    
    return dt.getFullYear() - d.getFullYear();
}


//Retrieve Function..
function fetchuser()
{
    var userarr = localStorage.getItem('user');
	var items = JSON.parse(userarr);
		
	userarr = items;
		
	document.write('<table class="table table-bordered table-light" id="tableData">');
	document.write('<tr>');
    document.write('<th>Name</th> <th>Email</th> <th>Password</th> <th>Date Of Birth</th> </tr> <tr>');
    for(var k = 0 ; k < userarr.length; k++)
	{	
		document.write('<td>'+ userarr[k].name + '</td>' );
        document.write('<td>'+ userarr[k].email + '</td>' );
        document.write('<td>'+ userarr[k].pswd + '</td>' );
        document.write('<td>'+ userarr[k].birthdate + '</td>' );
        document.write('<td>'+ getAge(userarr[k].birthdate) + '</td>' );
        document.write('<td><button type="button" onclick="updateUser()" class="btn btn-link"> Update </button></td>' );
        document.write('<td><button type="button" onclick="deleteteUser()" class="btn btn-link"> Update </button></td>' );
		document.write('</tr>');
	}
	document.write('</table>');	
}
document.getElememtById('usertable').innerHTML = fetchuser();

// Update function..
function updateuser(){
    var usdata=JSON.parse(localStorage.getItem('user'));
    usdata.forEach(function(obj)
    {
        document.getElementById('name').value=obj.name
        document.getElementById('email').value=obj.email;
        document.getElementById('password').value=obj.pswd;
        document.getElementById('dob').value=obj.birthdate;
        document.getElementById('btnsubmit').innerHTML="Update Record";
    });
}

// Delete function..
function deleteuser(){
    var usdata=JSON.parse(localStorage.getItem('user'));
    usdata.forEach(function(obj)
    {
        localStorage.removeItem(obj.name);
    });
}