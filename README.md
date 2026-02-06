Docker needed

Start docker containers
docker-compose up -d

run all migrations and seeders
docker exec -it app php artisan migrate --seed

Visit http://localhost:8088/

Here you can login as Admin or try seeded landing pages.

Clicking the Continue button on any landing page will be saved into DB and user will be rediracted to some not existing URL