<?php
function AlbumController(){
	$objectManager=$this
	->getServiceLocator()
	->get('Doctrine\ORM\EntityManager');

	$album = new \Application\Entity\Albums();
	$album->setArtist("Raymix");
	$album->setTitle("Oie Mujer");

	$objectManager->persist($album);
	$objectManager->flush();

	//die(var_dump($album->getId()));
}