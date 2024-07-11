<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Database\Factories\TagFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_the_job_belongs_to_an_employer(): void
    {
        // AAA
        // Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create(['employer_id' => $employer->id]);
        // Act and Assert
        $this->assertTrue($job->employer->is($employer));
    }

    public function test_that_the_job_has_tags()
    {
        $job = Job::factory()->create();
        $job->tag('Front End');
        $this->assertCount(1, $job->tags);
    }
}
