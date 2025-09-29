## Resik - Jogja - Website
## Requirements
- Node JS Version 22.12 or above
## How To Use

1. **Clone this repository**
   ```bash
   git clone https://github.com/vincensiusadyatma/Learnify-Elearning-Website.git](https://github.com/vincensiusadyatma/Resik-Jogja.git
   cd Resik-Jogja
2. **Install PHP Dependencies**
   ```bash
   composer install

3. **Install Javascript Dependencies**
   ```bash
   npm install

3. **Copy .env.example file to .env file**
   ```bash
   cp .env.example .env

4. **Generate App Key**
   ```bash
   php artisan key:generate

4. **Configure environment**
   - Open the .env file
   - Update the following database-related lines to match your PostgreSQL configuration
       ```bash
        DB_CONNECTION=mysql;
        DB_HOST=127.0.0.1
        DB_PORT=<your database port>
        DB_DATABASE=resik_jogja_DB
        DB_USERNAME=root
        DB_PASSWORD=<your password>

4. **Create a symbolic link**
   ```bash
   php artisan storage:link

4. **Run the migrations to database**
   ```bash
   php artisan migrate --seed
   
5. **Run frontend**
   ```bash
   npm run dev

6. **Run backend**
   ```bash
   php artisan serve
