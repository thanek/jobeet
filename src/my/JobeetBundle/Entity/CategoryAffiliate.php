<?php

namespace my\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliate
 *
 * @ORM\Table(name="category_affiliates")
 * @ORM\Entity(repositoryClass="my\JobeetBundle\Entity\CategoryAffiliateRepository")
 */
class CategoryAffiliate {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $category;

    /**
     * @var Affiliate
     *
     * @ORM\ManyToOne(targetEntity="Affiliate")
     * @ORM\JoinColumn(name="affiliate_id", referencedColumnName="id", nullable=false)
     */
    private $affiliate;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \my\JobeetBundle\Entity\Category $category
     * @return CategoryAffiliate
     */
    public function setCategory(\my\JobeetBundle\Entity\Category $category) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \my\JobeetBundle\Entity\Category
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set affiliate
     *
     * @param \my\JobeetBundle\Entity\Affiliate $affiliate
     * @return CategoryAffiliate
     */
    public function setAffiliate(\my\JobeetBundle\Entity\Affiliate $affiliate) {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate
     *
     * @return \my\JobeetBundle\Entity\Affiliate
     */
    public function getAffiliate() {
        return $this->affiliate;
    }
}