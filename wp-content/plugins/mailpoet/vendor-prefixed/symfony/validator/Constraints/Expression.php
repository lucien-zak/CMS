<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
use MailPoetVendor\Symfony\Component\Validator\Exception\LogicException;
class Expression extends Constraint
{
 public const EXPRESSION_FAILED_ERROR = '6b3befbc-2f01-4ddf-be21-b57898905284';
 protected static $errorNames = [self::EXPRESSION_FAILED_ERROR => 'EXPRESSION_FAILED_ERROR'];
 public $message = 'This value is not valid.';
 public $expression;
 public $values = [];
 public function __construct($options = null)
 {
 if (!\class_exists(ExpressionLanguage::class)) {
 // throw new LogicException(sprintf('The "symfony/expression-language" component is required to use the "%s" constraint.', __CLASS__));
 @\trigger_error(\sprintf('Using the "%s" constraint without the "symfony/expression-language" component installed is deprecated since Symfony 4.2.', __CLASS__), \E_USER_DEPRECATED);
 }
 parent::__construct($options);
 }
 public function getDefaultOption()
 {
 return 'expression';
 }
 public function getRequiredOptions()
 {
 return ['expression'];
 }
 public function getTargets()
 {
 return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
 }
 public function validatedBy()
 {
 return 'validator.expression';
 }
}
