Event Booking API – Laravel

A full-featured, RESTful API built with Laravel that allows users to manage events, attendees, and bookings with real-time capacity validation, duplicate prevention, and a modular design. The project also integrates a serverless notification architecture using AWS services.

⸻

Key Features
	•	Event Management: Create, update, delete, and list events with country-based location handling.
	•	Attendee Management: Register and manage attendees via secure endpoints.
	•	Booking System: Allow attendees to book events while preventing overbooking and duplicate registrations.
	•	Validation & Error Handling: Clean API responses with form request validations and exception handling.
	•	Serverless Notification Architecture (AWS-based diagram included):
	•	Real-time notifications via WebSockets
	•	Email alerts via Amazon SES
	•	Push notifications via SNS
	•	Event enrichment via Lambda functions

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

