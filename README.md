# Event Booking API – Laravel

A full-featured, RESTful API built with Laravel that allows users to manage events, attendees, and bookings with real-time capacity validation, duplicate prevention, and a modular design. This project can also extend to a serverless notification architecture using AWS services.

⸻

Key Features
	•	Event Management: Create, update, delete, and list events with country-based location handling.
	•	Attendee Management: Register and manage attendees via secure endpoints.
	•	Booking System: Allow attendees to book events while preventing overbooking and duplicate registrations.
	•	Validation & Error Handling: Clean API responses with form request validations and exception handling.
	•	Application can be easily extended for Serverless Notification Architecture, by adding just few more line of code to the controllers starting by installing aws sdk
 			
    • composer require aws/aws-sdk-php

 and then utilizing the Service/Example_Notification.php file by calling before each event response by 
 // Send to AWS EventBridge 
 
    NotificationService::sendBookingNotification($booking);


🧱 How to Run This Application
Important: This is not a standalone Laravel project. It's meant to be integrated into a fresh Laravel 10 application.

Step 1: Create a new Laravel 10 project

	  • composer create-project laravel/laravel event-booking

	  • cd event-booking

Step 2: Clone this repository separately

  	• git clone https://github.com/smzair/Event-Booking-API.git event-booking-api


Step 3: Copy folders and files into your Laravel project
Replace or merge the following folders in your Laravel project:

	
	From event-booking-api/            ➜    To your Laravel project
	──────────────────────────         ──────────────────────────────
	app/Http/Controllers/Api           ➜    app/Http/Controllers/Api
	app/Models                         ➜    app/Models
	app/Services                       ➜    app/Services
	app/Http/Requests                  ➜    app/Http/Requests
	routes/api.php                     ➜    routes/api.php (Overwrite this file)
	database/migrations                ➜    database/migrations (Merge new migrations)
	tests/Feature                      ➜    tests/Feature (test cases)


Manually create any missing folders such as Services if your Laravel project doesn't already have them.

Step 4: Install dependencies
  • composer install

Step 5: Set up environment variables
 •  cp .env.example .env
 • php artisan key:generate

Update the .env file to set your database credentials.

Step 6: Run migrations
 • php artisan migrate

Step 7: Serve the application
 • php artisan serve

Your API will now be available at http://localhost:8000.


Final project directory structure should be 

	event-booking-api/
	├── app/
	│   ├── Http/
	│   │   ├── Controllers/
	│   │   │   └── Api/
	│   │   │       ├── EventController.php
	│   │   │       ├── AttendeeController.php
	│   │   │       └── BookingController.php
	│   │   └── Requests/
	│   │       ├── StoreEventRequest.php
	│   │       ├── StoreAttendeeRequest.php
	│   │       └── StoreBookingRequest.php
	│   └── Models/
	│   |   ├── Event.php
	│   |   ├── Attendee.php
	│   |   └── Booking.php
        |   |______Services/
	|          |__ Example_Notification.php (scope for serverless architecture)
	│
	├── database/
	│   └── migrations/
	│       ├── create_events_table.php
	│       ├── create_attendees_table.php
	│       └── create_bookings_table.php
	│
	├── routes/
	│   └── api.php
	│
	├── tests/
	│   ├── Feature/
	│   │   └── BookingTest.php
	│   └── Unit/
	│       └── EventRequestTest.php
	│
	├── postman/
	│   └── postman_collection.json
	│
	├── docker/
	│   ├── Dockerfile
	│   └── docker-compose.yml
	│
	├── VENDOR/aws
	├── .env
	└── composer.json
	⸻

Tech Stack
	•	Backend: Laravel 10 (PHP 8+)
	•	Database: MySQL / PostgreSQL
	•	API: RESTful (JSON)
	•	Testing: PHPUnit (Feature & Unit)
	•	Dev Tools: Docker, Postman
	•	Architecture: Event-driven, serverless diagram included

⸻

API Documentation
	•	Postman collection available in /postman/EventBookingAPI.postman_collection.json
	•	Endpoints include:
	•	GET /api/events
	•	POST /api/events
	•	POST /api/attendees
	•	POST /api/bookings

⸻
 
Testing

Run all tests
	
• php artisan test

Or to run a specific test:
• php artisan test --filter=EventBookingTest


• Unit Tests: Validates form request logic
• Feature Tests: Checks booking constraints (overbooking, duplicate booking)

⸻

Optional Enhancements
	•	Event filtering by date and location
	•	Pagination on event listing (?page=1&limit=10)
	•	Docker support:
	•	docker-compose up -d
	•	Fully containerized local setup

⸻

Architecture	

Full serverless notification design 

 ![image](https://github.com/user-attachments/assets/971e95e6-cf32-4e25-860f-17f7d483a587)

Implementation for this rest app

![image](https://github.com/user-attachments/assets/de3585fb-9ea6-4f26-9734-b5a4bca7506e)

# Note: While this application is implemented using Laravel (PHP) to align with the job role and technology requirements, a more lightweight and faster alternative could be achieved using Python with FastAPI. FastAPI offers asynchronous capabilities, automatic OpenAPI documentation, and a streamlined approach for building modern RESTful APIs efficiently.
