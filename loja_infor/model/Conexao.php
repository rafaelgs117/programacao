<?php
class Conexao {
    private static $host = "localhost";
    private static $usuario = "root";
    private static $senha = "";
    private static $banco = "cadastro_loja_informatica";

    private static $conexao;

    public static function getConexao() {
        if (!isset(self::$conexao)) {
            try {
                self::$conexao = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$banco . ";charset=utf8",
                    self::$usuario,
                    self::$senha
                );
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro ao conectar ao banco de dados: " . $e->getMessage());
            }
        }
        return self::$conexao;
    }
}
?>