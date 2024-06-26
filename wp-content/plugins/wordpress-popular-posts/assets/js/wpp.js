var wpp_params = null;
var WordPressPopularPosts = (function(){

    "use strict";

    var noop = function(){};
    var supportsShadowDOMV1 = !! HTMLElement.prototype.attachShadow;

    var get = function( url, params, callback, additional_headers ){
        callback = ( 'function' === typeof callback ) ? callback : noop;
        ajax( "GET", url, params, callback, additional_headers );
    };

    var post = function( url, params, callback, additional_headers ){
        callback = ( 'function' === typeof callback ) ? callback : noop;
        ajax( "POST", url, params, callback, additional_headers );
    };

    var ajax = function( method, url, params, callback, additional_headers ){
        /* Create XMLHttpRequest object and set variables */
        var xhr = new XMLHttpRequest(),
            target = url,
            args = params,
            valid_methods = ["GET", "POST"],
            headers = {
                'X-Requested-With': 'XMLHttpRequest'
            };

        method = -1 != valid_methods.indexOf( method ) ? method : "GET";

        /* Set request headers */
        if ( 'POST' == method ) {
            headers['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        if ( 'object' == typeof additional_headers && Object.keys(additional_headers).length ) {
            headers = Object.assign({}, headers, additional_headers);
        }

        /* Set request method and target URL */
        xhr.open( method, target + ( 'GET' == method ? '?' + args : '' ), true );

        for (const key in headers) {
            if ( headers.hasOwnProperty(key) ) {
                xhr.setRequestHeader( key, headers[key] );
            }
        }

        /* Hook into onreadystatechange */
        xhr.onreadystatechange = function() {
            if ( 4 === xhr.readyState && 200 <= xhr.status && 300 > xhr.status ) {
                if ( 'function' === typeof callback ) {
                    callback.call( undefined, xhr.response );
                }
            }
        };

        /* Send request */
        xhr.send( ( 'POST' == method ? args : null ) );
    };

    var theme = function(wpp_list) {
        if ( supportsShadowDOMV1 ) {
            let base_styles = document.createElement('style'),
                dummy_list = document.createElement('ul');

            dummy_list.innerHTML = '<li><a href="#"></a></li>';
            wpp_list.parentNode.appendChild(dummy_list);

            let dummy_list_item_styles = getComputedStyle(dummy_list.querySelector('li')),
                dummy_link_item_styles = getComputedStyle(dummy_list.querySelector('li a'));

            base_styles.innerHTML = '.wpp-list li {font-size: '+ dummy_list_item_styles.fontSize +'}';
            base_styles.innerHTML += '.wpp-list li a {color: '+ dummy_link_item_styles.color +'}';

            wpp_list.parentNode.removeChild(dummy_list);

            let wpp_list_sr = wpp_list.attachShadow({mode: "open"});

            wpp_list_sr.append(base_styles);

            while(wpp_list.firstElementChild) {
                wpp_list_sr.append(wpp_list.firstElementChild);
            }
        }
    };

    return {
        get: get,
        post: post,
        ajax: ajax,
        theme: theme
    };

})();

(function(){
    try {
        var wpp_json = document.querySelector("script#wpp-json"),
            do_request = true;

        wpp_params = JSON.parse(wpp_json.textContent);

        if ( wpp_params.ID ) {
            if ( '1' == wpp_params.sampling_active ) {
                var num = Math.floor(Math.random() * wpp_params.sampling_rate) + 1;
                do_request = ( 1 === num );
            }

            if ( do_request ) {
                WordPressPopularPosts.post(
                    wpp_params.ajax_url,
                    "_wpnonce=" + wpp_params.token + "&wpp_id=" + wpp_params.ID + "&sampling=" + wpp_params.sampling_active + "&sampling_rate=" + wpp_params.sampling_rate,
                    function( response ) {
                        wpp_params.debug&&window.console&&window.console.log&&window.console.log(JSON.parse(response));
                    }
                );
            }
        }
    } catch (err) {
        console.error("WPP: Couldn't read JSON data");
    }
})();

document.addEventListener('DOMContentLoaded', function() {
    var widget_placeholders = document.querySelectorAll('.wpp-widget-placeholder, .wpp-widget-block-placeholder, .wpp-shortcode-placeholder'),
        w = 0;

    while ( w < widget_placeholders.length ) {
        fetchWidget(widget_placeholders[w]);
        w++;
    }

    var sr = document.querySelectorAll('.popular-posts-sr');

    if ( sr.length ) {
        for( var s = 0; s < sr.length; s++ ) {
            WordPressPopularPosts.theme(sr[s]);
        }
    }

    function fetchWidget(widget_placeholder) {
        let widget_id_attr = widget_placeholder.getAttribute('data-widget-id'),
            method = 'GET',
            url = '',
            headers = {
                'X-WP-Nonce': wpp_params.token
            },
            params = '';

        if ( widget_id_attr ) {
            url = wpp_params.ajax_url + '/widget/' + widget_id_attr.split('-')[1];
            params = 'is_single=' + wpp_params.ID + ( wpp_params.lang ? '&lang=' + wpp_params.lang : '' );
        } else {
            method = 'POST';
            url = wpp_params.api_url + '/v2/widget?is_single=' + wpp_params.ID + ( wpp_params.lang ? '&lang=' + wpp_params.lang : '' );
            headers['Content-Type'] = 'application/json';

            let json_tag = widget_placeholder.parentNode.querySelector('script[type="application/json"]');

            if ( json_tag ) {
                let args = JSON.parse(json_tag.textContent.replace(/[\n\r]/g,''));
                params = JSON.stringify(args);
            }
        }

        WordPressPopularPosts.ajax(
            method,
            url,
            params,
            function(response) {
                renderWidget(response, widget_placeholder);
            },
            headers
        );
    }

    function renderWidget(response, widget_placeholder) {
        widget_placeholder.insertAdjacentHTML('afterend', JSON.parse(response).widget);

        let parent = widget_placeholder.parentNode,
            sr = parent.querySelector('.popular-posts-sr'),
            json_tag = parent.querySelector('script[type="application/json"]');

        if ( json_tag )
            parent.removeChild(json_tag);

        parent.removeChild(widget_placeholder);
        parent.classList.add('wpp-ajax');

        if ( sr ) {
            WordPressPopularPosts.theme(sr);
        }

        let event = new Event("wpp-onload", {"bubbles": true, "cancelable": false});
        parent.dispatchEvent(event);
    }
});
