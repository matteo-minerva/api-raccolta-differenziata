[![Issues][issues-shield]][issues-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<p align="center">
  <img src="/logo.png" alt="Logo">

  <h3 align="center">Garbage Collection API</h3>

  <p align="center">
    Project created for PHP Super Guide
    <br />
    <br />
    <a href="https://github.com/matteo-minerva/api-raccolta-differenziata/issues">Report Bug</a>
  </p>
</p>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li><a href="#getting-started">Getting Started</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

![Website Screenshot][product-screenshot]

create a PHP app that helps you and your family members keep track of the days of the week when recycling takes place.

Instead of pinning the days on a piece of paper or calendar, your app will make your life easier by encapsulating everything in one place.

Requirements:

-   You can decide to equip your app with a graphical interface, or just make APIs, this is completely up to you.

-   Multiple time periods with different retreats can be specified for each day.
    E.g. Tuesday 10:00-12:00 Wet - Tuesday 19:00-21:00 Plastic

-   The application will then need to provide an endpoint or section to be able to display a weekly summary of pickup days, and a section or endpoint to display the time periods of the current day, of pickup.

### Built With

-   [Laravel](https://laravel.com/)

<!-- GETTING STARTED -->

## Getting Started

1. Clone the repo

```sh
git clone https://github.com/matteo-minerva/api-raccolta-differenziata
```

2. Setup a DB (eg. using XAMPP or w/e).

3. Import the project table from the migration file `api_raccolta_rifiuti.sql`.

4. Make sure you have [Composer](https://getcomposer.org/) installed

5. Install all the missing dependecies running

```sh
npm install
```

6. Run

```sh
composer install
```

7. And then

```sh
php artisan serve
```

8. You should now be promped with a URL looking like this, you can run the project by visiting it

```url
localhost:8000
```

<!-- USAGE -->

## Usage

You can use `API_test.http` to perform CRUD operations on the DB.
Postman should work as well.

By visiting `http://127.0.0.1:8000/api/giorno/oggi/` you can find out what waste will be collected today.

By visiting `http://127.0.0.1:8000/api/raccolta/organico` you can find out when a particular type of waste will be collected.
`organico` is the type of waste and of course can be replaced with any other kind.

<!-- CONTACT -->

## Contact

Matteo Minerva - m.minerva@outlook.it

start2impact personal page: https://talent.start2impact.it/profile/matteo-minerva

<!-- ACKNOWLEDGEMENTS -->

## Acknowledgements

-   [axios](https://github.com/axios/axios)
-   [Laravel Mix](https://github.com/JeffreyWay/laravel-mix)
-   [lodash](https://github.com/lodash/lodash)
-   [PostCSS](https://github.com/postcss/postcss)

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[issues-shield]: https://img.shields.io/github/issues/matteo-minerva/api-raccolta-differenziata/repo.svg?style=for-the-badge
[issues-url]: https://github.com/matteo-minerva/api-raccolta-differenziata/issues
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/m-minerva
[product-screenshot]: /screenshot.png
