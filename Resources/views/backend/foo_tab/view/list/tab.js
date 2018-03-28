Ext.define('Shopware.apps.FooTab.view.list.Tab', {
    extend: 'Shopware.grid.Panel',
    alias:  'widget.tab-listing-grid',
    region: 'center',

    configure: function() {
        return {
            detailWindow: 'Shopware.apps.FooTab.view.detail.Window'
        };
    }
});
