<?php
// Définissez trois entités correspondant à la description de table suivante :
//
//Table Book
//Nom
//
//Type
//
//Null
//
//Clé primaire
//
//Unique
//
//id
//
//int(11)
//
//Non
//
//Oui
//
//isbn
//
//varchar(255)
//
//Non
//
//Non
//
//Oui
//
//name
//
//varchar(255)
//
//Non
//
//Non
//
//Non
//
//abstract
//
//longtext
//
//Oui
//
//Non
//
//Non
//
//number_of_pages
//
//int(11)
//
//Non
//
//Non
//
//Non
//
//date_published
//
//datetime
//
//Non
//
//Non
//
//Non
//
//Table Comment
//Nom
//
//Type
//
//Null
//
//Clé primaire
//
//Unique
//
//id
//
//int(11)
//
//Non
//
//Oui
//
//text
//
//longtext
//
//Non
//
//Non
//
//Non
//
//book_id
//
//int(11)
//
//Non
//
//Non
//
//Non
//
//Table Author
//Nom
//
//Type
//
//Null
//
//Clé primaire
//
//Unique
//
//id
//
//int(11)
//
//Non
//
//Oui
//
//name
//
//varchar(255)
//
//Non
//
//Non
//
//Non
//
//Table Book_Author
//Nom
//
//Type
//
//Null
//
//Clé primaire
//
//Unique
//
//book_id
//
//int(11)
//
//Non
//
//Oui
//
//author_id
//
//int(11)
//
//Non
//
//Oui
//
//Les classes se situeront dans le répertoire src/Entity/.
//
//On précisera pour chaque attribut les annotations Doctrine nécessaires.
//
//Une fois terminé, vous pourrez valider votre schéma avec la commande
// php bin/console doctrine:schema:validate --skip-sync.
//
//Vous disposez du code de base de l'entité Book.

//<?php
//
//namespace App\Entity;
//
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * @ORM\Entity()
// */
//class Book
//{
//    /**
//     * @ORM\Id()
//     * @ORM\GeneratedValue()
//     * @ORM\Column(type="integer")
//     */
//    private $id;
//
//    /**
//     * @ORM\Column(type="string", length=255, unique=true)
//     */
//    private $isbn;
//
//    /**
//     * @ORM\Column(type="string", length=255)
//     */
//    private $name;
//
//    /**
//     * @ORM\Column(type="text", nullable=true)
//     */
//    private $abstract;
//
//    /**
//     * @ORM\Column(type="integer")
//     */
//    private $numberOfPages;
//
//    /**
//     * @ORM\Column(type="datetime")
//     */
//    private $datePublished;
//
//    public function getId(): ?int
//    {
//        return $this->id;
//    }
//
//    public function getIsbn(): ?string
//    {
//        return $this->isbn;
//    }
//
//    public function setIsbn(string $isbn): self
//    {
//        $this->isbn = $isbn;
//
//        return $this;
//    }
//
//    public function getName(): ?string
//    {
//        return $this->name;
//    }
//
//    public function setName(string $name): self
//    {
//        $this->name = $name;
//
//        return $this;
//    }
//
//    public function getAbstract(): ?string
//    {
//        return $this->abstract;
//    }
//
//    public function setAbstract(?string $abstract): self
//    {
//        $this->abstract = $abstract;
//
//        return $this;
//    }
//
//    public function getNumberOfPages(): ?int
//    {
//        return $this->numberOfPages;
//    }
//
//    public function setNumberOfPages(int $numberOfPages): self
//    {
//        $this->numberOfPages = $numberOfPages;
//
//        return $this;
//    }
//
//    public function getDatePublished(): ?\DateTimeInterface
//    {
//        return $this->datePublished;
//    }
//
//    public function setDatePublished(\DateTimeInterface $datePublished): self
//    {
//        $this->datePublished = $datePublished;
//
//        return $this;
//    }
//}

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
