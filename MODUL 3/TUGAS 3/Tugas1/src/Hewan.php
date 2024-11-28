<<<<<<< HEAD
<?php

namespace Project;

use Project\Traits\SuaraTrait;
use Project\Abstracts\HewanDasar;

class Kucing extends HewanDasar
{
    use SuaraTrait;

    public function bergerak(): string
    {
        return "Kucing ini berjalan dengan anggun.";
    }

    // Magic method __toString
    public function __toString(): string
    {
        return "Ini adalah kucing bernama {$this->nama}, dari spesies {$this->spesies}.";
    }
}

class Burung extends HewanDasar
{
    use SuaraTrait;

    public function bergerak(): string
    {
        return "Burung ini sedang terbang.";
    }

    // Magic method __toString
    public function __toString(): string
    {
        return "Ini adalah burung bernama {$this->nama}, dari spesies {$this->spesies}.";
    }
}
=======
<?php

namespace Project;

use Project\Traits\SuaraTrait;
use Project\Abstracts\HewanDasar;

class Kucing extends HewanDasar
{
    use SuaraTrait;

    public function bergerak(): string
    {
        return "Kucing ini berjalan dengan anggun.";
    }

    // Magic method __toString
    public function __toString(): string
    {
        return "Ini adalah kucing bernama {$this->nama}, dari spesies {$this->spesies}.";
    }
}

class Burung extends HewanDasar
{
    use SuaraTrait;

    public function bergerak(): string
    {
        return "Burung ini sedang terbang.";
    }

    // Magic method __toString
    public function __toString(): string
    {
        return "Ini adalah burung bernama {$this->nama}, dari spesies {$this->spesies}.";
    }
}
>>>>>>> 72869898264302d6e995d5cec64cd64356087809
