<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to install the project MedicalCenter on your device.
1) Please copy the projects repository link from github. https://github.com/DawidKarcz/medicalcenter.git
2) Go into Atom,Open the Github Panel and click on Clone an existing Github repository.
3) Paste the link into Clone from and select a directory consisting the WAF folder copy the path and clone the project into there.
4) Open the Homestead folder in Atom, and go into the homestead.yaml to configure the settings.
5) Put that code under sites: 
   -  - map: medical.center
      to: /home/vagrant/WAF/MyLaravelProjects/MedicalCenter/public
   Put this under database: 
   -  - medical_center
   Save this homestead.yaml file.
6) Then open up Notepad as Administrator, Pick File -> Open -> hosts -> add this line of code 127.0.0.1	medical.center under # localhost name resolution is handled within DNS itself. Save and exit.
7) Then open up GitBash, type -> cd WAF/Homestead -> vagrant up
8) Go to phpAdmin and create new databse called medical_center
9) In atom make an .env file and change into 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=medical_center
    DB_USERNAME=homestead
    DB_PASSWORD=secret

    Then in GitBash, type vagrant reload --provision inside of Homestead.
10) Open up new Gitbash window,and type in cd WAF/MyLaravelProjects/MedicalCenter then run this command -> composer install
11) Go back to the Gitbash window with Homestead and type in -> vagrant ssh -> cd WAF/MyLaravelProjects/MedicalCenter, run this command -> php artisan migrate:fresh --seed
12) You can then login as Admin with email: admin@iadt.com password: secret, or as doctor email: doctor@iadt.com password: secret, or finally as patient email: marry@iadt.com password: secret
13) Thanks and Enjoy viewing my site.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
