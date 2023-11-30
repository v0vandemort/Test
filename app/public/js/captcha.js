function onSmartCaptchaReady() {
    if (!window.smartCaptcha) {
        throw new Error("SmartCaptcha is not present");
    }

    const params = getParameters();

    const widgetId = window.smartCaptcha.render(
        "captcha-container",
        params
    );

    window.smartCaptcha.subscribe(
        widgetId,
        "challenge-visible",
        handleChallengeVisible
    );

    window.smartCaptcha.subscribe(
        widgetId,
        "challenge-hidden",
        handleChallengeHidden
    );

    window.smartCaptcha.subscribe(widgetId, "success", handleSuccess);

    if (params.invisible) {
        window.smartCaptcha.execute(widgetId);
    }
}

function handleSuccess(token) {
    if (window.NativeClient) {
        window.NativeClient.onGetToken(token);
    } else {
        sendIos("captchaDidFinish", token);
    }
}

function handleChallengeVisible() {
    if (window.NativeClient) {
        window.NativeClient.onChallengeVisible();
    } else {
        sendIos("challengeDidAppear");
    }
}

function handleChallengeHidden() {
    if (window.NativeClient) {
        window.NativeClient.onChallengeHidden();
    } else {
        sendIos("challengeDidDisappear");
    }
}

function sendIos(...args) {
    if (args.length == 0) {
        return;
    }

    const message = {
        method: args[0],
        data: args[1] !== undefined ? args[1] : ""
    };

    if (window.webkit) {
        window.webkit.messageHandlers.NativeClient.postMessage(message);
    }
}

function getParameters() {
    const result = {};

    if (!window.location.search) {
        return result;
    }

    const queryParams = new URLSearchParams(window.location.search);

    queryParams.forEach((value, key) => {
        result[key] = value;
    });

    result.test = result.test === "true";
    result.invisible = result.invisible === "true";
    result.hideShield = result.hideShield === "true";
    result.webview = true;

    return result;
}

src = "https://smartcaptcha.yandexcloud.net/captcha.js?render=onload&onload=onSmartCaptchaReady"
defer
