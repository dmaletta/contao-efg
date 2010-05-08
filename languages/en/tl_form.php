<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that
 * specializes in accessibility and generates W3C-compliant HTML code. It
 * provides a wide range of functionality to develop professional websites
 * including a built-in search engine, form generator, file and user manager,
 * CSS engine, multi-language support and many more. For more information and
 * additional TYPOlight applications like the TYPOlight MVC Framework please
 * visit the project website http://www.typolight.org.
 *
 * Extended language file for table tl_form (en).
 *
 * PHP version 5
 * @copyright  Thomas Kuhn 2007
 * @author     Thomas Kuhn <th_kuhn@gmx.net>
 * @package    efg
 * @version    1.11.0
 * @license    LGPL
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form']['storeFormdata'] = array('Store data in module "form data"', 'If you choose this option, data will be stored in database "Form data".<br>Note: Please save this form again after adding or modifying form fields');
$GLOBALS['TL_LANG']['tl_form']['efgAliasField'] = array('Form field for Alias', 'Choose the form field used to generate the alias of form data.');
$GLOBALS['TL_LANG']['tl_form']['efgStoreValues'] = array('Save values of options', 'Choose this option, if you want to store the value instead of the label of radio buttons, checkboxes and selects');
$GLOBALS['TL_LANG']['tl_form']['useFormValues'] = array('Export field values', 'If you choose this option, during export field values will be exported instead of field identifiers for the selected form fields. This applies to radio buttons, checkboxes and selects.');
$GLOBALS['TL_LANG']['tl_form']['useFieldNames'] = array('Export field names', 'If you choose this option, during export field names will be exported instead of field labels.');
$GLOBALS['TL_LANG']['tl_form']['sendConfirmationMail'] = array('Send confirmation via e-mail', 'If you choose this option, a confirmation will be sent via e-mail to the sender of the form.');
$GLOBALS['TL_LANG']['tl_form']['confirmationMailRecipientField'] = array('Form field containing e-mail of recipient', 'Choose the form field in which the user enters his e-mail address or a field containing the e-mail address as value.');
$GLOBALS['TL_LANG']['tl_form']['confirmationMailRecipient'] = array('Recipient', 'Please enter one or more recipient e-mail addresses if e-mail address is not defined by a form field or if you want e-mail to be sent to additional recipients. Separate multiple addresses with comma.');
$GLOBALS['TL_LANG']['tl_form']['confirmationMailSender'] = array('Sender', 'Please enter e-mail address to be used as sender.');
$GLOBALS['TL_LANG']['tl_form']['confirmationMailSubject'] = array('Subject', 'Please enter the subject of confirmation mail. If you do not enter a subject, the probability increases that the e-mail is identified as SPAM.');
$GLOBALS['TL_LANG']['tl_form']['confirmationMailText'] = array('Text of confirmation mail', 'Please enter the text of confirmation mail. You can use standard insert tags and tags like form::NAME_OF_FORMFIELD .');
$GLOBALS['TL_LANG']['tl_form']['confirmationMailTemplate'] = array('HTML-template for confirmation mail', 'If confirmation mail should be sent as HTML mail, please choose your HTML-template from file system.');
$GLOBALS['TL_LANG']['tl_form']['addConfirmationMailAttachments'] = array('Add attachments to confirmation e-mail', 'You can select files that will be sent as attachments to the confirmation e-mail.');
$GLOBALS['TL_LANG']['tl_form']['confirmationMailAttachments'] = array('Attachments', 'Pleae choose files to attach.');
$GLOBALS['TL_LANG']['tl_form']['sendFormattedMail'] = array('Send form data via e-mail (formatted text or html)', 'The text of mail can be defined using insert tags. Mail can be sent as HTML mail.');
$GLOBALS['TL_LANG']['tl_form']['formattedMailText'] = array('Text of mail', 'Please enter the text of mail. You can use standard insert tags and tags like form::NAME_OF_FORMFIELD .');
$GLOBALS['TL_LANG']['tl_form']['formattedMailTemplate'] = array('HTML-template for mail', 'If mail should be sent as HTML mail, please choose your HTML-template from file system.');

$GLOBALS['TL_LANG']['tl_form']['efgStoreFormdata_legend'] = '(EFG) Store form data';
$GLOBALS['TL_LANG']['tl_form']['efgSendFormattedMail_legend'] = '(EFG) Send via e-mail';
$GLOBALS['TL_LANG']['tl_form']['efgSendConfirmationMail_legend'] = '(EFG) Send confirmation via e-mail';

?>