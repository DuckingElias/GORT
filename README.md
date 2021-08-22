# GORT
**GORT** is an example PHP application written in the MVC schema.

# Installation
Just drag & drop the contents of the repository inside the htdocs folder, or an subfolder inside the htdocs folder.

# Configuration
## Apache
You need to enable mod_rewrite in order for the application to work.
## Change Subfolder
Inside `config/config.php`, change **URL_PATH** to your subfolder (`/` if the application is in the document root).
## Change MySQL credentials
Inside `config/config.php`, change **MYSQL_URI**, **MYSQL_USERNAME** and **MYSQL_PASSWORD** to your MySQL credentials.