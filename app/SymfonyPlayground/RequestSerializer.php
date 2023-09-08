<?php

namespace App\SymfonyPlayground;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class RequestSerializer
{

    private Serializer $serializer;

    public function __construct()
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        $encoders         = [new XmlEncoder(), new JsonEncoder()];
        $normalizers      = [new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter)];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function serialize(RootClass $root_class): string
    {
        return $this->serializer->serialize($root_class, 'xml');
    }

    public function getSerializer(): Serializer
    {
        return $this->serializer;
    }

}
