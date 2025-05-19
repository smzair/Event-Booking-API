
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventCreationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_an_event_successfully()
    {
        $response = $this->postJson('/api/events', [
            'name' => 'Tech Summit',
            'location' => 'Delhi, India',
            'date' => '2025-12-01',
            'max_attendees' => 100,
        ]);

        $response->assertStatus(201)
                 ->assertJsonStructure(['message', 'event' => ['id', 'name', 'location', 'date']]);

        $this->assertDatabaseHas('events', ['name' => 'Tech Summit']);
    }
}
