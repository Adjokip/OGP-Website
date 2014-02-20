<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) Copyright (C) 2008 - 2013 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

// settings.php

$lang['panel_name'] = "Panel neve";
$lang['settings'] = "Be�ll�t�sok";
$lang['maintenance_mode'] = "Karbantart�s";
$lang['maintenance_mode_info'] = "Egy �zenet lesz megjelen�tve a norm�l felhaszn�l�knak a karbantart�s alatt.";
$lang['maintenance_title'] = "Maintenance Title";
$lang['maintenance_title_info'] = "The title that is displayed to normal users during maintenance.";
$lang['maintenance_message'] = "�zenet";
$lang['maintenance_message_info'] = "Ez az �zenet lesz megjelen�tve a felhaszn�l�knak a karbantart�s alatt.";
$lang['update_settings'] = "Be�ll�t�sok friss�t�se";
$lang['settings_updated'] = "Be�ll�t�sok sikeresen friss�tve.";
$lang['panel_language'] = "Nyelv";
$lang['panel_language_info'] = "A panel alap�rtelmezett nyelve. A felhaszn�l�k meg tudj�k v�ltoztatni a saj�t nyelv�kre a profil be�ll�t�sokban.";
$lang['page_auto_refresh'] = "Oldal automatikus friss�t�se";
$lang['page_auto_refresh_info'] = "Az oldal automatikus friss�t�se kikapcsolhat� debuggol�si c�lb�l. Norm�l haszn�lat eset�n �rdemes bekapcsolni.";
$lang['smtp_server'] = "Kimeno email szerver";
$lang['smtp_server_info'] = "Ez a szerver lesz haszn�lva a kimeno leveleknek (SMTP szerver), p�ld�ul az elfelejtett jelszavak kik�ld�s�hez, localhost alap�rtelmez�s szerint.";
$lang['panel_email_address'] = "Kimeno levelek k�ldoje";
$lang['panel_email_address_info'] = "Ez az email c�m lesz haszn�lva a kimeno levelek k�ldojek�nt.";
$lang['feed_enable'] = "LGSL feed";
$lang['feed_url'] = "feed URL";
$lang['feed_url_info'] = "GrayCube.com megosztja a LGSL feed URL:<br><b>http://www.greycube.co.uk/lgsl/feed/lgsl_files/lgsl_feed.php</b>";
$lang['charset'] = "Karakterk�dol�s";
$lang['charset_info'] = "UTF8, ISO, ASCII, stb .. hagyta �resen az ISO k�dol�st.";
$lang['steam_user'] = "Steam User";
$lang['steam_user_info'] = "This user is needed to log in to steam for download some new games like CS:GO.";
$lang['steam_pass'] = "Steam Password";
$lang['steam_pass_info'] = "Set here the steam account password.";
$lang['steam_guard'] = "Steam Guard Code";
$lang['steam_guard_info'] = "Some users have steam guard activated to protect their accounts from hackers,<br>this code is sent to the account email when the first steam update is started.";
$lang['smtp_port'] = "SMTP Port";
$lang['smtp_port_info'] = "If SMTP port is not the default port (25) Enter the SMTP port here.";
$lang['smtp_login'] = "SMTP User";
$lang['smtp_login_info'] = "If your SMTP server requires authentication, enter your user name here.";
$lang['smtp_passw'] = "SMTP Password";
$lang['smtp_passw_info'] = "If you do not set a password the SMTP authentication will be disabled.";
$lang['smtp_ssl'] = "SMTP SSL";
$lang['smtp_ssl_info'] = "Use SSL to connect to the SMTP server";
$lang['time_zone'] = "Time Zone";
$lang['query_cache_life'] = "Query cache life";
$lang['query_cache_life_info'] = "Sets the timeout in seconds before the server status is refreshed.";
$lang['query_num_servers_stop'] = "Disable Game Server Queries After";
$lang['query_num_servers_stop_info'] = "Use this setting to disable queries if a user owns more game servers than this amount specified to speed up panel loading.";
$lang['editable_email'] = "Editable E-Mail Address";
$lang['editable_email_info'] = "Select if users can edit their e-mail address or not.";
$lang['old_dashboard_behavior'] = "Old Dashboard behavior";
$lang['old_dashboard_behavior_info'] = "The old Dashboard was running slower but shows more server information, current players and map.";
$lang['rsync_available'] = "Available rsync servers";
$lang['rsync_available_info'] = "Select what servers list will be shown in the rsync installation.";
$lang['all_available_servers'] = "All available servers ( rsync_sites.list + rsync_sites_local.list )";
$lang['only_remote_servers'] = "Only remote servers ( rsync_sites.list )";
$lang['only_local_servers'] = "Only local servers ( rsync_sites_local.list )";
$lang['header_code'] = "Header code";
$lang['header_code_info'] = "Here you can write your own header code (like HTML code, Embed Code etc.) without editing the theme layout.";
$lang[''] = "";

