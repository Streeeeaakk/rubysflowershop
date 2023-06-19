# Make sure laravel and composer is installed to avoid errors
# This system is not 100% complete. You may notice bugs and functionality errors. This system is converted to Laravel from a pure PHP system.



# To run this system:

// if you want to run this project with data already
1. Paste this folder to C://xampp/htdocs/
2. Run and start XAMPP and Create a database named 'db_company' in localhost/phpMyAdmin
3. Import databases from folder 'IMPORT_THIS_DATABASE' to db_company
4. To start, enter localhost/rubysflowershop/public



// if you want to run this project clean
1. Paste folder to C:://xampp/htdocs/
2. Start XAMMP server
3. Enter localhost/rubysflowershop/public
4. Open terminal and go to rubysflowershop folder
5. Enter 'php artisan migrate' to migrate clean databases.
6. Enjoy.



// to add products on a clean database
1. Register a user
2. Go to database and edit 'user_level' from 'users' table from '1' to '0' to grant admin previliges.
# note that admin rights can be granted only on the backend part
