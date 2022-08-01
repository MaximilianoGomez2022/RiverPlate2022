<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Noticia
 *
 * @property int $noticia_id
 * @property string $titulo
 * @property string $sinopsis
 * @property string $texto
 * @property string|null $imagen
 * @property string $imagen_descripcion
 * @property \Illuminate\Support\Carbon $fecha_publicacion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia query()
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereFechaPublicacion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereImagenDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereNoticiaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereSinopsis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereTexto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noticia whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Noticia extends Model
{
    protected $table = 'noticias';
    protected $primaryKey = 'noticia_id';
    protected $fillable = ['titulo','fecha_publicacion','sinopsis','texto','imagen','imagen_descripcion'];
    protected $casts = ['fecha_publicacion' => 'date'];
}
