<?php

namespace App\Providers;

use Carbon\Carbon ;
use App\Models\Tablero;
use Illuminate\Support\Facades\Blade ;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Creamos una nueva directiva de Blade para formatear la fecha
         * y obtener su valor en formato Europeo.
         * 
         * @param   $dta contiene una CADENA con el nombre de la variable a utilizar
         */
        Blade::directive('df', function($dta)
        {
            return "<?php 
                            echo \Carbon\Carbon::parse({$dta}->fecha)->format('d/m/Y') 
                    ?>" ;
        }) ;
    }
}
