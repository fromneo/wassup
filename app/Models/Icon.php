<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    /**
     * Get the catgeory.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * Get the filter.
     */
    public function filter()
    {
        return $this->belongsTo('App\Models\Filter');
    }

    /**
     * Get the plan.
     */
    public function plan()
    {
        return $this->belongsTo('OhMyBrew\ShopifyApp\Models\Plan');
    }
}
