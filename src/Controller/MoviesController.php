<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        // findAll() - SELECT * FROM movies;
        // find() - SELECT * from movies WHERE id = 10;
        // findBy() - SELECT * from movies ORDER BY in DESC;
        // findOneBy() - SELECT *from movies WHERE id 10 AND
        // title = 'The Dark Night' ORDER BY id DESC;
        $repository = $this->entityManager->getRepository(Movie::class);
        $movies = $repository->getClassName();

        dd($movies);

        return $this->render('index.html.twig');
    }
}
