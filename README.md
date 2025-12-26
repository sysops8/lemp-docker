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
- web приложение (файл index.php):
http://localhost:8080/

- phpmyadmin:
http://localhost:8081/

- redis UI (нужно предварительно прописать connection к хосту redis и пароль):
http://localhost:5540


### Скриншоты

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/87d5cec0-af8a-49f9-a555-4e0543535f07" />

- index.php

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/2e58995a-7a7e-44b3-8ff3-3cf7991e6165" />

- phpmyadmin page 

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/2a0a7841-909e-4836-a235-35de9fb1d4b3" />

- redis insight
