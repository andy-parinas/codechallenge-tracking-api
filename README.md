# Truckit Code Challenge

## Instructions to run on local
 - clone the repository
 - run `composer install`
 - copy the .env.example to .env
 - run `php artisan key:generate`
 - run `php artisan serve`


## Explanation

### Laravel Framework
Laravel Framework was chosen for the API backend because of its simplicity and ease of use. 
The framework's  philosophy is to focus on developers productivity by
reducing the common and repetitive task. Laravel's documentation is also excellent, In my opinion
it is one of the best technical documentation for a programming framework. 
Laravel being an opinionated framework provides a clear structure resulting application being maintainable. 

### Design Decisions

- Use of service to handle business logic. This follows the S in SOLID principle, where a class or function has a single responsibility.
  This will result in a clearer controller code and testability. 
- Use of Enums for the tracking status. This provides a standard way of assigning value reducing the runtime errors.


