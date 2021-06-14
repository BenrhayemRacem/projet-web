<?php

namespace App\Entity;



use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FirstName;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isComfirmed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Bio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $unique_id;

    public function __construct()
    {
        $this->roles = array('ROLE_USER');
        $this->Course = new ArrayCollection();
        $this->Courses = new ArrayCollection();
        $this->Projects = new ArrayCollection();
    }

    /**
     *
     * @ORM\OneToMany(targetEntity=Course::class, mappedBy="user")
     */

    private $Course;

    /**
     * @ORM\ManyToMany(targetEntity=Course::class, inversedBy="users")
     */
    private $Courses;

    /**
     * @ORM\ManyToMany(targetEntity=Project::class, inversedBy="users")
     */
    private $Projects;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string)$this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string)$this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    public function getIsComfirmed(): ?bool
    {
        return $this->isComfirmed;
    }

    public function setIsComfirmed(bool $isComfirmed): self
    {
        $this->isComfirmed = $isComfirmed;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->Bio;
    }

    public function setBio(?string $Bio): self
    {
        $this->Bio = $Bio;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }


    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }

    /**
     * @return Collection|Course[]
     */
    public function getCourses(): Collection
    {
        return $this->Courses;
    }

    public function addCourse(Course $course): self
    {
        if (!$this->Courses->contains($course)) {
            $this->Courses[] = $course;
        }


        return $this;
    }


    public function getUniqueId(): ?string
    {
        return $this->unique_id;
    }

    public function setUniqueId(?string $unique_id): self
    {
        $this->unique_id = $unique_id;

        return $this;
    }


    public function removeCourse(Course $course): self
    {
        $this->Courses->removeElement($course);

        return $this;
    }

    /**
     * @return Collection|Project[]
     */
    public function getProjects(): Collection
    {
        return $this->Projects;
    }

    public function addProject(Project $project): self
    {
        if (!$this->Projects->contains($project)) {
            $this->Projects[] = $project;
        }

        return $this;
    }

    public function removeProject(Project $project): self
    {
        $this->Projects->removeElement($project);

        return $this;
    }
}

