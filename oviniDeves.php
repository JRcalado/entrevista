<?php

class oviniDeves
{
	
protected $cometas =  array();
protected $grupos  =  array();
protected $alfabeto=  array();
protected $mod=45;
protected $gruposLevados=array();
protected $gruposNaoLevados=array();

	public function __construct($cometas,$grupos)
    {
        $this->cometas = $cometas;
        $this->grupos = $grupos;
		$this->alfabeto=$this->geraAlfabeto();
		$this->separaGrupos();
     }
     
    public function getGruposLevados(){
    	return $this->gruposLevados;
    } 
    public function getGruposNaoLevados(){
    	return $this->gruposNaoLevados;
    } 

   protected function separaGrupos(){

     	foreach($this->cometas as  $key => $cometas ){
        	$respCometa = $this->convert($cometas);
     		$respGrupo  = $this->convert($this->grupos[$key]);
     		
     		if($respGrupo != $respCometa){
     			$this->gruposNaoLevados[$key]=$this->grupos[$key];
     		}else{
     			$this->gruposLevados[$key]=$this->grupos[$key] ;
     		}
       	}
     }
	protected function convert($string)
	{
		$stringArray=str_split(strtoupper($string));
		
		foreach($stringArray as $key => $str){
			$numero=array_search($str,$this->alfabeto);
			if($key== 0){
					$antrerior=$numero;
			}else{
					$antrerior=$numero*$antrerior;
			}
		}
		$res = $antrerior % $this->mod;
		return $res;
	}
	
	
	protected function geraAlfabeto(){
		foreach(range('A', 'Z') as $letra) {
			$i++;
			$alfabeto[$i]=$letra;
		}
		return $alfabeto;	
	}

} 

