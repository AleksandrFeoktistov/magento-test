<?php
namespace Vendor\GetUrl\Observer;

use Magento\Framework\Event\ObserverInterface;

class GetUrl implements ObserverInterface
{

  private $_logger;
  public function __construct(\Psr\Log\LoggerInterface $logger)
  {
    $this -> _logger = $logger;
    // Observer initialization code...
    // You can use dependency injection to get any class this observer may need.
  }

  public function execute(\Magento\Framework\Event\Observer $observer)
  {
    $url = $observer->getEvent()-> getRequest() -> getPathinfo();
    var_dump($url);
    //var_dump($Url)
    $this-> _logger ->addInfo($url);
    // Observer execution code..
  }
}
