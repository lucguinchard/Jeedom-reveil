= Gestions des réveils

== Description
Ce plugin permet de créer des réveils. (Actuellement le plugin est limité à un seul réveil.
Il est capable de réveiller / alerter :
* Avec une simulation d'aube selon plusieurs courbes.

== Paramétrage
Comme avec tous les plugins Jeedom, nous allons commencer par créer un équipement de réveil.		
Après l'avoir nommé, nous allons pouvoir le paramétrer.		

=== Configuration générale Jeedom		
		
image::../images/ConfigurationGeneral.jpg[]		
* Nom  : le nom a déjà été paramétré, mais vous avez la possibilité de le changer.		
* Objet parent : ce paramètre permet d'ajouter l'équipement dans un objet Jeedom.		
* Catégorie : déclare l'équipement dans une catégorie.		
* Visible : permet de rendre l'équipement visible dans le Dashboard.		
* Activer : permet d'activer l'équipement.		
* Configurer l'heure du réveil : Heure de départ de votre réveil, c'est au format cron (si vous souhaitez répéter sur plusieurs jours 15 5 * * 0,1,2,3,4 =>du lundi au vendredi à 5h15)
* Choisir le type de réveil : Choisir le type de simulation que vous souhaitez

==== Type de réveil  : Libre

Ce type de réveil vous permet de declencher toutes les actions que vous voulez, à l'heure définie.

==== Type de réveil  : Simulateur d'aube

* Type de simulateur d'aube : il existe plusieurs types de simulateur d'aube, choisissez celui qui vous convient le mieux 
* Valeur de démarrage de la simulation : A quelle luminosité (%) voulez-vous lancer la simulation
* Valeur d'arrêt de la simulation :  A quelle luminosité (%) voulez-vous arrêter la simulation
* Durée de la simulation : Sur quelle période voulez-vous activer la simulation

=== Condition
Vous pouvez configurer des conditions d'activation de votre réveil

image::../images/ConfigurationCondition.jpg[]	

Cliquer sur "Ajouter une condition" et configurer votre condition
Chaque condition de la liste formera un ET

=== Equipements
Vous pouvez configurer des conditions d'activation de votre réveil

image::../images/ConfigurationAction.jpg[]	

Choisissez tous les équipements qui doivent s'exécuter à l'heure du réveil
