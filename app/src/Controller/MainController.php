<?php

namespace App\Controller;

use App\Repository\PostsRepository;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(PostsRepository $postsRepository, UsersRepository $usersRepository): Response
    {
        $lastPost = $postsRepository->findOneBy([], ['id' => 'DESC']);
        $posts = $postsRepository->findBy([], ['id' => 'DESC'], 8);
//        $posts = $postsRepository->findAll();

        $authors = $usersRepository->getUserByPosts(4);

        return $this->render('main/index.html.twig', compact('lastPost','posts', 'authors'));
    }

    #[Route('/mentions-legales', name: 'app_mentions')]
    public function mentions(): Response
    {
        return $this->render('main/mentions.html.twig');
    }

    #[Route('/change-locale/{locale}', name: 'change_locale')]
    public function changeLocale(string $locale, Request $request): Response
    {
        // On stocke la locale dans la session
        $request->getSession()->set('_locale', $locale);

        // On revient sur la page précédente
        return $this->redirect($request->headers->get('referer'));
    }
}
