- Docker + Docker Compose needed

- Git clone
```bash
git clone repo-url
```
```bash
cd marketing_campaign_tool
```
- Create .env from .env.example
```bash
cp .env.example .env
```
- Install dependencies
```bash
composer install
```
```bash
npm install
```
```bash
npm run build
```
- Start Docker containers
```bash
docker-compose up -d
```
- Create App key
```bash
docker compose exec app php artisan key:generate
```
- Run all migrations and seeders
```bash
docker compose exec app php artisan migrate --seed
```

Visit http://localhost:8088/

Here you can login as Admin or try seeded landing pages.

Default admin user:
- **Email:** admin@email.com
- **Password:** password

Clicking the Continue button on any landing page will be saved into DB and user will be rediracted to some not existing URL
