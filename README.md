Notes
-----

This dashboard was written for Ubuntu, there is no support for other operating systems yet. Also, not all system information is included. If you would like to add these additional features, feel free to fork and create a pull request.

Installation
------------

Clone the repository to your webserver:

    git clone https://github.com/segersjens/dashboard.git

Allow apache to read memory information:

    usermod -a -G kmem www-data

Features
--------

Only basic features are implemented at this moment.

- General: hostname, os, name
- CPU: name, frequency, load
- Disks: name, size, reads, writes, used, temperature, state
- Memory: total, free, used, type, brand, speed
- Network: received, sent, total, state, errors
- Processes: count
- Swap: total, free, used
- Uptime: days, hours, minutes, seconds