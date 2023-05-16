sudo airmon-ng check kill
sudo systemctl stop dhcpcd
sudo systemctl start wlan0

ifconfig wlan0 up 192.168.1.1 netmask 255.255.255.0
route add -net 192.168.1.0 netmask 255.255.255.0 gw 192.168.1.1

iptables -table nat -append POSTROUTING -out-interface eth0 -j MASQUERADE
iptables -append FORWARD -in-interface wlan0 -j ACCEPT

hostapd hostapd.conf
