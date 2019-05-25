
##################################################################################

MyBlog.com est un blog qui pr�sente la technologie Laravel � travers les pages :
" Accueil, A propos et Build With Laravel. "
#Mise en �vidence de:
_routage et vues
_moteur de Template blade

Le button "Me contacter" permet aux visiteurs d'envoyer des messages au bloggeur pour '�ventuelles questions ou autres propos. Une copie du mail est enregistr�e dans la base de donn�es et envoy� aussi sur le mail online de l'administrateur.
#Mise en �vidence de:
_formulaire, contr�le et validation, 
_envoi de mails,
_file d'attente des mails
_un syst�me de migration pour les bases de donn�es,

L'admin peut se loguer en acc�dant � l'url "/admin" o� il fournira les donn�es d'authentification. Il a tableau d'affichage o� il peut aussi lire les messages des visiteurs, puis de les supprimer. Et enfin, ajouter d'autres admins.
#Mise en �vidence de:
_un cr�ateur de requ�tes SQL (CRUD) et un ORM performants,
_un syst�me d'authentification pour les connexions,
_une gestion des sessions


#details_de_la_bd
SGBD: MySQL
Nom bd: laracarte
Utilisateur: root
Mot de passe:

#technologies web utilis�es
_Bootstrap 3 & 4, 

#donn�es d'authentification
User: test@test.fr
Password: admin

#nom du fichier sql de la base :  localhost.sql


##################################################################################

Dans la prochaine version, 
*permettre � l'admin de r�pondre aux visiteurs depuis le site
*afficher les autres admins et pouvoir les Update-Delete
