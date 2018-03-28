Ext.define('Shopware.apps.FooTab.model.Filter', {
    extend: 'Shopware.apps.Article.model.PropertyOption',
    configure: function() {
       return {
          related: 'Shopware.apps.FooTab.view.detail.Filter'
       }
    }
});
