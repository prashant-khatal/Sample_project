<?php

class IndexController extends Zend_Controller_Action
{

	public $_release;
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $em=Zend_Registry::get("em");
		$album = new Entities\Albums();
//		$album = $em->getRepository('Entities\Albums')->findById(78);
		$album->setId(78);
//		echo "<pre>";print_R($album);exit;
		$this->_release = $album;
    	foreach($album as $albumExclusive){
			$em->remove($albumExclusive);
			}
//		$em->persist($album);
		$em->flush();
    }


}

