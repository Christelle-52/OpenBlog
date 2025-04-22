<?php

namespace App\DataFixtures;

use App\Entity\Posts;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class PostsFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(private readonly SluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
         $newPost = new Posts();
         $newPost->setUsers($this->getReference('Admin', Users::class));
         $newPost->setTitle('Ceci est un titre');
         $newPost->setSlug($this->slugger->slug($newPost->getTitle())->lower());
         $newPost->setContent('Ceci est le contenu');
         $newPost->setFeaturedImage('default.webp');

         $manager->persist($newPost);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
                UsersFixtures::class
        ];
    }
}
