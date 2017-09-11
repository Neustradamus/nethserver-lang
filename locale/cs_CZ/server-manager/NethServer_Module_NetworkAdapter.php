<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'Přiřazení IP adres';
$L['bootproto_none_label'] = 'Statické';
$L['blue_label'] = 'Hosté (modrá)';
$L['device_label'] = 'Zařízení';
$L['gateway_label'] = 'Brána';
$L['green_label'] = 'LAN (green)';
$L['hwaddr_label'] = 'MAC adresa';
$L['ipaddr_label'] = 'IP adresa';
$L['orange_label'] = 'DMZ (oranžová)';
$L['Key_label'] = 'Zařízení';
$L['netmask_label'] = 'Maska sítě';
$L['NetworkAdapter_Description'] = 'Změnit nastavení sítě';
$L['NetworkAdapter_Tags'] = 'sítě tohoto ethernetového rozhraní';
$L['NetworkAdapter_Title'] = 'Síť';
$L['red_label'] = 'Internet (červená)';
$L['role_label'] = 'Úloha';
$L['update_header_label'] = 'Aktualizovat zařízení';
$L['interface-config_label'] = 'Nastavení rozhraní';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP protokol je možné použít pouze na rozhraních, spadajících do červené a zelené kategorie";
$L['valid_platform,interface-config,interface-role,4'] = "Není možné smazat poslední rozhraní, spadající do zelené kategorie";
$L['No'] = 'Ne';
$L['Yes'] = 'Ano';
$L['type_alias_label'] = 'Alternativní název';
$L['type_bridge_label'] = 'Most';
$L['type_bond_label'] = 'Bond';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Nastavit přiřazení IP adres – ${0}';
$L['CreateLogicalInterface_label'] = 'Nové logické rozhraní';
$L['CreateLogicalInterface_header'] = 'Nové logické rozhraní';
$L['vlanTag_label'] = 'Značka (tag)';
$L['vlan_label'] = 'Rozhraní';
$L['InterfaceType_label'] = 'Typ';
$L['Next_label'] = 'Další';
$L['Back_label'] = 'Zpět';
$L['Edit_label'] = 'Upravit';
$L['Edit_header'] = 'Upravit ${dev} – ${bus} ${model}';
$L['Edit_description'] = "Stav linky je \${link}\nSpeed \${speed} Mbit/s\nDriver \${driver}\nMAC adresa \${mac}";
$L['Link_status_up'] = 'funkční';
$L['Link_status_down'] = 'nefunkční';
$L['Link_status_na'] = 'neaplikovatelné';
$L['speed_label'] = 'Rychlost ${0}';
$L['Confirm_header'] = 'Vytvořit ${role} rozhraní ${device}';
$L['Action_create_bridge'] = 'Create a new bridge interface ${device} with ${parts}';
$L['Action_create_bond'] = 'Create a new ${bondMode} bond interface ${device} with ${parts}';
$L['Action_create_vlan'] = 'Create a new VLAN interface ${device} on ${parts}';
$L['Action_create_role'] = 'Nastavit roli na „${role}“';
$L['Action_set_static_ip'] = 'Nastavit statickou IP adrsu ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Získat nastavení IP adresy z DHCP serveru';
$L['Action_use_gateway'] = 'Použít bránu ${gateway}';
$L['Action_use_no_gateway'] = 'Nenastavovat bránu';
$L['Create_label'] = 'Vytvořit rozhraní';
$L['bridged_label'] = 'Přemostěné';
$L['slave_label'] = 'Podřízené';
$L['CreateIpAlias_header'] = 'Create IP alias "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Vydání ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Release role ${role} assigned to physical interface ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Remove ${device} from bond ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Odebrat ${device} ze síťového mostu ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Smazat';
$L['DeleteLogicalInterface_header'] = 'Potvrďte smazání ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Deleting bond interface \${device}.\nPick a successor from its slave interfaces to give it the current role and IP settings.";
$L['DeleteLogicalInterface_bridge_message'] = "Deleting bridge interface \${device}.\nPick a successor from the bridged interfaces to give it the current role and IP settings.";
$L['DeleteLogicalInterface_vlan_message'] = "Confirm deletion of VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Confirm deletion of alias \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Poznámky k vydání';
$L['Release_label'] = 'Poznámky k vydání';
$L['CleanPhysicalInterface_label'] = 'Smazat';
$L['CreateIpAlias_label'] = 'Create IP alias';
$L['successor_label'] = 'Následovník';
$L['NoSuccessor_label'] = 'Žádné';
$L['bond_label'] = 'Bond';
$L['bridge_label'] = 'Most';
$L['alias_label'] = 'Alternativní název';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Přiřadit role fyzickým síťovým rozhraním';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Fyzická rozhraní';
$L['CleanPhysicalInterface_header'] = 'Odebrat ${0}';
$L['Confirm device ${0} removal'] = 'Odebrat zařízení ${0} z databáze?';
$L['Clean_label'] = 'Odebrat';
$L['Refresh_label'] = 'Zjistit aktuální stav spojení';
$L['roleis_label'] = 'úloha';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Model ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Veškeré úlohy jsou správně přiřazeny síťovým rozhraním.';
$L['type_xdsl_label'] = 'PPPoE na ppp0';
$L['xdsl_label'] = 'PPPoE';
$L['PppoeUser_label'] = 'Uživatelské jméno';
$L['PppoePassword_label'] = 'Heslo';
$L['PppoeInterface_label'] = 'Ethernetové rozhraní';
$L['PppoeProvider_label'] = 'Poskytovatel';
$L['pppoe_label'] = 'PPPoE (red)';
$L['SetPppoeParameters_label'] = 'Nastavit PPPoE';
$L['SetPppoeParameters_header'] = 'Nastavit PPPoE zařízení ppp0';
$L['ReleasePhysicalInterface_pppoe_message'] = "Release PPPoE red role from \${device}?\nThe associated ppp0 device will be also removed.";
$L['DeleteLogicalInterface_xdsl_message'] = "Remove the logical PPPoE device ppp0?";
$L['valid_pppoe_already_configured'] = 'The PPPoE device ppp0 is already configured';
$L['valid_pppoe_red_role_only'] = 'The PPPoE device ppp0 must be assigned the red role';
$L['PppoeAuthType_label'] = 'Typ ověřování';
$L['AuthType_auto'] = 'Automatické';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';
$L['bondMode_label'] = 'Režim';
$L['BondMode_0_label'] = 'balance round robin';
$L['BondMode_1_label'] = 'aktivní záloha';
$L['BondMode_2_label'] = 'balance XOR';
$L['BondMode_3_label'] = 'všesměrové vysílání (broadcast)';
$L['BondMode_4_label'] = '802.3ad';
$L['BondMode_5_label'] = 'balance TLB';
$L['BondMode_6_label'] = 'balance ALB';
$L['red_label'] = 'Internet (červená)';
$L['multiwan_label'] = 'Multi WAN';
$L['Weight_label'] = 'Link weight';
$L['ProviderName_label'] = 'Název spojení';
$L['UpstreamProxy_label'] = 'Nastavení proxy';
$L['DNS_label'] = 'DNS servery';
$L['trafficshaping_label'] = 'Omezování rychlosti síťového provozu';
$L['FwInBandwidth_label'] = 'Rychlost příjmu (kb/s)';
$L['FwOutBandwidth_label'] = 'Rychlost odesílání (kb/s)';
$L['valid_platform,logical-interface-create,dhcp-conflicts,3'] = 'Some interfaces have DHCP ranges associated: they must be fixed manually from the DHCP page';