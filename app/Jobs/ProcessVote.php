<?php

namespace App\Jobs;

use App\Models\Student;
use App\Models\Vote;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ProcessVote implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $candidate_id;
    protected $count;
    protected $status;

    public function __construct($candidate_id, $count, $status)
    {
        $this->candidate_id = $candidate_id;
        $this->count = $count;
        $this->status = $status;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->status == 'approved') {
            $student = Student::find($this->candidate_id);
            $vote = Vote::where('student_id', $student->id)->first();

            if ($vote) {
                $vote->count = $vote->count + $this->count;
                $vote->prix = $vote->prix + ($this->count * 50);
                $vote->save();
            } else {
                $vote = Vote::create([
                    'student_id' => $student->id,
                    'count' => $this->count,
                    'prix' => $this->count * 50,
                ]);
            }
        }
    }
}
