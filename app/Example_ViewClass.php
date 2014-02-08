<?php
class Example_ViewClass extends Ethna_ViewClass
{
    /** @var  string  set layout template file   */
    protected $_layout_file = 'layout';

    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  set common default value.
     *
     *  @access protected
     *  @param  object  Example_Renderer  Renderer object.
     */
    protected function _setDefault($renderer)
    {
    }

}

