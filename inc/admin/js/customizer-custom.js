
jQuery(window).load(function() {

    //var upgrade_notice = '<a href="https://accesspressthemes.com/wordpress-themes/one-paze-pro/" target="_blank"><div class="upgrade-banner"><img style="display:block" src="'+ one_paze_template_path.template_path +'/inc/images/upgrade-banner.png"/></div></a>';
    var upgrade_notice = '<a class="upgrade-pro" target="_blank" href="https://accesspressthemes.com/wordpress-themes/one-paze-pro/">UPGRADE TO ONE PAZE PRO</a>';
    upgrade_notice += '<a class="upgrade-pro" target="_blank" href="http://accesspressthemes.com/theme-demos/?theme=one-paze-pro">ONE PAZE PRO DEMO</a>'

    jQuery('#customize-info .preview-notice').append(upgrade_notice);

});