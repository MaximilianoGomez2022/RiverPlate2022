<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * App\Models\Producto
 *
 * @property int $producto_id
 * @property string $nombre
 * @property string $descripcion
 * @property int $precio
 * @property string $talle
 * @property string $imagen
 * @property string $imagen_descripcion
 * @property int $categoria_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereImagenDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereProductoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereTalle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCategoriaId($value)
 * @property-read \App\Models\Categoria $categoria
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Talle[] $talles
 * @property-read int|null $talles_count
 */
class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'producto_id';
    protected $fillable = ['nombre','categoria_id','descripcion','precio','imagen','imagen_descripcion'];

    protected function precio(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100,
        );
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'categoria_id');
    }

    public function talles() {
        return $this->belongsToMany(Talle::class, 'productos_tienen_talles', 'producto_id', 'talle_id', 'producto_id', 'talle_id');
    }
}
