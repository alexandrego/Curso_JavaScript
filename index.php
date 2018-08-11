<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8"/>

<!-- Formatação da página! -->
<link href="estilo.css" rel="stylesheet" type="text/css" />

<!-- Título da página! -->
<title>iRock | A rocha de estimação!</title>

<!-- Função para solicitar o nome do usuário! -->
<script type="text/javascript">
function touchRock()	{
	var userName = prompt("Qual o seu nome?", "Digite seu nome aqui.");

	if (userName)	{
		alert("Prazer em conhecer você, " + userName + ".");
		document.getElementById("iRock").src = "img/iRockRindo.png";
	}
}
</script>
</head>

<!-- Corpo da página! -->
<body onload="alert('Olá, Eu sou o iRock, a sua rocha virtual!');">
<div id="iR">
<img id="iRock" src="img/iRock.png" alt="iRock" style="cursor:pointer" onclick="touchRock();" />
</div>
</body>
</html>
