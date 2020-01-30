<?php


namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORY = [
        'Clowns',
        'Jonglage',
        'Dresseur',
        'Funambule',
        'Contortionniste'
    ];

    public function load(ObjectManager $manager)
    {
        foreach(self::CATEGORY as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
        }
        $manager->flush();
    }
}