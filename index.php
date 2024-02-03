<!Doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link href="Home.css" rel="stylesheet" />
  <title>Home</title>
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

/* TAB */
.tab {

  overflow: hidden;

  border: 1px solid #ccc;

  background-color: #2E4053 ;

  width:51.5%;

}

/* Style the buttons inside the tab */

.tab button {

  background-color: inherit;

  float: left;

  border: none;

  outline: none;

  cursor: pointer;

  padding: 14px 48px;

  transition: 0.3s;

  font-weight:bold;

  font-size: 17px;

  color:gray;

  text-align: center;
  
  width:50%;

}

/* Change background color of buttons on hover */

.tab button:hover {

  background-color: #F7DC6F;

  border: 5px solid #1B4F72;

  color:black;

}

/* Create an active/current tablink class */

.tab button.active {

  background-color: white;
  color:black;

}

/* Style the tab content */

.tabcontent {

  display: none;

  padding: 6px 12px;

  border: 1px solid #ccc;

  border-top: none;

  width: 50%;
  background-image: linear-gradient(to top, #34495E  , #463E3F );

}

/* FREE TIME - TABLE */
@keyframes mymove {
  from {background-color: #F5DEB3;}
  to {background-color: #98AFC7;}
}

table, th, td {
  border: 2px solid gray;
  border-collapse: collapse;
  font-family:arial;
  font-weight: 600;
  text-align: center;
  
}
th, td {
  padding: 11px;
}

</style>
</head>

<body><center><br><br><br><br>

<header><!--Website title banner-->
  <h1>Bank Bumirakyat</h1>
</header><br><br>
  <!-- HORIZONTAL MENU -->
  <ul>
    <a href="index.php"  target="_self"><li>HOME</li></a>
    <a href="buy.php"  target="_self"><li>BUYING RATE</li></a>
    <a href="sell.php"  target="_self"><li>SELLING RATE</li></a>
    <a href="staff_buy.php"  target="_self"><li>STAFF BUYING RATE</li></a>
    <a href="staff_sell.php"  target="_self"><li>STAFF SELLING RATE</li></a> 
  </ul>
  <br><br>

    <!--TAB MENU -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Buying Rate')">Buying Rate</button>
  <button class="tablinks" onclick="openCity(event, 'Selling Rate')">Selling Rate</button>
</div>
<div id="Buying Rate" class="tabcontent"><br><br>
  <div id="myDIV" style="width: 680px;height: 487px;background: red;animation: mymove 1s infinite;">
    <table>

     <tr >
      <th bgcolor="#154360" style="color: antiquewhite;">Foreign Currency Units [=1 Malaysian ringgit]</th>
      <th bgcolor="#154360 "style="color: antiquewhite;"></th>
      <th bgcolor="#154360 "style="color: antiquewhite;">Buying</th>
      <th bgcolor="#154360 "style="color: antiquewhite;">Buying Rate for Staff</th>
     </tr>

     <tr >
      <th>US Dollar (USD)</th>
      <td>USD</td>
      <td>0.24</td>
      <td>2.2</td>
     </tr>

     <tr >
      <th>Europe Euro (EUR)</th>
      <td>EUR</td>
      <td>0.20</td>
      <td>2.58</td>
     </tr>

     <tr >
      <th>Singapore Dollar (SGD)</th>
      <td>SGD</td>
      <td>0.32</td>
      <td>1.71</td>
     </tr>

     <tr >
      <th>Australia Dollar (AUD)</th>
      <td>AUD</td>
      <td>0.32</td>
      <td>1.735</td>
     </tr>

     <tr >
      <th>Indonesia Rupiah (IDR)</th>
      <td>IDR</td>
      <td>3478.71</td>
      <td>1739.355145</td>
     </tr>

     <tr>
      <th>Bangladesh Taka (BDT)</th>
      <td>BDT</td>
      <td>20.41</td>
      <td>10.2295</td>
     </tr>

     <tr>
      <th>Japan Yen (JPY)</th>
      <td>JPY</td>
      <td>26.64</td>
      <td>13.339</td>
     </tr>

     <tr>
      <th>China Yuan (CNY)</th>
      <td>CNY</td>
      <td>1.55</td>
      <td>1.095</td>
     </tr>

     <tr>
      <th>Hong Kong Dollar (HKD)</th>
      <td>HKD</td>
      <td>1.87</td>
      <td>1.205</td>
     </tr>

     <tr>
      <th>South Korea Won (KRW)</th>
      <td>KRW</td>
      <td>271.26</td>
      <td>135.63185</td>
     </tr>
   </table>
 
  </div><br><br>
  </div>



<div id="Selling Rate" class="tabcontent"><br><br>

  <div id="myDIV" style="width: 680px;height: 487px;background: red;animation: mymove 1s infinite;">
    <table>
     <tr >
      <th bgcolor="#154360 "style="color: antiquewhite;">Foreign Currency Units [=1 Malaysian ringgit]</th>
      <th bgcolor="#154360 "style="color: antiquewhite;"></th>
      <th  bgcolor="#154360 "style="color: antiquewhite;">Selling</th>
      <th  bgcolor="#154360 "style="color: antiquewhite;">Selling Rate for Staff</th>
     </tr>

    <tr >
      <th>US Dollar (USD)</th>
      <td>USD</td>
      <td>4.16</td>
      <td>2.2</td>
     </tr>

     <tr >
      <th>Europe Euro (EUR)</th>
      <td>EUR</td>
      <td>4.96</td>
      <td>2.58</td>
     </tr>

     <tr >
      <th>Singapore Dollar (SGD)</th>
      <td>SGD</td>
      <td>3.10</td>
      <td>1.71</td>
     </tr>

     <tr >
      <th>Australia Dollar (AUD)</th>
      <td>AUD</td>
      <td>3.15</td>
      <td>1.735</td>
     </tr>

     <tr >
      <th>Indonesia Rupiah (IDR)</th>
      <td>IDR</td>
      <td>0.00029</td>
      <td>1739.355145</td>
     </tr>

     <tr>
      <th>Bangladesh Taka (BDT)</th>
      <td>BDT</td>
      <td>0.049</td>
      <td>10.2295</td>
     </tr>

     <tr>
      <th>Japan Yen (JPY)</th>
      <td>JPY</td>
      <td>0.038</td>
      <td>13.339</td>
     </tr>

     <tr>
      <th>China Yuan (CNY)</th>
      <td>CNY</td>
      <td>0.64</td>
      <td>1.095</td>
     </tr>

     <tr>
      <th>Hong Kong Dollar (HKD)</th>
      <td>HKD</td>
      <td>0.54</td>
      <td>1.205</td>
     </tr>

     <tr>
      <th>South Korea Won (KRW)</th>
      <td>KRW</td>
      <td>0.0037</td>
      <td>135.63185</td>
     </tr>

  </table>
  </div>
<br><br>


</div>

<br><br>
<script>

function openCity(evt, cityName) {

  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {

    tabcontent[i].style.display = "none";

  }

  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {

    tablinks[i].className = tablinks[i].className.replace(" active", "");

  }

  document.getElementById(cityName).style.display = "block";

  evt.currentTarget.className += " active";

}

</script>
 </body>
</html>