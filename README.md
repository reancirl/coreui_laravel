## Installation

``` bash
# clone the repo
$ git clone https://github.com/reancirl/coreui_laravel.git my-project

# go into app's directory
$ cd my-project

#remove git
$ rm -rf .git

# install app's dependencies
$ composer install

# install app's dependencies
$ npm install

```

### Next step

``` bash
# in your app directory

# generate .env
$ cp .env.example .env

# set db in .env

# generate laravel APP_KEY
$ php artisan key:generate

# run database migration and seed
$ php artisan migrate:refresh --seed

# generate mixing
$ npm run dev

# and repeat generate mixing
$ npm run dev
```

## Usage

``` bash
# start local server
$ php artisan serve

# test
$ php vendor/bin/phpunit
```
