@extends('layouts.app')
@section('title', 'Digitale toegang - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: #4fa58f">
            <x-icon name="digitale-toegang" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">Digitale toegang</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">&OpenCurlyDoubleQuote;Digitale toegang betekent dat mensen een
                toestel en een internetverbinding hebben om
                online te gaan. Maar ook andere factoren, zoals het aantal toestellen per gezin, de kwaliteit
                van de verbinding en toestellen, en de kostprijs spelen een grote rol.&CloseCurlyDoubleQuote; (Mediawijs,
                z.d.).</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: #dcefe9">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">Digitale toegang</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #4fa58f">
                <h3 class="text-lg font-bold">Onderzocht / Bevindingen</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>17% van de Vlamingen vanaf 18 jaar geeft aan dat er thuis onvoldoende schermen zijn
                        voor alle gezinsleden om te doen wat nodig is of verwacht wordt, terwijl 99% toegang
                        heeft tot minstens één verbonden toestel en tot internet (imec.digimeter, 2025).
                    </li>
                    <li>8% van de Vlamingen vanaf 18 jaar heeft thuis geen toegang tot een werkende
                        computer. Daarnaast geeft 17% aan minstens één extra computer/tablet nodig te
                        hebben. Bij mensen met een laag inkomen loopt dat laatste op tot 23% (imec.digimeter,
                        2025).
                    </li>
                    <li>Ongeveer 20% van de Vlamingen vanaf 18 jaar kan zich geen beter vast en mobiel
                        internet veroorloven. Bij mensen met een laag inkomen is dat ongeveer 35%. Bijna de
                        helft van de Vlamingen maakt zich zorgen over stijgende digitale kosten (imec.digimeter,
                        2025).
                    </li>
                    <li>92% van de Belgische huishoudens (16 tot 89 jaar) heeft thuis internet. Bij huishoudens
                        met een laag inkomen heeft 12% echter geen internet thuis (Barometer Digitale Inclusie,
                        2026).
                    </li>
                    <li>78% van de Belgische internetgebruikers (16–74 jaar) gebruikt meerdere soorten
                        toestellen om online te gaan (multigeconnecteerd). Bij internetgebruikers uit
                        huishoudens met een laag inkomen gebruikt 28% daarentegen uitsluitend een
                        smartphone. Dit kan het uitvoeren van complexe digitale taken bemoeilijken (Barometer
                        Digitale Inclusie, 2026).
                    </li>
                    <li>De kosten voor internet wegen zwaar op Belgische huishoudens met een laag inkomen.
                        Zij besteden gemiddeld €617 per jaar aan internetdiensten. Bij eenoudergezinnen loopt
                        dit op tot €841 per jaar. Omdat internet een basisbehoefte is geworden, is er weinig
                        ruimte om op deze kosten te besparen (Barometer Digitale Inclusie, 2026).
                    </li>
                    <li>Digitale toegang is meer dan alleen beschikken over een internetverbinding, geschikte
                        toestellen en de nodige software. De connectiviteit moet ook betaalbaar zijn om digitaal
                        te kunnen deelnemen (Van Leeuwen et al., 2026).
                    </li>
                    <li>20,4% van de 285 Vlaamse lokale besturen neemt digitale toegang (toestellen en
                        infrastructuur) op als onderdeel van hun digitaal-inclusiebeleid voor 2026–2031.
                        Voorbeelden hiervan zijn het aanbieden van uitleendiensten en publieke digitale toegang
                        (Mediawijs, 2026).
                    </li>
                    <li>Het Europese Quick-scan rapport stelt vast dat er geen duidelijke, breed gedragen
                        definitie bestaat van wat betaalbare digitale toegang precies betekent. Het beveelt aan
                        om die definitie samen met betrokkenen te ontwikkelen en noemt gesubsidieerde
                        internetverbindingen voor mensen met een laag inkomen als een mogelijke maatregel
                        (Van Leeuwen et al., 2026).
                    </li>
                    <li>42% van de Vlaamse respondenten geeft aan niet over de nodige apparatuur te
                        beschikken om persoonlijke datakluizen te gebruiken (Maes et al., 2024).
                    </li>
                    <li>Toegang tot internet wordt als noodzakelijk beschouwd om volwaardig deel te nemen
                        aan de samenleving. Het is nodig om contact te houden met vrienden en familie,
                        onderwijs te volgen, informatie over goederen, diensten en gezondheid op te zoeken,
                        digitale diensten te gebruiken (zoals itsme, internetbankieren, eBox), online afspraken te
                        maken bij overheidsdiensten en voor veel mensen ook om te kunnen werken (Storms et
                        al., 2025).
                    </li>
                    <li>Er is een verschil in toegang tot internet naargelang het inkomen: 89% van de belgische
                        gezinnen (16-74 jaar) met een laag inkomen beschikt over internet, tegenover 99% van
                        de gezinnen met een hoog inkomen (Storms et al., 2025).
                    </li>
                    <li>De smartphone is het meest voorkomende digitale toestel bij Belgische gezinnen (16–74
                        jaar): 91% bezit een smartphone, tegenover 69% een laptop, 36% een tablet en 14%
                        andere toestellen met internetverbinding, zoals een slimme televisie of smartwatch. Niet
                        alle digitale activiteiten zijn echter even gemakkelijk uit te voeren op een smartphone en
                        niet iedereen beschikt over een laptop of tablet (Storms et al., 2025).
                    </li>
                    <li>Mobiele connectiviteit is een belangrijke aanvulling op wifi, omdat wifi niet overal
                        beschikbaar of toegankelijk is. Een minimale mobiele internetverbinding (4G) wordt
                        daarom als onmisbaar beschouwd (Storms et al., 2025).
                    </li>
                    <li>Volgens de experten die de referentiebudgetten voor Belgische burgers opstelden,
                        behoren een eenvoudige smartphone, een mobiel data-abonnement (minstens 6 GB
                        data per maand) en een basisinternetabonnement tot de minimale digitale uitrusting
                        waarover iedere volwassene zou moeten beschikken (Storms et al., 2025).
                    </li>
                    <li>Onderzoek bij Belgische huishoudens (16-74 jaar) toont aan dat internetgebruikers met
                        meerdere toestellen vaker gebruikmaken van essentiële digitale diensten dan mensen
                        die alleen via een smartphone online gaan. Dit wijst op een groeiende digitale kloof
                        tussen beide groepen (Storms et al., 2025).
                    </li>
                    <li>Er is een verschil in de mogelijkheid om meerdere toestellen tegelijk met het internet te
                        verbinden naargelang het inkomen. Van de Belgische huishoudens (16-74 jaar) met een hoog inkomen kan
                        89% meerdere toestellen tegelijk verbinden, tegenover 66% bij huishoudens met een laag inkomen
                        (Storms et al., 2025).</li>
                    <li>Een computer of tablet is geschikter dan een smartphone voor activiteiten zoals het
                        volgen van een opleiding, het bekijken van video’s en films, het raadplegen van
                        digitale documenten en het lezen van krantenartikelen (Storms et al., 2025).
                    </li>
                    <li>De referentiebudgetten voorzien voor elk gezin een eenvoudige tablet als
                        noodzakelijke aanvulling op de smartphone, zodat alle gezinsleden comfortabel
                        digitaal kunnen deelnemen. De tablet heeft bij voorkeur voldoende opslagruimte
                        (128 GB), minstens 3 GB RAM-geheugen, een voldoende groot scherm van 11 à 12
                        inch, een camerafunctie en is maximaal 2 jaar oud (Storms et al., 2025).
                    </li>
                    <li>De referentiebudgetten voorzien voor elk gezin met schoolgaande kinderen een
                        eigen printer om gelijke onderwijskansen te bieden. Schooldocumenten, teksten en
                        opdrachten moeten regelmatig worden afgedrukt. Wanneer een gezin geen printer
                        heeft, kan dit een praktische belemmering vormen, zeker wanneer een printshop of
                        bibliotheek niet open is in de avonduren (Storms et al., 2025).
                    </li>
                    <li>Voor gezinnen zonder kinderen wordt een eigen printer niet noodzakelijk geacht.
                        Door de toenemende digitalisering kunnen documenten steeds vaker online worden
                        verstuurd en ondertekend. Een alternatieve printmogelijkheid buitenshuis, zoals een
                        printshop of bibliotheek, volstaat. In de referentiebudgetten wordt hiervoor een
                        klein printbudget voorzien (10 A4-pagina&#39;s per maand) (Storms et al., 2025).
                    </li>
                    <li>De referentiebudgetten houden voor gezinnen met schoolgaande kinderen rekening
                        met de kostprijs van een printer, twee inktpatronen en een pak printpapier per jaar.
                        Voor gezinnen met kinderen vanaf 12 jaar wordt dit verhoogd naar drie inktpatronen
                        per jaar, gezien de toenemende schoolvereisten (Storms et al., 2025).
                    </li>
                    <li>De referentiebudgetten voorzien voor gezinnen met studerende kinderen ouder dan
                        twaalf jaar of een extra inwonende volwassene een internetabonnement met een
                        hogere snelheid bij Telenet (Storms et al., 2025).
                    </li>
                    <li>Om ervoor te zorgen dat burgers volwaardig kunnen deelnemen aan de samenleving
                        moeten overheden inspanningen leveren die een menswaardig inkomen mogelijk
                        maken. Referentiebudgetten (REMI) geven een antwoord op hoeveel een
                        menswaardig inkomen bedraagt (Expertisecentrum Budget en Financieel Welzijn,
                        2024).</li>
                    <li>Armoede betekent dat mensen over onvoldoende middelen beschikken om deel te
                        nemen aan de dominante activiteiten en waarden in de samenleving. Het gaat dus
                        niet alleen om een tekort aan financiële middelen, maar ook om beperkte
                        maatschappelijke deelname. Mensen in armoede kunnen hierdoor op verschillende
                        domeinen sociaal uitgesloten worden en soms ook rechtstreeks discriminatie ervaren
                        (Expertisecentrum Budget en Financieel Welzijn, 2024).</li>
                </ul>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #4fa58f">
                <h3 class="text-lg font-bold">Hiaten</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Vlaamse onderzoeken bevragen vooral individuen in plaats van volledige
                        huishoudens. Hierdoor is onvoldoende duidelijk of een gezin over voldoende en
                        geschikte toestellen beschikt zodat elk gezinslid de nodige digitale taken kan
                        uitvoeren, zeker wanneer ze toestellen moeten delen. Ook is het onduidelijk of de
                        internetverbinding sterk genoeg is om alle gezinsleden tegelijkertijd online te laten
                        zijn. (Interviews: imec-mict-Ugent, VVSG, Mediawijs en Thomas More)
                    </li>
                    <li>Het hebben van een internetverbinding betekent niet automatisch dat deze overal in
                        huis goed werkt of voldoende is voor alle digitale taken en gelijktijdig gebruik door
                        meerdere gezinsleden. Er ontbreekt duidelijkheid over welke internetsnelheid,
                        stabiliteit, wifi-bereik en hoeveelheid mobiele data minimaal nodig zijn. Zo kan een
                        internetverbinding voldoende zijn om eenvoudige e-mails te bekijken, maar niet om
                        video&#39;s te streamen. (Interviews: Mediawijs, OCMW Brugge en Thomas More)
                    </li>
                    <li>Er is meer inzicht nodig in de betaalbaarheid en geschiktheid van
                        internetabonnementen voor kwetsbare huishoudens. Mensen weten niet altijd wat
                        hun abonnement precies inhoudt en of dit het best bij hun behoeften past.
                        Daarnaast is het onduidelijk of het huidige sociaal internettarief voldoende
                        mogelijkheden biedt om digitaal deel te nemen. (Interviews: OCMW Brugge en
                        Thomas More)
                    </li>
                    <li>Wie thuis niet over een computer, printer of internetverbinding beschikt, moet
                        ergens anders terechtkunnen om hiervan gebruik te maken, bijvoorbeeld in een
                        bibliotheek of bij een publiek printpunt. Er is meer onderzoek nodig naar waar
                        mensen hiervoor terechtkunnen en of deze plaatsen voldoende dichtbij liggen en
                        voldoende toegankelijk zijn qua openingsuren. Wanneer de afstand te groot is of de
                        openingsuren te beperkt zijn, kan dit een drempel vormen om van deze alternatieven
                        gebruik te maken. (Interview Imec-Ugent)
                    </li>
                    <li>Er is weinig onderzoek naar de gevolgen van beperkte toegang tot internet en
                        digitale toestellen voor mensen die langdurig in een gesloten voorziening verblijven
                        (vb. Een gevangenis). Verder onderzoek is nodig naar de gevolgen hiervan wanneer
                        ze terugkeren naar de samenleving en of er mogelijkheden zijn om hen tijdens hun
                        verblijf toch toegang te geven tot bepaalde digitale middelen. (Interview Mediawijs)</li>
                </ul>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #4fa58f">
                <h3 class="text-lg font-bold">Minimumstandaarden</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li></li>
                    <li>Elk huishouden beschikt over voldoende en geschikte digitale toestellen, zodat alle
                        gezinsleden de essentiële digitale taken kunnen uitvoeren. Daarbij wordt rekening
                        gehouden met de gezinssamenstelling, de leeftijd van de gezinsleden, doel en
                        regelmaat van gebruik (school, werk) en het eventueel delen van toestellen.
                    </li>
                    <li>Elk huishouden beschikt over minstens één werkende computer, laptop of tablet om
                        digitale taken uit te voeren waarvoor een smartphone niet volstaat
                        (multigeconnecteerd zijn).
                    </li>
                    <li>Elk huishouden heeft toegang tot een vaste internetverbinding die voldoende snel en
                        stabiel is om essentiële digitale taken uit te voeren en meerdere toestellen
                        tegelijkertijd te gebruiken.
                    </li>
                    <li>Iedere volwassene beschikt over mobiele internettoegang (minstens 4G) en een
                        mobiel data-abonnement van minimaal 6 GB per maand.
                    </li>
                    <li>De kosten voor digitale toestellen, internetabonnementen en mobiele data moeten
                        betaalbaar zijn voor iedereen. Voor kwetsbare huishoudens, zoals gezinnen met een
                        laag inkomen of eenoudergezinnen, moeten voldoende betaalbare oplossingen
                        beschikbaar zijn, bijvoorbeeld via sociale tarieven of gesubsidieerde
                        internetabonnementen.
                    </li>
                    <li>Iedere volwassene moet minimaal beschikken over een smartphone, mobiel data-
                        abonnement (min. 6 GB), een basisinternetabonnement en eventueel een tablet of
                        laptop (afhankelijk van leeftijd, doel, gezinssamenstelling).
                    </li>
                    <li>Elk gezin met schoolgaande kinderen moet minimaal beschikken over een eigen
                        printer, een pak printpapier en 2 inktpatronen (indien jonger dan 12 jaar) of 3
                        inktpatronen (indien ouder dan 12 jaar) per jaar.
                    </li>
                    <li>Elk gezin zonder schoolgaande kinderen moet minimaal beschikken over een klein
                        printbudget (10 A4-pagina&#39;s per maand).
                    </li>
                    <li>Ieder mens moet over voldoende middelen (een menswaardig inkomen) beschikken
                        om deel te kunnen nemen aan de dominante activiteiten en waarden in de
                        samenleving teneinde sociale uitsluiting en discriminatie tegen te gaan.
                    </li>
                    <li>Mensen die thuis niet over een computer, printer of internetverbinding beschikken,
                        moeten deze middelen op andere plaatsen kunnen gebruiken, zoals in bibliotheken
                        of publieke printpunten. Deze plaatsen moeten voldoende dichtbij en toegankelijk
                        zijn, met openingsuren die het mogelijk maken om er daadwerkelijk gebruik van te
                        maken.
                    </li>
                    <li>Mensen met een beperking of andere specifieke behoeften moeten toegang kunnen
                        krijgen tot aangepaste toestellen en hulpmiddelen die nodig zijn om digitaal te
                        kunnen deelnemen.
                    </li>
                </ul>
            </article>
        </div>
    </section>
@endsection
