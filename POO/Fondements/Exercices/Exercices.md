=======================CLASSE===========================

1. Créez une classe CompteBancaire qui contient les informations et les opérations basiques d'un compte bancaire. Il faut pouvoir obtenir le solde du compte, enlever et rajouter un montant d'argent. On peut aussi bloquer et débloquer le compte

2. Pour la classe Personne il nous manque les méthodes pour lire/modifier la propriété « prenom ». Créez-les et testez-les!

3. Rajoutez une méthode afficher() dans la classe Personne qui affiche le texte suivant:
   "Je suis une personne et je m'appelle <prenom><nom>!!"
4. Rajoutez l'état civil à la classe précédant ainsi que les méthodes pour l'accéder

5. On développe une application d'e-commerce et on veut représenter les produits en utilisant une classe. Les informations à stocker seront un code, le nom et le prix de chaque produit. Créez le code correspondant à cette classe Product (dans un autre fichier) et testez-la. A part des fonctions de base (get et set), créez une autre pour afficher les infos d'un produit sur le site web.

6. Rajoutez une méthode à la classe précédente capable d'obtenir le prix du produit TVAC. La méthode reçoit le taux de TVA

7. Créez une classe Voiture pour représenter une voiture. Rajoutez les propriétés et les méthodes permettant de réaliser les fonctions basiques d'une voiture.

8. Dans la classe Voiture, créez une méthode démarrer(). Dans le code de cette méthode on doit appeler une autre méthode preparerMoteur() aussi définie dans la classe mais pas accessible depuis l'extérieur.

Modifiez la classe Voiture pour qu'elle ne démarre pas si la voiture n'a pas d'essence.

9. Créez une classe Adresse contenant le nom de la rue, le numéro et un code postal. Créez plusieurs objets adresse et une fonction pour afficher la totalité de l'adresse.
   Quand on essaie d'assigner une rue à l'adresse, la méthode correspondante doit vérifier qu'il n'y pas de chiffres dans la valeur à assigner.

10. Créez une classe capable de générer un div contenant l'en-tête d'une page html. On peut indiquer, dans le constructeur:

- Le contenu de l'en-tête
- La taille de la typographie
- L'alignement du texte
  (Consultez la documentation sur html pour avoir plus de détails)

11. Décrivez le jeu Tetris et créez une classe pour modeler les tétrominos (les pièces)
12. Modelez le personnage d'un jeu et ses actions en utilisant une classe

13. Créez une classe Cercle qui contient le radio du cercle et son centre. Le centre est défini par deux cordonnées numériques
    a) Créez des méthodes get/set pour accéder les coordonnées et le rayon
    b) Créez des méthodes pour définir/obtenir le rayon et les coordonnées du centre du cercle
    c) Créez des méthodes pour calculer l'aire et la circonférence
    d) Créez une méthode pour afficher toutes les données concernant le cercle (centre, aire, circonférence…). Pour afficher le centre et le radio, utilisez les méthodes get au lieu d'accéder directement aux propriétés

- Créez une classe CercleA où le centre du cercle est un array de deux valeurs. Observez qu'on peut réutiliser pratiquement tout le code.

===================CONSTRUCTEUR======================

1. Créez une classe Contact pour représenter un contact dans le répertoire d’un smartphone

2. Créez une classe Image pour représenter une image et ses attributs de HTML (src, alt…). Cette classe a une méthode afficher() qui s’occupera de générer le HTML qui affichera l’image dans le navigateur
3. Créez une classe Série pour représenter une série de TV. A part des attributs de base de la série la classe doit contenir une liste des acteurs qui jouent dans la série.
4. Créez une classe Recette qui représente une recette de cuisine. Une recette doit avoir un nom, une description et une liste d’un nombre indéfini de couples ingrédient-quantité. Pour stocker la liste d'ingrédients on va utiliser un array simple.
   Vous devez créer un constructeur qui reçoit uniquement le nom de la recette. Créez les méthodes nécessaires pour rajouter des ingrédients un par un à la recette. Créez une méthode pour afficher la liste d'ingrédients comme ci-dessous:
   La recette de tortilla espagnole contient:

- 7 oeufs
- 5 (tialle moyenne) pommes de terre
- huile d'olive
- sel

5. Créez une classe Triangle qui contient les trois sommets d'un triangle (trois couples de cordonnées (x,y)) ainsi que la couleur de remplissage. On peut afficher les trois cordonnées et "déplacer" le triangle. Les coordonnés son créés à l'extérieur de la classe.

6. Créez une classe Film selon la structure suivante:
   Une seule propriété \$bdd contenant la connexion à la BD Films et les méthodes suivants:

obtenirFilmsBD (): renvoie un array contenant toutes les données de tous les films de la table Films
obtenirFilmId($id): renvoie un array contenant toutes les données d'un film choisi par id
obtenirFilmTitre ($titre): renvoie un array contenant toutes les données des films qui ont un certain titre
obtenirFilmsAnnee ($annee1, $annee2): renvoie un array contenant toutes les données des films produits entre deux dates
insererFilm (….): insère un film. La méthode doit recevoir toutes les données du film à insérer
supprimerFilm (\$id): efface un film de la BD. La méthode doit recevoir l'id du film à effacer
Rajoutez vous-mêmes les méthodes qui pourraient s'avérer utiles pour la création d'un site de critique de films
