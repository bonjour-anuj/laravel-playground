<?php

namespace App\SymfonyPlayground;

use Symfony\Component\Serializer\Annotation\SerializedName;

class RootClass extends AbstractRootClass
{

    #[SerializedName("leaf_property")]
    private LeafClass $leaf;

    public function __construct()
    {
        $this->leaf = new LeafClass("Anuj Bhatanagr", 39);
    }

    public function getLeaf(): LeafClass
    {
        return $this->leaf;
    }

    public function __toString(): string
    {
        return $this->leaf;
    }


}
