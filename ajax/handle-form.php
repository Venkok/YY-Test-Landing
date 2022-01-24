<?php 

// gets data from form.js
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

 // opens the file
    $fileptr=fopen("../submissions.txt","a"); 

// closes the file at $fileptr
    fputs($fileptr, $name."\t");
    fputs($fileptr, $surname."\t");
    fputs($fileptr, $tel."\t");
    fputs($fileptr, $email."\n");





