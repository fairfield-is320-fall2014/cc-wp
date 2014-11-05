cc-wp
=====

#Creating a locally-hosted version of The Connected Citizen with AMPPS (Mac)#

1. Log-in to is-dsb.fairfield.edu/cc/wp-login.php with your credentials
2. Click "Duplicator" in the lower-left-hand corner
3. Click Create New > Next > Build
4. Click Packages, then click Installer and Archive *(There should be an installer.php file and a .zip file in your Downloads)*
5. Run AMPPS *(If you haven't installed yet the link is here: http://ampps.com/download)*
6. In the Control Center start Apache and MySQL, then click the House Icon to go to AMPPS Home
7. Under Database Tools, click phpMyAdmin
8. Click Databases, in the Create Database form type: cc
9. In Applications > AMPPS > www, create a new folder for the site titled: cc
10. Drag the installer.php and the .zip file in your Downloads into the newly created cc folder
11. In your browser go to: localhost/cc/installer.php, at this point you should see the Duplicator Install page
12. Host: localhost  /   User: root  /  Password: mysql  /  Database Name: cc

*You should now have a locally hosted version of The Connected Citizen website on your computer. Check this in your browser by going to localhost/cc/wp-login.php and login with your credentials from the is-dsb site.*

#Creating a Git repository on Mac#

1. Open Terminal by searching Terminal in Spotlight
2. Type: alias wget='curl -0'
3. Type: wget https://wordpress.org/latest.tar.gz
4. Type: tar zxvf latest.tar.gz
5. Type: cd wordpress/
6. Type: rm -rf wp-content
7. Type: git init
8. Type: git remote add -t \* -f origin https://github.com/fairfield-is320-fall2014/cc-wp.git
9. Type: git checkout master

*Now you have created a git repository in the wordpress folder which will be in your user folder in Finder (ex. ryanwessel). You can rename this to cc. We removed the wp-content folder in Step 6, so now we need to pull from GitHub to get the most up-to-date folder.*

#Pulling from GitHub on Terminal#

#How to Add, Push, and Commit to GitHub in Terminal#
###After making changes to the site locally, follow these steps to commit those changes to GitHub###

1. Open Terminal
2. Type: cd (folder name)/ *In our case the folder name should be "cc/"*
3. Type: git add .
4. Type: git commit -m "type your commit message here"
5. Type: git push origin master *(master can be replaced by any branch name that you wish to push to)*

#How to add this repository in the GitHub for Mac Application#

1. Install GitHub for Mac if you have not done so already https://mac.github.com/
2. Once that is done click the + in the top-left corner
3. Then click Add, then Choose, and select the folder "cc"

*Now you can Commit & Sync with the GitHub repository from this application*
