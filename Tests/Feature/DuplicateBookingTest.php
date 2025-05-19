
namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DuplicateBookingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_prevents_duplicate_booking_by_same_email()
    {
        $event = Event::factory()->create(['max_attendees' => 5]);

        $data = [
            'event_id' => $event->id,
            'name' => 'Emma',
            'email' => 'emma@example.com'
        ];

        $this->postJson('/api/bookings', $data);

        $response = $this->postJson('/api/bookings', $data);

        $response->assertStatus(409)
                 ->assertJsonFragment(['message' => 'You have already booked this event']);
    }
}
