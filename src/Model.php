<?php

namespace Zareismail\Ceremony;

use Illuminate\Database\Eloquent\{Model as LaravelModel, SoftDeletes};
use Laravel\Scout\Searchable;

class Model extends LaravelModel
{ 
    use SoftDeletes, Searchable;
}
