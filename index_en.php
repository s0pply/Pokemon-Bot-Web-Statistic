<?php
date_default_timezone_set('Asia/Tokyo');
$_GET['sort']=@$_GET['sort'];

$API = @file_get_contents("data/export_default.json"); #### Path to JSON file ####

$pokelist = array('no_name', 'Bulbasaur', 'Ivysaur', 'Venusaur', 'Charmander', 'Charmeleon', 'Charizard', 'Squirtle', 'Wartortle', 'Blastoise', 'Caterpie', 'Metapod', 'Butterfree', 'Weedle', 'Kakuna', 'Beedrill', 'Pidgey', 'Pidgeotto', 'Pidgeot', 'Rattata', 'Raticate', 'Spearow', 'Fearow', 'Ekans', 'Arbok', 'Pikachu', 'Raichu', 'Sandshrew', 'Sandslash', 'Nidoran ♀', 'Nidorina', 'Nidoqueen', 'Nidoran ♂', 'Nidorino', 'Nidoking', 'Clefairy', 'Clefable', 'Vulpix', 'Ninetales', 'Jigglypuff', 'Wigglytuff', 'Zubat', 'Golbat', 'Oddish', 'Gloom', 'Vileplume', 'Paras', 'Parasect', 'Venonat', 'Venomoth', 'Diglett', 'Dugtrio', 'Meowth', 'Persian', 'Psyduck', 'Golduck', 'Mankey', 'Primeape', 'Growlithe', 'Arcanine', 'Poliwag', 'Poliwhirl', 'Poliwrath', 'Abra', 'Kadabra', 'Alakazam', 'Machop', 'Machoke', 'Machamp', 'Bellsprout', 'Weepinbell', 'Victreebel', 'Tentacool', 'Tentacruel', 'Geodude', 'Graveler', 'Golem', 'Ponyta', 'Rapidash', 'Slowpoke', 'Slowbro', 'Magnemite', 'Magneton', 'Farfetchd','Doduo', 'Dodrio', 'Seel', 'Dewgong', 'Grimer', 'Muk', 'Shellder', 'Cloyster', 'Gastly', 'Haunter', 'Gengar', 'Onix', 'Drowzee', 'Hypno', 'Krabby', 'Kingler', 'Voltorb', 'Electrode', 'Exeggcute', 'Exeggcutor', 'Cubone', 'Marowak', 'Hitmonlee', 'Hitmonchan', 'Lickitung', 'Koffing', 'Weezing', 'Rhyhorn', 'Rhydon', 'Chansey', 'Tangela', 'Kangaskhan', 'Horsea', 'Seadra', 'Goldeen', 'Seaking', 'Staryu', 'Starmie', 'Mr Mime', 'Scyther', 'Jynx', 'Electabuzz', 'Magmar', 'Pinsir', 'Tauros', 'Magikarp', 'Gyarados', 'Lapras', 'Ditto', 'Eevee', 'Vaporeon', 'Jolteon', 'Flareon', 'Porygon', 'Omanyte', 'Omastar', 'Kabuto', 'Kabutops', 'Aerodactyl', 'Snorlax', 'Articuno', 'Zapdos', 'Moltres', 'Dratini', 'Dragonair', 'Dragonite', 'Mewtwo', 'Mew');
$itemlist['pic'] = array('ITEM_UNKNOWN' => 'null', 'ITEM_POKE_BALL' => '20pokeballs', 'ITEM_GREAT_BALL' => 'greatball', 'ITEM_ULTRA_BALL' => 'ultraball', 'ITEM_MASTER_BALL' => 'masterball', 'ITEM_POTION' => 'potion', 'ITEM_SUPER_POTION' => 'superpotion', 'ITEM_HYPER_POTION' => 'hyperpotion', 'ITEM_MAX_POTION' => 'maxpotion', 'ITEM_REVIVE' => 'revive', 'ITEM_MAX_REVIVE' => 'maxrevive', 'ITEM_LUCKY_EGG' => 'luckyegg', 'ITEM_INCENSE_ORDINARY' => 'incense', 'ITEM_INCENSE_SPICY' => 'incense', 'ITEM_INCENSE_COOL' => 'incense', 'ITEM_INCENSE_FLORAL' => 'incense', 'ITEM_TROY_DISK' => 'luremodule', 'ITEM_X_ATTACK' => 'stardust', 'ITEM_X_DEFENSE' => 'stardust', 'ITEM_X_MIRACLE' => 'stardust', 'ITEM_RAZZ_BERRY' => 'razzberry', 'ITEM_BLUK_BERRY' => 'razzberry', 'ITEM_NANAB_BERRY' => 'razzberry', 'ITEM_WEPAR_BERRY' => 'razzberry', 'ITEM_PINAP_BERRY' => 'razzberry', 'ITEM_SPECIAL_CAMERA' => 'camera', 'ITEM_INCUBATOR_BASIC_UNLIMITED' => 'eggincubator', 'ITEM_INCUBATOR_BASIC' => 'eggincubator', 'ITEM_POKEMON_STORAGE_UPGRADE' => 'storageupgrade', 'ITEM_STORAGE_UPGRADE' => 'bagupgrade');
$itemlist['name'] = array('ITEM_UNKNOWN' => 'null', 'ITEM_POKE_BALL' => 'Pokeball', 'ITEM_GREAT_BALL' => 'Greatball', 'ITEM_ULTRA_BALL' => 'Ultraball', 'ITEM_MASTER_BALL' => 'Masterball', 'ITEM_POTION' => 'Potion', 'ITEM_SUPER_POTION' => 'Super Potion', 'ITEM_HYPER_POTION' => 'Hyper Potion', 'ITEM_MAX_POTION' => 'Max Potion', 'ITEM_REVIVE' => 'Revive', 'ITEM_MAX_REVIVE' => 'Max Revive', 'ITEM_LUCKY_EGG' => 'Lucky Egg', 'ITEM_INCENSE_ORDINARY' => 'Incense', 'ITEM_INCENSE_SPICY' => 'Spicy Incense', 'ITEM_INCENSE_COOL' => 'Cool Incense', 'ITEM_INCENSE_FLORAL' => 'Floral Incense', 'ITEM_TROY_DISK' => 'Lure Modul', 'ITEM_X_ATTACK' => 'X Attack', 'ITEM_X_DEFENSE' => 'X Defense', 'ITEM_X_MIRACLE' => 'X Miracle', 'ITEM_RAZZ_BERRY' => 'Razz Berry', 'ITEM_BLUK_BERRY' => 'Bluk Berry', 'ITEM_NANAB_BERRY' => 'Nanab Berry', 'ITEM_WEPAR_BERRY' => 'Wepar Berry', 'ITEM_PINAP_BERRY' => 'Pinap Berry', 'ITEM_SPECIAL_CAMERA' => 'Camera', 'ITEM_INCUBATOR_BASIC_UNLIMITED' => 'Incubator (unlimited)', 'ITEM_INCUBATOR_BASIC' => 'Incubator', 'ITEM_POKEMON_STORAGE_UPGRADE' => 'Pokemon Storage Upgrade', 'ITEM_STORAGE_UPGRADE' => 'Item Storage Upgrade');

