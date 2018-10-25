$.get('hbs/template.hbs', function(data) {
    var source = data
    var template = Handlebars.compile(source)
    var items =
        {
            "buttons": [
                {
                    "button": "HOME",
                    "href": "index.php"
                },
                {
                    "button": "RÉSUMÉ",
                    "href": "index.php"
                },
                {
                    "button": "ABOUT ME",
                    "href": "index.php"
                },
                {
                    "button": "PORTFOLIO",
                    "href": "index.php"
                },
                {
                    "button": "GET IN TOUCH",
                    "href": "index.php"
                }
            ]
        }
    var html = template(items)
    $('.buttons').append(html)

})