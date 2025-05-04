# Event Booking API – Laravel

A full-featured, RESTful API built with Laravel that allows users to manage events, attendees, and bookings with real-time capacity validation, duplicate prevention, and a modular design. This project can also extend to a serverless notification architecture using AWS services.

⸻

Key Features
	•	Event Management: Create, update, delete, and list events with country-based location handling.
	•	Attendee Management: Register and manage attendees via secure endpoints.
	•	Booking System: Allow attendees to book events while preventing overbooking and duplicate registrations.
	•	Validation & Error Handling: Clean API responses with form request validations and exception handling.
	•	Application can be easily extended for Serverless Notification Architecture, by adding just few more line of code to the controllers

 
Project directory structure

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
	│       ├── Event.php
	│       ├── Attendee.php
	│       └── Booking.php
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
	├── VENDOR/awsSDK
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
	•	Full serverless notification design included (serverless-architecture-diagram.png)
 General
 ![image](https://github.com/user-attachments/assets/971e95e6-cf32-4e25-860f-17f7d483a587)

Implementation in this rest app
![image](https://github.com/user-attachments/assets/de3585fb-9ea6-4f26-9734-b5a4bca7506e)

# Note: While this application is implemented using Laravel (PHP) to align with the job role and technology requirements, a more lightweight and faster alternative could be achieved using Python with FastAPI. FastAPI offers asynchronous capabilities, automatic OpenAPI documentation, and a streamlined approach for building modern RESTful APIs efficiently.
