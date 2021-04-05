# Joomla-Project3-Task
A plugin which creates a cookie if it doesn't exist else displays the cookie's Date Time (microseconds) in a popup.

## Installation:
You may download the zip file and install it using Joomla's admin panel module installation page by the file upload.

## Plugin Description:
Type: <b> System </b> <br/>
Events Used: <b> onBeforeRender </b> <br/>
Follows Joomla Coding Standards: <b> Yes </b> <br/>
Gives any error on phpcs sniffer warnings: <b> No </b> <br/>


## Before a Cookie is set
![Cookie unset](/gif/Joomla1.gif)

As you may observe, the browser's Cookie storage didn't have a Cookie named Custom_Cookie_GSoC (the name is fetched as params from the Plugin XML form) so on reload, there was no popup but the Cookie was set

## After a Cookie is set
![Cookie unset](/gif/Joomla2.gif)

After we set the Cookie, the browser displays a modal which is styled and scripted by custom files and doesn't depend on any external dependancy
