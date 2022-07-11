<?php

/*

Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/

$classe = [
  [
    "nome" => "Marco",
    "cognome" => "Rossi",
    "voti" => [
      "italiano" => 7,
      "matematica" => 8,
      "geografia" => 6,
      "scienze" => 8,
    ]
  ],

  [
    "nome" => "Maria",
    "cognome" => "Verdi",
    "voti" => [
      "italiano" => 9,
      "matematica" => 5,
      "geografia" => 7,
      "scienze" => 8,
    ]
  ],

  [
    "nome" => "Matteo",
    "cognome" => "Gialli",
    "voti" => [
      "italiano" => 7,
      "matematica" => 8,
      "geografia" => 7,
      "scienze" => 7,
    ]
  ],

  [
    "nome" => "Veronica",
    "cognome" => "Blu",
    "voti" => [
      "italiano" => 7,
      "matematica" => 8,
      "geografia" => 9,
      "scienze" => 8,
    ]
  ],
];

for ($i = 0; $i < count($classe); $i++) {
  $studente = $classe[$i];

  $voti = $studente["voti"];
  $media = array_sum($voti) / count($voti);

  echo $studente["nome"] . " " . $studente["cognome"] . " , " . $media . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
    
  </div>
</body>
</html>