# *RobotBaseContolPanel*
## The second task in the IoT and software development department is building robot base interface to control the movement of the base which consists of six subtasts as follow:
- [X] Building the interface to control the robot base.
- [x] Adding a new table in the existed database for the robot base.
- [x] Linking the interface with the database.
- [x] Creating PHP pages to display recently added values to the database to link it with the base hardware.
- [x] Merging the arm and base interfaces.
- [x] Making sure the interface can be displayed in mobile web view.
## All of the previous Tasks are accomplished and here is a list of the included files with detailed description of the work. 
|File|Description|
|----|-----------|
|`Connect.php`|Used in different files to Establish a connection with the robot_arm_control_panel database|
|`insert.php`|Insert user input values into the database depending on the used interface|
|`display.php`|Obtain recently added values into the database for both interfaces|
|`RobotBaseControlPanel-Task2.sql`|contains the database tables for the merged interfaces of the previous and current task|
|`index.html`|the main file that contains the merged interfaces structure without styling|
|`style1.css`|this file styles both the index and display files|
##   
## Notes:
- All files should be placed in the same directory including the images.
- If the 'index.html' file extenstion changed to '.php', then 'insert.php' file near the bottom line redirect header should be modified.
- The file 'hidePHP.htaccess' is used to enable writing PHP code within HTML file to retain the last submitted angle and status values which did not work.
- The file 'Jquery.js' is another attempt to insert the values into the database without refreshing using 'Jquery.ajax' also to keep range values after submition but it faild.
- The new added table into the datbase name is direction with two columns for direction and timestamp that is important for retreiving recent values.
- I made sure that the interface is compatible and responsive for mobile web view through Microsoft Browser inspect property. 
