<section class="default">
    <script>

        const array = [
            {
                title: "Aproveite na TV.",
                desc: "Assista em Smart TVs, PlayStation, Xbox,<br> Chromecast, Apple TV, aparelhos de Blu-ray e<br> outros dispositivos.",
                image: "tv"
            },
            {
                title: "Crie perfis para crianças.",
                desc: "Deixe as crianças se aventurarem com seus <br>personagens favoritos em um espaço feito só <br>para elas, sem pagar a mais por isso.",
                image: "child"
            },
            {
                title: "Baixe séries para assistir offline.",
                desc: "Disponível em todos os planos, exceto no Básico com anúncios.",
                image: "st"
            },
        ]

        function sscroll(){
            window.scrollTo(0, document.body.scrollHeight);
        }

        const text = "Assista o que quiser, onde quiser.";
        
        function animateText(){
            const phrase = document.getElementById("phase");
            phrase.innerHTML="";

            for(let i=0; i<text.length; i++){
                setTimeout(() => {
                    phrase.innerHTML+=text[i];
                }, 50 * i);
            }
        }

        function replaceCard(){
            const card = document.getElementById("card");
            const arr = array[Math.floor(Math.random()*array.length)];
            card.innerHTML=`
                <div class="default-2-text">
                    <h2>${arr.title}</h2>
                    <label>${arr.desc}</label>
                </div>
                <div class="default-2-image">
                    <div class="default-2-image-${arr.image}"></div>
                </div>
            `
        }

        setTimeout(() => {
            animateText()
            setInterval(() => {
                animateText();
                replaceCard();
            }, 2500);
        }, 500);
        
    </script>
    <span>
        <label onclick="sscroll()" id="phase">
        </label>
    </span>
</section>
<section class="default-2" id="card">
    <div class="default-2-text">
        <h2>Aproveite na TV.</h2>
        <label>Assista em Smart TVs, PlayStation, Xbox,<br> Chromecast, Apple TV, aparelhos de Blu-ray e<br> outros dispositivos.</label>
    </div>
    <div class="default-2-image">
        <div class="default-2-image-tv"></div>
    </div>
</section>