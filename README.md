# Obscura-X Certification Website (Laravel + Docker)

This project is prepared for local development using:

- PHP 8.4 (Laravel latest)
- MySQL 8.4
- Nginx
- Docker Compose

## Start locally

1. Build and start containers:

```bash
docker compose up -d --build
```

2. Install PHP dependencies inside container (first run only):

```bash
docker compose exec app composer install
```

3. Generate app key (if missing):

```bash
docker compose exec app php artisan key:generate
```

4. Run migrations on MySQL:

```bash
docker compose exec app php artisan migrate
```

5. Open the website:

- http://localhost:8000

## Useful commands

- Stop containers: `docker compose down`
- Watch logs: `docker compose logs -f`
- Run tests: `docker compose exec app php artisan test`

## Notes

- Home page is implemented in `resources/views/home.blade.php` based on your shared PDF structure.
- Route `/` points to this homepage via `routes/web.php`.
