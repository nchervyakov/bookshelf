<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nikolay Chervyakov 
 * Date: 28.04.2014
 * Time: 20:57
 */


namespace Bookshelf\AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Bookshelf\AppBundle\Entity\Library;

class LibraryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $library = new Library();
        $library->setName('Первая');
        $em->persist($library);

        $library2 = new Library();
        $library2->setName('Имени Горького');
        $em->persist($library2);

        $library3 = new Library();
        $library3->setName('Центральная');
        $em->persist($library3);

        $em->flush();

        $this->addReference('library_first', $library);
        $this->addReference('library_gorkogo', $library2);
        $this->addReference('library_central', $library3);
    }

    public function getOrder()
    {
        return 1; // This represents the order in which fixtures will be loaded
    }
}
