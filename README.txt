DATABASE:
Database has been completed, need reply from cs help desk to make a project database for us to share rather than sharing our native database + password with one another.
DATABASE TABLES:
Users - Email, password, directory (images), userID
Images - Filepath, voteUp, imageID, userID
Comments - ImageID, userID, date, comment
Tags - imageID, tagText

-----------------------------------------------------------
HTML/CSS (bootstrap.css, creative.css)
Mostly completed and working, using bootstrap theme creative.css with personal modifications.
All images are either personally owned or reference, the top image page on the index.php is filled with placeholder which will later be replaced with
the voting image's directory of the user fetched from the database.
May implement some more JavaScript/JQuery depending on the image layout.

USER ACCOUNT CREATION: (register.php)
User account creation is almost completely functional, it has to still be implemented with the database as of now. May consider adding more fiels but currently
email, password, and confirmpassword are our only fields. Location and username may be added.

PROFILE: (profile.php)
Currently profile.php is breaking at some point (we are guessing it is due to the php file upload). File upload is currently tenatively implemented and should work
with the database linking to the user directory/file name. File resizing must be implemented but may not be necessary(?) at the moment due to image view layout, we have
to test the image view layout's functionality before deciding on how to proceed with file resizing as with did not anticipate this relationship. 
Authentication is currently somewhat functional, breaks due to database implementation (lack of rather). 


IMAGE VIEW LAYOUT: (index.php)
Although listed to be done on March 30th we have set up the initial layout on the index.php page using creative.css and current placeholders as previously mentioned.
Changes that will be done are being able to click (image is not currently clickable, can only hover) and it will open the secondary layout of clicking through images
rather than a grid layout. In this layout comments and tags will be visible to the user as well as non-registered users but they will not be able to comment on it.

We may consider using a PHP open source gallery (http://www.design3edge.com/2010/08/26/best-free-and-open-source-php-image-galleries/) but would like to create it from scratch
in the upcoming weeks. 


Connet.php & Session.php --> connects to database but must be changed to a project database. Session begins the user session.
Logout.php --> destroys user session.
Navigation.php --> included in all main .php views (profile, index, admin, register) used to navigate to each section. Admin panel will not be visible to users.!
Login.php --> Checks to see if username + password is in the database, will require connect.php to function. Redirects user to profile.php if login is succesful. 


TO BE DONE:

Most of the following will be completed during the weekend in the event that we run into more scope creep issues. We would like to spend the remaining of the semester
working on the database implementation and some authentication problems and any other errors that may arise. Admin panel will most likely take the most time to
complete. 

ADMIN PANEL
Did not anticipate the depth of the admin panel and will be working on it during the weekend together rather than assigning it to one person. May be better to implement the 
admin panel after the profile, comment, and tag system is fully functional as it is not reliant on them as we previously anticipated but can borrow code from profile.php
to finish implementing.

COMMENT/TAGGING/VOTING:
Will be implemented together once the IMAGE VIEW LAYOUT and Image upload is fully functional. Will be using the following tutorial for the voting system (http://www.phpro.org/tutorials/Tagging­With­PHP­And­MySQL.htm)

IMAGE VIEW LAYOUT:
Must implement the grid layout as previously mentioned with the option to comment and display voteUp and tags. 

PROFILE:
Must implement the option for the user to add tags to their image. Must also implement the database with the option to change user's information. Image resize is currently
a tentative issue.


