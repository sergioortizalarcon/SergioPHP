<head>
<script type='text/javascript'
	src='https://rawgit.com/tttptd/form-serialize/master/serialize-0.2.min.js'></script>
<script type="text/javascript">
		var conector;

		function accionAJAX(){
			document.getElementById('banner').innerHTML=conector.responseText;
		}

		function enviarAJAX(){
			conector=new XMLHttpRequest();
			listaDeParametros=serialize(document.getElementById('idForm'));
			conector.open("POST", "ajax.php", true);
			conector.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			conector.send(listaDeParametros);

			conector.onreadystatechange=function(){
				if(conector.readyState==4&&conector.status==200){
					accionAJAX();
				}
			}
		}
	</script>
</head>
<body>
	<h3>Muchas cosas por aqu&iacute;</h3>
	<form id='idForm'>
		a <input type="text" name="a"><br /> b <input type="text" name="b"><br />
		c <input type="text" name="c"><br /> d <input type="text" name="d"><br />
		e <input type="text" name="e"><br /> f <input type="text" name="f"><br />
		g <input type="text" name="g"><br /> h <input type="text" name="h"><br />
		<input type="button" onclick="enviarAJAX()" value="Enviar"><br>
	</form>
	<div id="banner"></div>
	<h3>M&aacute;s cosas</h3>
</body>