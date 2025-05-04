namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(StoreBookingRequest $request) {
    $event = Event::find($request->event_id);

    if ($event->bookings()->count() >= $event->capacity) {
        return response()->json(['error' => 'Event is fully booked'], 400);
    }

    $exists = Booking::where('event_id', $request->event_id)
        ->where('attendee_id', $request->attendee_id)->exists();

    if ($exists) {
        return response()->json(['error' => 'Attendee already booked'], 409);
    }

    $booking = Booking::create($request->validated());

    return response()->json($booking, 201);
}
}

