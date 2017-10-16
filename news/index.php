<?php 
	error_reporting(E_ALL);
    require_once 'array.php';
    require_once 'class.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Новости</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
		<h1>Актуальные новости в сфере IT</h1>
		<?php foreach($news as $post):
			$title = $post['title'];
            $content = $post['content'];
            $date = $post['date'];
            $source = $post['source'];
        ?>
        <?php $postNew = new News($title, $date, $content, $source); ?>
        	<article>
        		<h2><?= $postNew->getTitle() ?></h2>
        		<p class="bold">Дата публикации: <span class="date"><?= $postNew->getDate() ?></span></p>
        		<p><?= $postNew->getContent() ?></p>
        		<p class="bold">Источник: <span class="source"><?= $postNew->getSource() ?></span></p>
        	</article>
		<?php endforeach ?>
	</div>
</body>
</html>