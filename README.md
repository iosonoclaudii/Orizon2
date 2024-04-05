# Orizon API

## Description
Orizon API is a back-end application that manages data related to countries and trips.

## Technologies Used
- Laravel: a PHP framework for building web applications.
- MySQL: a relational database management system.

## Prerequisites
- PHP >= 7.4
- Composer ([Download Composer](https://getcomposer.org/))
- MySQL

## Installation
1. Clone this repository into your desired directory on your server.
2. Run `composer install` to install PHP dependencies.
3. Copy the `.env.example` file to a new file named `.env`.
4. Configure the `.env` file with your MySQL database information.
5. Run `php artisan key:generate` to generate the application key.
6. Run `php artisan migrate` to run migrations and create tables in the database.
7. Now you're ready to use the application!

## API Usage
The following are the available routes for using the APIs:

### Countries
- `GET /api/countries`: Display all countries.
- `POST /api/countries`: Create a new country.
- `GET /api/countries/{id}`: Display information about a specific country.
- `PUT /api/countries/{id}`: Update information about an existing country.
- `DELETE /api/countries/{id}`: Delete an existing country.

### Trips
- `GET /api/trips`: Display all trips.
- `POST /api/trips`: Create a new trip.
- `GET /api/trips/{id}`: Display information about a specific trip.
- `PUT /api/trips/{id}`: Update information about an existing trip.
- `DELETE /api/trips/{id}`: Delete an existing trip.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss the proposed changes.

## Authors
- Claudio Maldera

## Contact
For any questions or feedback, contact me at the email address: maldera.claudio@gmail.com

## License
This project is licensed under the MIT License. For more information, see the [LICENSE](LICENSE) file.
