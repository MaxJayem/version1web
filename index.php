<!DOCTYPE HTML>

<html>
	<head>
		<title>Chatbot Experiment</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.slidertron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			



			
		<!-- Three -->
			<section id="three" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2>Herzlich Wilkommen</h2>
						<p>Das folgende Experiment besteht aus zwei Abschnitten: Einer kurzen Interaktion mit einem Chatbot, das heißt einer Software mit welcher Sie über natürliche Sprache kommunizieren können, und einer anschließenden Umfrage. 
							Das Ziel der Interaktion mit dem Chatbot ist es, eine kleine Aufgabe im Kundenservice zu lösen, welche auf der folgenden Seite erklärt wird.
							Im Anschluss erhalten Sie den Link zu der Umfrage.</br></br>
							Die Dauer für die Teilnahme an dem Experiment beträgt <b>rund 10 Minuten</b>. 
							Bitte klicken Sie nun auf den untenstehenden Link um das Experiment zu starten und lesen Sie sich die Hinweise aufmerksam durch. 
							Vielen Dank für Ihre Teilnahme.
						
						</p>
					</header>

				</div>
			</section>
			
		<!-- CTA -->
			<section id="cta" class="wrapper style3">
				<ul class="actions">
					<li><a href="szenario.html" class="button big">Zum Szenario</a></li>
				</ul>
			</section>
<!-- Skript, dass die beiden anderen Seiten schon einmal lädt (Linda, Dialogflow-Webhook)-->
	<?php
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ca1treament.herokuapp.com/");
// Set so curl_exec returns the result instead of outputting it.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Get the response and close the channel.
$response = curl_exec($ch);
curl_close($ch);

 $ci = curl_init();
curl_setopt($ci, CURLOPT_URL, "https://chatbotexperiment1.herokuapp.com/");
// Set so curl_exec returns the result instead of outputting it.
curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
// Get the response and close the channel.
$response1 = curl_exec($ci);
curl_close($ci);

 $cf = curl_init();
curl_setopt($cf, CURLOPT_URL, "https://ca2experiment.herokuapp.com/");
// Set so curl_exec returns the result instead of outputting it.
curl_setopt($cf, CURLOPT_RETURNTRANSFER, true);
// Get the response and close the channel.
$response2 = curl_exec($cf);
curl_close($cf);
?>		


	</body>
</html>
