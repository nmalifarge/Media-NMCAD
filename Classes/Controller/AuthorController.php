<?php
namespace NMCAD\MediaNmcad\Controller;

/***
 *
 * This file is part of the "Media_NMCAD" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Nathan Malifarge <nathan.malifarge@etu.u-bordeaux.fr>
 *           Matthieu Cormelier <matthieu.cormelier@etu.u-bordeaux.fr>
 *           Antoine Dethier <antoine.dethier@etu.u-bordeaux.fr>
 *
 ***/

/**
 * AuthorController
 */
class AuthorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * authorRepository
     *
     * @var \NMCAD\MediaNmcad\Domain\Repository\AuthorRepository
     * @inject
     */
    protected $authorRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $authors = $this->authorRepository->findAll();
        $this->view->assign('authors', $authors);
    }

    /**
     * action show
     *
     * @param \NMCAD\MediaNmcad\Domain\Model\Author $author
     * @return void
     */
    public function showAction(\NMCAD\MediaNmcad\Domain\Model\Author $author)
    {
        $this->view->assign('author', $author);
    }
}
