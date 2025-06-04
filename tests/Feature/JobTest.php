<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Job;
use App\Models\Employer;

class JobTest extends TestCase {

public function test_belongs_to_an_employer() {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
}

public function can_have_tags() {
    $job = Job::factory()->create();
    $job->tags()->attach([1, 2, 3]); // Assuming tags with IDs 1, 2, and 3 exist

    expect($job->tags->count())->toBe(3);
    expect($job->tags->pluck('id'))->toContain(1, 2, 3);

}

}
