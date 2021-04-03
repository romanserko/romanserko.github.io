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
 	 <a href="statystyka.php"> Статистика </a>&nbsp;&nbsp;
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
	
	<!--  20 список зареєестрованих ? уточнити -->
<td>
<h1 align="center">Список зареєстрованих !</h1>
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
             echo'<tr>'; } ?>  
  </table>';
</tr>
  

</td>

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