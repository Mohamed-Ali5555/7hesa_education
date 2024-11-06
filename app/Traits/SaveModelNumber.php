<?php

namespace App\Traits;

use App\Models\Order;
use Illuminate\Support\Facades\DB;

trait SaveModelNumber
{
    abstract public function getPrefixForSignUp(): string;
    abstract public function getKeyNameForSignUp(): string;

    // protected static function booted()
    // {
    //     static::creating(function ($model) {
    //         $prefix = $model->getPrefixForSignUp();
    //         $column = $model->getKeyNameForSignUp();

    //         $latestNumber = DB::table($model->getTable())
    //             ->select(DB::raw("MAX(CAST(SUBSTR({$column}, 2) AS UNSIGNED)) AS max_number"))
    //             ->value('max_number');

    //         if (! empty($latestNumber)) {
    //             $nextNumber = (string) preg_replace('/[a-zA-Z]/', '', $latestNumber) + 1;
    //             $paddedNumber = str_pad($nextNumber, 5, 1000, STR_PAD_LEFT);
    //         } else {
    //             $paddedNumber = str_pad(1, 5, 1000, STR_PAD_LEFT);
    //         }

    //         $model->{$column} = ($prefix.'-' . $paddedNumber);
    //     });
    // }
//     protected static function booted()
// {
//     static::creating(function ($model) {
//         $prefix = $model->getPrefixForSignUp();
//         $column = $model->getKeyNameForSignUp();

//         $latestNumber = DB::table($model->getTable())
//             ->select(DB::raw("MAX(CAST(SUBSTR({$column}, LENGTH('{$prefix}-') + 1) AS UNSIGNED)) AS max_number"))
//             ->value('max_number');

//         if (!empty($latestNumber)) {
//             $nextNumber = $latestNumber + 1;
//             $paddedNumber = str_pad($nextNumber, 5, '0', STR_PAD_LEFT);
//         } else {
//             $paddedNumber = str_pad(1, 5, '0', STR_PAD_LEFT);
//         }

//         $model->{$column} = $prefix . '-' . $paddedNumber;
//     });
// }

}
