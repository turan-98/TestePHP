<?php 
   include './includes/connects.php';
   
    $nome  =  $_POST['inputName'];
    $email =  $_POST['inputEmail'];
    $convidado = $_POST['emailConvidado'];
   
   
    if(empty($nome)){
    	$nomeError = 'Opss!,  não esqueça de colocar o seu nome';
    }
   
    if(empty($email)){
    	$emailError = 'Opss!,  não esqueça de colocar o seu email';
    }
   
   
   $conn = getConnection();
   
   $sql = 'INSERT INTO clientes (nome, emailConvidado) VALUES (:nome,:convidado)';
   
   $stmt = $conn->prepare($sql);
   
   $stmt->bindParam(':nome', $nome);
   $stmt->bindParam(':convidado', $convidado);
   
   $stmt->execute();
   
   include 'acessRead.php';

   ?>