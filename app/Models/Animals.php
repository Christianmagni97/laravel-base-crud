<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Animal extends Model
{
    use HasFactory;
    public $timestamps=false;
    public $timestamps = false;
    protected $fillable =
    [
        'id',
        'nome',
        'specie',
        'habitat',
        'longevità',
        'rischio_estinzione',
        'alimentazione',
        'regione'
    ];
}