define(['jquery'], function ($) {
    'use strict';

    var modalWidgetMixin = {
        options: {
            confirmMessage: "Please, confirm modal closing."
        },

        /**
         * Add confirmation before closing the modal
         *
         * @returns {Element}
         */
        closeModal: function () {
            if (!window.confirm(this.options.confirmMessage)) {
                return this.element;
            }

            return this._super();
        }
    };

    return modalWidgetMixin;
});
