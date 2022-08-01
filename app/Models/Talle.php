<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Talle
 *
 * @property int $talle_id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Talle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Talle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Talle query()
 * @method static \Illuminate\Database\Eloquent\Builder|Talle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talle whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talle whereTalleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talle whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Talle extends Model
{
    // use HasFactory;
    protected $table = 'talles';
    protected $primaryKey = 'talle_id';
}
