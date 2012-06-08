<?php

/**
 * @author Richard Shank <develop@zestic.com>
 */
class LinkFilterTest extends \PHPUnit_Framework_TestCase
{
    public function testLog()
    {
        $linkFilter = $this->getMockForAbstractClass('CamelSpider\Entity\LinkFilter');
        $linkFilter->setLog('message', 'level', 3);

        $log = $linkFilter->getLog();
        $this->assertCount(3, $log, 'all 3 parts of the log must be present');
        $this->assertSame('message', $log[0], 'the first part of the log should be the message');
        $this->assertSame('level', $log[1], 'the second part of the log should be the level');
        $this->assertSame(3, $log[2], 'the third part of the log should be the id of the log');
    }
}
