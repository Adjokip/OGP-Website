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

// add_game_home.php
$lang['add_new_game_home'] = "Ajouter un nouveau serveur de jeux";
$lang['add_mods_note'] = "Vous devez ajouter des mods apr�s avoir assign� le serveur � un utilisateur. Cela peut �tre fait en �ditant le serveur.";
$lang['game_server'] = "Serveur de jeux";
$lang['game_servers'] = "Serveurs de jeux";
$lang['game_type'] = "Jeu";
$lang['game_path'] = "Chemin du jeu";
$lang['game_path_info'] = "Le chemin absolu du serveur. Exemple: /home/ogp/my_server/";
$lang['game_server_name'] = "Nom du serveur de jeux";
$lang['game_server_name_info'] = "Le nom du serveur aide les utilisateurs � identifier leurs serveurs.";
$lang['control_password'] = "Mot de passe de contr�le";
$lang['control_password_info'] = "Ce mot de passe est utilis� pour le contr�le du serveur, comme le RCON. Si le mot de passe est vide, d'autres moyens seront utilis�s.";
$lang['add_game_home'] = "Ajouter un serveur de jeux";
$lang['game_path_empty'] = "Le chemin du jeu ne peut �tre vide.";
$lang['game_home_added'] = "Serveur de jeux ajout� avec succ�s. Redirection vers la page d'�dition du serveur.";
$lang['failed_to_add_home_to_db'] = "Impossible d'ajouter le serveur � la base de donn�es. Erreur: %s";
$lang['caution_agent_offline_can_not_get_os_and_arch_showing_servers_for_all_platforms'] = "<b>Attention !</b> L'agent est hors ligne, impossible de conna�tre l'OS et l'architecture,<br> Voir les serveur pour toutes les plateformes :";
$lang['select_remote_server'] = "S�lectionner le serveur distant";
$lang['no_remote_servers_configured'] = "Aucun serveur distant configur� sous Open Game Panel.<br>Vous devez ajouter un serveur distant avant de pouvoir ajouer des serveurs de jeux.";
$lang['no_game_configurations_found'] = "Aucune configuration de jeux trouv�e. Vous devez ajouter des configurations depuis la";
$lang['game_configurations'] = "page de configuration du jeu";
$lang['add_remote_server'] = "Ajouter un serveur.";
$lang['wine_games'] = "Jeux sous WINE";
$lang[''] = "";
$lang[''] = "";

