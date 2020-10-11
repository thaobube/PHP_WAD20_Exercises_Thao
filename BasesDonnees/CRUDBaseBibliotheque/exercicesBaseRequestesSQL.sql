--Exercices base requêtes SQL
===========================

--Requêtes sans filtre
-- 1.	Obtenez la liste de clients, toutes les informations
SELECT * FROM client

--2.	Obtenez le nom et le prénom de tous les clients
SELECT nom, prenom FROM client

--3. Obtenez le titre et le prix de tous les livres
SELECT titre, prix FROM livre

--4.	Obtenez tous les noms de clients en majuscule (UPPER)
SELECT UPPER(nom) FROM client

--Requêtes avec filtre simple (WHERE)
--5.	Obtenez l'adresse de tous les clients qui s'appellent 'Jones'
SELECT adresse FROM client WHERE nom='Jones' 

--6.	Obtenez tous les livres de la collection "Asterix"
SELECT * FROM livre WHERE titre LIKE '%Asterix%'

--7.	Obtenez tous les livres qui coutent plus de 20 euros 
SELECT * FROM livre WHERE prix > 20

--8.	Obtenez la liste de livres en ordre alphabétique (ascendant) en utilisant "ORDER BY"
SELECT * FROM livre ORDER BY titre

--9.	Obtenez tous les clients dont le nom commence par ‘J’ (utilisez LIKE)
SELECT * FROM client WHERE nom LIKE 'J%'

--10.	Obtenez tous les clients dont le nom contient la lettre ‘e’
SELECT * FROM client WHERE nom LIKE '%e%'

--Requêtes avec filtre AND et OR (WHERE)
-----------------------------------------
--11. Obtenez tous les livres qui coutent entre 10 et 20 euros
SELECT * FROM livre WHERE prix > 10 AND prix <20
-- on peut le faire aussi avec BETWEEN
SELECT * FROM livre WHERE prix BETWEEN 10 AND 20

--12. Obtenez tous les livres qui coutent moins de 13 euros et les livres qui coutent plus de 25 dans la même requête
SELECT * FROM livre WHERE prix <13 OR prix > 25

--13. Obtenez tous les livres de la collection \"Asterix\" qui coutent moins de 20 euros
SELECT * FROM livre 
WHERE prix <20 AND titre LIKE '%Asterix%'

--14. Obtenez tous les livres publiés à partir de 2008 (y inclus 2008)
SELECT * FROM livre WHERE date_publication > '2008/01/01'--ok pour "2008-01-01"

