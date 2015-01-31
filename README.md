### Installation Instructions

1. Clone this git repository.
2. `git clone https://github.com/kulasis/standard-edition.git`

2. Run Composer installer.  Command assumes Composer installed and as system command.
`composer install`

3. Edit database settings in `databases.yml` file.  On first load of site, Kula SIS will create schema in database.

4. Ensure `.htaccess` files allowed.  Configure Apache `VirtualHost` to use `web` directory.
```
<VirtualHost *:80>
  ServerName sub.domian.com
  DocumentRoot /var/sites/kulasis/web
</VirtualHost>
```
