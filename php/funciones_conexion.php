<?php

    function conectar()
    {
		$link = mysql_connect('127.3.157.2:3306','admin9XrAXb3','_r2KA3mA1TUI')or die('No se pudo conectar a la base de datos.');
		mysql_select_db('prueba')or die('Error al tratar de selecccionar la base de datos.');
		}
		
	function desconectar()
        {
            $link = mysql_connect('127.3.157.2:3306','admin9XrAXb3','_r2KA3mA1TUI')or die('No se pudo conectar a la base de datos.');
            mysql_close($link);
        }
		
		
?> 
