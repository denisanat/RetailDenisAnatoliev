<?php

namespace App\Service;

class ServeiDadesSeccio
{
	private $seccions = array(
		array("codi" => "1", "nom" => "Electrodomèstics", 
			"descripcio" => "Aparells electrònics per a la llar", "any" => "2025", 
			"articles" => array("Llavadora", "Forn", "Rentaplats", "Ventilador"),
			"img" => "assets/img/washing-machine-cartoon-vector-icon-illustration-object-technology-icon-concept-isolated-premium_138676-4690.jpg"),
		array("codi" => "2", "nom" => "Components d'ordinador", 
			"descripcio" => "Distintes parts que formen un ordinador", "any" => "2025", 
			"articles" => array("Disc dur", "Memòria RAM", "Processador", "Font d'alimentació"),
			"img" => "assets/img/elearning-workspace-concept-illustration_114360-25845.jpg"),
		array("codi" => "3", "nom" => "Sucs", 
			"descripcio" => "Sucs de distintes fruites", "any" => "2025", 
			"articles" => array("Poma", "Taronja", "Pinya", "Kiwi"),
			"img" => "assets/img/fresh-orange-juice-splashing-from-glass-transparent-background_84443-26351.jpg"),
		array("codi" => "4", "nom" => "Contes infantils", 
			"descripcio" => "Llibres per als més menuts", "any" => "2025", 
			"articles" => array("La Ventafocs", "Les set cabretes", "Blancaneu", "La bella dorment"),
			"img" => "assets/img/book-with-lighbulb-cartoon-vector-icon-illustration-object-education-icon-concept-isolated-premium-vector-flat-cartoon-style_138676-4009.jpg"),
	);

	public function get()
	{
		return $this->seccions;
	}
}