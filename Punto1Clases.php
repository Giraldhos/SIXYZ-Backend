<?php
/*
PROGRAMACION WEB 
JEHIKO RASHID MOSQUERA MOSQUERA - WILLIAM ANDRADE GETIAL - ANDRES FELIPE GIRALDO VELASCO 
5TO SEMESTRE
FECHA: 24 DE MARZO DE 2022 
*/

class vivienda
{
    //Datos de Entrada
    private $ValorVivi;
    private $salario;
    private $nom;
    

    //Datos de Proceso
    private $Auxvivienda;
    private $CuotInic;
    private $financiacion;
    private $TotalVivi;
    private $CuotaMensual;

    public function __construct($ValorVivi, $salario)
    {
        $this -> ValorVivi = $ValorVivi;
        $this -> salario = $salario;
        $this -> nom = "";
        $this -> Auxvivienda = 0;
        $this -> CuotInic = 0;
        $this -> financiacion = 0;
        $this -> TotalVivi = 0;
        $this -> CuotaMensual = 0;
    }

    

    /**
     * Get the value of ValorVivi
     */ 
    public function getValorVivi()
    {
        return $this->ValorVivi;
    }

    /**
     * Set the value of ValorVivi
     *
     * @return  self
     */ 
    public function setValorVivi($ValorVivi)
    {
        $this->ValorVivi = $ValorVivi;

        return $this;
    }
    

    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    

    /**
     * Get the value of Auxvivienda
     */ 
    public function getAuxvivienda()
    {
        return $this->Auxvivienda;
    }

    /**
     * Set the value of Auxvivienda
     *
     * @return  self
     */ 
    public function setAuxvivienda($Auxvivienda)
    {
        $this->Auxvivienda = $Auxvivienda;

        return $this;
    }
    

    /**
     * Get the value of CuotInic
     */ 
    public function getCuotInic()
    {
        return $this->CuotInic;
    }

    /**
     * Set the value of CuotInic
     *
     * @return  self
     */ 
    public function setCuotInic($CuotInic)
    {
        $this->CuotInic = $CuotInic;

        return $this;
    }
    

    /**
     * Get the value of financiacion
     */ 
    public function getFinanciacion()
    {
        return $this->financiacion;
    }

    /**
     * Set the value of financiacion
     *
     * @return  self
     */ 
    public function setFinanciacion($financiacion)
    {
        $this->financiacion = $financiacion;

        return $this;
    }
    
    /**
     * Get the value of TotalVivi
     */ 
    public function getTotalVivi()
    {
        return $this->TotalVivi;
    }

    /**
     * Set the value of TotalVivi
     *
     * @return  self
     */ 
    public function setTotalVivi($TotalVivi)
    {
        $this->TotalVivi = $TotalVivi;

        return $this;
    }
    
    /**
     * Get the value of CuotaMensual
     */ 
    public function getCuotaMensual()
    {
        return $this->CuotaMensual;
    }

    /**
     * Set the value of CuotaMensual
     *
     * @return  self
     */ 
    public function setCuotaMensual($CuotaMensual)
    {
        $this->CuotaMensual = $CuotaMensual;

        return $this;
    }

    public function CalcularAuxilio(){

        if ($this -> salario <= 1150000){
            
            $this -> Auxvivienda = $this -> ValorVivi * 0.3;
            $this -> TotalVivi = $this -> ValorVivi - $this -> Auxvivienda;
            $this -> CuotInic = $this -> salario * 0.1;
            $this -> CuotaMensual = $this ->TotalVivi /240;

        } else if ($this -> salario >= 1150001 && $this -> salario <= 1850000){

                   $this -> Auxvivienda = $this -> ValorVivi * 0.2;
                   $this -> TotalVivi = $this -> ValorVivi - $this -> Auxvivienda;
                   $this -> CuotInic = $this -> salario * 0.2;
                   $this -> CuotaMensual = $this ->TotalVivi /180;

                } else if ($this -> salario > 1850000 && $this -> salalario <= 3500000){
                           
                           $this -> Auxvivienda = $this -> ValorVivi * 0.15;
                           $this -> TotalVivi = $this -> ValorVivi - $this -> Auxvivienda;
                           $this -> CuotInic = $this -> salario * 0.3;
                           $this -> CuotaMensual = $this ->TotalVivi /120;

                        }else if ($this -> salario > 3500000){

                                  $this -> Auxvivienda = $this -> ValorVivi * 0.1;
                                  $this -> TotalVivi = $this -> ValorVivi - $this -> Auxvivienda;
                                  $this -> CuotInic = $this -> salario * 0.4;
                                  $this -> CuotaMensual = $this ->TotalVivi /84;
                        }
                        $this -> setAuxvivienda($this -> Auxvivienda);
                        $this -> setTotalVivi($this -> TotalVivi);
                        $this -> setCuotInic($this -> CuotInic);
                        $this -> setCuotaMensual($this -> CuotaMensual);
    }
}
?>