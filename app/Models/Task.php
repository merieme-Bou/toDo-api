<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Enums\Status;
use App\Enums\Priority;




class Task extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

   protected $fillable=[
    'title',
    'status',
    'priority',
    'content',
    'category_id',
    'user_id',
    'complete_at',
   ];

   protected $casts = [
    'status' => Status::class,
    'priority' => Priority::class,
    'complete_at' => 'datetime',
];
   
    public function category():BelongsTo
    {
       return $this->belongsTo(
        related : Status::class,
        foreignKey : 'category_id',

       ); 
     }
     public function user(): BelongsTo
     {
         return $this->belongsTo(
             related: User::class,
             foreignKey: 'user_id',
         );
     }
}
