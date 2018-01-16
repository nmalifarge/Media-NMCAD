<?php
namespace NMCAD\MediaNmcad\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Nathan Malifarge <nathan.malifarge@etu.u-bordeaux.fr>
 * @author Matthieu Cormelier <matthieu.cormelier@etu.u-bordeaux.fr>
 * @author Antoine Dethier <antoine.dethier@etu.u-bordeaux.fr>
 */
class ReviewTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \NMCAD\MediaNmcad\Domain\Model\Review
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \NMCAD\MediaNmcad\Domain\Model\Review();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
