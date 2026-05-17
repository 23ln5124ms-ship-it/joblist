<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Arr;


class Job extends Model
{
    use HasFactory;

    protected $table ='job_listing';

    protected $fillable = [
        'title',
        'salary',
        'description',
    ];
}

    // public static function all(): array
    // {
    // return 
    // }

//     public static function find($id): ?array
//     {
//         foreach (self::all() as $job) {
//             if ($job['id'] == $id) {
//                 return $job;
//             }
//         }

//         return null;
//     }

// }