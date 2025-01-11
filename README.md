# Agenda Cultural

Este projeto é uma aplicação web para gerenciar eventos culturais. Ele permite que os usuários visualizem, adicionem e editem eventos em uma agenda compartilhada.

## Funcionalidades

- Visualização de eventos culturais
- Adição de novos eventos
- Edição de eventos existentes
- Exclusão de eventos

## Tecnologias Utilizadas

- HTML
- CSS
- JavaScript
- PHP
- Laravel
- MySQL

## Como Executar o Projeto

1. Clone o repositório:
    ```bash
    git clone https://github.com/muniunga/agendacultural.git
    ```
2. Navegue até o diretório do projeto:
    ```bash
    cd agendacultural
    ```
3. Instale as dependências do PHP:
    ```bash
    composer install
    ```

4. Configure o arquivo `.env`:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5. Execute as migrações do banco de dados:
    ```bash
    php artisan migrate
    ```
6. Inicie o servidor de desenvolvimento:
    ```bash
    php artisan serve
    ```
7. Acesse a aplicação em seu navegador:
    ```
    http://localhost:8000
    ```

## Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature:
    ```bash
    git checkout -b minha-feature
    ```
3. Commit suas mudanças:
    ```bash
    git commit -m 'Adiciona minha feature'
    ```
4. Faça o push para a branch:
    ```bash
    git push origin minha-feature
    ```
5. Abra um Pull Request

## Licença

Este projeto está licenciado sob a Licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

