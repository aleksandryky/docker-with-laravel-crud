<?php

namespace Tests\Feature;

use App\Models\Lead;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_visitor_can_submit_a_lead_form(): void
    {
        $response = $this->post(route('leads.store'), [
            'first_name' => 'Sol',
            'last_name' => 'Doe',
            'email' => 'sol@example.com',
            'phone_number' => '+1-123-456-7890',
            'business_name' => 'Obscura Labs',
            'business_status' => 'Growing',
            'message' => 'I want to start my certification process.',
        ]);

        $response->assertRedirect('/');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('leads', [
            'email' => 'sol@example.com',
            'business_name' => 'Obscura Labs',
        ]);
    }

    public function test_lead_form_requires_required_fields(): void
    {
        $response = $this->post(route('leads.store'), []);

        $response->assertSessionHasErrors([
            'first_name',
            'last_name',
            'email',
            'phone_number',
            'business_name',
            'business_status',
            'message',
        ]);

        $this->assertEquals(0, Lead::count());
    }
}
