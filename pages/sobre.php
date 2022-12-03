<section class="sobre">
    <script>
        const asks = [
            {
                id: 1,
                title: "O que é a Netflix?",
                desc: "A Netflix é um serviço de streaming que oferece uma ampla variedade de séries, filmes e documentários premiados em milhares de aparelhos conectados à internet. <br>Você pode assistir a quantos filmes e séries quiser, quando e onde quiser – tudo por um preço mensal acessível. Aqui você sempre encontra novidades. A cada semana, adicionamos novas séries e filmes."
            },
            {
                id: 2,
                title: "Quanto custa a Netflix?",
                desc: "Assista à Netflix no seu celular, tablet, Smart TV, notebook ou aparelho de streaming por uma taxa mensal única. Os planos variam de R$18,90 a R$55,90 por mês. Sem contrato nem taxas extras."
            },
            {
                id: 3,
                title: "O que muda no plano Básico com anúncios?",
                desc: "O plano Básico com anúncios é uma excelente maneira de assistir a séries e filmes por um preço mais baixo. Você pode assistir a seus títulos favoritos em qualquer aparelho e com intervalos limitados para anúncios. Este plano não permite downloads nem contém determinados filmes e séries com restrições de licenciamento. Há também algumas restrições de localização e aparelho. Saiba mais."
            },
            {
                id: 4,
                title: "Onde posso assistir?",
                desc: "Assista onde quiser, quando quiser. Faça login com sua conta Netflix em netflix.com para começar a assistir no computador ou em qualquer aparelho conectado à Internet compatível com o aplicativo Netflix, como Smart TVs, smartphones, tablets, aparelhos de streaming e videogames. <br>Você também pode baixar a sua série favorita com o aplicativo Netflix para iOS, Android ou Windows 10. Use downloads para levar a Netflix para onde quiser sem precisar de conexão com a Internet. Leve a Netflix com você para qualquer lugar."
            },
            {
                id: 5,
                title: "Como faço para cancelar?",
                desc: "A Netflix é flexível. Não há contratos nem compromissos. Você pode cancelar a sua conta na internet com apenas dois cliques. Não há taxa de cancelamento – você pode começar ou encerrar a sua assinatura a qualquer momento."
            },
            {
                id: 6,
                title: "O que eu posso assistir na Netflix?",
                desc: "A Netflix tem um grande catálogo de filmes, documentários, séries, originais Netflix premiados e muito mais. Assista o quanto quiser, quando quiser."
            },
            {
                id: 7,
                title: "A Netflix é adequada para crianças?",
                desc: "A experiência infantil da Netflix faz parte da sua assinatura para que as crianças se divirtam em seu próprio espaço com séries e filmes familiares sob a supervisão dos responsáveis. <br>O recurso de controle parental, incluso nos perfis para crianças e protegido por PIN, permite restringir a classificação etária do conteúdo que as crianças podem ver e bloquear títulos específicos que você não quer que elas assistam."
            }
        ]
        
        window.addEventListener("DOMContentLoaded",()=>{
            const frequent = document.getElementById("frequent");
            
            asks.forEach((ask) => {
                
                const id = ask.id;
                const title = ask.title;
                const desc = ask.desc;

                const div = document.createElement("div")
                div.innerHTML = `
                    <div class="sobre-box" id="title${id}">
                        <label class="sobre-title">${title}<div id="dotEx${id}"></div></label>
                        <label class="sobre-desc" id="desc${id}" style="display:none">${desc}</label>
                    </div>
                `
                frequent.appendChild(div);

                document.getElementById(`title${id}`).addEventListener("click", () => {
                    asks.forEach((aks) => {
                        document.getElementById(`dotEx${aks.id}`).classList.remove("rotateZ");
                        document.getElementById(`desc${aks.id}`).style.display = "none";
                    })
                    document.getElementById(`dotEx${id}`).classList.add("rotateZ");
                    document.getElementById(`desc${id}`).style.display = "flex";
                })

            })

        })
        
    </script>
    <h1>Perguntas frequentes</h1>
    <div id="frequent">
        
    </div>
</section>