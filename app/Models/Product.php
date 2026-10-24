<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'category',
        'price',
        'old_price',
        'rating',
        'reviews',
        'image',
        'hover_image',
        'badge',
        'is_flash',
        'discount',
        'claimed_percent',
        'claimed_text',
        'description',
        'in_stock',
        'gallery_images',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'float',
            'old_price' => 'float',
            'rating' => 'float',
            'is_flash' => 'boolean',
            'in_stock' => 'boolean',
            'gallery_images' => 'array',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /** @return array<int, array<string, mixed>> */
    public static function catalogForJs(): array
    {
        return static::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->map(fn (Product $product) => $product->toHomeCatalogArray())
            ->values()
            ->all();
    }

    /** @return array<int, array<string, mixed>> */
    public static function collectionForJs(): array
    {
        return static::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->map(fn (Product $product) => $product->toCollectionCatalogArray())
            ->values()
            ->all();
    }

    /** @return array<string, mixed> */
    public function toHomeCatalogArray(): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'category' => $this->category,
            'price' => $this->price,
            'oldPrice' => $this->old_price,
            'rating' => $this->rating,
            'reviews' => $this->reviews,
            'image' => $this->image,
            'hoverImage' => $this->hover_image,
            'badge' => $this->badge,
            'flash' => $this->is_flash,
            'discount' => $this->discount,
            'claimedPercent' => $this->claimed_percent,
            'claimedText' => $this->claimed_text,
            'desc' => $this->description,
        ];
    }

    /** @return array<string, mixed> */
    public function toCollectionCatalogArray(): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name,
            'category' => $this->category,
            'price' => $this->price,
            'oldPrice' => $this->old_price,
            'rating' => $this->rating,
            'reviews' => $this->reviews,
            'image' => $this->image,
            'hoverImage' => $this->hover_image,
            'badge' => $this->badge,
            'inStock' => $this->in_stock,
            'desc' => $this->description,
        ];
    }

    /** @return array<string, mixed> */
    public function toDetailCatalogArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'price' => $this->price,
            'oldPrice' => $this->old_price,
            'image' => $this->image,
            'badge' => $this->badge,
            'desc' => $this->description,
        ];
    }

    /** @return array<int, array<string, mixed>> */
    public function relatedForJs(int $limit = 4): array
    {
        return static::query()
            ->where('category', $this->category)
            ->whereKeyNot($this->id)
            ->orderBy('sort_order')
            ->limit($limit)
            ->get()
            ->map(fn (Product $product) => [
                'id' => $product->id,
                'name' => $product->name,
                'category' => $product->category,
                'price' => $product->price,
                'oldPrice' => $product->old_price,
                'image' => $product->image,
                'hoverImage' => $product->hover_image,
                'badge' => $product->badge,
            ])
            ->values()
            ->all();
    }
}
