
##################################################################################

MyBlog.com est un blog qui présente la technologie Laravel à travers les pages :
" Accueil, A propos et Build With Laravel. "
#Mise en évidence de:
_routage et vues
_moteur de Template blade

Le button "Me contacter" permet aux visiteurs d'envoyer des messages au bloggeur pour 'éventuelles questions ou autres propos. Une copie du mail est enregistrée dans la base de données et envoyé aussi sur le mail online de l'administrateur.
#Mise en évidence de:
_formulaire, contrôle et validation, 
_envoi de mails,
_file d'attente des mails
_un système de migration pour les bases de données,

L'admin peut se loguer en accédant à l'url "/admin" où il fournira les données d'authentification. Il a tableau d'affichage où il peut aussi lire les messages des visiteurs, puis de les supprimer. Et enfin, ajouter d'autres admins.
#Mise en évidence de:
_un créateur de requêtes SQL (CRUD) et un ORM performants,
_un système d'authentification pour les connexions,
_une gestion des sessions


#details_de_la_bd
SGBD: MySQL
Nom bd: laracarte
Utilisateur: root
Mot de passe:

#technologies web utilisées
_Bootstrap 3 & 4, 

#données d'authentification
User: test@test.fr
Password: admin


##################################################################################

Dans la prochaine version, 
*permettre à l'admin de répondre aux visiteurs depuis le site
*afficher les autres admins et pouvoir les Update-Delete