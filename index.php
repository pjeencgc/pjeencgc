<?php
    $name = $_POST['name']
    $visitor_email = $_POST['Email']
    $message = $_POST['message']


    $email_form = 'pje.encgc@gmail.com';

    $email_subjevt ="new form submission";

    $email_body = "User Name: $name.\n".
                  "user Email: $visitor_email.\n";

    $to = "pje.encgc@gmail.com";

    $headers = "from: $email_from\r\n";
    $headers = "Replay-To: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>

		</form>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
	</body>
</html>
