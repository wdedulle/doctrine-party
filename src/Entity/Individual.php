<?php

/**
 * Individual
 *
 * @Table(name="individual", schema="onecrm")
 * @Entity
 */
class Individual extends Party
{
    /**
     * @var string
     * @FirstName
     * @Column(name="first_name", type="string", length=45, nullable=false)
     * @Required
     */
    protected $_firstName;

    /**
     * @var string
     *
     * @Column(name="last_name", type="string", length=45, nullable=false)
     */
    protected $_lastName;

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Individual
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Individual
     */
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->_lastName;
    }
}

