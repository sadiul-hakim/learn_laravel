<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // The table name should be plural and Model name should be singular.
    // If so, Model would be automatically mapped to table.
    // If you have a different table name and model name. Define like this:
    protected $table = "courses";

    // When we try to update a row of Model it looks for updated_at column.
    // If we do not have this column, we can disable this behavior.
    public $timestamps = false;
}
