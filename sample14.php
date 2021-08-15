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
// ファイルを読み込んでその内容を表示する方法①
// $news = file_get_contents('../../news_data/news.txt');
// print($news);

// ファイルを読み込んでその内容を表示する方法②
// readfile('../../news_data/news.txt');

// テキストファイルの最後尾にphpから文字列を追加する方法(.=)
// $news = file_get_contents('../../news_data/news.txt');
// $news .= "2018-06-03 ニュースを追加しました";
// file_put_contents('../.../news_data/news.txt', $news);

//テキストファイルの最後尾にphpから文字列を追加する方法(純粋に文字列連結を記述)
// $news = file_get_contents('../../news_data/news.txt');
// $news = "2021-08-16 ニュースを追加しました" . $news;
// file_put_contents('../.../news_data/news.txt', $news);
?>
</pre>
</main>
</body>
</html>