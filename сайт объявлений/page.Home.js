(function (app) {
    app.homePage = {
        draw: function () {
            let content = document.querySelector (".content");
            //Вход
            let text = document.createElement("div");
            text.append (document.createTextNode("Вы успешно зарегистрировались на сайте объявлений"));
            text.classList.add ("formName");

            let vxodButton = document.createElement ("button");
            vxodButton.classList.add ("ButtonReg");
            vxodButton.append (document.createTextNode("Выйти из профиля"));

            vxodButton.addEventListener ("click", goToVxod);

            content.append(text, vxodButton);
        }
    }
    function goToVxod () {
        document.querySelector(".content").innerHTML = "";
        app.PageLogin.draw ();
    }
}) (AdsBoard);