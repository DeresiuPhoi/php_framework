# PHP Mini Framework

Простой PHP-фреймворк с маршрутизацией на FastRoute и поддержкой контроллеров.

## 🚀 Возможности

- Маршрутизация через [FastRoute](https://github.com/nikic/FastRoute)
- Контроллеры с методами
- Простая структура
- Генерация HTTP-ответов
- Расширяемая архитектура

## 📂 Структура проекта

├── app/
│ └── Controllers/
├── framework/
│ ├── Http/
│ └── Routing/
├── public/
│ └── index.php
├── routes/
│ └── web.php
└── README.md


## ⚙️ Установка и запуск

1. Клонируй проект:

```bash
git clone https://github.com/username/php-framework.git
cd php-framework

2. Убедись, что установлен PHP (например, 8.2+):
php -v

3. Запусти локальный сервер:
php -S localhost:8000 -t public

4. Открой в браузере:
http://localhost:8000

✍️ Пример маршрута
// routes/web.php

use App\Controllers\HomeController;

return [
    ['GET', '/', [HomeController::class, 'index']],
];
