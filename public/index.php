<?php
//Vous disposez du code de base permettant de définir une entité Book.
//
//Cette entité correspond à une table dont la structure est la suivante :
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
//La classe se situera dans le répertoire src/Entity/.
//
//<?php
//
//namespace App\Entity;
//
//class Book
//{
//    /** @var int */
//    private $id;
//
//    /** @var string */
//    private $isbn;
//
//    /** @var string */
//    private $name;
//
//    /** @var string */
//    private $abstract;
//
//    /** @var int */
//    private $numberOfPages;
//
//    /** @var \DateTimeInterface */
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
