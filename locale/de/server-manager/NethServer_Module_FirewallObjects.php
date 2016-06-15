<?php 

$L['FirewallObjects_Description'] = 'Verwalte Firewall Objekte';
$L['FirewallObjects_Tags'] = 'Firewall Zone Host Dienst Gruppe Objekte';
$L['FirewallObjects_Title'] = 'Firewallobjekte';

$L['esp_label'] = 'ESP';
$L['gre_label'] = 'GRE';
$L['HostGroupsKey_label'] = 'Gruppe';
$L['HostGroups_create_label'] = 'Erstelle Host Gruppe';
$L['HostGroups_CreateHostGroup_label'] = 'Erstelle Host Gruppe';
$L['HostGroups_update_label'] = 'ändere Host Gruppe "${0}"';
$L['HostGroups_Title'] = 'Host Gruppen';

$L['HostsKey_label'] = 'Host';
$L['Host_key_exists_message'] = 'Host Identität wird schon benutzt';
$L['Hosts_create_label'] = 'Erstelle Host';
$L['Hosts_CreateHost_label'] = 'Erstelle Host';
$L['Hosts_update_label'] = 'ändere Host "${0}"';
$L['Hosts_Title'] = 'Hosts';
$L['icmp_label'] = 'ICMP';
$L['Interface_label'] = 'Schnittstelle';
$L['IpAddress_label'] = 'IP Adresse';
$L['Members_label'] = 'Mitglieder';
$L['Members'] = 'Mitglieder';
$L['Network_label'] = 'Netzwerk';
$L['Ports_label'] = 'Ports';
$L['Ports_validator'] = 'Ports durch Komma getrennt eingeben';
$L['Protocol_label'] = 'Protokoll';
$L['name_label'] = 'Name';
$L['ServicesKey_label'] = 'Dienst';
$L['Services_create_label'] = 'Dienst erstellen';
$L['Service_key_exists_message'] = 'Dienstname ist bereits in Benutzung';
$L['Services_CreateService_label'] = 'Dienst erstellen';
$L['Services_update_label'] = 'ändere Dienst "${0}"';
$L['Services_Title'] = 'Dienste';
$L['tcp_label'] = 'TCP';
$L['tcpudp_label'] = 'TCP und UDP';
$L['udp_label'] = 'UDP';
$L['ZonesKey_label'] = 'Zone';
$L['Zones_create_label'] = 'Zone anlegen';
$L['Zone_key_exists_message'] = 'Zonen Identifikation schon vorhanden';
$L['Zones_CreateZone_label'] = 'Zone erstellen';
$L['Zones_update_label'] = 'ändere Zone "${0}"';
$L['Zones_Title'] = 'Zonen';

$L['valid_platform,fwobject-zone-delete,fwobject-referenced,3'] = 'Kann  ${2} nicht löschen: Zone wird in Firewall-Regeln verwendet.';
$L['valid_platform,fwobject-fwservice-delete,fwobject-referenced,3'] = 'Kann  ${2} nicht löschen: Dienst wird in Firewall-Regeln verwendet.';
$L['valid_platform,fwobject-host-delete,fwobject-referenced,3'] = 'Kann  ${2} nicht löschen: Host wird in Firewall-Regeln verwendet.';
$L['valid_platform,fwobject-host-group-delete,fwobject-referenced,3'] = 'Kann ${2} nicht löschen. Host-Gruppe wird in Firewall-Regeln verwendet.';
$L['valid_platform,fwobject-cidr-delete,fwobject-referenced,3'] = 'Kann  ${2} nicht löschen: CIDR wird in Firewall-Regeln verwendet.';
$L['valid_platform,fwobject-iprange-delete,fwobject-referenced,3'] = 'Kann  ${2} nicht löschen: IP-Bereich wird in Firewall-Regeln verwendet.';
$L['valid_platform,fwobject-host-delete,fwobject-hostgroup-remove-member,3'] = 'Kann ${2} nicht löschen:  ${2} ist das letzte Mitglied der Host-Gruppe ${${reason}}.';
$L['valid_iprange_outofbounds'] = 'Start-IP muss niedriger sein als End-IP';

$L['Cidr_Title'] = 'CIDR Subnets';
$L['Address_label'] = 'Netzwerk';
$L['Cidr_create_label'] = 'Erstelle CIDR subnet';
$L['Cidr_update_label'] = 'Aktualisiere CIDR subnet';
$L['Cidr_key_exists_message'] = 'Ein Objekt mit demselben Namen ist bereits in der Systemdatenbank vorhanden';
$L['Cidr_CreateCidr_label'] = 'Erstelle CIDR network';
$L['CidrKey_label'] = 'CIDR';

$L['IpRange_Title'] = 'IP Bereich';
$L['Start_label'] = 'Start IP';
$L['End_label'] = 'End-IP';
$L['IpRange_create_label'] = 'erstelle IP Bereich';
$L['IpRange_update_label'] = 'Update IP Bereich';
$L['IpRange_key_exists_message'] = 'Ein Objekt mit dem selben Namen ist bereits in der Systemdatenbank vorhanden';
$L['IpRange_CreateIpRange_label'] = 'Erstelle IP Bereich';
$L['IpRangeKey_label'] = 'IP Bereich';
