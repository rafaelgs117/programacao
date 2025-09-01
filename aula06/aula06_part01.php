<!DOCTYPE html>
<html>
    <head>
        <title>Exemplo de Funções na mesma página</title>
    </head>
</html>
<body>
    <h1>Exemplo de Funções na mesma página</h1>

    <form method = "POST" action = ""> <!-- action vazio, a própria página irá processar o formulário -->
        <label for = "numero1">Nùmero 1:</label> 
        <input type = "text" name = "numero1" id = "numero1"><br><br> <!-- Campos de entrada para os números -->

        <label for = "numero2">Nùmero 2:</label>
        <input type = "text" name = "numero2" id = "numero2"><br><br> 

        <input type = "submit" name = "enviar" value = "Calcular Soma"> <!-- Botão de envio do formulário -->
    </form>

    <?php
    
    if (isset($_POST['enviar'])){ // Verifica se o formulário foi enviado
        $numero1 = $_POST['numero1']; // Pega o valor do campo numero1
        $numero2 = $_POST['numero2'];

        $resultado = somar($numero1, $numero2); // Chama a função somar e armazena o resultado na variável $resultado

        echo "<p> A soma de $numero1 + $numero2 é igual a: $resultado </p>"; // Exibe o resultado
    }

    function somar($numero1, $numero2){ // Função que recebe dois parâmetros
        $soma = $numero1 + $numero2; // Realiza a soma
        return $soma; // Retorna o resultado da soma
    }
    ?>
</body>
</html>