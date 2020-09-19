<?php

namespace Zareismail\Ceremony;

use Illuminate\Database\Eloquent\{Model as LaravelModel, SoftDeletes};
use Laravel\Scout\Searchable;

class Model extends LaravelModel
{ 
    use SoftDeletes, Searchable; 

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
    	return Helpers\Helper::table(parent::getTable());
    }
}
