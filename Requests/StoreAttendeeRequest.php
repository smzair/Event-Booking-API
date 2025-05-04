
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendeeRequest extends FormRequest
{
    public function rules() {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:attendees,email',
            'phone' => 'nullable|string'
        ];
    }
}

