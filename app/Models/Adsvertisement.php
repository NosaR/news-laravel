<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adsvertisement extends Model
{
    use HasFactory;

    protected $table = 'advertisements';

    protected $primaryKey = 'id';

    protected $fillable = [
        'image', 'link'
    ];
}
