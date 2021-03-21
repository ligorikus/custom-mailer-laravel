# custom-mailer-laravel

Installation - Laravel >= 6
composer require ligorikus/custom-mailer-laravel
Publish the config file by running `php artisan vendor:publish --provider="Ligorikus\CustomMailerLaravel\ServiceProvider"`. 
The config file will give you control over which storage engine to use as well as some storage-specific settings.

array config:
```
[
  'use_mailgun'
  /* If use_mailgun is true next params required */
  'mailgun_api_key'
  'mailgun_server'
  'mailgun_domain' //optional
  /* End of block mailgun */
  'use_smtp'
  /* If use_smtp is true param smtp_host required */
  'smtp_host',
  'smtp_username' //optional
  'smtp_password' //optional
  'smtp_encryption' //optional
  'smtp_port' //optional
]
```
