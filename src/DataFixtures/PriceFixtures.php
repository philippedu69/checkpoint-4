<?php


namespace App\DataFixtures;

use App\Entity\Price;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PriceFixtures extends Fixture
{
    const PRICE = [
        'Adulte' => 10,
        'Enfants - 10 ans' => 7,
        'Groupe adulte' => 8,
        'Groupe enfant' => 5,
        'Ecole'=> 5
    ];

    /**
     * Load data fixtures with the passed EntityManager
     */
    public function load(ObjectManager $manager)
    {
        foreach(self::PRICE as $title => $data)
        {
            $price = new Price();
            $price->setTitle($title);
            $price->setCount($data);
            $manager->persist($price);
        }
        $manager->flush();
    }
}