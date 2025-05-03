Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('event_id')->constrained()->onDelete('cascade');
    $table->foreignId('attendee_id')->constrained()->onDelete('cascade');
    $table->timestamps();

    $table->unique(['event_id', 'attendee_id']); // prevent duplicate bookings
});
