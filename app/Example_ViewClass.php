<?php
// vim: foldmethod=marker
/**
 *  Example_ViewClass.php
 *
 *  @author     {$author}
 *  @package    Example
 *  @version    $Id: a7f240f9c5c6567917fac7569fbf962b6e752965 $
 */

// {{{ Example_ViewClass
/**
 *  View class.
 *
 *  @author     {$author}
 *  @package    Example
 *  @access     public
 */
class Example_ViewClass extends Ethna_ViewClass
{
    /**#@+
     *  @access protected
     */

    /** @var  string  set layout template file   */
    protected $_layout_file = 'layout';

    /**#@+
     *  @access public
     */

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
// }}}

