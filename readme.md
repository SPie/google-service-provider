# Google Service Provider

A Laravel and Lumen service provider for the Google Client API.

## Usage
### Laravel
Add ```SPie\GoogleServiceProvider\LaravelGoogleServiceProvider::class``` to the service provider array in the app config.

### Lumen
Register the ```LumenGoogleServiceProvider``` in the `bootstrap/app.php` file.

``` php
$app->register(SPie\GoogleServiceProvider\LumenGoogleServiceProvider);
```
## Config

You can copy the `google.php` config file and change what ever config value you need.

### Client Config
For the Google_Client config you can change the values in the `client` array or use the environment variables in the `.env.example` file.

### Services Config
Add the needed service class names to the `services` array.