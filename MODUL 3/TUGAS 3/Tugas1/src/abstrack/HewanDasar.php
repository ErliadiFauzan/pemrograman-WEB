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
