<?php

class Card
{
    private $nome;
    private $poder;
    private $parte;
    private $raca;
    private $link;



    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of poder
     */
    public function getPoder()
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     */
    public function setPoder($poder): self
    {
        $this->poder = $poder;

        return $this;
    }

    /**
     * Get the value of parte
     */
    public function getParte()
    {
        return $this->parte;
    }

    /**
     * Set the value of parte
     */
    public function setParte($parte): self
    {
        $this->parte = $parte;

        return $this;
    }

    /**
     * Get the value of raca
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * Set the value of raca
     */
    public function setRaca($raca): self
    {
        $this->raca = $raca;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getNomeParte()
    {
        $partes = [
            '1' => 'Parte 1 - Phantom Blood',
            '2' => 'Parte 2 - Battle Tendency',
            '3' => 'Parte 3 - Stardust Crusaders',
            '4' => 'Parte 4 - Diamond is Unbreakable',
            '5' => 'Parte 5 - Golden Wind',
            '6' => 'Parte 6 - Stone Ocean',
            '7' => 'Parte 7 - Steel Ball Run',
            '8' => 'Parte 8 - JoJolion',
            '9' => 'Parte 9 - The JOJOLands',
        ];

        return $partes[$this->parte];
    }
    public function getNomeRaca()
    {
        $racas = [
            1 => 'Humano',
            2 => 'Vampiro',
            3 => 'Homem do Pilar',
            4 => 'Homens Pedra',
            5 => 'Alienígena',
            6 => 'Animal',
            7 => 'Outros',
        ];

        return $racas[$this->raca];
    }
    public function getCard()
    {
        echo "<div style='border: solid 1px; width: 300px; margin-top: 20px; padding: 10px; background-color: #f9f9f9;'>";
        echo "<strong>Nome:</strong> " . $this->nome . "<br>";
        echo "<strong>Stand/Poder:</strong> " . $this->poder . "<br>";
        echo "<strong>Parte:</strong> " . $this->getNomeParte() . "<br>";
        echo "<strong>Raça:</strong> " . $this->getNomeRaca() . "<br>";
        echo "<img style='width: 100%; height: auto; margin-top: 10px;' src='" . $this->link . "' />";
        echo "</div>";
    }
}
