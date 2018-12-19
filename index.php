<!DOCTYPE HTML>

<html>
	<head>
		<title> </title>
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
						<p>Vielen Dank für Ihre Teilnahme an diesem Experiment! 
							Die Dauer beträgt insgesamt <b>ca. 10 Minuten</b>.
							Nach einer kurzen Einleitung in das <b>Szenario</b> werden Sie sich 
							für wenige Minuten mit einem so gennanten <b>Chatbot</b> unterhalten. Dabei handelt es sich um eine Software, mit der Sie textbasiert kommunizieren können. Das heißt, sie kommunizieren nicht mit einem Menschen, sondern mit einem Programm.
							Ziel ist es, eine kleine Aufgabe zu lösen, die Ihnen auf der folgenden Seite erklärt wird.
							Bitte lesen Sie sich das Szenario und die Aufgabenstellung <b>!aufmerksam!</b> durch und folgen dann dem Link zum Chatbot.
							Im Anschluss an das Experiment werden Ihnen einige Fragen zu der Unterhaltung mit dem Chatbot gestellt.
						</br>
						</br>
						VIELEN DANK!
						</p>
					</header>

				</div>
			</section>
			
		<!-- CTA -->
			<section id="cta" class="wrapper style3">
				<h2>Hier gehts zum Szenario!</h2>
				<ul class="actions">
					<li><a href="szenario.html" class="button big">Los geht's</a></li>
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
?>		


	</body>
</html>
