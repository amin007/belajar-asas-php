$(function() {
    function onFailedLoad(tag) {
        tag.remove();
    }

    function loadBannerByUid(tag, uid) {
        $.post('/api/cta/find', {
            'uid': uid
        }).done(function(response) {
            tag.html(response);
        }).fail(function() {
            onFailedLoad(tag);
        })
    }

    function loadRandomBanner(tag, type) {
        $.post('/api/cta/random', {
            'url': window.location.href,
            'path': window.location.pathname,
            'type': type
        }).done(function(response) {
            tag.html(response);
        }).fail(function() {
            onFailedLoad(tag);
        })
    }

    function loadCustomBanner(tag) {
        var data = tag.find('[ref]');
        var body = {};
        data.each(function(i, el) {
            body[$(el).attr('ref')] = $(el).html();
            $(el).hide();
        });

        $.post('/api/cta/custom', body).done(function(response) {
            tag.html(response);
        }).fail(function() {
            onFailedLoad(tag);
        })
    }

    $('[data-cta]').each(function() {
        var tag = $(this);
        if(tag.is('[data-cta-uid]')) {
            var uid = tag.data('cta-uid');
            loadBannerByUid(tag, uid);
        } else if(tag.is('[data-cta-custom]')) {
            loadCustomBanner(tag);
        } else {
            var type = tag.data('cta');
            loadRandomBanner(tag, type);
        }
    });
});
