# Compose

[doc](https://docs.docker.com/compose/intro/compose-application-model/)

docker compose up
docker compose down
docker compose logs
docker compose ps

## Posgtres

1. підключитися
    `psql -h localhost -p 9999 -U postgres`

2. додати дані

    ```sql
    create database ser;
    create table names (name text not null primary key);
    insert into names values ('ser'),('rom'),('dim');
    ```

3. якщо версії співпадають, то зробити бекап
    `pg_dump -h localhost -p 9999 -U some_user1 -d ser --create > ser.sql`
    `pg_dump -U postgres -d ser --create > ser.sql`

4. якщо вірсії інші, то скористатися sql файлом, зайти в контейнер і в середині виконати
    `pg_dump -U postgres -d ser --create > ser.sql`
