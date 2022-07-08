<?php

/*

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$name = key_exists("name", $_GET) ? trim($_GET["name"]) : "";
$email = key_exists("email", $_GET) ? trim($_GET["email"]) : "";
$age = key_exists("age", $_GET) ? trim($_GET["age"]) : "";

$dataValid = true;

if (strlen($name) < 4) {
  $dataValid = false;
};

if (!strpos($email, "@)") && !strpos($email, ".")) {
  $dataValid = false;
};

if (!is_numeric($age)) {
  $dataValid = false;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
    
    <form>
      <input type="text" placeholder="Inserisci nome" name="name" value="<?php echo $name ?>">
      <input type="email" placeholder="Inserisci email" name="email" value="<?php echo $email ?>">
      <input type="text" placeholder="Inserisci età" name="age" value="<?php echo $age ?>">
      <button class="btn btn-success" type="submit">Conferma dati</button>
    </form>

    <?php if ($dataValid) { ?>
      <div class="alert alert-success">Accesso riuscito</div>
    <?php } else { ?>
      <div class="alert alert-danger">Accesso negato</div>
    <?php } ?>

  </div>
</body>
</html>