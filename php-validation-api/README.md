# PHP Validation API

## Overview
This project is a simple PHP API that receives data from the frontend, validates it, and returns a standardized response. It is designed to demonstrate backend validation techniques and API response handling.

## Project Structure
```
php-validation-api
├── public
│   └── index.php          # Entry point for the API
├── src
│   ├── api
│   │   └── FormHandler.php # Handles form data processing
│   ├── validation
│   │   └── Validator.php   # Contains validation methods
│   ├── response
│   │   └── ApiResponse.php  # Generates API responses
│   └── config
│       └── config.php      # Configuration settings
├── .htaccess               # URL rewriting and server configuration
├── composer.json           # Composer dependencies
└── README.md               # Project documentation
```

## Setup Instructions
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install the necessary dependencies.
4. Configure your server to point to the `public` directory.
5. Update the `src/config/config.php` file with your configuration settings.

## Usage
- Send a POST request to `http://yourdomain.com/api` with the required data.
- The API will validate the data and return a JSON response indicating success or error.

## Example Request
```json
{
    "email": "example@example.com",
    "name": "John Doe"
}
```

## Example Response
```json
{
    "status": "success",
    "message": "Data validated successfully."
}
```

## Contributing
Feel free to fork the repository and submit pull requests for any improvements or bug fixes.