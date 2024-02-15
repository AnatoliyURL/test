
Краткая информация
-------------------

Данное тестовое задание было выполнено на базовом шаблоне проекта yii2 для вакансии PHP разработчик Middle (yii2) ждя ГК "Красивый город"

Установка
------------

Тут всё стандартно как и на обычном проекте:
- Скачиваем
- Устанавливаем зависимости с помощью composer
- Прописываем подключение к БД 
```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```
- Выполняем миграции

Особенности
------------

Тестовые данные будут заложены в миграци, так что результат можно будет увидеть сразу

Тестовое задание
------------

Тестовое задание находится в корне проекта, файл

~~~
backend-test.docx
~~~