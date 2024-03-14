## PDS Info System

Personal Data Sheet Information System provides an automated data registration of personal information.

## Installation

> Create your database name from your local webserver.

> Open a terminal, and navigate to your project directory. 

> Execute below commands:

```bash
npm install
composer install
cp .env.example .env
php artisan key:generate
```

> Change database configuration: Open `.env` file and configure below to work with your local mysql setup.
```bash
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

> Execute below command. This will migrate all tables and seeds user account.
```bash
php artisan migrate:fresh --seed
```

## Usage

> Default administrator login account: 
- Url: http://my_project.test/login
- Username: `test@test.com`
- Password: `12345678`

## Author

> [KENNETH SANTIAÑEZ](https://github.com/kennethsantianez)