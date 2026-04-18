<?php

use Behat\Behat\Context\Context;
use TechShop\Panier;
use TechShop\CodePromo;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
	private Panier $panier;
	private ?string $dernierMessage = null;
	
	/**
	 * @Given mon panier est vide
	 */
	public function monPanierEstVide(): void
	{
		$this->panier = new Panier();
	}
	
	/**
	 * @Then le total de mon panier est :total €
	 */
	public function leTotalEstDe(float $total): void
	{
		$reel = $this->panier->calculerTotal();
		if (abs($reel - $total) > 0.001) {
			throw new \Exception("Attendu $total €, obtenu $reel €");
		}
	}
}
