<?php

// src/OC/PlatformBundle/DataFixtures/ORM/LoadAdvert.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;

class LoadAdvert implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // CREATION DE L'ADVERT 1 ---
    $advert1 = new Advert();
    $advert1
        ->setAuthor('Antoine')
        ->setContent('Recherche un développeur Symfony2 débutant, blabla')
        ->setTitle('Développeur Symfony2')
    ;
    
    $date = new \Datetime();
    
    // On modifie la date par défaut avec 25 jrs de moins et 20 jours de moins dans l'update 
    $date->setTimestamp($advert1->getDate()->getTimestamp()-(20*24*60*60));  
    $advert1->setUpdatedAt($date);
    $date->setTimestamp($advert1->getDate()->getTimestamp()-(25*24*60*60));  
    $advert1->setDate($date);
    
    
    // Ajout de 2 candidatures pour cette advert
    $app1 = new Application();
    $app2 = new Application();
    $app1
        ->setAuthor('Charlie')
        ->setContent('Je suis motivé et je remplie toutes les conditions pour ce poste.')
        ->setAdvert($advert1)
    ;
    $app2
        ->setAuthor('Martin')
        ->setContent('Je correspond tout à fait à ce post.')
        ->setAdvert($advert1)
    ;
    
    // On persiste les candidatures
    $manager->persist($app1);
    $manager->persist($app2);
    
    $advert1->addApplication($app1);
    $advert1->addApplication($app2);
    
    // On persist l'advert 1
    $manager->persist($advert1);
    
    //--- CREATION DE L'ADVERT 2 ---
    $advert2 = new Advert();
    $advert2
        ->setAuthor('Michel')
        ->setContent('Recherche un développeur PHP, HTML5, CSS3 expert.')
        ->setTitle('Développeur Web')
        ->setDate($date)
    ;
    
    // On persiste l'advert 2
    $manager->persist($advert2);
    
    //--- CREATION DE L'ADVERT 3 en 10 fois ---
    for($i=0;$i<10;$i++) {
        $advert3 = new Advert();
        $advert3
            ->setAuthor('Momo'.$i)
            ->setContent('Recherche un Designer Prestashop avec déjà de l\'expérience dans ce domaine')
            ->setTitle('Designer Prestashop - '.$i)
        ;

        $date = new \Datetime();
        // On modifie la date par défaut avec 8 jrs de moins et 3 jrs de moins dans l'update
        $date->setTimestamp($advert3->getDate()->getTimestamp()-(3*24*60*60));
        $advert3->setUpdatedAt($date);
        $date->setTimestamp($advert3->getDate()->getTimestamp()-(8*24*60*60));
        $advert3->setDate($date);

        // On persiste l'advert 3
        $manager->persist($advert3);
    }

    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}

