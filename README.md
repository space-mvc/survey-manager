# api-example

## Install instructions

1) Run ```git clone https://github.com/space-mvc/survey-manager.git```

2) Run ```composer install```

3) Create a virtual host as http://local.surveys.com for example

4) Create a mysql database as 'survey_manager'

5) Update the database settings inside .env to match your database/host

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=survey_manager
DB_USERNAME=root
DB_PASSWORD=root
```

6. Run ```php artisan migrate:refresh --seed``` to migrate the database seeds

7. Setup laravel folder permissions

```sudo chgrp -R www-data storage bootstrap/cache```

```sudo chmod -R ug+rwx storage bootstrap/cache```

--------------------------------------

### Example Survey Evaluate URL 

http://local.surveys.com/?annual_income=50000&borrower_trustworthiness=trust&borrower_age=22&loan_length_in_months=14&loan_amount=5000

![](public/survey-example-response.png?raw=true)
