$(document).ready(function () {
    initPlugins();







    function initPlugins() {
        // Remplace le div#article-content par un éditeur de texte.
        CKEDITOR.replace('article-content', {
            language: 'fr'
        });
    }
});

