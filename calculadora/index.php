<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Calculadora</title>
	<meta charset="UTF-8">
  	<meta name="description" content="Website for people who wants to calculate faster and easy.">
  	<meta name="keywords" content="Calc, Calculadora, calculator, calc,prime number, find prime numbers, find, armstrong numbers, armstrong, find even and odd numbers, even, odd, find celsius from farihnheit, degree to celsius">
  	<meta name="author/sourabh" content="Sourabh Sen">
  	<!-- <meta http-equiv="refresh" content="30"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<style type="text/css">
html{
	scroll-behavior: smooth;
}

#calc{
	margin-top: 7%;
}
hr{
	margin-top: 0.5rem!important;
    margin-bottom: 0.5rem!important;
}
.btn{
	width:23.5%;
}
.btn:hover{
	transition: all .25s ease-in-out;
	padding-left:2%;
	padding-right:2%;
}
.row1 a{
	display: none;
}
#start{
	background-color: #2c3e50;
    padding-bottom: 10px;
    padding-top: 10px;
    position:fixed;
    width:100%;
    z-index:2;
}
#navdiv1{
	float:left;
	padding:5px;
	margin-left: 90px;
}
#navdiv1 a{
	text-decoration: none;
	color:white;
	font-size: 1.5rem;
	padding:15px;
	margin:10px;
}
#navdiv2{
	float:right;
	padding:15px;
	margin-right: 90px;
}
#navdiv2 a{
	font-size: 1rem;
	margin: 10px;
	text-decoration: none;
	color: white; 
	padding:15px;
}
#navdiv2 a:hover{
	color: #18bc9c;	
}
#navdiv2 a:active{
	color: white;
	background-color: #18bc9c;
}

/*################################# PREVIOUS PROJECT CSS #############################################*/


#portfolio{
	background-color: white;
	padding-top: 100px;
	padding-bottom: 65px;
}
#portfolio h2{
	color:#2c3e50;
	font-size: 3rem;
	font-weight: 700;
	margin-bottom: -4px;
}
.star-light2{
	background-color:#2c3e50;
	height:3px;
	width:230px;
	margin-bottom: 40px;
}

.portfoliodiv1{
	display: inline-flex;
	width: 84%;
/*	margin-left: 100px;
	margin-right: 100px;*/
}
.portsection{
	margin-top: 50px;
    margin-right: 30px;
}
.portsection img{
	border: 1px solid lightgrey;
	width: 360px;
    height: 260px;
}
.container1 {
  position: relative;
 width: 360px;
    height: 260px;
  cursor:pointer;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #fff;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .25s ease;
}
.container1:hover .overlay {
  height: 50%;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
}
.over-text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.over-text .team-icon-list i{
    font-size: 24px;
    color: #2c3e50;
    background-color: #fff;
    padding-left: 10px!important;
    padding-right: 10px!important;
    cursor:pointer;
}
.over-text .team-icon-list i:hover{
    color: #18bc9c;
    transition: .35s ease-in-out;
}
.team-icon-list{
    padding-left: 0px!important;
}
.team-icon-list li{
    list-style: none;
    display:inline-block;
   
}
.over-text h4{
    width:255px;
    color: #2c3e50;
    font-size: 24px;
    font-weight: 700;
    letter-spacing: 2px;
    line-height: 2;
}


/*################################# ABOUT CSS #############################################*/

#about{
	background-color: #2c3e50;
	padding-top: 65px;
	padding-bottom: 65px; 
}
#about h2{
	color:white;
	font-size: 3rem;
	font-weight: 700;
	margin-bottom: 25px;

}
.star-light3{
	background-color: white;
	height:3px;
	width:230px;
	margin-bottom: 20px;
}

#about_row{
	line-height: 1.9em;
    display: flex;
    width: 61%;
    margin-left: 25px;
	margin-bottom: 10px;
}
#about_column{
    color: white;
    text-align: left;
    padding: 19px;
    font-size: 1.25rem;
    font-weight: 300;
}
#about_column a{
	text-decoration: blink;
    color: white;
    text-align: left;
    font-size: 1.25rem;
    font-weight: 300;
}



/*################################# FEEDBACK CSS #############################################*/

#feedback{
	background-color: white;
	padding-top: 65px;
	padding-bottom: 65px;	
}

#feedback h2{
	color:#2c3e50;
	font-size: 3rem;
	font-weight: 700;
}
.star-light4{
	background-color:#2c3e50;
	height:3px;
	width:230px;
}
#feedback_row{
	margin-top: 50px;
}
.form-control
{	
	border-radius:0rem!important;
	box-shadow: none!important;
	border:hidden;
	border-bottom:1px solid lightgrey;
}
.button_send{
	background-color: #18bc9c;
	height: 50px;
	width:100%;
	font-weight: 700;
	font-size: 1.2rem;
}
.button_send:hover{
	transition: .25s ease-in-out;
	background-color: #2c3e50;
}

/*################################# FOOTER CSS #############################################*/


footer{
	background-color: #2c3e50;
	padding-top: 50px;
    padding-bottom: 20px;
    margin-top:-4px;

}
.h5{
	color:white;
	font-family: sans-serif;
	font-weight: normal;
}
.lasticonf{
	cursor:pointer;
	font-size: 2rem;
	color: white;
	padding-left: 18px;
	padding-right: 18px; 
	padding-bottom: 10px;
	padding-top: 10px;
	background-color: #2c3e50;
	border: 2px solid white;
	border-radius: 50px;
}
.lasticonf:hover{
	transition: .35s ease;
	background-color: white;
	color: #1a252f;
}
.lasticonf.active{
	color: green;
	border: 2px solid white;
}
.lasticong{
	cursor:pointer;
	font-size: 2rem;
	color: white;
	padding-left: 10px;
    padding-right: 6px;
    padding-bottom: 12px;
    padding-top: 12px;
	background-color: #2c3e50;
	border: 2px solid white;
	border-radius: 50px;
}
.lasticong:hover{
	transition: .35s ease;
	background-color: white;
	color: #1a252f;
}
.lasticong.active{
	color: green;
	border: 2px solid white;
}
.lasticonl{
	cursor:pointer;
	font-size: 2rem;
	color: white;
	padding-left: 12px;
    padding-right: 12px;
    padding-bottom: 10px;
    padding-top: 10px;
	background-color: #2c3e50;
	border: 2px solid white;
	border-radius: 50px;
}
.lasticonl:hover{
	transition: .35s ease;
	background-color: white;
	color: #1a252f;
}
.lasticonl.active{
	color: green;
	border: 2px solid white;
}
.lasticon{
	cursor:pointer;
	font-size: 2rem;
	color: white;
	padding: 10px;
	background-color: #2c3e50;
	border: 2px solid white;
	border-radius: 50px;
}
.lasticon:hover{

	background-color: white;
	color: #1a252f;
}
.lasticon.active{
	color: green;
	border: 2px solid white;
}
</style>
</head>
<body>

