<script type="text/javascript">
    // <![CDATA[
    AUI().use('cookie', 'liferay-util-window', 'aui-base', function(A) {(function () {
        var $ = AUI.$; var _ = AUI._;
        var okButton = A.one('#_fr_ippon_sel_privacy_web_portlet_PrivacyPortlet_okButton');
        var readMore = A.one('#_fr_ippon_sel_privacy_web_portlet_PrivacyPortlet_readMore');
        okButton.on('click', function (event) {
            hidePrivacyMessage();
            event.halt();
        });
        readMore.on('click', function (event) {
            if (!event.metaKey && !event.ctrlKey) {
                Liferay.Util.openInDialog(event);
            }
        });
        var wrapper = A.one('#wrapper');
        var privacyInfoMessage = A.one('#_fr_ippon_sel_privacy_web_portlet_PrivacyPortlet_privacy-info-message');
        if (wrapper) {
            wrapper.addClass('wrapper-for-privacy-portlet');
        }
        if (privacyInfoMessage) {
            var hideStripPrivacyInfoMessage = privacyInfoMessage.one('.hide-strip-privacy-info-message');
            if (hideStripPrivacyInfoMessage) {
                hideStripPrivacyInfoMessage.on('click', hidePrivacyMessage);
            }
        }
        function hidePrivacyMessage() {
            privacyInfoMessage.ancestor('.smc-privacy-portlet').hide();
            var today = new Date();
            var expire = new Date();
            var nDays = 30;
            expire.setTime(today.getTime() + 3600000 * 24 * nDays);
            var expString = "expires=" + expire.toGMTString();
            cookieName = "PRIVACY_READ20152";
            cookieValue = today.getTime();
            document.cookie = cookieName + "=" + escape(cookieValue) + ";expires=" + expire.toGMTString();
            wrapper.removeClass('wrapper-for-privacy-portlet');
        }
    })(); });
// ]]>
</script>