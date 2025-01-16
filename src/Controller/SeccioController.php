<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Service\ServeiDadesSeccio;

class SeccioController extends AbstractController
{
	private $seccions;

	public function __construct($dadesSeccions)
	{
		$this->seccions = $dadesSeccions->get();
	}

	#[Route('/seccio/{codi}', name: 'dades_seccions')]
	public function seccio($codi)
	{
		$resultat = array_filter($this->seccions, function($seccio) use ($codi) {
			return $seccio["codi"] == $codi;
		});

		if (count($resultat) > 0) {
			return $this -> render('dades_seccio.html.twig', array('seccio' => array_shift($resultat)));
		} else
			return $this -> render('dades_seccio.html.twig', array('seccio' => null));
	}
}