<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isEmpty;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'count',
        'prix',
        'student_id',
    ];

    protected $casts = [
        'prix' => 'integer',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public static function getCountVote($candidate_id) {

        $vote = Vote::where('student_id', $candidate_id)->first();
        return ($vote != null ) ? $vote->count : 0 ;
    }
}
