<!DOCTYPE html>
<html lang="pt">
<head>
	<meta 	charset="utf-8">
	<title>Contato</title>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" /> 
	<!--[if lt IE 9]>
	    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
	<!-- Pega toda a area da tela  -->
	


	<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){

$recebenome = trim($_POST["first_name"]);

$recebemail = trim($_POST["email"]);

$recebeassunto = $_POST["assunto"];

$recebemsgs  = $_POST["comments"];

// Definindo os cabeçalhos do e-mail

$headers = "Content-type:text/html; charset=iso-8859-1";


// Vamos definir agora o destinatário do email, ou seja, VOCÊ ou SEU CLIENTE



$para = "pedroaraujo.cin@gmail.com";


// Definindo o aspecto da mensagem



$mensagem   = "De:
$recebenome

Email:
$recebemail


Mensagem do Alumni CIn - Contato

Mensagem: 
$recebemsgs

";



// Enviando a mensagem para o destinatário

$nome = ucwords(strtolower($recebenome));
$email = $recebemail;
$email_url = str_replace("@", "%40", $email);
		
		
$mensagem2 = str_replace('%nome%', $nome, $mensagem);
$mensagem2 = str_replace('%email%', $email, $mensagem2);
		
		// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		

$envia =  mail($para,$recebeassunto,$mensagem2,"From:$email"); 

// Envia um e-mail para o remetente, agradecendo a visita no site, e dizendo que em breve o e-mail será respondido.



$mensagem2  = "Olá " . $recebenome . ". Agradecemos sua visita e a oportunidade do seu contato. Logo você receberá uma resposta.

Esta mensagem foi gerada automaticamente em recebimento a sua solicitação.
Não há necessidade de respondê-la.
";



$envia =  mail("$recebemail", "O Alumni CIn agradece o contato", "$mensagem2","From:$para");

  

echo "<script>javascript:window.alert('Mensagem enviada com sucesso!')</script>";

echo "<meta http-equiv='refresh' content='2;URL=contato.html'>";

}
?>

	<div class="todo bgPreto">
		<div class="container">
			<div class="menu">
				<h1 class="corBranca">Contato</h1>
				<div class="menu1"><a href="contato.php" class="corBranca">contato</a></div>
				<div class="menu2"><a href="beneficios.html" class="corBranca">beneficios</a></div>
				<div class="menu3"><a href="objetivos.html" class="corBranca">objetivos</a></div>
				<div class="menu4"><a href="index.html" class="corBranca">home</a></div>
			
			</div>
				
			<div class="mapa">
				<iframe width="900" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?ie=UTF8&amp;cid=2364052024814804435&amp;q=Center+of+Informatics+of+UFPE&amp;gl=BR&amp;hl=pt-BR&amp;ll=-8.055655,-34.95178&amp;spn=0.006295,0.006295&amp;t=h&amp;iwloc=A&amp;output=embed"></iframe>
			</div>

			<div id="boxContato">
				<form method="post" action="#">
				

					<table class="tabela" width="310px">
                    <div id="form-nome">
  					<label for="first_name">Nome:</label>
                    <p><input  type="text" name="first_name" maxlength="150" class="campo-form-fale-conosco" value="Nome completo" onclick="if(this.value=='Nome completo')this.value='';"></p>
                    </div>
                    <div id="form-email">
  					<label for="email">Email:</label>
                    <p><input  type="text" name="email" maxlength="150" class="campo-form-fale-conosco" value="seuemail@email.com.br" onclick="if(this.value=='seuemail@email.com.br')this.value='';"></p>
                     </div>
                     <div id="form-assunto">
                     <label for="assunto">Assunto:</label>
					 <p><input  type="text" name="assunto" maxlength="150" class="campo-form-fale-conosco"></p>
                     </div>
                    <div id="form-comentario">
                     <label for="comments">Comentário:</label>
					 <p><textarea  name="comments" maxlength="2000" cols="26" rows="6"></textarea></p>
                     </div>
					<div id="form-botao">
 					 <input class="botao-form" type="submit" value="Enviar">
                    </div>
                </table>

				</form>
			</div>
				
		</div>

		
	</div>

	<div id ="rodape">
			
			<div class="rodapeEsq">
				<img id="ufpe" src="img/logoufpe.png" />
				<img id ="cin" src="img/logocin.png"  />
			</div>	
			<div class="rodapeDir">
				<p>Centro de Informática - CIn <br> 
				   Tel +55 81 2126-8430 r XXXX - Cidade Universitária - <br>
				   50740-540 - Recife/PE
				</p>

				<a  href ="https://www.facebook.com/CInUFPEOficial?fref=ts" ><div id="img_face"></div></a>
				<a  href ="#"><div id="img_twt"></div></a>
				<div class="dev"><p>Desenvolvido por</p></div>
				<a  href ="http://citi.org.br/citi/"><img class="img_citi" src="img/developedby.png"  /></a>

			</div>
	</div>


</body>


</html>