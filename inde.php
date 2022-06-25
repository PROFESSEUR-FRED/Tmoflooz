<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="tmoflooz";
    $conn = mysqli_connect($servername,$username,$password,$db);

    //$donnes = array("nomCl", "prenomCl", "montant", "numEnvoe", "numRecp", "dateEnvoe");
    if(!$conn){
        echo "error";
    }else{
        //echo "bien";
    }
    
    // $select = "select id , nomCl,montant,numEnvoi,numRecp,dateEnvoe From compte";
    // $result = $conn->query($select);
    // if($result->num_rows >0){
    //     while($row = $result->fetch_assoc()) {
    //         echo "id: " . $row["id"]. " - Nom: " . $row["nomCl"]. " " . $row["montant"]. "" . $row["numEnvoi"].  "" . $row["numRecp"]  . $row["dateEnvoe"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    

    $nom = $_POST["nomCl"];
    
    $montant = $_POST["montant"];
    $numEnvoi = $_POST["numEnvoi"];
    $numRecp = $_POST["numRecp"];
    
    
    if (isset($_POST['nomCl'])
     and isset($_POST["montant"]) and  
    isset($_POST["numEnvoi"]) and  isset($_POST["numRecp"])) {
     
        $insertion = "insert into compte (nomCl, montant, numEnvoi, numRecp ) value('$nom','$montant','$numEnvoi','$numRecp')";

        if($conn->query($insertion) === TRUE){
            echo "New record created successfully";
        } else {
            echo "Error: " . $insertion . "<br>" . $conn->error;
        }
    
     }else{
        echo ($_POST["nomCl"]. " ,"  .  $_POST["montant"] . " ," .  
        $_POST["numEnvoi"] ." ," .   $_POST["numRecp"]  );
     }
     $conn->close();
?>