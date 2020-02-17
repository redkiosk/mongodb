<?php namespace Redkiosk\Eloquent;

use Redkiosk\Mongodb\Eloquent\HybridRelations;

abstract class Model extends \Illuminate\Database\Eloquent\Model
{

    use HybridRelations;
}
