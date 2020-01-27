<!DOCTYPE html>

<html  dir="ltr" lang="fr-ca" xml:lang="fr-ca">
<head>
    <title>S20201-ELE682-01: Règles Altium</title>
    <link rel="shortcut icon" href="https://ena.etsmtl.ca/theme/image.php/boost_ets/theme/1578429014/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, S20201-ELE682-01: Règles Altium" />
<link rel="stylesheet" type="text/css" href="https://ena.etsmtl.ca/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://ena.etsmtl.ca/theme/styles.php/boost_ets/1578429014_1566481459/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/ena.etsmtl.ca","sesskey":"nHHIJjdzBR","themerev":"1578429014","slasharguments":1,"theme":"boost_ets","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1578429017","admin":"admin","svgicons":true,"usertimezone":"Am\u00e9rique\/New York","contextid":886268};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/ena.etsmtl.ca\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/ena.etsmtl.ca\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/ena.etsmtl.ca\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/ena.etsmtl.ca\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/ena.etsmtl.ca\/theme\/yui_combo.php?m\/1578429017\/","combine":true,"comboBase":"https:\/\/ena.etsmtl.ca\/theme\/yui_combo.php?","ext":false,"root":"m\/1578429017\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_scheduler-saveseen":{"requires":["base","node","event"]},"moodle-mod_scheduler-studentlist":{"requires":["base","node","event","io"]},"moodle-mod_scheduler-delselected":{"requires":["base","node","event"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_html-beautify":{},"moodle-atto_htmlplus-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_htmlplus-beautify","moodle-atto_htmlplus-codemirror","event-valuechange"]},"moodle-atto_htmlplus-codemirror":{"requires":["moodle-atto_htmlplus-codemirror-skin"]},"moodle-atto_htmlplus-beautify":{},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_wiris-button":{"requires":["moodle-editor_atto-plugin","get"]}}},"gallery":{"name":"gallery","base":"https:\/\/ena.etsmtl.ca\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/ena.etsmtl.ca\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1578429017\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/ena.etsmtl.ca\/lib\/javascript.php\/1578429017\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/ena.etsmtl.ca\/lib\/javascript.php\/1578429017\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-resource-view" class="format-topics  path-mod path-mod-resource gecko dir-ltr lang-fr_ca yui-skin-sam yui3-skin-sam ena-etsmtl-ca pagelayout-incourse course-11619 context-886268 cmid-629778 category-44 ">

<div id="page-wrapper">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Passer au contenu principal</a>
</div><script type="text/javascript" src="https://ena.etsmtl.ca/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://ena.etsmtl.ca/lib/javascript.php/1578429017/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37568082-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    <nav class="fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex">
    
            <div data-region="drawer-toggle" class="d-inline-block mr-3">
                <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-secondary" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"  ></i><span class="sr-only">Panneau latéral</span></button>
            </div>
    
            <a href="https://www.etsmtl.ca/" target="_blank" class="navbar-brand has-logo
                    ">
                    <span class="logo d-none d-sm-inline">
                        <img src="https://ena.etsmtl.ca/pluginfile.php/1/core_admin/logocompact/100x100/1578429014/logo-ets.png" alt="ENA">
                    </span>
                <span class="site-name d-none">ENA</span>
            </a>
    
            <ul class="navbar-nav d-none d-md-flex">
                <!-- custom_menu -->
                <li class="nav-item">
    <a class="nav-item nav-link" href="https://ena.etsmtl.ca/" title="Accueil">Accueil</a>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5e2eeccf5f7265e2eeccf5daf52" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5e2eeccf5f7265e2eeccf5daf52">
        Cours
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5e2eeccf5f7265e2eeccf5daf52" aria-labelledby="drop-down-5e2eeccf5f7265e2eeccf5daf52">
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/my/" title="Mes cours">Mes cours</a>
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/course/index.php" title="Liste complète des cours">Liste complète des cours</a>
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/local/etscreationcours/" title="Création de cours">Création de cours</a>
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/mod/page/view.php?id=75" title="Demande de référence bibliographique">Demande de référence bibliographique</a>
    </div>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5e2eeccf5f83b5e2eeccf5daf53" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5e2eeccf5f83b5e2eeccf5daf53">
        Support
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5e2eeccf5f83b5e2eeccf5daf53" aria-labelledby="drop-down-5e2eeccf5f83b5e2eeccf5daf53">
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/mod/forum/view.php?id=14" title="Forum enseignants">Forum enseignants</a>
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/mod/forum/view.php?id=1039" title="Forum étudiants">Forum étudiants</a>
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/course/view.php?id=6395" title="Support Moodle (Enseignant)">Support Moodle (Enseignant)</a>
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/course/view.php?id=71" title="Support Moodle (Étudiant)">Support Moodle (Étudiant)</a>
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/mod/resource/view.php?id=77" title="Guide d’utilisation des bibliographies globales">Guide d’utilisation des bibliographies globales</a>
    </div>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5e2eeccf5f9275e2eeccf5daf54" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5e2eeccf5f9275e2eeccf5daf54">
        Google apps
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5e2eeccf5f9275e2eeccf5daf54" aria-labelledby="drop-down-5e2eeccf5f9275e2eeccf5daf54">
                <a class="dropdown-item" role="menuitem" href="https://sites.google.com/a/etsmtl.net/accueil/" title="Portail des applications Google de l'ÉTS">Portail des applications Google de l'ÉTS</a>
                <a class="dropdown-item" role="menuitem" href="https://sites.google.com/a/etsmtl.net/accueil/faq" title="Google Apps : Foire aux questions">Google Apps : Foire aux questions</a>
                <a class="dropdown-item" role="menuitem" href="https://drive.google.com/a/etsmtl.net/folderview?id=0BwOK8LGwPh2wQUY4V1BBNjZHcVk&amp;usp=sharing" title="Documents de formation">Documents de formation</a>
                <a class="dropdown-item" role="menuitem" href="https://sites.google.com/a/etsmtl.net/google-apps-ets/" title="Capsules de formation">Capsules de formation</a>
    </div>
