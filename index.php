<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 05 - JavaScript </title>
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
     
        <div class="divCalculo">
            <input type="number" id="txtValor" />
            <button id="botao" onclick="calcular()">Dobrar</button>
            <label id="resultado"></label>
        </div>
        
    <script>
        var labelResult = document.getElementById("resultado");
        labelResult.innerHTML = "<b> Resultado: </b>";
        document.write("Fim da Div");
        document.write("<hr>");
        
        function calcular(){
            var valor = document.getElementById("txtValor").value;
            if(isNaN(valor) || valor == ""){
                alert('Você deve digitar apenas números!');
            }else{
                var numero = parseFloat(valor);
                var result = numero*2;
                labelResult.innerHTML = result;
                
            }
        }
        
    </script>
        
   
    </body>
</html>
