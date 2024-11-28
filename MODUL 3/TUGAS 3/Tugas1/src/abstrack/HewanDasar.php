<<<<<<< HEAD
<?php

namespace Project\Abstracts;

abstract class HewanDasar
{
    protected string $nama;
    protected string $spesies;

    public function __construct(string $nama, string $spesies)
    {
        $this->nama = $nama;
        $this->spesies = $spesies;
    }

    abstract public function bergerak(): string;

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getSpesies(): string
    {
        return $this->spesies;
    }
}
=======
<?php

namespace Project\Abstracts;

abstract class HewanDasar
{
    protected string $nama;
    protected string $spesies;

    public function __construct(string $nama, string $spesies)
    {
        $this->nama = $nama;
        $this->spesies = $spesies;
    }

    abstract public function bergerak(): string;

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getSpesies(): string
    {
        return $this->spesies;
    }
}
>>>>>>> 72869898264302d6e995d5cec64cd64356087809
