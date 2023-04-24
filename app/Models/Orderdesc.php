<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdesc extends Model
{
    use HasFactory;
    protected $table = 'orderdesc';
    protected $primaryKey = 'ord_id';
}
