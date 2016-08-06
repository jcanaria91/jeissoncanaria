<?php
if($_POST['login']==$_POST['pasword']) {
  header('Location: menu.html');
}else{
  //redirije el navegador al login
  header('Location: login.html');
}


