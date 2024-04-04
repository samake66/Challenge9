

<form action="thanks.php" method="post">
    <div>
      <label for="name">Prénom :</label>
      <input type="text"  id="prenom"  name="prenom" >
    </div>
    <div>
      <label for="name">Nom :</label>
      <input type="text"  id="nom"  name="nom" >
    </div>
    <div>
      <label  for="email">Mail :</label>
        <input  type="email"  id="mail"  name="mail" >
    </div>
    <div>
        <label for="phone">Entrer votre numero:</label>
        <input type="tel" id="tel" name="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
    </div>
    <div>
        <label for="sujet">Choisissez un sujet:</label>
        <select id="sujet" name="sujet">
            <option value="inscription">inscription</option>
            <option value="formation">formation</option>
            <option value="payement">payement</option>
            <option value="a propos de nous">a propos de nous</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
</form>

