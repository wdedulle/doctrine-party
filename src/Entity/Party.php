<?php


/**
 * Party
 *
 * @Table(name="party", schema="onecrm")
 * @Entity
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({"party" = "Party", "individual" = "Individual", "organization" = "Organization"})
 */
abstract class Party
{
    /**
     * @var string
     *
     * @Column(name="party_id", type="string", length=36, nullable=false)
     * @Id
     * @GeneratedValue(strategy="UUID")
     */
    protected $_partyId;

    /**
     * @var \DateTime
     *
     * @Column(name="last_validation", type="datetime")
     */
    protected $_lastValidation;


    /**
     * Get partyId
     *
     * @return string
     */
    public function getPartyId()
    {
        return $this->_partyId;
    }

    /**
     * Set lastValidation
     *
     * @param \DateTime $lastValidation
     *
     * @return Party
     */
    public function setLastValidation($lastValidation)
    {
        $this->lastValidation = $lastValidation;

        return $this;
    }

    /**
     * Get lastValidation
     *
     * @return \DateTime
     */
    public function getLastValidation()
    {
        return $this->lastValidation;
    }
}

