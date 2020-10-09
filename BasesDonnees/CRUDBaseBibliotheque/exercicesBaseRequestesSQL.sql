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
SELECT * FROM client WHERE nom='Jones' OR prenom='Jones'

--6.	Obtenez tous les livres de la collection "Asterix"
SELECT * FROM livre WHERE titre LIKE '%Asterix%'

--7.	Obtenez tous les livres qui coutent plus de 20 euros 
SELECT * FROM livre WHERE prix > '20'
--hoac SELECT * FROM livre WHERE prix > 20

--8.	Obtenez la liste de livres en ordre alphabétique (ascendant) en utilisant "ORDER BY"
SELECT * FROM livre ORDER BY titre

--9.	Obtenez tous les clients dont le nom commence par ‘J’ (utilisez LIKE)
SELECT * FROM client WHERE nom LIKE 'J%'

--10.	Obtenez tous les clients dont le nom contient la lettre ‘e’
SELECT * FROM client WHERE nom LIKE '%e%'

