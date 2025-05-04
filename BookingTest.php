<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Event;
use App\Models\Attendee;

class BookingTest extends TestCase
{
    use RefreshDatabase;

    public function test_attendee_can_book_event()
    {
        $event = Event::factory()->create(['capacity' => 10]);
        $attendee = Attendee::factory()->create();

        $response = $this->postJson('/api/bookings', [
            'event_id' => $event->id,
            'attendee_id' => $attendee->id,
        ]);

        $response->assertStatus(201);
        $response->assertJsonStructure(['id', 'event_id', 'attendee_id']);
    }

    public function test_prevent_overbooking()
    {
        $event = Event::factory()->create(['capacity' => 1]);
        $attendee1 = Attendee::factory()->create();
        $attendee2 = Attendee::factory()->create();

        $this->postJson('/api/bookings', ['event_id' => $event->id, 'attendee_id' => $attendee1->id]);
        $response = $this->postJson('/api/bookings', ['event_id' => $event->id, 'attendee_id' => $attendee2->id]);

        $response->assertStatus(400);
    }

    public function test_prevent_duplicate_booking()
    {
        $event = Event::factory()->create(['capacity' => 10]);
        $attendee = Attendee::factory()->create();

        $this->postJson('/api/bookings', ['event_id' => $event->id, 'attendee_id' => $attendee->id]);
        $response = $this->postJson('/api/bookings', ['event_id' => $event->id, 'attendee_id' => $attendee->id]);

        $response->assertStatus(409);
    }
}
