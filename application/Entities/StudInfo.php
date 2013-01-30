<?php



/**
 * StudInfo
 *
 * @Table(name="stud_info")
 * @Entity
 */
class StudInfo
{
    /**
     * @var integer $studId
     *
     * @Column(name="stud_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $studId;

    /**
     * @var integer $rollNo
     *
     * @Column(name="roll_no", type="integer", nullable=false)
     */
    private $rollNo;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=35, nullable=false)
     */
    private $name;

    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     */
    private $id;


    /**
     * Get studId
     *
     * @return integer $studId
     */
    public function getStudId()
    {
        return $this->studId;
    }

    /**
     * Set rollNo
     *
     * @param integer $rollNo
     */
    public function setRollNo($rollNo)
    {
        $this->rollNo = $rollNo;
    }

    /**
     * Get rollNo
     *
     * @return integer $rollNo
     */
    public function getRollNo()
    {
        return $this->rollNo;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
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
}