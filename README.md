# Bilemo

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/54f99fc6cc07479cb52324eddc4986e2)](https://www.codacy.com/manual/siggwer/Bilemo?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=siggwer/Bilemo&amp;utm_campaign=Badge_Grade)

# Openclassrooms project 7
```
Development of an API based on symfony 4.
```
# Installation

Clone this repository.
```
git clone https://github.com/siggwer/Bilemo.git
```

Install dependencies
```
composer install
```

Create and edit a new env file `.env.local`
```
# .env.local
DATABASE_URL=mysql://your_login:your_password@127.0.0.1:3306/your-databasename
```

Create the database 
```
bin/console doctrine:database:create
```

Load the fixtures
```
bin/console composer prepare
```

Create the token
```
Change the JWT authentication password in the .env file found at the root of the project :
    JWT_SECRET_KEY=%kernel.project_dir%/config/jwt/private.pem
    JWT_PUBLIC_KEY=%kernel.project_dir%/config/jwt/public.pem
--> JWT_PASSPHRASE=your_passphrase
```
```
$ mkdir -p config/jwt
$ openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
$ openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout
```
```
For more information :
https://github.com/lexik/LexikJWTAuthenticationBundle/blob/master/Resources/doc/index.md#installation
```
Start the server
```
bin/console server:run
```

Enjoy!
