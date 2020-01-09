<?php include 'components/head.php'; ?>

	<body class="login">
		<div class="loginLogo">
			<img src="assets/images/logo-tex.png" alt="Tablóide">
		</div>

		<form action="/home" class="forms home" method="post">
			<p>Você precisa estar cadastrado para entrar na plataforma, entre com seus dados:</p>
			<fieldset>
				<label for="">E-mail:</label>
				<input type="text" class="medio required" name="email" required>
			</fieldset>
			<fieldset>
				<label for="">Senha:</label>
				<input type="password" class="medio required" name="senha" required>
			</fieldset>
			<input type="submit" class="send" value="entrar">
			<a href="/esqueceu" class="forgot">Esqueceu sua senha?</a>
		</form>

<?php include 'components/footer.php'; ?>