# cup-cont-module
Laravel cupparis app - modulo contabilità base

Procedura di installazione

```    
php artisan vendor:publish --provider="Modules\CupCont\Providers\CupContServiceProvider"
composer dump-autoload
php artisan install-cupparis-package CupCont
php artisan module:migrate CupCont
php artisan module:seed CupCont
```


Procedura di disinstallazione

```    
php artisan uninstall-cupparis-package CupCont
php artisan module:migrate-rollback CupCont
```    
