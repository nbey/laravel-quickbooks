<?php

namespace Jarvus\LaravelQuickBooks\Resources;

use Jarvus\LaravelQuickBooks\QuickBooksResource;
use QuickBooksOnline\API\Facades as QuickBooksFacades;

class Employee extends QuickBooksResource
{
    /**
     * The name of this resource.
     *
     * @var string
     */
    protected $name = 'Employee';

    /**
     * QuickBooks Online API Facade
     *
     * @var string
     */
    protected $facade = QuickBooksFacades\Employee::class;
}