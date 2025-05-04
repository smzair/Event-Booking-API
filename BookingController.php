namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(StoreBookingRequest $request) {
        $event = Event::findOrFail($request->event_id);

        if ($event->bookings()->count() >= $event->capacity) {
            return response()->json(['message' => 'Event is fully booked'], 400);
        }

        $booking = Booking::firstOrCreate([
            'event_id' => $request->event_id,
            'attendee_id' => $request->attendee_id
        ]);

        return $booking;
    }
}

