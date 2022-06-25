<?php
// connection a la base de données

// Enregistrement des donnéés
if(isset($_POST["submit"])){
    $amount=$_POST[""];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <title>Validation</title>
    <style>
        .tdiv{
            height: 100vh;
        }
    </style>
</head>
<body >
    <div class="tdiv container d-flex justify-content-center align-items-center bg-dark">
        <!-- <h1>Merci de confirmer que vous envoyez <?php echo $_GET["amount"];?> à  <?php echo $_GET["recp_num"];?> </h1>  -->
    <form action="inde.php" method="POST">
        <input type="hidden" name="amount" value="<?php
        echo $_GET["montant"]; ?>">
        <input type="hidden" name="numEnvoi" value="<?php
        echo $_GET["numero"]; ?>">
        <input type="hidden" name="validate_recp_num" value="<?php
        echo $_GET["numeror"]; ?>">
        <input type="hidden" name="nomCl" value="<?php
        echo $_GET["nom"]; ?>">
         <script
            src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
            data-public-key="pk_live_mYFZZ4_GLtjeiOCxUvzDimZ2"
            data-button-text="Confirmer <?php echo $_GET["amount"]; ?>"
            data-button-class="btn btn-primary btn-lg"
            data-transaction-amount="<?php echo $_GET["amount"]; ?>"
            data-transaction-description="Description de la transaction"
            data-currency-iso="XOF">
        </script>

    <!-- <button type="button" class="btn btn-primary btn-lg" name="submit">Confirmer</button> -->
    </form>
    
    </div>

 
    <script src="js/bootstrap.min.js"></script>
</body>
</html>