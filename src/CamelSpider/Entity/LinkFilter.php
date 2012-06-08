<?php
namespace CamelSpider\Entity;

use CamelSpider\Entity\InterfaceLinkFilter;

/**
 * @author Richard Shank <develop@zestic.com>
 */
abstract class LinkFilter implements InterfaceLinkFilter
{
    protected $log;

    public function setLog($message, $level, $id)
    {
        $this->log = array($message, $level, $id);
    }

    public function getLog()
    {
        return $this->log;
    }
}
