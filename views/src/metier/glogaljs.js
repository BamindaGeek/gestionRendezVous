var app = angular.module('mainTelya',  []);
//Récupération du cookies utiulisateur connecté
$.UserConnected = teLya.checkCookie('usersRDV') != "" ? teLya.checkCookie('usersRDV') : null ;

if($.UserConnected != null && window.location.pathname != '/rendezvous/views/login/')
    window.location.href ='../logout';
//Récuperation du domaine
var fullAppsUrl = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
//Url du controler pour les requette htpp ajax du client
var controlerUrl = fullAppsUrl+"/rendezvous/controlers/";
//Liste des entite de la base de données
var baseDeDonnees = {
    lstCommunes : ''
}

// Opera 8.0+
var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

// Firefox 1.0+
var isFirefox = typeof InstallTrigger !== 'undefined';

// Safari 3.0+ "[object HTMLElementConstructor]"
var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));

// Internet Explorer 6-11
var isIE = /*@cc_on!@*/false || !!document.documentMode;

// Edge 20+
var isEdge = !isIE && !!window.StyleMedia;

// Chrome 1 - 71
var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);

// Blink engine detection
var isBlink = (isChrome || isOpera) && !!window.CSS;
//Object contenant un tuple d'une entite
var objectSyabe = {};

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

$(function () {
    //Mise à blanc du formulaire d'ajout

});


