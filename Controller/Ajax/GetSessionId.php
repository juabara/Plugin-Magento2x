<?php
namespace Kesterpay\Gateway\Controller\Ajax;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class GetSessionId
 *
 * @see        Official Website
 * @author    Kesterpay (and others)
 * @copyright 2018-2019 Kesterpay
 * @license   https://www.gnu.org/licenses/gpl-3.0.pt-br.html GNU GPL, version 3
 * @package   Kesterpay\Gateway\Controller\Ajax
 */
class GetSessionId extends \Magento\Framework\App\Action\Action
{
     /**
     * Gateway Helper
     *
     * @var Kesterpay\Gateway\Helper\Data;
     */ 
    protected $gatewayHelper;

     /**
     * @param \Kesterpay\Gateway\Helper\Data $gatewayHelper
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Kesterpay\Gateway\Helper\Data $gatewayHelper,
         \Magento\Framework\App\Action\Context $context
 
    ) {
        $this->gatewayHelper = $gatewayHelper;
        parent::__construct($context);
    }

    /**
    * @return json
    */
    public function execute()
    {
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);     
        try{
             $session_id = $this->gatewayHelper->getSessionId();
             $result = array(
                'status'=> 'success',
                'session_id' => $session_id
            );
         }catch (\Exception $e) {
            $result = array('status'=> 'error','message' => $e->getMessage());
        }

        $resultJson->setData($result);         
        return $resultJson;
    }
}