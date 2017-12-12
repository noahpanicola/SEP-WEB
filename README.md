# SEP-WEB
The front end web aspect of the CS-4320 final Project. It is written in html and angularjs. It uses our Java web service as the backend.

## Testing
  Front end html/css and interactions with server can be handled with WAMPP/XAMPP by Apache

## How it works
As it was mentioned earlier, the frontend was written using AngularJS and HTML. The cookies are being stored through various PHP scripts inside the map folder. The user authentication is processed through our Spring Secuirty API, which authenitcates the user everytime a page was loaded. The bulk of our frontend is done in the home.html file. This file sets up the modals for each indiviudal users Profile, Properties, and Inbox

## Property Modal
The property has some very unique features. Upon logging into your profile, you will see your current properties. Although if you click the (+) button to add a new property and fill out the form; the form data will be sent to google map's API, calling functions that of which will return a unique photo of the property, along with its google maps location. These features can be accessed when you click on an indiviudal property

## Inbox Modal
The inbox modal's main emphasis is for tentants to message their landlord/ property owner and vice versa. Tenants have the ability to easily submit maintenance request, and even ask general questions regarding rent or a bill. Tenants can also message other tenants if they desire.

## Licenses
* [Apache Version 2.0 License Aggreement](https://www.apache.org/licenses/LICENSE-2.0)
* [Angular JS License (MIT License)](https://opensource.org/licenses/MIT)

