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
<?php
$dsn = 'mysql:dbname=mydb;host=localhost;port=8889';
$user = 'root';
$password = 'root';

try {
  $db = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
} 

$memos = $db->query('SELECT * FROM memos WHERE id=1');
$memo = $memos->fetch();
?>

<article>
  <pre><?php print($memo['memo']); ?></pre>

  <a href="index.php">戻る</a>
</article>

</main>
</body>
</html>