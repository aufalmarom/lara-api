## Installation

1. Install composer as package manager of Laravel
2. Make sure that composer was installed with command in terminal
```bash
composer --version
```
3. Install web service apache2 and mysql(you can use XAMPP to simplify)
4. Start apache2 and mysql
5. Loop step, and make sure everything were worked-well


## Configuration

1. Rename .env.example with .env
2. Install vendor packages with command in terminal
```bash
composer install
```
3. Generate app key with command in terminal
```bash
php artisan:key generate
```
4. Make a DB in phpmyadmin
5. Set up environment with configure at .env 
```bash
DB_DATABASE=[your_db_name]
DB_USERNAME=[your_localphpmyadmin_username]
DB_PASSWORD=[your_localphpmyadmin_password]
```
6. Migrate DB with command in terminal
```bash
php artisan migrate --seed
```
7. Running service with command in terminal, and Rest API service were started
```bash 
php artisan serve
```
8. You can start build "Nakama Project App"


## Contact Me

If you found any problems, feel free ask to me via [aufalmarom23@gmail.com](mailto:aufalmarom23@gmail.com). 


## Disclaimer

For nakama that see this repo, just consume for personal. Don't share, and reuse. Or you can ask to allow, just send message to me.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
