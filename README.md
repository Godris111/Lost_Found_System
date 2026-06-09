# Lost and Found System

## Project Title
Lost and Found System for University Students

## Project Description
The Lost and Found System is a web-based application developed using PHP and MySQL. It helps students and staff report lost or found items within the university environment. Users can register, log in, report items, search for items, claim items, and view item details. Administrators can approve item claims and monitor system activities through a dashboard.

## Objectives

1. To provide a platform for reporting lost items.
2. To provide a platform for reporting found items.
3. To help users search for lost and found items.
4. To improve the recovery of lost property within the university.
5. To maintain records of reported items.

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- XAMPP
- phpMyAdmin
- Visual Studio Code

## System Features

### User Features
- User registration
- User login and logout
- Report lost items
- Report found items
- Upload item images
- View reported items
- Search items
- Claim items

### Administrator Features
- Approve item claims
- View dashboard statistics
- Monitor reported items

## Database Name

```
lost_found_db
```

## Main Tables

### users

| Field | Type |
|---------|---------|
| id | INT |
| username | VARCHAR |
| password | VARCHAR |

### items

| Field | Type |
|---------|---------|
| id | INT |
| item_name | VARCHAR |
| description | TEXT |
| status | VARCHAR |
| location | VARCHAR |
| report_date | DATE |
| contact | VARCHAR |
| image | VARCHAR |
| status_action | VARCHAR |
| claimed_by | VARCHAR |
| status_approval | VARCHAR |

## Project Structure

```
lost_found_system/
│
├── db.php
├── login.php
├── register.php
├── index.php
├── report.php
├── view.php
├── claim.php
├── approve.php
├── dashboard.php
├── logout.php
├── style.css
│
└── uploads/
```

## Installation Steps

1. Install XAMPP.
2. Start Apache and MySQL.
3. Open phpMyAdmin.
4. Create a database named:

   lost_found_db

5. Create the required tables.
6. Copy the project folder into:

   C:\xampp\htdocs\

7. Open the browser and visit:

   http://localhost/lost_found_system

## System Workflow

1. User registers an account.
2. User logs into the system.
3. User reports a lost or found item.
4. Other users can search and view items.
5. A user claims an item.
6. Administrator approves the claim.
7. Item is returned to the rightful owner.

## Future Improvements

- Email notifications
- Password encryption
- User roles (Admin and Student)
- Mobile responsive design
- Advanced search filters
- QR code integration
- SMS notifications

## Author

Name: Godris

Institution: Mzumbe University

Program: Computer Programming

## Conclusion

The Lost and Found System provides an efficient way of managing lost and found property within the university. It improves communication between item owners and finders, reduces loss of property, and enhances accountability.# Lost_Found_System
