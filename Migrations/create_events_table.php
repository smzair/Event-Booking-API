Schema::create('events', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('description');
    $table->string('location');
    $table->integer('capacity');
    $table->timestamp('start_time');
    $table->timestamp('end_time');
    $table->timestamps();
});