--15. Obtenez les emprunts (pas d'autres infos) du mois de Février de 2015 
SELECT date_emprunt FROM emprunt 
WHERE MONTH(date_emprunt) = 2 
AND YEAR(date_emprunt) = 2015

--16. Obtenez les emprunts depuis le 1^er^ janvier 2015 (le plus récent le premier)
SELECT * FROM emprunt 
WHERE date_emprunt > '2015/01/01'
ORDER BY date_emprunt

--Requêtes avec plusieurs tableaux (jointures -- JOIN)
----------------------------------------------------

--17. Obtenez une liste où on affiche de couples titre du livre et nom de l\'auteur
SELECT livre.titre, auteur.nom
FROM livre
INNER JOIN auteur
ON auteur.id = livre.auteur_id

--18. Obtenez une liste de tous les exemplaires de chaque livre
SELECT livre.titre, exemplaire.id AS idExemplaire, exemplaire.etat
FROM livre
INNER JOIN exemplaire
ON livre.id = exemplaire.livre_id

--19. Obtenez les titres des livres empruntés par chaque client
-- on peut éviter les doublons avec DISTINCT
SELECT client.nom, client.prenom, livre.titre --SELECT DISTINCT client.nom, client.prenom, livre.titre
FROM livre
INNER JOIN exemplaire
ON livre.id = exemplaire.livre_id 
INNER JOIN emprunt
ON exemplaire.id = emprunt.exemplaire_id
INNER JOIN client
ON emprunt.exemplaire_id = client.id
ORDER BY client.nom, client.prenom, livre.titre 

--20. Obtenez les titres des livres empruntés entre 2008 et 2010
SELECT livre.titre, emprunt.date_emprunt
FROM livre
INNER JOIN exemplaire
ON livre.id = exemplaire.livre_id 
INNER JOIN emprunt
ON exemplaire.id = emprunt.exemplaire_id
WHERE YEAR(emprunt.date_emprunt) >= 2008 
AND YEAR(emprunt.date_emprunt) <= 2010
ORDER BY livre.titre 
--21. Obtenez les noms des clients qui on emprunté les livres d\'Astérix
SELECT DISTINCT client.nom, livre.titre
FROM livre
INNER JOIN exemplaire
ON livre.id = exemplaire.livre_id 
INNER JOIN emprunt
ON exemplaire.id = emprunt.exemplaire_id
INNER JOIN client
ON emprunt.exemplaire_id = client.id
WHERE livre.titre LIKE '%Asterix%'
ORDER BY client.nom, livre.titre 
--22. Considérez qu'un emprunt peut durer deux semaines au maximum. Obtenez une liste des exemplaires empruntés et des dates limite des emprunts (utilisez ADDDATE)
SELECT livre.titre, emprunt.date_emprunt, ADDDATE(emprunt.date_emprunt, 14) AS date_limit--DATE_ADD(emprunt.date_emprunt, INTERVAL 14 DAY)
FROM livre
INNER JOIN exemplaire
ON livre.id = exemplaire.livre_id 
INNER JOIN emprunt
ON exemplaire.id = emprunt.exemplaire_id
ORDER BY livre.titre

--Requêtes diverses
-----------------
--23. Obtenez le nombre de clients avec COUNT()
-- function COUNT compte le nombre de lignes. 
-- ATTENTION! pas d'espace entre COUNT et la parenthèse!
-- on peut choisir * ou aussi un champ et COUNT comptera le nombre de lignes où le champ n'est pas null. Dans notre BD il n'y a pas de nulls, le "" n'est pas null
SELECT COUNT(id) AS NombreDeClients FROM client --SELECT COUNT(*) --SELECT COUNT(client.nom)

--24. Obtenez le nombre de livres qui se trouvent à la bibliothèque
SELECT COUNT(id) AS NombreDeLivres FROM livre--SELECT COUNT(*)

--25. Obtenez le nombre de clients dont le nom contient la lettre 'b'
SELECT COUNT(id) AS NombreDeClients FROM client WHERE nom LIKE '%b%'--SELECT COUNT(*)

--26. Obtenez le nombre d'exemplaires disponibles
SELECT COUNT(exemplaire.id) AS NombreExemplaires FROM exemplaire
INNER JOIN emprunt
ON exemplaire.id =  emprunt.exemplaire_id
WHERE date_retour < CURRENT_DATE

--27. Obtenez le nombre d'exemplaires disponibles d'un titre de votre choix
SELECT livre.titre, COUNT(exemplaire.id) AS NombreExemplaires FROM exemplaire
INNER JOIN livre
ON livre.id =  exemplaire.livre_id
WHERE livre.titre= 'Talon va faire la fête'

--28. Obtenez tous les livres dont le titre commence par 'V'
SELECT * FROM livre WHERE titre LIKE 'V%'
-- ou avec LEFT
SELECT * FROM livre WHERE LEFT(titre,1) = 'V';

-- GROUP BY!
-----------------------------------

--29. Obtenez le nombre d'exemplaires de chaque livre (afficher le code du livre, pas besoin du titre)
SELECT COUNT(exemplaire.id) AS NombreExemplaires, livre.id FROM exemplaire
INNER JOIN livre
ON livre.id =  exemplaire.livre_id
GROUP BY livre.id

--30. Obtenez le nombre d'exemplaires de chaque livre (afficher le titre du livre aussi)
SELECT  livre.id, livre.titre, COUNT(exemplaire.id) AS NombreExemplaires FROM exemplaire
INNER JOIN livre
ON livre.id =  exemplaire.livre_id
group by livre.id, livre.titre; 
-- observer que, quand on utilise GROUP BY, si la colonne est dans les select elle doit être aussi dans le group by??

--31. Obtenez la liste d'exemplaires qui ont été empruntés cette année
SELECT exemplaire.* FROM exemplaire
INNER JOIN emprunt
ON exemplaire.id = emprunt.exemplaire_id
WHERE YEAR(date_emprunt) = YEAR (CURRENT_DATE)

--32. Obtenez le nombre d'emprunts par année
SELECT YEAR(date_emprunt) AS Years, COUNT(*) AS NombreEmprunts  FROM emprunt 
GROUP BY YEAR(date_emprunt)
ORDER BY YEAR(date_emprunt), COUNT(*) -- si c'est dans le select, c'est dans le ORDER BY??

--33. Obtenez le nombre de emprunts réalisés par chaque client
SELECT client.id, client.nom, client.prenom, COUNT(emprunt.id) AS NombreEmprunts FROM emprunt 
INNER JOIN client
ON client.id = emprunt.client_id
GROUP BY client.id, client.nom, client.prenom





