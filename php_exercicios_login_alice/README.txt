Projeto: Exercícios PHP - pacote gerado pelo ChatGPT

Instruções:
1. Extraia o conteúdo e coloque em um servidor com PHP (ex: XAMPP, WAMP).
2. Crie um banco de dados MySQL chamado 'exercicios_db' e importe ou crie a tabela 'alunos':
   CREATE TABLE alunos (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nome VARCHAR(255),
     matricula VARCHAR(100),
     curso VARCHAR(150),
     email VARCHAR(150),
     telefone VARCHAR(50),
     endereco VARCHAR(255),
     cep VARCHAR(30),
     cidade VARCHAR(100),
     uf VARCHAR(5),
     curso_horas VARCHAR(150),
     carga_horaria INT DEFAULT 0
   ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
3. Ajuste conexao.php com usuário/senha do seu MySQL.
4. Acesse login.html para entrar (qualquer usuário/senha).
5. Os cookies têm duração curta (60s) para facilitar testes.

Observações:
- A autenticação é propositalmente simples para fins de exercício.
- Os arquivos possuem comentários e uso de cookies conforme enunciado.
