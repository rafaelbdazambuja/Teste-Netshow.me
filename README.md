## Teste técnico Netshow.me

O projeto foi desenvolvido na linguagem PHP utilizando Laravel, Vue.js e MySql.

## Como rodar o projeto


Primeiro você precisa ter o NodeJS e MySQL


- Clone os arquivos do projeto
- Crie um banco de dados
- Configure o arquivo **.env** na raiz do projeto
- Rode os seguintes comandos no seu terminal


```
composer install --optimize-autoloader;
npm install;
run dev;
artisan storage:link
artisan migrate
```

### E-mail destino dos e-mails

É definido no arquivo **.env** na raiz do projeto pela variável CONTACT_EMAIL, exemplo:

```
CONTACT_EMAIL=exemplo@exemplo.com.br
```

### Configs de autenticação para enviar e-mails


Configurações devem ser setadas no arquivo **.env** na raiz do projeto


```
MAIL_MAILER=
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=
MAIL_FROM_NAME="${APP_NAME}"
MAIL_FROM_ADDRESS=
```

## Testes automatizados


- /tests/Browser


```
php artisan dusk
```
