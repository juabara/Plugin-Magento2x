var config = {
    map: {
        '*': {
            'Magento_Checkout/js/model/place-order':'Kesterpay_Gateway/js/model/place-order',
            'Magento_Checkout/js/action/select-payment-method':
                'Kesterpay_Gateway/js/action/select-payment-method'
        }
    },
    config: {
        mixins: {
            'Kesterpay_Gateway/js/validation': {
                'Kesterpay_Gateway/js/validation-mixin': true
            }
        }
    }
};