<?php

require_once 'Swift/Mime/AbstractMimeEntityTest.php';
require_once 'Swift/Mime/SimpleMimeEntity.php';
require_once 'Swift/Mime/Grammar.php';

class Swift_Mime_SimpleMimeEntityTest extends Swift_Mime_AbstractMimeEntityTest
{
    // -- Private helpers

    protected function _createEntity($headerFactory, $encoder, $cache)
    {
        return new Swift_Mime_SimpleMimeEntity($headerFactory, $encoder, $cache, new Swift_Mime_Grammar());
    }
}
