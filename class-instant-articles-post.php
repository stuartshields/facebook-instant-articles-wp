<?php

/**
 * Class responsible for constructing our content and preparing it for rendering
 *
 * @since 0.1
 */
class Instant_Articles_Post {

	/** @var int ID of the post */
	protected $_ID;

	/**
	 * Setup data and build the content
	 *
	 * @since 0.1
	 * @param int $post_id ID of the post
	 */
	function __construct( $post_id ) {
		$this->_ID = $post_id;
	}

	}

}
