<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://smtpjs.com/v3/smtp.js"></script>  
	<script type="text/javascript">
		function sendEmail() {
			Email.send({
				Host: "smtp.gmail.com",
				Username : "<sender’s email address>",
				Password : "<email password>",
				To : '<recipient’s email address>',
				From : "<sender’s email address>",
				Subject : "<email subject>",
				Body : "<email body>",
			})
			.then(function(message){
				alert("mail sent successfully")
			});
		}
	</script>
</head>
<body>  
	<form method="post">
        <h1>SEND</h1>
		<input type="button" value="Send Email" onclick="sendEmail()"/>
	</form>  
</body>
</html>