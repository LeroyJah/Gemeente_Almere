#  Validator Gemeente Almere

Een Laravel + Livewire applicatie voor het aanvragen en beheren van gebruikersaanvragen voor de Lief & Leed pot van de Gemeente Almere. Gebruikers kunnen een aanvraag indienen via een formulier. Admins kunnen aanvragen beheren via een beheerderspaneel (CRUD).

---
##  Pre-Installatie benodigden
PHP v8.2
Composer
MYSQL

##  Installatie-instructies

Volg de onderstaande stappen om het project lokaal op te zetten nadat het gecloned is:

### 1. Database initialiseren
Ga naar je terminal en log in tot je MYSQL database. Typ vervolgens:
`Create database gemeente;`


### 2. .env initialiseren
open de .env in de root van de applicatie
verander naar deze waarde:
`DB_DATABASE=gemeente`
`DB_USERNAME=root`
`DB_PASSWORD=`

### 3. Packages installeren
`composer install`

### 4. Test draaien
`php artisan test`

### 5. Dev server opzetten
`npm run dev`

### 6. Migrations draaien
`php artisan migrate --seed`

### 7. lokale server starten
`php artisan serve`

### 8. login
Login met de volgende gegevens -
email: `admin@outlook.com`
password: `admin`



