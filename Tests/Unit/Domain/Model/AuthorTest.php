<?php
namespace NMCAD\MediaNmcad\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Nathan Malifarge <nathan.malifarge@etu.u-bordeaux.fr>
 * @author Matthieu Cormelier <matthieu.cormelier@etu.u-bordeaux.fr>
 * @author Antoine Dethier <antoine.dethier@etu.u-bordeaux.fr>
 */
class AuthorTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \NMCAD\MediaNmcad\Domain\Model\Author
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \NMCAD\MediaNmcad\Domain\Model\Author();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBioReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBio()
        );
    }

    /**
     * @test
     */
    public function setBioForStringSetsBio()
    {
        $this->subject->setBio('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bio',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotosReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhotos()
        );
    }

    /**
     * @test
     */
    public function setPhotosForFileReferenceSetsPhotos()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhotos($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSocialsReturnsInitialValueForSocial()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSocials()
        );
    }

    /**
     * @test
     */
    public function setSocialsForObjectStorageContainingSocialSetsSocials()
    {
        $social = new \NMCAD\MediaNmcad\Domain\Model\Social();
        $objectStorageHoldingExactlyOneSocials = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSocials->attach($social);
        $this->subject->setSocials($objectStorageHoldingExactlyOneSocials);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSocials,
            'socials',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSocialToObjectStorageHoldingSocials()
    {
        $social = new \NMCAD\MediaNmcad\Domain\Model\Social();
        $socialsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($social));
        $this->inject($this->subject, 'socials', $socialsObjectStorageMock);

        $this->subject->addSocial($social);
    }

    /**
     * @test
     */
    public function removeSocialFromObjectStorageHoldingSocials()
    {
        $social = new \NMCAD\MediaNmcad\Domain\Model\Social();
        $socialsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($social));
        $this->inject($this->subject, 'socials', $socialsObjectStorageMock);

        $this->subject->removeSocial($social);
    }
}
