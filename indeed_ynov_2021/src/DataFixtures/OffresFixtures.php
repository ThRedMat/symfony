<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Offres;

class OffresFixtures extends Fixture
{
    protected $faker;
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($i=0; $i < 25; $i++) { 
            $offre = new Offres();
            $offre->setTitle($faker->sentence($nbWords = 10, $variableNbWords = true))
                  ->setVille($faker->city)
                  ->setType($faker->randomElement($array = array("CDD", "CDI", "FREELANCE")))
                  ->setDuration($faker->randomElement($array = array("Temps plein", "Temps partiel")));

            $manager->persist($offre);
        }

        $manager->flush();
    }
}
