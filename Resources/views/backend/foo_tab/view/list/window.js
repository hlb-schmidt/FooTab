Ext.define('Shopware.apps.FooTab.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.tab-list-window',
    width: 550,
    title : 'FooTab Tab List',

    configure: function() {
        return {
            listingGrid: 'Shopware.apps.FooTab.view.list.Tab',
            listingStore: 'Shopware.apps.FooTab.store.Tab'
        };
    }
});
