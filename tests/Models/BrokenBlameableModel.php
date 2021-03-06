<?php

namespace Culpa\Tests\Models;

use Culpa\Traits\Blameable;
use Illuminate\Database\Eloquent\Model;

/**
 * A model with a silly $blameable value
 * PHP 5.4+.
 */
class BrokenBlameableModel extends Model
{
    use Blameable;
    protected $table = 'posts';
    protected $softDelete = true;

    protected $blameable = 42;
}
