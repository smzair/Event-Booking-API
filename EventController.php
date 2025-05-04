namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
    return response()->json(Event::all(), 200);
}

public function store(StoreEventRequest $request) {
    return response()->json(Event::create($request->validated()), 201);
}

public function update(StoreEventRequest $request, Event $event) {
    $event->update($request->validated());
    return response()->json($event, 200);
}

public function destroy(Event $event) {
    $event->delete();
    return response()->json(['message' => 'Event deleted'], 200);
}
}
