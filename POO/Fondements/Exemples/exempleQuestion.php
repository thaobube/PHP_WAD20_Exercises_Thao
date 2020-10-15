<?php
class Chat
{
    private $poids;
    private $race;

    public function __construct($poids, $race)
    {
        // $this->poids = $poids;
        $this->setPoids($poids);
        $this->race = $race;
    }
    public function setPoids($unPoids)
    {
        if ($unPoids < 10) {
            $this->poids = $unPoids;
        } else {
            throw new Exception("trop lourd pour un chat");
        }
    }
    public function getPoids()
    {
        return $this->poids;
    }
}

$unChat = new Chat(3, "Lulu");
echo $unChat->getPoids();
