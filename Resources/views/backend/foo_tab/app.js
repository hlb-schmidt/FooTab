Ext.define('Shopware.apps.FooTab', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.FooTab',

    loadPath: '{url action=load}',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'list.Window',
        'list.Tab',
        'detail.Tab',
        'detail.Window',
        'detail.Filter'
    ],

    models: ['Tab', 'Filter'],
    stores: ['Tab'],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});
