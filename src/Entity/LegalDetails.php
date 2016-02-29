<?php

/**
 * LegalDetails
 *
 * @Table(name="legaldetails", schema="onecrm")
 * @Entity
 */
class LegalDetails
{
	/**
	 * @var string
	 *
	 * @Column(name="vat", type="string", length=45)
	 */
	protected $_vat;

    /**
     * @Id
     * @OneToOne(targetEntity="Organization")
     * @JoinTable(name="organization")
     * @JoinColumn(name="party_id", referencedColumnName="party_id")
     */
	protected $_partyId;

	public function getVat()
	{
		return $this->_vat;
	}

	public function setVat( $vat )
	{
		$this->_vat = $vat;
	}
}