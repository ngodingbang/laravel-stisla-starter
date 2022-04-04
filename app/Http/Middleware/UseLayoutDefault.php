<?php

namespace App\Http\Middleware;

class UseLayoutDefault extends AbstractUseLayout
{
    /**
     * The specified value of layout.
     *
     * @var string
     */
    protected $layout = 'default';
}
