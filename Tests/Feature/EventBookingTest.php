
namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventBookingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_allows_an_attendee_to_book_an_event()
    {
        $event = Event::factory()->create(['max_attendees' => 2]);

        $response = $this->postJson('/api/bookings', [
            'event_id' => $event->id,
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment(['message' => 'Booking successful']);

        $this->assertDatabaseHas('attendees', ['email' => 'john@example.com']);
    }
}
