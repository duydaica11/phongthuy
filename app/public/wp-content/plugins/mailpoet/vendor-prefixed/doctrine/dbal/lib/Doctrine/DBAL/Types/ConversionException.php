<?php
namespace MailPoetVendor\Doctrine\DBAL\Types;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Doctrine\DBAL\Exception;
use Throwable;
use function get_class;
use function gettype;
use function implode;
use function is_object;
use function is_scalar;
use function sprintf;
use function strlen;
use function substr;
class ConversionException extends Exception
{
 public static function conversionFailed($value, $toType, ?Throwable $previous = null)
 {
 $value = strlen($value) > 32 ? substr($value, 0, 20) . '...' : $value;
 return new self('Could not convert database value "' . $value . '" to Doctrine Type ' . $toType, 0, $previous);
 }
 public static function conversionFailedFormat($value, $toType, $expectedFormat, ?Throwable $previous = null)
 {
 $value = strlen($value) > 32 ? substr($value, 0, 20) . '...' : $value;
 return new self('Could not convert database value "' . $value . '" to Doctrine Type ' . $toType . '. Expected format: ' . $expectedFormat, 0, $previous);
 }
 public static function conversionFailedInvalidType($value, $toType, array $possibleTypes, ?Throwable $previous = null)
 {
 $actualType = is_object($value) ? get_class($value) : gettype($value);
 if (is_scalar($value)) {
 return new self(sprintf("Could not convert PHP value '%s' of type '%s' to type '%s'. Expected one of the following types: %s", $value, $actualType, $toType, implode(', ', $possibleTypes)), 0, $previous);
 }
 return new self(sprintf("Could not convert PHP value of type '%s' to type '%s'. Expected one of the following types: %s", $actualType, $toType, implode(', ', $possibleTypes)), 0, $previous);
 }
 public static function conversionFailedSerialization($value, $format, $error)
 {
 $actualType = is_object($value) ? get_class($value) : gettype($value);
 return new self(sprintf("Could not convert PHP type '%s' to '%s', as an '%s' error was triggered by the serialization", $actualType, $format, $error));
 }
 public static function conversionFailedUnserialization(string $format, string $error) : self
 {
 return new self(sprintf("Could not convert database value to '%s' as an error was triggered by the unserialization: '%s'", $format, $error));
 }
}
