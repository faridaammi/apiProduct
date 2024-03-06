<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produit
 * 
 * @property int $id
 * @property string $nom
 * @property string $description
 * @property string $lien_image
 * @property float $prix
 * @property float $tva
 * 
 * @property Collection|Commande[] $commandes
 *
 * @package App\Models
 */
class Product extends Model
{
	use HasFactory;

	protected $casts = [
		'prix' => 'float',
		'tva' => 'float'
	];

	protected $fillable = [
		'name',
		'description',
		'image',
		'price',
		'tva'
	];


	public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
