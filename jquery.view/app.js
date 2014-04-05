var $app = $('#app');

var $view = (function() {

    var $el = $('<a href="#">');
    $el.html('click here');

    var eventFunc = function(e, data) {
        e.preventDefault();
        console.log(e.data.message);
    };

    $el.on.call($(this), 'click', {message: 'ok'}, eventFunc);

    return $el;

})();

$app.append($view);
