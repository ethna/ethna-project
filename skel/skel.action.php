<?php
class {$action_form} extends Example_ActionForm
{
    /**
     *  @access protected
     *  @var    array   form definition.
     *  @see http://ethna.jp/ethna-document-dev_guide-form.html
     */
    public $form = array(
    );
}

/**
 *  {$action_name} action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Example
 */
class {$action_class} extends Example_ActionClass
{
    /**
     *  {$action_name} action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {
        return '{$action_name}';
    }
}

