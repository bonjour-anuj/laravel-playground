<?php

namespace App\SymfonyPlayground;

use App\SymfonyPlayground\Serialization\BulkPaymentOBPRequest;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class OBPRequestSerializer
{

    private Serializer $serializer;

    public function __construct()
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        $encoders         = [new XmlEncoder([XmlEncoder::ROOT_NODE_NAME=>'root']), new JsonEncoder()];
        $normalizers      = [new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter)];
        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function serialize(BulkPaymentOBPRequest $obpRequest): string
    {
        return $this->serializer->serialize($obpRequest, 'xml');
    }

    public function getSerializer(): Serializer
    {
        return $this->serializer;
    }

}
