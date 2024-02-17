# PC-store-site

An online store site for my school.

It uses the PHP + Apache + MySQL stack.
I run it on Linux but it works with XAMPP just fine as well.

## Setting up

- The database schemas are set up in the code for `/Templates/mysql-register.php`
- You'll also need to confirm the `MySQL` username and password from `/Templates/mysql-register.php` AND `/Templates/mysql-login.php`

### Windows w/ `XAMPP`:
  - You need to install [`XAMPP`](https://www.apachefriends.org/download.html) (`apachefriends.org`)
  - You need to move the folder to `C:\xampp\htdocs\`
  - In your browser: go to `http:\\localhost\`
  - Then with Apache you just need to head to your directory.

### For Arch Linux with LAMP (useful for other distros but can be a bit different):
- Dependencies (all are **extra** packages with their package names) (`sudo pacman -S package-name`):
  - **apache** [package](https://archlinux.org/packages/extra/x86_64/apache/) (**archlinux.org**)
  - **mariadb** [package](https://wiki.archlinux.org/title/MariaDB) (**archlinux.org**)
  - **php** [package](https://archlinux.org/packages/extra/x86_64/php/) (**archlinux.org**) and **php-fpm** (optional) [package](https://archlinux.org/packages/extra/x86_64/php-fpm/) (**archlinux.org**)
****    - **phpmyadmin** [package](https://archlinux.org/packages/extra/any/phpmyadmin/) (**archlinux.org**)
  - *Full command:*
    - `sudo pacman -S apache mariadb php php-fpm phpmyadmin`

- [Apache HTTP Server](https://wiki.archlinux.org/title/Apache_HTTP_Server) (`archlinux.org`) in `/etc/httpd/conf/httpd.conf`:
  - `ServerRoot` should be `/etc/httpd`
  - `Listen 80` <- It's responsible for the port that's listening to, `80` is the TCP standard for [**localhost http data exchange**](https://en.wikipedia.org/wiki/HTTP#HTTP_data_exchange) (**wikipedia.org**)
  - Additional stuff for [**FastCGI PHP**](https://www.php.net/manual/en/install.fpm.php) (**php.net**) from the **php-fpm** package. Add this at the end of `/etc/httpd/conf/httpd.conf`:
    ```
    <FilesMatch \.php$>
        SetHandler "proxy:unix:/run/php-fpm/php-fpm.sock|fcgi://localhost/"
    </FilesMatch>
    ```
  - And don't forget to enable the service: `sudo systemctl enable php-fpm --now`
  - Optional: check if the service is `active(running)` - `sudo systemctl status php-fpm`

- Enabling the Apache (**httpd**) service
  - `sudo systemctl enable httpd --now` (you can also check the status with `sudo systemctl status httpd`)
  - **NOTE:** On some distros the service management and names for the Apache service may vary.

- For **MariaDB** and **phpMyAdmin** respectively
  - You can either use a secure installation or not.
    - If you use a secure installation make sure that the `$password` variables in:
    - `/Templates/mysql-register.php` and `/Templates/mysql-login.php` are an empty string (`""`)
    - Otherwise, update those password variables with your actual password for the secure installation.
    - Guide for the [**secure installation**](https://wiki.archlinux.org/title/MariaDB#Improve_initial_security) (**archlinux.org**)


- I may have forgotten to include some of the steps, if that's the case then feel free to tell me on discord (**1Kill2Steal#5316**)


### Additional notes:

This site is incomplete, the shopping cart system doesn't work. Additionally, don't bother with doing PRs on it since I don't plan on adding the full functionality. The reasoning is that this was originally a homework task from my web design teacher and I decided to add up on it with basic session management and decided to make the code publicly accessible as well as give details on setting it up with a LAMP stack (the one I use), since originally, I thought about setting it up with the **LEMP** stack (**E** = **EngineX** (**nginx**) ) but the file management was messy (after days of configuring i got the site to work but without image accessing) and I decided to ditch it and use Apache.
