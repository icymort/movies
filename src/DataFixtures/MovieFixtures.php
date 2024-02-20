<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Night');
        $movie->setReleaseYear(2008);
        $movie->setDescription('Description of the Dark Night');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2023/03/14/21/53/sculpture-7853242_1280.jpg');
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avangers: Endgame');
        $movie2->setReleaseYear(2008);
        $movie2->setDescription('Description of the Avangers: Endgame');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2023/06/29/02/54/hulk-8095537_1280.png');
        $manager->persist($movie2);

        $manager->flush();

    }
}
