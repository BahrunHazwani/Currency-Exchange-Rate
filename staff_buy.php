<html>
	<head>
		<title>Staff Buying Rate</title>
			<style>
				  /* HORIZONTAL MENU */


* {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
body{
  background: #1E1F25;
}
ul{
  display: flex;
  width: 100%;
font-family: "Lucida Console", "Courier New", monospace;
  margin: auto;
  max-width: 1000px;
  justify-content: space-between;
  text-align: center;
}
li {
  padding:  1.15rem;
  text-transform: uppercase;
  cursor: pointer;
  color: #ebebeb;
  min-width: 80px;
  margin: auto;
  font-family: "Lucida Console", "Courier New", monospace;
  }
  
a {
text-decoration: none;
}

li:hover {
  background-image: url('jj.jpg');
  background-size: 100% 100%;
  color: #27262c;
  animation: spring 300ms ease-out;
  text-shadow: 0 -1px 0 #ef816c;
  font-weight: bold;
}
li:active {
  transform: translateY(4px);
}

@keyframes spring {
  15% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.2, 1.1);
  }
  40% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(0.95, 0.95);
  }
  75% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1.05, 1);
  }
  100% {
    -webkit-transform-origin: center center;
    -webkit-transform: scale(1, 1);
  }
}

/* PAGE ELEMENT */
body {
    background: url(bg.jpg) no-repeat center center fixed;
    background-size: cover;
    height: 100%;

}
h1 {
  text-align: center;
  font-family: Bahnschrift SemiBold;
  color: #d2b48c;
  font-style:bold;

}


.boxed {
  border: 1px solid gold ;
  padding:10px;
  text-align: justify;
  font-size: 20px;
  font-weight: 400;
  font-family: Arial, Helvetica, Fantasy;
  color: #deb887;
  background-color: #800000;
  font-style:italic;
  width: 70%;

}

			</style>
		</head>
	<body>
	

		<center>
  <br><br><br><br>

<header><!--Website title banner-->
  <h1>Bank Bumirakyat</h1>
  <h2 style = "text-align: center;
  font-family: Bahnschrift SemiBold;
  color: #EC7063;;">Staff Buying Rate</h2>
</header>

  <br><br>
  <!-- HORIZONTAL MENU -->
  <ul>
    <a href="index.php"  target="_self"><li>HOME</li></a>
    <a href="buy.php"  target="_self"><li>BUYING RATE</li></a>
    <a href="sell.php"  target="_self"><li>SELLING RATE</li></a>
    <a href="staff_buy.php"  target="_self"><li>STAFF BUYING RATE</li></a>
    <a href="staff_sell.php"  target="_self"><li>STAFF SELLING RATE</li></a>
    
  </ul>
  <br><br>
		<form action="staff_buy.php" method="POST"style=" font-family: Trebuchet MS, sans-serif;font-size: 20px;line-height: 1.6;background-color:#FDEBD0;opacity: 0.6; width: 50%; font-weight: 900;"><br><br>

			Enter amount you have in ringgit (RM)<br> 
			<input type="text" name="RM" style=" width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9 ;font-weight: bold;font-size: 17px;" />
			<br/><br/>

			<label for="money">Select currency you want to buy: </label><br>
  				<select name="foreign_currency" id="money" value ="foreign currency"style=" width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: 900;font-size: 17px;">
    				<option value="usd" style=" font-weight: bold;">US Dollar (USD)</option>
    				<option value="eur" style=" font-weight: bold;">Europe Euro (EUR)</option>
    				<option value="sgd" style=" font-weight: bold;" >Singapore Dollar (SGD)</option>
    				<option value="aud" style=" font-weight: bold;">Australia Dollar (AUD)</option>
        			<option value="idr" style=" font-weight: bold;">Indonesia Rupiah (IDR)</option>
    				<option value="bdt" style=" font-weight: bold;">Bangladesh Taka (BDT)</option>
        			<option value="jpy" style=" font-weight: bold;">Japan Yen (JPY)</option>
    				<option value="cny" style=" font-weight: bold;">China Yuan (CNY)</option>
       				<option value="hkd" style=" font-weight: bold;">Hong Kong Dollar (HKD)</option>
    				<option value="krw" style=" font-weight: bold;">South Korea Won (KRW)</option>
 				</select><br><br>
			
			<input type="submit" name="submit" value="Buy" style="background-color: #C0392B;border: none;color: gold;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer; font-weight: bold;"/><br>

		

		<?php

			if(isset($_POST['submit']))
			{
				$RM = $_POST['RM'];
				$selected_val = $_POST['foreign_currency'];

	            // buy using RM

				switch($selected_val)
				{
					case $selected_val == "usd":
					$buy = $RM * ((0.24 + 4.16) /2);
					echo "<br><br> US Dollar (USD) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val == "eur":
					$buy = $RM * ((0.20 + 4.96) /2);
					echo "<br><br> Europe Euro (EUR) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val == "sgd":
					$buy = $RM * ((0.32 + 3.10) /2);
					echo "<br><br> Singapore Dollar (SGD) <<br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val == "aud":
					$buy = $RM * ((0.32 + 3.15) /2);
					echo "<br><br> Australia Dollar (AUD) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val == "idr":
					$buy = $RM * ((3478.71 + 0.00029) /2);
					echo "<br><br> Indonesia Rupiah (IDR) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val == "bdt":
					$buy = $RM * ((20.41 + 0.049) /2);
					echo "<br><br> Bangladesh Taka (BDT) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val == "jpy":
					$buy = $RM * ((26.64 + 0.038) /2);
					echo "<br><br> Japan Yen (JPY) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val == "cny":
					$buy = $RM * ((1.55 + 0.64) /2);
					echo "<br><br> China Yuan (CNY) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val == "hkd":
					$buy = $RM * ((1.87 + 0.54) /2);
					echo "<br><br> Hong Kong Dollar (HKD) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;

					case $selected_val =="krw":
					$buy = $RM * ((271.26 + 0.0037) /2);
					echo "<br><br> South Korea Won (KRW) <br> <input type='text' value='$buy'style= 'width: 45%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box: 1 px solid black;border: 1px solid black;background-color: #F5D0A9;font-weight: bold;font-size: 17px;'/>";
					break;
				
				}
				
			}
		?>
		<br><br>
				</form>
</center>
<br><br>
	</body>
</html>
