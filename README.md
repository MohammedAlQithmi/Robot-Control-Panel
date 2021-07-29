# Robot Control Panel

Robot Control Panel contains two web pages for controlling the robot base and arm.


## Installation

1- if you do not use the default username and password in Myphpadmin 
edit the username and the password from DataBase.php.

2- import the robot_control_panel.sql to myphpadmin.


## Usage 

The index.php contains 6 sliders - one for each Servo motor -, on/off switch and Save button 
when the user presses the save button the page will update the database 
with the new values of motors and the value of the switch - 1 for On, 0 for off -.

The motors_values.php page will get the switch value and motors values from the database 
if the switch value is 1, the values of motors will display on the page as follows:

motor1_value
motor2_value
motor3_value
motor4_value
motor5_value
motor6_value

if the switch value is 0, the page will display "Motors are off".

----------------------------------------------------------------

The robotBase.php page contains 5 buttons to control the movement of the robot 
each time the user presses one of the buttons the page will update the database with the value of the button.


base_movement.php page will get the movement value from the database and displays it on the page.


