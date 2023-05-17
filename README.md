## DISCLAIMER

All of the research and code is intended for research and learning purposes only. I do not condone the use of this for any illegal activity. Stealing without permission is wrong, and is almost definitely illegal when it comes to stealing login credentials.

Now, with that out of the way let's get down to business...

# Fake Accesspoints

Fake accesspoints have been in the penetration testers toolbags for years. A great way to capture login credentials is with a spoofed captive portal page on said fake access point due to their versitility when it comes to social engineering a target. Additionally, if one wanted to take it further, an attacker could deauth a device on the network and force them to reconnect to the fake ap, but that is out of the scope of this project.

Here is how I built a fake wifi access point with a spoofed captive portal page on a raspberry pi.

# Resources

great resource for creating an accesspoint with a raspberry pi:
- https://hakin9.org/create-a-fake-access-point-by-anastasis-vasileiadis/

**NOTE** the ap.sh and dnsmasqstart.sh bash scripts configure the raspberry pi as a wireless ap with the hostapd.conf and dnsmasq.conf configuration files (make sure hostapd and dnsmasq are installed before running). You also may have to kill the previously running dnsmasq service.

```
sudo apt-get install hostapd dnsmasq
sudo chmod u+x ap.sh dnsmasqstart.sh
```
Then in different terminal windows run:
```
sudo systemctl stop dnsmasq
sudo ./dnsmasqstart.sh
```
and
```
sudo ./ap.sh
```

OpenNDS documentation: 
- https://opennds.readthedocs.io/en/stable/index.html

Note: there are a lot of tutorials for creating captive portal pages using nodogsplash. Unfortunately, however, as the time of me making this nodogsplash uncommited FAS support, making OpenNDS (nodogsplash's supposedly more complicated older brother) the most similar alternative.

# PHP server for Captive Portal

The captive portal page is going to be hosted locally using php because it's incredibly easy to set up (see start_server.sh). Openssl is also needed for ssl support with certain fas parts of OpenNDS, the application of that here doesn't matter too much, but just to avoid any errors it's probably better to install it. 

Make sure php and openssl is installed on raspberry pi:

```
sudo apt-get install php php-cgi openssl
```

You can then start the server by executing the start_server.sh bash script, after making sure it has permissions to execute.

```
sudo chmod u+x start_server.sh
sudo ./start_server.sh
```

More information on how the server interacts with OpenNDS (the passing of credentials, ssl encryption, authenticatio, etc.) can be found inside the spoofing_template.php example.

# OpenNDS Configuration

The OpenNDS documentation has great examples that allow one to easily adapt their own implementation of a of a captive portal. Making it easier to adapt custom html to the captive portal page, in the attempt at fooling a person to login with their credentials.

See **Configuration Options** and **Using the FAS Example Scripts** in the OpenNDS documentation for settings to add in the /etc/opennds/opennds.conf file (or just look below).

Set the gateway interface, name, port, and max clients in /etc/opennds/opennds.conf file:

```
option GatewayName 'fake_name'
option GatewayPort 2050
option GatewayInterface wlan0
option maxclients 250
```

configure OpenNDS to point to the PHP server in /etc/opennds/opennds.conf file:

```
option fasport 2080
option faspath /nds/fas-aes.php
option fas_secure_enabled 2
option faskey *custom_faskey*
```

in the case of our example though, the faspath must be set to the file of the spoofing_template.php from the webroot of the php server. Which would look like...

```
option faspath /spoofing_template.php
```

**NOTE**: the OpenNDS documentation has the value for each setting (for fasport the setting would be 2080) within quotes (option fasport '2080') which in my testing, results in an error and is only able to diagnosed in journalctl as a bad option. However, setting the option without quotes fixes this error. 

# Execution

With the access point up, the php server running on localhost port 2080, and the OpenNDS process configured with the gateway and pointer to the php server everything is set. When a victim connects to the access point, OpenNDS will redirect them to the spoofed signin page and will write all collected credentials to captured_stuff.txt. 
