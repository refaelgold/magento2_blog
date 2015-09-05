<?php namespace Gold\Blog\Model\Resource\Post;

class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Gold\Blog\Model\Post', 'Gold\Blog\Model\Resource\Post');
    }

}
