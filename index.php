<html>
	<head>
		<title>Owner Register</title>
	</head>

<body>
		<h3> Register Page</h3>
		
		<form action="thankyou.php" method="post">
		<b><u>Owner Info:</u></b>
		<br/><br/>
			
			<label>Name</label>
			<input type="text" name="name" required>
				<br/><br/>
				
			<label>Email</label>
			<input type="email" name="email" required>
			<br/><br/>
			
			<label>Password</label>
			<input type="password" name="password" id="txtPassword"required>
			<br/><br/>
			
			<label>Retype Password</label>
			<input type="password" name="password" id="txtConfirmPassword" required>
			<br/><br/>
			
			<label>Contact</label>
			<input type="text" name="contact" pattern="[0-9]{11}" required>
			<br/><br/>
			
			<label>Address</label>
			<textarea name="address">
			</textarea>
			
			<hr/>
			
			<label>Car No.</label>
			<input type="text" name="car_no" required>
			<br/><br/>
			
			<label>Reg No.</label>
			<input type="text" name="reg_no" required>
			<br/><br/>
			
			Select your color:
			<input type="color" name="color">
			
			<input type="submit" name="submit" value="Owner Register" onclick="return Validate()"/>
			
			<input type="reset" name="reset" value="Cancel"/>
			
			
		</form>
		
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
	
</body>

</html>