// JavaScript Document
(function() {
    tinymce.create('tinymce.plugins.mylink', {
        init : function(ed, url) {
            ed.addButton('englishversion', {
                title : 'English Version',
                image : url+'/../images/lang_en.png',
                onclick : function() {
                     ed.selection.setContent('<a class="fancybox-inline" href="#english">[lang_en]</a> <a class="fancybox-inline" href="#english">English Version</a>'+'<aside class="none"><div id="english" class="fancybox-inline"><h2>Ecrire ici le titre en anglais ici</h2><p>Ici le texte du contenu en anglais</p></div></aside>');
 
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('englishversion', tinymce.plugins.mylink);
})();
