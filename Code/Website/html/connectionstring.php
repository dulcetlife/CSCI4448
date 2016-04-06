<?php
      $hostname_MyConnectionPHP = "localhost";
      $database_MyConnectionPHP = "github_repo";
      $username_MyConnectionPHP = "root";
      $password_MyConnectionPHP = "csci4448";
      $connections = mysql_connect($hostname_MyConnectionPHP, $username_MyConnectionPHP, $password_MyConnectionPHP) or die ( "Unabale to connect to the database" );
      //mysql_select_db($database_MyConnectionPHP);
?>