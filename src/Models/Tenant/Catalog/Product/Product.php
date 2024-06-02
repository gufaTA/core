<?php

namespace Gufata\Catalog\Models\Tenant\Catalog\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Gufata\Catalog\Attribute\Tenant\Catalog\Product\ProductAttributes;

class Product extends Model
{

    use HasFactory;
    use ProductAttributes;

    protected $connection = 'tenant';
    protected $table = 'ctlg_product';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'code',
        'type_id',
        'variant_stock_id',
        'category_id',
        'brand_id',
        'model',
        'sku',
        'image_cover',
        'image_hover',
        'video_cover',
        'live_broadcast_url',
        'buy_price',
        'buy_currency_code',
        'buy_tax_class_id',
        'sell_price',
        'sell_currency_code',
        'sell_tax_class_id',
        'sell_point',
        'discount_value',
        'discount_type',
        'point_reward',
        'sort_order',
        'status_usage',
        'status_publishing',
        'date_modified',
        'date_created',
    ];
    protected $appends = [];
    protected $hidden = [];
    protected $filtering = [
        'product_id',
        'code',
        'type_id',
        'variant_stock_id',
        'category_id',
        'brand_id',
        'model',
        'sku',
        'image_cover',
        'image_hover',
        'video_cover',
        'live_broadcast_url',
        'buy_price',
        'buy_currency_code',
        'buy_tax_class_id',
        'sell_price',
        'sell_currency_code',
        'sell_tax_class_id',
        'sell_point',
        'discount_value',
        'discount_type',
        'point_reward',
        'sort_order',
        'status_usage',
        'status_publishing',
        'date_modified',
        'date_created',

        'translation.name',
        'brand.translation.name',
        'category.translation.name',
    ];
    protected $sorting = [
        'product_id',
        'code',
        'type_id',
        'variant_stock_id',
        'category_id',
        'brand_id',
        'model',
        'sku',
        'image_cover',
        'image_hover',
        'video_cover',
        'live_broadcast_url',
        'buy_price',
        'buy_currency_code',
        'buy_tax_class_id',
        'sell_price',
        'sell_currency_code',
        'sell_tax_class_id',
        'sell_point',
        'discount_value',
        'discount_type',
        'point_reward',
        'sort_order',
        'status_usage',
        'status_publishing',
        'date_modified',
        'date_created',
    ];
    protected $including = [
        'translation',
        'translations',
    ];
    protected $include_default = [
        'translation'
    ];
    protected $sorting_default = '-product_id';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($product){
            $product->code = config('setting.catalog_product_prefix') . date_format(date_create(date('Ymdhis')), 'U');
        });
    }

    const CREATED_AT = 'date_created';
    const UPDATED_AT = 'date_modified';

    public function getSorting()
    {
        return $this->sorting;
    }

    public function getSortingDefault()
    {
        return $this->sorting_default;
    }

    public function getFiltering()
    {
        return $this->filtering;
    }

    public function getIncluding()
    {
        return $this->including;
    }

    public function getIncludeDefault()
    {
        return $this->include_default;
    }

}
