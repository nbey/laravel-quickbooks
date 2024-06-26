<?php

namespace Jarvus\LaravelQuickBooks;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * Class QuickBooksEntity
 *
 * @package Jarvus\LaravelQuickBooks
 * @property string $quickbooks_id
 */
abstract class QuickBooksEntity extends Model implements QuickBookable
{
    use SyncsToQuickBooks;

    /**
     * Database column name
     *
     * @var string
     */
    protected $quickBooksIdColumn = 'quickbooks_id';

    /**
     * The resource class from Jarvus\LaravelQuickBooks\Resources.
     *
     * @var string
     */
    protected $quickBooksResource;
}