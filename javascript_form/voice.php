<!DOCTYPE html>
<html>
<head>
	<title>Voice Recognition</title>
  	<!-- <meta http-equiv="refresh" content="30"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Oswald:300,300i,400,400i,500,500i,600,600i,700,700i|Tangerine:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		body{
			font-family: verdana;
		}
		#result{
			height:200px;
			border: 1px solid #ccc;
			padding:10px;
			box-shadow:0 0 10px 0 #bbb;
			margin-bottom: 30px;
			font-size:  14px;
			line-height: 25px;
		}
		button{
			font-size: 20px;
			position:absolute;
			top:248px;
			left: 50%;
			border: 1px solid green;
			border-radius: 250px;
			cursor:pointer;
			padding-top: 5px;
			padding-left: 13px;
			padding-right: 13px;
			padding-bottom: 5px;
			background-color: green;
			color:white;
		}
		.btn-success {
		    color: #fff;
		    background-color: #28a745;
		    border-color: #28a745;
		    border-radius: 50%;
		    padding-top: 10px;
		    padding-bottom: 10px;
		    padding-left: 18px;
		    padding-right: 18px;
		    font-size: 1.6vw;
		}

	</style>
</head>
<body>
	<h4 align="center">Speech </h4>
	<div id="result"></div>
	<button class="btn btn-success tooltip" onClick="startconv();"><i class="fa fa-microphone"></i></button>
	<script type="text/javascript">
		var r = document.getElementById('result');

		function startconv()
		{
			if('webkitSpeechRecognition' in window)
			{
				var speechRecognizer = new webkitSpeechRecognition();
				speechRecognizer.continuous = true;
				speechRecognizer.interimResults = true;
				speechRecognizer.lang = 'en-IN';
				speechRecognizer.start();

				var finalTranscripts = '';

				speechRecognizer.onresult = function(event){
					var interimTranscripts = '';
					for(var i = event.resultIndex; i < event.results.length; i++)
					{
						var transcipt = event.results[i][0].transcript;
						transcript.replace("\n","<br>");
						if(event.results[i].isFinal)
						{
							finalTranscripts += transcript;
						}
						else
						{
							interimTranscripts += transcript;
						}
					}
					r.innerHTML = finalTranscripts + '<span style="color:#999">' + interimTranscripts + '</span>';
				};

				speechRecognizer.onerror = function(event){

				};
			}
			else
			{
				r.innerHTML = 'Your Browser Does not Support';
			}	
		}

		
		
	</script>


<?php
function create_image()
{ 
      // $image = imagecreate(400, 300);
      // imagecolorallocate($image, 255, 255, 255);
      // $textcolor = imagecolorallocate($image, 0, 0, 0);
      // imagettftext($image, 28, 0, 55, 55, $textcolor, 'ARIALI.TTF', rand(1000, 9999));
      // header("Content-type: image/png");
      // imagepng($image);
      // imagedestroy($image);

	$im = imagecreatefromjpeg("img/2.jpg") or die("GD LIbrary not activated.");
	imagecolorallocate($im, 180, 22, 205);
	$textcolor = imagecolorallocate($im, 0, 0, 0);
	// $font="fonts/ARIALI.TTF";
 //    imagettftext($im, 28, 0, 55, 55, $textcolor, $font, rand(1000, 9999));
	imagejpeg($im,"demo123.jpg");
}
create_image();
?>
<img src="demo123.jpg">
</body>
</html>