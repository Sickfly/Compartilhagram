<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>	Compartilhagram	</title>
	</head>

	<body>
	
		<h1>InstaCPII</h1>
		<div>
			<form method="POST" action="Controlador/Usuário/cadastrausuario.php" novalidate>
				<input name="nomePróprio" type="text" minlength='3' maxlength='35' placeholder="Nome próprio" required />
				<input name="sobrenome" type="text" minlength='3' maxlength='35' placeholder="Sobrenome" required /><br/>

				<input name="email" type="email" placeholder="E-Mail" required /><br/>

				<input name="senha" type="password" min='6' max='12' placeholder="Senha" required /><br/>

				<input name="confirmaSenha" type="password" min='6' max='12' placeholder="Confirmar senha" required /><br/>

				<label>Data de nascimento: <input name="dataNasc" type="date" required /></label><br/>

				<label>
					Quem pode ver as suas publicações?
					<select name="visibilidadePublicações">
						<option value="" disabled selected >Selecione</option>
						<option value="1">Amigos</option>
						<option value="2">Amigos de amigos</option>
						<option value="3">Todos</option>
					</select>
				</label><br/>

				<label><input name="alertasEmail" type="checkbox" />Receber alertas por e-mail.</label><br/>

				<label><input name="aceitaTermos" type="checkbox" required />Li e concordo com os termos de uso e com a política de privacidade.</label><br/>

				<input type="submit" value="Cadastrar"/>
			</form>
		</div>
	</body>
</html>