How to think when creating a website from scratch using HTML5 and CSS 3
Component-driven Design/Modular Building Blocks |

I will discuss here the CSS Structure as made by Jonas Jonas Schmedtmann from Udemy on his course Build Responsive Real World Websites with HTML5 and CSS3.
Everything that is special comes with a particular way of thinking embedded into it. Let's uncover some of the special ways of thinking that goes into creating a web page.
BELOW GOES ALL THE THINKING PROCESS TOWARDS STRUCTURING A WEBSITE AS IT IS DONE BY JONAS SCHMEDTMANN IN HIS HTML5 and CSS3 WEB DESIGN COURSE.
First thing Jonas did in order to create the restaurant website was to go from step 1 to 3 from the 7 steps design process. Step 1/7 was to define the goal and audience of the website which were to create a food delivery website for people who either do not have time to cook or do not like to cook.  Step 2 was to collect all the material, navigation, text, photos, etc. Step 3 is the sketching of the webpage. Step 4 is the browser design and development of the website on "visual studio code:"
============================================================================================================================================
SETUP PROCESS
============================================================================================================================================
Set the folder structure for project exactly like this:
Index.html
Resources/
    Css/
    style.css
    Img/ 
    data/
    Jquery/
vendors/
    Css/
    Fonts/
    Jquery/
--------------------------------------------------------------------------------------------------------------------------------------------
Open the project’s folder on Visual Studio Code 
Create a CSS style named style.css
Link the css style sheet to the index.html 
Link font families to the index.html 
Create the first CSS basic setup rules on the css style sheet.
    Margins and padding to 0. 
    Box-sizing: border-box.
    Define row max width and margins.

    Html rules
        Background: #fff.
        color: #555.
        Font-family
        Font-size
        Font-weight.
        Text-rendering: optimizeLegibility; 
============================================================================================================================================		      
NOW THE START PER SI
============================================================================================================================================
Test the css rules with an h1 element and some text
Add the grid.css file to the head in the main index.html file. The grid.css file came from the website “responsivegridsystem.com”
--------------------------------------------------------------------------------------------------------------------------------------------
Header 
Added the image in the css file
Filled out and centered the image with background-size: cover and background-center;
Image covering all the viewport with height: 100vh;
Added text with buttons in the header and centered them with this css magic below 
			1.	 position: absolute; 
			2.	   width: 1140px;
			3.	     top: 50%;
			4.	     left: 50%;
			5.transform: translate(-50%, -50%); 
    
Stylize the buttons plus animation
Insert logo and navigation links inside the .main-nav<header
Stylize logo e navbar links plus link border animation.
Comment the css style sheet
============================================================================================================================================		      
NEW SECTION
============================================================================================================================================		      





============================================================================================================================================		      
Jonas commented it using the following sections:
============================================================================================================================================
BASIC SETUP
* {}
html {}
--------------------------------------------------------------------------------------------------------------------------------------------
REUSABLE COMPONENTS
.row {}
--------------------------------------------------------------------------------------------------------------------------------------------
HEADINGS
H1 {}
--------------------------------------------------------------------------------------------------------------------------------------------
BUTTONS
.btn:link, btn:visited {}
.btn:hover, btn:visited {}
--------------------------------------------------------------------------------------------------------------------------------------------
HEADER
header {}
.hero-text-box{}
.logo{}
.main-nav{}
.main-nav li {} 
.main-nav li a:link, .main-nav li a:visited {}
.main-nav li a:hover, .main-nav li a:active {}
