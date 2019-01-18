<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'frontend.components.form.text', ['name', 'value'=> null, 'attributes']);
        Form::component('bsTextArea', 'frontend.components.form.textarea', ['name', 'value'=> null, 'attributes']);
        Form::component('bsSubmit', 'frontend.components.form.submit', ['name', 'value'=> null, 'attributes']);
        Form::component('bsHidden', 'frontend.components.form.hidden', ['name', 'value'=> null, 'attributes']);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
