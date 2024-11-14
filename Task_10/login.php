<?php
require_once 'ClassAccound.php';

$ab1 = new AccountBank("099", 550000, "Zidan");
$ab2 = new AccountBank("054", 1250000, "Rizky");

$ar_ab = [$ab1, $ab2];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accountNumber = $_POST["account_number"];
    $customer = $_POST["customer"];
    $initialBalance = $_POST["initial_balance"];
    $newAccount = new AccountBank($accountNumber, $initialBalance, $customer);
    $ar_ab[] = $newAccount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: black;
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center; 
        font-size: 15px; 
    }
    :root {
    --bg-color: #080808;
    --second-bg-color: #131313;
    --text-color: white;
    --main-color: #ff2323;
    }

    h2 {
        color: black;
        margin-bottom: 20px;
        font-size: 24px; 
    }

    

    form {
        max-width: 400px;
        margin: 0 auto;
        
        background-color: var(--second-bg-color);
        padding: 49px;
        border-radius: 10px;
        box-shadow: 0 0 10px var(--main-color);
        text-align: center; 
    }

    label {
        font-weight: bold;
        color : white;
        padding: 5px;
        font-size: 15px;
        text-align: center;
        justify-content: center;
        align-items: center;
        display: block;
    }



    input[type="text"] {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        display: block;
    }

    input[type="submit"] {
        width: calc(100% - 22px);
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: block;
        margin-bottom: 15px;
    }

    input[type="submit"]:hover {
        background-color: var(--main-color);
    }

    .account-details {
        background-color: var(--main-color);
        padding: 20px;
        border: 1px solid black;
        border-radius: 50px;
        margin-bottom: 15px;
        transition: background-color 0.3s ease;
        background-color: var(--second-bg-color);
        color: white;
        font-size: 15px;

    }

    .account-details:hover {
        background-color: red; 
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #ddd;
    }

    
</style>

</head>
<body>
    <h2></h2>
    <form action="login.php" method="post">
        <label for="account_number">Nomor Rekening:</label>
        <input type="text" name="account_number" class="form-control" required>
        
        <label for="customer">Nama Customer:</label>
        <input type="text" name="customer" class="form-control" required>

        <label for="initial_balance">Saldo Awal:</label>
        <input type="text" name="initial_balance" class="form-control" required>

        <input type="submit" value="Tambah Data" class="btn btn-primary">
    </form><br/>

    <h2>Data Akun</h2>
    <?php
    foreach ($ar_ab as $account) {
        echo '<div class="account-details">';
        $account->cetak();
        echo '</div>';
    }
    ?>
</body>
</html>
