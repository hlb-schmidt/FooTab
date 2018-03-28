Ext.define('Shopware.apps.FooTab.view.detail.Tab', {
    extend: 'Shopware.model.Container',
    alias: "widget.tab-detail-container",
    padding: 20,

    configure: function() {
        return {
            controller: 'FooTab',
            associations: ["filters"]
        };
    }
});
