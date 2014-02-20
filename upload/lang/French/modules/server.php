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

// servers.php
$lang['add_new_remote_host'] = "Ajouter un nouveau h�te distant";
$lang['configured_remote_hosts'] = "H�te distant configur�";
$lang['remote_host'] = "H�te distant";
$lang['remote_host_info'] = "L'h�te distant doit avoir un nom d'h�te (hostname) pingable !";
$lang['remote_host_port'] = "Port de l'h�te distant";
$lang['remote_host_port_info'] = "Le port depuis lequel l'agent OGP �coute sur l'h�te distant. D�faut: 12679.";
$lang['remote_host_name'] = "Nom de l'h�te distant";
$lang['remote_host_name_info'] = "Le nom de l'h�te distant sera utiliser pour faciliter sa reconnaissance dans tout le panneau.";
$lang['add_remote_host'] = "Ajouter un h�te distant";
$lang['offline'] = "Hors ligne";
$lang['online'] = "En ligne";
$lang['remote_encryption_key'] = "Cl� de chiffrement distante";
$lang['remote_encryption_key_info'] = "La cl� de chiffrement distante est utilis� pour crypter les donn�es entre le panneau et l'h�te distant.<br>Cette cl� doit �tre la m�me sur les deux machines.";
$lang['server_name'] = "Nom du serveur";
$lang['agent_ip_port'] = "IP:Port de l'agent";
$lang['encryption_key'] = "Cl� de chiffrement";
$lang['agent_status'] = "Statut de l'agent";
$lang['ips'] = "IPs";
$lang['add_more_ips'] = "Si vous voulez entrer plus d'IPs, cliquez sur 'D�finir IPs' quand tous les champs sont remplis et un champ vide appara�tra.";
$lang['encryption_key_mismatch'] = "La cl� de chiffrement ne correspond pas � celle de l'agent. V�rifiez vos fichiers de configuration.";
$lang['no_ip_for_remote_host'] = "Vous devez ajouter au moins une (1) adresse IP pour chaque h�te distant.";
$lang['note_remote_host'] = "Un h�te distant est un serveur o� l'agent OGP tourne. Chaque h�te peut avoir plusieurs adresses IPs que les utilisateurs utiliserons pour leurs serveurs de jeux";
$lang['ip_administration'] = "Serveur &amp; IP Administration :: Open Game Panel";
$lang['unknown_error'] = "Erreur inconnue - status_chk a retourn�";
$lang['remote_host_user_name'] = "Utilisateur UNIX";
$lang['remote_host_user_name_info'] = "Utilisateur qui fait tourner l'agent. Exemple: Jonhy";
$lang['ogp_user'] = $lang['remote_host_user_name'];
$lang['ogp_user_info'] = $lang['remote_host_user_name_info'];
$lang['remote_host_ftp_ip'] = "IP FTP";
$lang['remote_host_ftp_ip_info'] = "Le <b>IP</b> du serveur FTP pour cet agent.";
$lang['remote_host_ftp_port'] = "Port FTP";
$lang['remote_host_ftp_port_info'] = "Le <b>port</b> du serveur FTP pour cet agent.";
$lang['view_log'] = "Voir le log";
$lang['ufw'] = "UFW";
$lang['status'] = "Statut";
$lang['stop_firewall'] = "Arr�ter le pare-feu (firewall)";
$lang['start_firewall'] = "D�marrer le pare-feu (firewall)";
$lang['seconds'] = "Secondes";

