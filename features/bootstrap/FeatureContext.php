<?php
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\Mink\Behat\Context\MinkContext;
use Behat\Mink\Session;
use Behat\Mink\Driver\DriverInterface;





require_once 'bootstrap.php';

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
   /**
     * @Given /^I fill in searchBox with "([^"]*)"$/
     */
   
    public function iFillInSearchboxWith($input)
    {
        $this->fillField("searchInput",$input); 
    }
    
    /**
     * @When /^I press search button$/
     */
  
    public function iPressSearchButton()
    {
        $this->getMink()->getSession()->getDriver()->click("//*[@id='searchButton']");
         $this->getMink()->getSession()->wait("3000");
    }
}

    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    