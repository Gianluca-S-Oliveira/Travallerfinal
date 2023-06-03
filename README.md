# Travallerfinal
Olá! aqui está um passo a passo para que possa na sua máquina local usar o Travaller com potencia total!
PRIMEIRO: preciso que tenha o xampp instalado e que o Apache e MySQL estejam rodando verdinho, assim podemos configurar o banco de dados!
## Configuração do Banco de Dados

Para executar este projeto, siga os passos abaixo para configurar o banco de dados "login" e a tabela "usuarios":

1. Acesse o phpMyAdmin através do seu navegador.
2. Crie um novo banco de dados chamado "login".
3. Selecione o banco de dados "login" e abra o editor de consultas SQL.
4. Cole a seguinte query no editor de consultas e execute-a para criar a tabela "usuarios":

```sql
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL,
  comentarios TEXT
);
