<?php
session_start();	//pag 291
session_destroy();
echo "<script>alert('Hasta luego!');</script>";
echo " <script language='JavaScript'>history.go(-1);</script>";
?>