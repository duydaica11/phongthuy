<?php
declare (strict_types=1);
namespace MailPoetVendor\Doctrine\ORM\Query\AST\Functions;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Doctrine\ORM\Query\AST\PathExpression;
use MailPoetVendor\Doctrine\ORM\Query\Lexer;
use MailPoetVendor\Doctrine\ORM\Query\Parser;
use MailPoetVendor\Doctrine\ORM\Query\QueryException;
use MailPoetVendor\Doctrine\ORM\Query\SqlWalker;
use function reset;
use function sprintf;
class IdentityFunction extends FunctionNode
{
 public $pathExpression;
 public $fieldMapping;
 public function getSql(SqlWalker $sqlWalker)
 {
 $platform = $sqlWalker->getEntityManager()->getConnection()->getDatabasePlatform();
 $quoteStrategy = $sqlWalker->getEntityManager()->getConfiguration()->getQuoteStrategy();
 $dqlAlias = $this->pathExpression->identificationVariable;
 $assocField = $this->pathExpression->field;
 $qComp = $sqlWalker->getQueryComponent($dqlAlias);
 $class = $qComp['metadata'];
 $assoc = $class->associationMappings[$assocField];
 $targetEntity = $sqlWalker->getEntityManager()->getClassMetadata($assoc['targetEntity']);
 $joinColumn = reset($assoc['joinColumns']);
 if ($this->fieldMapping !== null) {
 if (!isset($targetEntity->fieldMappings[$this->fieldMapping])) {
 throw new QueryException(sprintf('Undefined reference field mapping "%s"', $this->fieldMapping));
 }
 $field = $targetEntity->fieldMappings[$this->fieldMapping];
 $joinColumn = null;
 foreach ($assoc['joinColumns'] as $mapping) {
 if ($mapping['referencedColumnName'] === $field['columnName']) {
 $joinColumn = $mapping;
 break;
 }
 }
 if ($joinColumn === null) {
 throw new QueryException(sprintf('Unable to resolve the reference field mapping "%s"', $this->fieldMapping));
 }
 }
 // The table with the relation may be a subclass, so get the table name from the association definition
 $tableName = $sqlWalker->getEntityManager()->getClassMetadata($assoc['sourceEntity'])->getTableName();
 $tableAlias = $sqlWalker->getSQLTableAlias($tableName, $dqlAlias);
 $columnName = $quoteStrategy->getJoinColumnName($joinColumn, $targetEntity, $platform);
 return $tableAlias . '.' . $columnName;
 }
 public function parse(Parser $parser)
 {
 $parser->match(Lexer::T_IDENTIFIER);
 $parser->match(Lexer::T_OPEN_PARENTHESIS);
 $this->pathExpression = $parser->SingleValuedAssociationPathExpression();
 if ($parser->getLexer()->isNextToken(Lexer::T_COMMA)) {
 $parser->match(Lexer::T_COMMA);
 $parser->match(Lexer::T_STRING);
 $this->fieldMapping = $parser->getLexer()->token['value'];
 }
 $parser->match(Lexer::T_CLOSE_PARENTHESIS);
 }
}