</li><li class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-5e2eeccf5fadd5e2eeccf5daf55" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-menu-5e2eeccf5fadd5e2eeccf5daf55">
        Liens utiles
    </a>
    <div class="dropdown-menu" role="menu" id="drop-down-menu-5e2eeccf5fadd5e2eeccf5daf55" aria-labelledby="drop-down-5e2eeccf5fadd5e2eeccf5daf55">
                <a class="dropdown-item" role="menuitem" href="http://www.etsmtl.ca" title="ÉTS">ÉTS</a>
                <a class="dropdown-item" role="menuitem" href="https://signets-ens.etsmtl.ca" title="Signets (étudiants)">Signets (étudiants)</a>
                <a class="dropdown-item" role="menuitem" href="https://signets.etsmtl.ca" title="Signets (enseignants)">Signets (enseignants)</a>
                <a class="dropdown-item" role="menuitem" href="https://planets.etsmtl.ca/" title="PlanÉTS (enseignants)">PlanÉTS (enseignants)</a>
                <a class="dropdown-item" role="menuitem" href="http://etsmtl.ca/Etudiants-Actuels/Baccalaureat/Guichet-interactif/ChemiNot" title="ChemiNot">ChemiNot</a>
                <a class="dropdown-item" role="menuitem" href="http://www.etsmtl.ca/Etudiants-Actuels/Baccalaureat/Guichet-interactif/Stages-et-emplois" title="Eportfolio">Eportfolio</a>
                <a class="dropdown-item" role="menuitem" href="https://etscourriel.etsmtl.ca/" title="Messag. Outlook">Messag. Outlook</a>
                <a class="dropdown-item" role="menuitem" href="https://www.google.com/a/etsmtl.net" title="Messag. Gmail">Messag. Gmail</a>
                <a class="dropdown-item" role="menuitem" href="https://b.socrative.com/login/student/" title="Socrative Étudiants">Socrative Étudiants</a>
                <a class="dropdown-item" role="menuitem" href="https://b.socrative.com/login/teacher/" title="Socrative Enseignants">Socrative Enseignants</a>
                <a class="dropdown-item" role="menuitem" href="https://ena.etsmtl.ca/local/stats/" title="Statistiques">Statistiques</a>
    </div>
</li>
                <!-- page_heading_menu -->
                
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <div class="d-none d-lg-block">
                
            </div>
                <!-- navbar_plugin_output -->
                <li class="nav-item">
                <div class="float-right popover-region collapsed">
    <a id="message-drawer-toggle-5e2eeccf60ad05e2eeccf5daf56" class="nav-link d-inline-block popover-region-toggle position-relative" href="#"
            role="button">
        <i class="icon fa fa-comment fa-fw "  title="Ouvrir/fermer le tiroir des messages" aria-label="Ouvrir/fermer le tiroir des messages"></i>
        <div class="count-container hidden" data-region="count-container"
        aria-label="Il y a 0 conversations non lues">0</div>
    </a>
</div><div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="23777"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-5e2eeccf618075e2eeccf5daf57"
        aria-haspopup="true"
        aria-label="Afficher la fenêtre des notifications sans nouvelle notification"
        tabindex="0">
                <i class="icon fa fa-bell fa-fw "  title="Ouvrir/fermer le menu notifications" aria-label="Ouvrir/fermer le menu notifications"></i>
        <div class="count-container hidden" data-region="count-container"
        aria-label="Il y a 0 notifications non lues">0</div>

    </div>
    <div 
        id="popover-region-container-5e2eeccf618075e2eeccf5daf57"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Fenêtre de notification"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Tout marquer comme lu"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw "  title="Tout marquer comme lu" aria-label="Tout marquer comme lu"></i></span>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
        </a>
        <a href="https://ena.etsmtl.ca/message/notificationpreferences.php?userid=23777"
           title="Préférences de notification">
            <i class="icon fa fa-cog fa-fw "  title="Préférences de notification" aria-label="Préférences de notification"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">Vous n'avez pas de notification</div>

            </div>
            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://ena.etsmtl.ca/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">Tout afficher</div>
                    </div>
                </a>
    </div>
</div>
                </li>
                <!-- user_menu -->
                <li class="nav-item d-flex align-items-center">
                    <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-1" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-1-menubar" role="menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class=" dropdown-toggle icon-no-margin" id="dropdown-1" aria-label="Menu utilisateur" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-1-menu">
                            
                            <span class="userbutton"><span class="usertext mr-1">Benoit Lemieux</span><span class="avatars"><span class="avatar current"><img src="https://ena.etsmtl.ca/theme/image.php/boost_ets/core/1578429014/u/f2" class="userpicture defaultuserpic" width="35" height="35" role="presentation" aria-hidden="true" /></span></span></span>
                                
                            <b class="caret"></b>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br" id="dropdown-menu-1">
                                        <a href="https://ena.etsmtl.ca/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1">
                                                <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-1">
                                                Tableau de bord
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://ena.etsmtl.ca/user/profile.php?id=23777" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2">
                                                <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-2">
                                                Profil
                                            </span>
                                        </a>
                                        <a href="https://ena.etsmtl.ca/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3">
                                                <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-3">
                                                Notes
                                            </span>
                                        </a>
                                        <a href="https://ena.etsmtl.ca/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4">
                                                <i class="icon fa fa-comment fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-4">
                                                Messages personnels
                                            </span>
                                        </a>
                                        <a href="https://ena.etsmtl.ca/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5">
                                                <i class="icon fa fa-wrench fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-5">
                                                Préférences
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://ena.etsmtl.ca/login/logout.php?sesskey=nHHIJjdzBR" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6">
                                                <i class="icon fa fa-sign-out fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-6">
                                                Déconnexion
                                            </span>
                                        </a>
                            </div>
                    </div>
                </div>

        </div>

</div></div>
                </li>
            </ul>
            <!-- search_box -->
    </nav>
    

    <div id="page" class="container-fluid">
        <header id="page-header" class="row">
    <div class="col-12 pt-3 pb-3">
        <div class="card ">
            <div class="card-body ">
                <div class="d-flex">
                    <div class="mr-auto">
                        <div class="page-context-header"><div class="page-header-headings"><h1>ELE682-01 Conception de systèmes numériques à haute vitesse (H2020)</h1></div></div>
                    </div>

                </div>
                <div class="d-flex flex-wrap">
                    <div id="page-navbar">
                        <nav role="navigation" aria-label="Barre de navigation">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://ena.etsmtl.ca/my/"  >Tableau de bord</a>
                </li>
                <li class="breadcrumb-item">Mes cours</li>
                <li class="breadcrumb-item">
                    <a href="https://ena.etsmtl.ca/course/view.php?id=11619"  title="ELE682-01 Conception de systèmes numériques à haute vitesse (H2020)">S20201-ELE682-01</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://ena.etsmtl.ca/course/view.php?id=11619#section-2"  >Laboratoire 2020</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://ena.etsmtl.ca/mod/resource/view.php?id=629778" aria-current="page" title="Fichier">Règles Altium</a>
                </li>
    </ol>
</nav>
                    </div>
                    <div class="ml-auto d-flex">
                        
                    </div>
                    <div id="course-header">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


        <div id="page-content" class="row pb-3">
            <div id="region-main-box" class="col-12">
                <section id="region-main"  aria-label="Contenu">

                      <span class="notifications" id="user-notifications"></span>
                      <div role="main"><span id="maincontent"></span><h2>Règles Altium</h2><div class="resourceworkaround">Cliquer le lien <a href="https://ena.etsmtl.ca/pluginfile.php/886268/mod_resource/content/1/JLCPCB_Rules.RUL" onclick="this.target='_blank'">JLCPCB_Rules.RUL</a> pour afficher le fichier.</div></div>
                      <div class="mt-2 mb-1 activity-navigation">
<div class="row">
    <div class="col-md-4">        <div class="float-left">
                <a href="https://ena.etsmtl.ca/mod/resource/view.php?id=629769&forceview=1" id="prev-activity-link" class="btn btn-link"  title="Stackup" >&#x25C4; Stackup</a>

        </div>
