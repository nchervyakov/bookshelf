<?php

namespace Bookshelf\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMSA;
use Symfony\Component\Validator\Constraints\Expression;


/**
 * Book
 *
 * @ORM\Table(name="books")
 * @ORM\Entity
 */
class Book
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var Library
     *
     * @ORM\ManyToOne(targetEntity="Library")
     * @ORM\JoinColumn(name="library_id", referencedColumnName="id", nullable=false)
     * @JMSA\Exclude()
     */
    private $library;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Book
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return Library
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * @param Library $library
     * @return Book
     */
    public function setLibrary($library)
    {
        $this->library = $library;

        return $this;
    }

    /**
     * @return int
     * @JMSA\VirtualProperty()
     * @JMSA\SerializedName("library")
     */
    public function getLibraryId()
    {
        return $this->getLibrary()->getId();
    }
}
