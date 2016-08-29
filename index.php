<?php
date_default_timezone_set('Europe/Berlin');
$_GET['sort']=@$_GET['sort'];

$API = @file_get_contents("/var/www/web12/home/shell12_s0pply/export_default.json");

$poke_de = array('no_name', 'Bisasam', 'Bisaknosp', 'Bisaflor', 'Glumanda', 'Glutexo', 'Glurak', 'Schiggy', 'Schillok', 'Turtok', 'Raupy', 'Safcon', 'Smettbo', 'Hornliu', 'Kokuna', 'Bibor', 'Taubsi', 'Tauboga', 'Tauboss', 'Rattfratz', 'Rattikarl', 'Habitak', 'Ibitak', 'Rettan', 'Arbok', 'Pikachu', 'Raichu', 'Sandan', 'Sandamer', 'Nidoran♀', 'Nidorina', 'Nidoqueen', 'Nidoran♂', 'Nidorino', 'Nidoking', 'Piepi', 'Pixi', 'Vulpix', 'Vulnona', 'Pummeluff', 'Knuddeluff', 'Zubat', 'Golbat', 'Myrapla', 'Duflor', 'Giflor', 'Paras', 'Parasek', 'Bluzuk', 'Omot', 'Digda', 'Digdri', 'Mauzi', 'Snobilikat', 'Enton', 'Entoron', 'Menki', 'Rasaff', 'Fukano', 'Arkani', 'Quapsel', 'Quaputzi', 'Quappo', 'Abra', 'Kadabra', 'Simsala', 'Machollo', 'Maschock', 'Machomei', 'Knofensa', 'Ultrigaria', 'Sarzenia', 'Tentacha', 'Tentoxa', 'Kleinstein', 'Georok', 'Geowaz', 'Ponita', 'Gallopa', 'Flegmon', 'Lahmus', 'Magnetilo', 'Magneton', 'Porenta', 'Dodu', 'Dodri', 'Jurob', 'Jugong', 'Sleima', 'Sleimok', 'Muschas', 'Austos', 'Nebulak', 'Alpollo', 'Gengar', 'Onix', 'Traumato', 'Hypno', 'Krabby', 'Kingler', 'Voltobal', 'Lektrobal', 'Owei', 'Kokowei', 'Tragosso', 'Knogga', 'Kicklee', 'Nockchan', 'Schlurp', 'Smogon', 'Smogmog', 'Rihorn', 'Rizeros', 'Chaneira', 'Tangela', 'Kangama', 'Seeper', 'Seemon', 'Goldini', 'Golking', 'Sterndu', 'Starmie', 'Pantimos', 'Sichlor', 'Rossana', 'Elektek', 'Magmar', 'Pinsir', 'Tauros', 'Karpador', 'Garados', 'Lapras', 'Ditto', 'Evoli', 'Aquana', 'Blitza', 'Flamara', 'Porygon', 'Amonitas', 'Amoroso', 'Kabuto', 'Kabutops', 'Aerodactyl', 'Relaxo', 'Arktos', 'Zapdos', 'Lavados', 'Dratini', 'Dragonir', 'Dragoran', 'Mewtu', 'Mew');
$items_de['pic'] = array('ITEM_UNKNOWN' => 'null', 'ITEM_POKE_BALL' => '20pokeballs', 'ITEM_GREAT_BALL' => 'greatball', 'ITEM_ULTRA_BALL' => 'ultraball', 'ITEM_MASTER_BALL' => 'masterball', 'ITEM_POTION' => 'potion', 'ITEM_SUPER_POTION' => 'superpotion', 'ITEM_HYPER_POTION' => 'hyperpotion', 'ITEM_MAX_POTION' => 'maxpotion', 'ITEM_REVIVE' => 'revive', 'ITEM_MAX_REVIVE' => 'maxrevive', 'ITEM_LUCKY_EGG' => 'luckyegg', 'ITEM_INCENSE_ORDINARY' => 'incense', 'ITEM_INCENSE_SPICY' => 'incense', 'ITEM_INCENSE_COOL' => 'incense', 'ITEM_INCENSE_FLORAL' => 'incense', 'ITEM_TROY_DISK' => 'luremodule', 'ITEM_X_ATTACK' => 'stardust', 'ITEM_X_DEFENSE' => 'stardust', 'ITEM_X_MIRACLE' => 'stardust', 'ITEM_RAZZ_BERRY' => 'razzberry', 'ITEM_BLUK_BERRY' => 'razzberry', 'ITEM_NANAB_BERRY' => 'razzberry', 'ITEM_WEPAR_BERRY' => 'razzberry', 'ITEM_PINAP_BERRY' => 'razzberry', 'ITEM_SPECIAL_CAMERA' => 'camera', 'ITEM_INCUBATOR_BASIC_UNLIMITED' => 'eggincubator', 'ITEM_INCUBATOR_BASIC' => 'eggincubator', 'ITEM_POKEMON_STORAGE_UPGRADE' => 'storageupgrade', 'ITEM_STORAGE_UPGRADE' => 'bagupgrade');
$items_de['name'] = array('ITEM_UNKNOWN' => 'null', 'ITEM_POKE_BALL' => 'Pokeball', 'ITEM_GREAT_BALL' => 'Greatball', 'ITEM_ULTRA_BALL' => 'Ultraball', 'ITEM_MASTER_BALL' => 'Masterball', 'ITEM_POTION' => 'Trank', 'ITEM_SUPER_POTION' => 'Super Trank', 'ITEM_HYPER_POTION' => 'Hyper Trank', 'ITEM_MAX_POTION' => 'Max Trank', 'ITEM_REVIVE' => 'Beleber', 'ITEM_MAX_REVIVE' => 'Max Beleber', 'ITEM_LUCKY_EGG' => 'Glücks Ei', 'ITEM_INCENSE_ORDINARY' => 'Rauch', 'ITEM_INCENSE_SPICY' => 'Spicy Rauch', 'ITEM_INCENSE_COOL' => 'Cool Rauch', 'ITEM_INCENSE_FLORAL' => 'Floral Rauch', 'ITEM_TROY_DISK' => 'Lock Modul', 'ITEM_X_ATTACK' => 'X Attack', 'ITEM_X_DEFENSE' => 'X Defense', 'ITEM_X_MIRACLE' => 'X Miracle', 'ITEM_RAZZ_BERRY' => 'Razz Berry', 'ITEM_BLUK_BERRY' => 'Bluk Berry', 'ITEM_NANAB_BERRY' => 'Nanab Berry', 'ITEM_WEPAR_BERRY' => 'Wepar Berry', 'ITEM_PINAP_BERRY' => 'Pinap Berry', 'ITEM_SPECIAL_CAMERA' => 'Kamera', 'ITEM_INCUBATOR_BASIC_UNLIMITED' => 'Inkubator (unbegr.)', 'ITEM_INCUBATOR_BASIC' => 'Inkubator', 'ITEM_POKEMON_STORAGE_UPGRADE' => 'Pokemon Storage Upgrade', 'ITEM_STORAGE_UPGRADE' => 'Item Storage Upgrade');

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
		<style type="text/css">
			<!--
			html {
				overflow-y: scroll;
			}
			a:link,a:visited,a:active{font-family:verdana,arial, helvetica, tahoma, verdana, sans-serif;font-size:13px;line-height:18px;text-decoration:underline;color:#0B5B8C;padding-left:2px;padding-right:2px;}a:hover{background-color:#0B5B8C;color:#fff;text-decoration:none;}#breite{width:1000px;}body{background-color:#00669B;background-image:url(images/back.jpg);background-repeat:repeat;background-attachment:fixed;background-position:40% 0;color:#0B5B8C;font-family:verdana, "trebuchet ms", arial, helvetica, verdana, georgia, "times new roman", sans-serif;margin:50px 0 30px;}.haupt{width:100%;border:solid 1px #000;background-color:#fff;-moz-border-radius:30px;-webkit-border-radius:30px;border-radius:30px;-webkit-box-shadow:0 0 24px #fff;-moz-box-shadow:0 0 24px #fff;box-shadow:0 0 24px #fff;padding:15px;}h1,h2,h3,h4,h5,h6{font-family:verdana, arial, helvetica, tahoma, verdana, sans-serif;color:#0B5B8C;font-weight:400;}h1{text-align:left;margin-bottom:28px;letter-spacing:-1px;font-size:26px;line-height:28px;}h2{text-align:left;margin-bottom:20px;letter-spacing:-1px;font-size:20px;line-height:24px;}h3{text-align:left;margin-bottom:10px;letter-spacing:-1px;font-size:16px;line-height:18px;}#top{width:100%;text-align:center;vertical-align:top;padding-left:0;padding-right:0;-moz-border-radius-topleft:15px;-moz-border-radius-topright:15px;-moz-border-radius-bottomleft:0;-moz-border-radius-bottomright:0;-webkit-border-top-left-radius:15px;-webkit-border-top-right-radius:15px;-webkit-border-bottom-left-radius:0;-webkit-border-bottom-right-radius:0;border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:0;border-bottom-right-radius:0;}#content{width:100%;text-align:center;background-image:url(images/s8.png);background-repeat:repeat-x;background-position:50% 0;padding:0;}.sidebar{width:290px;vertical-align:top;padding:40px 0;}#sideboxen_all{-webkit-box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;box-shadow:0 0 10px #000;border:solid 1px #000;-moz-border-radius:30px;-webkit-border-radius:30px;border-radius:30px;}.sidebarbox1{height:100%;font-family:tahoma, verdana, arial, helvetica, verdana, tahoma, sans-serif;font-size:13px;line-height:20px;background-color:#0075B9;background-image:url(images/back07.png);background-repeat:repeat-y;background-position:50% 0;color:#fff;text-align:left;vertical-align:top;border-top:solid 1px #fff;border-bottom:solid 1px #000;-webkit-box-shadow:inset 0 0 8px #fff;-moz-box-shadow:inset 0 0 8px #fff;box-shadow:inset 0 0 8px #fff;padding:2px 10px 20px 12px;}.sidebarbox_h{line-height:35px;}.headline_sidebox{text-align:left;margin-bottom:10px;margin-top:10px;letter-spacing:-1px;font-size:16px;line-height:25px;color:#FFBF00;text-transform:uppercase;text-shadow:1px 1px 3px #000;}.sidebox_top{text-align:left;letter-spacing:0;text-transform:uppercase;font-size:16px;color:#fff;background-color:#000;background-position:50% 50%;padding-left:10px;height:36px;line-height:36px;border-top:solid 1px #424242;border-bottom:solid 1px #424242;border-left:solid 1px #424242;border-right:solid 1px #424242;text-shadow:1px 1px 2px #000;margin:0;}.sidebox_top_oben{text-align:left;letter-spacing:0;text-transform:uppercase;font-size:16px;color:#000;background-color:red;background-position:50% 50%;padding-left:10px;height:36px;line-height:36px;border-top:solid 1px #8A0808;border-bottom:solid 1px #8A0808;border-left:solid 1px #8A0808;border-right:solid 1px #8A0808;text-shadow:1px 1px 2px #fff;-moz-border-radius-topleft:30px;-moz-border-radius-topright:30px;-moz-border-radius-bottomleft:0;-moz-border-radius-bottomright:0;-webkit-border-top-left-radius:30px;-webkit-border-top-right-radius:30px;-webkit-border-bottom-left-radius:0;-webkit-border-bottom-right-radius:0;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:0;border-bottom-right-radius:0;margin:0;}.sidebox_bottom{text-align:left;letter-spacing:0;text-transform:uppercase;font-size:16px;padding-left:10px;height:36px;line-height:36px;border-top:solid 1px #F2F2F2;border-left:solid 1px #F2F2F2;border-right:solid 1px #F2F2F2;color:#000;text-shadow:1px 1px 2px #000;background-color:#fff;background-position:50% 50%;-moz-border-radius-topleft:0;-moz-border-radius-topright:0;-moz-border-radius-bottomleft:30px;-moz-border-radius-bottomright:30px;-webkit-border-top-left-radius:0;-webkit-border-top-right-radius:0;-webkit-border-bottom-left-radius:30px;-webkit-border-bottom-right-radius:30px;border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:30px;border-bottom-right-radius:30px;margin:0;}#progressbar{margin-left:auto;margin-right:auto;background-color:#ddd;border-radius:8px;width:80px;padding:2px;}#progressbar > div{height:7px;border-radius:10px;}
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
																	<h1>Pokémon Bot Profil von <?=$array['profile']['Name'];?>.</h1>
																	<h2>Pokémon-Liste: <?=((@$_GET['poke']) ? '<a href="javascript:history.back()" style="font-size:20px;">zur&uuml;ck</a>' : $PMGO_count.' Pokémon\'s');?>
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
																									.circle {
																										width: 300px;
																										height: auto;
																										position: absolute;
																										margin-left: auto;
																										margin-right: auto;
																										left: -5px;
																										right: 0;
																										top: -5px;
																										z-index:1
																									}
																									.pic_cir {
																										width: 300px;
																										height: auto;
																										position: absolute;
																										margin-left: auto;
																										margin-right: auto;
																										left: -5px;
																										right: 0;
																										top: 5px;
																										z-index:3
																									}
																									.name_cir {
																										width: 300px;
																										height: auto;
																										position: absolute;
																										margin-left: auto;
																										margin-right: auto;
																										left: -5px;
																										right: 0;
																										top: 140px;
																										z-index:4
																									}
																									.haupt_cir {
																										width: 240px;
																										height: auto;
																										position: absolute;
																										margin-left: auto;
																										margin-right: auto;
																										left: -5px;
																										right: 0;
																										top: 135px;
																										z-index:2
																										opacity: 1.5;
																									}
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
																											<?=$poke_de[$array['pokemons'][$i]['Number']]?>
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
																										<hr>
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
																												<td>Typ</td>
																												<td>Gewicht</td>
																												<td>Größe</td>
																											</tr>
																										</table>
																										<hr>
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
																												<td>Sternenstaub</td>
																												<td>Bonbon's</td>
																											</tr>
																										</table>
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
																								<a href="?sort=found">Funddatum</a>
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
																								<a href="?sort=favorite">Favorit</a>
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
																						'name_de'	=>	$poke_de[$array['pokemons'][$i]['Number']],
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
																						echo "<td onclick=\"location.href='?poke=".$pokemons[$i]['id']."';\" style=\"text-align:center;width:200px;line-height:40px;\">
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
																					#	for($i=0; $i<=($PMGO_count-1); $i++) {
																					#		echo "<tr>
																					#		<td colspan=\"4\">
																					#		<hr></td>
																					#		</tr>
																					#		<tr style=\"height:75px\">
																					#		<td style=\"text-align:center\">#".sprintf("%03d",($i+1))."</td>
																					#		<td style=\"text-align:center\">
																					#		<img src=\"//files.pokefans.net/images/pokemon-go/modelle/".sprintf("%03d",$pokemons[$i]['nbr']).".png\" style=\"max-height:50px\" />
																					#		</td>
																					#		<td>
																					#		<b>".$pokemons[$i]['name_de']." ".(($pokemons[$i]['favorite']=='true')?'<img src="http://pokefans.net/images/symbole/pokeathlon_base.png">':'  ')."</b>
																					#		<small>(".$pokemons[$i]['name_en'].")</small>
																					#		</td>
																					#		<!-- <td style=\"text-align:center\">
																					#		<img src=\"//pokefans.net/images/typen/pflanze.gif\" alt=\"\" />
																					#		<br>
																					#		<img src=\"//pokefans.net/images/typen/gift.gif\" alt=\"\" />
																					#		</td>-->
																					#		<td style=\"text-align:center\">
																					#		CP: ".$pokemons[$i]['cp']."<br>
																					#		<small>Max CP: ".$pokemons[$i]['maxcp']."<br>
																					#		".(($pokemons[$i]['candyup'])?'Bonbon Up: '.$pokemons[$i]['candyup'].' ('.$pokemons[$i]['candy'].')':'Bonbon: '.$pokemons[$i]['candy'])."
																					#		</small>
																					#		</td>
																					#		</tr>";
																					#	}
																					?>

																					<?php
																				}
																				?>

																			</div>
																		</div>
																	</td>

																	<!-- Rechts -->

																	<td valign="top" class="sidebar">
																		<div id="sideboxen_all">
																			<div class="sidebox_top_oben">Profil</div>
																			<div class="sidebarbox1">
																				<table border="0" cellpadding="0" cellspacing="0">
																					<tr>
																						<td class="headline_sidebox">User:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																						<?=$array['profile']['Name'];?> (<?=$array['profile']['Level'];?>)</td>
																					</tr>
																					<tr>
																						<td class="headline_sidebox" style="vertical-align:text-top">Punkte:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																							<?=$array['profile']['Experience'];?> von <?=$array['profile']['Next Level Experience'];?> für Level <?=($array['profile']['Level']+1);?>
																						</td>
																					</tr>
																					<tr>
																						<td class="headline_sidebox">Team:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																							<?=$array['profile']['Team'];?>
																						</td>
																					</tr>
																					<tr>
																						<td class="headline_sidebox">Pokemons:&nbsp;&nbsp;</td>
																						<td style="font-size:16px">
																							<?=$PMGO_count;?>
																						</td>
																					</tr>
																					<tr>
																						<td class="headline_sidebox">Sternstaub:&nbsp;&nbsp;</td>
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
																						<img src=\"http://www.serebii.net/pokemongo/items/".@$items_de['pic'][$array['items'][$i]['Item']].".png\" style=\"max-height:20px;display:inline;vertical-align: middle;\"/>&nbsp;&nbsp;";
																						echo "<td style=\"width:120px\" class=\"headline_sidebox\">".@$items_de['name'][$array['items'][$i]['Item']].":</td>";
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