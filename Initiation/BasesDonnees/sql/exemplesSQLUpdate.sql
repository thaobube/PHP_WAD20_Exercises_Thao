-- Changera toutes les villes de départ à Gent !!!
UPDATE trains SET villeDepart = 'Gent'

UPDATE trains SET villeDepart = UPPER(villeDepart) -- o day no se thuc hien theo tung dong 1, khi nao den dong nao no se thay doi cot villeDepart thanh chu in hoa

UPDATE trains SET villeDestination = UPPER(villeDestination)


-- à ne pas  faire car on aura probablement de doublons de villes!!!
-- ex: GENT et GENK partagent les trois premières lettres
UPDATE trains SET villeDestination = LEFT(villeDestination)

-- UPDATE avec filtre
-- ex: Changer tous les GENT en GENK (villeDepart)
UPDATE trains SET villeDepart = 'GENK' WHERE villeDepart = 'GENT'

-- ex: Changer tous les GENK en GENT (villeDepart et villesArrive)
-- pas possible de cette manière
UPDATE trains SET villeDepart = 'GENT' WHERE villeDepart = 'GENT' WHERE villeDepart = 'GENK' OR villeDestination = 'GENK'

if (villeDepart = 'GENK' OR villeDestination = 'GENK') {
    villeDepart = "GENK";
    villeDestination = 'GENK';
}
-- façon correcte: deux lignes
UPDATE trains SET villeDepart = 'GENT' WHERE villeDepart = 'GENK';
UPDATE trains SET villeDestination = 'GENT' WHERE villeDestination = 'GENK'


