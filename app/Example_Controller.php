<?php
call_user_func(function(){
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "vendor/autoload.php";

    /** Application base directory */
    define('BASE', dirname(dirname(__FILE__)));
    /** include_path setting (adding "/app" and "/lib" directory to include_path) */
    set_include_path(implode(PATH_SEPARATOR, array(
            BASE . "/app",
            BASE . "/lib")) . PATH_SEPARATOR . get_include_path());
    set_include_path(BASE . "/vendor/ethna/ethna" . PATH_SEPARATOR . get_include_path());

    /** including application library. */
    require_once 'Example_Error.php';
    require_once 'Example_ActionClass.php';
    require_once 'Example_ActionForm.php';
    require_once 'Example_ViewClass.php';
});

class Example_Controller extends Ethna_Controller
{
    /** @var    string  Application ID(appid) */
    protected $appid = 'EXAMPLE';

    /** @var    array   forward definition. */
    protected $forward = array(
        /*
         *  TODO: write forward definition here.
         *
         *  Example:
         *
         *  'index'         => array(
         *      'view_name' => 'Example_View_Index',
         *  ),
         */
    );

    /** @var    array   action definition. */
    protected $action = array(
        /*
         *  TODO: write action definition here.
         *
         *  Example:
         *
         *  'index'     => array(
         *      'form_name' => 'Sample_Form_SomeAction',
         *      'form_path' => 'Some/Action.php',
         *      'class_name' => 'Sample_Action_SomeAction',
         *      'class_path' => 'Some/Action.php',
         *  ),
         */
    );

    /** @var    array   SOAP action definition. */
    protected $soap_action = array(
        /*
         *  TODO: write action definition for SOAP application here.
         *  Example:
         *
         *  'sample'            => array(),
         */
    );

    /** @var    array       application directory. */
    protected $directory = array(
        'action'        => 'app/action',
        'action_cli'    => 'app/action_cli',
        'action_xmlrpc' => 'app/action_xmlrpc',
        'app'           => 'app',
        'plugin'        => 'app/plugin',
        'bin'           => 'bin',
        'etc'           => 'etc',
        'filter'        => 'app/filter',
        'locale'        => 'locale',
        'log'           => 'log',
        'plugins'       => array('app/plugin/Smarty', 'lib/Ethna/extlib/Plugin/Smarty'),
        'template'      => 'template',
        'template_c'    => 'tmp',
        'tmp'           => 'tmp',
        'view'          => 'app/view',
        'www'           => 'www',
        'test'          => 'app/test',
    );

    /** @var    array       database access definition. */
    protected $db = array(
        ''              => DB_TYPE_RW,
    );

    /** @var    array       extention(.php, etc) configuration. */
    protected $ext = array(
        'php'           => 'php',
        'tpl'           => 'tpl',
    );

    /** @var    array   class definition. */
    public $class = array(
        /*
         *  TODO: When you override Configuration class, Logger class,
         *        SQL class, don't forget to change definition as follows!
         */
        'class'         => 'Ethna_ClassFactory',
        'backend'       => 'Ethna_Backend',
        'config'        => 'Ethna_Config',
        'db'            => 'Ethna_DB_PEAR',
        'error'         => 'Ethna_ActionError',
        'form'          => 'Example_ActionForm',
        'i18n'          => 'Ethna_I18N',
        'logger'        => 'Ethna_Logger',
        'plugin'        => 'Ethna_Plugin',
        'session'       => 'Ethna_Session',
        'sql'           => 'Ethna_AppSQL',
        'view'          => 'Example_ViewClass',
        'renderer'      => 'Ethna_Renderer_Smarty',
        'url_handler'   => 'Example_UrlHandler',
    );

    /**
     *  @var    array       filter definition.
     */
    protected $filter = array(
        /*
         *  TODO: when you use filter, write filter plugin name here.
         *  (If you specify class name, Ethna reads filter class in
         *   filter directory)
         *
         *  Example:
         *
         *  'ExecutionTime',
         */
    );
}

