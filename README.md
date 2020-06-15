# Get Movie Details
This is a simple Api to consume the [Movie Database API](https://www.themoviedb.org/documentation/api) to create a single endpoint to get primary information about a movie.

## Requirements
You should have [composer](https://getcomposer.org/download/) installed, which is a 
package manager for PHP because the api is made with [Symfony 5](https://symfony.com/doc/current/index.html) & [Api Platform](https://api-platform.com/) to make this work.

## Install
- Clone this repository and go to the project directory
- Type in your terminal to set up the project:   
```composer install```
- Launch the native php server:   
 ```php -S localhost:8000 -t public```

## How to test
Now the local server is on, you open yo`ur browser and go to this url:    
```http://localhost:8000/api```

You see the exposed route documentation which allows also to test directly on this page. 

Otherwise, the exposed route to get details of a movie is ```http://localhost:8000/api/movies/{id}```

For this moment, only search by ID is available.

## Documentations

- [Symfony 5 Framework Official Site](https://symfony.com/doc/current/index.html)   
- [API Platform Official Doc](https://api-platform.com/docs/)  
- [The MovieDatabase API Movie Entry Doc](https://developers.themoviedb.org/3/movies/get-movie-details)  
- [API REST avec Symfony et api-platform](https://www.kaherecode.com/tutorial/developper-une-api-rest-avec-symfony-et-api-platform) (in French)   

## Further Improvements

- Make API Platform-friendly route, for now I use more on basic symfony route.
- Work with authentication with API Key (v3 auth) and API Read Access Token (v4 auth). At this version, I've built simple and basic connector service with API Key included in the url.
- Add docker environment. Though, I've already configured docker environment for (funny enough) similar api project 
on another personal Github repository [chacun son cinéma](https://github.com/hwaseonchoi/chacun-son-cinema))
- Handle various responses given from the Movie Database Api & exceptions like Http Response Status Code `401`, `404` & `500` at minimum. 
- Simple unit & function test using WebTestCase on Service directory classes
- Add PHP-CS validation file
