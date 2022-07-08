// 'src/Models/Post.php'
<?php

namespace Deepsoumya\ApiPass\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
  use HasFactory;

  // Disable Laravel's mass assignment protection
//   protected $guarded = [];
  protected $table = 'apipass_access_tokens';
}