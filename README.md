cc-wp
=====

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
5. Type: git push origin master
