namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'location', 'capacity', 'start_time', 'end_time'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
