<!DOCTYPE HTML>
<?php 
	if ($_REQUEST == false){
		$request = array_map('trim', $_REQUEST);
		
		$request = filter_var_array($request,[ 'nomePróprio' => FILTER_DEFAULT, 'sobrenome' => FILTER_DEFAULT,
												'email' => FILTER_VALIDATE_EMAIL, 'senha' => FILTER_DEFAULT,
												'confirmasenha'=> FILTER_DEFAULT, 'alertasEmail' => FILTER_VALIDATE_BOOLEAN,
												'aceitaTermos' => FILTER_VALIDATE_BOOLEAN
		]
		);
		
		$nome = $request['nomePróprio'];
		if ($nome == false){
			$erros[] = "O nome é inválido.";  
		}

		$sobrenome = $request['sobrenome'];
		if ($sobrenome == false){
			$erros[] = "O sobrenome é inválido.";  
		}
		$email = $request['email'];
		if ($email == false){
			$erros[] = "O Email é inválido.";  
		}
		$senha = $request['senha'];
		if ($senha == false){
			$erros[] = "A senha é inválida.";  
		}

		$confirmasenha = $request['confirmasenha'];
		if ($confirmasenha == false){
			$erros[] = "As senhas estão diferentes seu otário.";  
		}
		$alertasEmail = $request['alertasEmail'];
		if ($alertasEmail == false){
			$erros[] = "adljfghqdsfr.";  
		}
		$aceitaTermos = $request['aceitaTermos'];
		if ($aceitaTermos == false){
			$erros[] = "Aceite os termos de uso, vacilão.";  
		}
		
	}

	 foreach($erros as $msg) { echo $msg }
?>