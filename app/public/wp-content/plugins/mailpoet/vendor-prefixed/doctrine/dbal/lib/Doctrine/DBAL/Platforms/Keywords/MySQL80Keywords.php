<?php
namespace MailPoetVendor\Doctrine\DBAL\Platforms\Keywords;
if (!defined('ABSPATH')) exit;
use function array_merge;
class MySQL80Keywords extends MySQL57Keywords
{
 public function getName()
 {
 return 'MySQL80';
 }
 protected function getKeywords()
 {
 $keywords = parent::getKeywords();
 $keywords = array_merge($keywords, ['ADMIN', 'ARRAY', 'CUBE', 'CUME_DIST', 'DENSE_RANK', 'EMPTY', 'EXCEPT', 'FIRST_VALUE', 'FUNCTION', 'GROUPING', 'GROUPS', 'JSON_TABLE', 'LAG', 'LAST_VALUE', 'LATERAL', 'LEAD', 'MEMBER', 'NTH_VALUE', 'NTILE', 'OF', 'OVER', 'PERCENT_RANK', 'PERSIST', 'PERSIST_ONLY', 'RANK', 'RECURSIVE', 'ROW', 'ROWS', 'ROW_NUMBER', 'SYSTEM', 'WINDOW']);
 return $keywords;
 }
}
