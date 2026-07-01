# 🐾 PSAF - Sistema de Gerenciamento para Pet Shop

## Disciplina

**Aplicações Backend**

---

# Integrantes

- João Pedro Santos Fagundes
- Carlos Eduardo Bispo de Melo

---

# Sobre o Projeto

O PSAF (Pet Shop Amigo Fiel) é um sistema de gerenciamento para Pet Shop desenvolvido como projeto da disciplina de **Aplicações Backend**.

O sistema utiliza uma arquitetura dividida entre frontend e backend, onde o frontend em PHP consome uma API REST desenvolvida em Java Spring Boot.

O sistema permite o gerenciamento de:

- Clientes
- Pets
- Produtos
- Serviços
- Agendamentos

Além disso, possui:

- Login com dois perfis
- Dashboard
- Relatórios
- Controle de permissões
- Banco de dados MySQL

---

# Tecnologias Utilizadas

## Backend

| Tecnologia | Versão |
|------------|---------|
| Java | 17.0.16 |
| Spring Boot | 4.1.0 |
| Spring Data JPA | 4.1.0 |
| Hibernate ORM | 7.4.1.Final |
| Apache Tomcat | 11.0.22 |
| Maven Wrapper | 3.9.x |

## Frontend

| Tecnologia | Versão |
|------------|---------|
| PHP | 8.x |
| HTML5 | HTML5 |
| CSS3 | CSS3 |
| Bootstrap | 5.3.3 |
| JavaScript | ES6 |

## Banco de Dados

| Tecnologia | Versão |
|------------|---------|
| MySQL | 8.x |
| phpMyAdmin | XAMPP |

## Ambiente de Desenvolvimento

| Software | Versão |
|----------|---------|
| Visual Studio Code | 1.102.x |
| XAMPP | 8.x |

---

# Estrutura do Projeto

```
PSAF
│
├── api-java
│   └── psaf
│
├── frontend-php
│
└── banco
```

---

# Requisitos

- Java JDK 17
- XAMPP
- PHP 8+
- MySQL
- Visual Studio Code

---

# Configuração do Banco

Criar um banco chamado:

```sql
CREATE DATABASE psaf;
```

Após isso execute o arquivo **sql_inicial.sql**.

---

# Como Executar a API

### 1. Abra o Visual Studio Code

Abra a pasta:

```
PSAF/api-java/psaf
```

### 2. Abra um terminal

No VS Code:

```
Terminal → New Terminal
```

ou

```
Ctrl + `
```

### 3. Execute a API

No terminal execute:

```powershell
.\mvnw.cmd spring-boot:run
```

### 4. Aguarde iniciar

Quando aparecer a mensagem:

```
Started PsafApplication
Tomcat started on port(s): 8080
```

A API estará funcionando.

### 5. Teste a API

Abra no navegador:

```
http://localhost:8080/api/clientes
```

Se aparecer um JSON, a API está funcionando corretamente.

---

# Como Executar o Frontend

1. Coloque a pasta **PSAF** dentro de:

```
xampp/htdocs
```

2. Abra o XAMPP.

3. Inicie:

- Apache
- MySQL

4. Abra o navegador.

Acesse:

```
http://localhost:84/PSAF/frontend-php/login.php
```

*(Caso utilize outra porta, altere 84 para a porta configurada no Apache.)*

---

# Usuários para Teste

## Administrador

Usuário

```
admin
```

Senha

```
123456
```

---

## Funcionário

Usuário

```
funcionario
```

Senha

```
123456
```

---

# Funcionalidades

## Login

- Administrador
- Funcionário

## Dashboard

- Quantidade de Clientes
- Quantidade de Pets
- Quantidade de Produtos
- Quantidade de Serviços
- Quantidade de Agendamentos
- Últimos Agendamentos

## Clientes

- Cadastrar
- Listar
- Editar
- Excluir

## Pets

- Cadastrar
- Listar
- Editar
- Excluir

## Produtos

- Cadastrar
- Listar
- Editar
- Excluir

## Serviços

- Cadastrar
- Listar
- Editar
- Excluir

## Agendamentos

- Cadastrar
- Listar
- Editar
- Excluir

## Relatórios

- Clientes
- Pets
- Produtos
- Agendamentos

---

# Controle de Acesso

## Administrador

- Cadastrar
- Editar
- Excluir
- Visualizar Relatórios
- Dashboard completo

## Funcionário

- Cadastrar
- Editar

Não possui permissão para excluir registros nem acessar os relatórios.

---

# Endpoints da API

## Clientes

```
GET    /api/clientes
GET    /api/clientes/{id}
POST   /api/clientes
PUT    /api/clientes/{id}
DELETE /api/clientes/{id}
```

## Pets

```
GET    /api/pets
GET    /api/pets/{id}
POST   /api/pets
PUT    /api/pets/{id}
DELETE /api/pets/{id}
```

## Produtos

```
GET    /api/produtos
GET    /api/produtos/{id}
POST   /api/produtos
PUT    /api/produtos/{id}
DELETE /api/produtos/{id}
```

## Serviços

```
GET    /api/servicos
GET    /api/servicos/{id}
POST   /api/servicos
PUT    /api/servicos/{id}
DELETE /api/servicos/{id}
```

## Agendamentos

```
GET    /api/agendamentos
GET    /api/agendamentos/{id}
POST   /api/agendamentos
PUT    /api/agendamentos/{id}
DELETE /api/agendamentos/{id}
```

---

# Regras de Negócio

- O Administrador possui acesso total ao sistema.
- O Funcionário pode cadastrar e editar registros.
- O Funcionário não pode excluir registros.
- Um pet com agendamento não pode ser excluído.
- Após excluir o agendamento, o pet pode ser excluído normalmente.

---

# Desenvolvido para fins acadêmicos

Projeto desenvolvido para a disciplina **Aplicações Backend** utilizando Java Spring Boot, PHP e MySQL.
