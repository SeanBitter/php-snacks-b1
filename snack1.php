<?php

/*

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

*/

$basketGames = [
  [
    "homeTeam" => "Lakers",
    "awayTeam" => "Celtics",
    "homeTeamScore" => rand(50, 120),
    "awayTeamScore" => rand(50, 120),
  ],

  [
    "homeTeam" => "Clippers",
    "awayTeam" => "Raptors",
    "homeTeamScore" => rand(50, 120),
    "awayTeamScore" => rand(50, 120),
  ],

  [
    "homeTeam" => "Warriors",
    "awayTeam" => "Heat",
    "homeTeamScore" => rand(50, 120),
    "awayTeamScore" => rand(50, 120),
  ],

  [
    "homeTeam" => "Spurs",
    "awayTeam" => "Bulls",
    "homeTeamScore" => rand(50, 120),
    "awayTeamScore" => rand(50, 120),
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">

    <h2 class="text-success">Partite di NBA della notte:</h2>

    <?php
      for ($i = 0; $i < count($basketGames); $i++) {
        $basketGame = $basketGames[$i];
    ?>

    <div>
      <?php echo $basketGame["homeTeam"] ?> - 
      <?php echo $basketGame["awayTeam"] ?> / 
      <?php echo $basketGame["homeTeamScore"] ?> - 
      <?php echo $basketGame["awayTeamScore"] ?>
    </div>

    <?php } ?>

  </div>
</body>
</html>