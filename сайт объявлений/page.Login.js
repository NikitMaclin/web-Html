(function (app) {
    app.PageLogin = {
        draw: function () {
            let content = document.querySelector (".content");
            //Вход
            let text = document.createElement("div");
            text.append (document.createTextNode("Вход"));
            text.classList.add ("formName");
            //Ввод Email
            let emailField = document.createElement ("input");
            emailField.classList.add("emailinput")
            //E-mail
            let email = document.createElement("div");
            email.append (document.createTextNode("E-mail"));
            email.classList.add ("Podpis");
            //Ввод пароля
            let paroleField = document.createElement ("input");
            paroleField.classList.add("paroleinput");
            //Пароль
            let passwords = document.createElement("div");
            passwords.append (document.createTextNode("Пароль"));
            passwords.classList.add ("Podpis");

            //Вход на сайт
            let vxodButton = document.createElement ("button");
            vxodButton.classList.add ("Button");
            vxodButton.append (document.createTextNode("Войти"));
            //Конопка регистрации
            let registerButton = document.createElement ("button");
            registerButton.classList.add ("ButtonReg");
            registerButton.append (document.createTextNode("Регистрация"));

            vxodButton.addEventListener ("click", goToHome);
            //Переход на страницу регистрации
            registerButton.addEventListener ("click", goToRegister);

            content.append(text, emailField, email, paroleField, passwords, vxodButton, registerButton);
        }
    }

    function goToHome () {
        document.querySelector(".content").innerHTML = "";
        app.homePage.draw ();
    }
    //Страница регистрации
    function goToRegister () {
        document.querySelector(".content").innerHTML = "";
        app.PageRegister.draw ();
    }
}) (AdsBoard);