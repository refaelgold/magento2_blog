<?php
namespace Gold\Blog\Block;

use Gold\Blog\Api\Data\PostInterface;
use Gold\Blog\Model\Resource\Post\Collection as PostCollection;
use Magento\Framework\ObjectManagerInterface;

class PostView extends \Magento\Framework\View\Element\Template implements
	\Magento\Framework\Object\IdentityInterface
{

	/**
	 * Construct
	 *
	 * @param \Magento\Framework\View\Element\Template\Context $context
	 * @param \Gold\Blog\Model\Post $post
	 * @param \Gold\Blog\Model\PostFactory $postFactory
	 * @param array $data
	 */
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Gold\Blog\Model\Post $post,
		\Gold\Blog\Model\PostFactory $postFactory,
		array $data = []
	)
	{
		parent::__construct($context, $data);
		$this->_post = $post;
		$this->_postFactory = $postFactory;
	}

	/**
	 * @return \Gold\Blog\Model\Post
	 */
	public function getPost()
	{
		// Check if posts has already been defined
		// makes our block nice and re-usable! We could
		// pass the 'posts' data to this block, with a collection
		// that has been filtered differently!
		if (!$this->hasData('post')) {
			if ($this->getPostId()) {
				/** @var \Gold\Blog\Model\Post $page */
				$post = $this->_postFactory->create();
			} else {
				$post = $this->_post;
			}
			$this->setData('post', $post);
		}
		return $this->getData('post');
	}

	/**
	 * Return identifiers for produced content
	 *
	 * @return array
	 */
	public function getIdentities()
	{
		return [\Gold\Blog\Model\Post::CACHE_TAG . '_' . $this->getPost()->getId()];
	}

}