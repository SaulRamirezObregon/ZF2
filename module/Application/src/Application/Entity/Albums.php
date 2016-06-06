<?php
namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Albums
 *
 * @ORM\Table(name="albums")
 * @ORM\Entity
 */
class Albums{
/**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
protected $id;
/**
     * @var string
     *
     * @ORM\Column(name="artist", type="string", length=100, nullable=false)
     */
protected $artist;
/**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
protected $title;
public function getId()
   {
       return $this->id;
   }
       public function getArtist()
   {
       return $this->artist;
   }
       public function setArtist($artist)
   {
   		$this->artist = $artist;
   }
   	   public function getTitle()
   {
   		return $this->title;
   }
   	    public function setTitle($title)
   {
        $this->title=$title;
   }

}