<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renseignement extends Model
{
    use HasFactory;

    protected $fillable = [
        'side_image',
    ];
}
