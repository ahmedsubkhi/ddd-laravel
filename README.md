# Domain Driven example with Laravel

## How to install
```
$ git clone https://github.com/ahmedsubkhi/ddd-laravel.git
$ cd ddd-laravel
$ composer install
$ cp .env.example .env
```
Edit `.env` file, edit PostgreSQL database connection `PRODUCTION` and save it.
```
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
$ php artisan serve
```
Go to [http://localhost:8000](http://localhost:8000)

## How to use the services

#### News collection

* Show all news
```
curl -X GET \
  http://localhost:8000/api/news \
  -H 'accept: application/json' \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json'
```

* Show single news
```
curl -X GET \
  http://localhost:8000/api/news/1 \
  -H 'accept: application/json' \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json'
```
Note: Where `1` is the news ID

* Show news filtered by status ('publish', 'draft', or 'deleted')
```
curl -X GET \
  http://localhost:8000/api/news/filter/publish \
  -H 'accept: application/json' \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json'
```
Note: Where `publish` is the filter

* Show several news-topics of selected news
```
curl -X GET \
  http://localhost:8000/api/news/topic/1 \
  -H 'accept: application/json' \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json'
```
Note: Where `1` is the news ID

* Insert news
```
curl -X POST \
  http://localhost:8000/api/news \
  -H 'cache-control: no-cache' \
  -F 'title=News Title' \
  -F 'body=Body of news' \
  -F 'status=publish'
```

* Update news
```
curl -X POST \
  http://localhost:8000/api/news/1 \
  -H 'cache-control: no-cache' \
  -F 'title=News Title' \
  -F 'body=Body of news' \
  -F 'status=publish'
```
Note: Where `1` is the news ID

* Delete news
```
curl -X DELETE \
  http://localhost:8000/api/news/1 \
  -H 'cache-control: no-cache'
```
Note: Where `1` is the news ID




#### Topics collection

* Show all topic
```
curl -X GET \
  http://localhost:8000/api/topic \
  -H 'accept: application/json' \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json'
```

* Show single topic
```
curl -X GET \
  http://localhost:8000/api/topic/1 \
  -H 'accept: application/json' \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json'
```
Note: Where `1` is the topic ID

* Show news where the topic is 'X'
```
curl -X GET \
  http://localhost:8000/api/topic/news/1 \
  -H 'accept: application/json' \
  -H 'cache-control: no-cache' \
  -H 'content-type: application/json'
```
Note: Where `1` is the topic ID ('X')

* Insert topic
```
curl -X POST \
  http://localhost:8000/api/topic \
  -H 'cache-control: no-cache' \
  -F 'topicname=medical'
```

* Update topic
```
curl -X POST \
  http://localhost:8000/api/topic/1 \
  -H 'cache-control: no-cache' \
  -F 'topicname=medic'
```
Note: Where `1` is the topic ID

* Delete topic
```
curl -X DELETE \
  http://localhost:8000/api/topic/1 \
  -H 'cache-control: no-cache'
```
Note: Where `1` is the topic ID



### Topic-news collection
* Add
```
curl -X POST \
  http://localhost:8000/api/newstopic \
  -H 'cache-control: no-cache' \
  -F topic_id=2 \
  -F news_id=1
```

* Delete
```
curl -X DELETE \
  http://localhost:8000/api/newstopic/2 \
  -H 'cache-control: no-cache'
```
Note: Where `1` is the news-topic ID


## How to Unit Test

#### Create database for `TESTING`

#### Copy .env setting for testing environment laravel config
```
$ cp .env.example .env.testing
```

#### Edit `.env.testing` until look like this

```
APP_ENV=testing

DB_DATABASE=news_testing
DB_USERNAME=your_postgresql_db_username
DB_PASSWORD=your_postgresql_db_password
```

#### Then migrate database
```
$ php artisan migrate --env=testing
$ php artisan db:seed --env=testing
```
#### Then test it
```
$ ./vendor/bin/phpunit
```


