<?php

namespace WCS\CoavBundle\Entity;

/**
 * Flight
 */
class Flight
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $departure;

    /**
     * @var string
     */
    private $arrival;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var int
     */
    private $freeSeat;

    /**
     * @var \DateTime
     */
    private $takeofTime;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departure
     *
     * @param string $departure
     *
     * @return Flight
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return string
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param string $arrival
     *
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     *
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeat
     *
     * @param integer $freeSeat
     *
     * @return Flight
     */
    public function setFreeSeat($freeSeat)
    {
        $this->freeSeat = $freeSeat;

        return $this;
    }

    /**
     * Get freeSeat
     *
     * @return int
     */
    public function getFreeSeat()
    {
        return $this->freeSeat;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     *
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flights;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flights = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     *
     * @return Flight
     */
    public function addFlight(\WCS\CoavBundle\Entity\Reservation $flight)
    {
        $this->flights[] = $flight;

        return $this;
    }

    /**
     * Remove flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     */
    public function removeFlight(\WCS\CoavBundle\Entity\Reservation $flight)
    {
        $this->flights->removeElement($flight);
    }

    /**
     * Get flights
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFlights()
    {
        return $this->flights;
    }
    /**
     * @var \WCS\CoavBundle\Entity\PlaneModel
     */
    private $plane;


    /**
     * Set plane
     *
     * @param \WCS\CoavBundle\Entity\PlaneModel $plane
     *
     * @return Flight
     */
    public function setPlane(\WCS\CoavBundle\Entity\PlaneModel $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCS\CoavBundle\Entity\PlaneModel
     */
    public function getPlane()
    {
        return $this->plane;
    }
}
