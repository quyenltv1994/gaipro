#### Run the following commands setup WP :

- `curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar` : Install WP-CLI
- `php wp-cli.phar cli update --stable --yes` : Update WP-CLI

**Install WordPress files**

- `php wp-cli.phar core download --path=./ --locale=vi --version=5.3.2 --skip-content --allow-root`

**Generate configuration file**

- `php wp-cli.phar config create --dbname=`YOUR_DB_NAME `--dbuser=`YOUR_DB_USER `--dbhost=`YOUR_DB_HOST `--dbprefix=kp20_ --skip-check --path=./ --prompt=dbpass --allow-root`

#### Update everything

- `php wp-cli.phar core update --locale=vi  --path=./ --version=5.3.2 --allow-root`
- `php wp-cli.phar plugin update --all --path=./ --allow-root`
- `php wp-cli.phar package update --path=./ --allow-root`
- `php wp-cli.phar language core update --path=./ --allow-root`

#### Composer

- `composer install`

**Add plugins with Composer**

- `composer require wpackagist-plugin/SLUG_PLUGIN`