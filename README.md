### Database Configuration  
This project requires a database named **task_manager_db**.  
Make sure to configure the database settings in the `.env` file according to your system.  
You need to run the command `php artisan migrate` after creating the database and configuring the `.env` file to create the `tasks` table in the database.  

### Routes  
The only available route in this project is `/tasks`.  
The root (`/`) and any other routes are not defined.  