<?php

namespace App\Http\Middleware;

class UseLayoutTopNavigation extends AbstractUseLayout
{
    /**
     * The specified value of layout.
     *
     * @var string
     */
    protected $layout = 'top-navigation';
}
