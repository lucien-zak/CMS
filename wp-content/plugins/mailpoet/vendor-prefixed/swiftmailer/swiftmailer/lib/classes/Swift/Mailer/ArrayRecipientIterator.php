<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Mailer_ArrayRecipientIterator implements Swift_Mailer_RecipientIterator
{
 private $recipients = [];
 public function __construct(array $recipients)
 {
 $this->recipients = $recipients;
 }
 public function hasNext()
 {
 return !empty($this->recipients);
 }
 public function nextRecipient()
 {
 return \array_splice($this->recipients, 0, 1);
 }
}
