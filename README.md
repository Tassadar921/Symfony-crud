# Project manager

## Installation

```bash
composer install
```

## Configuration

- Edit DATABASE_URL in .env to put your user, its password, and your mysql/mariadb database name.
- Run :
    ```bash
    php bin/console doctrine:schema:update --force
    ```

## Fixture users

```bash
php bin/console doctrine:fixtures:load
```

You'll have 2 users :
- user@crud.com (password: xxx, role: ROLE_USER)
- admin@crud.com (password: xxx, role: ROLE_ADMIN)

## Start the projet

```bash
symfony server:start
```


