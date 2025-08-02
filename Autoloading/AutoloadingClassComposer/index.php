<?php

require './app/bootstrap.php';

$user = new User('admin', '$ecurePa$$w0rd1');

$comment = new Comment('<h1>Hello</h1>');
echo $comment->getComment();