<?php
namespace Kesterpay\Gateway\Model\System\Config\Source\Customer;

/**
 * Class Dob Source model DOB options
 *
 * @see        Official Website
 * @author    Kesterpay (and others)
 * @copyright 2018-2019 Kesterpay
 * @license   https://www.gnu.org/licenses/gpl-3.0.pt-br.html GNU GPL, version 3
 * @package   Kesterpay\Gateway\Model\System\Config\Source\Customer
 */
class Dob implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var \Kesterpay\Gateway\Helper\Internal
     */
    protected $gatewayHelper;

    /**
     * @param \Kesterpay\Gateway\Helper\Internal $gatewayHelper
     */
    public function __construct(
            \Kesterpay\Gateway\Helper\Internal $gatewayHelper
    ){
        $this->gatewayHelper = $gatewayHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $fields = $this->gatewayHelper->getFields('customer');
        $options = [];
        $options[] = array('value'=>'','label'=> __('Request customer along with card details'));

        foreach ($fields as $key => $value) {
            if (!is_null($value['frontend_label'])) {
                $options[] = array(
                    'value' => $value['attribute_code'],
                    'label' => $value['frontend_label'] . ' (' . $value['attribute_code'] . ')'
                );
            }
        }

        return $options;
    }
}