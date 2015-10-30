<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
     *  Atribuição em massa: MassAssigment
     *  $product = new Product(['name' => 'Books', 'description' => 'A simple book for read', 'price' => 10]);
     * */
    protected $fillable = ['name', 'description', 'price', 'featured', 'recommend'];

}
