<!DOCTYPE html>

<html>
    <head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>Conversor</title>
    <script>
      function proceso(txtnumero1,boton){
        switch(boton){
          
            case "PesoCO":
            var parametros={
              "txtnumero1":txtnumero1,
              "btnmulpeso":boton
            };
            break;
            case "PesoUS":
            var parametros={
              "txtnumero1":txtnumero1,
              "btnmuldolar":boton
            };
            break;
        }
        $.ajax({
          data:parametros,
          url:'Calcular.php',
          type:'post',
          beforeSend:
          function(){
            $('#resultado').html('cargando!...');
          },
          success:
          function(response){
            $('#resultado').html(response);
          }
        });
      }
    </script>
</head>
<body>
   
    <form name="form1" method="POST">
     MONEDA: <input type="text" name="txtnumero1" id="txtnumero1">
      <br>
      <input type="button" name="btnpeso" id="btnpeso" value="Peso COLOMBIA"
      onclick="proceso($('#txtnumero1').val(),$('#btnpeso').val());">
      <br>
      <input type="button" name="btnpesodolar" id="btnpesodolar" value="Peso EE.UU"
      onclick="proceso($('#txtnumero1').val(),$('#btnpesodolar').val());">
     
    </form>
    <br>
    <span id="resultado"></span>
    <script src="jquery-3.4.1.js"></script>
</body>
</html>