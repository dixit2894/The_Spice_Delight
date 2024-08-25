<?php
    $firstName=$_POST['First Name'];
    $lastName=$_POST['Last Name'];
    $email=$_POST['Email'];
    $guestNumber=$_POST['Guest Number'];
    $date=$_POST['Date'];
    $time=$_POST['Time'];
    $note=$_POST['Note'];
    
    $conn=new mysqli('localhost','root','','the_spice_delight');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into table_query(firstName,lastName,email,guestNumber,date,time,note) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssisss",$firstName,$lastName,$email,$guestNumber,$date,$time,$note);
        $stmt->execute();
        echo "Booking Table successfully...";
        $stmt->close();
        $conn->close();
    }
?>