</div>
    <div class="col-md-4">        <div class="mdl-align">
            <div class="urlselect">
    <form method="post" action="https://ena.etsmtl.ca/course/jumpto.php" class="form-inline" id="url_select_f5e2eeccf5daf516">
        <input type="hidden" name="sesskey" value="nHHIJjdzBR">
            <label for="jump-to-activity" class="sr-only">
                Aller à...
            </label>
        <select  id="jump-to-activity" class="custom-select urlselect" name="jump"
                 >
                    <option value="" selected>Aller à...</option>
                    <option value="/mod/forum/view.php?id=626897&amp;forceview=1" >Forum de discussion</option>
                    <option value="/mod/resource/view.php?id=626899&amp;forceview=1" >Chapitre 1</option>
                    <option value="/mod/resource/view.php?id=626900&amp;forceview=1" >Chapitre 2</option>
                    <option value="/mod/resource/view.php?id=626901&amp;forceview=1" >Chapitre 3</option>
                    <option value="/mod/resource/view.php?id=626902&amp;forceview=1" >Chapitre 4</option>
                    <option value="/mod/resource/view.php?id=626903&amp;forceview=1" >Chapitre 5</option>
                    <option value="/mod/resource/view.php?id=626904&amp;forceview=1" >Chapitre 6</option>
                    <option value="/mod/resource/view.php?id=626905&amp;forceview=1" >Chapitre 7</option>
                    <option value="/mod/resource/view.php?id=626906&amp;forceview=1" >Chapitre 8</option>
                    <option value="/mod/resource/view.php?id=626907&amp;forceview=1" >Understanding datasheets (Texas Instruments)</option>
                    <option value="/mod/resource/view.php?id=626915&amp;forceview=1" >Normes d'acceptabilité des circuits imprimés IPC-A-600</option>
                    <option value="/mod/resource/view.php?id=626916&amp;forceview=1" >Rules of thumbs - Eric Bogatin</option>
                    <option value="/mod/url/view.php?id=628531&amp;forceview=1" >Équipes de laboratoire</option>
                    <option value="/mod/resource/view.php?id=628532&amp;forceview=1" >Définition du projet</option>
                    <option value="/mod/resource/view.php?id=628533&amp;forceview=1" >Barème d'évaluation du projet</option>
                    <option value="/mod/resource/view.php?id=628535&amp;forceview=1" >Symbole et footprint du osd3358-sm</option>
                    <option value="/mod/resource/view.php?id=628536&amp;forceview=1" >Rapport préliminaire (Barème d'évaluation)</option>
                    <option value="/mod/resource/view.php?id=628537&amp;forceview=1" >Calendrier des laboratoires</option>
                    <option value="/mod/url/view.php?id=628538&amp;forceview=1" >Tolérances de fabrication</option>
                    <option value="/mod/url/view.php?id=628540&amp;forceview=1" >Image Linux</option>
                    <option value="/mod/resource/view.php?id=628541&amp;forceview=1" >Distribution Linux</option>
                    <option value="/mod/resource/view.php?id=628542&amp;forceview=1" >Logiciel</option>
                    <option value="/mod/resource/view.php?id=628544&amp;forceview=1" >Checklist</option>
                    <option value="/mod/resource/view.php?id=628562&amp;forceview=1" >Raccourcis Altium</option>
                    <option value="/mod/resource/view.php?id=629769&amp;forceview=1" >Stackup</option>
                    <option value="/mod/url/view.php?id=626918&amp;forceview=1" >Équipes de laboratoire</option>
                    <option value="/mod/resource/view.php?id=626919&amp;forceview=1" >Definition du projet</option>
                    <option value="/mod/url/view.php?id=626920&amp;forceview=1" >Tolérances de fabrication</option>
                    <option value="/mod/resource/view.php?id=626922&amp;forceview=1" >Checklist</option>
                    <option value="/mod/resource/view.php?id=626923&amp;forceview=1" >Calendrier des laboratoires</option>
                    <option value="/mod/resource/view.php?id=626924&amp;forceview=1" >Schematic et footprint du osd3358-sm</option>
                    <option value="/mod/resource/view.php?id=626925&amp;forceview=1" >Logiciel</option>
                    <option value="/mod/resource/view.php?id=626926&amp;forceview=1" >Rapport préliminaire (Barème d'évaluation)</option>
                    <option value="/mod/assign/view.php?id=626927&amp;forceview=1" >Remise du rapport préliminaire</option>
                    <option value="/mod/url/view.php?id=626928&amp;forceview=1" >Image Linux</option>
                    <option value="/mod/resource/view.php?id=626929&amp;forceview=1" >Distribution Linux</option>
        </select>
            <noscript>
                <input type="submit" class="btn btn-secondary" value="Valider">
            </noscript>
    </form>
</div>

        </div>
</div>
    <div class="col-md-4">        <div class="float-right">
                <a href="https://ena.etsmtl.ca/mod/url/view.php?id=626918&forceview=1" id="next-activity-link" class="btn btn-link"  title="Équipes de laboratoire" >Équipes de laboratoire &#x25BA;</a>

        </div>
</div>
</div>
</div>
                      

                </section>
            </div>
        </div>
    </div>
    <div
    id="message-drawer-5e2eeccf652315e2eeccf5daf517"
    class="message-app drawer bg-light hidden"
    aria-expanded="false"
    aria-hidden="true"
    data-region="message-drawer"
    role="region"
>
    <div class="header-container position-relative" data-region="header-container">
        <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-contacts">
            <div class="d-flex align-items-center">
                <div class="align-self-stretch">
                    <a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back role="button">
                        <div class="icon-back-in-drawer">
                            <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                            <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                        </div>
                        <div class="icon-back-in-app">
                            <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                        </div>                    </a>
                </div>
                <div>
                    Contacts
                </div>
                <div class="ml-auto">
                    <a href="#" data-route="view-search" role="button" aria-label="Recherche">
                        <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                    </a>
                </div>
            </div>
        </div>        
        <div
            class="hidden bg-white position-relative border-bottom px-2 py-2"
            aria-hidden="true"
            data-region="view-conversation"
        >
            <div class="hidden" data-region="header-content"></div>
            <div class="hidden" data-region="header-edit-mode">
                
                <div class="d-flex p-2 align-items-center">
                    Messages sélectionnés :
                    <span class="ml-1" data-region="message-selected-court">1</span>
                    <button type="button" class="ml-auto close" aria-label="Annuler la sélection de message"
                        data-action="cancel-edit-mode">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div data-region="header-placeholder">
                <div class="d-flex">
                    <div
                        class="ml-2 rounded-circle bg-pulse-grey align-self-center"
                        style="height: 38px; width: 38px"
                    >
                    </div>
                    <div class="ml-2 " style="flex: 1">
                        <div
                            class="mt-1 bg-pulse-grey w-75"
                            style="height: 16px;"
                        >
                        </div>
                    </div>
                    <div
                        class="ml-2 bg-pulse-grey align-self-center"
                        style="height: 16px; width: 20px"
                    >
                    </div>
                </div>
            </div>
            <div
                class="hidden position-absolute"
                data-region="confirm-dialogue-container"
                style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
            ></div>
        </div>        <div class="border-bottom px-2 py-3" aria-hidden="false"  data-region="view-overview">
            <div class="d-flex align-items-center">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text pr-0 bg-white">
                            <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                        </span>
                    </div>
                    <input
                        type="text"
                        class="form-control border-left-0"
                        placeholder="Recherche"
                        aria-label="Recherche"
                        data-region="view-overview-search-input"
                    >
                </div>
                <div class="ml-2">
                    <a
                        href="#"
                        data-route="view-settings"
                        data-route-param="23777"
                        aria-label="Réglages"
                        role="button"
                    >
                        <i class="icon fa fa-cog fa-fw " aria-hidden="true"  ></i>
                    </a>
                </div>
            </div>
            <div class="text-right mt-3">
                <a href="#" data-route="view-contacts" role="button">
                    <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                    Contacts
                    <span class="badge bg-primary ml-2 hidden"
                    data-region="contact-request-count"
                    aria-label="Il y a 0 demandes de contact en attente">
                        0
                    </span>
                </a>
            </div>
        </div>
        
        <div class="hidden border-bottom px-2 py-3 view-search"  aria-hidden="true" data-region="view-search">
            <div class="d-flex align-items-center">
                <a
                    class="mr-2 align-self-stretch d-flex align-items-center"
                    href="#"
                    data-route-back
                    data-action="cancel-search"
                    role="button"
                >
                    <div class="icon-back-in-drawer">
                        <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                        <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                    </div>
                    <div class="icon-back-in-app">
                        <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                    </div>                </a>
                <div class="input-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Recherche"
                        aria-label="Recherche"
                        data-region="search-input"
                    >
                    <div class="input-group-append">
                        <button
                            class="btn btn-outline-secondary"
                            type="button"
                            data-action="search"
                            aria-label="Recherche"
                        >
                            <span data-region="search-icon-container">
                                <i class="icon fa fa-search fa-fw " aria-hidden="true"  ></i>
                            </span>
                            <span class="hidden" data-region="loading-icon-container">
                                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>        
        <div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-settings">
            <div class="d-flex align-items-center">
                <div class="align-self-stretch" >
                    <a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back role="button">
                        <div class="icon-back-in-drawer">
                            <span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true"  ></i></span>
                            <span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"  ></i></span>
                        </div>
                        <div class="icon-back-in-app">
                            <span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true"  ></i></span>
                        </div>                    </a>
                </div>
                <div>
                    Paramètres
                </div>
            </div>
        </div>
    </div>
    <div class="body-container position-relative" data-region="body-container">
        
        <div
            class="hidden"
            data-region="view-contact"
            aria-hidden="true"
        >
            <div class="p-2 pt-3" data-region="content-container"></div>
        </div>        <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="23777">
            <div class="d-flex flex-column h-100">
                <div class="p-3 border-bottom">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a
                                id="contacts-tab-5e2eeccf652315e2eeccf5daf517"
                                class="nav-link active"
                                href="#contacts-tab-panel-5e2eeccf652315e2eeccf5daf517"
                                data-toggle="tab"
                                data-action="show-contacts-section"
                                role="tab"
                                aria-controls="contacts-tab-panel-5e2eeccf652315e2eeccf5daf517"
                                aria-selected="true"
                            >
                                Contacts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                id="requests-tab-5e2eeccf652315e2eeccf5daf517"
                                class="nav-link"
                                href="#requests-tab-panel-5e2eeccf652315e2eeccf5daf517"
                                data-toggle="tab"
                                data-action="show-requests-section"
                                role="tab"
                                aria-controls="requests-tab-panel-5e2eeccf652315e2eeccf5daf517"
                                aria-selected="false"
                            >
                                Demandes
                                <span class="badge bg-primary ml-2 hidden"
                                data-region="contact-request-count"
                                aria-label="Il y a 0 demandes de contact en attente">
                                    0
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content d-flex flex-column h-100">
                            <div
            class="tab-pane fade show active h-100 lazy-load-list"
            aria-live="polite"
            data-region="lazy-load-list"
            data-user-id="23777"
                                id="contacts-tab-panel-5e2eeccf652315e2eeccf5daf517"
                    data-section="contacts"
                    role="tabpanel"
                    aria-labelledby="contacts-tab-5e2eeccf652315e2eeccf5daf517"

        >
            
            <div class="hidden text-center p-2" data-region="empty-message-container">
                Aucun contact
            </div>
            <div class="hidden list-group" data-region="content-container">
                
            </div>
            <div class="list-group" data-region="placeholder-container">
                
            </div>
            <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
            </div>
        </div>
        
                            <div
            class="tab-pane fade h-100 lazy-load-list"
            aria-live="polite"
            data-region="lazy-load-list"
            data-user-id="23777"
                                id="requests-tab-panel-5e2eeccf652315e2eeccf5daf517"
                    data-section="requests"
                    role="tabpanel"
                    aria-labelledby="requests-tab-5e2eeccf652315e2eeccf5daf517"

        >
            
            <div class="hidden text-center p-2" data-region="empty-message-container">
                Aucune demande de contact
            </div>
            <div class="hidden list-group" data-region="content-container">
                
            </div>
            <div class="list-group" data-region="placeholder-container">
                
            </div>
            <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
            </div>
        </div>
                </div>
            </div>
        </div>        
        <div
            class="view-conversation hidden h-100"
            aria-hidden="true"
            data-region="view-conversation"
            data-user-id="23777"
            data-midnight="1580101200"
            data-message-poll-min="10"
            data-message-poll-max="120"
            data-message-poll-after-max="300"
            style="overflow-y: auto; overflow-x: hidden"
        >
            <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
                <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
                    <div class="py-3 bg-light sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
                        <p class="m-0">Demande de contact envoyée</p>
                        <p class="font-italic font-weight-light" data-region="text"></p>
                    </div>
                    <div class="p-3 bg-light text-center hidden" data-region="self-conversation-message-container">
                        <p class="m-0">Espace personnel</p>
                        <p class="font-italic font-weight-light" data-region="text">Enregistrer des brouillons, liens, note, etc. pour un usage ultérieur.</p>
                   </div>
                    <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>
                </div>
                <div class="p-4 w-100 h-100 hidden position-absolute" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
                    
                    <div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
                        <h3 class="h6 hidden" data-region="dialogue-header"></h3>
                        <p class="text-muted" data-region="dialogue-text"></p>
                        <div class="mb-2 hidden" data-region="delete-messages-for-all-users-toggle-container">
                            <label class="custom-control-label ml-2 text-muted">
                                <input type="checkbox" data-region="delete-messages-for-all-users-toggle">
                                Supprimer pour moi et et pour tous les autres
                            </label>
                        </div>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
                            <span data-region="dialogue-button-text">Bloc</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
                            <span data-region="dialogue-button-text">Débloquer</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
                            <span data-region="dialogue-button-text">Supprimer</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
                            <span data-region="dialogue-button-text">Ajouter</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
                            <span data-region="dialogue-button-text">Supprimer</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
                            <span data-region="dialogue-button-text">Supprimer</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
                            <span data-region="dialogue-button-text">Envoyer une demande de contact</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
                            <span data-region="dialogue-button-text">Accepter et ajouter aux contacts</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
                            <span data-region="dialogue-button-text">Décliner</span>
                            <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        </button>
                        <button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Annuler</button>
                    </div>
                </div>
                <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
                    <div class="h-100 d-flex flex-column">
                        <div
                            class="px-2 pb-2 pt-0 bg-light h-100"
                            style="overflow-y: auto"
                        >
                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                            <div class="mt-4">
                                <div class="mb-4">
                                    <div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                                <div class="d-flex flex-column p-2 bg-white rounded mb-2">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="mr-2">
                                            <div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
                                        </div>
                                        <div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
                                        <div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
                                    </div>
                                    <div class="bg-pulse-grey w-100" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
                                    <div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
                                </div>
                            </div>                        </div>
                    </div>                </div>
            </div>
        </div>
        
        <div
            class="hidden"
            aria-hidden="true"
            data-region="view-group-info"
        >
            <div
                class="pt-3 h-100 d-flex flex-column"
                data-region="group-info-content-container"
                style="overflow-y: auto"
            ></div>
        </div>        <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview"  data-user-id="23777">
            <div id="message-drawer-view-overview-container-5e2eeccf652315e2eeccf5daf517" class="d-flex flex-column h-100" style="overflow-y: auto">
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-favourites"
                    >
                        <div id="view-overview-favourites-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-favourites-target-5e2eeccf652315e2eeccf5daf517"
                                aria-expanded="false"
                                aria-controls="view-overview-favourites-target-5e2eeccf652315e2eeccf5daf517"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Favori</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="23777"
                                    id="view-overview-favourites-target-5e2eeccf652315e2eeccf5daf517"
            aria-labelledby="view-overview-favourites-toggle"
            data-parent="#message-drawer-view-overview-container-5e2eeccf652315e2eeccf5daf517"

                    >
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Aucune conversation favorite</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-group-messages"
                    >
                        <div id="view-overview-group-messages-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-group-messages-target-5e2eeccf652315e2eeccf5daf517"
                                aria-expanded="false"
                                aria-controls="view-overview-group-messages-target-5e2eeccf652315e2eeccf5daf517"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Groupe</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="23777"
                                    id="view-overview-group-messages-target-5e2eeccf652315e2eeccf5daf517"
            aria-labelledby="view-overview-group-messages-toggle"
            data-parent="#message-drawer-view-overview-container-5e2eeccf652315e2eeccf5daf517"

                    >
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Pas de conversation de groupe</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div
                        class="section border-0 card"
                        data-region="view-overview-messages"
                    >
                        <div id="view-overview-messages-toggle" class="card-header p-0" data-region="toggle">
                            <button
                                class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#view-overview-messages-target-5e2eeccf652315e2eeccf5daf517"
                                aria-expanded="false"
                                aria-controls="view-overview-messages-target-5e2eeccf652315e2eeccf5daf517"
                            >
                                <span class="collapsed-icon-container">
                                    <i class="icon fa fa-caret-right fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="expanded-icon-container">
                                    <i class="icon fa fa-caret-down fa-fw " aria-hidden="true"  ></i>
                                </span>
                                <span class="font-weight-bold">Privée</span>
                                <small class="hidden ml-1" data-region="section-total-count-container"
                                aria-label=" conversations">
                                    (<span data-region="section-total-count"></span>)
                                </small>
                                <span class="hidden ml-2" data-region="loading-icon-container">
                                    <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                                </span>
                                <span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
                                data-region="section-unread-count"
                                >
                                    
                                </span>
                            </button>
                        </div>
                                            <div
                        class="collapse border-bottom  lazy-load-list"
                        aria-live="polite"
                        data-region="lazy-load-list"
                        data-user-id="23777"
                                    id="view-overview-messages-target-5e2eeccf652315e2eeccf5daf517"
            aria-labelledby="view-overview-messages-toggle"
            data-parent="#message-drawer-view-overview-container-5e2eeccf652315e2eeccf5daf517"

                    >
                        
                        <div class="hidden text-center p-2" data-region="empty-message-container">
                                    <p class="text-muted mt-2">Pas de conversation privée</p>

                        </div>
                        <div class="hidden list-group" data-region="content-container">
                            
                        </div>
                        <div class="list-group" data-region="placeholder-container">
                                    <div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>

                        </div>
                        <div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
                            <span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        
        <div
            data-region="view-search"
            aria-hidden="true"
            class="h-100 hidden"
            data-user-id="23777"
            data-users-offset="0"
            data-messages-offset="0"
            style="overflow-y: auto"
            
        >
            <div class="hidden" data-region="search-results-container" style="overflow-y: auto">
                
                <div class="d-flex flex-column">
                    <div class="mb-3 bg-white" data-region="all-contacts-container">
                        <div data-region="contacts-container"  class="pt-2">
                            <h4 class="h6 px-2">Contacts</h4>
                            <div class="list-group" data-region="list"></div>
                        </div>
                        <div data-region="non-contacts-container" class="pt-2 border-top">
                            <h4 class="h6 px-2">Non contact</h4>
                            <div class="list-group" data-region="list"></div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-link text-primary" data-action="load-more-users">
                                <span data-region="button-text">Charger plus</span>
                                <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <div class="bg-white" data-region="messages-container">
                        <h4 class="h6 px-2 pt-2">Messages personnels</h4>
                        <div class="list-group" data-region="list"></div>
                        <div class="text-right">
                            <button class="btn btn-link text-primary" data-action="load-more-messages">
                                <span data-region="button-text">Charger plus</span>
                                <span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                            </button>
                        </div>
                    </div>
                    <p class="hidden p-3 text-center" data-region="no-results-container">Aucun résultat</p>
                </div>            </div>
            <div class="hidden" data-region="loading-placeholder">
                <div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</div>
            </div>
            <div class="p-3 text-center" data-region="empty-message-container">
                <p>Rechercher des personnes et des messages</p>
            </div>
        </div>        
        <div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
            <div class="hidden" data-region="content-container">
                
                <div data-region="settings" class="p-3">
                    <h3 class="h6 font-weight-bold">Confidentialité</h3>
                    <p>Vous pouvez choisir qui peut vous envoyer un message personnel</p>
                    <div data-preference="blocknoncontacts" class="mb-3">
                            <div class="custom-control custom-radio mb-2">
                                <input
                                    type="radio"
                                    name="message_blocknoncontacts"
                                    class="custom-control-input"
                                    id="block-noncontacts-5e2eeccf652315e2eeccf5daf517-1"
                                    value="1"
                                >
                                <label class="custom-control-label ml-2" for="block-noncontacts-5e2eeccf652315e2eeccf5daf517-1">
                                    Mes contacts seulement
                                </label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input
                                    type="radio"
                                    name="message_blocknoncontacts"
                                    class="custom-control-input"
                                    id="block-noncontacts-5e2eeccf652315e2eeccf5daf517-0"
                                    value="0"
                                >
                                <label class="custom-control-label ml-2" for="block-noncontacts-5e2eeccf652315e2eeccf5daf517-0">
                                    Mes contacts et tout le monde dans mes cours
                                </label>
                            </div>
                    </div>
                
                    <div class="hidden" data-region="notification-preference-container">
                        <h3 class="mb-2 mt-4 h6 font-weight-bold">Préférences de notification</h3>
                    </div>
                
                    <h3 class="mb-2 mt-4 h6 font-weight-bold">Général</h3>
                    <div data-preference="entertosend">
                        <span class="switch">
                            <input type="checkbox"
                                id="enter-to-send-5e2eeccf652315e2eeccf5daf517"
                                
                            >
                            <label for="enter-to-send-5e2eeccf652315e2eeccf5daf517">
                                Taper entrée pour envoyer
                            </label>
                        </span>
                    </div>
                </div>
            </div>
            <div data-region="placeholder-container">
                
                <div class="d-flex flex-column p-3">
                    <div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
                    <div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
                    <div class="mb-3">
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-3">
                            <div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                    <div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                    <div class="mb-4">
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                        </div>
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                    <div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
                    <div class="mb-3">
                        <div class="w-100 d-flex mb-2 align-items-center">
                            <div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
                            <div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
                        </div>
                    </div>
                </div>            </div>
        </div>    </div>
    <div class="footer-container position-relative" data-region="footer-container">
        
        <div
            class="hidden border-top bg-white position-relative"
            aria-hidden="true"
            data-region="view-conversation"
            data-enter-to-send="0"
        >
            <div class="hidden p-2" data-region="content-messages-footer-container">
                
                <div class="d-flex mt-1">
                    <textarea
                        dir="auto"
                        data-region="send-message-txt"
                        class="form-control bg-light"
                        rows="3"
                        data-auto-rows
                        data-min-rows="3"
                        data-max-rows="5"
                        role="textbox"
                        aria-label="Écrire un message"
                        placeholder="Écrire un message"
                        style="resize: none"
                    ></textarea>
                    <button
                        class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
                        aria-label="Envoyer message personnel"
                        data-action="send-message"
                    >
                        <span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true"  ></i></span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden p-2" data-region="content-messages-footer-edit-mode-container">
                
                <div class="d-flex p-3 justify-content-end">
                    <button
                        class="btn btn-link btn-icon my-1 icon-size-4"
                        data-action="delete-selected-messages"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Supprimer les messages sélectionnés"
                    >
                        <span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true"  ></i></span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                        <span class="sr-only">Supprimer les messages sélectionnés</span>
                    </button>
                </div>            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-contact-container">
                
                <div class="p-3 bg-white">
                    <p data-region="title"></p>
                    <p class="text-muted" data-region="text"></p>
                    <button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
                        <span data-region="dialogue-button-text">Envoyer une demande de contact</span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-unblock-container">
                
                <div class="p-3 bg-white">
                    <p class="text-muted" data-region="text">Vous avez bloqué cet utilisateur.</p>
                    <button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
                        <span data-region="dialogue-button-text">Débloquer l'utilisateur</span>
                        <span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Chargement" aria-label="Chargement"></i></span>
</span>
                    </button>
                </div>
            </div>
            <div class="hidden bg-secondary p-3" data-region="content-messages-footer-unable-to-message">
                
                <div class="p-3 bg-white">
                    <p class="text-muted" data-region="text">Vous ne pouvez pas envoyer un message à cet utilisateur</p>
                </div>
            </div>
            <div class="p-2" data-region="placeholder-container">
                <div class="d-flex">
                    <div class="bg-pulse-grey w-100" style="height: 80px"></div>
                    <div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
                </div>            </div>
            <div
                class="hidden position-absolute"
                data-region="confirm-dialogue-container"
                style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
            ></div>
        </div>            <div data-region="view-overview" class="text-center">
                <a href="https://ena.etsmtl.ca/message/index.php">
                    Tout afficher
                </a>
            </div>
    </div>
</div>
    <div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
        <nav class="list-group" aria-label="">
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=11619" data-key="coursehome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20201-ELE682-01</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/user/index.php?id=11619" data-key="participants" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="90" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="11619">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-users fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Participants</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/badges/view.php?type=2&amp;id=11619" data-key="badgesview" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="11619">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-shield fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Badges</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/admin/tool/lp/coursecompetencies.php?courseid=11619" data-key="competencies" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="11619">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-check-square-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Compétences</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/grade/report/index.php?id=11619" data-key="grades" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="11619">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Notes</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=11619#section-0" data-key="145077" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="11619">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Généralités</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=11619#section-1" data-key="145078" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="11619">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Cours</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action active" href="https://ena.etsmtl.ca/course/view.php?id=11619#section-2" data-key="145084" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="11619">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body font-weight-bold">Laboratoire 2020</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=11619#section-3" data-key="145079" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="11619">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Laboratoire 2019 (caché - conservé seulement pour référence)</span>
                    </div>
                </div>
            </a>
        </nav>
        <nav class="list-group mt-1" aria-label="Site">
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/my/" data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="1" data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Tableau de bord</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/?redirect=0" data-key="home" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-home fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Accueil du site</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/calendar/view.php?view=month&amp;course=11619" data-key="calendar" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-calendar fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Calendrier</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/user/files.php" data-key="privatefiles" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-file-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Fichiers personnels</span>
                    </div>
                </div>
            </a>
            <div class="list-group-item" data-key="mycourses" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="myhome">
                <div class="ml-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body">Mes cours</span>
                    </div>
                </div>
            </div>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=11619" data-key="11619" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20201-ELE682-01</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=11617" data-key="11617" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20201-ELE413-02</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=11344" data-key="11344" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20201-ELE200-01-02</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=11158" data-key="11158" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20201-MAT350-04-07</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=10962" data-key="10962" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20193-PEP110-06</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=9826" data-key="9826" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20192-ELE275-01-02</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=8524" data-key="8524" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20183-CHM131-02-06-09</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=8646" data-key="8646" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20183-PHY335-01-02-08</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=7940" data-key="7940" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20182-INF145-01</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/course/view.php?id=8002" data-key="8002" data-isexpandable="1" data-indent="1" data-showdivider="0" data-type="20" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">S20182-MAT265-01-02-03</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://ena.etsmtl.ca/my/" data-key="courseindexpage" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="ml-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Plus…</span>
                    </div>
                </div>
            </a>
        </nav>
    </div>
    <footer id="page-footer" class="py-3 bg-dark text-light">
        <div class="container">
            <div id="course-footer"></div>
    
    
            <div class="tool_usertours-resettourcontainer"></div>
            <div class="logininfo">Connecté « <a href="https://ena.etsmtl.ca/user/profile.php?id=23777" title="Consulter le profil">Benoit Lemieux</a> » (<a href="https://ena.etsmtl.ca/login/logout.php?sesskey=nHHIJjdzBR">Déconnexion</a>)</div>
            <div class="homelink-lang">
              <div class="homelink"><a href="https://ena.etsmtl.ca/course/view.php?id=11619">S20201-ELE682-01</a></div>
            </div>
            <nav class="nav navbar-nav d-md-none">
                    <ul class="list-unstyled pt-3">
                                        <li><a href="https://ena.etsmtl.ca/" title="Accueil">Accueil</a></li>
                                        <li>Cours</li>
                                    <li>
                                        <ul class="list-unstyled ml-3">
                                                            <li><a href="https://ena.etsmtl.ca/my/" title="Mes cours">Mes cours</a></li>
                                                            <li><a href="https://ena.etsmtl.ca/course/index.php" title="Liste complète des cours">Liste complète des cours</a></li>
                                                            <li><a href="https://ena.etsmtl.ca/local/etscreationcours/" title="Création de cours">Création de cours</a></li>
                                                            <li><a href="https://ena.etsmtl.ca/mod/page/view.php?id=75" title="Demande de référence bibliographique">Demande de référence bibliographique</a></li>
                                        </ul>
                                    </li>
                                        <li>Support</li>
                                    <li>
                                        <ul class="list-unstyled ml-3">
                                                            <li><a href="https://ena.etsmtl.ca/mod/forum/view.php?id=14" title="Forum enseignants">Forum enseignants</a></li>
                                                            <li><a href="https://ena.etsmtl.ca/mod/forum/view.php?id=1039" title="Forum étudiants">Forum étudiants</a></li>
                                                            <li><a href="https://ena.etsmtl.ca/course/view.php?id=6395" title="Support Moodle (Enseignant)">Support Moodle (Enseignant)</a></li>
                                                            <li><a href="https://ena.etsmtl.ca/course/view.php?id=71" title="Support Moodle (Étudiant)">Support Moodle (Étudiant)</a></li>
                                                            <li><a href="https://ena.etsmtl.ca/mod/resource/view.php?id=77" title="Guide d’utilisation des bibliographies globales">Guide d’utilisation des bibliographies globales</a></li>
                                        </ul>
                                    </li>
                                        <li>Google apps</li>
                                    <li>
                                        <ul class="list-unstyled ml-3">
                                                            <li><a href="https://sites.google.com/a/etsmtl.net/accueil/" title="Portail des applications Google de l'ÉTS">Portail des applications Google de l'ÉTS</a></li>
                                                            <li><a href="https://sites.google.com/a/etsmtl.net/accueil/faq" title="Google Apps : Foire aux questions">Google Apps : Foire aux questions</a></li>
                                                            <li><a href="https://drive.google.com/a/etsmtl.net/folderview?id=0BwOK8LGwPh2wQUY4V1BBNjZHcVk&amp;usp=sharing" title="Documents de formation">Documents de formation</a></li>
                                                            <li><a href="https://sites.google.com/a/etsmtl.net/google-apps-ets/" title="Capsules de formation">Capsules de formation</a></li>
                                        </ul>
                                    </li>
                                        <li>Liens utiles</li>
                                    <li>
                                        <ul class="list-unstyled ml-3">
                                                            <li><a href="http://www.etsmtl.ca" title="ÉTS">ÉTS</a></li>
                                                            <li><a href="https://signets-ens.etsmtl.ca" title="Signets (étudiants)">Signets (étudiants)</a></li>
                                                            <li><a href="https://signets.etsmtl.ca" title="Signets (enseignants)">Signets (enseignants)</a></li>
                                                            <li><a href="https://planets.etsmtl.ca/" title="PlanÉTS (enseignants)">PlanÉTS (enseignants)</a></li>
                                                            <li><a href="http://etsmtl.ca/Etudiants-Actuels/Baccalaureat/Guichet-interactif/ChemiNot" title="ChemiNot">ChemiNot</a></li>
                                                            <li><a href="http://www.etsmtl.ca/Etudiants-Actuels/Baccalaureat/Guichet-interactif/Stages-et-emplois" title="Eportfolio">Eportfolio</a></li>
                                                            <li><a href="https://etscourriel.etsmtl.ca/" title="Messag. Outlook">Messag. Outlook</a></li>
                                                            <li><a href="https://www.google.com/a/etsmtl.net" title="Messag. Gmail">Messag. Gmail</a></li>
                                                            <li><a href="https://b.socrative.com/login/student/" title="Socrative Étudiants">Socrative Étudiants</a></li>
                                                            <li><a href="https://b.socrative.com/login/teacher/" title="Socrative Enseignants">Socrative Enseignants</a></li>
                                                            <li><a href="https://ena.etsmtl.ca/local/stats/" title="Statistiques">Statistiques</a></li>
                                        </ul>
                                    </li>
                    </ul>
            </nav>
            <div class="tool_dataprivacy"><a href="https://ena.etsmtl.ca/admin/tool/dataprivacy/summary.php">Résumé de conservation de données</a></div><a href="https://download.moodle.org/mobile?version=2019052001&amp;lang=fr_ca&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Obtenir l'app mobile</a>
            <script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://ena.etsmtl.ca/lib/requirejs.php/1578429017/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://ena.etsmtl.ca/lib/javascript.php/1578429017/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'https://ena.etsmtl.ca/lib/javascript.php/1578429017/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://ena.etsmtl.ca/lib/javascript.php/1578429017/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://ena.etsmtl.ca/lib/javascript.php/1578429017/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://ena.etsmtl.ca/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("fr",{
 "Audio Player": "Lecteur audio",
 "Video Player": "Lecteur vidéo",
 "Play": "Lecture",
 "Pause": "Pause",
 "Replay": "Revoir",
 "Current Time": "Temps actuel",
 "Duration Time": "Durée",
 "Remaining Time": "Temps restant",
 "Stream Type": "Type de flux",
 "LIVE": "EN DIRECT",
 "Loaded": "Chargé",
 "Progress": "Progression",
 "Progress Bar": "Barre de progression",
 "progress bar timing: currentTime={1} duration={2}": "{1} de {2}",
 "Fullscreen": "Plein écran",
 "Non-Fullscreen": "Fenêtré",
 "Mute": "Sourdine",
 "Unmute": "Son activé",
 "Playback Rate": "Vitesse de lecture",
 "Subtitles": "Sous-titres",
 "subtitles off": "Sous-titres désactivés",
 "Captions": "Sous-titres transcrits",
 "captions off": "Sous-titres transcrits désactivés",
 "Chapters": "Chapitres",
 "Descriptions": "Descriptions",
 "descriptions off": "descriptions désactivées",
 "Audio Track": "Piste audio",
 "Volume Level": "Niveau de volume",
 "You aborted the media playback": "Vous avez interrompu la lecture de la vidéo.",
 "A network error caused the media download to fail part-way.": "Une erreur de réseau a interrompu le téléchargement de la vidéo.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "Cette vidéo n'a pas pu être chargée, soit parce que le serveur ou le réseau a échoué ou parce que le format n'est pas reconnu.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "La lecture de la vidéo a été interrompue à cause d'un problème de corruption ou parce que la vidéo utilise des fonctionnalités non prises en charge par votre navigateur.",
 "No compatible source was found for this media.": "Aucune source compatible n'a été trouvée pour cette vidéo.",
 "The media is encrypted and we do not have the keys to decrypt it.": "Le média est chiffré et nous n'avons pas les clés pour le déchiffrer.",
 "Play Video": "Lire la vidéo",
 "Close": "Fermer",
 "Close Modal Dialog": "Fermer la boîte de dialogue modale",
 "Modal Window": "Fenêtre modale",
 "This is a modal window": "Ceci est une fenêtre modale",
 "This modal can be closed by pressing the Escape key or activating the close button.": "Ce modal peut être fermé en appuyant sur la touche Échap ou activer le bouton de fermeture.",
 ", opens captions settings dialog": ", ouvrir les paramètres des sous-titres transcrits",
 ", opens subtitles settings dialog": ", ouvrir les paramètres des sous-titres",
 ", opens descriptions settings dialog": ", ouvrir les paramètres des descriptions",
 ", selected": ", sélectionné",
 "captions settings": "Paramètres des sous-titres transcrits",
 "subtitles settings": "Paramètres des sous-titres",
 "descriptions settings": "Paramètres des descriptions",
 "Text": "Texte",
 "White": "Blanc",
 "Black": "Noir",
 "Red": "Rouge",
 "Green": "Vert",
 "Blue": "Bleu",
 "Yellow": "Jaune",
 "Magenta": "Magenta",
 "Cyan": "Cyan",
 "Background": "Arrière-plan",
 "Window": "Fenêtre",
 "Transparent": "Transparent",
 "Semi-Transparent": "Semi-transparent",
 "Opaque": "Opaque",
 "Font Size": "Taille des caractères",
 "Text Edge Style": "Style des contours du texte",
 "None": "Aucun",
 "Raised": "Élevé",
 "Depressed": "Enfoncé",
 "Uniform": "Uniforme",
 "Dropshadow": "Ombre portée",
 "Font Family": "Famille de polices",
 "Proportional Sans-Serif": "Polices à chasse variable sans empattement (Proportional Sans-Serif)",
 "Monospace Sans-Serif": "Polices à chasse fixe sans empattement (Monospace Sans-Serif)",
 "Proportional Serif": "Polices à chasse variable avec empattement (Proportional Serif)",
 "Monospace Serif": "Polices à chasse fixe avec empattement (Monospace Serif)",
 "Casual": "Manuscrite",
 "Script": "Scripte",
 "Small Caps": "Petites capitales",
 "Reset": "Réinitialiser",
 "restore all settings to the default values": "Restaurer tous les paramètres aux valeurs par défaut",
 "Done": "Terminé",
 "Caption Settings Dialog": "Boîte de dialogue des paramètres des sous-titres transcrits",
 "Beginning of dialog window. Escape will cancel and close the window.": "Début de la fenêtre de dialogue. La touche d'échappement annulera et fermera la fenêtre.",
 "End of dialog window.": "Fin de la fenêtre de dialogue."
});

    });
});;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/url/view.php?id=628531&redirect=1'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628532&redirect=1'); return false; };
function legacy_activity_onclick_handler_3(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628533&redirect=1'); return false; };
function legacy_activity_onclick_handler_4(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628535&redirect=1'); return false; };
function legacy_activity_onclick_handler_5(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628536&redirect=1'); return false; };
function legacy_activity_onclick_handler_6(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628537&redirect=1'); return false; };
function legacy_activity_onclick_handler_7(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/url/view.php?id=628538&redirect=1'); return false; };
function legacy_activity_onclick_handler_8(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/url/view.php?id=628540&redirect=1'); return false; };
function legacy_activity_onclick_handler_9(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628541&redirect=1'); return false; };
function legacy_activity_onclick_handler_10(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628542&redirect=1'); return false; };
function legacy_activity_onclick_handler_11(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628544&redirect=1'); return false; };
function legacy_activity_onclick_handler_12(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=628562&redirect=1'); return false; };
function legacy_activity_onclick_handler_13(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=629769&redirect=1'); return false; };
function legacy_activity_onclick_handler_14(e) { e.halt(); window.open('https://ena.etsmtl.ca/mod/resource/view.php?id=629778&redirect=1'); return false; };

require(
[
    'jquery',
    'core_message/message_popover'
],
function(
    $,
    Popover
) {
    var toggle = $('#message-drawer-toggle-5e2eeccf60ad05e2eeccf5daf56');
    Popover.init(toggle);
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

        require(['jquery'], function($) {
            $('#jump-to-activity').change(function() {
                if (!$(this).val()) {
                    return false;
                }
                $('#url_select_f5e2eeccf5daf516').submit();
            });
        });
    ;

require(['jquery', 'core_message/message_drawer'], function($, MessageDrawer) {
    var root = $('#message-drawer-5e2eeccf652315e2eeccf5daf517');
    MessageDrawer.init(root, '5e2eeccf652315e2eeccf5daf517', false);
});
;

require(['theme_boost/loader']);
require(['theme_boost/drawer'], function(mod) {
    mod.init();
});
;
require(["core/notification"], function(amd) { amd.init(886268, []); });;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });;
require(["core/page_global"], function(amd) { amd.init(); });
});
//]]>
</script>
<script type="text/javascript" src="https://ena.etsmtl.ca/theme/javascript.php/boost_ets/1578429014/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Modifi\u00e9 le","name":"Nom","error":"Erreur","info":"Information","yes":"Oui","no":"Non","cancel":"Annuler","confirm":"Confirmer","areyousure":"En \u00eates-vous bien s\u00fbr\u00a0?","closebuttontitle":"Fermer","unknownerror":"Erreur inconnue"},"repository":{"type":"Type","size":"Taille","invalidjson":"Cha\u00eene JSON non valide","nofilesattached":"Aucun fichier joint","filepicker":"S\u00e9lecteur de fichiers","logout":"D\u00e9connexion","nofilesavailable":"Aucun fichier disponible","norepositoriesavailable":"D\u00e9sol\u00e9, aucun de vos d\u00e9p\u00f4ts actuels ne peut retourner de fichiers dans le format requis.","fileexistsdialogheader":"Le fichier existe","fileexistsdialog_editor":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint au texte que vous modifiez.","fileexistsdialog_filemanager":"Un fichier de ce nom a d\u00e9j\u00e0 \u00e9t\u00e9 joint","renameto":"Renommer \u00e0 \u00ab\u00a0{$a}\u00a0\u00bb","referencesexist":"Ce fichier est utilis\u00e9 comme source par {$a} alias.","select":"S\u00e9lectionnez"},"admin":{"confirmdeletecomments":"Voulez-vous vraiment supprimer des commentaires\u00a0?","confirmation":"Confirmation"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"fr"});
});
M.util.help_popups.setup(Y);
 M.util.js_pending('random5e2eeccf5daf518'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5e2eeccf5daf518'); });
})();
//]]>
</script>

        </div>
    </footer>
</div>

</body>
</html>