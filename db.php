<?php
  $dsn = "pgsql:host=localhost;port=5432;dbname=auth;user=postgres;password=admin";
  try {
      $pdo = new PDO($dsn);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $exception) {
      echo "Connection error: " . $exception->getMessage();
      die();
  }