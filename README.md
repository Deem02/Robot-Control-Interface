# Robot Control Interface

This is a web-based interface for controlling a robot. Users can click on the buttons in the control panel to send commands to the robot. 

## Features

- Web-based control panel with buttons for moving the robot (forward, backward, left, right, and stop)
- AJAX requests to a PHP script to send the button click data to the server
- Storage of the button click data in a MySQL database table (`robot_directions`)
- Responsive design with CSS

## Installation

1. Clone the repository:

```
git clone https://github.com/your-username/robot-control-interface.git
```

2. Set up the MySQL database:
   - Create a new database named `robot_control`
   - Create a new table named `robot_directions` with a single column `direction` (e.g., VARCHAR(20))
   - Update the database connection details in the `connectPHPMyAdmin.php` file:
     - `$servername`
     - `$username`
     - `$password`
     - `$database`

3. Start a local web server (e.g., Apache or Nginx) and point it to the project directory.

4. Open the `index.html` file in a web browser to access the robot control interface.


## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL (xampp)

## Output
as you see here if you cliclk to any button it will store it in database
  ![image](https://github.com/Deem02/Robot-Control-Interface/assets/158334032/05ef8087-992a-4e0a-9274-02487ffec2d9)

## Direction tabel 
  ![image](https://github.com/Deem02/Robot-Control-Interface/assets/158334032/77669a7f-16cd-4cfa-bf90-f36c7522edd3)


