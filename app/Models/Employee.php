<?php

namespace App\Models;

use App\Base\Interfaces\HasUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model implements HasUser
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'char';

    protected $guarded = [];

    /**
     * user
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
