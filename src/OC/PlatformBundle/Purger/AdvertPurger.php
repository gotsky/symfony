<?php
// src/OC/PlatformBundle/Purger/AdvertPurger.php

namespace OC\PlatformBundle\Purger;

use  Doctrine\ORM\EntityManagerInterface;

class AdvertPurger
{
  	/**
	*  @var  EntityManagerInterface
	*/
	private $em;

	//  On  injecte  l’EntityManager
	public function __construct(EntityManagerInterface $em)
	{
		$this->em = $em;
	}

	public function purge($days){
		$listAdverts = $this->em->getRepository('OCPlatformBundle:Advert')->getObsoleteAdverts($days);

		foreach ($listAdverts as $value) {
			echo $value->getId();
			$this->em->remove($value);   	
		}

		$this->em->flush();
	}
}
