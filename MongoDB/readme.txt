####################
README
####################

To get this application running in your server, just follow these instructions:

FOR WINDOWS USERS:
1. Have a PHP-MongoDB Connection by installing PECL
   - Go to http://pecl.php.net/package/mongo/1.6.7/windows (this link will bring you to the latest PECL version)
   - Download the DLL you need. Make sure you know the architecture (x86 or x64) of your Apache server as well as your
     PHP version (NOTE: NOT Windows, but APACHE)
   - Download only the THREAD SAFE DLL's that suits your APACHE architecture.
   - extract its contents and copy the file php_mongo.dll into your php extensions directory (in xampp, it's xampp/php/ext/. for
     wampserver, it's wamp/bin/php/php<version>/ext/)
   - edit your php.ini to include the following line:
       extension=php_mongo.dll
   - in your php directory (xampp/php/ or wamp/bin/php/php<version>/), copy (NOT CUT, BUT COPY) the file
       libsasl.dll
     to your APACHE bin directory (xampp/apache/bin or wamp/apache/apache<version>/bin)
   - Run your Apache server. It should work now.

2. Go to localhost/cmsc191exer6group2/MongoDB