# sf5-api-jwt-boilerplate
modified version from: https://h-benkachoud.medium.com/symfony-rest-api-without-fosrestbundle-using-jwt-authentication-part-2-be394d0924dd

## edit .php-version
```
7.3.24
```

## install dependencies
```bash
$ composer install
```

## ssl passwort in .env
```
JWT_PASSPHRASE=boilderplate
```

## generate keys
```bash
$ openssl genrsa -out config/jwt/private.pem -aes256 4096
$ openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
```

## update database
```bash
$ php bin/console doctrine:schema:create
bzw
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migration:migrate
```

## enable https
```bash
$ symfony server:ca:install
```

## run server
```bash
$ symfony serve
```

### https://localhost/register
Method: 
- Post

Header: 
- Content-Type: application/json

Body:
```json
{
"username": "Mike",
"password": "asdf",
"email": "me@local"
}
```

### https://localhost/api/login_check
Method: 
- Post

Header: 
- Content-Type: application/json

Body:
```json
{
"username": "Mike",
"password": "asdf"
}
```

### https://localhost/api/posts
Method: 
- Add, Del, Put, Get, usw..

Header: 
- Content-Type: application/json
- Auhtorization: Bearer < Token >
## run tests
```bash
$ php bin/phpunit
```