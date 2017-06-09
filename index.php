<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <title></title>
  </head>
  <body>
    <header class="row">
      <div class="col m1 logo"><img src="fonts/power.png" style="width: 100%;" alt=""></div>
      <div class="col m11 title">error 404</div>
    </header>
    <div class="row menu grey darken-4">
      <div class="col m1 offset-m5 waves-effect waves-light">Accueil</div>
      <div class="col m1 waves-effect waves-light">Categories</div>
      <div class="col m2 waves-effect waves-light">Publications Officielles</div>
      <div class="col m1 waves-effect waves-light btnConn">Connexion</div>
      <div class="col m1 waves-effect waves-light btnInsc">Inscription</div>
      <div class="col m1 waves-effect waves-light">About</div>
    </div>

    <div class="row">
      <div class="zone inscription col m8 l6 offset-m2 offset-l3" style="display: none;">
        <div class="col m12 titlearea grey darken-3">Inscription</div>
        <form class="inscForm col m12">
          <div class="input-field col m6">
            <input type="text" class="nom">
            <label for="nom">Nom</label>
          </div>
          <div class="input-field col m6">
            <input type="text" class="prenom">
            <label for="prenom">Prenom</label>
          </div>
          <div class="input-field col m8">
            <input type="text" class="uname">
            <label for="uname">Nom d'utilisateur / Identifiant</label>
          </div>
          <div class="col m4">
            <font class="pseudoOk" style="color: green; display: none;">Pseudo disponible</font>
            <font class="pseudoBad" style="color: red; display: none;">Pseudo indisponible</font>
          </div>
          <div class="input-field col m12">
            <input type="password" class="pass">
            <label for="pass">Mot de passe</label>
          </div>
          <div class="input-field col m12">
            <input type="password" class="confpass">
            <label for="confpass">Confirmer le mot de passe</label>
          </div>
          <div class="input-field col m6">
            <input type="email" class="mail">
            <label for="mail">Mail (ex : mail@smth.com )</label>
          </div>
          <div class="input-field col m6">
            <input type="text" class="contact">
            <label for="contact">Telephone (ex : 72 45 78 96 )</label>
          </div>
          <div class="col m12 inscErr">Une erreur est survenue (Verifiez vos informations)</div>
          <div class="col m12">
            <button type="submit" class="btn waves-effect waves-light grey darken-4">Inscription</button>
            <button type="reset" class="btn waves-effect waves-light pink darken-4">Effacer</button>
          </div>
        </form>
      </div>
      <div class="zone connexion col m6 l4 offset-m3 offset-l4" style="display: none;">
        <div class="col m12 titlearea grey darken-3">Connexion</div>
        <form class="connForm col m12">
          <div class="col m12 input-field">
            <input type="text" class="userName" />
            <label for="userName">Nom d'utilisateur</label>
          </div>
          <div class="col m12 input-field">
            <input type="password" class="userPass" />
            <label for="userPass">Nom d'utilisateur</label>
          </div>
          <div class="col m12 connErr">Informations incorrectes</div>
          <div class="col m12">
            <center><button type="submit" class="btn waves-effect waves-light grey darken-4">Connexion</button></center>
          </div>
        </form>
      </div>
    </div>
    <footer></footer>

    <script type="text/javascript" src="js/home.js"></script>
  </body>
</html>
