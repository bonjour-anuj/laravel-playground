<?php

namespace App\SymfonyPlayground;

use Symfony\Component\Serializer\Annotation\SerializedName;

class LeafClass
{
    #[SerializedName("customer_name")]
    private string $name;

    #[SerializedName("customer_age")]
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function __toString(): string
    {
        return $this->name . "-" . $this->age;
    }


}
