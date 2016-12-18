<?php
/**
 * Leafpub: Simple, beautiful publishing. (https://leafpub.org)
 *
 * @link      https://github.com/Leafpub/leafpub
 * @copyright Copyright (c) 2016 Leafpub Team
 * @license   https://github.com/Leafpub/leafpub/blob/master/LICENSE.md (GPL License)
 */
namespace Leafpub\Events\Post;

use Symfony\Component\EventDispatcher\Event;

class Add extends Event {
    const NAME = 'post.add';
    
    protected $post;
    
    public function __construct(Array &$postData){
        $this->post = $postData;
    }
    
    public function &getPost(){
        return $this->post;
    }
}

?>