<div class="container-fluid">	
	<div class="row">
		<div id="start">
			<div id="navdiv1">
				<nav>
					<a href="#"><b> Calculadora </b></a>
				</nav>
			</div>
			<div id="navdiv2">
				<nav>
					<a href="#portfolio"><b> Portfolio </b></a>
					<a href="#about"><b> About </b></a>
					<a href="#feedback"><b> Feedback </b></a>
				</nav>
			</div>
		</div>
	</div>
</div>

<div id="calc" class="container">
	<div class="row calc_row">
		<div class="col-6">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<div class="row">
					<input class="form-control" type="text" name="a" placeholder="Enter value of A." required/>
				</div>
				<br>
				<div class="row">
					<input required class="form-control" type="text" name="b" placeholder="Enter value of B."/>
				</div>
				
				<hr>
				<div class="row">
					<div class="container">
						<input title="Find Addition" required class="btn border btn-sm" type="submit" name="action" value="Add"/>&nbsp;
						<input title="Find Subtraction" required class="btn btn-sm btn-primary" type="submit" name="action" value="Subtract"/>&nbsp;
						<input title="Find Multiplication" required class="btn btn-sm btn-secondary" type="submit" name="action" value="Multiply"/>&nbsp;
						<input title="Find Division" required class="btn btn-sm btn-success" type="submit" name="action" value="Divide"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input title="Swap two integers/strings" required class="btn btn-sm btn-info" type="submit" name="action" value="Swapping"/>&nbsp;
						<input title="Find Modules" required class="btn btn-sm btn-warning" type="submit" name="action" value="Modules"/>&nbsp;
						<input title="Find Factorial" required class="btn btn-sm btn-danger" type="submit" name="action" value="Factorial"/>&nbsp;
						<input title="Find Even/Odd" required class="btn btn-sm btn-dark" type="submit" name="action" value="Even/Odd"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input title="Find Vowels" required class="btn btn-sm btn-light" type="submit" name="action" value="Vowel"/>&nbsp;
						<input title="Find Consonants" required class="btn btn-sm border" type="submit" name="action" value="Consonant"/>&nbsp;
						<input title="Find Leap Year" required class="btn btn-sm btn-primary" type="submit" name="action" value="Leap Year"/>&nbsp;
						<input title="Add Digits" required class="btn btn-sm btn-secondary" type="submit" name="action" value="Add Digit"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input title="Find GCD/LCM" required class="btn btn-sm btn-success" type="submit" name="action" value="GCD/LCM"/>&nbsp;
						<input title="Convert into Binary" required class="btn btn-sm btn-info" type="submit" name="action" value="Binary"/>&nbsp;
						<input title="Generate Pyramid" required class="btn btn-sm btn-warning" type="submit" name="action" value="Pyramid"/>&nbsp;
						<input title="Find Prime Number" required class="btn btn-sm btn-danger" type="submit" name="action" value="Prime Number"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input title="Find Fibonacci" required class="btn btn-sm btn-dark" type="submit" name="action" value="Fibonacci"/>&nbsp;
						<input title="Generate Floyd's Triangle" required class="btn btn-sm btn-light" type="submit" name="action" value="Floyd Triangle"/>&nbsp;
						<input title="Find Greater" required class="btn btn-sm border" type="submit" name="action" value="Greater"/>&nbsp;
						<input title="Find Smaller" required class="btn btn-sm btn-primary" type="submit" name="action" value="Smaller"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input title="Letter Count" required class="btn btn-sm btn-secondary" type="submit" name="action" value="Letter Count"/>&nbsp;
						<input title="Word Count" required class="btn btn-sm btn-success" type="submit" name="action" value="Word Count"/>&nbsp;
						<input title="Reverse integer/string" required class="btn btn-sm btn-info" type="submit" name="action" value="Reverse"/>&nbsp;
						<input title="Append integer/string" required class="btn btn-sm btn-warning" type="submit" name="action" value="Append"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input title="Find Palindrome" required class="btn btn-sm btn-danger" type="submit" name="action" value="Palindrome"/>&nbsp;
						<input title="Sort string/number" required class="btn btn-sm btn-dark" type="submit" name="action" value="Sort"/>&nbsp;
						<input title="Convert into LowerCase" required class="btn btn-sm btn-light" type="submit" name="action" value="LowerCase"/>&nbsp;
						<input title="Convert into UpperCase" required class="btn btn-sm border" type="submit" name="action" value="UpperCase"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input required class="btn btn-sm btn-primary" type="submit" name="action" title="Generate Captcha" value="Captcha"/>&nbsp;
						<input required class="btn btn-sm btn-secondary" type="submit" name="action" title="Find Date Difference or Your Exact Age (Put Date in (YYYY-MM-DD) Format)" value="Date"/>&nbsp;
						<input required class="btn btn-sm btn-success" type="submit" name="action" title="Convert into Celsius/Degree" value="Celsius/Degree"/>&nbsp;
						<input required class="btn btn-sm btn-info" type="submit" name="action" title="Convert into Cryptography/Hashing code" value="Cryptography"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input required class="btn btn-sm btn-warning" type="submit" name="action" title="Generate BinaryHexa" value="BinaryHexa"/>&nbsp;
						<input required class="btn btn-sm btn-danger" type="submit" name="action" title="Find Quotient" value="Quotient"/>&nbsp;
						<input required class="btn btn-sm btn-dark" type="submit" name="action" title="Find Remainder" value="Remainder"/>&nbsp;
						<input required class="btn btn-sm btn-light" type="submit" name="action" title="Find Armstrong Number" value="Armstrong"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input required class="btn btn-sm border" type="submit" name="action" title="Generate Binary to Decimal" value="BintoDec"/>&nbsp;
						<input required class="btn btn-sm btn-primary" type="submit" name="action" title="Find Log of Numbers" value="Log"/>&nbsp;
						<input required class="btn btn-sm btn-secondary" type="submit" name="action" title="Find Log of Base 10" value="Log 10"/>&nbsp;
						<input required class="btn btn-sm btn-success" type="submit" name="action" title="Convert Radian into Degree" value="Radian2Degree"/>&nbsp;
						
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input required class="btn btn-sm btn-info" type="submit" name="action" title="Find Tangent of Number" value="Tangent"/>&nbsp;
						<input required class="btn btn-sm btn-warning" type="submit" name="action" title="Find Hyperbolic Tangent of Number" value="H-Tangent"/>&nbsp;
						<input required class="btn btn-sm btn-danger" type="submit" name="action" title="Find Square Root of Number" value="Square Root"/>&nbsp;
						<input required class="btn btn-sm btn-dark" type="submit" name="action" title="Find Hypotenuse of Numbers" value="Hypotenuse"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input required class="btn btn-sm btn-light" type="submit" name="action" title="See Current Date and Time" value="Date/Time"/>&nbsp;
						<input required class="btn btn-sm border" type="submit" name="action" title="Display Table of given values" value="Table"/>&nbsp;
						<input required class="btn btn-sm btn-primary" type="submit" name="action" title="Display Alphatbets" value="Alphabets"/>&nbsp;
						<input required class="btn btn-sm btn-secondary" type="submit" name="action" title="Display Values from a to b" value="Values"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input required class="btn btn-sm btn-success" type="submit" name="action" title="Find power of number a to b" value="Power"/>&nbsp;
						<input required class="btn btn-sm btn-info" type="submit" name="action" title="Find odd numbers from a to b" value="All Odd"/>&nbsp;
						<input required class="btn btn-sm btn-warning" type="submit" name="action" title="Find Year/Week/Day from a and b" value="Year/Week/Day"/>&nbsp;
						<input required class="btn btn-sm btn-danger" type="submit" name="action" title="Find Sum from a to b" value="All Sum"/>&nbsp;
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="container">
						<input required class="btn btn-sm btn-dark" type="submit" name="action" title="Find prme or not in a and b" value="Prime/Not"/>&nbsp;
						<input required class="btn btn-sm btn-light" type="submit" name="action" title="Find Algebra of a and b" value="Algebra"/>&nbsp;
						<input required class="btn btn-sm border" type="submit" name="action" title="Find Sum(1/N)Series of a and b" value="Sum(1/N)Series"/>&nbsp;
						<input required class="btn btn-sm btn-primary" type="submit" name="action" title="Find Sum(N^2)Series of a and b" value="Sum(N^2)Series"/>&nbsp;
					</div>
				</div>
			</form>
		</div>
		<div class="col-6 output">
			<h4>Output : </h4>
			<?php
				if(isset($_POST['action']))
				{
					$a = $_POST['a'];
					$b = $_POST['b'];
					$val = $_POST['action'];
					
					switch($val)
					{
						case "Add":
							if(is_numeric($a) && is_numeric($b))
							{
								$sum = $a + $b;
								echo "<br>Sum of a and b : <strong>".$sum."</strong>";

							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Add Operation.</strong>";
							}
							break;

						case "Subtract":
							if(is_numeric($a) && is_numeric($b))
							{
								$sub = $a - $b;
								echo "<br>Subtraction of a and b : <strong>".$sub."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Subtract Operation.</strong>";
							}
							break;

						case "Multiply":
							if(is_numeric($a) && is_numeric($b))
							{
								$mul = $a * $b;
								echo "<br>Multiplication of a and b : <strong>".$mul."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Multiply Operation.</strong>";
							}
							break;

						case "Divide":
							if(is_numeric($a) && is_numeric($b))
							{
								$div = $a / $b;
								echo "<br>Division of a to b : <strong>".$div."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Divide Operation.</strong>";
							}
							break;

						case "Swapping":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{
								echo "<br>Before Swapping a : <strong>".$a."</strong> and b : <strong>".$b."</strong>";
								list($a,$b) = array($b,$a);
								echo "<br>After Swapping a : <strong>".$a."</strong> and b : <strong>".$b."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply Swapping Operation.</strong>";
							}
							break;

						case "Modules":
							if(is_numeric($a) && is_numeric($b))
							{
								$mod = $a % $b;
								echo "<br>Modules of a and b : <strong>".$mod."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Modules Operation.</strong>";
							}
							break;

						case "Factorial":
							if(is_numeric($a) && is_numeric($b))
							{
								if($a > $b)
								{
									$value = $a - $b;
								}
								else
								{
									$value = $b - $a;	
								}							
								$fact = 1;
								$i = 1;
								while($i <= $value)
								{
									$fact = $fact * $i;
									$i++;
								}
								echo "<br>Factorial of difference between a and b : <strong>".$fact."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Factorial Operation.</strong>";
							}
							break;

						case "Even/Odd":
							if(is_numeric($a) && is_numeric($b))
							{
								if ($a%2 == 0)
							    	echo "<br>a = <strong>".$a."</strong> is Even.<br>";
							   	else
							    	echo "<br>a = <strong>".$a."</strong> is Odd.<br>";
							    if ($b%2 == 0)
							    	echo "<br>b = <strong>".$b."</strong> is Even.<br>";
							   	else
							    	echo "<br>b = <strong>".$b."</strong> is Odd.<br>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Even/Odd Operation.</strong>";
							}
						    break;

						case "Vowel":
							if(!is_numeric($a) && !is_numeric($b))
							{
								echo "<br>In a string Number of Vowels are : <strong>".preg_match_all('/[aeiouAEIOU]/i',$a,$matches)."</strong>.";
								$total = 0;
								$vowels = array('a','e','i','o','u','A','E','I','O','U');
								echo "<br>Vowels in a are : ";
								for ($i=0;$i<strlen($a);$i++)
								{
								    for ($j = 0;$j<count($vowels);$j++)
								        if ($a[$i] == $vowels[$j])
								        {
								            echo "<strong>".$vowels[$j]." </strong>";
								            break;
								        }
								}
								echo "<br>In b string Number of Vowels are : <strong>".preg_match_all('/[aeiouAEIOU]/i',$b,$matches)."</strong>.";
								echo "<br>Vowels in b are : ";
								for ($i=0;$i<strlen($b);$i++)
								{
								    for ($j = 0;$j<count($vowels);$j++)
								        if ($b[$i] == $vowels[$j])
								        {
								            echo "<strong>".$vowels[$j]." </strong>";
								            break;
								        }
								}
							}
							else
							{
								echo "Message : <strong>Value must be an string for apply Consonant Operation.</strong>";
							}
							break;

						case "Consonant":
							if(!is_numeric($a) && !is_numeric($b))
							{
								echo "<br>In a string Number of Consonants are : <strong>".preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/i',$a,$matches)."</strong>.";
								$total = 0;
								$conso = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z','B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Y','Z');
								echo "<br>Consonants in a are : ";
								for ($i=0;$i<strlen($a);$i++)
								{
								    for ($j = 0;$j<count($conso);$j++)
								        if ($a[$i] == $conso[$j])
								        {
								            echo "<strong>".$conso[$j]." </strong>";
								            break;
								        }
								}
								echo "<br>In a string Number of Consonants are : <strong>".preg_match_all('/[bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ]/i',$b,$matches)."</strong>.";
								echo "<br>Consonants in b are : ";
								for ($i=0;$i<strlen($b);$i++)
								{
								    for ($j = 0;$j<count($conso);$j++)
								        if ($b[$i] == $conso[$j])
								        {
								            echo "<strong>".$conso[$j]." </strong>";
								            break;
								        }
								}
							}
							else
							{
								echo "Message : <strong>Value must be an string for apply Consonant Operation.</strong>";
							}
							break;

						case "Leap Year":
							if(is_numeric($a) && is_numeric($b))
							{
								if ($a%400 == 0) // Exactly divisible by 400 e.g. 1600, 2000
								    echo "<br><strong>$a</strong> is a leap year.";
								else if ($a%100 == 0) // Exactly divisible by 100 and not by 400 e.g. 1900, 2100
								    echo "<br><strong>$a</strong> isn't a leap year.";
								else if ($a%4 == 0) // Exactly divisible by 4 and neither by 100 nor 400 e.g. 2016, 2020
								    echo "<br><strong>$a</strong> is a leap year.";
								else // Not divisible by 4 or 100 or 400 e.g. 2017, 2018, 2019
								    echo "<br><strong>$a</strong> isn't a leap year.";

								if ($b%400 == 0) // Exactly divisible by 400 e.g. 1600, 2000
								    echo "<br><strong>$b</strong> is a leap year.";
								else if ($b%100 == 0) // Exactly divisible by 100 and not by 400 e.g. 1900, 2100
								    echo "<br><strong>$b</strong> isn't a leap year.";
								else if ($b%4 == 0) // Exactly divisible by 4 and neither by 100 nor 400 e.g. 2016, 2020
								    echo "<br><strong>$b</strong> is a leap year.";
								else // Not divisible by 4 or 100 or 400 e.g. 2017, 2018, 2019
								    echo "<br><strong>$b</strong> isn't a leap year.";    
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Leap Year Operation.</strong>";
							}
							break;

						case "Add Digit":
							$suma = 0;
							$sumb = 0;
							if(is_numeric($a) && is_numeric($b))
							{
								$tempa = $a;
	 							while ($tempa != 0)
								{
								  $remaindera = $tempa % 10;
								  $suma = $suma + $remaindera;
								  $tempa = $tempa / 10;
								}
								$tempb = $b;
	 							while ($tempb != 0)
								{
								  $remainderb = $tempb % 10;
								  $sumb = $sumb + $remainderb;
								  $tempb = $tempb / 10;
								}
								echo "<br>Add digit of a : <strong>".$suma."</strong>";
								echo "<br>Add digit of b : <strong>".$sumb."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Add Digit Operation.</strong>";	
							}
							break;

						case "GCD/LCM":
							if(is_numeric($a) && is_numeric($b))
							{
							    for($i=1; $i <= $a && $i <= $b; ++$i)
							    {
							        // Checks if i is factor of both integers
							        if($a%$i==0 && $b%$i==0)
							            $gcd = $i;
							    }
							    $lcm = ($a*$b)/$gcd;
								echo "<br>GCD of $a and $b : <strong>".$gcd."</strong>";
								echo "<br>LCM of $a and $b : <strong>".$lcm."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply GCD & LCM Operation.</strong>";
							}
							break;
						
						case "Binary":
							if(is_numeric($a) && is_numeric($b))
							{	
								echo "<br>Binary of $a : ";
								for ($c = 31; $c >= 0; $c--)
								{
								    $k = $a >> $c;
								    if ($k & 1)
									    echo "<strong>1</strong>";
								    else
								    	echo "<strong>0</strong>";
								}
								echo "<br>Binary of $b : ";
								for ($c = 31; $c >= 0; $c--)
								{
								    $k = $b >> $c;
								    if ($k & 1)
									    echo "<strong>1</strong>";
								    else
								    	echo "<strong>0</strong>";
								}
							}
							else
							{
								echo "Message : <strong>Value must be an integer/decimal for apply Binary Operation.</strong>";
							}
							break;
						
						case "Pyramid":
							if(is_numeric($a) && is_numeric($b))
							{	
								echo "<br>Star Pyramid of a : <br><strong>";
								$tempa = $a;
								for ($row = 1; $row <= $tempa; $row++)  // Loop to print row
								{
									for ($c = 1; $c < $tempa; $c++)
									{
										print("&nbsp;&nbsp;");
									}
								    $tempa--;
								    for ($c = 1; $c <= 2*$row - 1; $c++) // Loop to print stars in a column
								    {
								    	print("*");
								    }
								    echo "<br>";
								}
								echo "</strong>";
								echo "<br>Star Pyramid of b : <br><strong>";
								$tempb = $b;
								for ($row = 1; $row <= $tempb; $row++)  // Loop to print row
								{
									for ($c = 1; $c < $tempb; $c++)
									{
										print("&nbsp;&nbsp;");
									}
								    $tempb--;
								    for ($c = 1; $c <= 2*$row - 1; $c++) // Loop to print stars in a column
								    {
								    	print("*");
								    }
								    echo "<br>";
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Pyramid Operation.</strong>";
							}
							break;

						case "Prime Number":
							if(is_numeric($a) && is_numeric($b))
							{
								$i=0;
								$j=0;
								if ( $a >= 1 )
							   	{
							    	echo "<br>First $a prime numbers are : ";
							    	echo "<strong>";
							   	}
							   	for($count = 2;$count <= $a; )
							   	{
							    	for ( $c = 2 ; $c <= $i - 1 ; $c++ )
							      	{
							        if ( $i%$c == 0 )
							            break;
							      	}
							      	if ( $c == $i )
							      	{
							        	echo "$i ";
							        	$count++;
							      	}
							      	$i++;
							   	}
							   	echo "</strong>";
							   	if ( $b >= 1 )
							   	{
							    	echo "<br>First $b prime numbers are : ";
							    	echo "<strong>";
							   	}
							   	for($count = 2; $count <= $b; )
							   	{
							    	for ( $k = 2 ; $k <= $j - 1 ; $k++ )
							      	{
							        if ( $j%$k == 0 )
							            break;
							      	}
							      	if ( $k == $j )
							      	{
							        	echo "$j ";
							        	$count++;
							      	}
							      	$j++;
							   	}
							   	echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Prime Number Operation.</strong>";
							}
						   	break;

						case "Fibonacci":
 							if(is_numeric($a) && is_numeric($b))
							{
								$first = 0;$second = 1;$next;$c;
								echo "<br>First $a terms of Fibonacci series are : ";
								echo "<strong>";
								for ($c = 0; $c < $a; $c++)
								{
									if($c <= 1)
								    	$next = $c;
								    else
								    {
									    $next = $first + $second;
									    $first = $second;
									    $second = $next;
								    }
								    echo "$next  ";
								}
								echo "</strong>";
								$first = 0;$second = 1;$next;$c;
								echo "<br>First $b terms of Fibonacci series are : ";
								echo "<strong>";
								for ($c = 0; $c < $b; $c++)
								{
									if($c <= 1)
								    	$next = $c;
								    else
								    {
									    $next = $first + $second;
									    $first = $second;
									    $second = $next;
								    }
								    echo "$next  ";
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Fibonacci Operation.</strong>";
							}
						   	break;

						case "Floyd Triangle":
							if(is_numeric($a) && is_numeric($b))
							{
								$i;$c;$d = 1;
	 							echo "<br>Floyd's triangle of a : <br>";
								echo "<strong>";
								for ($i = 1; $i <= $a; $i++)
								{
								    for ($c = 1; $c <= $i; $c++)
								    {
									    echo "$d&nbsp;";
								    	$d++;
								    }
								    echo "<br>";
								}
								echo "</strong>";
								$j;$k;$e = 1;
	 							echo "<br>Floyd's triangle of b : <br>";
								echo "<strong>";
								for ($j = 1; $j <= $b; $j++)
								{
								    for ($k = 1; $k <= $j; $k++)
								    {
									    echo "$e&nbsp;";
								    	$e++;
								    }
								    echo "<br>";
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Floyd Triangle Operation.</strong>";
							}
						   	break;

						case "Greater":
							if(is_numeric($a) && is_numeric($b))
							{
	 							echo "<br>Greater from $a and $b is : ";
								echo "<strong>";
								if($a > $b)
								{
									echo $a;
								}
								else if($a == $b)
								{
									echo "Both a and b are equal.";
								}
								else
								{
									echo $b;
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Greater Operation.</strong>";
							}
						   	break;

						case "Smaller":
							if(is_numeric($a) && is_numeric($b))
							{
	 							echo "<br>Smaller from $a and $b is : ";
								echo "<strong>";
								if($a < $b)
								{
									echo $a;
								}
								else if($a == $b)
								{
									echo "Both a and b are equal.";
								}
								else
								{
									echo $b;
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Small Operation.</strong>";
							}
						   	break;

						case "Letter Count":
							if(!is_numeric($a) && !is_numeric($b))
							{
	 							echo "<br>Letter Count of $a is : ";
								echo "<strong>";
								echo strlen($a);
								echo "</strong>";
								echo "<br>Letter Count of $b is : ";
								echo "<strong>";
								echo strlen($b);
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an string for apply Letter Count Operation.</strong>";
							}
						   	break;

						case "Word Count":
							if(!is_numeric($a) && !is_numeric($b))
							{
	 							echo "<br>Word Count of $a is : ";
								echo "<strong>";
								echo str_word_count($a);
								echo "</strong>";
								echo "<br>Word Count of $b is : ";
								echo "<strong>";
								echo str_word_count($b);
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an string for apply Word Count Operation.</strong>";
							}
						   	break;

						case "Reverse":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{
	 							echo "<br>Reverse of $a is : ";
								echo "<strong>";
								echo strrev($a);
								echo "</strong>";
								echo "<br>Reverse of $b is : ";
								echo "<strong>";
								echo strrev($b);
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply Reverse Operation.</strong>";
							}
						   	break;

						case "Append":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{
	 							echo "<br>String a : $a";
	 							echo "<br>String b : $b";
								$a .= " ".$b;
								echo "<br>Append String a and b : ";
								echo "<strong>";
								echo $a;
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply Append Operation.</strong>";
							}
						   	break;

						case "Palindrome":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{	
								if (strrev($a) == $a)  // Comparing input string with the reverse string
							    	echo "<br><strong>$a is a palindrome.</strong>";
							  	else
							    	echo "<br><strong>$a isn't a palindrome.</strong>";
								if (strrev($b) == $b)  // Comparing input string with the reverse string
							    	echo "<br><strong>$b is a palindrome.</strong>";
							  	else
							    	echo "<br><strong>$b isn't a palindrome.</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply Palindrome Operation.</strong>";
							}
						   	break;

						case "Sort":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{		
								echo "<br>$a sort to : ";
								$tempa = str_split($a);
								sort($tempa);
								$a = implode('',$tempa);
								echo "<strong>".$a."</strong>";
								echo "<br>$b sort to : ";
								$tempb = str_split($b);
								sort($tempb);
								$b = implode('',$tempb);
								echo "<strong>".$b."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply Sort Operation.</strong>";
							}
						   	break;

						case "LowerCase":
							if(!is_numeric($a) && !is_numeric($b))
							{		
								echo "<br>$a convert to : ";
								echo "<strong>".strtolower($a)."</strong>";
								echo "<br>$b convert to : ";
								echo "<strong>".strtolower($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an string for apply LowerCase Operation.</strong>";
							}
						   	break;

						case "UpperCase":
							if(!is_numeric($a) && !is_numeric($b))
							{		
								echo "<br>$a convert to : ";
								echo "<strong>".strtoupper($a)."</strong>";
								echo "<br>$b convert to : ";
								echo "<strong>".strtoupper($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an string for apply UpperCase Operation.</strong>";
							}
						   	break;

						case "Captcha":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{	
								if((strlen($a)>=5)||(strlen($b)>=5))
								{
									$a .= $b;
									echo "Your Generated Captcha : <strong>".substr(str_shuffle($a),0,8)."</strong>";
								}
								else
								{
									echo "Message : <strong>Enter integer/string length of 5 or maximum.</strong>";
								}
							}
							else
							{
								echo "Message : <strong>Value must be an string for apply UpperCase Operation.</strong>";
							}
						   	break;

						case "Date":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{	
								    $date1 = $a;
									$date2 = $b;
									$diff = abs(strtotime($date2) - strtotime($date1));
									$years = floor($diff / (365*60*60*24));
									$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
									$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
									echo "Date Difference between $a and $b : ";
									echo "<strong>";
									printf("%d years, %d months, %d days", $years, $months, $days);
									echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be a date format(YYYY-MM-DD) for apply Date Operation.</strong>";
							}
						   	break;

						case "Celsius/Degree":
							if(is_numeric($a) && is_numeric($b))
							{
								$celsius = ($a - 32) * 5 / 9;
								$degree = ($b - 32) * 5 / 9;
								echo "<br>Celsius value of Fahrenheit $a : <strong>".$celsius."</strong>";
								echo "<br>Celsius value of Fahrenheit $b : <strong>".$degree."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Celsius/Degree Operation.</strong>";
							}
							break;

						case "Cryptography":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{
								echo "<br>Cryptographic $a is : <strong>".md5($a)."</strong>";
								echo "<br>Cryptographic $b is : <strong>".md5($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply Cryptography Operation.</strong>";
							}
							break;

						case "BinaryHexa":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{
								echo "<br>BinaryHexa of $a is : <strong>".bin2hex($a)."</strong>";
								echo "<br>BinaryHexa of $b is : <strong>".bin2hex($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply BinaryHexa Operation.</strong>";
							}
							break;

						case "Quotient":
							if(is_numeric($a) && is_numeric($b))
							{
								// Computes quotient-- a=dividend and b=divisor
							    $quotient = $a / $b;
							    echo "<br>Quotient of $a and $b : <strong>".$quotient."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Quotient Operation.</strong>";
							}
						    break;

						case "Remainder":
							if(is_numeric($a) && is_numeric($b))
							{
								// Computes quotient-- a=dividend and b=divisor
							    $remainder = $a % $b;
							    echo "<br>Remainder of $a and $b : <strong>".$remainder."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Remainder Operation.</strong>";
							}
							break;

						case "Armstrong":
							if((is_numeric($a) && is_numeric($b)) && ((strlen($a) == 3) && (strlen($b) == 3)))
							{	
								$result=0;$res=0;
								$aoriginal = $a;
							    while ($aoriginal != 0)
							    {
							        $remainder = $aoriginal%10;
							        $result += $remainder*$remainder*$remainder;
							        $aoriginal /= 10;
							    }
							    if($result == $a)
							        echo "<br><strong>$a</strong> is an Armstrong number.";
							    else
							        echo "<br><strong>$a</strong> is not an Armstrong number.";
							    $boriginal = $b;
							    while ($boriginal != 0)
							    {
							        $rem = $boriginal%10;
							        $res += $rem*$rem*$rem;
							        $boriginal /= 10;
							    }
							    if($result == $b)
							        echo "<br><strong>$b</strong> is an Armstrong number.";
							    else
							        echo "<br><strong>$b</strong> is not an Armstrong number.";
							}
							else
							{
								echo "Message : <strong>Value must be an integer of length 3 for apply Armstrong Operation.</strong>";
							}
							break;

						case "BintoDec":
							if(preg_match('~^[01]+$~',$a) && preg_match('~^[01]+$~',$b))
							{	
								$tempa = $a;
								$tempb = $b;
								$adecimal = 0; $i = 0; $remainder;$rem;$bdecimal = 0;$j=0;
							    while ($a!=0)
							    {
							        $remainder = $a%10;
							        $a /= 10;
							        $adecimal += $remainder*pow(2,$i);
							        ++$i;
							    }
							    while ($b!=0)
							    {
							        $rem = $b%10;
							        $b /= 10;
							        $bdecimal += $rem*pow(2,$j);
							        ++$j;
							    }
							    echo "<br>Binary to Decimal of $tempa : <strong>".$adecimal."</strong>";
							    echo "<br>Binary to Decimal of $tempb : <strong>".$bdecimal."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an binary form(0/1) for apply Binary to Decimal Operation.</strong>";
							}
							break;

						case "Log":
							if(is_numeric($a) && is_numeric($b))
							{
							    echo "<br>Logarithum of $a : <strong>".log($a)."</strong>";
							    echo "<br>Logarithum of $b : <strong>".log($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Logarithum Operation.</strong>";
							}
							break;

						case "Radian2Degree":
							if(is_numeric($a) && is_numeric($b))
							{
							    echo "<br>Degree of $a Radian : <strong>".rad2deg($a)."</strong>";
							    echo "<br>Degree of $b Radian : <strong>".rad2deg($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Radian to Degree Operation.</strong>";
							}
							break;

						case "Tangent":
							if(is_numeric($a) && is_numeric($b))
							{
							    echo "<br>Tangent of $a : <strong>".tan($a)."</strong>";
							    echo "<br>Tangent of $b : <strong>".tan($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Tangent Operation.</strong>";
							}
							break;

						case "H-Tangent":
							if(is_numeric($a) && is_numeric($b))
							{
							    echo "<br>Hyperbolic Tangent of $a : <strong>".tanh($a)."</strong>";
							    echo "<br>Hyperbolic Tangent of $b : <strong>".tanh($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Hyperbolic Tangent Operation.</strong>";
							}
							break;

						case "Square Root":
							if(is_numeric($a) && is_numeric($b))
							{
							    echo "<br>Square Root of $a : <strong>".sqrt($a)."</strong>";
							    echo "<br>Square Root of $b : <strong>".sqrt($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Square Root Operation.</strong>";
							}
							break;

						case "Log 10":
							if(is_numeric($a) && is_numeric($b))
							{
							    echo "<br>logarithum of $a : <strong>".log10($a)."</strong>";
							    echo "<br>logarithum of $b : <strong>".log10($b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Log of base 10 Operation.</strong>";
							}
							break;

						case "Hypotenuse":
							if(is_numeric($a) && is_numeric($b))
							{
							    echo "<br>Hypotenuse of $a and $b : <strong>".hypot($a,$b)."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Hypotenuse Operation.</strong>";
							}
							break;

						case "Date/Time":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{	
								//Set Default Time Zone
								date_default_timezone_set("Asia/Calcutta");
							    echo "<br>Current Date : <strong>".date("d-m-Y")."</strong>";
							    echo "<br>Current Time : <strong>".date("h:i:s A")."</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply Current Date and Time Operation.</strong>";
							}
							break;

						case "Table":
							if(is_numeric($a) && is_numeric($b))
							{	
								echo "<br>Table of $a : <br><strong>";
								for($i=1; $i<=10; ++$i)
							    {
							        echo "$a * $i = ".$a * $i." <br>";
							    }
							    echo "</strong>";
							    echo "<br><br>Table of $b : <br><strong>";
							    for($j=1; $j<=10; ++$j)
							    {
							        echo "$b * $j = ".$b * $j." <br>";
							    }
							    echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Table Operation.</strong>";
							}
							break;

						case "Alphabets":
							if((is_numeric($a) || is_numeric($b)) || (!is_numeric($a) || !is_numeric($b)))
							{	
								echo "Alphates are : <br><strong>";
							    foreach (range('A','Z') as $char) 
							    {
								    echo $char."&nbsp;";
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer/string for apply Alphabets Operation.</strong>";
							}
							break;

						case "Values":
							if(is_numeric($a) && is_numeric($b))
							{	
								echo "Values are : <br><strong>";
							    begin:
								if($a <= $b)
								{
									echo $a++."   ";
									goto begin;
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Value Operation.</strong>";
							}
							break;

						case "Power":
							if(is_numeric($a) && is_numeric($b))
							{	
								echo "Power of Number $a to $b are : <br><strong>";
							    $result = pow($a, $b);
								echo "$result</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Power Operation.</strong>";
							}
							break;

						case "All Odd":
							if(is_numeric($a) && is_numeric($b))
							{	
								echo "All Odd Number between $a to $b are : <br><strong>";
							    for($i = $a;$i <= $b;$i++)
								{
									if(($i % 2) == 1)
										echo "$i  ";
									else
										continue;
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply All Odd Operation.</strong>";
							}
							break;	

						case "Year/Week/Day":
							if(is_numeric($a) && is_numeric($b))
							{
								echo "<br>Result of $a : <strong>";					
								$years=$a/365;
								$weeks=($a%365)/7;
								$days=($a%365)%7;
								echo round($years)." years, ".round($weeks)." weeks, ".round($days)." days";
								echo "</strong>";
								echo "<br><br>Result of $b : <strong>";					
								$years=$b/365;
								$weeks=($b%365)/7;
								$days=($b%365)%7;
								echo round($years)." years, ".round($weeks)." weeks, ".round($days)." days";
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Year/Week/Day Operation.</strong>";
							}
							break;

						case "All Sum":
							if(is_numeric($a) && is_numeric($b))
							{	
								$sum=0;
								echo "<br>Sum from $a to $b : <strong>";					
								for($i=$a;$i<=$b;$i++)
								{
								    $sum=$sum+$i;
								}
								echo "$sum";
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply All Sum Operation.</strong>";
							}
							break;

						case "Prime/Not":
							if(is_numeric($a) && is_numeric($b))
							{	
								$count=0;
								echo "<br>Result of $a : <strong>";					
								for($i=1;$i<=$a;$i++)
								{
									if($a%$i==0)
								    {
								    	$count++;
								   	}
								}
								if($count==2)
								{
									echo "The given number $a is Prime Number.";
								}
								else
								{
								    echo "The given number $a is not Prime Number.";
								}
								echo "</strong>";
								$cnt=0;
								echo "<br>Result of $b : <strong>";					
								for($i=1;$i<=$b;$i++)
								{
									if($b%$i==0)
								    {
								    	$cnt++;
								   	}
								}
								if($cnt==2)
								{
									echo "The given number $b is Prime Number.";
								}
								else
								{
								    echo "The given number $b is not Prime Number.";
								}
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Prime/Not Operation.</strong>";
							}
							break;

						case "Algebra":
							if(is_numeric($a) && is_numeric($b))
							{	
								echo "<br>Algebra (a^2 + square root and multiply of (a and b) + b^2) of $a and $b : <strong>";					
								$sum=pow($a,2)+sqrt($a*$b)+pow($b,2);
								echo "$sum";
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Algebra (a^2 + square root and multiply of (a and b) + b^2) Operation.</strong>";
							}
							break;

						case "Sum(1/N)Series":
							if(is_numeric($a) && is_numeric($b))
							{	
								$sum=0;
								echo "<br>Sum of Series (1/N) of $a : <strong>";					
								for($i=1;$i<=$a;$i++)
								{
									$sum += (1 / $i);
								}
								echo floatval($sum);
								echo "</strong>";
								$res=0;
								echo "<br>Sum of Series (1/N) of $b : <strong>";					
								for($i=1;$i<=$b;$i++)
								{
									$res += (1 / $i);
								}
								echo floatval($res);
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Sum(1/N)Series Operation.</strong>";
							}
							break;

						case "Sum(N^2)Series":
							if(is_numeric($a) && is_numeric($b))
							{	
								$sum=0;
								echo "<br>Sum of Series (N^2) of $a : <strong>";					
								for($i=1;$i<=$a;$i++)
							    {
							        $sum+=pow($i,2);
							    }
							    echo $sum;
							    echo "</strong>";
								$res=0;
								echo "<br>Sum of Series (N^2) of $b : <strong>";					
								for($i=1;$i<=$b;$i++)
							    {
							        $res+=pow($i,2);
							    }
								echo $res;
								echo "</strong>";
							}
							else
							{
								echo "Message : <strong>Value must be an integer for apply Sum(N^2)Series Operation.</strong>";
							}
							break;
					}
				}
				?>
		</div>
	</div>
</div>

<div class="container-fluid">
	<hr>
</div>

<!-- ###################################### PRIVEOUS PROJECTS ######################################### -->
	<div id="portfolio">
		<center>
			<h2> PORTFOLIO </h2>
			<hr class="star-light2">
			<div class="portfoliodiv1">
				<div class="portsection">
					<div class="container1">
						<img class="wow fadeInUp" style="animation-duration: 1s;animation-delay: 0s;" class="image" src="img/pollsystem.jpg" alt="pollsystem"/>
						<div class="overlay">
							<div class="over-text">
								<ul class="team-icon-list">
									<li><a href="http://pollsystem.cf" target="_blank"><i title="Go to website" class="fa fa-eye"></i></a></li>
								</ul>
								<h4>Poll System</h4>
							</div>
						</div>		
					</div>
				</div>
				&nbsp;
				<div class="portsection">
					<div class="container1">
						<img class="wow fadeInUp" style="animation-duration: 1s;animation-delay: 0s;" class="image" src="img/website_2.jpg" alt="Website_2"/>
						<div class="overlay">
							<div class="over-text">
								<ul class="team-icon-list">
									<li><a href="https://sourabhsen201313.wixsite.com/sourabh" target="_blank"><i title="Go to website" class="fa fa-eye"></i></a></li>
								</ul>
								<h4>Developer Site</h4>
							</div>
						</div>		
					</div>
				</div>
				&nbsp;
				<div class="portsection">
					<div class="container1">
						<img class="wow fadeInUp" style="animation-duration: 1s;animation-delay: 0s;" class="image" src="img/Calculadora.png" alt="Calculadora"/>
						<div class="overlay">
							<div class="over-text">
								<ul class="team-icon-list">
									<li><a href="http://localhost/phpdoc/calcdemo/" target="_blank"><i title="Go to website" class="fa fa-eye"></i></a></li>
								</ul>
								<h4>Calculadora</h4>
							</div>
						</div>		
					</div>
				</div>
			</div>		
		</center>
	</div>



<!-- ###################################### ABOUT ######################################### -->
	<div id="about">
		<center>
			<h2> ABOUT </h2>	
			<hr class="star-light3">
			<div id="about_row" class="row">
				<div id="about_column" class="column">
					<p class="wow fadeInLeft" style="animation-duration: 2s;"> 
						Calculadora (means: Calculator) for people who want fast and easy way to calculate his/her problems where he/she stuck. Calculadora developed by <a title="Go to website" href="https://sourabhsen201313.wixsite.com/sourabh">sourabh (Jr. PHP Developer)</a>.
					</p>
				</div>
			</div>		
		</center>
	</div>



<!-- ###################################### FEEDBACK ######################################### -->
	<div id="feedback">
		<div class="container">
			<center id="contactcenter">
				<h2> FEEDBACK </h2>	
				<hr class="star-light4">
				<div id="feedback_row" class="row">
					<div class="col-md-12">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<input class="wow fadeInLeft form-control" style="animation-duration: 2s;" type="text" name="name" placeholder="Name" required="required" data-validation-required-message="Please enter your Name"/>
						<br>
							<input class="wow fadeInRight form-control" style="animation-duration: 2s;" type="email" name="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your Email Address"/>
						<br>
							<input class="wow fadeInLeft form-control" style="animation-duration: 2s;" type="text" name="phone" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your Phone Number"/>
						<br>
							<textarea class="wow fadeInRight form-control" rows="6" style="animation-duration: 2s;" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your Message"></textarea>
						<br>
						<br>
							<input name="send" type="submit" class="btn btn-info button_send" value="Send"/>
					</form>
					</div>
				</div>
			</center>
		</div>
	</div>
<?php
if(isset($_POST['send']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$feed_date = date("Y-m-d");

	$conn=mysqli_connect('localhost','root','','calculadora');
	mysqli_query($conn,"INSERT INTO feedback (name,email,phone,message,feed_date) VALUES ('$name','$email','$phone','$message','$feed_date')");

	echo "<script>alert('Your feedback is priceless for us, Thank you for giving a feedback.')</script>";
}
?>


<!-- ###################################### FOOTER ######################################### -->

	<footer>
		<center>
			<a href="https://www.facebook.com/sourabh.sen.169">
				<i class="fab fa-facebook-f lasticonf wow fadeInLeft" style="animation-duration: 1s;animation-delay: 0.4s;">	
				</i>
			</a>
			<a href="https://plus.google.com/u/1/107045273296002411294">
				<i class="fab fa-google-plus-g lasticong wow fadeInLeft" style="animation-duration: 1s;animation-delay: 0.2s;">
				</i>
			</a>
			<a href="https://www.linkedin.com/in/sourabh1996">
				<i class="fab fa-linkedin-in lasticonl wow fadeInRight" style="animation-duration: 1s;animation-delay: 0.2s;">	
				</i>
			</a>
			<br>
			<br>
			<h5 class="h5 wow fadeInUp" style="animation-duration: 1s;"> Calculadora @ 2019 </h5>
		</center>
	</footer>

</body>
</html>