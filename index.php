<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tagger</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/tagger-style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<h1>Tagger</h1>
		<strong class="lead sub">Escolha seus parâmetros</strong>
		<div class="row">
			<div class="col-md-12 col-xs-12 campos">
				<div class="form-group">
					<input type="text" placeholder="Source" class="source form-control">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Campaign" class="campaign form-control">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Medium" class="medium form-control">
				</div>
				<div class="form-group">
					<textarea name="codePaste" id="" cols="30" rows="10" class="codePaste form-control"></textarea>
				</div>
				<button class="Enviar btn btn-primary col-md-4 col-xs-12">Enviar</button>
			
				<pre class="resultado col-md-12 col-xs-12"></pre>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="js/tagger-script.js"></script>
</body>
</html>