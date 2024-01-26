<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class attendace_detail extends Model
{
    use HasFactory;
    protected $table = 'attendances';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'char';

    protected $guarded = [];

    /**
     * attendance
     *
     * @return BelongsTo
     */
    public function attendance(): BelongsTo
    {
        return $this->belongsTo(attendance::class);
    }
}
