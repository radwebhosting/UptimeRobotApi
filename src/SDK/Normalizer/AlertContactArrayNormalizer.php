<?php

namespace Montross50\UptimeRobotApi\SDK\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AlertContactArrayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContactArray';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Montross50\UptimeRobotApi\SDK\Model\AlertContactArray;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Montross50\UptimeRobotApi\SDK\Model\AlertContactArray();
        if (property_exists($data, 'alertcontact')) {
            $values = array();
            foreach ($data->{'alertcontact'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Montross50\\UptimeRobotApi\\SDK\\Model\\AlertContact', 'json', $context);
            }
            $object->setAlertcontact($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAlertcontact()) {
            $values = array();
            foreach ($object->getAlertcontact() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'alertcontact'} = $values;
        }
        return $data;
    }
}