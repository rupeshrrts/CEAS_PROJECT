<?php 
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Phone_Number=$_POST['Phone_Number'];
    $Massage=$_POST['Massage'];

    //conection
    $conn =new mysqlli('localhost','root','','test');
    if($conn->connect_error){
        die('Field :' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into Stu1(Name, Email, Phone_Number, Massage)value(?,?,?,?)");
        $Stmt->bind_param("ssis",$Name, $Email,$Phone_Number,$Massage);
        $stmt->execute();
        echo "Massage store successfully...";
        $stmt->close();
        $conn->close();
    }

?>