<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
$dsn = 'mysql:dbname=mydb;host=localhost;port=8889';
$user = 'root';
$password = 'root';

try {
  $db = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
} 

$records = $db->query('SELECT * FROM my_items');
while ($record = $records->fetch()) {
  print($record['item_name'] . "\n");
}

?>
</pre>
</main>
</body>
</html>