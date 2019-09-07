<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function sub_category()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function parent_category()
    {
        return $this->hasOne(self::class, 'id', 'parent_id');
    }

    /**
     * Get childern list
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(static::class, 'parent_id')->orderBy('id', 'asc');
    }

    /**
     * Get multilevel children list
     */
    public function childrenList()
    {
        return $this->children()->with('childrenList');
    }
}
