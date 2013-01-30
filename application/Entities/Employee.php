<?php



/**
 * Employee
 *
 * @Table(name="employee")
 * @Entity
 */
class Employee
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=30, nullable=true)
     */
    private $name;

    /**
     * @var string $address
     *
     * @Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var integer $contactno
     *
     * @Column(name="contactNo", type="integer", nullable=true)
     */
    private $contactno;


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
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contactno
     *
     * @param integer $contactno
     */
    public function setContactno($contactno)
    {
        $this->contactno = $contactno;
    }

    /**
     * Get contactno
     *
     * @return integer $contactno
     */
    public function getContactno()
    {
        return $this->contactno;
    }
}