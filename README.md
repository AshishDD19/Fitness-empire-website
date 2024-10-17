# Fitness Empire Gym Website

![Fitness Empire Logo](/images/1.png)

Fitness Empire is a responsive gym website designed to promote fitness and provide information about the gym's services, trainers, and pricing. It also includes user authentication using Google login via the Google API and a registration form that sends confirmation emails to users after registration.

## Table of Contents

- [Sections](#sections)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Sections

The website is organized into several sections for a better user experience:

1. **Header Section** <br>

   ![Header Image](/images/8.png)
   - Displays the gym logo and navigation links.
   - Supports responsive navigation for mobile devices.

2. **Home Section** <br>

   ![Home Image](/images/2.png)
   - The main landing page with a background image and a call-to-action button.
   - Promotes fitness and encourages users to get started.

3. **About Section** <br>

   ![About Image](/images/3.png)
   - Provides information about the gym, its mission, and values.
   - Emphasizes the importance of fitness and a healthy lifestyle.

4. **Features Section** <br>

   ![Features Image](/images/4.png)
   - Highlights gym features such as bodybuilding, workouts for men and women.
   - Describes the benefits of exercise and fitness.

5. **Pricing Section** <br>

   ![Pricing Image](/images/5.png)
   - Displays the pricing plans for gym memberships.
   - Includes details about what each plan offers.

6. **Trainers Section** <br>

   ![Trainers Image](/images/6.png)
   - Showcases expert trainers with images and social media links.

7. **Footer Section** <br>

   ![Footer Image](/images/7.png)
   - Includes quick links, opening hours, contact information, and social media links.
   - Allows users to subscribe to newsletters (optional feature).

8. **Google Login and Registration** <br>

    ![G-Login Image](/images/9.png) 
    - Users can log in using their Google accounts.
    - A registration form is available for new users.
    - Confirmation emails are sent to users after registration.


## Features

- Responsive design for mobile and desktop.
- Google login authentication for user accounts.
- User registration with email confirmation.
- Informative sections promoting fitness and gym services.
- Testimonials and expert trainer showcase.
- Pricing plans for different membership levels.
- Contact information and social media links.

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript
- **CSS Framework**: [Swiper](https://swiperjs.com/)
- **Backend**: PHP, MySQL (for user data storage)
- **Authentication**: Google API for OAuth2
- **Email Confirmation**: PHPMailer
- **Version Control**: Git and GitHub
- **Deployment**: Hosted on a web server (e.g., Apache)
- **Development Environment**: Local development server (e.g., XAMPP)

## Usage

1. Clone the repository to your local machine.

2. Set up a web server (e.g., XAMPP) and a MySQL database.

3. Create a `db_connection.php` file for database connection details.

4. Import the database schema from the provided SQL file.

5. Configure the Google API credentials for OAuth2 login. Create a `gdb_connection.php` file for database connection details for google login.

6. Customize the website content and styles as needed.

7. Start the web server and access the website.

## Contributing

Contributions are welcome! If you have suggestions, bug reports, or feature requests, please open an issue on GitHub.

## License

This project is licensed under the [MIT License](LICENSE).