// edit_games.php
$lang['home_path'] = "Chemin du serveur";
$lang['change_home_info'] = "L'emplacement du serveur de jeux install�. Exemple: /home/ogp/my_server/";
$lang['game_server_name'] = "Nom du serveur de jeux";
$lang['change_name_info'] = "Le nom du serveur pour aider les utilisateurs � l'identifier.";
$lang['game_control_password'] = "Mot de passe de contr�le du jeu";
$lang['change_control_password_info'] = "Le mot de passe de contr�le est par exemple le RCON.";
$lang['available_mods'] = "Mods disponibles";
$lang['note_no_mods'] = "Aucun mods disponible pour ce jeu.";
$lang['change_home'] = "Changer chemin";
$lang['change_control_password'] = "Changer le mot de passe de contr�le";
$lang['change_name'] = "Changer le nom";
$lang['add_mod'] = "Ajouter un mod";
$lang['set_ip'] = "D�finir IP";
$lang['ips_and_ports'] = "IPs et ports";
$lang['mod_name'] = "Nom du mod";
$lang['max_players'] = "Joueurs max";
$lang['extra_cmd_line_args'] = "Arguments suppl�mentaires";
$lang['extra_cmd_line_info'] = "Les arguments suppl�mentaires de la ligne de commande permettent de rajouter des arguments � la ligne de commande de d�marrage.";
$lang['cpu_affinity'] = "Affinit� CPU";
$lang['nice_level'] = "Niveau de priorit� (nice)";
$lang['set_options'] = "D�finir les options";
$lang['remove_mod'] = "Supprimer le mod";
$lang['mods'] = "Mods";
$lang['ip'] = "IP";
$lang['port'] = "Port";
$lang['no_ip_ports_assigned'] = "Au moins une IP:port doit �tre assign�e au serveur.";
$lang['successfully_assigned_ip_port'] = "IP:Port assign� au serveur.";
$lang['port_range_error'] = "Le port doit �tre compris entre 0 et 65535.";
$lang['failed_to_assing_mod_to_home'] = "Impossible d'assigner le mod id %d au serveur.";
$lang['successfully_assigned_mod_to_home'] = "Mod id %d assign� au serveur avec succ�s.";
$lang['successfully_modified_mod'] = "Informations du mod modifi�es avec succ�s.";
$lang['back_to_game_monitor'] = "Revenir � la Gestion des serveurs";
$lang['back_to_game_servers'] = "Revenir aux serveurs de jeux";
$lang['user_id_main'] = "Propri�taire";
$lang['change_user_id_main'] = "Changer le propri�taire";
$lang['change_user_id_main_info'] = "Le propri�taire du serveur.";
$lang['server_ftp_password'] = "Mot de passe FTP";
$lang['change_ftp_password'] = "Changer le mot de passe FTP";
$lang['change_ftp_password_info'] = "Le mot de passe FTP pour ce serveur.";
$lang['Delete_old_user_assigned_homes'] = "Enlever l'utilisateur du serveur.";
$lang['editing_home_called'] = "Editer le serveur";
$lang['control_password_updated_successfully'] = "Mot de passe de contr�le mis � jour avec succ�s.";
$lang['control_password_update_failed'] = "Mise � jour du mot de passe de contr�le impossible";
$lang['successfully_changed_game_server'] = "Serveur de jeux modifi� avec succ�s.";
$lang['error_ocurred_on_remote_server'] = "Erreur sur le serveur distant,";
$lang['ftp_password_can_not_be_changed'] = "le mot de passe FTP ne peut �tre chang�.";
$lang['ftp_can_not_be_switched_on'] = "le FTP ne peut �tre activ�.";
$lang['ftp_can_not_be_switched_off'] = "le FTP ne peut �tre d�sactiv�.";
$lang['invalid_home_id_entered'] = "ID du serveur est invalide.";
$lang['ip_port_already_in_use'] = "L'adresse %s:%s est d�j� utilis�e. Choisissez-en une autre.";
$lang['successfully_assigned_ip_port_to_server_id'] = "Adresse %s:%s assign� au serveur ID %s avec succ�s.";
$lang['no_ip_addresses_configured'] = "Votre serveur de jeu n'a aucune adresse IP configur�e. Vous pouvez en configurer une depuis ";
$lang['server_page'] = "la page serveur";
$lang['successfully_removed_mod'] = "Mod du jeu supprim� avec succ�s.";
$lang['warning_agent_offline_defaulting_CPU_count_to_1'] = "Attention - L'agent est hors ligne, CPU mis � 1.";
$lang['mod_install_cmds'] = "CMDs installation mod";
$lang['cmds_for'] = "Commandes pour";
$lang['preinstall_cmds'] = "Commandes de pr�-installation";
$lang['postinstall_cmds'] = "Commandes de post-installation";
$lang['edit_preinstall_cmds'] = "Editer les commandes de pr�-installation";
$lang['edit_postinstall_cmds'] = "Editer les commandes de post-installation";
$lang['save_as_default_for_this_mod'] = "Mettre par d�faut � ce mod";
$lang['empty'] = "vide";
$lang['master_server_for_clon_update'] = "Serveur ma�tre pour les mises � jour locales";
$lang['set_as_master_server'] = "D�finir comme serveur ma�tre";
$lang['set_as_master_server_for_local_clon_update'] = "D�finir comme serveur ma�tre pour les mises � jour locales.";
$lang['only_available_for'] = "Seulement disponible pour '%s' h�berg� sur le serveur distant '%s'.";
$lang['ftp_on'] = "Activer FTP";
$lang['ftp_off'] = "D�sactiver FTP";
$lang['change_ftp_account_status'] = "Changer le statut du compte FTP";
$lang['change_ftp_account_status_info'] = "Une fois que le compte FTP est activ� ou d�sactiv�, il est ajout� ou supprim� de la base de donn�es PureFTPd.";
$lang['server_ftp_login'] = "Nom d'utilisateur du serveur FTP";
$lang['change_ftp_login_info'] = "Changer le nom d'utilisateur du FTP.";
$lang['change_ftp_login'] = "Changer le nom d'utilisateur FTP";
$lang['ftp_login_can_not_be_changed'] = "Impossible de changer le nom d'utilisateur FTP.";
$lang['server_is_running_change_addresses_not_available'] = "Le serveur est d�marr�. L'IP ne peut donc pas �tre chang�e.";
$lang['change_game_type'] = "Change Game Type";
$lang['change_game_type_info'] = "By changing the game type the current the mods configuration will be deleted.";
$lang['force_mod_on_this_address'] = "Force mod on this address";
$lang['successfully_assigned_mod_to_address'] = "Successfully assigned mod to address";
$lang['switch_mods'] = "Switch mods";
$lang['switch_mod_for_address'] = "Switch mod for address %s";
$lang[''] = "";

