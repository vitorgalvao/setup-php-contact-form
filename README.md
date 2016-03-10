# setup-php-contact-form

Script that aims to make it easier and faster to create PHP contact forms for static websites.

It uses [PHPMailer](https://github.com/PHPMailer/PHPMailer) to send emails, [sweetalert](https://github.com/t4t5/sweetalert) to show a notification (email sent successfully or not), and a custom script (`contact_notification.js`) to tie them together. It also makes some assumptions regarding where to store these libraries/files.

To use it, you need only run `setup-php-contact-form` with a few [options](#options).

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
setup-php-contact-form server jade ./relative/path/to/project
```

### Options

Options must be given in order. The first two are mandatory, while the third one is optional

```
usage: setup-php-contact-form <email_via> <template_type> [<project_directory>]

<email_via> must be either 'server' (to send emails from server script is on) or 'smtp' to use an SMTP server
<template_type> must be either 'html' or 'jade'
<project_directory>, if empty, will default to current directory
```

#### License
The Unlicense (Public Domain, essentially)
