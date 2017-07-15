<?php
?>

<h1>Ajouter un évenement</h1>

<form method="POST" action="../controler/event.php">
    <fieldset class="fieldsetSign">
        <p>
        <label for='nameEvent'>Ajouter un nom</label>
        <input type='text' id='nameEvent' name='nameEvent' placeholder="Soirée Moule Frites">
        </p>
        <p>
        <label for='namelieu'>Ajoutez un lieu</label>
        <input type='text' id='namelieu' name='namelieu' placeholder="Vénissieux">
        </p>    
        <p>
        <label for='namedate'>Ajouter une date</label>
        <input type='text' id='namedate' name='namedate' placeholder="10/07/17">
        </p>
        <p>
        <label for='numberPersonne'>Nombre de personne inviter</label>
        <input type='text' id='numberPersonne' name='numberPersonne' placeholder="5">
        </p>
        <p>
        <label for='addPrice'>Ajouter un prix</label>
        <input type='text' id='addPrice' name='addPrice' placeholder="15€">
        </p>
        <input type="submit" name="inscription" value="inscription">
    </fieldset>
</form>

