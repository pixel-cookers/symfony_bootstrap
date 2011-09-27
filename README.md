# Symfony Bootstrap 1.0

## Versions
 Symfony : 1.4.13
 
 Bootstrap Twitter : 1.3.0
 
## Plugins
 sfPropelORMPlugin (1.1.2 => Propel 1.6)
 
 sfGuardPlugin (4.0.2)
 
 sfJqueryReloadedPlugin (1.4.3 => jQuery 1.6.4)
 
 sfFormExtraPlugin (1.1.3)
 
 sfLessPlugin (1.1.0 => Less 1.1.3)

## Fonctionnalités
 Configuration initiale (settings.yml, factories.yml, app.yml)
 
 Envoi de mails (En cours)
 
 Register/Login/Logout/ForgotPass/Account (En cours)

## Utilisation

Cloner le repo Github de façon récursive (pour récupérer les submodules)

	git clone --recursive git@github.com:pixel-cookers/symfony_bootstrap.git

Créer la BDD du projet et l'utilisateur associé

Copier le fichier `/data/install/propel.ini` dans `/config`

Saisir les champs du fichier `/config/propel.ini`

	propel.project = NOM_PROJET
	propel.database.url = mysql:host=localhost;dbname=NOM_BDD
	propel.database.user = NOM_USER_BDD
	propel.output.dir = PATH\TO\NOM_PROJET

Copier le fichier `/data/install/databases.yml` dans `/config`
Saisir les champs du fichier `/config/databases.yml`
	dsn : 'mysql:host=localhost;dbname=NOM_BDD'
	username : NOM_USER

Copier le fichier `/data/install/vhost.txt` dans `/data`

Editer le fichier `\data\vhost.txt`

Inclure celui-ci dans votre config Apache (httpd.conf)  :

	# NOM_PROJET
	Include "PATH\NOM_PROJET\data\vhost.txt"

Ajouter le domaine associé dans votre fichier host :

	127.0.0.X          www.DOMAINE.dev

Copier les fichiers settings.yml, app.yml et factories.yml depuis `/data/install/` dans `/apps/frontend/config`

Saisir le champs remember_cookie_name dans `/frontend/config/app.yml`

Saisir le champs delivery_address dans `/frontend/config/factories.yml` pour recevoir les mails envoyés par l'application en environnement de dév

Remplacer les champs username et password du mailer dans `/frontend/config/factories.yml` par vos login et mdp pour l'envoi de mail en dév

Saisir le champs csrf_secret dans `/frontend/config/settings.yml`

Redémarrer Wamp et tester l'url "www.DOMAINE.dev"
