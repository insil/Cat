## Idea
Image system such as Flickr but only for cat images. Users may upload images of their cats and there is a voting system based off the quality and content (cuteness) of the cats. Users will also be required to sign up to upload images and to vote but users without an account can browse through the pictures.
 
We believe people love cat photos, as well it will be interesting to implement a voting system that will allow for the cuter pictures to be more apparent than the ones with lesser quality. This idea will cover all if not most of the topics we have learned during our course lectures and assignments while allowing us to look into different ways of implementing them through new features such as a voting and commenting system.

## Features
+User account creation
+User authentication
+User account page: edit information, overview of images, and comments
+login, logout, edit information, sign up
Feasibility: It will be crucial to include user account creation and user accounts in general as without the feature the system would not be complete and would lack many of the other features (i.e. commenting, voting.) User authentication and account creation will be created much like how we learned during lectures and assignments. A database would be created to hold the user information and user authentication will be done through php and possibly regex statements.
 
## User interface 
Account page, image viewing page, top image page
User information will be displayed from the database onto the current page for the user
Feasibility: User interface will encompass some CSS, HTML, and PHP statements for updating the page’s information based off the user input much like how we learned to do so in form fill in assignments that required a redirect/success page listing the information the user inputted. The use of sessions may be useful in this area and will be researched into.
 
## Admin panel
 Overview of user information (email address, images, comments)
Here the admins of the site will be able to view the information for all users from the database
Feasibility: The admin panel will be much like the user account creation but will only be accessible by the admin (Negin) and will show a congregated view of all the user account information. It will follow similar aspects learned from lectures and assignments (form fill in from user input into a redirected page revealing such information.) The database will also be used to retrieve information from the user account creation section, image uploading, voting system and commenting.
 
##Photo uploading
Resize large images, error for smaller ones, specific implementations 
Resizing is simple to implement, getting image size is also easy for denying images that are too small
Feasibility: We have learned how to implement this feature from previous labs using PHP statements and submit buttons as well as error handling. We can expand on this aspect by adding some CSS and potentially JavaScript to make the process more visually appealing to the user (changing the button for example.)
 
##Database 
Used for user accounts, pictures, voting, commenting
Database will store all the information from users while also tracking other information for the site, such as currently featured photo
Feasibility: Previously learned how to implement databases from both this course as well as Intro to Databases. Databases will be crucial in retrieving information for the admin panel and user account creation. The voting system information, commenting, voting, and image upload will be also stored in the database.
 
##Voting System
Voting system which will in turn create a ranking system for photos 
Photo with most votes will be featured on the main page
Feasibility: This will be a new feature that we will work on and will most likely require the most time. We have looked into this feature from other sources and will most likely reference those sources for implementing a voting system. We will be using JQuery script, PHP, and MySQL to implement this feature. (Source: http://www.w3bees.com/2013/09/voting-system-with-jquery-php-and-mysql.html)
 
##Tagging System 
Tags will be stored in the database, users will be able to view all pictures with a certain tag (i.e. black cat, kitten, large cat)
Feasibility: The tags will be stored in a table in a database, a simple query will be able to find all photos with that tag. As this will be a new feature, we will also be using a reference to work through this. (Source: http://www.phpro.org/tutorials/Tagging-With-PHP-And-MySQL.html)


##Captions
Adding captions, description fill in (form) for photos
Users can fill out certain information for their photo through a form when uploading it. This will be stored in the database.
Feasibility: This information will be taken from a form and stored with the photo in a row. It will be easily retrievable from the database when displaying the photo.


##Commenting System
 Users may comment on other user’s pictures 
Each individual photo will have a comment section at the bottom for the users to leave thoughts for other users’ photos. 
Feasibility: Comments will be done as a form submission. Research will be done on how to implement this well. (Source: https://www.smashingmagazine.com/2012/05/building-real-time-commenting-system/) 
 
##Image View Layout
Different image viewing layout, overview layout (grid layout) and single image view with next button 
Users will be able to view images in different ways, such as with many images laid out in a grid, or one at a time
Feasibility: We will be primarily focusing on CSS and some JavaScript to achieve this feature. Imgur has implemented this feature effectively and we are hoping to mimic the same feature. We will be looking into Responsive image grids on how to implement the feature. (Source: http://alijafarian.com/responsive-image-grids-using-css/ & http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/)
