<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<title>Notificação</title>
<style type="text/css">
@page {
	margin: 2cm;
	margin-top: 50px; 
	margin-bottom: 40px;
}
body {
    font-family: sans-serif;
    font-size:15px;
	 margin: 2.5cm 0;
	 text-align: justify;
}
#header { 
	position: fixed; 
	top: -30px; 
	left: 0px; 
	right: 0px;  
	height: 50px; }
#footer {
	position: fixed;
	left: 0;
	right: 0;
	color: #000000;
	font-size: 0.9em;
}
#footer {
  bottom: -20px;
}
#header table {
}
#footer table {
	width: 100%;
	border-collapse: collapse;
	border: none;
}
#header td {
}
#footer td {
  padding: 0;
	width: 10%;
}
.page-footer {
  text-align: center;
}
hr {
  page-break-after: always;
  border: 0;
}
table.separate {
  border-collapse: separate;
  border-spacing: 20pt;
  
}
td{
    padding: 4px;
}
.container{
	 justify-content: flex-start;
}
.semsopimagem {
  margin-top: 1cm;
  height: 260px !important;
  width: 260px !important;
}
.Imangemsemsop{
  margin-top: 1cm;
  margin: 0 auto !important;
}
.page-number {
  text-align: center;
}
.page-number:before {
  content: "Pagina " counter(page);
}
#watermark { position: fixed; bottom: 150px; width: 650px; height: 600px; opacity: .1; }
</style>
</head>

	<body>
		<div id="watermark"><img src="./img/brasão.png" height="100%" width="100%"></div>
	
        <div id="header">
            <table>
              <tr>
                  <center><img src="./img/brasão.png" height="250%" width="20%"/></center>
              </tr>
            </table>
        </div>
            <br>
        <div id="footer">
            <table>
                <tr>
                    <center><img src="./img/BrasaoFooter2.png"/></center>
                    <div class="page-number"></div>
                </tr>
            </table>
        </div>
        
        <h3 style="text-align:center;"><u>SUBSECRETARIA MUNICIPAL DE FAZENDA</u></h3>
        <br>
        <div class="row">
            {{-- <span style="font-weight:bold;">Data do envio:</span>{{ date('d/m/Y', strtotime($data["created_at"])) }} --}}
        </div>
        <br>
        <div class="container">
            <span style="font-weight:bold;">Nome:</span>
            {{$nome}}
		</div>

        <br>
     
        <div class="container">
			<span style="font-weight:bold;">CPF:</span>
		    {{$cpf}}
		</div>

		<br>
		
		<div class="container">
			<span style="font-weight:bold;">Celular:</span>
		    {{$telefone}}
		</div>
		<br>
		
		<div class="container">
			<span style="font-weight:bold;">Data do Processo:</span>
            {{$data_processo}}
	   </div>
       <br>
		
		<div class="container">
			<span style="font-weight:bold;">Numero do processo:</span>
            {{$n_processo}}
	   </div>
       <br>

        <div class="container">
            <span style="font-weight:bold;">Codigo Verificador:</span>
            {{$codigo_verificador}}
        </div>
        <br>

        <div class="container">
            <span style="font-weight:bold;">Numero do Acordo:</span>
            {{$n_acordo}}
        </div>
       <br>
		
		<div class="container">
			<span style="font-weight:bold;">Mensagem:</span>
            {{$solicitacao1}} {{$solicitacao2}} {{$solicitacao3}}
	   </div>

        <br>
	</body>
</html>
