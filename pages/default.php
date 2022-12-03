<section class="default">
    <script>
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

        setTimeout(() => {
            animateText()
            setInterval(() => {
                animateText()
            }, 2500);
        }, 500);
        
    </script>
    <span>
        <label onclick="sscroll()" id="phase">
        </label>
    </span>
</section>
<section class="default-2">
    <script>
        
    </script>
    <div class="default-2-text">
        <h2>Aproveite na TV.</h2>
        <label>Assista em Smart TVs, PlayStation, Xbox,<br> Chromecast, Apple TV, aparelhos de Blu-ray e<br> outros dispositivos.</label>
    </div>
    <div class="default-2-image">
        <div class="default-2-image-tv"></div>
    </div>
</section>