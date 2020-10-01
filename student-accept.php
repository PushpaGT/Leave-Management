<?php

    
    define('DBINFO','mysql:host=localhost;dbname=miniproject');
    define('DBUSER','root');
    define('DBPASS','');
    function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }

//$mysqli= new mysqli('localhost','root','','miniproject') or die(mysqli_error($mysql));

//$update = false;
    $id = $_GET['id'];
    $query = "select * from `request` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $name = $row['name'];
           // $lastname = $row['lastname'];
            $Reason = $row['Reason'];
            //$password = $row['password'];
            $query = "INSERT INTO `request` (`id`, `name`, `Reason`) VALUES (NULL, '$name', '$Reason');";
        }
        $query .= "DELETE FROM `request` WHERE `request`.`id` = '$id';";
        if(performQuery($query)){
            
            echo "Account has been accepted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    }else{
        echo "Error occured.";
    }
    
?>
<br/><br/>
<a href="students-staff.php">Back</a>