(function (app) {
    app.PageRegister = {
        draw: function () {
            let content = document.querySelector (".content");
            //Вход
            let text = document.createElement("div");
            text.append (document.createTextNode("Регистрация"));
            text.classList.add ("formReg");
            // Ввод Email
            let emailField = document.createElement ("input");
            emailField.classList.add("emailinput");
            // E-mail
            let email = document.createElement("div");
            email.append (document.createTextNode("E-mail"));
            email.classList.add ("Podpis");
            // Ввод Email
            let PhoneField = document.createElement ("input");
            PhoneField.classList.add("paroleinput");
            //Телефон
            let phone = document.createElement("div");
            phone.append (document.createTextNode("Телефон"));
            phone.classList.add ("Podpis");
            //Ввод пароля
            let paroleField = document.createElement ("input");
            paroleField.classList.add("paroleinput");
            //Пароль
            let passwords = document.createElement("div");
            passwords.append (document.createTextNode("Пароль"));
            passwords.classList.add ("Podpis");
            //Ввод подтвержедния пароля
            let confirm = document.createElement ("input");
            confirm.classList.add("paroleinput");
            //Подтверждение пароля
            let parolconfirm = document.createElement("div");
            parolconfirm.append (document.createTextNode("Подтверждение пароля"));
            parolconfirm.classList.add ("Podpis");
            //Конопка регистрации
            let registerButton = document.createElement ("button");
            registerButton.classList.add ("Button");
            registerButton.append (document.createTextNode("Зарегистрироваться"));
            // //Переход на главную страницу после регистрации 
            // registerButton.addEventListener ("click", goToHome);
            //Вход на сайт
            let vxodButton = document.createElement ("button");
            vxodButton.classList.add ("ButtonReg");
            vxodButton.append (document.createTextNode("Войти"));
            //Переход на главную страницу после регистрации 
            registerButton.addEventListener ("click", goToHome);
            //Переход на страницу регистрации
            vxodButton.addEventListener ("click", goToVxod);

            content.append(text, emailField, email, PhoneField, phone, 
                paroleField, passwords, confirm, parolconfirm, registerButton, vxodButton);
        
        }
    }

        function goToHome () {
            document.querySelector(".content").innerHTML = "";
            app.homePage.draw ();
        }
        //Страница регистрации
        function goToVxod () {
            document.querySelector(".content").innerHTML = "";
            app.PageLogin.draw ();
        }
}) (AdsBoard);