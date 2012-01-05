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

    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * @Given /^I am on Category page$/
     */
    public function iAmOnCategoryPage()
    {
        $this->visit('/shop/women/aw11/skirts.html');
    }

    /**
     * @When /^I choose product$/
     */
    public function iChooseProduct()
    {
         $this->getMink()->getSession()->getDriver()->click("//a/div/img");
         $this->getMink()->getSession()->wait("10000");
    }


    /**
     * @Given /^I configure it$/
     */
    public function iConfigureIt()
    {
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/div[1]/div/a");
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/div[1]/ul/li[2]/a");
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/div[2]/div/a");
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/div[2]/ul/li[2]/a");
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/button");
        $this->getMink()->getSession()->wait("10000");
    }

    /**
     * @Then /^I should see product added to shopping cart$/
     */
    public function iShouldSeeProductAddedToShoppingCart()
    {
        $this->assertElementOnPage('#cartHeader');
        $this->getMink()->getSession()->getDriver()->click(".//*[@id='cartHeader']");
        $this->assertElementOnPage('#topCartContent');
        
    }


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * @When /^I clicked on "([^"]*)"$/
     */
    public function iClickedOn($argument1)
    {
        $this->clickLink("Acne Studios");
    }
    
    /**
     * @When /^I fill "([^"]*)" with "([^"]*)"$/
     */
    public function iFillWith($argument1, $argument2)
    {
        $this->fillField("email","shashiibuildings+6@gmail.com");
        $this->fillField("pass","test1234");
        
    }
    /**
     * @Then /^I should able to see "([^"]*)"$/
     */
    public function iShouldAbleToSee($argument1)
    {
        $this->assertElementOnPage('cartHeader');
    }
    
    /**
     * @Given /^the following user:$/
     */
    public function theFollowingUser(TableNode $table)
    {
        $hash = $table->getHash();
        foreach ($hash as $row) {
        
    }
    }
    
    /**
     * @Given /^I am on login$/
     */
    public function iAmOnLogin()
    {
        $this->visit('http://uat.acnestudios.com/customer/account/login/');
    }

    
     /**
     * @Given /^Given I am on login$/
     */

    public function givenIAmOnLogin()
    {
        $this->visit('http://uat.acnestudios.com/customer/account/login/');
    }

    
     
     /**
     * @Given /^I am signed in$/
     */
    public function iAmSignedIn()
    {
        $this->visit('/customer/account/login/');
        $this->fillField("email","shashiibuildings+6@gmail.com");
        $this->fillField("pass","test1234");
        $this->pressButton("send2");
       
        
    }

     /**
     * @Given /^I am on the register page$/
     */
    public function iAmOnTheRegisterPage()
    {
       $this->visit('/customer/account/create/');
    }

    

    /**
     * @Given /^I press "([^"]*)" and wait "([^"]*)"$/
     */
    public function iPressAndWait($button, $waitingTime)
    {
        $this->pressButton($button);
        $this->getMink()->getSession()->wait((int)$waitingTime, 'function(){return true;}');
        
      
    }

    /**
     * @When /^I mouseOver on "([^"]*)"$/
     */
    public function iMouseoverOn($argument1)
    {
       $this->mouseover("html/body/header/div/div/ul/li[1]/a");
    }

    /**
     * @Given /^the following Stores:$/
     */
    public function theFollowingStores(TableNode $table)
    {
        $hash = $table->getHash();
        foreach ($hash as $row) {
        
    }
    }
    
    /**
     * @Given /^Given I am on shipping "([^"]*)"$/
     */
    public function givenIAmOnShipping($argument1)
    {
        $this->visit('/shipping-destination/');
    }

    
       /**
     * @Given /^I have cleared session$/
     */
    public function iHaveClearedSession()
    {
        $this->getMink()->restartSessions();
    }


   /**
     * @When /^I choose color first color$/
     */
    public function iChooseColorFirstColor()
    {
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/div[1]/div/a");
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/div[1]/ul/li[2]/a");
    }

    /**
     * @Given /^I choose size first size$/
     */
    public function iChooseSizeFirstSize()
    {
       $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/div[2]/div/a");
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/div[2]/ul/li[2]/a");
    }

    /**
     * @Given /^press Add to Bag button$/
     */
    public function pressAddToBagButton()
    {
        $this->getMink()->getSession()->getDriver()->click("//*[@id='bodycontainer']/article/div/section[1]/div/form/button");
    }
    
     /**
     * @Given /^I choose first product$/
     */
    public function iChooseFirstProduct()
    {
         $this->getMink()->getSession()->getDriver()->click("//a/div/img");
    }

    /**
     * @Given /^I wait for "([^"]*)"$/
     */
    public function iWaitFor($waitingTime)
    {
        $this->getMink()->getSession()->wait((int)$waitingTime, 'function(){return true;}');
    }

    /**
     * @Given /^I place order$/
     */
    public function iPlaceOrder()
    {
        $this->getMink()->getSession()->getDriver()->click("//*[@id='onestepcheckout-place-order']");
    }
    
    /**
     * @Given /^I fill DIBS payment details$/
     */
    public function iFillDibsPaymentDetails()
    {
    $this->fillField("auth_cardno", "4711100000000000");
    $this->fillField("auth_expmon", "06");
    $this->fillField("auth_expyear", "24");
    $this->fillField("auth_cvc", "684");
    $this->getMink()->getSession()->getDriver()->click("//*[@id='btnAuthSubmit']");
    }

}
