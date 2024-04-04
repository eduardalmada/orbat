<?php 
	$mes = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
	date_default_timezone_set('America/Sao_Paulo');
	class Sistema{
		public function login($login,$senha){
			global $pdo;

			$sql = "SELECT * FROM usuarios WHERE usuario_login = :login AND usuario_senha = :senha";

			$sql = $pdo->prepare($sql);
			$sql->bindValue(":login",$login);
			$sql->bindValue(":senha",$senha);
			$sql->execute();


			if($sql->rowCount()> 0){
				$dado = $sql->fetch();
				$_SESSION["id_logado"] = $dado["id_usuario"];
				return true;
				exit;
			}else{
				return false;
				exit;
			}
		}
		public function UsuarioCadastrar($dados){
			global $pdo;
			$sql = "INSERT into usuarios(usuario_nome,usuario_login,usuario_senha,id_nivel_acesso) values(:nome,:login1,:senha,:nivel)"  ;		
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":nome",$dados['usuario']);
			$sql->bindValue("login1",$dados['login']);
			$sql->bindValue(":senha",$dados['senha']);
			$sql->bindValue(":nivel",$dados['nivel']);
			$sql->execute();
			if($sql->rowCount()> 0){
				return true;
				exit;
			}else{
				return false;
				exit;
			}
		}
		public function OMCadastrar($dados){
			global $pdo;
			$sql = "INSERT into om(nome_om,data_inserida) values(:om,now())"  ;		
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":om",$dados['om']);
			$sql->execute();
			if($sql->rowCount()> 0){
				return true;
				exit;
			}else{
				return false;
				exit;
			}
		}

	}

?>