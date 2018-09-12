$(document).ready(function() {
/* (function(_, r, e, t, a, i, l) {
        _['retailCRMObject'] = a;
        _[a] = _[a] || function() {
            (_[a].q = _[a].q || []).push(arguments)
        };
        _[a].l = 1 * new Date();
        l = r.getElementsByTagName(e)[0];
        i = r.createElement(e);
        i.async = !0;
        i.src = t;
        l.parentNode.insertBefore(i, l)
    })(window, document, 'script', 'https://collector.retailcrm.pro/w.js', '_rc');

    _rc('create', 'RC-76095149248-26');

    _rc('send', 'pageView');*/

    var options = {
        form: 'form',
        url: '/order.php',
        phone: {
            el: 'input[name="phone"]',
            mask: '+7 (999) 999-99-99[9]',
        },
        fields: ['name', 'phone'],
        messages: {
            name: 'Введите Ваше имя!',
            phone: 'Введите Ваш номер телефона!',
            systemError: 'По техническим причинам заявка не может быть принята.\n' + 'Повторите попытку через некоторое время.\n' + 'Пожалуйста, свяжитесь с нами.',
            formThrottle: 'С Вашего компьютера поступило слишком много' + 'заявок за короткий промежуток времени.\n' + 'Пожалуйста, отправьте форму заново через некоторое время.',
            phoneAntiSpam: 'Мы уже приняли Ваш заказ. \n' + 'Пожалуйста, дождитесь звонка от нашего колл-центра.'
        }
    };
    options.cookieEnabled = checkCookie();
    options.utm = getUTM();
    if (options.cookieEnabled) {
        if (options.utm) {
            cookieMaster('set', 'utm', options.utm);
        } else {
            options.utm = cookieMaster('get', 'utm');
        }
    }
    applyPhoneMask(options.phone.el, options.phone.mask);
    $(options.form).submit(options, submitForm);
});

function getUTM() {
    var url = document.location.search;
    if ('' != url) {
        return getUrlVars(url);
    }
    return false;
}

function getUrlVars(url) {
    var hash;
    var json = {};
    var hashes = url.slice(url.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        json[hash[0]] = hash[1];
    }
    return json;
}

function cookieMaster(action, name, value) {
    try {
        var cookie = $.cookie(name);
        if ('get' == action && cookie) {
            return cookie;
        } else if ('set' == action) {
            if (cookie) {
                $.removeCookie(name);
            }
            $.cookie(name, JSON.stringify(value), {
                expires: 7,
                path: '../index.php'
            });
            return true;
        } else if ('remove' == action) {
            $.removeCookie(name);
            return true;
        }
    } catch (e) {
        console.error(e);
    }
    return false;
}

function checkCookie() {
    if (undefined != navigator.cookieEnabled) {
        return navigator.cookieEnabled;
    }
    return false;
}

function applyPhoneMask(input, mask) {
    if ($(input).inputmask != undefined) {
        $(input).inputmask(mask);
        return true;
    }
    console.error('phone-mask: no plugin');
    return false;
}

function submitForm(event) {
    event.preventDefault();
    var options = event.data;
    var result = requiredFields(this, options.fields);
    if (~result) { // result != -1
        errorMessage(options.messages[result]);
        return false;
    }
    var parameters = defineParameters(options.utm);
    var formValues = formatFormValues($(this).serializeArray());
    if (options.cookieEnabled && phoneAntiSpam(formValues['phone'])) {
        errorMessage(options.messages['phoneAntiSpam']);
        return false;
    }
    sendForm(this, options, $.extend(formValues, parameters));
}

function requiredFields(form, fields) {
    var input;
    for (var i = fields.length - 1; i >= 0; i--) {
        input = form[fields[i]];
        if (undefined === typeof input.value || '' == input.value) {
            return fields[i];
        }
    }
    return -1;
}

function errorMessage(msg) {
    if (undefined != msg && null != msg) {
        return alert(msg);
    }
    console.info('Function errorMessage() received an unknown parameter');
    return false;
}

function formatFormValues(formValuesArray) {
    var formValues = {};
    for (var i = formValuesArray.length - 1; i >= 0; i--) {
        formValues[formValuesArray[i].name] = formValuesArray[i].value;
    }
    return formValues;
}

function defineParameters(utm) {
    var parameters = {};
    if (utm) {
        parameters.utm = JSON.stringify(utm);
    }
    if (utm && undefined != utm['utm_source']) {
        parameters['utm_source'] = utm['utm_source'];
    }
    if (undefined != navigator.userAgent) {
        parameters.browser = navigator.userAgent;
    }
    parameters.utc = new Date().getTimezoneOffset() / 60 + 3;
    return parameters;
}

function phoneAntiSpam(phone) {
    var currentPhone = cookieMaster('get', 'phone');
    if (currentPhone && JSON.parse(currentPhone) == phone) {
        return true;
    }
    cookieMaster('set', 'phone', phone);
    return false;
}

function sendForm(form, options, formData) {
  /*  _rc('send', 'order', {
        'name': formData.name,
        'phone': formData.phone
    });*/
    $.ajax({
        type: 'POST',
        url: options.url,
        data: formData,
        beforeSend: function() {
            changeSubmitButton(form);
            splash('on', form);
        },
        complete: function(xhr, status) {
            try {
                var result = JSON.parse(xhr.responseText);
            } catch (e) {
                var result = xhr.responseText;
            }
            if ('success' == status) {
                $(form).trigger('reset');
                window.location.href = 'thankYou.html';
            } else if (undefined != result.msg) {
                errorMessage(options.messages[result.msg]);
                cookieMaster('remove', 'phone');
            }
            changeSubmitButton(form);
            splash('off', form);
        }
    });
}

function changeSubmitButton(form) {
    $(form).find('[type="submit"]').prop('disabled', function(i, prop) {
        return !prop;
    });
}

function splash(action, form) {
    var elem = '.splash';
    if ('on' == action) {
        $(elem).show();
    } else if ('off' == action) {
        $(elem).hide();
    }
    return false;
}