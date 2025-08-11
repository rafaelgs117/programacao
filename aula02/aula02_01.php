<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Operadores relacionais em PHP </h1>
        <p>Exemplo de como é usado nesse formato. </p>
    </header>
    <?php # início do bloco PHP
        //PDF1 e 2
        $idade = 21;
        $nome = 'Alice';
        echo "Nome: $nome<br>";
        echo "Idade: $idade<br>";
        echo "Ola, $nome, você tem $idade anos!<br>";

        // SOMA
        $dolar01 = 10;
        $dolar02 = 5;
        $resultado = $dolar01 + $dolar02;
        echo "A soma de $dolar01 + $dolar02 é igual a $resultado<br>";

        // subtração
        $dolar03 = 15;
        $dolar04 = 20;
        $result01 = $dolar03 - $dolar04;
        echo "A subtração de $dolar03 - $dolar04 é igual a $result01<br>";

        // multiplicação
        $dolar05 = 2;
        $dolar06 = 3;
        $result02 = $dolar05 * $dolar06;
        echo "A multiplicação de $dolar05 * $dolar06 é igual a $result02<br>";

        // divisão
        $dolar07 = 10;
        $dolar08 = 2;
        $result03 = $dolar07 / $dolar08;
        echo "A divisão de $dolar07 / $dolar08 é igual a $result03<br>";
      
        // if e else PDF3
        $nota01 = 6.65;
        if ($nota01 >= 7) {
            echo "Aprovado com nota $nota01<br>";
        }
        else {
            echo "Reprovado com nota $nota01<br>";
        }

        //PDF5
        $tempo01 = "chuvoso";
        if ($tempo01 == "ensolarado") {
            echo "Hoje esta $tempo01, vamos à praia!<br>";
        }

        else {
            echo "hoje esta $tempo01, vamos ao cinema!<br>";
        }

        //else if

        $idade02 = 21;
        if ($idade02 < 13) {
            echo "Você é uma criança!<br>";
        }

        else if ($idade02 < 18) {
            echo "Você é um adolescente!<br>";
        }

        else if ($idade02 < 25) {
            echo "Você é um jovem adulto!<br>";
        }

        else {
            echo "Você é um adulto!<br>";
        }

        //comparação

        $nome01 = "Luna";
        if ($nome01 == "Luna") {
            echo "Olá Luna, seja bem vinda.<br>";
        }

        else {
            echo "Olá $nome01!<br>";
        }

        
        // operaores logicos AND, OR e NOT PDF 4

        //AND é representado pr &&
        $idade01 = 18;
        $temPermissao = true;

        if ($idade01 >= 18 && $temPermissao) {
            echo "Você pode entrar na festa!<br>";
        }
        else {
            echo "Você não pode entrar na festa!<br>";
        }

        // OR é representado por ||
        $temIngresso = false;
        $temConvite = true;

        if ($temIngresso || $temConvite) {
            echo "Você pode entrar no show!<br>";
        }

        else {
            echo "Você não pode entrar no show!<br>";
        }

        // NOT é representado por !
        $usuarioLogado = false;

        if (!$usuarioLogado) {
            echo "Você precisa fazer login!<br>";
        }

        //PDF6 Array e Switchcase
        $diaDaSemana = "quarta";
        switch ($diaDaSemana) {
            case "segunda-feira":
                echo "Hoje é segunda!<br>";
                break;
            case "terça":
                echo "Hoje é terça!<br>";
                break;
            case "quarta":
                echo "Hoje é quarta!<br>";
                break;
            //...
            default:
                echo "Dia inválido!<br>";
                break;
        }

        //pdf6 percorendo um array
        $numeros = array(1, 2, 3, 4, 5); // criação de um array

        echo $numeros[0] . "<br>"; //imprime possiçao 0
        echo $numeros[1] . "<br>"; //imprime possiçao 1
        echo $numeros[3] . "<br>"; //imprime possiçao 3

        //estrutura com print_r
        echo "<br>";
        //exemplo com echo
        echo "exemplo com echo<br>";
        $dados = ["nome" => "Alice", "idade" => 21];
        echo "Nome: " . $dados["nome"] . ", idade: " . $dados["idade"] . "<br>";

        //exemplo com print_r, mais usado apra mostrar a estrutura de um array
        echo "<br>";
        echo "exemplo com print_r<br>";
        echo "<pre>"; // formata a saída
        print_r($dados); 
        echo "</pre>"; // imprime o array de forma legível

        //for
        echo "<br>";
        echo "Exemplo de laço for<br>";
        $letras = array("A", "B", "C", "D", "E", "F", "G");

        for ($i = 0; $i < count($letras); $i++) { // percorre o array
            echo "Letra: " . $letras[$i] . "<br>"; // imprime cada letra
        }

        //foreach, um laço mais simples para percorrer arrays
        echo "<br>";
        echo "Exemplo de laço foreach<br>";
        $numeros01 = array(10, 20, 30, 40, 50);
        foreach ($numeros01 as $numero) { //loop percorre cada elemento do array $numeros01 
            echo "Número: $numero<br>";
        }

    
 
    ?> 
</body>      
</html>
