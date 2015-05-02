# cmsc191exer6group2
FRUIT ENGINE - CMSC 191 Exercise on MySQL, MongoDB, CouchDB

INSTALLATION INSTRUCTIONS:

## MySQL

## CouchDB

## MongoDB
**1. Have a PHP-MongoDB Connection by installing PECL**
   1. Go to [http://pecl.php.net/package/mongo/1.6.7/windows] (this link will bring you to the latest PECL version)
   2. Download the DLL you need. Make sure you know the architecture **(x86 or x64)** of your **Apache** server as well as your
     **PHP's version** (**NOTE: NOT Windows, but APACHE**)
   3. Download only the **THREAD SAFE DLL's** that suits your APACHE architecture.
   4. extract its contents and copy the file php_mongo.dll into your php extensions directory (in xampp, it's **xampp/php/ext/**. for
     wampserver, it's **wamp/bin/php/php<version>/ext/**)
   5. edit your **php.ini** to include the following line:
       **extension=php_mongo.dll**
   6. in your php directory (**xampp/php/** or **wamp/bin/php/php<version>/**), copy (NOT CUT, BUT COPY) the file
       **libsasl.dll**
     to your APACHE bin directory (**xampp/apache/bin** or **wamp/apache/apache<version>/bin**)
   7. Run your Apache server. It should work now.

**2. Run MongoDB**
   1. From your command line, run mongod.exe
   2. Open another command line and run mongo.exe
   3. type the following commands (in order):
    ```
    use cs191

    db.createUser(
        {
            user: "cs191admin",
            pwd: "password",
            roles:[
                {
                    role: "userAdmin",
                    db: records
                }
            ]
        }
    )
    ```

**3. Go to localhost/cmsc191exer6group2/MongoDB**