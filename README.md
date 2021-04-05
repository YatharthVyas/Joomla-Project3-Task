# Joomla-Project3-Task
A plugin which creates a cookie if it doesn't exist else displays the cookie's Date Time (microseconds) in a popup.

## Installation:
<ol>
  <li> Download the zip file </li>
  <li> Visit Joomla Administration Panel of your website </li>
  <li> Go to the plugin installation page (Found under system settings) </li>
  <li> Upload the zip file </li>
</ol>

## Plugin Specifications:
- Type: <b> System </b> <br/>
- Events Used: <b> onBeforeRender </b> <br/>
The reason behind selecting onBeforeRender instead of any other event was because the plugin requires WebAssets API to load JavaScript and CSS files which will generate the modal and the best time to load these files and set Cookies would be just before the page is about to be rendered.<br/>
- Follows Joomla Coding Standards: <b> Yes </b> <br/>
- Follows Joomla Naming Conventions: <b> Yes </b> <br/>
- phpcs sniffer verified: <b> Yes </b> <br/>

## Plugin Folder Structure

    ├── language
    │   └── en-GB.plg_system_yvcookies.ini
    ├── js
    │   └── script.js
    ├── css
    │   └── style.css
    └── yvcookies.php
    └── yvcookies.xml


## Process Flowchart:
<img src="https://github.com/YatharthVyas/Joomla-Project3-Task/blob/main/gif/Flowchart.png" height="600" alt="Flowchart image: https://github.com/YatharthVyas/Joomla-Project3-Task/blob/main/gif/Flowchart.png"/>

## Expected Output/Behaviour:
### 1. Before a Cookie is set

Note: Page is beind reloaded in the gif

![Cookie unset](/gif/Joomla1.gif)

As you may observe, the browser's Cookie storage didn't have a Cookie named Custom_Cookie_GSoC (the name is fetched as params from the Plugin XML form) so on reload, there was no popup but the Cookie was set

### 2. After a Cookie is set

Note: Page is beind reloaded in the gif

![Cookie set](/gif/Joomla2.gif)

After we set the Cookie, the browser displays a modal which is styled and scripted by custom files and doesn't depend on any external dependancy
