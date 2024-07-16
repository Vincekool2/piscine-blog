<?php 
require_once('../config/config.php');
require_once('../templates/partials/header.php'); 


$stmt = $pdo->query('SELECT * FROM article');

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


    <main> <h1>le super blog de la piscine</h1> 

    <?php foreach ($articles as $article) { ?>
	<article>
		<h2><?php echo $article['title']; ?></h2>
		<p><?php echo $article['content']; ?></p>
		<p><?php echo $article['created_at']; ?></p>
	</article>

<?php } ?>

</main>
<?php require_once('../templates/partials/footer.php'); ?>
