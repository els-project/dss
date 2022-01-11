  'use strict';
// $(window).on('load',function(){
//     //Welcome Message (not for login page)
//     function notify(message, type){
//         $.growl({
//             message: message
//         },{
//             type: type,
//             allow_dismiss: false,
//             label: 'Cancel',
//             className: 'btn-xs btn-inverse',
//             placement: {
//                 from: 'bottom',
//                 align: 'right'
//             },
//             delay: 2500,
//             animate: {
//                     enter: 'animated fadeInRight',
//                     exit: 'animated fadeOutRight'
//             },
//             offset: {
//                 x: 30,
//                 y: 30
//             }
//         });
//     };

   
//         notify('Welcome to Notification page', 'inverse');
   
// });

$(document).ready(function() {
   
    /*--------------------------------------
         Notifications & Dialogs
     ---------------------------------------*/
    /*
     * Notifications
     */
    function notify(from, align, icon, type, animIn, animOut){
        $.growl({
            icon: icon,
            title: ' Bootstrap Growl ',
            message: 'Turning standard Bootstrap alerts into awesome notifications',
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert" role="alert">' +
            '<button type="button" class="close" data-growl="dismiss">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title"></span>' +
            '<span data-growl="message"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };

    /* Notif Scan Barcode */
    function notifyScanBarcode(from, align, icon, type, animIn, animOut, nValue){
        $.growl({
            icon: icon,
            title: ' Gagal . . .! </br>',
            message: 'NIK '+nValue+' yang anda scan tidak terdaftar.',
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert NotScn" role="alert">' +
            '<button type="button" class="close" data-growl="dismiss">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title"></span>' +
            '<span data-growl="message"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };

    /* Notif Scan Absensi */
    function notifySuccesAbsen(from, align, icon, type, animIn, animOut, nValue){
        $.growl({
            icon: icon,
            title: ' Success </br>',
            message: 'NIK '+nValue+' yang anda scan sudah tercatat.',
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert NotScn" role="alert" style="top:91%!important; padding-bottom: 10px; padding-top: 10px;">' +
            '<button type="button" class="close" data-growl="dismiss" style="top: 5px;">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title" style="display: none;"></span>' +
            '<span data-growl="message" style="font-size: 16px;"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };

    /* Notif Scan Absensi Gagal */
    function notifyDangerAbsen(from, align, icon, type, animIn, animOut, nValue){
        $.growl({
            icon: icon,
            title: ' Danger </br>',
            message: 'NIK '+nValue+' belum di daftarkan oleh bagian HRD.',
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert NotScn" role="alert">' +
            '<button type="button" class="close" data-growl="dismiss">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title"></span>' +
            '<span data-growl="message"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };

    function notifyDangerAbsenManual(from, align, icon, type, animIn, animOut, nValue){
        $.growl({
            icon: icon,
            title: ' Danger </br>',
            message: 'SILAHKAN HUBUNGI HRD UNTUK INFO KARTU NIK ANDA, JANGAN DI MANUAL.',
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert NotScn" role="alert">' +
            '<button type="button" class="close" data-growl="dismiss">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title"></span>' +
            '<span data-growl="message"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };

    /* Notif Scan Absensi saat absen pulang */
    function notifyAbsenPulang(from, align, icon, type, animIn, animOut, nValue){
        $.growl({
            icon: icon,
            title: ' Success </br>',
            message: 'NIK '+nValue+' sudah tercatat absen pulang.',
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 30,
                y: 30
            },
            spacing: 10,
            z_index: 999999,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            icon_type: 'class',
            template: '<div data-growl="container" class="alert NotScn" role="alert">' +
            '<button type="button" class="close" data-growl="dismiss">' +
            '<span aria-hidden="true">&times;</span>' +
            '<span class="sr-only">Close</span>' +
            '</button>' +
            '<span data-growl="icon"></span>' +
            '<span data-growl="title"></span>' +
            '<span data-growl="message"></span>' +
            '<a href="#" data-growl="url"></a>' +
            '</div>'
        });
    };

    $('.notifscans .btn').on('click',function(e){
        e.preventDefault();
        var nFrom = $(this).attr('data-from');
        var nAlign = $(this).attr('data-align');
        var nIcons = $(this).attr('data-icon');
        var nType = $(this).attr('data-type');
        var nAnimIn = $(this).attr('data-animation-in');
        var nAnimOut = $(this).attr('data-animation-out');

        notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
    });

    $('.notifscan #notif').on('click',function(e){
        e.preventDefault();
        var nFrom = $(this).attr('data-from');
        var nAlign = $(this).attr('data-align');
        var nIcons = $(this).attr('data-icon');
        var nType = $(this).attr('data-type');
        var nAnimIn = $(this).attr('data-animation-in');
        var nAnimOut = $(this).attr('data-animation-out');
        var nValue = $(this).attr('data-value');

        notifyScanBarcode(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, nValue);
    });

    $('.notifscan #notifDanger').on('click',function(e){
        e.preventDefault();
        var nFrom = $(this).attr('data-from');
        var nAlign = $(this).attr('data-align');
        var nIcons = $(this).attr('data-icon');
        var nType = $(this).attr('data-type');
        var nAnimIn = $(this).attr('data-animation-in');
        var nAnimOut = $(this).attr('data-animation-out');
        var nValue = $(this).attr('data-value');

        notifyDangerAbsen(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, nValue);
    });

     $('.notifscan #notifDangerManual').on('click',function(e){
        e.preventDefault();
        var nFrom = $(this).attr('data-from');
        var nAlign = $(this).attr('data-align');
        var nIcons = $(this).attr('data-icon');
        var nType = $(this).attr('data-type');
        var nAnimIn = $(this).attr('data-animation-in');
        var nAnimOut = $(this).attr('data-animation-out');
        var nValue = $(this).attr('data-value');

        notifyDangerAbsenManual(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, nValue);
    });

    $('.notifscan #notifSuccess').on('click',function(e){
        e.preventDefault();
        var nFrom = $(this).attr('data-from');
        var nAlign = $(this).attr('data-align');
        var nIcons = $(this).attr('data-icon');
        var nType = $(this).attr('data-type');
        var nAnimIn = $(this).attr('data-animation-in');
        var nAnimOut = $(this).attr('data-animation-out');
        var nValue = $(this).attr('data-value');

        notifySuccesAbsen(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, nValue);
    });

    $('.notifscan #notifPulang').on('click',function(e){
        e.preventDefault();
        var nFrom = $(this).attr('data-from');
        var nAlign = $(this).attr('data-align');
        var nIcons = $(this).attr('data-icon');
        var nType = $(this).attr('data-type');
        var nAnimIn = $(this).attr('data-animation-in');
        var nAnimOut = $(this).attr('data-animation-out');
        var nValue = $(this).attr('data-value');

        notifyAbsenPulang(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut, nValue);
    });

});

