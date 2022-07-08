<?php

namespace Deepsoumya\Apipass\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
  use HasFactory;

  // Disable Laravel's mass assignment protection
  protected $guarded = [];
  protected $hidden = ['updated_at', 'created_at', 'id'];
  protected $table = 'apipass_access_tokens';
}