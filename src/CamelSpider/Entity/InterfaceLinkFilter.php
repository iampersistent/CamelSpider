<?php
namespace CamelSpider\Entity;

use CamelSpider\Entity\InterfaceLink;

interface InterfaceLinkFilter
{
    /**
     * Set a message for the log
     *
     * @param $message
     * @param $level
     * @param $id
     */
    function setLog($message, $level, $id);

    /**
     * Return the log data
     *
     * @return array
     */
    function getLog();

    /**
     * Process the link through this filter. If the process fails, it should record the failure in the log and return
     * false otherwise, return true.
     *
     * @param CamelSpider\Entity\Link $link
     *
     * @return boolean
     */
    function run(Link $link);
}
