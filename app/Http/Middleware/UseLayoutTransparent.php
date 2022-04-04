<?php

namespace App\Http\Middleware;

class UseLayoutTransparent extends AbstractUseLayout
{
    /**
     * The specified value of layout.
     *
     * @var string
     */
    protected $layout = 'transparent';
}
