<?php

namespace Ruon\Di\Injector;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-06 at 22:12:40.
 */
class InjectorAbstractTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var InjectorAbstract
     */
    protected $stub;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->stub = $this->getMockForAbstractClass(
            substr(get_class($this), 0, -strlen('Test'))
        );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers Ruon\Di\Injector\InjectorAbstract::getSource
     * @covers Ruon\Di\Injector\InjectorAbstract::setSource
     */
    public function testSetSource()
    {
        $tests = array(
            array('first', 'lalala'),
            array('second', 'bbb'),
            array('first', 'ahaha')
        );

        foreach ($tests as $test) {
            $setReturn = $this->stub->setSource($test[0], $test[1]);
            $getReturn = $this->stub->getSource($test[0]);

            $this->assertSame(
                $this->stub,
                $setReturn,
                'Setter did not return an object.'
            );

            $this->assertSame($test[1], $getReturn);
        }
    }

    /**
     * @covers Ruon\Di\Injector\InjectorAbstract::getSources
     * @covers Ruon\Di\Injector\InjectorAbstract::setSources
     */
    public function testSetSources()
    {
        $test = new \Ruon\Lib\Test\Setter;
        $test->test($this, $this->stub, 'Sources');
    }

}