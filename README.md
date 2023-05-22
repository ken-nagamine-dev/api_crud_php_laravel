# api_crud_php
Base code to build a rest api crud in laravel.

## use
* laravel ^10.10
* php ^8.1.10
* composer 2.5.5

## steps

1. create your .env with system settings
2. php artisan make:model nameModel -m
3. Enter the information in app\Models\nameModel and database\migrations\ ..._create_nameModel_table
4. php artisan migrate
5. php artisan make:controller nameModelApiController
6. Enter the information in app\Http\Controllers\nameModelApiController
7. Create the endpoints in routes\api