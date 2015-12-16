<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualJob extends Model
{
    use SoftDeletes;

    protected $table = 'virtual-jobs';
}
