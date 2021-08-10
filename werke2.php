<?php
	
	// HTML-Beginn einbetten
	include 'inc/header.php';
	
?>


<div id="content">


<?php

	echo '<h1>'.$config['navigation'][$lan]['werke.php'].'</h1>';

	// Vorbereitungen für Mehrsprachigkeit
	if ($lan == "de") $lancode = "d";
	if ($lan == "fr") $lancode = "f";
	if ($lan == "en") $lancode = "e";
	
	// Galerie ID ermitteln:
	$galerieid = filter_input( INPUT_GET, 'galerie', FILTER_VALIDATE_INT );
	
	// Wenn Galerie ID vorhanden ist...
	if ( $galerieid ) {
		
		// Werk & Galerie Name anzeigen:
		$sqltitel = db_abfrage( 'SELECT name'.$lancode.', werkid FROM galerien WHERE id = '. $galerieid );
		$titel = mysqli_fetch_assoc( $sqltitel );
		$sqlwerk = db_abfrage( 'SELECT id, name'.$lancode.' FROM werke WHERE id = '. $titel['werkid'] );
		$werk = mysqli_fetch_assoc( $sqlwerk );		

		// andere Anzeige bei "Collage Büchern"
		if ( $werk['id'] == 5 ) {
			echo '<p class="werkaufzaehlung">' . $titel['name'.$lancode] . '</p>';
		} else {
			echo '<p class="werkaufzaehlung">' . $werk['name'.$lancode] . ' ' . $titel['name'.$lancode] . '</p>';
		}
		
		// Bilder Anzeigen
		$bilder = db_abfrage( 'SELECT * FROM bilder WHERE galerieid = '.$galerieid.' ORDER BY sortierung ASC' );
		while ( $bild = mysqli_fetch_assoc( $bilder ) ) {
			
			echo '<div class="galerie">';
			echo '<a class="fancybox" rel="group" href="'.$bild['bild'].'" title="'.$bild['info'.$lancode].'"><img src="'.$bild['bildthumb'].'"  alt="Jürg Straumann" class="fancyresponsive"></a>';	
			echo '</div>';
					
		}
		
		echo '<div class="clearfix"></div>';
	
	// Sonst Übersichts Seite anzeigen...
	} else {
		
		// --------------
		// --- Bilderfolgen
		
		echo '<h2 class="werkaufzaehlung">Bildfolgen</h2>';
        
        // Licht und Schatten
        $ordner = 'licht-und-schatten';
        $fbGruppe = 'bf_licht-und-schatten';
		echo '<p class="galerieaufzaehlung"><a href="bildfolgen/'.$ordner.'/001.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'" onclick="javascript:_paq.push([\'trackEvent\', \'Bildfolge\', \'Licht und Schatten\']);">&raquo; Licht und Schatten</a></p>';
			echo '<a href="bildfolgen/'.$ordner.'/002.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/003.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/004.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/005.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/006.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/007.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/008.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/009.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/010.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/011.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/012.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/013.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/014.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/015.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/016.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/017.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/018.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/019.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/020.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/021.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/022.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/023.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/024.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/025.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/026.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/027.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/last.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';        
        
        
        // Räume
        $ordner = 'raeume';
        $fbGruppe = 'bf_raeume';
		echo '<p class="galerieaufzaehlung"><a href="bildfolgen/'.$ordner.'/001.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'" onclick="javascript:_paq.push([\'trackEvent\', \'Bildfolge\', \'Räume\']);">&raquo; Räume</a></p>';
			echo '<a href="bildfolgen/'.$ordner.'/002.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/003.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/004.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/005.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/006.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/007.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/008.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/009.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/010.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/011.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/012.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/013.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/014.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/015.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/016.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/017.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/018.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/019.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/020.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/021.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/022.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/023.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/024.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/025.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/026.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/027.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/028.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/029.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/030.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/last.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
        
        
		// Menschen Emotionen
        $ordner = 'menschen-emotionen';
        $fbGruppe = 'bf_menschen-emotionen';
		echo '<p class="galerieaufzaehlung"><a href="bildfolgen/'.$ordner.'/001.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'" onclick="javascript:_paq.push([\'trackEvent\', \'Bildfolge\', \'Menschen, Emotionen\']);">&raquo; Menschen, Emotionen</a></p>';
			echo '<a href="bildfolgen/'.$ordner.'/002.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/003.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/004.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/005.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/006.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/007.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/008.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/009.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/010.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/011.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/012.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/013.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/014.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/015.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/016.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/017.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/018.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/019.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/020.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/021.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/022.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/023.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/024.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/025.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/026.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/027.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/028.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/029.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/030.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/031.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/032.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/033.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/last.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
        
        
        // Polyphones
        $ordner = 'polyphones';
        $fbGruppe = 'bf_polyphones';
		echo '<p class="galerieaufzaehlung"><a href="bildfolgen/'.$ordner.'/001.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'" onclick="javascript:_paq.push([\'trackEvent\', \'Bildfolge\', \'Polyphone\']);">&raquo; Polyphones</a></p>';
			echo '<a href="bildfolgen/'.$ordner.'/002.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/003.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/004.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/005.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/006.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/007.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/008.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/009.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/010.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/011.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/012.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/013.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/014.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/015.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/016.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/017.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/018.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/019.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/020.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/last.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
        

        
		// Domino
        $ordner = 'domino';
        $fbGruppe = 'bf_domino';
		echo '<p class="galerieaufzaehlung"><a href="bildfolgen/'.$ordner.'/001.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'" onclick="javascript:_paq.push([\'trackEvent\', \'Bildfolge\', \'Domino\']);">&raquo; Domino</a></p>';
			echo '<a href="bildfolgen/'.$ordner.'/002.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/003.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/004.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/005.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/006.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/007.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/008.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/009.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/010.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/011.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/012.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/013.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/014.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/015.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/016.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/017.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/018.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/019.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/020.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/021.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/022.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/023.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/024.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/025.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/026.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/027.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/028.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/029.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/030.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/031.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/last.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
        
        
        // Domino
        $ordner = 'chronologie';
        $fbGruppe = 'bf_chronologie';
		echo '<p class="galerieaufzaehlung"><a href="bildfolgen/'.$ordner.'/001.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'" onclick="javascript:_paq.push([\'trackEvent\', \'Bildfolge\', \'Chronologie\']);">&raquo; Chronologie</a></p>';
			echo '<a href="bildfolgen/'.$ordner.'/002.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/003.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/004.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/005.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/006.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/007.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/008.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/009.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/010.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/011.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/012.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/013.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/014.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/015.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/016.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/017.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/018.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/019.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/020.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/021.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/022.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/023.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/024.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/025.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/026.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/027.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/028.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/029.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/030.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/031.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/032.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/033.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/034.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/035.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/036.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/037.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/038.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/039.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/'.$ordner.'/040.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
            echo '<a href="bildfolgen/'.$ordner.'/041.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
			echo '<a href="bildfolgen/last.jpg" class="invertlink bilderfolge" rel="'.$fbGruppe.'"></a>';
		
		
		// --------------
		
		
		// Werke anzeigen
		$werke = db_abfrage( 'SELECT * FROM werke ORDER BY sortierung ASC' );
		while ( $daten_werke = mysqli_fetch_assoc( $werke ) ) {
			
			// Andere Darstellung bei Collage Büchern:
			if ( $daten_werke['id'] == 5 ) {
						
				// Nur 1 Galerie anzeigen
				$galerien = db_abfrage( 'SELECT * FROM galerien WHERE werkid = '.$daten_werke['id'].' ORDER BY sortierung ASC' );
				while ( $daten_galerien = mysqli_fetch_assoc( $galerien ) ) {	
					echo '<h2 class="werkaufzaehlung"><a href="?lan='.$lan.'&galerie=' . $daten_galerien['id'] . '" class="invertlink">'.$daten_galerien['name'.$lancode].'</a></h2>';
				}
				
			} else {
			
				echo '<h2 class="werkaufzaehlung">'.$daten_werke['name'.$lancode].'</h2>';
			
				// Galerien anzeigen
				$galerien = db_abfrage( 'SELECT * FROM galerien WHERE werkid = '.$daten_werke['id'].' ORDER BY sortierung ASC' );
				while ( $daten_galerien = mysqli_fetch_assoc( $galerien ) ) {	
					echo '<p class="galerieaufzaehlung"><a href="?lan='.$lan.'&galerie=' . $daten_galerien['id'] . '" class="invertlink">&raquo; '.$daten_galerien['name'.$lancode].'</a></p>';
				}
			} // end "Collage Bücher" Spezialfall
		}// end while "Werke anzeigen"
	
	}
	

?>  	

</div> <!-- end div "content" -->

<?php
	if ( !$galerieid ) {
?>		
		<div id="zierbilder">
		
			<a class="fancybox" rel="group" href="img/001.png"><img src="img/001-thumb.png" class="zierbild" alt="Jürg Straumann"></a><br>
			<a class="fancybox" rel="group" href="img/002.png"><img src="img/002-thumb.png" class="zierbild" alt="Jürg Straumann"></a><br>
			<a class="fancybox" rel="group" href="img/003.png"><img src="img/003-thumb.png" class="zierbild" alt="Jürg Straumann"></a><br>
		
		</div>
<?php        
	}
?>

<div class="clearfix"></div>

<?php

	// HTML-Ende einbetten
	include 'inc/footer.php';

?>