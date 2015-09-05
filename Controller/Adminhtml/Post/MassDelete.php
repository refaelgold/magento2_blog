<?php
namespace Gold\Blog\Controller\Adminhtml\Post;

use Gold\Blog\Controller\Adminhtml\AbstractMassDelete;

/**
 * Class MassDelete
 */
class MassDelete extends AbstractMassDelete
{
    /**
     * Field id
     */
    const ID_FIELD = 'post_id';

    /**
     * Resource collection
     *
     * @var string
     */
    protected $collection = 'Gold\Blog\Model\Resource\Post\Collection';

    /**
     * Page model
     *
     * @var string
     */
    protected $model = 'Gold\Blog\Model\Post';
}
