Ext.define('Shopware.apps.FooTab.view.detail.Filter', {
    extend: 'Shopware.grid.Association',
    alias: 'widget.tab-view-detail-filter',
    height: 200,
    title: 'Filter',

    configure: function() {
        return {
            controller: 'FooTab',
            columns: {
                name: {}
            }
        };
    }
});
