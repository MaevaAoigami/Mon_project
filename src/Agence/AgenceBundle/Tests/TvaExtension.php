<?php

namespace Agence\AgenceBundle\Twig\Extension;

class TvaExtension extends \Twig\Extension
{
	public function getFilters()
	{
		return array(new \Twing_SimpleFilter('tva', array($this, 'calculTva')));
	}

	public function calculTva($prixHT, $tva)
	{
		return $prixHT / $tva;
	}

	public function getName()
	{
		return 'tva_extension';
	}
}