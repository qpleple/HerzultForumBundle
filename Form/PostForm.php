<?php

namespace Bundle\ForumBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextareaField;

class PostForm extends Form
{
    public function __construct($name, $object, $validator, array $options = array())
    {
        $this->addOption('theme');

        parent::__construct($name, $object, $validator, $options);
    }

    public function configure()
    {
        $this->add(new TextareaField('message'));
    }
}
