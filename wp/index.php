<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="sv-SE" xml:lang="sv-SE" xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="sv" />
	<meta name="language" content="sv" />



	<meta name="description" content="Information, resurser och verktyg för enslikda användare samt föreningar och andra organisationer.
		Organisationer kan hantera medlemmar, medlemsregister, kurser, anmälningar, betalningar, bokföring, e-postlistor, massutskick och mycket mer." />
	<meta name="keywords" content="dans, dansforum, nytt, nyheter, kalender, medlemmar, medlemsregister, administration, anmälan, webbanmälan" />
	<meta name="robots" content="index,follow" />

	<link rel="shortcut icon" href="favicon.ico" />

	<link rel="stylesheet" media="all" type="text/css" href="css/standard.css" />
	<link rel="stylesheet" media="all" type="text/css" href="shop/shop.css" />

	<style type="text/css">
		.upcomingCogWorkCourses TABLE.cwEvents {
			width: 100%;
		}
		.upcomingCogWorkCourses TABLE.cwEvents TR.headerRow TH {
			background-color: transparent;
			color: black;
			font-weight: normal;
			font-size: inherit;
			padding-top: 0;
		}
	</style>
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript">var relTopDirPath='https://minaaktiviteter.se/'; var org='ma';</script>
	<script type="text/javascript" src="https://minaaktiviteter.se/js/cross-browser-api.js"></script>
	<script type="text/javascript" src="https://minaaktiviteter.se/js/misc.js"></script>
	<script type="text/javascript" src="https://minaaktiviteter.se/js/cookies.js"></script>
	<script type="text/javascript" src="https://minaaktiviteter.se/js/ajax.js"></script>

	<script type="text/javascript" src="https://minaaktiviteter.se/js/nav_tree.js"></script>
	<script type="text/javascript" src="https://minaaktiviteter.se/js/menu.js"></script>
	<script type="text/javascript" src="https://minaaktiviteter.se/js/doc_info.js"></script>
	<script type="text/javascript" src="https://minaaktiviteter.se/js/exec.js"></script>

    <link type="text/css" rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/jquery-ui.css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/i18n/jquery.ui.datepicker-sv.min.js"></script>

    <script type="text/javascript">
        $.datepicker.setDefaults($.datepicker.regional['sv']);
        $( function() { $(".datepicker").datepicker({ changeMonth: true, changeYear: true, showWeek: true }); } );
    </script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-796120-1']);
        _gaq.push(['_setDomainName', 'none']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

</head>

<body>

<div class="bodyHeader">


        <div class="topBlock logoAndTitle">
            <h1 class="websiteHeading">
                <a class="title" href="https://minaaktiviteter.se/">Mina Aktiviteter</a>
            </h1>
        </div>
        <div class="topBlock topSearch">
        </div>
        <div class="topBlock userControls">
                <a class="noPrint" href="https://minaaktiviteter.se/session/login/" title="Till inloggningsida för medlemmar och administratörer">Logga in</a>

    </div>

    <div class="topBlock" id="sectionSelectors">
        <a class="sectionSelector selectedSectionSelector" href="https://minaaktiviteter.se/" id="section_start"><span class="currentSectionSelector">Start</span></a>
        <a class="sectionSelector" href="https://minaaktiviteter.se/help/" id="section_help">Hjälp</a>
    </div>
    <div style="clear: both;"></div>

	<div id="topNav">

		<div class="sectionMenu" id="section_start_menu">
			<a class="MenuNode" id="menuBar_start_myaccount" href="myaccount/">Mina sidor</a>
			<a class="MenuNode" id="menuBar_start_calendar" href="calendar/">Kalender</a>
			<a class="MenuNode" id="menuBar_start_orgs" href="public/orgs/">Organisationer</a>
			<a class="MenuNode" id="menuBar_start_oss" href="oss/">Om oss</a>
		</div>



		<div class="sectionMenu" id="section_help_menu" style="display: none;">
			<a class="MenuNode" id="menuBar_help_general" href="help/general/">Allmänt</a>
			<a class="MenuNode" id="menuBar_help_addressbook" href="help/addressbook/">Adressbok</a>
			<a class="MenuNode" id="menuBar_help_activities" href="help/activities/">Aktiviteter</a>
			<a class="MenuNode" id="menuBar_help_registrations" href="help/registrations/">Anmälningar</a>
			<a class="MenuNode" id="menuBar_help_group_mail" href="help/group_mail/">Utskick</a>
			<a class="MenuNode" id="menuBar_help_finance" href="help/finance/">Ekonomi</a>
			<a class="MenuNode" id="menuBar_help_api" href="help/api/">Integrera</a>
		</div>

	</div>

	<div id="navPath">
		<span id="PageNodeName">Start</span>
	</div>
</div>
<div class="bodyCenter">

	<div class="sideColumn">


                <form method="post" action="https://minaaktiviteter.se/session/login/?action=login">
                <h3>Logga in</h3>
                    <table>
                        <tr title="Ditt användarnamn som du tidigare valt. Finns ditt personnummer registrerat i systemet kan du ange det istället för ditt användarnamn">
                            <td style="padding:0 0 0.1em 0.25em;"><label for="loginUsername">Anv.</label></td>
                            <td style="padding:0 0 0.1em 0.25em;" colspan="2"><input type="text" name="username" id="loginUsername" size="23" tabindex="1" /></td>
                        </tr>
                        <tr title="Ditt lösenord som du tidigare valt">
                            <td style="padding:0.1em 0 0.1em 0.25em;"><label for="loginPassword">Lös.</label></td>
                            <td style="padding:0.1em 0 0.1em 0.25em;"><input type="password" name="password" id="loginPassword" size="19" tabindex="2" /></td>
                            <td style="padding:0.1em 0 0.1em 0.1em; text-align: right;"><input type="submit" value=" &gt; " name="submitLogin" tabindex="3" /></td>
                        </tr>
                    </table>
                </form>

		<h3>Handledning och kontakt</h3>
		<p><a class="linkSmallIconLeft smallIconHelp" href="help/index.php">Handledningar</a></p>
		<p><a class="linkSmallIconLeft smallIconContact" href="oss/kontakt/index.php">Kontakt och support</a></p>

	</div>

	<!-- <div class="mainContent" style="width:64%; min-height: 257px;"> -->
	<div class="mainContent">


		<h1>Välkommen till Mina Aktiviteter!</h1>

		<p>Mina Aktiviteter används av hundratusentals individer för att bland annat hitta och anmäla
		sig till kurser och andra aktiviteter.
		Flera förbund och paraplyorganisationer använder det centralt och inom sina
		medlemsorganisationer för att administrera sin verksamhet. Därutöver används det av an mängd fristående företag och
		föreningar.</p>
		<p>En stor undersajt till MinaAktiviteter.se är <a href="https://dans.se/">Dans.se</a> som har fler verktyg och funktioner
		inriktade på dansverksamhet.</p>


		
                <div class="bxContainer screenOnly">
                    <div class="bxTop bxHeading">
                        <h3>Inloggning <span style="font-weight: normal; padding-left: 0.50em; color: #555; font-style: italic;">Klicka på någon av länkarna nedanför</span></h3>
                    </div>
                    <div class="bxContent">
                <p><a class="linkSmallIconLeft smallIconLogin" href="https://minaaktiviteter.se/session/login/" title="Om du redan skapat ett konto och kommer ihåg dina inloggningsuppgifter">Logga in med befintliga inloggningsuppgifter</a></p>
                <p><a class="linkSmallIconLeft smallIconGooglePlus" href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=https%3A%2F%2Fminaaktiviteter.se%2Fsession%2Flogin_with_google%2F&client_id=830941196565-ojs5kqcul0f6294p87vt8avd82fal3v7.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=online&approval_prompt=auto" title="Om du har ett Google-konto kan du använda det för att logga in till ett befinligt konto på minaaktiviteter.se eller för att öppna ett nytt konto">Logga in med ditt Google-konto</a></p>
                <p><a class="linkSmallIconLeft smallIconFacebook" href="https://www.facebook.com/dialog/oauth?client_id=1632432546982014&redirect_uri=https%3A%2F%2Fminaaktiviteter.se%2Fsession%2Flogin_with_facebook%2F&state=069e9e3600e3928cc311282a86bd35ae&sdk=php-sdk-3.2.3" title="Om du har ett Facebook-konto kan du använda det för att logga in till ett befinligt konto på minaaktiviteter.se eller för att öppna ett nytt konto">Logga in med ditt Facebook-konto</a></p>
                <p><a class="linkSmallIconLeft smallIconKeySend" href="https://minaaktiviteter.se/session/req_key/" title="Beställ en temporär inloggningsnyckel till en e-postadress som tidigare finns registrerad i ditt namn">Har du redan ett konto men glömt dina uppgifter?</a></p>
                <p><a class="linkSmallIconLeft smallIconUserAdd" href="https://minaaktiviteter.se/session/new_user/" title="Om du inte tidigare har registrerat något konto eller om du glömt dina användaruppgifter och inte kommer åt din tidigare registrerade e-postadress">Ny användare? Välkommen att öppna ett konto!</a></p>
                    </div>
                </div>
								
                <div class="bxContainer upcomingCogWorkCourses">
                    <div class="bxTop bxHeading">
                        <h3>Aktuella utbildningar i administrationsverktyget</h3>
                    </div>
                    <div class="bxContent personalizedOrgContent">

	<script type="text/javascript" src="https://minaaktiviteter.se/shop/shop.js"></script>

                    <table class="cwEvents">
                        <tr class="headerRow">
                            <th class="title" colspan="1"><span class="" id="eventBlock_1">Administratörsutbildningar</span></th>
                            <th class="onMediumScreenPlus cwDisplayDependencyOnChangeFollow_eventBlock_1 start">Start</th>
                            <th class="onMediumScreenPlus cwDisplayDependencyOnChangeFollow_eventBlock_1 time">Dag och tid</th>
                            <th class="onMediumScreenPlus cwDisplayDependencyOnChangeFollow_eventBlock_1 numberOfOccasions" title="Antal tillfällen"></th>
                            <th class="onMediumScreenPlus cwDisplayDependencyOnChangeFollow_eventBlock_1 price">Pris</th>
                            <th class="onMediumScreenPlus cwDisplayDependencyOnChangeFollow_eventBlock_1 place">Ort</th>
                            <th class="onMediumScreenPlus cwDisplayDependencyOnChangeFollow_eventBlock_1 instructors">Ledare</th>
                            <th class="onMediumScreenPlus cwDisplayDependencyOnChangeFollow_eventBlock_1 status noPrint">&nbsp;</th>
                            <th class="statusIcon icon onSmallScreenOnly noPrint cwDisplayDependencyOnChangeFollow_eventBlock_1">&nbsp;</th>
                        </tr>
                        <tr class="dataRow blockData_1 row_1 cwDisplayDependencyOnChangeFollow_eventBlock_1" title="Bokningen har stängt" onclick="openNewShopWin('https://minaaktiviteter.se/shop/?org=cw;event=41433;info=1');return false;">
                            <td class="title">
                                <a href="https://minaaktiviteter.se/shop/?org=cw;event=41433;info=1" title="Bokningen har stängt" onclick="openNewShopWin('https://minaaktiviteter.se/shop/?org=cw;event=41433;info=1');return false;" class="regLink">Administratörsutbildning Grund</a>
                                <div class="onSmallScreenOnly smallScreenEventSubTitle">
                                    <span title="Lör 14/5 ( om&nbsp;4&nbsp;dagar)">Start 14/5</span>.
                                    <span style="white-space: nowrap;">Lör 09.00-17.00</span><br />
                                    <span title="Instruktörer, ledare och tränare">Ledare Johan</span>.
                                </div>
                            </td>
                            <td class="onMediumScreenPlus start" title="Lör 14/5 ( om&nbsp;4&nbsp;dagar)">14/5</td>
                            <td class="onMediumScreenPlus time"><span style="white-space: nowrap;">Lör 09.00-17.00</span></td>
                            <td class="onMediumScreenPlus numberOfOccasions" title="Antal tillfällen"></td>
                            <td class="onMediumScreenPlus price">1400:-</td>
                            <td class="onMediumScreenPlus place">Stockholm</td>
                            <td class="onMediumScreenPlus instructors">Johan</td>
                            <td class="onMediumScreenPlus status noPrint"><a href="https://minaaktiviteter.se/shop/?org=cw;event=41433;info=1" title="Bokningen har stängt" onclick="openNewShopWin('https://minaaktiviteter.se/shop/?org=cw;event=41433;info=1');return false;" class="regLink">Info <img style="vertical-align: middle; margin-left: 0.50em;" src="https://minaaktiviteter.se/images/icons/availabilityGood.png" width="16" height="16" alt="God platstillgång" title="God platstillgång" /></a></td>
                            <td class="statusIcon icon onSmallScreenOnly noPrint"><a href="https://minaaktiviteter.se/shop/?org=cw;event=41433;info=1" title="Bokningen har stängt" onclick="openNewShopWin('https://minaaktiviteter.se/shop/?org=cw;event=41433;info=1');return false;" class="regIcon" style="text-decoration:none;"><span class="regIconText">»</span></a></td>
                        </tr>
                        <tr class="dataRow blockData_1 row_2 cwDisplayDependencyOnChangeFollow_eventBlock_1" title="Direktanmälan t.o.m. sön 15/5 08:44" onclick="openNewShopWin('https://minaaktiviteter.se/shop/?org=cw;event=41434;info=1');return false;">
                            <td class="title">
                                <a href="https://minaaktiviteter.se/shop/?org=cw;event=41434;info=1" title="Direktanmälan t.o.m. sön 15/5 08:44" onclick="openNewShopWin('https://minaaktiviteter.se/shop/?org=cw;event=41434;info=1');return false;" class="regLink">Administratörsutbildning Påbyggnad</a>
                                <div class="onSmallScreenOnly smallScreenEventSubTitle">
                                    <span title="Sön 15/5 ( om&nbsp;5&nbsp;dagar)">Start 15/5</span>.
                                    <span style="white-space: nowrap;">Sön 09.30-16.30</span><br />
                                    <span title="Instruktörer, ledare och tränare">Ledare Johan</span>.
                                </div>
                            </td>
                            <td class="onMediumScreenPlus start" title="Sön 15/5 ( om&nbsp;5&nbsp;dagar)">15/5</td>
                            <td class="onMediumScreenPlus time"><span style="white-space: nowrap;">Sön 09.30-16.30</span></td>
                            <td class="onMediumScreenPlus numberOfOccasions" title="Antal tillfällen"></td>
                            <td class="onMediumScreenPlus price">1400:-</td>
                            <td class="onMediumScreenPlus place">Stockholm</td>
                            <td class="onMediumScreenPlus instructors">Johan</td>
                            <td class="onMediumScreenPlus status noPrint"><a href="https://minaaktiviteter.se/shop/?org=cw;event=41434;info=1" title="Direktanmälan t.o.m. sön 15/5 08:44" onclick="openNewShopWin('https://minaaktiviteter.se/shop/?org=cw;event=41434;info=1');return false;" class="regLink">Info/Boka <img style="vertical-align: middle; margin-left: 0.50em;" src="https://minaaktiviteter.se/images/icons/availabilityGood.png" width="16" height="16" alt="God platstillgång" title="God platstillgång" /></a></td>
                            <td class="statusIcon icon onSmallScreenOnly noPrint"><a href="https://minaaktiviteter.se/shop/?org=cw;event=41434;info=1" title="Direktanmälan t.o.m. sön 15/5 08:44" onclick="openNewShopWin('https://minaaktiviteter.se/shop/?org=cw;event=41434;info=1');return false;" class="regIcon" style="text-decoration:none;"><span class="regIconText">»</span></a></td>
                        </tr>
                        <tr class="spacingRow cwDisplayDependencyOnChangeFollow_eventBlock_1">            <td class="title"></td>
                            <td class="onMediumScreenPlus start"></td>
                            <td class="onMediumScreenPlus time"></td>
                            <td class="onMediumScreenPlus numberOfOccasions"></td>
                            <td class="onMediumScreenPlus price"></td>
                            <td class="onMediumScreenPlus place"></td>
                            <td class="onMediumScreenPlus instructors"></td>
                            <td class="onMediumScreenPlus status noPrint"></td>
                            <td class="statusIcon icon onSmallScreenOnly noPrint"></td>
                        </tr>
                    </table>

                    </div>
                </div>

		<div class="bxContainer">
			<div class="bxTop bxHeading">
				<h3>Information till förbund, föreningar och företag</h3>
			</div>
			<div class="bxContent">

				<p>Mina Aktiviteter är byggt för att underlätta det administrativa arbetet inom företag, föreningar
				och andra organisationer,
				t ex genom att integrera kursadministration och webbanmälan med medlems- eller kundregister, fakturering, betallösningar
				med OCR-hantering och bankkoppling,
				flexibla rabatter, automatisterad bokföring,
				rapporter, grupphantering, meddelandehantering, licenshantering, kalendarium och mycket mera.</p>

				<p>Det krävs ingen installation av program, inga uppdateringar, inga egna
				säkerhetskopior och inget mejlande av
				information kors och tvärs. Genom en helt vanlig webbläsare kan alla nå den information
				och de verktyg de behöver och har behörighet till.</p>

				<p>En stor undersajt till MinaAktiviteter.se är <a href="https://dans.se/">Dans.se</a> som har fler verktyg och funktioner
				inriktade på dansverksamhet.</p>

				<p>Företag och föreningar är varmt välkomna att prova systemet utan kostnad</p>
				<p class="screenOnly"><a class="linkSmallIconLeft smallIconPageInt" href="oss/index.php">Mer information om kostnader och avtal</a></p>
			</div>
		</div>
<!--
		<div style="padding-right: 186px;">
			<div class="textBoxForLeft48pxIcon">
				<a href="public/about/news/">
					<img class="left48pxIcon" src="images/icons_48x48/news.png" width="48" height="48" alt="News" style="position: absolute; left: 8; top: -8" />
					<span class="readMore">Läs hela meddelandet</span>
				</a>
				<h3><a href="public/about/news/">Nytt 2011-07-19</a></h3>
				<ul style="padding: 0 1.50em; margin: 0;">
					<li><a href="public/about/news/#forms">Skapa egna anmälningsformulär med prisberäkningar</a></li>
					<li><a href="public/about/news/#checkin">Närvaroregistrering och automatisk incheckning med kortläsare</a></li>
					<li><a href="public/about/news/#dans_se">Ny webbplats dans.se för alla som söker efter dansaktiviteter</a></li>
				</ul>
			</div>
			<div class="textBoxForLeft48pxIcon">
				<a href="help/finance/tracked_balances/index.php">
				<img class="left48pxIcon" src="images/icons_48x48/news.png" width="48" height="48" alt="News" />
				<span class="readMore">Läs mer i handledningen</span> </a>
				<h3><a href="help/finance/tracked_balances/index.php">Nytt 2011-12-17</a></h3>
				<p><a href="help/finance/tracked_balances/index.php">När en individ blir antagen till en aktivitet kan systemet
				automatiskt kontrollera om deltagaren har pengar innestående på ett eller flera konton, exempelvis tillgodohavande,
				presentkort eller utbildningsfond. Hela eller delar av aktivitetsavgiften dras då från aktuella konton innan
				resterande belopp aviseras i samband med antagningsbeskedet.</a></p>
			</div>
		</div>
-->
	</div>

</div>


<div class="bodyFooter">
    <span><a href="http://cogwork.se/">&#169; Mina Aktiviteter 2016-05-10</a></span>
    <span><a href="mailto:info@minaaktiviteter.se">E-post info@minaaktiviteter.se</a></span>
</div>

</body>

</html>