// show_games.php
$lang['add_new_game_home'] = "Ajouter un nouveau serveur de jeux";
$lang['no_game_homes_found'] = "Aucun serveur de jeux trouv�";
$lang['available_game_homes'] = "Serveurs de jeux disponibles";
$lang['home_id'] = "ID Serveur";
$lang['game_server'] = "Serveur de jeux";
$lang['game_type'] = "Type de jeu";
$lang['game_home'] = "serveur de jeux";
$lang['game_home_name'] = "Nom du serveur de jeux";
$lang['actions'] = "Actions";
$lang['edit'] = "Editer";
$lang['clone'] = "Cloner";

// assign_games.php
$lang['unassign'] = "D�sassigner";
$lang['access_rights'] = "Droits d'acc�s";
$lang['assigned_homes'] = "Serveurs d�j� assign�s";
$lang['assign'] = "Assigner";
$lang['allow_updates'] = "Autoriser les mises � jour";
$lang['allow_updates_info'] = "Autorise l'utilisateur � mettre � jour le serveur de jeux.";
$lang['allow_file_management'] = "Gestionnaire de fichiers";
$lang['allow_file_management_info'] = "Donne l'acc�s � l'utilisateur au gestionnaire de fichiers.";
$lang['allow_parameter_usage'] = "Autoriser l'usage des param�tres";
$lang['allow_parameter_usage_info'] = "Autorise l'utilisateur � changer les param�tres de la ligne de commande.";
$lang['allow_extra_params'] = "Autoriser les param�tres suppl�mentaires";
$lang['allow_extra_params_info'] = "Autorise l'utilisateur � modifier les param�tres suppl�mentaires de la ligne de commande.";
$lang['allow_ftp'] = "Autoriser le FTP";
$lang['allow_ftp_info'] = "Autorise l'utilisateur � acc�der � son cmpte FTP et modifier ses informations.";
$lang['allow_custom_fields'] = "Allow Custom Fields";
$lang['allow_custom_fields_info'] = "Allows user to access custom fields of the game server if any.";
$lang['select_home'] = "S�lectionner un serveur � assigner";
$lang['assign_new_home_to_user'] = "Assigner un nouveau serveur � l'utilisateur %s";
$lang['assign_new_home_to_group'] = "Assigner un nouveau serveur au groupe %s";
$lang['assigned_home_to_user'] = "Serveur (ID %d) assign� � l'utilisateur %s avec succ�s.";
$lang['assigned_home_to_group'] = "Serveur (ID %d) assign� au groupe %s avec succ�s.";
$lang['unassigned_home_from_user'] = "Serveur (ID %d) d�sassign� de l'utilisateur %s avec succ�s.";
$lang['unassigned_home_from_group'] = "Serveur (ID %d) d�sassign� du groupe %s avec succ�s.";
$lang['no_homes_assigned_to_user'] = "Aucun serveur assign� � l'utilisateur %s.";
$lang['no_homes_assigned_to_group'] = "Aucun serveur assign� au groupe %s.";
$lang['no_more_homes_available_that_can_be_assigned_for_this_user'] = "Il n'y a plus de serveur disponible pour cet utilisateur";
$lang['no_more_homes_available_that_can_be_assigned_for_this_group'] = "Il n'y a plus de serveur disponible pour cet utilisateur";
$lang['you_can_add_a_new_game_server_from'] = "Vous pouvez ajouter un nouveau serveur de jeux depuis %s.";
$lang['no_remote_servers_available_please_add_at_least_one'] = "Il n'y a pas de serveur distant disponible, rajoutez-en au moins un !";
$lang[''] = "";
$lang[''] = "";


