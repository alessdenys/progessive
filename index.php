<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Mon portfolio</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-3">
                <h1 class="titre">Mon portfolio</h1>
            </div>
        </div>
    </div>
    <div class="containeur">
        <div class="row">
            <div class="col">
                <h2 class="sous-titre">présentation:</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>
                    Etudiant à Becode et arrivant en fin de formation, je me mets à la recherche de stage dans le but d'approfondire mon expérience dans le monde du développement web et du code en général. 
                </p>
                <p>
                    Je suis jeune et enthousiaste à l'idée d'en apprendre plus, je suis une personne loyale qui préfère travailler pour une entreprise plus modeste mais que j'estime plutôt que pour une offrant un meilleur salaire ou de meilleurs avantages mais ayant des valeurs contraire aux miennes.
                </p>
                <p>
                    J'ai déja été introduit à divers langages et frameworks tels que : html ; css ; javascript ; wordpress ; tailwind ; bootstrap.. <br>
                    ainsi qu'a l'utilisation de divers outils notamment git et github.
                </p>
            </div>
        </div>
<!--mes réalisations  -->
        <div class="row">
            <div col>
            <h2 class="sous-titre">. mes réalisations:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
               <B><p>
                    dans cette section, je vais vous présentez trois projets que j'ai réalisé seul, vous pourrez en retrouver d'autres sur <a href="https://github.com/alessdenys?tab=repositories">mon github</a> toutefois, sachez que certains ont été réalisé en groupe. 
                </p></B>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                dans ce projet, il m'a été demander de reproduire l'effet de défilement de l'intro <a href="https://alessdenys.github.io/star-wars-crawl/">star-wars</a>
            </div>
            <div class="col text-center">
                <img src="str-wrs02.png" alt="star-wars crawl">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                dans celui-ci, la consigne était de reproduire à l'identique <a href="https://alessdenys.github.io/tim-berners-lee/">un site donné</a>
            </div>
            <div class="col text-center">
                <img src="tim.png" alt="site sur Tim-Berner Lee">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                et enfin, la création d'une <a href="https://alessdenys.github.io/Vcard/">Vcard</a>
            </div>
            <div class="col text-center">
                <img src="vcard.png" alt="aperçu de ma vcard">
            </div>
        </div>
    </div>
<!-- contact -->
    <div class="containeur">
        <div class="row">
            <div class="col">
                <h2 class="sous-titre">comment me contacter:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
               <B><p>vous pouvez me contact via les moyens suivant: </p></B>
               <ul>
                   <li>mon numéro de téléphone: 0486/36.52.30</li>
                   <li>mon adresse mail: alessandro.denys1999@gmail.com</li>
                   <li>via le formulaire ci-dessous</li>
               </ul>
            </div>
        </div>
    </div>
<!-- formulaire -->

    <section class="row justify-content-center">
<div class="col-lg-3">
<form method="post" action="check.php">

<div class="form-group">
<label for="nickname"><abbr title="Ce champ est obligatoire"></abbr></label>
<input type="hidden" id="nickname" name="nickname">
</div>

<div class="form-group">
<label for="name">Nom<abbr title="Ce champ est obligatoire">*</abbr></label>
<input type="text" id="name" name="name" required name="title" class="form-control" placeholder="votre nom">
</div>
<div class="form-group">
<label for="surname">Prénom<abbr title="Ce champ est obligatoire">*</abbr></label>
<input type="text" id="surname" name="surname" required name="title" class="form-control" placeholder="votre prénom">
</div>
<fieldset>
      <legend>Vous êtes<abbr title="Ce champ est obligatoire">*</abbr></legend>
      <input type="radio" required name="title" id="r1" value="Mr"><label for="r1">M.</label>
      <input type="radio" required name="title" id="r2" value="Ms"><label for="r2">Mme.</label>
      <input type="radio" required name="title" id="r3" value="Mrs"><label for="r3">autre.</label>
</fieldset>
<div class="form-group" class="form-control">
<label for="email">Email</label>
<input type="text" id="email" name="email" required placeholder="votre email">
</div>
 
<div class="form-group">
<label for="message">Votre Message<abbr title="Ce champ est obligatoire">*</abbr></label>
<textarea class="form-control" required placeholder="votre message" id="message" name="message" maxlength="140" rows="5"></textarea>
</div>
<button type="submit" class="btn btn-default"><img class="sendbutton" src="sendicon.png" alt="bouton"></button>
</form>
</div>
</section>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>