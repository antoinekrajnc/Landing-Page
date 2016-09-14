<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Votre site pour 100euros</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="main-nav">
      <ul class="nav">
        <li class="name"><a href=https://www.linkedin.com/in/antoinekrajnc target='_blank'>Antoine Krajnc</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#linkedin">Follow</a></li>
      </ul>
    </div>
    <header>
      <h1 class="title">Un site internet pour 100€ ?</h1>
      <a href="#contact"><div class="CTA">Ca me plairait bien</div></a>
      <img class="arrow" src="IMG/arrow.png" alt="">
    </header>

    <div class="group">
      <h1 class="group-title" id="about">Alors on fait votre site?</h1>
      <h2 class="presentation">Hello, je me présente, je m'appelle Antoine. Je suis étudiant et j'ai appris à coder de moi-même il y a peu. J'aimerais maintenant pratiquer plus et donc je me suis dit, pourquoi proposer mes services à qui en a besoin! </h2>
       <div class="profil">
            <h1>Ma formation</h1>
          <ul>
            <li>Je maitrise HTML, CSS et je continue ma formation en PHP</li>
            <li>J'ai appris à coder de moi-même sur Teamtreehouse.com</li>
            <li>Checkez <a href= "http://referrals.trhou.se/antoinekrajnc">ici</a> si vous voulez voir de plus près             </li>
            <li>Ce site est le premier que je publie</li>
          </ul>

      </div>
      <div class="pricing">
        <h1>Vous voulez un site internet?</h1>
        <ul>
           <li>J'ai besoin de pratiquer mon code, je vous propose donc votre site pour 100€</li>
           <li>Comme dans les grandes surfaces, si vous trouvez moins cher ailleurs je vous rembourse la difference</li>
           <li>N'hésitez pas à m'envoyez un message plus si vous avez plus de questions!</li>
        </ul>
      </div>
        <div class="process">
        <h1>Comment on procède?</h1>
        <ul>
          <li>Vous pouvez me donner votre design et je vous le code</li>
          <li>Je peux vous aider sur le design de votre site</li>
          <li>Je sais aussi utiliser Photoshop, Premiere, Illustrator pour vous aider</li>
        </ul>
      </div>
    </div>
    <div class="contact" id="contact">
      <h1>Contact</h1>
      <p>Si vous souhaitez avoir plus d'informations, n'hésitez pas à m'écrire</p>
      <form action="/merci.html" method="post">
          <div>
            <label for=nom>Nom</label>
            <input type="text" name="nom_utilisateur">
          </div>
          <div>
            <label>Email</label>
            <input type="email" name="email_utilisateur">
          </div>
          <div>
            <label>Message</label>
            <textarea name="message_utilisateur"></textarea>
          </div>
      <div class="button">
        <input type="submit" value="Envoyer">
      </div>
      </form>
    </div>
    <div class="linkedin" id="linkedin">
      <h1>LinkedIn</h1>
      <p>Ou si vous preférez, contactez moi via mon profil LinkedIn</p>
      <a href=https://www.linkedin.com/in/antoinekrajnc target="blank"><img src="img/linkedin_icon.png" alt="Cliquez ici"></a>
    </div>
    <footer>
      <p>©Antoine Krajnc 2016</p>
    </footer>
 </body>
</html>
