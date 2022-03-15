<section>
    <div class="row">
        <p>Après avoir donné votre humeur, il est temps de vous exprimer d'une façon plus détaillée. Il se peut que vous avez quelque chose
            que vous aimeriez partager avec les autres: une idée, un conseil ou bien juste quelque chose qui vous tient à coeur. </p>
    </div>
    <div class="wrapper">
        <h2>BOX DE SUGGESTION</h2>
        <textarea spellcheck="false" placeholder="Votre texte ici..." required></textarea>

        <button class="valider" type="submit">Valider</button>
    </div>
</section>

<script>
    const textarea = document.querySelector("textarea");
    textarea.addEventListener("keyup", e => {
        textarea.style.height = "63px";
        let scHeight = e.target.scrollHeight;
        textarea.style.height = `${scHeight}px`;
    });
</script>