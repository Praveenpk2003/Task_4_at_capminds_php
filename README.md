Task Id :004
Task Name : Login System Using Sessions, Cookies & User-Based Themes

Goal
Build a complete Login System using Bootstrap (UI), PHP Sessions (secure data), Cookies (user convenience), and User-Based Themes (personalized UI).

Requirements
✔ Use Bootstrap 5 for UI styling
✔ Use validation functions:
Username validation
Email validation
Password validation
✔ Authentication using Sessions
Store: user_id, username, email, theme
Redirect only if session exists
Protect dashboard
✔ Use Cookies for:
“Remember Me” → store username
Theme persistence → store user theme
Cookie expiry: 7 days (use 60 sec for testing)
Auto-fill username on login page
Auto-apply theme if cookie exists
✔ Implement User-Based Theme Logic:
User1 → Dark (Black)
User2 → Warm
User3 → Light (Default)
✔ Use proper folder structure
project/
│
├── login.php
├── auth.php
├── dashboard.php
├── logout.php
└── includes/
    └── validation.php

Task Description
Step 1: Create Login Page (login.php)
Purpose
Collect login credentials
Display validation errors
Auto-fill username from cookie
Load user theme automatically


Inputs
Email
Username
Password
Remember Me (checkbox)


Logic & Steps
Start session to access error messages
Check if remember_username cookie exists → pre-fill username
Check if user_theme cookie exists → apply theme
Build responsive UI using Bootstrap 5
Display validation messages from validation functions
Submit form using POST to auth.php
Step 2: Implement Backend Authentication (auth.php)
Purpose
Validate input data
Authenticate user
Assign theme based on user
Store session and cookie data
Steps & Logic
1. Receive Form Data (POST)
Email
Username
Password
Remember Me
2. Validate Inputs
Use trainee’s custom functions from validation.php:
Username validation
Email validation
Password validation


If validation fails → redirect back to login page with error.

Authentication Rules (Dummy Data)
username = admin
email = admin@example.com
password = Admin@123


3. Theme Assignment Logic
Assign theme based on logged-in user:
user1 → dark
user2 → warm
user3 / others → light

4. If Authentication Is Valid
Create Session Variables
$_SESSION['username']
$_SESSION['email']
$_SESSION['theme']

Cookie Logic
✔ If “Remember Me” is checked:
Store username in cookie
Store theme in cookie


✔ If not checked:
Clear username cookie
Theme cookie may remain for UI preference


setcookie("remember_username", $username, time() + 60);
setcookie("user_theme", $theme, time() + 60);

Redirect
Redirect user to dashboard.php

5. If Authentication Is Invalid
Store error message
Redirect back to login.php



Step 3: Dashboard Page (dashboard.php)
Purpose
Display user information
Apply user-specific theme
Protect dashboard access


Logic & Steps
Start session
Check if session exists
If not → redirect to login.php
Read theme from session
Apply theme class to UI
Page Should Display
“Welcome, {username}”
Session details
Logout button



Step 4: Implement Logout (logout.php)
Purpose
End authenticated session
Logic
Start session
Clear all session variables
Destroy session
Redirect back to login page
Cookie Rule
Do NOT delete cookies unless required


Theme and username cookies may remain for convenience



🎨 Theme Logic Summary
Storage
Purpose
Session
Apply theme during login
Cookie
Remember theme for next visit
Default
Light theme fallback


Learning Outcome (Theme Extension)
After completing this task, the trainee will understand:
User-based UI personalization
Combining Sessions & Cookies
Theme persistence logic
Secure dashboard protection
<img width="2258" height="1241" alt="Screenshot 2026-01-22 145225" src="https://github.com/user-attachments/assets/ce447d95-c559-4d99-8734-d40e15bf1c1e" />

<img width="2547" height="843" alt="Screenshot 2026-01-22 143720" src="https://github.com/user-attachments/assets/bc56c86e-aa91-4d6d-8cc3-4f14fd783bd6" />

<img width="2545" height="1515" alt="Screenshot 2026-01-22 143655" src="https://github.com/user-attachments/assets/88a37bbb-2c8c-4157-96c6-f035cde65fc1" />

