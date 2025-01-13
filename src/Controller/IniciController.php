<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IniciController
{
	private $contactes = array(
	array("codi" => 1, "nom" => "Salvador Sala",
	"telefon" => "638961244", "email" => "salvasala@simarro.org"),
	array("codi" => 2, "nom" => "Anna Llopis",
	"telefon" => "669332004", "email" => "annallopis@simarro.org"),
	array("codi" => 3, "nom" => "Marc Sanchis",
	"telefon" => "962286040", "email" => "marcsanchis@simarro.org"),
	array("codi" => 4, "nom" => "Laura Palop",
	"telefon" => "663568890", "email" => "laurapalop@simarro.org"),
	array("codi" => 5, "nom" => "Sara Sidle",
	"telefon" => "638765434", "email" => "sarasidle@simarro.org"),
	);

	#[Route('/' ,name:'inici')]
	public function inici()
	{
		return new Response("<h1>Projecte Gestió Retail de 2n de DAW<h1>");
	}
}
?>