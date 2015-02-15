<?php
$page_id = 'cadeaubonnen';
?>

<?php
include ('template/header.tpl');
include ('template/top.tpl');
include ('template/sideleft.tpl');
include ('includes/arrays.php')
?>



<div class="center_body">
            	<div class="title">
                	<h2>
                		Cadeaubonnen
                    </h2>
                </div>
                <div class="text">
<?php


if (empty($_GET['mode']))
	{
		$mode = "";
	}
else
	{
		$mode = $_GET['mode'] ;	
	}
switch($mode){

default:
?>
            	Bij Schoonheidssalon Bij Suus is het ook mogelijk om cadeaubonnen te bestellen.<br />
                Dit is natuurlijk leuk om cadeau te geven bij een verjaardag, jubileum of gewoon zomaar als verassing.<br />
                De cadeaubonnen zijn er als volgt:<br />
                <ul>
                	<li> Behandelingsbonnen
               			<ul>
                			<?php
								$result = count($behandeling_bon);
								for ($i=0;$i<$result;$i++)
								{
									echo "<li type='circle'>$behandeling_bon[$i]</li> \n";
								}
							?>
                		</ul>
                    </li>
                   	<li> Waarde bonnen 
                		<ul>
                			<?php
								$result = count($waarde_bon);
								for ($i=0;$i<$result;$i++)
								{
									echo "<li type='circle'>$waarde_bon[$i]</li> \n";
								}
							?>
                		</ul>
                    </li>
                 </ul>
                Deze cadeaubonnen zijn inwisselbaar tegen een behandeling bij Schoonheidssalon Bij Suus.<br />
                <br />
 				<a href="cadeaubonnen.php?mode=bestellen" class="">Bestellen van cadeaubonnen</a>
<?php
break;
case 'bestellen':
?>

<?php
include ('includes/bestel_script.php');
?>

<fieldset>
Velden met een * zijn verplichte velden.<br />
<br />
	<fieldset><legend>Uw gegevens</legend>
		<input type="hidden"  name="nummer" value="<?php echo"$regc"?>" />
		<div class="split_left">
			Naam:
		</div>
		<div class="split_right">
			<input size="28"type="text" name="1naam" class="contact" /> *
		</div>
    	<div class="split_left">
			Adres:
		</div>
		<div class="split_right">
			<input size="28"type="text" name="1adres" class="contact" /> *
		</div>
    	<div class="split_left">
			Postcode:
		</div>
		<div class="split_right">
			<input size="28"type="text" name="1postcode" class="contact" /> *
		</div>
   		<div class="split_left">
			Woonplaats:
		</div>
		<div class="split_right">
			<input size="28"type="text" name="1woonplaats" class="contact" /> *
		</div>
    	<div class="split_left">
			Telefoonnummer:
		</div>
		<div class="split_right">
			<input size="28"type="text" name="telefoonnummer" class="contact" />
		</div>
    	<div class="split_left">
			Email:
		</div>
		<div class="split_right">
			<input size="28"type="text" name="1email" class="contact" /> *
		</div>
    	<div class="split_left">
    		Cadeaubon :
    	</div>
    	<div class="split_right">
    		<select class="contact" name="1cadeaubon">
            	<option>&nbsp;</option>
        			<optgroup label="Behandelings bon">
                    	<?php
							$result = count($behandeling_bon);
							for ($i=0;$i<$result;$i++)
							{
								echo "<option value='$behandeling_bon[$i]'>$behandeling_bon[$i]</option> \n";
							}
						?>
               		</optgroup>
                    <optgroup label="Waarde bon">
        				<?php
							$result = count($waarde_bon);
							for ($i=0;$i<$result;$i++)
							{
								echo "<option value='$waarde_bon[$i]'>$waarde_bon[$i]</option> \n";
							}
						?>
               		</optgroup>
        	</select> *
    	</div>
    </fieldset>
    <br />
    <fieldset><legend>De cadeaubon is bedoeld voor</legend>
    	<div class="split_left">
			Naam:
		</div>
		<div class="split_right">
			<input size="30"type="text" name="ontvangernaam" class="contact" />
		</div>
    	<div class="split_left">
			Adres:
		</div>
		<div class="split_right">
			<input size="30"type="text" name="ontvangeradres" class="contact" />
		</div>
    	<div class="split_left">
			Postcode:
		</div>
		<div class="split_right">
			<input size="30"type="text" name="ontvangerpostcode" class="contact" />
		</div>
   		<div class="split_left">
			Woonplaats:
		</div>
		<div class="split_right">
			<input size="30"type="text" name="ontvangerwoonplaats" class="contact" />
		</div>
        <div class="split_right">
        <input name="direct" type="checkbox" value="Direct versturen naar ontvanger." />&nbsp;Graag rechtstreeks versturen naar de ontvanger.
        </div>
    </fieldset>
    <fieldset><legend>Tekst Toevoegen.</legend>
    	<i>
        <br />
    	U heeft ook de mogelijkheid om een stukje tekst op de cadeaubon te plaatsen.
        <br />
        Deze tekst mag uit maximaal 150 karakters bestaan (dit betekent dus alle letters, cijfers, spaties en tekens).
        <br />
        <br />
        U kunt hieronder de tekst invullen welke u eventueel zou willen zien op de cadeaubon. 
        <br />
        <br />
        </i>
        <textarea rows="4" cols="30" name="tekst" >	</textarea>
		<br />
		(Maximaal aantal karakters: 150)<br />
		
    
    </fieldset>
    <br />
    <div class="split_left">
    	<input type="reset" value="Herstel" class="button" />
    </div>
    <div class="split_right">
    	<input id="Submit" type="submit" value="Verstuur" class="button"/>
    </div>
    <br />
</fieldset>



<?php
break;
case 'betaling':
?>
<fieldset>
Beste meneer/mevrouw.
<br />
<br />
Hartelijk dank voor uw bestelling.<br />
<br />
U heeft per email een bevestiging ontvangen van uw bestelling.<br />
Tevens staat in deze email een uitleg over de betaalwijze.<br />
<br />
<br />
Na ontvangst van uw betaling zal de cadeaubon worden verstuurd.<br />
<br />
Met vriendelijke groet,<br />
<br />
Schoonheidssalon Bij Suus
</fieldset>


 <?php
    break;
   
}//end the switch
?>
            	</div>
            </div>

<?php
include ('template/sideright.tpl');
include ('template/footer.tpl');
?>