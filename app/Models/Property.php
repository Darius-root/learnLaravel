<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Storage;
use Str;

/**
 * @mixin IdeHelperProperty
 */
class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'city',
        'address',
        'postal_code',
        'sold',
        'image'
        
    ];


    public function options():BelongsToMany{
        return $this-> belongsToMany(Option::class);

    }

    public function getSlug():string
    {
        /**
     * Renvoie le slug du titre de la propriété.
     *
     * Cette fonction utilise la classe Str de Laravel pour convertir le titre en slug.
     * Le titre est passé en paramètre de la fonction, et la fonction Str::slug() est utilisée pour le convertir.
     * La fonction Str::slug() supprime les espaces et remplace les caractères spéciaux par des tirets.
     *
     * @return string Le slug du titre de la propriété.
     */
        return Str::slug($this->title);
    }


    /**
     * Scope to get available properties.
     *
     * This scope returns all properties that are not marked as sold.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAvailable(Builder $query): Builder{

        // Apply a where clause to filter properties that are not marked as sold.
        return $query->where('sold',false);
    }



    public function imageUrl():string{
        return Storage::disk('public')->url($this->image);
    }
    
}
