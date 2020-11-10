<?php

namespace App\DataFixtures;

use App\Entity\Offres;
use App\Entity\Contrats;
use App\Entity\TypeContrats;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class OffresFixture extends Fixture
{
    protected $faker;
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        // Contrats
        $cdd = new Contrats();
        $cdd->setContrats("CDD");
        $manager->persist($cdd);

        $cdi = new Contrats();
        $cdi->setContrats("CDI");
        $manager->persist($cdi);

        // Type Contrats
        $freelance = new Contrats();
        $freelance->setContrats("FREELANCE");
        $manager->persist($freelance);

        $temps_plein = new TypeContrats();
        $temps_plein->setType("Temps Plein");
        $manager->persist($temps_plein);

        $temps_partiel = new TypeContrats();
        $temps_partiel->setType("Temps Partiel");
        $manager->persist($temps_partiel);

        // Offres
        for ($i = 0; $i < 25; $i++) {
            $contrat = $faker->randomElement($array = array($cdd, $cdi, $freelance));
            $debut_contrat = $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null);
            if ($contrat != $cdi) {
                $mission_end = $faker->dateTimeBetween($startDate = 'now', $endDate = '10 years', $timezone = null);
            } else {
                $mission_end = null;
            }

            $offre = new Offres();
            $offre->setTitle($faker->sentence($nbWords = 10, $variableNbWords = true))
                ->setDescription($faker->paragraph($nbSentences = 5, $variableNbSentences = true))
                ->setAdresse($faker->address)
                ->setCodePostal(str_replace(' ', '', $faker->postcode))
                ->setVille($faker->city)
                ->setCreatedAt($debut_contrat)
                ->setUpdatedAt($faker->dateTimeBetween($startDate = $debut_contrat, $endDate = 'now', $timezone = null))
                ->setMissionEnd($mission_end)
                ->setContrat($contrat)
                ->setTypeContrat($faker->randomElement($array = array($temps_plein, $temps_partiel)));

            $manager->persist($offre);
        }

        $manager->flush();
    }
}
