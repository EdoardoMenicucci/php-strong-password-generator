<?php
//Sezioni di caratteri uppercase, normali e speciali
$characters = 'abcdefghilmnopqrstuvxyz';

$uppercharacters = strtoupper($characters);

$special = '!@#$%^&*()_+=-:"|}{;\][<>?/.,]';

$numbers = '0123456789';
// Raccolgo i dati dall'utente sulla lunghezza della password

$passLenght = $_GET['charnumber'];

$ifNumeric = $_GET['numeric'];

$ifSpecial = $_GET['special'];

$ifUpperCase = $_GET['upper'];


function passwordGen($charNumb, $typeCharacters)
{
    $password = '';
    for ($i = 0; $i < $charNumb; $i++) {
        $password .= $typeCharacters[rand(0, strlen($typeCharacters) - 1)];
    }
    return $password;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Password</title>
</head>

<body>
    <h2>
        la tua password appena generata:
    </h2>
    <div>
        <?php
        if ($ifNumeric == 'true' && $ifSpecial == 'true' && $ifUpperCase == 'true') {
            echo passwordGen($passLenght, $characters . $numbers . $special . $uppercharacters);
        } elseif ($ifNumeric == 'true' && $ifSpecial == 'true') {
            echo passwordGen($passLenght, $characters . $numbers . $special);
        } elseif ($ifUpperCase == 'true' && $ifSpecial == 'true') {
            echo passwordGen($passLenght, $characters . $numbers . $special);
        } elseif ($ifUpperCase == 'true' && $ifNumeric == 'true') {
            echo passwordGen($passLenght, $characters . $uppercharacters . $special);
        } elseif ($ifUpperCase == 'true') {
            echo passwordGen($passLenght, $characters . $uppercharacters);
        } elseif ($ifNumeric == 'true') {
            echo passwordGen($passLenght, $characters . $numbers);
        } elseif ($ifSpecial == 'true') {
            echo passwordGen($passLenght, $characters . $special);
        } else {
            echo passwordGen($passLenght, $characters);
        }
        ?>
    </div>
</body>

</html>