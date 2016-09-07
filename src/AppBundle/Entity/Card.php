<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CardRepository")
 */
class Card
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="cost", type="integer")
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255, nullable=true)
     */
    private $race;

    /**
     * @var int
     *
     * @ORM\Column(name="health", type="integer", nullable=true)
     */
    private $health;

    /**
     * @var int
     *
     * @ORM\Column(name="attack", type="integer", nullable=true)
     */
    private $attack;

    /**
     * @var bool
     *
     * @ORM\Column(name="divineShield", type="boolean")
     */
    private $divineShield;

    /**
     * @var bool
     *
     * @ORM\Column(name="battlecry", type="boolean")
     */
    private $battlecry;

    /**
     * @var bool
     *
     * @ORM\Column(name="deathrattle", type="boolean")
     */
    private $deathrattle;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Classe")
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Extension")
     */
    private $extension;

    /**
     * @var bool
     *
     * @ORM\Column(name="charge", type="boolean")
     */
    private $charge;

    /**
     * @var bool
     *
     * @ORM\Column(name="taunt", type="boolean")
     */
    private $taunt;

    /**
     * @var bool
     *
     * @ORM\Column(name="windfury", type="boolean")
     */
    private $windfury;

    /**
     * @var bool
     *
     * @ORM\Column(name="stealth", type="boolean")
     */
    private $stealth;

    /**
     * @var bool
     *
     * @ORM\Column(name="discard", type="boolean")
     */
    private $discard;

    /**
     * @var bool
     *
     * @ORM\Column(name="combo", type="boolean", nullable=true)
     */
    private $combo;

    /**
     * @var int
     *
     * @ORM\Column(name="enrage", type="integer", nullable=true)
     */
    private $enrage;

    /**
     * @var int
     *
     * @ORM\Column(name="spellDamage", type="integer", nullable=true)
     */
    private $spellDamage;

    /**
     * @var int
     *
     * @ORM\Column(name="overload", type="integer", nullable=true)
     */
    private $overload;

    /**
     * @var bool
     *
     * @ORM\Column(name="inspire", type="boolean", nullable=true)
     */
    private $inspire;

    /**
     * @var bool
     *
     * @ORM\Column(name="joust", type="boolean", nullable=true)
     */
    private $joust;

    /**
     * @var bool
     *
     * @ORM\Column(name="choose", type="boolean", nullable=true)
     */
    private $choose;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Rarity")
     */
    private $rarity;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Card
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set health
     *
     * @param integer $health
     * @return Card
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get health
     *
     * @return integer
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set attack
     *
     * @param integer $attack
     * @return Card
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get attack
     *
     * @return integer
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set divineShield
     *
     * @param boolean $divineShield
     * @return Card
     */
    public function setDivineShield($divineShield)
    {
        $this->divineShield = $divineShield;

        return $this;
    }

    /**
     * Get divineShield
     *
     * @return boolean
     */
    public function getDivineShield()
    {
        return $this->divineShield;
    }

    /**
     * Set battlecry
     *
     * @param boolean $battlecry
     * @return Card
     */
    public function setBattlecry($battlecry)
    {
        $this->battlecry = $battlecry;

        return $this;
    }

    /**
     * Get battlecry
     *
     * @return boolean
     */
    public function getBattlecry()
    {
        return $this->battlecry;
    }

    /**
     * Set deathrattle
     *
     * @param boolean $deathrattle
     * @return Card
     */
    public function setDeathrattle($deathrattle)
    {
        $this->deathrattle = $deathrattle;

        return $this;
    }

    /**
     * Get deathrattle
     *
     * @return boolean
     */
    public function getDeathrattle()
    {
        return $this->deathrattle;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return Card
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set charge
     *
     * @param boolean $charge
     * @return Card
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return boolean
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set taunt
     *
     * @param boolean $taunt
     * @return Card
     */
    public function setTaunt($taunt)
    {
        $this->taunt = $taunt;

        return $this;
    }

    /**
     * Get taunt
     *
     * @return boolean
     */
    public function getTaunt()
    {
        return $this->taunt;
    }

    /**
     * Set windfury
     *
     * @param boolean $windfury
     * @return Card
     */
    public function setWindfury($windfury)
    {
        $this->windfury = $windfury;

        return $this;
    }

    /**
     * Get windfury
     *
     * @return boolean
     */
    public function getWindfury()
    {
        return $this->windfury;
    }

    /**
     * Set stealth
     *
     * @param boolean $stealth
     * @return Card
     */
    public function setStealth($stealth)
    {
        $this->stealth = $stealth;

        return $this;
    }

    /**
     * Get stealth
     *
     * @return boolean
     */
    public function getStealth()
    {
        return $this->stealth;
    }

    /**
     * Set discard
     *
     * @param boolean $discard
     * @return Card
     */
    public function setDiscard($discard)
    {
        $this->discard = $discard;

        return $this;
    }

    /**
     * Get discard
     *
     * @return boolean
     */
    public function getDiscard()
    {
        return $this->discard;
    }

    /**
     * Set rarity
     *
     * @param \AppBundle\Entity\Rarity $rarity
     * @return Card
     */
    public function setRarity(\AppBundle\Entity\Rarity $rarity)
    {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * Get rarity
     *
     * @return \AppBundle\Entity\Rarity
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Set classe
     *
     * @param \AppBundle\Entity\Classe $classe
     * @return Card
     */
    public function setClasse(\AppBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \AppBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return Card
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Card
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set race
     *
     * @param string $race
     * @return Card
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set combo
     *
     * @param boolean $combo
     * @return Card
     */
    public function setCombo($combo)
    {
        $this->combo = $combo;

        return $this;
    }

    /**
     * Get combo
     *
     * @return boolean 
     */
    public function getCombo()
    {
        return $this->combo;
    }

    /**
     * Set enrage
     *
     * @param integer $enrage
     * @return Card
     */
    public function setEnrage($enrage)
    {
        $this->enrage = $enrage;

        return $this;
    }

    /**
     * Get enrage
     *
     * @return integer 
     */
    public function getEnrage()
    {
        return $this->enrage;
    }

    /**
     * Set spellDamage
     *
     * @param integer $spellDamage
     * @return Card
     */
    public function setSpellDamage($spellDamage)
    {
        $this->spellDamage = $spellDamage;

        return $this;
    }

    /**
     * Get spellDamage
     *
     * @return integer 
     */
    public function getSpellDamage()
    {
        return $this->spellDamage;
    }

    /**
     * Set overload
     *
     * @param integer $overload
     * @return Card
     */
    public function setOverload($overload)
    {
        $this->overload = $overload;

        return $this;
    }

    /**
     * Get overload
     *
     * @return integer 
     */
    public function getOverload()
    {
        return $this->overload;
    }

    /**
     * Set inspire
     *
     * @param boolean $inspire
     * @return Card
     */
    public function setInspire($inspire)
    {
        $this->inspire = $inspire;

        return $this;
    }

    /**
     * Get inspire
     *
     * @return boolean 
     */
    public function getInspire()
    {
        return $this->inspire;
    }

    /**
     * Set joust
     *
     * @param boolean $joust
     * @return Card
     */
    public function setJoust($joust)
    {
        $this->joust = $joust;

        return $this;
    }

    /**
     * Get joust
     *
     * @return boolean 
     */
    public function getJoust()
    {
        return $this->joust;
    }

    /**
     * Set choose
     *
     * @param boolean $choose
     * @return Card
     */
    public function setChoose($choose)
    {
        $this->choose = $choose;

        return $this;
    }

    /**
     * Get choose
     *
     * @return boolean
     */
    public function getChoose()
    {
        return $this->choose;
    }
}
