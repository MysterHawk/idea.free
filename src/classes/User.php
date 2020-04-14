<?php


declare(strict_types = 1);

namespace IdeaFree;

/**
 * undocumented class
 */
class User
{

    # Primary attributes
    private int $id;
    private string $username;
    private string $email;
    private string $password;

    # Secondary attributes
    private string $dateCreation;
    private string $dateLastLogin;
    private string $dateLastChange;
    private bool $statusAccount;
    private string $lang;


    # constructor

    public function __constuct()
    {
        $this->id = 0;
        $this->username = "";
        $this->email = "";
        $this->password = "";
        $this->dateCreation = "";
        $this->dateLastLogin = "";
        $this->dateLastChange = "";
        $this->disabled = "";
        $this->lang = "";
    }

    # Setter

    private function setId(int $id): void
    {
        $this->id = $id;
    }

    private function setUsername(string $username): void
    {
        $this->username = $username;
    }

    private function setEmail(string $email): void
    {
        $this->email = $email;
    }

    private function setPassword(string $password): void
    {
        $this->password = $password;
    }

    private function setDateCreation(string $dateCreation): void
    {
        $this->dateCreation = $dateCreation;
    }

    private function setDateLastLogin(string $dateLastLogin): void
    {
        $this->dateLastLogin = $dateLastLogin;
    }

    private function setDateLastChange(string $dateLastChange): void
    {
        $this->dateLastChange = $dateLastChange;
    }

    private function setStatusAccount(bool $statusAccount): void
    {
        $this->statusAccount = $statusAccount;
    }

    private function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    # Getter

    private function getId(): int
    {
        return $this->id;
    }

    private function getUsername(): string
    {
        return $this->username;
    }

    private function getEmail(): string
    {
        return $this->email;
    }

    private function getPassword(): string
    {
        return $this->password;
    }

    private function getDateCreation(): string
    {
        return $this->dateCreation;
    }

    private function getDateLastLogin(): string
    {
        return $this->dateLastLogin;
    }

    private function getDateLastChange(): string
    {
        return $this->dateLastChange;
    }

    private function getStatusAccount(): bool
    {
        return $this->statusAccount;
    }

    private function getLang(): string
    {
        return $this->lang;
    }
}
