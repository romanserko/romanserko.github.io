<html> 
<head>
<meta charset = "utf-8">
<title> Сайт web-студії "Web-Deco"  </title>

<!--  =====  javscript  =====  -->

<script type="text/javascript">

function send()
{
  var valid = true;
  var elems = document.forms[0].elements;

  for (var i=0; i<document.forms[0].length; i++)
  {
     if(
	     elems[i].getAttribute('type')=='text' ||
     	 elems[i].getAttribute('type')=='password'||
	     elems[i].getAttribute('type')=='email'){
	     
		 if(elems[i].value=='')
		 {
	       elems[i].style.border = '2px solid red';
		   valid=false;
	     }
	 
	 }
	 
  }
  
     if(!valid)
     {
	 alert('Заповніть всі поля !!!');
	 return false;
	 }
}
</script>

<!-- ---------- годинник --------- -->

<script>
	 window.onload = function(){
	 setInterval(clockPainting, 1000);}	
</script>
<script src="js/clock1.js"></script>


<!--  ==================================================================  -->


<!-- ======================= CSS стилі =========-->
<style> 
 .shadowtext{
      text-shadow: 1px 3px 2px white, 0 0 1em red;
      color: #210042;
      font-size: 2em;}
</style>


</head>

<body background="images/bg.jpg">

<!--=================== каркас сайту ================= -->

<!-- Заголовок(зазва сайту) -->

<table border="1" align="center" cellpadding="" >

<tr>
     <td  background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5">
	 
	     <font size="5" color="maroon">
	      <h1 class="shadowtext"> Сайт web-студії "Web-DECO" </h1 ></font>
	  </td>
</tr>
<!-- --- горизонтальне меню-->
<tr>
     <td colspan="2">
	 <font size="4"> 
	 <b>
	 <a href="index.php"> Головна </a>&nbsp;&nbsp;
 	 <a href="fotogalereya.php"> Фотогалерея </a>&nbsp;&nbsp;
 	 <a href="#"> Телефони </a>&nbsp;&nbsp;
 	 <a href="#"> Статистика </a>&nbsp;&nbsp;
 	 <a href="zareyestrovany.php"> Зареєстровані </a>&nbsp;&nbsp;
	 
	</b>
	</font>
	 
	</td>
</tr>
<!-- --- меню зліва --- -->
<tr>
  <td width="30%" valign="top">

  <center><canvas id="canvas" height="120" width="120">
  </canvas> </center>
  <hr>

   <font size="5" color="navy"> Новини <h2></h2></font> 
   <font size="5"> 
	 <ul>
	 <li><a href="#"> Сайт будівельної компанії </a></li>
 	 <li><a href="#"> Сайт ТМ Нова школа </a></li>
 	 <li><a href="#"> Редизайн сайту classno.com.ua </a></li>
 	 <li><a href="#"> Розробка CMS для Metro Cash&Carry </a></li>
 	 <li><a href="#"> Сайт-Візитка дизайнера інтерфейсів </a></li>
 	 	 <p align="right"><a href="#"> Інші ...</a></p>
	 </ul>
	</font>

<!-- ------ форма реєестрації ---- -->

<hr>
					<h1 align="center"><font color="green">Реєстрація</font></h1>
					<form action="forma.php" method="post" onsubmit="return send();">
					<table align="center" bgcolor="#ccc">
						<tr>
							<td><font color="green">Прізвище</font>: </td>
							<td><input type="text" size="10" maxlength="20" name="name2"> </td>
						</tr>
						<tr>
							<td><font color="green">Ім'я</font>: </td>
							<td><input type="text" size="10" maxlength="20" name="name1"></td>
						</tr>
						<tr>
							<td><font color="green">E-Mail</font>: </td>
							<td><input type="password" size="10" maxlength="20" name="email"></td>
						</tr>
						<tr>
							<td><font color="green">Пароль</font>: </td>
							<td><input type="password" size="10" maxlength="20" name="password"></td>
						</tr>
					</table>
					<p align="center">
						<input type="submit" value="Зареєсруватись">
						<input type="reset" value="Очистити">
					</p>
					</form>
					<hr>	
	<td>
	<!-- ---- текст сайту ---- -->
                    <!-- 23-PHP статистика ?? log1-->
<?php  
$log_path = 'log.txt';
$user_ip = getenv(REMOTE_ADDR);
$user_brouser = getenv(HTTP_USER_AGENT);
$curent_time =date("ymd H:i:s");
$log_string="$user_ip|$user_brouser|curent_time|\r\n";

$file=fopen($log_path,"a");
fwrite($file,$log_string, strlen($log_string));
fclose;
?>
<!-- log2 -->
<?php 
echo '<h1 align="center"> Хто донас на сайт  заходив !</h1>';
echo '<table align="center" border="1" width ="800"> ';
                 
				 echo'<tr>';
				 
echo '<td align="center">Ip Adress</td>';
echo '<td align="center">Браузер</td>';
echo '<td align="center">Дата</td>';
                 
				 echo'<tr>';
				 
$data = file("log.txt");
foreach($data as $line)	{
	$trs = explode("|",$line);	 
				 echo'<tr>';
                    echo '<td>'.$trs[0].'</td>';
            echo '<td>'.$trs[1].'</td>';
            echo '<td>'.$trs[2].'</td>';
              
			  echo'<tr>';
				 
?>
</table>
    </td>
 
</td>
</tr>
<!-- --- футер --- -->

<tr>
  <td background="images/bg-3.jpg " colspan="2" valign="middle" height="90" >
     <font size="4"> Сайт розробив Автор Невідомий </font>
  </td>
</tr>

</table>
<!-- ==================================================-->



</body>

</html>