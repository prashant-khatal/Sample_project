<?php
namespace Entities;


/**
 * Albums
 *
 * @Table(name="albums")
 * @Entity
 */
class Albums
{
    /**
     * @var integer $aId
     *
     * @Column(name="a_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $aId;

    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string $artist
     *
     * @Column(name="artist", type="string", length=100, nullable=false)
     */
    private $artist;

    /**
     * @var string $title
     *
     * @Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;


    /**
     * Get aId
     *
     * @return integer $aId
     */
    public function getAId()
    {
        return $this->aId;
    }

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set artist
     *
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * Get artist
     *
     * @return string $artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
}