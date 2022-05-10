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
    $pdo = new PDO('mysql:host=' . $_ENV['MYSQL_HOST'] . ';dbname=' . $_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $query = $pdo->query('SHOW VARIABLES like "version"');

    $row = $query->fetch();

    echo 'MySQL version: ' . $row['Value'];

    echo '<br />';
    foreach($pdo -> query('SHOW DATABASES') as $row) {
        print_r($row);
    }
    ?>
  </body>
</html>
