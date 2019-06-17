# [[ Création de Form SVG en PHP POO]]
Ce petit exemple permet de créer et dessiner en SVG un ensemble de Form 2D

Pour utilisez ce code copier le dans votre répertoire de votre serveur Web capable d'executer php puis appeler index.php (WAMP, MAMP, LAMP selon votre environnement)

Vous pouvez aussi lancer un serveur Web embarqué php par exemple en ligne de commande (vous devez avoir php installé et accessible en ligne de commande) `php -S localhost:5000` puis connectez vous avec votre navigateur à http://localhost:5000

Pour modifier ou ajouter des formes modifiez la création des formes dans le fichier index.php

## Notions POO de cet exemple :
* nomentclature des classes, propriétés et méthodes,
* nomentclature des commentaires,
* encapsulation, setter et getter, utilisation d'un générateur automatique de getter et setter avec Visual Studio (ou Atom),
* héritage de classe, hiérarchie des classes parent/enfants, notion d'héritage ('et une espèce de'),
* classe abstraite avec méthode abstraite,
* composition : un objet possède une propriété représentant un autre objet ('a un') ou plusieurs objets (collection, 'a des'),
* polymorphisme : généricité d'une forme, elle peut être dessinée en SVG, on peut donc créer de nouvelles formes (une ligne, un polygone complexe) en respectant la hiérarchie et notre programme saura la dessiner !
* chaînage des méthodes (return self ($this) dans les setters et autres méthodes add)
* autoload de classes
