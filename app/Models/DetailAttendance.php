<?php

namespace App\Models;

use App\Base\Interfaces\HasAttendance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailAttendance extends Model implements HasAttendance
{
    use HasFactory;

    protected $table = 'detail_attendances';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $keyType = 'char';

    protected $fillable = ['attendance_id', 'status', 'created_at', 'updated_at'];
    protected $guarded = [];

    /**
     * attendance
     *
     * @return BelongsTo
     */
    public function attendance(): BelongsTo
    {
        return $this->belongsTo(Attendance::class);
    }
}
