<?php
class Example_UrlHandler extends Ethna_UrlHandler
{
    /** @var    array   Action Mapping */
    public $action_map = array(
        /**
         * @see http://ethna.jp/ethna-document-dev_guide-urlhandler.html
         */
        /*
        'index'  => array(                      // UrlHandler's namespace seted in the entry point
            'user_login' => array(              // key as a action name
                'path'          => 'login',     // url path
                'path_regexp'   => false,       // url path setted by regexp
                'path_ext'      => false,       // parameter/ActionForm map
                'option'        => array(),     // option
            ),
        ),
         */
    );

    /**
     *  get Example_UrlHandler class instance.
     *
     *  @access public
     */
    public static function getInstance($class_name = null)
    {
        $instance = parent::getInstance(__CLASS__);
        return $instance;
    }

    /**
     *  normalize request(via user defined gateway)
     *
     *  @access private
     */
    /*
    function _normalizeRequest_User($http_vars)
    {
        return $http_vars;
    }
     */

    /**
     *  generate path(via user defined gateway)
     *
     *  @access private
     */
    /*
    function _getPath_User($action, $param)
    {
        return array("/user", array());
    }
     */
}

