# Fireauth - Firebase Wordpress Plugin


#### About the Developer - Chatura Dilan Perera
Visit : https://www.dilan.me

#### License
GNU GENERAL PUBLIC LICENSE


=== Plugin Name ===
Contributors: bcdilan
Donate link: https://www.dilan.me
Tags: firebase, auth, social
Requires at least: 4.6
Tested up to: 5.3
Stable tag: 1.0.3
Requires PHP: 7.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Fireauth is a plugin that enables Firebase authentication in Wordpress

== Description ==

Fireauth is a plugin that enables Firebase authentication in Wordpress

#### Features

* Facebook Authentication
* Google Authentication

#### Working on Progress
 * Email Authentication
 
== Installation ==

 1. Upload the plugin (unzipped) into /wp-content/plugins/.
 2. Activate the plugin under the “Plugins” menu.
 
#### Steps to configure Fireauth
1. Create Firebase App on Firebase.
2. Enable Facebook and Google Authentication in Firebase.
3. Create a new Web Application in Firebase.
4. Get the Firebase SDK snippet JSON. Fii in the values.
```javascript
{
    "apiKey": "<API_KEY>",
    "authDomain": "<AUTH_DOMAIN>",
    "progjectId": "<PROJECT_ID>",
    "messagingSenderId": "<MESSAGE_SENDER_ID>",
    "appId": "<APP_ID>"
  }
```    
5. Go to FireAuth Settings.
6. Copy the above JSON to *Firebase Config JSON* field.
7. Go to Fireabase service account tab.
8. Generate a new private key for the app.
9. Copy the JSON inside the private key to *Firebase Service Config JSON* field.
10. Enable Facebook Login and Google Login in the plugin settings.
11. Add Fireauth Login Widget to your website from Widgets.

== Frequently Asked Questions ==

= How to contact more on adding features to this plugin =

Please visit and contact the author of the plugin

== Screenshots ==

1. Fireauth Configurations

== Changelog ==

= 1.0.3 =
* Releasing the stable 1.0.3 version of the plugin