<!--suppress ALL -->
<p align="center"><a href="https://github.com/YasmineMarzouk/my-todos-api" target="_blank"><img alt="app-title" src="public/images/todolist_pink.png" width="400"></a></p>

## About Laravel 
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable 
and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used 
in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

### Learning Laravel
Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all 
modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials
on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our
comprehensive video library.

### License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## About This Project
This Tiny project is made in the aim of resuming all the best practices and technics I've learned to create a nice
and clean code and architecture. This project can also be a good reference for beginners who want to learn web
development using the Laravel framework for backend and ReactJS for frontend.

### Description
After Sign-up/Sign-in, the user can access his Production-Space, in which he can create to-do lists under different
categories (eg: professional, personal, shopping, education, lifestyle, sport, ...). 

Also, he can see his old and future lists, he can share
his achievements with his friends on social-medias, create some alerts, and of course manage his todo-lists and tasks.

Every todo-list have a specific delay depending on its type :
- daily todo-list (default): period of 24 hours, starting from now to 23h59 the next day.
- weekly todo-list : period of 7 days staring from value of start_from column (default next monday).
- monthly todo-list: period of 1 month starting from value of start_from column (default 1st of next month).
- yearly todo-list : period of 1 year starting from value of start_from column (default 1st january next year).
if the user did not accomplish all the tasks of that day, these tasks will automatically added to the list of the next day.

We have two types of tasks, 
- repetitive tasks: they will be added automatically to the next todo-lists. 
- one-time task, which is added manually to the todolist and will not be included to the next todo-lists.

### Conception
- Database Tables


### Installation
Clone the project.
Open it in your preferred IDE, I suggest PHPStorm.
Update you .env file, you can refer to the .env.example
Run the following commands :
```sh
composer install
yarn install
```
