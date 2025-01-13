<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeccioController
{
	private $seccions = array(
		array("codi" => "1", "nom" => "Electrodomèstics", 
			"descripcio" => "Aparells electrònics per a la llar", "any" => "2025", 
			"articles" => array("Llavadora", "Forn", "Rentaplats", "Ventilador")),
		array("codi" => "2", "nom" => "Components d'ordinador", 
			"descripcio" => "Distintes parts que formen un ordinador", "any" => "2025", 
			"articles" => array("Disc dur", "Memòria RAM", "Processador", "Font d'alimentació")),
		array("codi" => "3", "nom" => "Sucs", 
			"descripcio" => "Sucs de distintes fruites", "any" => "2025", 
			"articles" => array("Poma", "Taronja", "Pinya", "Kiwi")),
		array("codi" => "4", "nom" => "Contes infantils", 
			"descripcio" => "Llibres per als més menuts", "any" => "2025", 
			"articles" => array("La Ventafocs", "Les set cabretes", "Blancaneu", "La bella dorment")),
	);

	#[Route('/seccio/{codi}', name: 'dades_seccio')]
	public function seccio($codi)
	{
		$resultat = array_filter($this -> seccions, function($seccio) use ($codi) {
			return $seccio["codi"] == $codi;
		});

		if (count($resultat) > 0) {
			$resposta = "";
			$resultat = array_shift($resultat);
			$resposta .= "<ul style='list-style: none'><li><h2>" . $resultat["nom"] . "</h2></li>" .
				"<li><h3>" . $resultat["descripcio"] . "</h3></li>" . 
				"<li>" . $resultat["any"] . "</li><ol>";
				foreach($resultat["articles"] as $article)
					$resposta .= "<li>" . $article . "</li>";
				$resposta .= "</ol></ul>";
			
			return new Response("<html><body>$resposta</body></html>");
		} else
			return new Response("No s'ha trobat la secció: $codi");
	}
}