<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameterdetail extends Model
{
    use HasFactory;

    public function scopeFilter(Builder $query, array $filters): void
    {
        // $query->when($filters['search'] ?? false, 
        //     fn ($query, $search)=>
        //     $query->where('nickname', 'like', '%' . $search . '%')
        // );

        // $query->when($filters['category'] ?? false, 
        //     fn ($query, $category)=>
        //     $query->whereHas('category', fn($query)=>$query->where('slug', $category))
        // );

        // $query->when($filters['para_id'] ?? false, 
        //     fn ($query, $name)=>
        //     $query->whereHas('para_id', fn($query)=>$query->where('para_id', 3))
        // );
    }

}
