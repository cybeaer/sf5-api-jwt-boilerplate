### edit .php-version

### install dependencies
```
composer install
```

### ssl passwort in .env
```
JWT_PASSPHRASE=boilderplate
```

### generate keys
```
openssl genrsa -out config/jwt/private.pem -aes256 4096
openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
```

### update database
```
php bin/console doctrine:schema:create
```

### enable https
```
symfony server:ca:install
```

### run server
```
symfony serve
```

### run tests
```
php ./vendor/bin/phpunit
```