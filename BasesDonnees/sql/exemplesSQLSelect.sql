-- SELECT de toutes les colonnes
SELECT * FROM trains
-- SELECT de quelque colonnes
SELECT villeDepart, villeDestination FROM trains
-- SELECT avec un filtre simple (WHERE)
SELECT * FROM trains WHERE villeDestination = 'Anvers'
-- SELECT avec un filtre composé (WHERE)
SELECT * FROM trains WHERE villeDepart='Bruxelles' AND villeDestination = 'Anvers'

-- SELECT avec une fonction
--https://www.w3schools.com/sql/sql_ref_mysql.asp
SELECT id, code, UPPER(villeDepart), UPPER(villeDestination) FROM trains 
-- ex en PHP : $sql = "SELECT * FROM trains WHERE UPPER(villeDepart)=:villeDepart";

-- SELECT avec un filtre et une fonction
SELECT id, code, villeDepart, villeDestination FROM trains WHERE LEFT(villeDepart,3) = 'Bru'



-- LIKE: Selection avec un fragment de la donnée
-- ex: tous les trains dont la ville de départ commence par 'Bru'
SELECT * FROM trains WHERE villeDepart LIKE 'Bru%'
-- ex: tous les trains dont la ville de départ finit par 'es'
SELECT * FROM trains WHERE villeDepart LIKE '%es'
-- ex: tous les trains dont la ville contient un certain texte
SELECT * FROM trains WHERE villeDepart LIKE '%xe%'
-- ex: recherche par fragment de texte
SELECT * FROM trains WHERE villeDepart LIKE '%rs%' AND villeDestination LIKE '%en%'
SELECT * FROM trains WHERE villeDepart LIKE '%rs%' OR villeDestination LIKE '%en%'










