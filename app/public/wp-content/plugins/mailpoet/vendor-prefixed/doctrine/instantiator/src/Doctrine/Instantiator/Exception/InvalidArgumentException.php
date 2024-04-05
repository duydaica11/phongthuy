<?php
namespace MailPoetVendor\Doctrine\Instantiator\Exception;
if (!defined('ABSPATH')) exit;
use InvalidArgumentException as BaseInvalidArgumentException;
use ReflectionClass;
use function interface_exists;
use function sprintf;
use function trait_exists;
class InvalidArgumentException extends BaseInvalidArgumentException implements ExceptionInterface
{
 public static function fromNonExistingClass(string $className) : self
 {
 if (interface_exists($className)) {
 return new self(sprintf('The provided type "%s" is an interface, and cannot be instantiated', $className));
 }
 if (trait_exists($className)) {
 return new self(sprintf('The provided type "%s" is a trait, and cannot be instantiated', $className));
 }
 return new self(sprintf('The provided class "%s" does not exist', $className));
 }
 public static function fromAbstractClass(ReflectionClass $reflectionClass) : self
 {
 return new self(sprintf('The provided class "%s" is abstract, and cannot be instantiated', $reflectionClass->getName()));
 }
 public static function fromEnum(string $className) : self
 {
 return new self(sprintf('The provided class "%s" is an enum, and cannot be instantiated', $className));
 }
}
