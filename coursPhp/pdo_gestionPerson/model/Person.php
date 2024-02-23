<?php
class Person
{
    private string $fullName;
    private string $email;
    private int $age;

    private int $id;

    public function __construct(int $id, string $fullName, string $email, int $age)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->age = $age;
        $this->id = $id;
    }


    /**
     * Get the value of fullName
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * Set the value of fullName
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function __toString()
    {
        return "<br>  Nom : " . $this->fullName .
            '<br> age : ' . $this->age .
            '<br>  email ' . $this->email .
            " <br>  id  " . $this->id . '<br>';
    }
}
