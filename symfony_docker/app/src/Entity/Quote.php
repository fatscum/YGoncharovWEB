<?php

namespace App\Entity;

use App\Repository\QuoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuoteRepository::class)
 */
class Quote
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $quote;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $historian;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $year;

	/**
	 * @param $quote
	 * @param $historian
	 * @param $year
	 */
	public function __construct($quote, $historian, $year)
	{
		$this->quote = $quote;
		$this->historian = $historian;
		$this->year = $year;
	}

	public function getId()
    {
        return $this->id;
    }

    public function getQuote()
    {
        return $this->quote;
    }

    public function setQuote(string $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    public function getHistorian()
    {
        return $this->historian;
    }

    public function setHistorian(string $historian): self
    {
        $this->historian = $historian;

        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear(string $year): self
    {
        $this->year = $year;

        return $this;
    }
}