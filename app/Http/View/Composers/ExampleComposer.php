<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class ExampleComposer
{

    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $view->with('count', 'count');
    }

}