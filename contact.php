<?php
$page_id = 'contact';
?>

<?php
include ('template/header.tpl');
include ('template/top.tpl');
include ('template/sideleft.tpl');
?>

<div class="center_body">
            	<div class="title">
                	<h2>
                		Contact
                    </h2>
                </div>
                <div class="text">
<?php
$mode = $_GET['mode'];
switch($mode){

default:
?>
	<center>
   <img src="images/adresfull.png" width="450" height="300" alt="" class="" />
   </center>
   <br />
    <a href="contact.php?mode=route" class="">Kijk hier voor de route</a>
   <br />
   <br />
    <a href="contact.php?mode=form" class="">Via het contactformulier kunt u rechtstreeks contact opnemen.</a>
   <br />

<?php
break;
case 'route':
?>               
                
 				<iframe width="470" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.nl/maps?f=q&amp;source=s_q&amp;hl=nl&amp;geocode=&amp;q=goudplevier+15+waspik&amp;sll=52.368892,5.515137&amp;sspn=3.233539,9.645996&amp;ie=UTF8&amp;hq=&amp;hnear=Goudplevier+15,+5165+Waspik,+Waalwijk,+Noord-Brabant&amp;ll=51.683373,4.948139&amp;spn=0.004656,0.00912&amp;z=16&amp;output=embed"></iframe><br /><small>
                <a href="http://maps.google.nl/maps?f=q&amp;source=embed&amp;hl=nl&amp;geocode=&amp;q=goudplevier+15+waspik&amp;sll=52.368892,5.515137&amp;sspn=3.233539,9.645996&amp;ie=UTF8&amp;hq=&amp;hnear=Goudplevier+15,+5165+Waspik,+Waalwijk,+Noord-Brabant&amp;ll=51.683373,4.948139&amp;spn=0.004656,0.00912&amp;z=16" style="color:#70567c;text-align:left">Grotere kaart weergeven</a></small>

<?php
break;
case 'form':
?>	
<?php
include ('includes/contact_script.php');
?>
<fieldset><legend>Contact Formulier</legend>
	<div>
    	Alle velden dienen ingevuld te worden.
    </div>
	<input type="hidden"  name="Verzoeknummer" value="<?php echo"$regh"?>" />
	<div class="split_left">
		Naam:
	</div>
	<div class="split_right">
		<input size="30"type="text" name="1naam" class="contact" />
	</div>
    <div class="split_left">
		Adres:
	</div>
	<div class="split_right">
		<input size="30"type="text" name="1adres" class="contact" />
	</div>
    <div class="split_left">
		Postcode:
	</div>
	<div class="split_right">
		<input size="30"type="text" name="1postcode" class="contact" />
	</div>
    <div class="split_left">
		Woonplaats:
	</div>
	<div class="split_right">
		<input size="30"type="text" name="1woonplaats" class="contact" />
	</div>
    <div class="split_left">
		Telefoonnummer:
	</div>
	<div class="split_right">
		<input size="30"type="text" name="telefoonnummer" class="contact" />
	</div>
    <div class="split_left">
		Email:
	</div>
	<div class="split_right">
		<input size="30"type="text" name="1email" class="contact" />
	</div>
    <div class="split_left">
		Uw opmerking en/of vraag:
	</div>
	<div class="split_right">
		<textarea name="bericht" rows="10" cols="23" class="contact"></textarea>
	</div>
    <div class="split_left">
    	<input type="reset" value="Herstel" class="button" />
    </div>
    <div class="split_right">
    	<input id="Submit" name="Submit" type="submit" value="Verstuur" class="button"/>
    </div>
    </fieldset>
<?php
break;
case 'bedankt':
?>
 Bedankt voor uw reactie.<br />
 Wij nemen zo spoedig mogelijk contact met u op. <br />
 <br />
 Met vriendelijke groet,<br />
 <br />
 Schoonheidssalon Bij Suus
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