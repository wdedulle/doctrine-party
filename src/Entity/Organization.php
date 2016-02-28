<?php

/**
 * Individual
 *
 * @Table(name="organization", schema="onecrm")
 * @Entity
 */
class Organization extends Party
{
    /**
     * @var string
     *
     * @Column(name="name", type="string", length=45, nullable=false)
     */
    protected $_name;

    /**
     * @var LegalDetails
     *
     * @OneToOne(targetEntity="LegalDetails", mappedBy="_partyId", cascade={"persist", "remove", "merge"}, orphanRemoval=true))
     */
    protected $_legaldetails;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Individual
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     *
     * @return LegalDetails
     */
    public function getLegalDetails()
    {
    	return $this->_legaldetails;
    }

    public function setLegalDetails( $details )
    {
    	$this->_legaldetails = $details;
    }
}

