<?php 

Class Card {
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
    public function getCard(){
        echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
            echo $this->nome . "<br>" . $this->poder . "<br>" . $this->parte . "<br>" . $this->raca . "<br>";
            echo "<img style='width: 100%; height: auto;' src='" . $this->link . "' /><br>";
            echo "</div>";
    }
   
}