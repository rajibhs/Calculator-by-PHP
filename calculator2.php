<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
	<title>Make A Calculator</title>
</head>
<body>
<!--Style/Css Section -->
	<style type="text/css">
		
		.container{
			background: #2E86C1;
			padding: 100px 0;
		}
		.calculator{
			background: #292D3E;
			width: 400px;
			padding: 20px;
			margin: 0 auto;
			display: block;
			border-radius: 10px;
		}
		.calculator h1{
			text-align: center;
			font-size: 40px;
			font-weight: bold;
			color: #F39C12;
			letter-spacing: 2px;
			font-family: 'Roboto', sans-serif;
		}
		.number input{
			width: 60%;
			height: 25px;
			margin-bottom: 20px;
			border-radius: 10px;
			background: #292D3E;
			border:none;
			padding: 10px 20px;
			color: #Fff;
			font-size: 20px;
		}
		.selecet-option select{
			width: 60%;
			height: 35px;
			margin-bottom: 30px;
			border-radius: 5px;
			background:  #2E86C1;
			border:none;
			padding:0 10px;
			color: #Fff;
			font-size: 15px;
			margin-left: 20px;
		}
		.submit-btn input{
			font-size: 18px;
			padding: 15px 40px;
			font-weight: bold;
			background: #CB4335;
			color: #fff;
			border:none;
			border-radius: 5px;
			cursor: pointer;
			margin-left: 20px;
		}
		p{
			background: #fff;
			color: #292D3E;
			font-size: 25px;
			padding: 20px 5px;
			border-radius: 5px;
		}
		.footer h3{
			font-size: 22px;
			text-align: center;
			color: #CB4335;
			margin-top: 20px;
		}
		.footer h3 a{
			text-decoration: none;
			color: #F39C12;
			
		}
	</style>
<!--Html Section -->
	<div class="container">
		<div class="calculator">
			<h1>PHP CALCULATOR</h1>
			<form action="" method="POST">
				<div class="number">
					<input type="text" name="firstNumber" placeholder="Enter First Number"><br>
					<input type="text" name="secondNumber" placeholder="Enter Second Number">
				</div>
				<div class="selecet-option">
					<select name="select">
						<option value="add">ADD</option>
						<option value="sub">SUB</option>
						<option value="mult">MULTI</option>
						<option value="div">DIV</option>
						<option value="power">POWER</option>
					</select>
				</div>

				<div class="submit-btn">
					<input type="submit" name="submit" value="SUBMIT NOW">
				</div>
			</form>

			<p>
				<?php
					if(isset($_POST['submit'])){

						$number1 = $_POST['firstNumber'];
						$number2 = $_POST['secondNumber'];
						$select = $_POST['select'];

						switch ($select) {
							case 'add': $sum = $number1 + $number2;
								echo "The Additon of Two Numer is {$sum}";
								break;
							case 'sub': $sub = $number1 - $number2;
									echo "The Subtraction of Two Numer is {$sum}";
									break;
							case 'mult': $mult = $number1 * $number2;
									echo "The Multiplication of Two Numer is {$mult}";
									break;
							case 'div': $div = $number1 / $number2;
									echo "The Division of Two Numer is {$div}";
									break;
							case 'power': $power = pow($number1, $number2);
									echo "The Power of Two Numer is {$power}";
									break;							
							
							default:
								echo "The Result is UnKnown Error?";
								break;
						}
					}

				?>
			</p>
		</div>
<!--Footer Section -->		
		<div class="footer">
			<h3>Made By <a href="https://www.facebook.com/profile.php?id=100004973115932">RAJIB HOSSAIN</a> </h3>
		</div>
	</div>


</body>
</html>