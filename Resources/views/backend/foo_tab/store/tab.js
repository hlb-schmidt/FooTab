Ext.define('Shopware.apps.FooTab.store.Tab', {
    extend:'Shopware.store.Listing',

    configure: function() {
        return {
            controller: 'FooTab'
        };
    },
    model: 'Shopware.apps.FooTab.model.Tab'
});
