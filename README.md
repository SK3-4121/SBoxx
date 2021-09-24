# SBoxx V3.1a ![coma](https://user-images.githubusercontent.com/66770178/130568540-89a03d3f-6ccb-4ceb-9ba9-c898bca69d02.png)
Credits:

Coding: SK3#0001

Icon/Logo: TwoTap#7012

# What is SBoxx?
SBoxx is a open source php image host for home users this will target the person that has a apache,ngixn,zipline server! With this you can create your own image host thats fast secure and has options. Made with php making it lite weight unlike js that heavy boy, php is fast and like mentioned lite weight. There were 2 other versions the first one was on pastebin and around 10 lines long it was nothing special V2.0 though add the invisible URL feature. This is the first of its kind please show some feed back if you can!

# How should i set it up? (In short: If you know what your doing)
Sidenote: This is about 2/5 complete

Simple it is. The installer is half bash and python. bash gets the first half done and python does the hard work because im better at python then bash so i just had the bash script auto install the python installer and because python does not need chmod +x index.py it can be fully auto! Sadly you do need to run the chmod +x on the .sh file because you know linux is a little gay when it comes to that.

Ubuntu: 
$`sudo apt update && apt upgrade -y`
$`sudo apt install wget -y`
$`sudo wget "https://raw.githubusercontent.com/SK3-4121/SBoxx/main/Installer/install.sh" && sudo chmod +x install.sh && sudo ./install.sh` - You can remove the sudo(s) in the script its up to you.

Any one wondering why I just did not use curl (Its because im a moke and though this is cooler xd)

# Setup
For the links for .json files you have to put it as a link and not just a dir to the file because php has aids and does not like it. 
Step 1: Go into all the files and check the https://js.dolphin-fe.xyz/ with your domain 

# Patch Notes: V3.1a
New Route.php,
Inv URL Embeds,
Libhookz.php logs,
