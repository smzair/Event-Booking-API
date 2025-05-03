namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        return Event::paginate(10);
    }

    public function store(StoreEventRequest $request) {
        return Event::create($request->validated());
    }

    public function show(Event $event) {
        return $event;
    }

    public function update(UpdateEventRequest $request, Event $event) {
        $event->update($request->validated());
        return $event;
    }

    public function destroy(Event $event) {
        $event->delete();
        return response()->noContent();
    }
}
