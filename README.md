## Projet Réalisé pendant ma formation Développeur Web et Web Mobile à l'Afpa de Saint Etienne du Rouvray

# Objectif :
Développer la partie backend d’une application web ou web mobile en intégrant les recommandations de sécurité.

# Compétences évaluées :
• Maquetter une application
• Créer une base de données
• Développer les composants d’accès aux données
• Développer la partie back-end d’une application web ou web mobile
• Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou
e-commerce

# Sujet : Une application pour la gestion d’une bibliothèque
Vous êtes un développeur junior embauché par une collectivité territoriale. Vous devez créer une
application qui permette aux bibliothécaires de la ville de gérer le catalogue de livres ainsi que les
prêts et les rendus.
Attention l’application n’est pas accessible aux utilisateurs. Seuls les employés des bibliothèques
utilisent l’application. Quand quelqu’un veut emprunter un livre, il se présente au bureau de
l’employé avec sa carte de membre qui contient les informations nécessaires à l’enregistrement du
prêt.

# L’application permettra de :
- Afficher la liste des livres contenus dans le catalogue ainsi que leur statut (disponible ou prêté)
- Ajouter un livre au catalogue
- Supprimer un livre du catalogue s’il n’est pas emprunté
- Pouvoir accéder à la fiche descriptive de chaque livre enregistré en BDD
- Pouvoir modifier le statut de chaque livre de disponible à prêté et de prêté à disponible. Quand un
livre est prêté le/la bibliothécaire indique le numéro d’identification unique de l’utilisateur afin de
savoir qui a emprunté quoi. Quand on revient sur la fiche descriptive du livre celle-ci indique
maintenant les informations du livre ainsi que celles de l’utilisateur qui l’a emprunté.
- Afficher la liste de tous les utilisateurs enregistrés dans le système ainsi que leurs informations
personnelles et les livres qu’ils ont éventuellement empruntés quand on clique sur leur fiche
personnelle.
Pour rappel, voici une liste non exhaustive des informations utiles à connaître à propos d’un livre :
titre, auteur, résumé, date de parution, catégorie. Bien entendu vous devrez en rajouter d’autres.Le rendu se fera via Teams avant dimanche soir minuit dans le dossier rendu vous déposerez
un fichier txt à votre nom avec le lien vers votre repository GitHub qui contiendra votre
projet.

## En plus de votre application, on trouvera dans votre projet dans un dossier documentation :
• Un schéma de base de données listant les tables, leur contenu, leurs relations et les
cardinalités
• Un fichier SQL qui exécuté dans MySQL crée une base de données avec les tables
nécessaires et quelques lignes d’exemple
• Un schéma de type UseCase et/ou une arborescence fonctionnelle de l’application reprenant
les fonctionnalités de chaque page
• Un diagramme de classes qui liste les classes de votre applications, leur contenu et leurs
relations
 
# Spécifications techniques :
- Votre code est organisé selon l'architecture MVC
- Vous prenez en compte les problématiques de maintenabilité
- Vous prenez en compte les problématiques de sécurité liées aux failles standards (faille XSS et
injection SQL)
- Vous intégrez au possible les transactions dans vos requêtes SQL
- Vous utilisez PDO pour vous connecter à la base de données
- Vous privilégiez les jointures aux doubles requêtes. Cependant les doubles requêtes sont acceptées
dans le cas où les jointures seraient trop complexes à mettre en œuvre.
- Vous programmez en orienté objet