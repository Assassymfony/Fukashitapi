<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Profil;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class ProfilController extends AbstractController
{

    public function __construct(private PostRepository $postRepository,private EntityManager $entityManager) {}

    #[Route('/api/profils/{id}/post/follow', name: 'app_profil_followed')]
    public function index(int $id): Response
    {
        $profil = $this->entityManager->find(Profil::class,$id);
        if ($profil instanceof Profil) {
            return new Response('',200,$this->postRepository->getPostFromFollowed($profil));
        }
        return new Response('',400);
    }
}
