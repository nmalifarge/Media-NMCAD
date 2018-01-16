<?php
namespace NMCAD\MediaNmcad\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Nathan Malifarge <nathan.malifarge@etu.u-bordeaux.fr>
 * @author Matthieu Cormelier <matthieu.cormelier@etu.u-bordeaux.fr>
 * @author Antoine Dethier <antoine.dethier@etu.u-bordeaux.fr>
 */
class ReviewControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \NMCAD\MediaNmcad\Controller\ReviewController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\NMCAD\MediaNmcad\Controller\ReviewController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenReviewToReviewRepository()
    {
        $review = new \NMCAD\MediaNmcad\Domain\Model\Review();

        $reviewRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewRepository->expects(self::once())->method('add')->with($review);
        $this->inject($this->subject, 'reviewRepository', $reviewRepository);

        $this->subject->createAction($review);
    }
}
