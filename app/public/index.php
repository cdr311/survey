<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Example</title>
  </head>
  <body>
    <h1>Hello, World!</h1>
    <p>Die aktuelle MariaDB-Version ist:</p>
    <?php
    $pdo = new PDO('mysql:dbname=survey;host=mysql', 'webdev', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $query = $pdo->query('SHOW VARIABLES like "version"');

    $row = $query->fetch();

    echo 'MySQL version: ' . $row['Value'];
    ?>
  </body>
</html>
