<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class csstidy_print
{
 public $parser;
 public $input_css = '';
 public $output_css = '';
 public $output_css_plain = '';
 public $css;
 public $template;
 public $tokens;
 public $charset;
 public $import;
 public $namespace;
 public function __construct($css)
 {
 $this->parser = $css;
 $this->css =& $css->css;
 $this->template =& $css->template;
 $this->tokens =& $css->tokens;
 $this->charset =& $css->charset;
 $this->import =& $css->import;
 $this->namespace =& $css->namespace;
 }
 public function _reset()
 {
 $this->output_css = '';
 $this->output_css_plain = '';
 }
 public function plain($default_media = '')
 {
 $this->_print(\true, $default_media);
 return $this->output_css_plain;
 }
 public function formatted($default_media = '')
 {
 $this->_print(\false, $default_media);
 return $this->output_css;
 }
 public function formatted_page($doctype = 'html5', $externalcss = \true, $title = '', $lang = 'en')
 {
 switch ($doctype) {
 case 'html5':
 $doctype_output = '<!DOCTYPE html>';
 break;
 case 'xhtml1.0strict':
 $doctype_output = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
 break;
 case 'xhtml1.1':
 default:
 $doctype_output = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
 break;
 }
 $output = $cssparsed = '';
 $this->output_css_plain =& $output;
 $output .= $doctype_output . "\n" . '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="' . $lang . '"';
 $output .= $doctype === 'xhtml1.1' ? '>' : ' lang="' . $lang . '">';
 $output .= "\n<head>\n <title>{$title}</title>";
 if ($externalcss) {
 $output .= "\n <style type=\"text/css\">\n";
 $cssparsed = \file_get_contents('cssparsed.css');
 $output .= $cssparsed;
 // Adds an invisible BOM or something, but not in css_optimised.php
 $output .= "\n</style>";
 } else {
 $output .= "\n" . ' <link rel="stylesheet" type="text/css" href="cssparsed.css" />';
 }
 $output .= "\n</head>\n<body><code id=\"copytext\">";
 $output .= $this->formatted();
 $output .= '</code>' . "\n" . '</body></html>';
 return $this->output_css_plain;
 }
 public function _print($plain = \false, $default_media = '')
 {
 if ($this->output_css && $this->output_css_plain) {
 return;
 }
 $output = '';
 if (!$this->parser->get_cfg('preserve_css')) {
 $this->_convert_raw_css($default_media);
 }
 $template =& $this->template;
 if ($plain) {
 $template = \array_map('strip_tags', $template);
 }
 if ($this->parser->get_cfg('timestamp')) {
 \array_unshift($this->tokens, array(\COMMENT, ' CSSTidy ' . $this->parser->version . ': ' . \date('r') . ' '));
 }
 if (!empty($this->charset)) {
 $output .= $template[0] . '@charset ' . $template[5] . $this->charset . $template[6] . $template[13];
 }
 if (!empty($this->import)) {
 for ($i = 0, $size = \count($this->import); $i < $size; $i++) {
 if (\substr($this->import[$i], 0, 4) === 'url(' && \substr($this->import[$i], -1, 1) === ')') {
 $this->import[$i] = '"' . \substr($this->import[$i], 4, -1) . '"';
 $this->parser->log('Optimised @import : Removed "url("', 'Information');
 } else {
 if (!\preg_match('/^".+"$/', $this->import[$i])) {
 // fixes a bug for @import ".." instead of the expected @import url("..")
 // If it comes in due to @import ".." the "" will be missing and the output will become @import .. (which is an error)
 $this->import[$i] = '"' . $this->import[$i] . '"';
 }
 }
 $output .= $template[0] . '@import ' . $template[5] . $this->import[$i] . $template[6] . $template[13];
 }
 }
 if (!empty($this->namespace)) {
 if (($p = \strpos($this->namespace, "url(")) !== \false && \substr($this->namespace, -1, 1) === ')') {
 $this->namespace = \substr_replace($this->namespace, '"', $p, 4);
 $this->namespace = \substr($this->namespace, 0, -1) . '"';
 $this->parser->log('Optimised @namespace : Removed "url("', 'Information');
 }
 $output .= $template[0] . '@namespace ' . $template[5] . $this->namespace . $template[6] . $template[13];
 }
 $in_at_out = [];
 $out =& $output;
 $indent_level = 0;
 foreach ($this->tokens as $key => $token) {
 switch ($token[0]) {
 case \AT_START:
 $out .= $template[0] . $this->_htmlsp($token[1], $plain) . $template[1];
 $indent_level++;
 if (!isset($in_at_out[$indent_level])) {
 $in_at_out[$indent_level] = '';
 }
 $out =& $in_at_out[$indent_level];
 break;
 case \SEL_START:
 if ($this->parser->get_cfg('lowercase_s')) {
 $token[1] = \strtolower($token[1]);
 }
 $out .= $token[1][0] !== '@' ? $template[2] . $this->_htmlsp($token[1], $plain) : $template[0] . $this->_htmlsp($token[1], $plain);
 $out .= $template[3];
 break;
 case \PROPERTY:
 if ($this->parser->get_cfg('case_properties') === 2) {
 $token[1] = \strtoupper($token[1]);
 } elseif ($this->parser->get_cfg('case_properties') === 1) {
 $token[1] = \strtolower($token[1]);
 }
 $out .= $template[4] . $this->_htmlsp($token[1], $plain) . ':' . $template[5];
 break;
 case \VALUE:
 $out .= $this->_htmlsp($token[1], $plain);
 if ($this->_seeknocomment($key, 1) == \SEL_END && $this->parser->get_cfg('remove_last_;')) {
 $out .= \str_replace(';', '', $template[6]);
 } else {
 $out .= $template[6];
 }
 break;
 case \SEL_END:
 $out .= $template[7];
 if ($this->_seeknocomment($key, 1) != \AT_END) {
 $out .= $template[8];
 }
 break;
 case \AT_END:
 if (\strlen($template[10])) {
 // indent the bloc we are closing
 $out = \str_replace("\n\n", "\r\n", $out);
 // don't fill empty lines
 $out = \str_replace("\n", "\n" . $template[10], $out);
 $out = \str_replace("\r\n", "\n\n", $out);
 }
 if ($indent_level > 1) {
 $out =& $in_at_out[$indent_level - 1];
 } else {
 $out =& $output;
 }
 $out .= $template[10] . $in_at_out[$indent_level];
 if ($this->_seeknocomment($key, 1) != \AT_END) {
 $out .= $template[9];
 } else {
 $out .= \rtrim($template[9]);
 }
 unset($in_at_out[$indent_level]);
 $indent_level--;
 break;
 case \IMPORTANT_COMMENT:
 case \COMMENT:
 $out .= $template[11] . '/*' . $this->_htmlsp($token[1], $plain) . '*/' . $template[12];
 break;
 }
 }
 $output = \trim($output);
 if (!$plain) {
 $this->output_css = $output;
 $this->_print(\true);
 } else {
 // If using spaces in the template, don't want these to appear in the plain output
 $this->output_css_plain = \str_replace('&#160;', '', $output);
 }
 }
 public function _seeknocomment($key, $move)
 {
 $go = $move > 0 ? 1 : -1;
 for ($i = $key + 1; \abs($key - $i) - 1 < \abs($move); $i += $go) {
 if (!isset($this->tokens[$i])) {
 return;
 }
 if ($this->tokens[$i][0] == \COMMENT) {
 $move += 1;
 continue;
 }
 return $this->tokens[$i][0];
 }
 }
 public function _convert_raw_css($default_media = '')
 {
 $this->tokens = array();
 $sort_selectors = $this->parser->get_cfg('sort_selectors');
 $sort_properties = $this->parser->get_cfg('sort_properties');
 // important comment section ?
 if (isset($this->css['!'])) {
 $this->parser->_add_token(\IMPORTANT_COMMENT, \rtrim($this->css['!']), \true);
 unset($this->css['!']);
 }
 foreach ($this->css as $medium => $val) {
 if ($sort_selectors) {
 \ksort($val);
 }
 if (\intval($medium) < \DEFAULT_AT) {
 // un medium vide (contenant @font-face ou autre @) ne produit aucun conteneur
 if (\strlen(\trim($medium))) {
 $parts_to_open = \explode('{', $medium);
 foreach ($parts_to_open as $part) {
 $this->parser->_add_token(\AT_START, $part, \true);
 }
 }
 } elseif ($default_media) {
 $this->parser->_add_token(\AT_START, $default_media, \true);
 }
 foreach ($val as $selector => $vali) {
 if ($sort_properties) {
 \ksort($vali);
 }
 $this->parser->_add_token(\SEL_START, $selector, \true);
 $invalid = array(
 '*' => array(),
 // IE7 hacks first
 '_' => array(),
 // IE6 hacks
 '/' => array(),
 // IE6 hacks
 '-' => array(),
 );
 foreach ($vali as $property => $valj) {
 if (\strncmp($property, "//", 2) !== 0) {
 $matches = array();
 if ($sort_properties && \preg_match('/^(\\*|_|\\/|-)(?!(ms|moz|o\\b|xv|atsc|wap|khtml|webkit|ah|hp|ro|rim|tc)-)/', $property, $matches)) {
 $invalid[$matches[1]][$property] = $valj;
 } else {
 $this->parser->_add_token(\PROPERTY, $property, \true);
 $this->parser->_add_token(\VALUE, $valj, \true);
 }
 }
 }
 foreach ($invalid as $prefix => $props) {
 foreach ($props as $property => $valj) {
 $this->parser->_add_token(\PROPERTY, $property, \true);
 $this->parser->_add_token(\VALUE, $valj, \true);
 }
 }
 $this->parser->_add_token(\SEL_END, $selector, \true);
 }
 if (\intval($medium) < \DEFAULT_AT) {
 // un medium vide (contenant @font-face ou autre @) ne produit aucun conteneur
 if (\strlen(\trim($medium))) {
 $parts_to_close = \explode('{', $medium);
 foreach (\array_reverse($parts_to_close) as $part) {
 $this->parser->_add_token(\AT_END, $part, \true);
 }
 }
 } elseif ($default_media) {
 $this->parser->_add_token(\AT_END, $default_media, \true);
 }
 }
 }
 public function _htmlsp($string, $plain)
 {
 if (!$plain) {
 return \htmlspecialchars($string, \ENT_QUOTES, 'utf-8');
 }
 return $string;
 }
 public function get_ratio()
 {
 if (!$this->output_css_plain) {
 $this->formatted();
 }
 return \round((\strlen($this->input_css) - \strlen($this->output_css_plain)) / \strlen($this->input_css), 3) * 100;
 }
 public function get_diff()
 {
 if (!$this->output_css_plain) {
 $this->formatted();
 }
 $diff = \strlen($this->output_css_plain) - \strlen($this->input_css);
 if ($diff > 0) {
 return '+' . $diff;
 } elseif ($diff == 0) {
 return '+-' . $diff;
 }
 return $diff;
 }
 public function size($loc = 'output')
 {
 if ($loc === 'output' && !$this->output_css) {
 $this->formatted();
 }
 if ($loc === 'input') {
 return \strlen($this->input_css) / 1000;
 } else {
 return \strlen($this->output_css_plain) / 1000;
 }
 }
}
