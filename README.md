# setup-php-contact-form

Script that aims to make it easier and faster to create PHP contact forms for static websites.

It uses [PHPMailer](https://github.com/PHPMailer/PHPMailer) to send emails, [sweetalert](https://github.com/t4t5/sweetalert) to show a notification (email sent successfully or not), and a custom script (`contact_notification.js`) to tie them together. It also makes some assumptions regarding where to store these libraries/files.

To use it, you need only run `setup-php-contact-form` with a few [options](#options).

### Install and run

```bash
# get the script in /usr/local/bin
mkdir -p "/usr/local/bin"
curl -L "https://raw.githubusercontent.com/vitorgalvao/setup-php-contact-form/master/setup-php-contact-form" -o "/usr/local/bin/setup-php-contact-form"

# make it executable
chmod +x "/usr/local/bin/setup-php-contact-form"

# run it
/usr/local/bin/setup-php-contact-form server jade ./relative/path/to/project
```

### Options

Options must be given in order. The first two are mandatory, while the third one is optional

```
usage: setup-php-contact-form <email_via> <template_type> [<project_directory>]

<email_via> must be either 'server' (to send emails from server script is on) or 'gmail' to route via gmail
<template_type> must be either 'html' or 'jade'
<project_directory>, if empty, will default to current directory
```

#### License
The Unlicense (Public Domain, essentially)

---

#### Donations
If you wish to support me with a donation, you can do so via

[![Flattr](https://dl.dropboxusercontent.com/s/3wgyqj4bqvrxl1g/donations_flattr.svg)](https://flattr.com/submit/auto?user_id=vitor&url=https://github.com/vitorgalvao/alfred-workflows&title=alfred-workflows&language=en_GB&tags=github,alfred&category=software)
[![Gratipay](https://dl.dropboxusercontent.com/s/gat64icoqwwm703/donations_gratipay.svg)](https://gratipay.com/vitorgalvao/)
[![Bitcoin](https://dl.dropboxusercontent.com/s/zhlepx2l8aut79s/donations_bitcoin.svg)](https://dl.dropboxusercontent.com/s/02rg1yvnwaczh3m/bitcoin_tip_jar.txt)
[![Paypayl](https://dl.dropboxusercontent.com/s/2q2fluda9z695le/donations_paypal.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=hgdesigns%40gmail%2ecom&item_name=Tip%20for%20vitorgalvao&currency_code=EUR)
