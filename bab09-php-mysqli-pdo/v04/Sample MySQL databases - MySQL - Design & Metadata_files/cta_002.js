$(function() {

    function getQueryParam(url, name) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);

        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    function setQueryParam(url, key, value) {
        // remove the hash part before operating on the url
        var i = url.indexOf('#');
        var hash = i === -1 ? ''  : url.substr(i);
        url = i === -1 ? url : url.substr(0, i);

        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = url.indexOf('?') !== -1 ? "&" : "?";
        if (url.match(re)) {
            url = url.replace(re, '$1' + key + "=" + value + '$2');
        } else {
            url = url + separator + key + "=" + value;
        }

        return url + hash; // finally append the hash as well
    }

    /**
     * Add/update "cta_link_text" query param to current link text
     * for each link which already contains the "cta" query param.
     */
    function linkClicked(e) {
        var link = $(this);
        var url = link.attr('href');
        var cta = getQueryParam(url, 'cta');

        if(cta !== null) {
            e.preventDefault();
            url = setQueryParam(url, 'cta_link_text', link.text().trim());
            window.location = url;
        }
    }

    $(document).on('click', 'a', linkClicked);

});
