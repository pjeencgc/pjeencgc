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
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<p><div style="position: absolute;top:3015px;width: 900px"><center><input type="text" name="nom" size="45" maxlength="100"></center></div></p><br>

<p><div style="position: absolute;top:3050px;width: 270px"><center><b><font size="5" color="#543e3e">  Email :
 </font></b></center></div></p><br>

<p><div style="position: absolute;top:3055px;width: 900px"><center><input type="text" name="mail" size="45" maxlength="100"></center></div></p>


<p><div style="position: absolute;top:3085px;width: 390px"><center><b><font size="5" color="#543e3e">  Objet de demande:</font></b></center></div></p><br>
<p><div style="position: absolute;top:3105px;width: 900px"><center><input type="text" name="objet" size="45" maxlength="120"></center></div></p><br>


<p><div style="position: absolute;top:3135px;width: 270px"><center><b><font size="5" color="#543e3e">  Texte :</font></b></center></div></p><br>
<p><div style="position: absolute;top:3145px;width:1030px"><center><textarea name="message" cols="50" rows="10"></textarea></center></div></p><br>



<div style="position: absolute;top:3330px;width: 900px"><center>
<input type="submit" name="Submit" value="Envoyer">
</center></div>
		</form>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
	</body>
</html>