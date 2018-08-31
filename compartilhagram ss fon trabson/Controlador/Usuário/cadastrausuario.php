<!DOCTYPE HTML>
<?php 
	$erros = [];
	
		$request = array_map('trim', $_REQUEST);
		
		$request = filter_var_array($request,[ 'nomePróprio' => FILTER_DEFAULT, 'sobrenome' => FILTER_DEFAULT,
												'email' => FILTER_VALIDATE_EMAIL, 'senha' => FILTER_DEFAULT,
												'confirmaSenha'=> FILTER_DEFAULT, 'alertasEmail' => FILTER_VALIDATE_BOOLEAN,
												'aceitaTermos' => FILTER_VALIDATE_BOOLEAN,
												'dataNasc' => FILTER_DEFAULT,
												'visibilidadePublicações' => FILTER_VALIDATE_INT
		]
		);
		$dia = $request['dataNasc'];
		$dataa = DateTime::createFromFormat('Y-m-d', $dia);
		if ($dataa == true){
			$agr = new DateTime();
			$subt = $dataa->diff($agr);		
			$qtdddd = $subt->days;
			$qtddda = $subt->y;
			echo "<p> Quantidade de dias $qtdddd de você</p>";
			echo "<p> Quantidade de anos $qtddda de você</p>";
			if($qtddda < 16){
				echo "tu é de menó pilantra, ACESSO NEGADO PÁ TU<br>";
			}
			}
		else{
			$erros[] = "O formato de data é inválido.";
		}
		
		
		
		$nome = $request['nomePróprio'] ;
		if ($nome == false || (strlen($nome) < 3 || strlen($nome) > 35 )){
			$erros[] = "O nome é inválido.";  
		}

		$sobrenome = $request['sobrenome'];
		if ($sobrenome == false || (strlen($nome) < 3 || strlen($nome) > 35 )){
			$erros[] = "O sobrenome é inválido.";  
		}
		$email = $request['email'];
		if ($email == false){
			$erros[] = "O Email é inválido.";  
		}
		$senha = $request['senha'];
		if ($senha == false || (strlen($senha) < 6 || strlen($senha) > 12 )) {
			$erros[] = "A senha é inválida.";  
		}

		$confirmasenha = $request['confirmaSenha'];
		if ($confirmasenha != $senha){
			$erros[] = "As senhas estão diferentes seu otário.";  
		}
		if ($confirmasenha == false){
				$erros[] = "!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!CONFIRMA ESSA MERDA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";  
		}
		
		
		$alertasEmail = $request['alertasEmail'];
		if ($alertasEmail == false){
			$erros[] = "ããããããããnnnnnnn, ele não quer receber alerta de email, maior vacilão! EU ACHEI PESADOOO";  
		}
		$aceitaTermos = $request['aceitaTermos'];
		if ($aceitaTermos == false){
			$erros[] = "Aceite os termos de uso, vacilão.";  
		}
		
		$visi = $request['visibilidadePublicações'];
		if($visi == FALSE){
			$erros[]="poiuhygtfd";
		}
		else if($visi !=1 && $visi !=2 && $visi !=3){
			$erros[]="poiuhygtfd";
		}
		

	 foreach($erros as $msg){
		 echo " Uma ameaça foi detectada:  <strong>$msg</strong> <br><br>";
	 }
?>
