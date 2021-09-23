<?php

namespace Hiberus\Ruizalejos\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\RequestInterface;

class Index implements HttpGetActionInterface
{
    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    private \Hiberus\Ruizalejos\Model\ExamenFactory $examenFactory;

    public function __construct(Context $context, PageFactory $pageFactory, \Hiberus\Ruizalejos\Model\ExamenFactory $examenFactory)
    {
        $this->pageFactory=$pageFactory;
        $this->examenFactory=$examenFactory;
    }

    public function execute()
    {
        return $this->pageFactory->create();
      //  $examen= $this->examenFactory->create(); //asi creas el factory
       // $collection = $examen->getCollection()->getData();
        //die(var_dump($collection));
     /*   foreach ($collection as $item){
            echo $item->getData();
        }
        return $this->pageFactory->create();
     */
        //retrun "heyyy";
    }
}
