Event Booking API – Laravel

A full-featured, RESTful API built with Laravel that allows users to manage events, attendees, and bookings with real-time capacity validation, duplicate prevention, and a modular design. The project also integrates a serverless notification architecture using AWS services.

⸻

Key Features
	•	Event Management: Create, update, delete, and list events with country-based location handling.
	•	Attendee Management: Register and manage attendees via secure endpoints.
	•	Booking System: Allow attendees to book events while preventing overbooking and duplicate registrations.
	•	Validation & Error Handling: Clean API responses with form request validations and exception handling.
 
	•	Serverless Notification Architecture (AWS-based diagram included):
 General
 ![image](https://github.com/user-attachments/assets/971e95e6-cf32-4e25-860f-17f7d483a587)

Implementation in this rest app
![image](https://github.com/user-attachments/assets/de3585fb-9ea6-4f26-9734-b5a4bca7506e)

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
