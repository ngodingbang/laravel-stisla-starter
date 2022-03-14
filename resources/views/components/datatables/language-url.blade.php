@if (\App::getLocale() !== 'en')
    const datatable_language_url = '{{ mix(sprintf('node_modules/datatables.net-plugins/i18n/%s.json', \App::getLocale())) }}';
@endif
