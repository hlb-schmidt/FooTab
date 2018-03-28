Ext.define('Shopware.apps.FooTab.model.Tab', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'FooTab',
            detail: 'Shopware.apps.FooTab.view.detail.Tab'
        };
    },

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string'},
    ],

    associations: [
        {
            relation: "ManyToMany",
            type: "hasMany",
            model: "Shopware.apps.FooTab.model.Filter",
            name: "getFilter",
            associationKey: "filters"
        }
    ]
});
