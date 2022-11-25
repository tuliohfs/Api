<!DOCTYPE html>
 <html>
 <head>
       <title>População</title>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 </head>
 <body>
        <div id="nome"></div>
        <div id="resultado"></div>
        <script type="text/javascript">
           $.get( "https://servicodados.ibge.gov.br/api/v1/localidades/paises?orderBy=nome", function( data ) {
           console.log(data);
           $("#resultado").append(JSON.stringify(data));                                             
        });
       </script>
 </body>
 </html>    