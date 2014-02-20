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

$lang['your_profile'] = "Votre profil";
$lang['new_password'] = "Nouveau mot de passe";
$lang['retype_new_password'] = "V�rification du nouveau mot de passe";
$lang['login_name'] = "Nom d'utilisateur";
$lang['language'] = "Langue";
$lang['first_name'] = "Pr�nom";
$lang['last_name'] = "Nom";
$lang['phone_number'] = "Num�ro de t�l�phone";
$lang['email_address'] = "E-mail";
$lang['city'] = "Ville";
$lang['province'] = "Province";
$lang['country'] = "Pays";
$lang['comment'] = "Commentaire";
$lang['expires'] = "Expire";
$lang['save_profile'] = "Sauvegarder le profil";
$lang['new_password_info'] = "Quand le champ mot de passe est vide, le mot de passe ne sera pas mis � jour.";
$lang['theme'] = "Th�me";
$lang['theme_info'] = "Si le champ th�me est vide, le th�me par d�faut sera utilis�.";
$lang['expires_info'] = "Date � laquelle le compte utilisateur expire. Le compte n'est pas supprim� mais l'utilisateur ne peut plus se connecter.";

$lang['password_mismatch'] = "Les mots de passe ne correspondent pas";

$lang['current_password'] = "Mot de passe actuel";
$lang['current_password_info'] = "Votre mot de passe actuel.";
$lang['current_password_mismatch'] = "Votre mot de passe actuel ne correspond pas avec celui de la base de donn�s.";

// show_users.php
$lang['add_new_user'] = "Ajouter un nouvel utilisateur";
$lang['edit_user_groups'] = "Editer un groupe d'utilisateurs";
$lang['users'] = "Utilisateurs";
$lang['username'] = "Nom d'utilisateur";
$lang['user_role'] = "R�le utilisateur";
$lang['full_name'] = "Nom complet";
$lang['edit_games'] = "Editer les jeux";
$lang['edit_profile'] = "Editer le profil";
$lang[''] = "";

// add_user.php
$lang['confirm_password'] = "Confirmez le mot de passe";
$lang['you_need_to_enter_both_passwords'] = "Vous devez entrer votre mot de passe deux fois.";
$lang['passwords_did_not_match'] = "Les mots de passes ne correspondent pas.";
$lang['could_not_add_user_because_user_already_exists'] = "Impossible de rajouter l'utilisateur car l'utilisateur <em>%s</em> existe d�j�.";
$lang['successfully_added_user'] = "Utilisateur <em>%s</em> ajout� avec succ�s.";
$lang['add_a_new_user'] = "Ajouter un nouvel utilisateur";
$lang['admin'] = "Administrateur";
$lang['user'] = "Utilisateur";
$lang['add_user'] = "Ajouter l'utilisateur";
$lang['user_with_id_does_not_exist'] = "Utilisateur avec l'ID %s n'existe pas.";
$lang['are_you_sure_you_want_to_delete_user'] = "Etes-vous s�r de vouloir supprimer l'utilisateur <em>%s</em> ?";
$lang['unable_to_delete_user'] = "Impossible de supprimer l'utilisateur %s.";
$lang['successfully_deleted_user'] = "Suppression de l'utilisateur <b>%s</b> effectu�e avec succ�s.";
$lang['failed_to_update_user_profile_error'] = "Impossible de mettre � jour le profil utilisateur. Erreur: %s";
$lang['profile_of_user_modified_successfully'] = "Le profil de l'utilisation <b>%s</b> a �t� modifi� avec succ�s.";
$lang[''] = "";
$lang[''] = "";

// subuser used in show_groups.php
$lang['no_subusers'] = "Aucun utilisateur secondaire n'est disponible pour �tre assign� � un groupe. Cr�ez des utilisateurs secondaires d'abord.";
$lang['ownedby'] = "Compte parent";
$lang['andSubUsers'] = " Et tous ces utilisateurs secondaires ?"; 

// *_group.php
$lang['info_group'] = "Sur cette page il est possible de g�rer les groupes d'utilisateurs. Vous pouvez asssigner un serveur � un groupe pour qu'il soit accessible par tout le groupe.";
$lang['add_new_group'] = "Ajouter un nouveau groupe";
$lang['group_name'] = "Nom du groupe";
$lang['add_group'] = "Ajouter le groupe";
$lang['no_groups_available'] = "Aucun groupe disponible.";
$lang['delete_group'] = "Supprimer le groupe";
$lang['add_user_to_group'] = "Ajouter un utilisateur au groupe";
$lang['add_user'] = "Ajouter l'utilisateur";
$lang['remove_from_group'] = "Supprimer du groupe";
$lang['add_server_to_group'] = "Ajouter un serveur au groupe";
$lang['add_server'] = "Ajouter le serveur";
$lang['no_remote_servers'] = "Aucun serveur distant disponible.";
$lang['servers_in_group'] = "Serveurs du groupe";
$lang['no_servers_in_group'] = "Aucun serveur pour le groupe %s.";
$lang['available_groups'] = "Groupes disponibles";
$lang['assign_homes'] = "Assigner un serveur";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";

// add_group.php
$lang['successfully_added_group'] = "Groupe %s ajout� avec succ�s.";
$lang['group_name_empty'] = "Le nom du groupe ne peut �tre vide.";
$lang['failed_to_add_group'] = "Impossible d'ajouter le groupe %s.";
$lang['could_not_add_user_to_group'] = "Impossible d'ajouter l'utilisateur %s au groupe %s car il y est d�j�.";
$lang['successfully_added_to_group'] = "Utilisateur %s ajout� au groupe <em>%s</em> avec succ�s.";
$lang['could_not_add_server_to_group'] = "Impossible d'ajouter le serveur au groupe %s car il y est d�j�.";
$lang['successfully_added_server_to_group'] = "Serveur ajout� au groupe <em>%s</em> avec succ�s.";
$lang['successfully_removed_from_group'] = "Utilisateur %s supprim� du groupe <em>%s</em> avec succ�s.";
$lang['could_not_delete_server_from_group'] = "Impossible de supprimer le serveur %s du groupe <em>%s</em>.";
$lang['successfully_removed_server_from_group'] = "Serveur %s supprim� du groupe <em>%s</em> avec succ�s.";
$lang['group_with_id_does_not_exist'] = "L'utilisateur avec l'ID %s n'existe pas.";
$lang['are_you_sure_you_want_to_delete_group'] = "Etes-vous s�r de vouloir supprimer le groupe <em>%s/em> ?";
$lang['unable_to_delete_group'] = "Impossible de supprimer le groupe %s.";
$lang['successfully_deleted_group'] = "Groupe <b>%s</b> supprim� avec succ�s.";
$lang[''] = "";
$lang[''] = "";



?>