// clone_home.php
$lang['cloning_of_home_failed'] = "Clonage du serveur id '%s' impossible.";
$lang['no_mods_to_clone'] = "Aucun mod activ� pour ce jeu. Impossible de cloner.";
$lang['failed_to_add_mod'] = "Impossible de rajouter le mod id '%s' au serveur id '%s'.";
$lang['failed_to_update_mod_settings'] = "Impossible de mettre � jour les param�tres du mod pour le serveur id '%s'.";
$lang['successfully_cloned_mods'] = "Mod clon� avec succ�s pour le serveur id '%s'.";
$lang['successfully_copied_home_database'] = "Serveur copi� avec succ�s.";
$lang['copying_home_remotely'] = "Copie du serveur sur le serveur distant de '%s' vers '%s'.";
$lang['cloning_home'] = "Cloange du serveur '%s'";
$lang['current_home_path'] = "Chemin du serveur actuel";
$lang['current_home_path_info'] = "L'emplacement actuel du serveur qui doit �tre copi� sur le serveur distant.";
$lang['clone_home'] = "Cloner serveur";
$lang['new_home_name'] = "Nom du nouveau serveur";
$lang['new_home_path'] = "Chemin du nouveau serveur";
$lang['agent_ip'] = "IP de l'agent";
$lang['game_server_copy_is_running'] = "Copie du serveur de jeux en cours...";
$lang['game_server_copy_was_successful'] = "Copie du serveur de jeux effectu�e avec succ�s";
$lang['game_server_copy_failed_with_return_code'] = "Copie du serveur de jeux impossible. Erreur %s";
$lang['clone_mods'] = "Cloner mods";
$lang['game_server_owner'] = "Propri�taire du serveur de jeux";
$lang['the_name_of_the_server_to_help_users_to_identify_it'] = "Le nom du serveur pour aider les utilisateurs � l'identifier.";
$lang['ips_and_ports_used_in_this_home'] = "IPs et Ports utilis�s pour ce serveur";
$lang['note_ips_and_ports_are_not_cloned'] = "Note - Les IPs et les ports ne sont pas clon�s";
$lang['mods_and_settings_for_this_game_server'] = "Les mods et les param�tres pour ce serveur de jeux";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";

// del_home.php

$lang['sure_to_delete_serverid_from_remoteip_and_directory'] = "Etes-vous s�r de vouloir supprimer le serveur de jeux (ID : %s) du serveur %s et son r�pertoire %s";
$lang['yes_and_delete_the_files'] = "Oui et supprimer tous les fichiers";
$lang['failed_to_remove_gamehome_from_database'] = "Impossible de supprimer le serveur de jeux de la base de donn�es.";
$lang['successfully_deleted_game_server_with_id'] = "Serveur de jeux (ID : %s) supprim� avec succ�s.";
$lang['failed_to_remove_ftp_account_from_remote_server'] = "Impossible de supprimer le compte FTP sur le serveur distant.";
$lang['remove_it_anyway'] = "Voulez-vous le supprimer quand m�me ?";
$lang['successfully_deleted_game_server_with_id'] = "Serveur de jeux id %s supprim� avec succ�s.";
$lang['sucessfully_deleted'] = "%s supprim� avec succ�s";
$lang['the_agent_had_a_problem_deleting'] = "L'agent a eu un probl�me en supprimant %s, v�rifiez le log de l'agent";
$lang['connection_timeout_or_problems_reaching_the_agent'] = "Timeout sur la connexion ou probl�mes en se connectant � l'agent";
$lang[''] = "";
$lang[''] = "";

// get_size.php
$lang['does_not_exist_yet'] = "Does not exist yet.";

// Custom fields
$lang['go_to_custom_fields'] = "Go to Custom Fields";
$lang['back_to_edit_server'] = "Back to edit server";
$lang['update_settings'] = "Update settings";
$lang['settings_updated'] = "Settings updated.";
?>
