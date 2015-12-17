<?php

	//classe solo con proprietà ma senza metodi - 4 proprietà
	class Indirizzo {
		public $nome;
		public $cognome;
		public $indirizzo;
		public $tel;
		//sto dichiarando un metodo
		public function nomeCompleto(){
			//this è variabile aggiuntiva che rappresenta l'oggetto stesso - 1 metodo
				$n=$this->nome . " " . $this->cognome." ";
				return $n;	
						
			}
			public function visualizza() {
				$n=$this->nomeCompleto();
				$n=$n."<br />";
				$n=$n. $this->indirizzo;
				$n=$n."<br />";
				$n=$n. $this->tel;
				
				return $n;
				}
		}
		//estendiamo la classe
		class IndirizzoEsteso extends Indirizzo {
			public $ncell;
			
			public function visualizza() {
				$n=parent::visualizza();
				$n=$n . "<br />cellulare ".$this->ncell;
				
				return$n;
				
			}
			
			}
		
	?>