// edit_server.php
$lang['invalid_remote_host_id'] = "ID '%s' de l'h�te distant invalide.";
$lang['remote_host_removed'] = "H�te distant '%s' supprim� avec succ�s.";
$lang['editing_remote_server'] = "Edition de l'h�te distant '%s'";
$lang['remote_server_settings_changed'] = "Changement des param�tres pour le serveur distant '%s' effectu� avec succ�s.";
$lang['save_settings'] = "Sauvegarder les param�tres";
$lang['set_ips'] = "D�finir IPs";
$lang['remote_ip'] = "IP distante";
$lang['remote_ips_for'] = "IPs distantes pour le serveur '%s'";
$lang['ips_set_for_server'] = "IPs pour le serveur '%s' d�finies avec succ�s.";
$lang['could_not_remove_ip'] = "Impossible de supprimer l'IP de la base de donn�es.";
$lang['could_add_ip'] = "Peut ajouter l'IP du serveur distant � la base de donn�es.";
$lang['areyousure_removeagent'] = "Etes-vous s�r de vouloir supprimer l'agent";
$lang['areyousure_removeagent2'] = "et tous les serveurs qui lui sont reli�s dans la base de donn�es OGP ?";
$lang['error_while_remove'] = "Erreur lors de la suppresion du serveur distant.";
$lang['add_ip'] = "Ajouer IP";
$lang['remove_ip'] = "Supprimer IP";
$lang['edit_ip'] = "Editer IP";
$lang['wrote_changes'] = "Changement effectu� avec succ�s.";
$lang['there_are_servers_running_on_this_ip'] = "Il y a des serveurs d�marr�s avec cette adresse IP.";

// add_server.php
$lang['enter_ip_host'] = "Vous devez entrer une IP pour l'h�te distant.";
$lang['enter_valid_ip'] = "Vous devez entrer un port valide pour l'h�te distant. La valeur du port peut �tre comprise entre 0 et 65535, cependant les valeurs recommand�es sont celles comprises entre 1024 et 65535.";
$lang['could_not_add_server'] = "Impossible d'ajouter le serveur";
$lang['to_db'] = "� la base de donn�es.";
$lang['added_server'] = "Serveur ajout�";
$lang['with_port'] = "avec le port";
$lang['to_db_succesfully'] = "dans la base de donn�es avec succ�s.";
$lang['unable_discover'] = "Impossible de d�couvrir automatiquement les IPs sur";
$lang['set_ip_manually'] = "Vous devez les entrer manuellement.";
$lang['found_ips'] = "IPs trouv�s";
$lang['for_remote_server'] = "pour le serveur distant.";
$lang['failed_add_ip'] = "Impossible d'ajouter l'IP";
$lang['timeout'] = "Time Out";
$lang['timeout_info'] = "Secondes. La limite de temps pour avoir une r�ponse de l'agent.";
$lang['seconds'] = "secondes";
$lang['use_nat'] = "Utiliser le NAT";
$lang['use_nat_info'] = "Activez le si votre serveur distant utlise les r�gles NAT.";

// arrange_servers.php
$lang['arrange_ports'] = "Arrange ports";
$lang['assign_new_ports_range_for_ip'] = "Assign new ports range for IP %s";
$lang['assigned_port_ranges_for_ip'] = "Assigned port ranges for IP %s";
$lang['assigned_ports_for_ip'] = "Assigned ports for IP %s";
$lang['unspecified_game_types'] = "Unspecified game types";
$lang['start_port'] = "Start port:";
$lang['end_port'] = "End port:";
$lang['port_increment'] = "Port increment:";
$lang['total_assignable_ports'] = "Total assignable ports:";
$lang['available_range_ports'] = "Available range ports:";
$lang['assign_range'] = "Assign range";
$lang['edit_range'] = "Edit range";
$lang['delete_range'] = "Delete range";
$lang['home_id'] = "Home ID";
$lang['seconds'] = "seconds";
$lang['home_path'] = "Home path";
$lang['game_type'] = "Game type";
$lang['port'] = "Port";
$lang['invalid_values'] = "Invalid values.";
$lang['ports_in_range_already_arranged'] = "Ports in range already arranged.";
$lang['ports_range_already_configured_for'] = "Ports range already configured for %s.";
$lang['ports_range_added_successfull_for'] = "Ports range added successfull for %s.";
$lang['ports_range_deleted_successfull'] = "Ports range deleted successfull.";
$lang['ports_range_edited_successfull_for'] = "Ports range edited successfull for %s.";

?>