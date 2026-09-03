# Gerenciador de Tarefas

Sistema simples de gerenciamento de tarefas desenvolvido em **PHP** com o framework **CodeIgniter 4**, seguindo a arquitetura MVC. Permite criar, listar, editar e excluir tarefas, cada uma com título, descrição e status (pendente, em andamento, concluída).

## Tecnologias

- PHP 8.2+
- CodeIgniter 4
- MySQL
- Bootstrap 5 (via CDN)

## Pré-requisitos

- PHP 8.2+ e Composer instalados
- MySQL

## Como rodar

1. Clone o repositório:
```bash
git clone https://github.com/TitiKruger/gerenciador-tarefas.git
cd gerenciador-tarefas
```

2. Instale as dependências:
```bash
composer install
```

3. Configure as variáveis de ambiente
```bash
cp env .env
```
No `.env`:
```bash
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = tasks
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

4. Crie o banco de dados vazio:
```sql
CREATE DATABASE tasks;
```

5. Rode as migrations (cria a tabela `tasks`):
```bash
php spark migrate
```

6. Inicie o servidor:
```bash
php spark serve
```

Acesse em `http://localhost:8080/tasks`.

## Autor

Desenvolvido por Nefertiti Duane Kruger como parte de um teste de desenvolvimento PHP/CodeIgniter 4.
