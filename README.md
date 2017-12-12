# Property Bro's
Created by: Noah Panicola, David Dean, Taylor Ratliff. The documentation for the API, along with its source code, can be found here: https://github.com/noahpanicola/SEP-API

We wanted to build a web service to make the life of tenants, landlords, and property owners much more efficient and easy, bridging them all together in one concise application. Tenants can add their property(s) to their profile. They can also submit maintenance requests and message their landlord or other tenants with the click of a button. We noticed that there's no universal software for linking tenants to landlords, and we believe our Property Bro's web app is the perfect solution

## Accessing the site
-The URL for our site is http://54.191.3.254/login.html

-Professors email is musserda@missouri.edu, password is pass

-Enjoy!

# SEP-WEB
The front end web aspect of the CS-4320 final Project. It is written in html and angularjs. It uses our Java Spring API to manage the backend and our MySQL database

## Testing
Front end html/css and interactions with server can be handled with WAMPP/XAMPP by Apache

## How it works
As it was mentioned earlier, the frontend was written using AngularJS and HTML. The cookies are being stored through various PHP scripts inside the map folder. The user authentication is processed through our Spring Security API, which authenitcates the user everytime a page was loaded. The bulk of our frontend is done in the home.html file. This file sets up the modals for each indiviudal users Profile, Properties, and Inbox

## Property Modal
The property has some very unique features. Upon logging into your profile, you will see your current properties. Although if you click the (+) button to add a new property and fill out the form; the form data will be sent to google map's API, calling functions that of which will return a unique photo of the property, along with its google maps location. These features can be accessed when you click on an indiviudal property

## Inbox Modal
The inbox modal's main emphasis is for tentants to message their landlord/ property owner and vice versa. Tenants have the ability to easily submit maintenance request, and even ask general questions regarding rent or a bill. Tenants can also message other tenants if they desire.

## Licenses
* [Apache Version 2.0 License Aggreement](https://www.apache.org/licenses/LICENSE-2.0)
* [Angular JS License (MIT License)](https://opensource.org/licenses/MIT)

