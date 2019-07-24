"use strict";
// Class definition
var KTAvatarDemo = function() {

    return {
        // Init demos
        init: function() {
           var avatar1 = new KTAvatar('kt_profile_avatar_1');
        }
    };
}();

// Class initialization on page load
jQuery(document).ready(function() {
    KTAvatarDemo.init();
});