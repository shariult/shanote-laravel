<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model {
  use HasFactory;
  protected $fillable = ['title', 'description', 'description_long', 'color', 'image_path', 'file_path', 'is_completed', 'is_private', 'is_pinned', 'share_key'];

  // relate to user table
  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }
}