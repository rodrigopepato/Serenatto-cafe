# Serenatto Café ☕

Este é um projeto de **cardápio digital** para o Serenatto Café, originalmente estático, que agora está sendo transformado em um **site dinâmico** utilizando **PHP** e **MySQL**.

## 📌 Objetivo
O objetivo deste projeto é permitir que o cardápio seja gerenciado dinamicamente, possibilitando:
- Adicionar, editar e remover itens do menu.
- Armazenar os dados no banco de dados MySQL.
- Criar um painel administrativo para gerenciar os produtos.
- Exibir os produtos de forma dinâmica no frontend.

## 🛠️ Tecnologias Utilizadas
- **PHP 8.3** (Backend)
- **MySQL** (Banco de Dados)
- **HTML, CSS e JavaScript** (Frontend)

## 🚀 Como Executar o Projeto

### 1️⃣ Pré-requisitos
Certifique-se de ter os seguintes softwares instalados:
- PHP 8.3
- MySQL
- Servidor Apache (XAMPP, WAMP ou equivalente)

### 2️⃣ Clone o Repositório
```bash
git clone https://github.com/seu-usuario/serenatto-cafe.git
cd serenatto-cafe
```

### 3️⃣ Configure o Banco de Dados
1. Crie um banco de dados MySQL chamado `serenatto_cafe`.
2. Execute o script SQL localizado em `database/schema.sql` para criar as tabelas.

### 4️⃣ Inicie o Servidor
Se estiver usando o PHP embutido:
```bash
php -S localhost:8000
```
Acesse o site no navegador: `http://localhost:8000`

## 📌 Funcionalidades
- [ ] Listagem de produtos do cardápio
- [ ] Sistema de login

## 🤝 Contribuição
Se quiser contribuir para este projeto, siga estes passos:
1. Faça um **fork** do repositório.
2. Crie uma **branch** (`git checkout -b feature/nova-funcionalidade`).
3. **Commit** suas alterações (`git commit -m 'Adiciona nova funcionalidade'`).
4. Faça um **push** para a branch (`git push origin feature/nova-funcionalidade`).
5. Abra um **Pull Request**.

## 📜 Licença
Este projeto está sob a licença MIT. Sinta-se livre para usá-lo e modificá-lo!
