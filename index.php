<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Sistema de Comentários | PHP e AJAX</title>

	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<section class="content">
		<div class="box_form">
			<h1>Deixe seu Comentário:</h1>
			<form onSubmit="return false;">
				<label for="name">Nome</label><br>
				<input type="text" value="" name="name" id="name"/><br><br>

				<label for="comment">Comentário</label><br>
				<textarea name="comment" value="" id="comment"></textarea><br><br>

				<input type="submit" id="form1" class="btn-sub" value="Enviar Comentário"/><br><br>
			</form>
		</div>

		<div class="box_comment">

		</div>

		<div class="box_comment">
						<?php 
			    $pdo = new PDO('mysql:host=localhost; dbname=praticando;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			    $stmt = $pdo->query('SELECT * FROM comentarios');

			    $comment = $stmt->fetchAll(PDO::FETCH_CLASS);
			  
			    foreach($comment as $comentario):
			?>
				<h1><?php echo $comentario->nome; ?></h1>
				<h4><?php echo $comentario->comment; ?></h4>
			<?php endforeach; ?>


		</div>
	</section>
	
	<!-- <script src="assets/js/jQuery/jquery-3.5.1.min.js"></script> -->
	<script src="assets/js/xhr.js"></script>
</body>
</html>