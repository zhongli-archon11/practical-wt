<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>INAZUMA Registration</title>
	<style type="text/css">
		.error
		{
			color: red;
			font-size: 15px;
		}
		fieldset
		{
			border-radius: 30px;
			border: 1px solid black;
		}
		
	</style>
</head>
<body>
	<fieldset>
	<legend><h2> Registration Form</h2></legend>
	<form method="post" name="myform" onsubmit="return vafun()">
	<table class="center">
	 	<tr>
	 	 	<td><label>First Name:</td>
			<td><input type="text" size="40" style="font-size:15px;" name="fname" id="fname"/>
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg1" class="error"></p></td>
	 	</tr>

	    <tr>
	 	 	<td>Last Name:</td>
	 		<td><input type="text" size="40" style="font-size:15px;" name="lname" id="lname"></td>
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg2" class="error"></p></td>
	 	</tr>

         <tr>
	 	 	<td>Phone No.:</td>
	 		<td><input type="text" size="40" style="font-size:15px;" name="phn" id="phn"></td>
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg3" class="error"></p></td>
	 	</tr>
         <tr>
	 	 	<td>Email:</td>
	 		<td><input type="email" size="40" style="font-size:15px;" name="email" id="email"></td>
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg4" class="error"></p></td>
	 	</tr>
		<tr>
	 	 	<td>Age:</td>
	 		<td><input type="text" size="40" style="font-size:15px;" name="age" id="age"></td>
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg5" class="error"></p></td>
	 	</tr>
	 	<tr>
	 	 	<td></td>
	 		<td><button type="submit" name="submit" onclick="return valfun()" class="button">Register</button>
			 <button type="reset" class="button">Clear All</button></td>
		</tr>
    </table>
	</fieldset>
	</form>
	
	<script type="text/javascript">
	 	function valfun()
		{
			var fname= document.getElementById("fname").value;
            var lname= document.getElementById("lname").value;
            var phn= document.getElementById("phn").value;
            var email= document.getElementById("email").value;
			var age= document.getElementById("age").value;
			var ret = true;

			if(fname.length==0)
			{
				document.getElementById("errormsg1").innerHTML="*Name must be filled";
				ret= false;
			}
            if(lname.length==0)
			{
				document.getElementById("errormsg2").innerHTML="*Name must be filled";
				ret= false;
			}

			if(phn.length==0)
			{
				document.getElementById("errormsg3").innerHTML="*Phone number must be filled";
				ret= false;
			}
			
			if(email.length==0)
			{
				document.getElementById("errormsg4").innerHTML="*Email must be filled";
				ret= false;
			}
            if(age.length==0)
			{
				document.getElementById("errormsg5").innerHTML="*Age must be filled";
				ret= false;
			}


			return ret;

		}
	</script>
</body>
</html>