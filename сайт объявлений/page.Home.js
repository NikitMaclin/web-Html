
(function (app) {
    app.homePage = {
        draw: function () {
            createUSERS ();
        }
    }

    async function createUSERS () {
        let response = await fetch ("ADS_board.php");
        let users    = await response.json();

        for (var key in users) {
            let user = users [key];
            USER (user.photo, user.Phone, user.ad_text, user.cost, user.Names,)
        }
    }

    function USER (photos, phones, textovik, coins, imyas) {
        let oknoOsnova = document.createElement ("div");
        let oknoPhoto = document.createElement ("div");
            let photo = document.createElement ("div");
            photo.append (document.createTextNode (photos));
            photo.classList.add ("photo", "fon");
            let phone = document.createElement ("button");
            phone.append (document.createTextNode (phones));
            phone.classList.add ("phone", "fon");
        oknoPhoto.append (photo, phone);
        oknoPhoto.classList.add ("oknoPhoto", "fon2");

        let textimya = document.createElement ("div");
                let text = document.createElement ("div");
                        let textov = document.createElement ("div");
                        textov.append (document.createTextNode (textovik));
                        textov.classList.add ("textov", "fon", "fon3");
                        let coin = document.createElement ("div");
                        coin.append (document.createTextNode (coins));
                        coin.classList.add ("coin", "coinAV", "fon", "fon2");
                    text.append (textov, coin);
                    text.classList.add ("text", "oknoOsnova");
                
                let imya = document.createElement ("div");
                imya.append (document.createTextNode (imyas));
                imya.classList.add ("imya", "imyaAV", "fon");
            textimya.append (text, imya);
            textimya.classList.add ("textimya", "fon3", "fon4");
        oknoOsnova.append (oknoPhoto, textimya);
        oknoOsnova.classList.add ("oknoOsnova");

        document.querySelector (".content").append (oknoOsnova);
    }

    // function uploed() {
    //     let data = new FormData();
    //     data.append("image", document.querySelector("#oknoPhoto").files[0]);

    //     fetch ("photo.php", {
    //         method: "POST", 
    //         body: data
    //     });
    // }
}) (AdsBoard);