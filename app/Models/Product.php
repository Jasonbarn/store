<?php

namespace App\Models;

use App\Models\Panier;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'category_id','name','description', 'price', 'images'];

    //pour les images multiples
    protected $casts = [
        'images' => 'array',
    ];
    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function panier(): BelongsTo
    {
        return $this->belongsTo(Panier::class);
    }

}
