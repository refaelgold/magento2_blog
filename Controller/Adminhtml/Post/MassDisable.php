<?php
namespace Gold\Blog\Controller\Adminhtml\Post;

use Gold\Blog\Controller\Adminhtml\AbstractMassStatus;

/**
 * Class MassDisable
 */
class MassDisable extends AbstractMassStatus
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

    /**
     * Page disable status
     *
     * @var boolean
     */
    protected $status = false;
}
