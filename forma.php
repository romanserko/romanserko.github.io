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
	 <a href="#"> Головна </a>&nbsp;&nbsp;
 	 <a href="#"> Фотогалерея </a>&nbsp;&nbsp;
 	 <a href="#"> Телефони </a>&nbsp;&nbsp;
 	 <a href="#"> Статистика </a>&nbsp;&nbsp;
 	 <a href="#"> Зареєстровані </a>&nbsp;&nbsp;
	 
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
	
    </td>
 <!-- ---- текст сайту ---- -->
  <td width="70%" > 
  
  <h1 align="center"> Дякуємо за реєстрацію 
    <?php  
	$st=$_post['name2'].";".$st=$_post['name1'].";".$st=$_post['nicl'].";".$st=$_post['email'].";".$st=$_post['password']."\n";
	$fp = fopen("baza.txt","a");
	$test = fwrite($fp,$st);
	echo "<h2 align='center'>Ви ввели :".$_post['name2'].";".$st=$_post['name1'].";".$st=$_post['nicl'].";".$st=$_post['email'].";".$st=$_post['password']."</h2>"
	?>
  </h1>	
  
<!--  20 список зареєестрованих ? уточнити -->

<h1 align="center">Список зареєестрованих</h1>
  <table align="center" border="1" width="600">
  <tr>
  <td align="center"><b>Прізвище</td>
  <td align="center"><b>Ім'я</td>
  <td align="center"><b>E-mail</td>
  <td align="center"><b>Пароль</td>
  </tr>  
<?php 
$data=file("baza.txt");
foreach($data as $line){
    $trs=explode(";",$line);	
             echo'<tr>';
    echo '<td>'.$trs[0].'</td>';			 
    
	echo '<td>'.$trs[1].'</td>';			 
    echo '<td>'.$trs[2].'</td>';			 
    echo '<td>'.$trs[3].'</td>';			 
             echo'<tr>';
}
?>  
  </table>
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