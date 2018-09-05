# setup-php-contact-form

Script that aims to make it easier and faster to create PHP contact forms for static websites.

### Install and run

If you use [homebrew](http://brew.sh/), you can install it easily with

```bash
brew install vitorgalvao/tinyscripts/setup-php-contact-form
```

If you prefer to do it manually, you can do so by

```bash
# get the script in /usr/local/bin
mkdir -p '/usr/local/bin'
curl --location 'https://raw.githubusercontent.com/vitorgalvao/setup-php-contact-form/master/setup-php-contact-form' --output '/usr/local/bin/setup-php-contact-form'

# make it executable
chmod +x '/usr/local/bin/setup-php-contact-form'
```

To run it, you’d do something like

```bash
setup-php-contact-form --server ./relative/path/to/project
```

#### License
The Unlicense (Public Domain, essentially)
