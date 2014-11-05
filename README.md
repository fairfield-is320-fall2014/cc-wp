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

*Now you have created a git repository in the wordpress folder which will be in your user folder in Finder (ex. ryanwessel). You can rename this to cc.*
