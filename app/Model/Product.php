<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model implements \Czim\Paperclip\Contracts\AttachableInterface
{
    use \Czim\Paperclip\Model\PaperclipTrait;

    protected $table = 'product';

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public function shopping_cart()
    {
        return $this->hasMany('App\Model\Shopping_cart');
    }

    public function __construct(array $attributes = [])
    {
        $this->hasAttachedFile('image', [
            'variants' => [
                'medium' => [
                    'auto-orient' => [],
                    'resize'      => ['dimensions' => '300x300'],
                ],
                'thumb' => '100x100',
            ],
            'attributes' => [
                'variants' => true,
            ],
        ]);

        parent::__construct($attributes);
    }
}

