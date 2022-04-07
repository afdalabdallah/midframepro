## To run from github clone:
**Make sure composer is already installed**
- Clone the project
- Run 
    ```
    composer install
    ```
- Run 
    ```
    cp .env.example .env
    ```
- Run
    ```
    php artisan key:generate 
    ```
- Run 
    ```
    php artisan migrate
    ```
  If an error saying 
  ```
  SQLSTATE[HY000] [1049] Unknown database 'laravel' (SQL: select * from information_schema.tables where table_schema = laravel and table_name = migrations and table_type   = 'BASE TABLE')
  ```
  appears, try to make a new schema or database in the DBMS with 'laravel' as its name, you can change the name by changing
  ```
  DB_DATABASE=laravel
  ```
  in .env file. After making the database, try to run migration again
- Run 
    ```
    php artisan serve
    ```
