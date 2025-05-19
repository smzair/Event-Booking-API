
namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OverbookingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_prevents_booking_when_event_is_full()
    {
        $event = Event::factory()->create(['max_attendees' => 1]);

        // First booking
        $this->postJson('/api/bookings', [
            'event_id' => $event->id,
            'name' => 'Alice',
            'email' => 'alice@example.com'
        ]);

        // Second booking attempt
        $response = $this->postJson('/api/bookings', [
            'event_id' => $event->id,
            'name' => 'Bob',
            'email' => 'bob@example.com'
        ]);

        $response->assertStatus(400)
                 ->assertJsonFragment(['message' => 'Event is fully booked']);
    }
}
