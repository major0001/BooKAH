# Online Library Management System (BookaH)

## About BooKAH
Streamlining Library Operations with Enhanced User Experience

## Project Overview
The Online Library Management System (BookaH) aims to automate library operations, including book management, user authentication, and administrative tasks. This system is designed to benefit librarians, students, and library administrators by providing efficient book tracking, user management, and report generation functionalities.

## Team Members
- **Alex Wambua (me)**: Project Manager, Backend Developer, Frontend Developer, UI/UX Designer, Database Administrator

## Technologies Used
- **Backend**: PHP 7.x
- **Database**: MySQL 5.x
- **Frontend**: HTML, CSS, JavaScript
- **Asynchronous Data Exchange**: AJAX
- **DOM Manipulation**: jQuery

## Progress

### Rating
Almost halfway done.

### Measurement
Progress is measured based on the completion of foundational tasks:
- Database setup and schema design
- Development of user registration and login forms
- Initiation of frontend development for core user functionalities

### Explanation of Progress
**Completed as Planned:**
- **Database Implementation:** Successfully set up and populated tables such as `tblauthors`, `tblbooks`, `tblstudents`, `tblcategory`, `admin`, and `tblissuedbookdetails`.
- **Core Application Files:** Developed key files including `adminlogin.php`, `change-password.php`, `check_availability.php`, `dashboard.php`, `index.php`, `issued-books.php`, `listed-books.php`, `logout.php`, `my-profile.php`, `signup.php`, and `user-forgot-password.php`.
- **Functional User Interfaces:** Created user interfaces for admin login, book listing, book issuance, user profile management, and user authentication.
- **Authentication and Authorization:** Implemented robust user registration, login, and password management functionalities, ensuring secure access to the system.

**Incomplete Aspects:**
- **Advanced Features:** Some advanced features such as detailed reporting, email notifications, and integration with external APIs for book information retrieval are still under development.
- **Testing and Optimization:** Full testing and optimization for performance and security are ongoing processes.

## Project Updates

### Changes Made
1. **Enhanced Security Features:** Integrated HTTPS and implemented additional input validation.
   - **Reason:** To ensure user data privacy and protect against potential security threats.
2. **UI/UX Improvements:** Made iterative updates to the user interface based on usability testing and feedback.
   - **Reason:** To enhance user experience and ensure the system is intuitive and easy to navigate.
3. **Code Optimization:** Refactored code for better performance and maintainability.
   - **Reason:** To ensure the system runs efficiently and is easier to manage and scale in the future.

## Future Work
- Complete advanced features such as detailed reporting, email notifications, and external API integration.
- Conduct comprehensive testing and optimization for performance and security.
- Gather user feedback and make necessary improvements.

## Getting Started
### Prerequisites
- PHP 7.4
- MySQL 5.7
- Web server (e.g., Apache/nginx)
- Browser with JavaScript enabled

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/major0001/BooKAH.git

   # change to the apllication files directory
   cd BooKAH
   ```

#### set up the database
   - import the `library.sql` script 

#### configure the web server to serve the application
