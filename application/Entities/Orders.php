<?php



/**
 * Orders
 *
 * @Table(name="orders")
 * @Entity
 */
class Orders
{
    /**
     * @var integer $oId
     *
     * @Column(name="O_Id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $oId;

    /**
     * @var integer $orderno
     *
     * @Column(name="OrderNo", type="integer", nullable=false)
     */
    private $orderno;

    /**
     * @var StudInfo
     *
     * @ManyToOne(targetEntity="StudInfo")
     * @JoinColumns({
     *   @JoinColumn(name="P_Id", referencedColumnName="stud_id")
     * })
     */
    private $p;


    /**
     * Get oId
     *
     * @return integer $oId
     */
    public function getOId()
    {
        return $this->oId;
    }

    /**
     * Set orderno
     *
     * @param integer $orderno
     */
    public function setOrderno($orderno)
    {
        $this->orderno = $orderno;
    }

    /**
     * Get orderno
     *
     * @return integer $orderno
     */
    public function getOrderno()
    {
        return $this->orderno;
    }

    /**
     * Set p
     *
     * @param StudInfo $p
     */
    public function setP(\StudInfo $p)
    {
        $this->p = $p;
    }

    /**
     * Get p
     *
     * @return StudInfo $p
     */
    public function getP()
    {
        return $this->p;
    }
}