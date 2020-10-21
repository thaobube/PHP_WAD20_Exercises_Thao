<?php
include_once "./Livre.php";
class LivreManager
{
    public $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function selectAll()
    {
        $sql = "SELECT * FROM livre";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $arrLivres = $stmt->fetchAll(PDO::FETCH_ASSOC); //on renvoi un array de livres
        // var_dump($stmt->errorInfo());
        // die();
        $arrObjetsLivres = [];
        //unLivreArray est un livre sous la forme d'un array
        //$arrLivres est un array qui contient de Livres sous la forme d'array
        //$arrObjetsLivres est un array qui contient de Livres sous la forme d'objets
        foreach ($arrLivres as $unLivreArray) {
            $objectLivre = new Livre($unLivreArray);
            $arrObjetsLivres[] = $objectLivre;
            // $arrObjetsLivres[] = new Livre($unLivreArray);
        }
        // return $arrLivres;
        return $arrObjetsLivres;
    }
    //select avec de filtres
    public function selectFiltres($arrayFiltres = null)
    {
        //si vide: SELECT FROM livre
        //si pas vide/ SELECT FROM livre WHERE cle1 = :cle1 AND cle2 = :cle2 etc...
        //si pas vide/ SELECT FROM livre WHERE prix = :prix AND titre = :titre etc...

        if (!is_null($arrayFiltres)) {
            $sql = "SELECT * FROM livre";
            //on rajoute de couples key =:key dans un array
            $arrayFiltresChaine = [];
            foreach ($arrayFiltres as $key => $value) {
                $arrayFiltresChaine[] = $key . '=:' . $key;
            }
            var_dump($arrayFiltresChaine);
            //on crée un string contenat les couples séparées par AND
            $chaineFiltres = implode(" AND ", $arrayFiltresChaine);
            var_dump($chaineFiltres);

            $sql = $sql . " WHERE " . $chaineFiltres;
            $stmt = $this->db->prepare($sql);
            //faire tous les bindValue (":key", $value)
            foreach ($arrayFiltres as $key => $val) {
                $stmt->bindParam(":" . $key, $val);
            }
            $stmt->execute();
            //on obtient un array d'arrays qui représentent les livres
            $arrayResultat = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //transformer l'array d'arrays en array d'objets
            $arrayResultatObjets = [];
            foreach ($arrayResultat as $livreArray) {
                $objectLivre = new Livre($livreArray);
                $arrayResultatObjets[] = $objectLivre;
            }
            // return $arrLivres;
            return $arrayResultatObjets;
        } else {
            $tousLesLivre = $this->selectAll();
            return $tousLesLivre;
        }
    }

    //effacer un objet Livre par id
    public function delete(Livre $unLivre)
    {
        $sql = "DELETE FROM livre WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $unLivre->getId());
        $stmt->execute();
        var_dump($stmt->errorInfo());
    }
    //effacer un objet Livre par id
    public function deletepParId($id)
    {
        $sql = "DELETE FROM livre WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        var_dump($stmt->errorInfo());
    }
    //

    public function insert(Livre $unLivre)
    {
        //co the lam voi foreach nhung o day thay lam don gian
        $sql = "INSERT INTO livre (id, titre, description, date_publication, isbn, auteur_id) VALUES (NULL, :id, :titre, :description, :date_publication, :isbn, :auteur_id)";

        $stmt = $this->db->prepare($sql);
        //bindValues...

        $stmt->bindValue(":titre", $unLivre->getTitre());
        $stmt->bindValue(":prix", $unLivre->getPrix());
        $stmt->bindValue(":description", $unLivre->getDescription());
        $stmt->bindValue(":date_publication", $unLivre->getDate_publication());
        $stmt->bindValue(":isbn", $unLivre->getIsbn());
        $stmt->bindValue(":auteur_id", $unLivre->getAuteur_id());

        $stmt->execute();
        var_dump($stmt->errorInfo());
    }
}