// Theme settings
$lang['theme_settings'] = "T�ma be�ll�t�sok";
$lang['themes'] = "T�ma be�ll�t�sok";
$lang['theme'] = "Kin�zet";
$lang['theme_info'] = "A kiv�lasztott kin�zet lesz az alapbe�ll�t�s minden felhaszn�l�nak. A felhaszn�l�k meg tudj�k v�ltoztatni ezt a be�ll�t�st a profil oldalukon.";
$lang['welcome_title'] = "�dv�z�lj�k c�me";
$lang['welcome_title_info'] = "Lehetov� teszi, hogy a c�m jelenik meg a muszerfalra.";
$lang['welcome_title_message'] = "�dv�z�lj�k C�m �zenet";
$lang['welcome_title_message_info'] = "A c�m �zenet jelenik meg a muszerfalra (HTML nem enged�lyezett).";
$lang['logo_link'] = "Logos Link";
$lang['logo_link_info'] = "The logos hyperlink. <b style='font-size:10px; font-weight:normal;'>(Leaving it blank will link it to the Dashboard)</b>";
$lang['custom_tab'] = "Custom Tab";
$lang['custom_tab_info'] = "Adds a customisable tab at the end of the menu. <b style='font-size:10px; font-weight:normal;'>(Apply and refresh this page to edit tab settings)</b>";
$lang['custom_tab_name'] = "Custom Tab Name";
$lang['custom_tab_name_info'] = "The tabs display name.";
$lang['custom_tab_link'] = "Custom Tab Link";
$lang['custom_tab_link_info'] = "The tabs hyperlink.";
$lang['custom_tab_sub'] = "Custom Sub-Tabs";
$lang['custom_tab_sub_info'] = "Adds customisable sub-tabs when hovering over the 'Custom Tab'.";
$lang['custom_tab_sub_name'] = "Sub-Tab #1 Name";
$lang['custom_tab_sub_link'] = "Sub-Tab #1 Link";
$lang['custom_tab_sub_name2'] = "Sub-Tab #2 Name";
$lang['custom_tab_sub_link2'] = "Sub-Tab #2 Link";
$lang['custom_tab_sub_name3'] = "Sub-Tab #3 Name";
$lang['custom_tab_sub_link3'] = "Sub-Tab #3 Link";
$lang['custom_tab_sub_name4'] = "Sub-Tab #4 Name";
$lang['custom_tab_sub_link4'] = "Sub-Tab #4 Link";
$lang['custom_tab_target_blank'] = "Custom Tabs Target";
$lang['custom_tab_target_blank_info'] = "Sets all the tabs target. <b style='font-size:10px; font-weight:normal;'>('_self' = Opens link on same page. '_blank'  =  Opens link on new tab.)</b>";
$lang['bg_wrapper'] = "Wrapper Background";
$lang['bg_wrapper_info'] = "The wrappers background image. <b style='font-size:10px; font-weight:normal;'>(Only available on Revolution themes.)</b>";

?>
