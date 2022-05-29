# Instalação das dependências
 
composer install 

# Iniciar docker com o banco de dados

docker-compose up -d

# Comando Utilizado na Aplicação Web

php -S localhost:8080

# Comandos Utilizados na Migração

## Criar uma migration 
vendor/bin/phinx create <nome da migration>

## Executar as migrations: 
vendor/bin/phinx migrate -e development

# Executar Testes
vendor/bin/phpunit src/tests
