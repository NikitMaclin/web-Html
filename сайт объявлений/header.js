(function (app) {
    app.Header = {
        draw: function () {
            document.querySelector(".header")
                .append(document.createTextNode("Объявления.ru"))
            ;
        }
    };
}) (AdsBoard);