$array = json_decode($API, true);
$PMGO_count = count($array['pokemons']);
$ITEM_count = count($array['items']);

function progressbar($p_color)
{
	if($p_color<='35') {
		$progressbar_color = '#FF0000';
	} elseif($p_color<='65') {
		$progressbar_color = '#FFFF00';
	} else {
		$progressbar_color = '#01DF01';
	}
	return $progressbar_color;
}

list($y, $M, $d, $h, $m, $s) = sscanf($array['profile']['Last Update'], "%4d-%2s-%2d %2s:%2s:%2s");
$update_time = $h.":".$m.":".$s." - ".$d.".".$M.".".$y;
$timestamp = mktime($h, $m, $s, $M, $d, $y);
$reload_time = 61-(time()-$timestamp);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type"
		content="text/html; charset=iso-8859-1">
		<meta name="robots" content="INDEX,FOLLOW">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<?php if(@$_GET['poke']) { ?>
		<script src="https://rawgit.com/kottenator/jquery-circle-progress/1.1.3/dist/circle-progress.js"></script>
		<?php } ?>
		<title>Pokémon GO Bot Web</title>
		<link href="hover.css" rel="stylesheet" media="all">
		<style type="text/css">
			<!--
			html {
				overflow-y: scroll;
			}
			a:link,a:visited,a:active{font-family:verdana,arial, helvetica, tahoma, verdana, sans-serif;font-size:13px;line-height:18px;text-decoration:underline;color:#0B5B8C;padding-left:2px;padding-right:2px;}a:hover{text-decoration:none;}#breite{width:1000px;}body{background-color:#00669B;background-image:url(images/back.jpg);background-repeat:repeat;background-attachment:fixed;background-position:40% 0;color:#0B5B8C;font-family:verdana, "trebuchet ms", arial, helvetica, verdana, georgia, "times new roman", sans-serif;margin:50px 0 30px;}.haupt{width:100%;border:solid 1px #000;background-color:#fff;-moz-border-radius:30px;-webkit-border-radius:30px;border-radius:30px;-webkit-box-shadow:0 0 24px #fff;-moz-box-shadow:0 0 24px #fff;box-shadow:0 0 24px #fff;padding:15px;}h1,h2,h3,h4,h5,h6{font-family:verdana, arial, helvetica, tahoma, verdana, sans-serif;color:#0B5B8C;font-weight:400;}h1{text-align:left;margin-bottom:28px;letter-spacing:-1px;font-size:26px;line-height:28px;}h2{text-align:left;margin-bottom:20px;letter-spacing:-1px;font-size:20px;line-height:24px;}h3{text-align:left;margin-bottom:10px;letter-spacing:-1px;font-size:16px;line-height:18px;}#top{width:100%;text-align:center;vertical-align:top;padding-left:0;padding-right:0;-moz-border-radius-topleft:15px;-moz-border-radius-topright:15px;-moz-border-radius-bottomleft:0;-moz-border-radius-bottomright:0;-webkit-border-top-left-radius:15px;-webkit-border-top-right-radius:15px;-webkit-border-bottom-left-radius:0;-webkit-border-bottom-right-radius:0;border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:0;border-bottom-right-radius:0;}#content{width:100%;text-align:center;background-image:url(images/s8.png);background-repeat:repeat-x;background-position:50% 0;padding:0;}.sidebar{width:290px;vertical-align:top;padding:40px 0;}#sideboxen_all{-webkit-box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;box-shadow:0 0 10px #000;border:solid 1px #000;-moz-border-radius:30px;-webkit-border-radius:30px;border-radius:30px;}.sidebarbox1{height:100%;font-family:tahoma, verdana, arial, helvetica, verdana, tahoma, sans-serif;font-size:13px;line-height:20px;background-color:#0075B9;background-image:url(images/back07.png);background-repeat:repeat-y;background-position:50% 0;color:#fff;text-align:left;vertical-align:top;border-top:solid 1px #fff;border-bottom:solid 1px #000;-webkit-box-shadow:inset 0 0 8px #fff;-moz-box-shadow:inset 0 0 8px #fff;box-shadow:inset 0 0 8px #fff;padding:2px 10px 20px 12px;}.sidebarbox_h{line-height:35px;}.headline_sidebox{text-align:left;margin-bottom:10px;margin-top:10px;letter-spacing:-1px;font-size:16px;line-height:25px;color:#FFBF00;text-transform:uppercase;text-shadow:1px 1px 3px #000;}.sidebox_top{text-align:left;letter-spacing:0;text-transform:uppercase;font-size:16px;color:#fff;background-color:#000;background-position:50% 50%;padding-left:10px;height:36px;line-height:36px;border-top:solid 1px #424242;border-bottom:solid 1px #424242;border-left:solid 1px #424242;border-right:solid 1px #424242;text-shadow:1px 1px 2px #000;margin:0;}.sidebox_top_oben{text-align:left;letter-spacing:0;text-transform:uppercase;font-size:16px;color:#000;background-color:red;background-position:50% 50%;padding-left:10px;height:36px;line-height:36px;border-top:solid 1px #8A0808;border-bottom:solid 1px #8A0808;border-left:solid 1px #8A0808;border-right:solid 1px #8A0808;text-shadow:1px 1px 2px #fff;-moz-border-radius-topleft:30px;-moz-border-radius-topright:30px;-moz-border-radius-bottomleft:0;-moz-border-radius-bottomright:0;-webkit-border-top-left-radius:30px;-webkit-border-top-right-radius:30px;-webkit-border-bottom-left-radius:0;-webkit-border-bottom-right-radius:0;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:0;border-bottom-right-radius:0;margin:0;}.sidebox_bottom{text-align:left;letter-spacing:0;text-transform:uppercase;font-size:16px;padding-left:10px;height:36px;line-height:36px;border-top:solid 1px #F2F2F2;border-left:solid 1px #F2F2F2;border-right:solid 1px #F2F2F2;color:#000;text-shadow:1px 1px 2px #000;background-color:#fff;background-position:50% 50%;-moz-border-radius-topleft:0;-moz-border-radius-topright:0;-moz-border-radius-bottomleft:30px;-moz-border-radius-bottomright:30px;-webkit-border-top-left-radius:0;-webkit-border-top-right-radius:0;-webkit-border-bottom-left-radius:30px;-webkit-border-bottom-right-radius:30px;border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:30px;border-bottom-right-radius:30px;margin:0;}#progressbar{margin-left:auto;margin-right:auto;background-color:#ddd;border-radius:8px;width:80px;padding:2px;}#progressbar > div{height:7px;border-radius:10px;}
			-->
		</style>
		<?php if(@!$_GET['poke'] && $reload_time > '-2') { ?>
		<script language="JavaScript">
			<!--
			var sTime = new Date().getTime();
			var countDown = <?=$reload_time;?>;
			function UpdateTime() {
				var cTime = new Date().getTime();
				var diff = cTime - sTime;
				var seconds = countDown - Math.floor(diff / 1000);
				if (seconds >= 0) {
					$("#seconds").text(seconds < 10 ? "0" + seconds : seconds);
				} else {
					location.reload();
					clearInterval(counter);
				}
			}
			UpdateTime();
			var counter = setInterval(UpdateTime, 500);
			// -->
		</script>
		<?php } ?>
	</head>
	<body>
		<table  align="center" id="breite" cellspacing="0" cellpadding="0" border="0">
			<tr>
				<td align="center" width="100%">
					<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td align="center" class="haupt" width="100%">
								<table align="center" cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td valign="top" align="center">
											<table border="0" cellpadding="0" cellspacing="0">
												<tr>
													<td valign="top">
														<table width="100%" align="left" cellspacing="0" cellpadding="" border="0">
															<tr>
																<td valign="top"  width="650px">
																	<h1>Pokémon Bot Profil of <?=$array['profile']['Name'];?>.</h1>
																	<h2>Pokémon-List: <?=((@$_GET['poke']) ? '<a href="javascript:history.back()" style="font-size:20px;">zur&uuml;ck</a>' : $PMGO_count.' Pokémon\'s');?>
																	</h2>
																	<div id="content" class="column content-right">
																		<center>
																			<div class="table-responsive">
																				<?php
																				if(@$_GET['poke']) {
																					?>
																					<table class="centered" height="525px" width="300px" style="background-size:300px;" cellspacing="3" cellpadding="" border="0" background="./images/poke_bg.png">
																						<tr>
																							<td align="center" valign="top">
																								<?php
																								for($i=0; $i<=($PMGO_count-1); $i++) {
																									if($array['pokemons'][$i]['ID']==@$_GET['poke']) {
																										break;
																									}
																								}
																								?>
																								<div style="font-size:20px;line-height:35px;">
																									<b style="color:#ffffff">CP <?=$array['pokemons'][$i]['CP'];?>
																									</b>
																								</div>
																								<style id="jsbin-css">
																									.circle{width:300px;height:auto;position:absolute;margin-left:auto;margin-right:auto;left:-5px;right:0;top:-5px;z-index:1;}.pic_cir{width:300px;height:auto;position:absolute;margin-left:auto;margin-right:auto;left:-5px;right:0;top:5px;z-index:3;}.name_cir{width:300px;height:auto;position:absolute;margin-left:auto;margin-right:auto;left:-5px;right:0;top:140px;z-index:4;}.haupt_cir{width:240px;height:auto;position:absolute;margin-left:auto;margin-right:auto;left:-5px;right:0;top:135px;z-index:2 opacity: 1.5;}.haupt_bottum{font-size:12px;background-color:#81F781;border-radius:10px 0 0 10px;-moz-border-radius:10px 0 0 10px;-webkit-border-radius:10px 0 0 10px;padding:12px;}
																								</style>
																								<?php
																								$hpprozent = floor(100*$array['pokemons'][$i]['Stamina (HP)']/$array['pokemons'][$i]['Max Stamina (HP)']);
																								$progressbar_color = progressbar($hpprozent);
																								?>
																								<div style="margin-top:16px;position:relative">
																									<div class="circle default"></div>
																									<div class="pic_cir">
																									<img src="./images/modelle/<?=sprintf("%03d",$array['pokemons'][$i]['Number']);?>.png" alt="photo"></div>
																									<div class="name_cir" style="font-size:20px;line-height:35px;">
																										<b style="color:#000000">
																											<?=$pokelist[$array['pokemons'][$i]['Number']]?>
																										</b>
																									</div>
																									<div class="haupt haupt_cir">
																										<br>
																										<div style="text-align:center;width:180px;" id="progressbar">
																											<div style="background-color:<?=$progressbar_color;?>;width:<?=$hpprozent;?>%;"></div>
																										</div>
																										<span style="font-size:15px;">HP <?=$array['pokemons'][$i]['Stamina (HP)'];?> / <?=$array['pokemons'][$i]['Max Stamina (HP)'];?>
																										</span>
																										<br>
																										<hr color="#D8D8D8">
																										<table border="0" cellpadding="3" cellspacing="0" style="font-size:12px;">
																											<tr align="center">
																												<td width="100px">
																													<?=$array['pokemons'][$i]['Type'];?>
																												</td>
																												<td width="100px">
																												<?=number_format($array['pokemons'][$i]['Weight [kg]'],2);?> kg</td>
																												<td width="100px">
																												<?=number_format($array['pokemons'][$i]['Height [m]'],2);?> m</td>
																											</tr>
																											<tr align="center">
																												<td>Type</td>
																												<td>Weight</td>
																												<td>Size</td>
																											</tr>
																										</table>
																										<hr color="#D8D8D8">
																										<table border="0" cellpadding="3" cellspacing="0" style="font-size:12px;">
																											<tr align="center">
																												<td width="150px">
																													<img src="./images/sternstaub.png" style="vertical-align:middle;height:25px">
																													<?=$array['profile']['Stardust'];?>
																												</td>
																												<td width="150px">
																													<img src="./images/bonbon.png" style="vertical-align:middle;height:20px">
																													<?=$array['pokemons'][$i]['Candy'];?>
																												</td>
																											</tr>
																											<tr align="center">
																												<td>Stardust</td>
																												<td>Candy</td>
																											</tr>
																										</table>
																										<br>
																										<table border="0" cellpadding="3" cellspacing="0" style="width:240px">
																											<tr align="left">
																												<td class="haupt_bottum" width="80px">
																													POWER UP
																												</td>
																												<td bgcolor="#E6F8E0" style="text-align:center;width:80px;font-size:12px;">
																													<img src="./images/sternstaub.png" style="vertical-align:middle;height:15px">
																													<?=$array['pokemons'][$i]['Stardust costs for powerup'];?>
																												</td>
																												<td bgcolor="#E6F8E0" style="text-align:center;width:80px;font-size:12px;">
																													<img src="./images/bonbon.png" style="vertical-align:middle;height:15px">
																													<?=$array['pokemons'][$i]['Candy costs for powerup'];?>
																												</td>
																												<?php if($array['pokemons'][$i]['Candies to evolve'] != '0') { ?>
																											</tr>
																											<tr>
																												<td>
																												<br style="line-height:5px;"></td>
																											</tr>
																											<tr align="left">
																												<td class="haupt_bottum" width="80px">
																													EVOLVE
																												</td>
																												<td bgcolor="#E6F8E0" style="text-align:center;width:80px;font-size:12px;"></td>
																												<td bgcolor="#E6F8E0" style="text-align:center;width:80px;font-size:12px;">
																													<img src="./images/bonbon.png" style="vertical-align:middle;height:15px">
																													<?=$array['pokemons'][$i]['Candies to evolve'];?>
																												</td>
																												<?php } ?>
																											</tr>
																										</table>
																										<hr color="#D8D8D8">


																										<table border="0" cellpadding="3" cellspacing="0" style="width:240px;font-size:14px;">
																											<tr>
																												<td width="80px">
																													<?=$array['pokemons'][$i]['Move 1'];?>
																													<br>
																													<span style="color:#A4A4A4;font-size:12px">
																														<?=$array['pokemons'][$i]['Move 1 Type'];?>
																													</span>
																												</td>
																												<td style="text-align:right;vertical-align:top">
																													<?=$array['pokemons'][$i]['Move 1 Power'];?>
																												</td>
																											</tr>
																											<tr>
																												<td>
																												<br style="line-height:5px;"></td>
																											</tr>
																											<tr>
																												<td width="80px">
																													<?=$array['pokemons'][$i]['Move 2'];?>
																													<br>
																													<span style="color:#A4A4A4;font-size:12px">
																														<?=$array['pokemons'][$i]['Move 2 Type'];?>
																													</span>
																												</td>
																												<td style="text-align:right;vertical-align:top">
																													<?=$array['pokemons'][$i]['Move 2 Power'];?>
																												</td>
																											</tr>
																										</table>
																										<hr color="#D8D8D8">
																										<span style="font-size:10px;">
																											<?php
																											list($y1, $M1, $d1, $h1, $m1, $s1) = sscanf($array['pokemons'][$i]['Found'], "%4d-%2s-%2d %2s:%2s:%2s");
																											echo $h1.":".$m1.":".$s1." - ".$d1.".".$M1.".".$y1;
																											?>
																										</span>

																									</div>
																								</div>
																							</td>
																						</tr>
																					</table>
																					<?php
																					$hppro_100 = (floor($array['pokemons'][$i]['CP']*100/($array['pokemons'][$i]['Max CP']*$array['pokemons'][$i]['cpMultiplier']))/100);
																				} else {
																					?>
																					<table class="centered">
																						<tr>
																							<?php $sort_pic = "<img src=\"./images/order_desc.gif\" style=\"vertical-align:middle\">"; ?>
																							<td style="width:15px"> </td>
																							<td style="text-align:left;width:105px">
																								<a href="?sort=found">Found date</a>
																								<?php if($_GET['sort']=='found') { echo $sort_pic; } ?>
																							</td>
																							<td>|</td>
																							<td style="text-align:left;width:55px">
																								<a href="?sort=nbr">Nr.</a>
																								<?php if($_GET['sort']=='nbr') { echo $sort_pic; } ?>
																							</td>
																							<td>|</td>
																							<td style="text-align:left;width:80px">
																								<a href="?sort=name">Name</a>
																								<?php if($_GET['sort']=='name') { echo $sort_pic; } ?>
																							</td>
																							<td>|</td>
																							<td style="text-align:left;width:55px">
																								<a href="?sort=cp">CP</a>
																								<?php if($_GET['sort']=='cp') { echo $sort_pic; } ?>
																							</td>
																							<td>|</td>
																							<td style="text-align:left;width:80px">
																								<a href="?sort=favorite">Favorite</a>
																								<?php if($_GET['sort']=='favorite') { echo $sort_pic; } ?>
																							</td>
																						</tr>
																						<tr>
																							<td colspan="10">
																								<hr>
																								<br>
																							</td>
																						</tr>
																					</table>
																					<?php
																					for($i=0; $i<=($PMGO_count-1); $i++) {
																						$pokemons[] = array('nbr'		=>	$array['pokemons'][$i]['Number'],
																						'name_en'	=>	$array['pokemons'][$i]['Name'],
																						'name_de'	=>	$pokelist[$array['pokemons'][$i]['Number']],
																						'cp'		=>	$array['pokemons'][$i]['CP'],
																						'maxcp'		=>	$array['pokemons'][$i]['Max CP'],
																						'candyup'		=>	$array['pokemons'][$i]['Candies to evolve'],
																						'candy'		=>	$array['pokemons'][$i]['Candy'],
																						'found'		=>	$array['pokemons'][$i]['Found'],
																						'hp'		=>	$array['pokemons'][$i]['Stamina (HP)'],
																						'hpmax'		=>	$array['pokemons'][$i]['Max Stamina (HP)'],
																						'id'		=>	$array['pokemons'][$i]['ID'],
																						'favorite'		=>	$array['pokemons'][$i]['Favorite?']
																						);
																					}
																					foreach ($pokemons as $nr => $inhalt)
																					{
																						$nbr[$nr] = strtolower($inhalt['nbr']);
																						$name_en[$nr] = strtolower($inhalt['name_en']);
																						$name_de[$nr] = strtolower($inhalt['name_de']);
																						$cp[$nr] = strtolower($inhalt['cp']);
																						$maxcp[$nr] = strtolower($inhalt['maxcp']);
																						$candyup[$nr] = strtolower($inhalt['candyup']);
																						$candy[$nr] = strtolower($inhalt['candy']);
																						$found[$nr] = strtolower($inhalt['found']);
																						$hp[$nr] = strtolower($inhalt['hp']);
																						$hpmax[$nr] = strtolower($inhalt['hpmax']);
																						$id[$nr] = strtolower($inhalt['id']);
																						$favorite[$nr] = strtolower($inhalt['favorite']);
																					}

																					if(@$_GET['sort']=='nbr') {
																						array_multisort($nbr, SORT_ASC, $pokemons);
																					} elseif(@$_GET['sort']=='name') {
																						array_multisort($name_de, SORT_ASC, $pokemons);
																					}	elseif(@$_GET['sort']=='found') {
																						array_multisort($found, SORT_DESC, $pokemons);
																					}	elseif(@$_GET['sort']=='favorite') {
																						array_multisort($favorite, SORT_DESC, $pokemons);
																					}	else {
																						array_multisort($cp, SORT_DESC, $pokemons);
																					}
																					echo "<table>";
																					for($i=0; $i<=($PMGO_count-1); $i++) {
																						@$j++;
																						$hpprozent = floor(100*$pokemons[$i]['hp']/$pokemons[$i]['hpmax']);
																						$progressbar_color = progressbar($hpprozent);
																						if($j=='1') { echo "<tr>"; }
																						echo "<td onclick=\"location.href='?poke=".$pokemons[$i]['id']."';\" style=\"text-align:center;width:200px;line-height:40px;\" class=\"hvr-grow-shadow\">
																						<a style=\"cursor:pointer;\">
																						CP ".$pokemons[$i]['cp']."<br>
																						<img src=\"./images/modelle/".sprintf("%03d",$pokemons[$i]['nbr']).".png\" style=\"height:70px\" />".(($pokemons[$i]['favorite']=='true')?'<img src="http://pokefans.net/images/symbole/pokeathlon_base.png" style="vertical-align:top">':'  ')."<br>
																						".$pokemons[$i]['name_de']."</a>
																						<div style=\"text-align:center\" id=\"progressbar\">
																						<div style=\"background-color:".$progressbar_color.";width:".$hpprozent."%;\"></div>
																						</div>
																						</td>";
																						if($j=='3') { echo "</tr>
																							<tr>
																							<td colspan=\"3\">
																							<hr> </td>
																						</tr>"; $j=0; }
																					}
																					echo "</table>";
																				}
																				?>
																			</div>
																		</div>
																	</td>
																	<!-- Rechts -->
																	<td valign="top" class="sidebar">
																		<div id="sideboxen_all">
																			<div class="sidebox_top_oben">Profile</div>
																			<div class="sidebarbox1">
																				<table border="0" cellpadding="0" cellspacing="0">
																					<tr>
																						<td class="headline_sidebox">User:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																						<?=$array['profile']['Name'];?> (<?=$array['profile']['Level'];?>)</td>
																					</tr>
																					<tr>
																						<td class="headline_sidebox" style="vertical-align:text-top">Exp:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																							<?=$array['profile']['Experience'];?> of <?=$array['profile']['Next Level Experience'];?> for Level <?=($array['profile']['Level']+1);?>
																						</td>
																					</tr>
																					<tr>
																						<td class="headline_sidebox">Team:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																							<?=$array['profile']['Team'];?>
																						</td>
																					</tr>
																					<tr>
																						<td class="headline_sidebox">Pokemon:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																							<?=$PMGO_count;?>
																						</td>
																					</tr>
																					<tr>
																						<td class="headline_sidebox">Stardust:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																							<?=$array['profile']['Stardust'];?>
																						</td>
																					</tr>
																				</table>
																			</div>

																			<!-- Items-->
																			<div class="sidebox_top">Items</div>
																			<div class="sidebarbox1 sidebarbox_h">
																				<table border="0" cellpadding="0" cellspacing="0">
																					<?php
																					for($i=0; $i<=($ITEM_count-1); $i++) {
																						echo "<tr>";
																						echo "<td style=\"width:45px;text-align:right\">
																						<img src=\"http://www.serebii.net/pokemongo/items/".@$itemlist['pic'][$array['items'][$i]['Item']].".png\" style=\"max-height:20px;display:inline;vertical-align: middle;\"/>&nbsp;&nbsp;";
																						echo "<td style=\"width:120px\" class=\"headline_sidebox\">".@$itemlist['name'][$array['items'][$i]['Item']].":</td>";
																						echo "<td style=\"text-align:right;width:10px;font-size:16px\">".$array['items'][$i]['Count']."</td>";
																						echo "<td></td>
																						</tr>";
																					}
																					?>
																				</table>
																			</div>
																			<!-- ENDE Items-->
																			<div class="sidebox_bottom" style="text-align:center;font-size: 13px">
																				<?=$update_time;?>
																				<br>
																				<?php if($reload_time > '-2') { ?>
																				<span id="seconds" style="float:center">
																					<?=$reload_time;?>
																				</span>s to Reload<br>
																				<?php } else { echo "Server Down"; } ?>
																			</div>
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</body>
		<?php
		if(@$_GET['poke']) {
			?>
			<script id="jsbin-javascript">
				$.circleProgress.defaults.arcCoef = 0.5;
				$.circleProgress.defaults.startAngle = 0.5 * Math.PI;
				$.circleProgress.defaults.drawArc = function(v) {
					var ctx = this.ctx,
					r = this.radius,
					t = this.getThickness(),
					c = this.arcCoef,
					a = this.startAngle + (1 - c) * Math.PI;
					v = Math.max(0, Math.min(1, v));
					ctx.save();
					ctx.beginPath();
					ctx.arc(r, r, r - t / 2, a, a + 2 * c * Math.PI * v);
					ctx.lineWidth = t;
					ctx.lineCap = this.lineCap;
					ctx.strokeStyle = this.arcFill;
					ctx.stroke();
					ctx.restore();
				};

				$.circleProgress.defaults.drawEmptyArc = function(v) {
					var ctx = this.ctx,
					r = this.radius,
					t = this.getThickness(),
					c = this.arcCoef,
					a = this.startAngle + (1 - c) * Math.PI;
					v = Math.max(0, Math.min(1, v));
					if (v < 1) {
						ctx.save();
						ctx.beginPath();
						if (v <= 0) {
							ctx.arc(r, r, r - t / 2, a, a + 2 * c * Math.PI);
						} else {
							ctx.arc(r, r, r - t / 2, a + 2 * c * Math.PI * v, a + 2 * c * Math.PI);
						}
						ctx.lineWidth = t;
						ctx.strokeStyle = this.emptyFill;
						ctx.stroke();
						ctx.restore();
					}
				};

				$('.circle.default').circleProgress({
					value: <?=$hppro_100;?>,
					thickness: 8,
					size: 250,
					fill: {
						gradient: ['#FF0000', '#FFFF00', '#2EFE2E']
					}
				});

			</script>
			<?php } ?>
		</html>
