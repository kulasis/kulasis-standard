### Installation Instructions

1. Clone this git repository.
`git clone https://github.com/kulasis/standard-edition.git`

2. Run Composer installer.  Command assumes Composer installed and as system command.
`composer install`

3. Create two databases (kula, kula_additional) with collation utf8mb4_unicode_ci.

4. Edit database settings in `app/config/databases.yml` file.  On first load of site, Kula SIS will create schema in database.

5. Edit parameter settings in `app/config/parameters.yml` file.  Ensure `ssn_key` is set to random string.

6. Ensure `.htaccess` files allowed.  Configure Apache `VirtualHost` to use `web` directory.
    ```
    <VirtualHost *:80>
      ServerName sub.domian.com
      DocumentRoot /var/sites/kulasis/web
    </VirtualHost>
    ```
7. Visit site to begin database creation.  If a blank page appears, keep refreshing until the login page appears.

8. Load `seed.sql` file into MySQL database to load first user.  Username: kula; Password: password.
