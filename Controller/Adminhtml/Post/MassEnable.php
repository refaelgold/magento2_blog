<?php
namespace Gold\Blog\Controller\Adminhtml\Post;

use Gold\Blog\Controller\Adminhtml\AbstractMassStatus;

/**
 * Class MassEnable
 */
class MassEnable extends AbstractMassStatus
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
     * Post model
     *
     * @var string
     */
    protected $model = 'Gold\Blog\Model\Post';

    /**
     * Post enable status
     *
     * @var boolean
     */
    protected $status = true;
}
