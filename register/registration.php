<html>
<head>
<title>registration login</title>
</head>
<body>
<form onsubmit="return log();" action="register_action.php" method="post">
First name:<input type="text" id="fname" name="form"><br />
last name:<input type="text" id="lname" name="form1"><br />
E-mail:<input onchange="ff();" type="text" id="email" name="form2"><br />
Mobile No.:<input type="text" id="mobile" name="form3"><br />
password:<input type="password" id="pass" name="form4"><br />
Confirm password:<input type="password" id="confirmpass" name="form5"><br />
Sex:<input type="radio" id="male" value="male" name="form6" checked>Male
    <input type="radio" id="female" value="female" name="form7">Female<br />
<button>Submit</button>
<span id="spanid">jhjh</span>
</form>
<script src="jquery-1.11.0.min.js"></script>
<script>
function log(){
	var pass = document.getElementById('pass').value;
	var confirmpass = document.getElementById('confirmpass').value;
	if(pass == confirmpass){
		// alert('succesfully');
		return true;
	}
	else{
		alert('please renter a confirm password');
		return false;
	}
}
function ff(){
	var a= $('#email').val();

	$.ajax({
		type: "POST",
		url: 'register_ajax.php',
		data:{a1:a},			
		success:function(data){
			if(data == "1"){
				document.getElementById('spanid').style.display="block";
			}
			else {
				document.getElementById('spanid').style.display="none";
			}
		}
	});	
}
</script>
</body>
</html>