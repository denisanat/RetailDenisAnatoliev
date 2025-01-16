<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Service\ServeiDadesSeccio;

class IniciController extends AbstractController
{
	private $seccions;

	public function __construct($dadesSeccions)
	{
		$this->seccions = $dadesSeccions->get();
	}

	#[Route('/' ,name:'home')]
	public function home()
	{
		return $this -> render('base.html.twig');
	}

	#[Route('/inici' ,name:'inici')]
	public function inici()
	{
		return $this->render('inici.html.twig', array("seccions" => $this->seccions));
	}
}
?>