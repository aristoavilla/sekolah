read me first

I am using SQLite for the database, so doesn't need to open any database server

follow this instruction:
// without server xampp or laragon

1. open cmd in this project, type "npm run dev" (dont kill this terminal)
2. open new cmd, type "php artisan serve" (don't also kill this terminal)
3. open another cmd again type "php artisan migrate:fresh --seed"

//with server xampp or laragon (with apache server, without artisan serve)

1. open cmd in this project, type "npm run dev" (dont kill this terminal)
2. open another cmd again type "php artisan migrate:fresh --seed"
3. open laragon, click start all (to turn on the apache server)
4. then right click mouse on the laragon background, choose "www"
5. choose "sekolah" project to open the website
