var config = {
    config: {
        mixins: {
            'Magento_Ui/js/grid/controls/columns': {
                'Mageplaza_Customize/js/columns-mixin': true
            },
            'Magento_Ui/js/modal/modal': {
                'Mageplaza_Customize/js/modal-widget-mixin': true
            },
            'Magento_Checkout/js/model/step-navigator': {
                'Mageplaza_Customize/js/model/step-navigator-mixin': true
            },
            'Magento_Checkout/js/proceed-to-checkout': {
                'Mageplaza_Customize/js/proceed-to-checkout-mixin': true
            }
        }
    }
}