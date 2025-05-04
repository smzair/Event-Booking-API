
namespace App\Services;

use Aws\Sns\SnsClient;

class NotificationService
{
    public static function sendBookingNotification($booking)
    {
        $sns = new SnsClient([
            'region' => env('AWS_DEFAULT_REGION'),
            'version' => 'latest',
            'credentials' => [
                'key'    => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);

        $message = json_encode([
            'type' => 'BookingCreated',
            'booking_id' => $booking->id,
            'event_id' => $booking->event_id,
            'attendee_id' => $booking->attendee_id,
        ]);

        $sns->publish([
            'TopicArn' => env('AWS_SNS_TOPIC_ARN'),
            'Message' => $message,
        ]);
    }
}
