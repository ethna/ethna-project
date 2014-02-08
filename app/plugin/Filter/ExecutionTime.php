<?php
class Ethna_Plugin_Filter_ExecutionTime extends Ethna_Plugin_Filter
{
    /** @var    int     Start time. */
    public $stime;

    /**
     *  filter before first processing.
     *
     *  @access public
     */
    public function preFilter()
    {
        $stime = explode(' ', microtime());
        $stime = $stime[1] + $stime[0];
        $this->stime = $stime;
    }

    /**
     *  filter BEFORE executing action.
     *
     *  @param  string  $action_name  Action name.
     *  @return string  null: normal.
     *                string: if you return string, it will be interpreted
     *                        as Action name which will be executed immediately.
     */
    public function preActionFilter($action_name)
    {
        return null;
    }

    /**
     *  filter AFTER executing action.
     *
     *  @param  string  $action_name    executed Action name.
     *  @param  string  $forward_name   return value from executed Action.
     *  @return string  null: normal.
     *                string: if you return string, it will be interpreted
     *                        as Forward name.
     */
    public function postActionFilter($action_name, $forward_name)
    {
        return null;
    }

    /**
     *  filter which will be executed at the end.
     */
    public function postFilter()
    {
        $etime = explode(' ', microtime());
        $etime = $etime[1] + $etime[0];
        $time   = round(($etime - $this->stime), 4);

        print "\n<!-- page was processed in $time seconds -->\n";
    }
}
