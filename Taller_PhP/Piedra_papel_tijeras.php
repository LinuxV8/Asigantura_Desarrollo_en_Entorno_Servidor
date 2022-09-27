<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>Piedra, papel, tijera</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
  </style>
</head>

<body>

  <?php
  define('PIEDRA1',  "&#x1F91C;");
  define('PIEDRA2',  "&#x1F91B;");
  define('TIJERAS',  "&#x1F596;");
  define('PAPEL',    "&#x1F91A;");
  define('GANA',     "&#x1F389;");
  define('PIERDE',   "&#x1F4A9;");
  define('EMPATA',   "&#x1F3C6;");

  $jugador2 = random_int(1, 3);
  $jugador = random_int(1, 3);

  switch ($jugador2) {
    case 1:
      $jugador2 = PIEDRA2;
      break;
    case 2:
      $jugador2 = TIJERAS;
      break;
    case 3:
      $jugador2 = PAPEL;
      break;
  }

  switch ($jugador) {
    case 1:
      $jugador = PIEDRA1;
      break;
    case 2:
      $jugador = TIJERAS;
      break;
    case 3:
      $jugador = PAPEL;
      break;
  }
  ?>
  <h1>¡Piedra, papel, tijera!</h1>

  <p>Actualiza la página para jugar otra partida.</p>

  <table>
    <tr>
      <th>Jugador 1</th>
      <th>Jugador 2</th>
    </tr>
    <tr>
      <td><span style="font-size: 7rem"><?php echo $jugador ?></span></td>
      <td><span style="font-size: 7rem"><?php echo $jugador2 ?></span></td>
    </tr>
    <tr>
      <th colspan="2"><?php
                      if ($jugador == PIEDRA1 && $jugador2 == PIEDRA2 || $jugador == TIJERAS && $jugador2 == TIJERAS || $jugador == PAPEL && $jugador2 == PAPEL) {
                        $resultado = EMPATA;
                        echo "!Los jugadores han empatado! $resultado";
                      } elseif ($jugador == PIEDRA1 && $jugador2 == TIJERAS || $jugador == TIJERAS && $jugador2 == PAPEL || $jugador == PAPEL && $jugador2 == PIEDRA2) {
                        $resultado = GANA;
                        echo "!Ha ganado el jugador 1! $resultado";
                      } else {
                        $resultado = PIERDE;
                        echo "!Ha ganado el jugador 2! $resultado";
                      } ?></th>
    </tr>
  </table>
</body>

</html>