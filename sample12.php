<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

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
$date = sprintf('%04d年　%02d月　%02d日', 2021, 8, 3);
print($date);
# sprintf('%04s年　%02d月　%02d日', '2021, 8, 3);
# ⇒出力：0000年08月03日
# sprintf('%04s年　%02d月　%02d日', 'Hello World', 8, 3);
# ⇒出力：Hello World年08月03日

$hello = sprintf('%04s年　%02d月　%02d日', 'Hello World', 8, 3);
print($hello)

?>
</pre>
</main>
</body>
</html>