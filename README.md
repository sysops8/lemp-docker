# LEMP stack в docker compose с redis+insight и phpmyamin
Локальный стек для разработки

### Как использовать
Создайте файл .env там где лежит docke-compose.yaml и пропишите в нем строчки:
```env
MYSQL_HOST=mysql
MYSQL_ROOT_PASSWORD=supersecret
MYSQL_DATABASE=test_db
MYSQL_USER=user
MYSQL_PASSWORD=password

PMA_PORT=8081

REDIS_PASSWORD=redis_pass
REDIS_INSIGHT_PORT=5540

APP_PORT=8080

```
Далее проверьте файл docker-compose.yaml на ошибки:
```bash
docker compose config
```

Если все хорошо, запустите docker compose:
```bash
docker compose up -d 
```

### Доступы:
phpmyadmin:
http://localhost:8081/

redis UI:
http://localhost:5540
