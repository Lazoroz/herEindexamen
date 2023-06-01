<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class inschrijving extends Model
{
    use HasFactory;

    protected $table = 'inschrijvings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'naam',
        'telefoon',
        'adres',
        'woonplaats',
        'geboortedatum',
        'geslacht',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}

