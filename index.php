  <!DOCTYPE html>
  <html>
    <head>
      <title>Travis</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
      <meta charset="utf-8">
    </head>
    <body>
      <?php


        function ma( $z) {

          $v = $z - 1;
          $n = $z + 1;

          echo "V | Z | N" . "<br>";
          return $v ." | ". $z ." | ". $n;
        }

        echo ma(7);
      ?>
    </body>
  </html>
