<?php
declare (strict_types=1);
namespace MailPoetVendor\Doctrine\ORM\Mapping;
if (!defined('ABSPATH')) exit;
use InvalidArgumentException;
use LogicException;
use ReflectionProperty;
use function assert;
use function func_get_args;
use function func_num_args;
use function is_object;
use function sprintf;
final class ReflectionReadonlyProperty extends ReflectionProperty
{
 private $wrappedProperty;
 public function __construct(ReflectionProperty $wrappedProperty)
 {
 if (!$wrappedProperty->isReadOnly()) {
 throw new InvalidArgumentException('Given property is not readonly.');
 }
 $this->wrappedProperty = $wrappedProperty;
 parent::__construct($wrappedProperty->class, $wrappedProperty->name);
 }
 public function getValue(?object $object = null) : mixed
 {
 return $this->wrappedProperty->getValue(...func_get_args());
 }
 public function setValue(mixed $objectOrValue, mixed $value = null) : void
 {
 if (func_num_args() < 2 || $objectOrValue === null || !$this->isInitialized($objectOrValue)) {
 $this->wrappedProperty->setValue(...func_get_args());
 return;
 }
 assert(is_object($objectOrValue));
 if (parent::getValue($objectOrValue) !== $value) {
 throw new LogicException(sprintf('Attempting to change readonly property %s::$%s.', $this->class, $this->name));
 }
 }
}
