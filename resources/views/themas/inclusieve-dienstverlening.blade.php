@extends('layouts.app')
@section('title', 'Inclusieve dienstverlening - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: #c8403d">
            <x-icon name="inclusieve-dienstverlening" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">Inclusieve dienstverlening</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">“Inclusion by design betekent dat digitale diensten zo worden
                ontworpen dat
                iedereen ze kan gebruiken. Denk aan duidelijke taal, logische navigatie,
                toegankelijkheid voor mensen met een beperking …” (Mediawijs, z.d.).</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: #f6dad9">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">Inclusieve
                dienstverlening</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #c8403d">
                <h3 class="text-lg font-bold">Onderzocht / Bevindingen</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>87% van de Vlamingen boven de 18 jaar heeft al eens online
                        overheidsdiensten gebruikt, maar slechts 37% vindt de websites van de
                        Vlaamse overheid duidelijk en toegankelijk. Bovendien denkt slechts 33%
                        zaken snel en efficiënt online te kunnen regelen (imec.digimeter, 2025).
                    </li>
                    <li>31% van de Vlamingen ouder dan 18 jaar ervaart moeilijkheden wanneer de
                        lay-out of werking van een app of website verandert. Daarnaast heeft 10%
                        hulp nodig bij het zoeken van informatie op websites van de Vlaamse overheid
                        (imec.digimeter, 2025).
                    </li>
                    <li>57% van de Vlamingen ouder dan 18 jaar vindt dat dienstverleners vaak
                        minder gemakkelijk bereikbaar zijn door de digitalisering (imec.digimeter,
                        2025).
                    </li>
                    <li>De meerderheid van de Vlamingen ouder dan 18 jaar verkiest hybride
                        dienstverlening, waarbij digitale en niet-digitale mogelijkheden naast elkaar
                        blijven bestaan. Dat geldt bijvoorbeeld voor burgerzaken (58%),
                        gezondheidsgegevens (50%) en bankzaken (50%). Digitale dienstverlening
                        mag de fysieke of telefonische toegang niet zomaar vervangen
                        (imec.digimeter, 2025).
                    </li>
                    <li>43% van de Vlamingen ouder dan 18 jaar voelt zich verplicht om digitale
                        technologie te gebruiken (imec.digimeter, 2025).
                    </li>
                    <li>Het aanbod om zaken te regelen via een fysiek loket of telefonisch wordt
                        steeds beperkter. Voorbeelden zijn het vervangen van een fysieke
                        schoolagenda door Smartschool in Vlaanderen, de afbouw van bemande
                        loketten en ticketautomaten in trein- en metrostations, het sluiten of beperken
                        van bankloketten, gemeentelijke loketten of loketten van sociale
                        dienstverleners zoals ziekenfondsen of vakbonden (Storms et al., 2025).
                    </li>
                    <li>Websites en digitale toepassingen moeten toegankelijk en bruikbaar zijn voor
                        iedereen, waaronder personen met een beperking, mensen met lage
                        geletterdheid, beperkte taalvaardigheid of beperkte digitale vaardigheden.
                        Hiervoor volstaat het niet om alleen aan technische toegankelijkheidsnormen
                        te voldoen. Ook monitoring, begeleiding en handhaving zijn nodig. Daarnaast moeten burgers
                        geïnformeerd worden over hun rechten en de mogelijkheden
                        om klachten in te dienen (Van Leeuwen et al., 2026).
                    </li>
                    <li>57,9% van de lokale besturen besteedt in het meerjarenplan aandacht aan
                        toegankelijke en gebruiksvriendelijke digitale dienstverlening. Genoemde
                        acties zijn onder meer het gebruik van klare taal en het uitvoeren van
                        toegankelijkheidstoetsen (Mediawijs, 2026).
                    </li>
                    <li>De Vlaamse overheid en lokale besturen willen gebruikers centraal stellen bij
                        het ontwerpen van inclusieve en gebruiksvriendelijke diensten en processen
                        (Vlaamse overheid, 2025).
                    </li>
                    <li>Het Vlaamse gelijkekansenbeleid benoemt vier beleidsrichtingen voor digitale
                        inclusie: toegang tot internet, hardware en software versterken; digitale
                        vaardigheden versterken; een toegankelijk netwerk voor digitale vragen
                        uitbouwen; en digitale informatie en dienstverlening gebruiksvriendelijk en
                        toegankelijk maken (Decreet van 10 juli 2008, art. 6, § 2, 5° en art. 14septies).
                    </li>
                    <li>Toegankelijkheid zonder digitale interactie gaat over beschikbaarheid én
                        kwaliteit van niet-digitale trajecten voor wie niet digitaal kan of wil handelen.
                        Een volwaardige omnichannel dienstverlening is nodig, waarbij burgers zonder
                        extra kosten tussen digitale en niet-digitale kanalen kunnen wisselen, met
                        behoud van een gelijkwaardige dienstverlening (Van Leeuwen et al., 2026).
                    </li>
                    <li>Minister Crevits stelt dat mensen fysiek ergens terecht moeten kunnen met
                        digitale vragen. Voor deze fysieke ondersteuning verwijst ze naar bestaande
                        initiatieven zoals digibanken en digipunten. Het gaat dus niet over een
                        algemeen recht om alle overheidsdiensten offline af te handelen (Vlaams
                        Parlement, 2026).
                    </li>
                    <li>Het gebruik van essentiële digitale diensten in België neemt globaal toe. Toch
                        maakt 58% van de smartphone-only gebruikers en van de kortgeschoolden
                        geen gebruik van e-gezondheidsdiensten. Daarnaast gebruikt 36% van de
                        mensen met zwakke digitale vaardigheden geen e-administratiediensten
                        (Barometer Digitale Inclusie, 2026).
                    </li>
                    <li>Moeilijkheden bij het gebruik van onlinediensten liggen niet alleen aan de
                        digitale vaardigheden van burgers, maar ook aan onbegrijpelijke procedures.
                        Daarom is het belangrijk te investeren in toegankelijke, gebruikersgerichte
                        dienstverlening (Barometer Digitale Inclusie, 2026).
                    </li>
                    <li>De REMI-tool reikt maatschappelijk werkers een wetenschappelijk kader aan
                        om op maat van iedere cliëntsituatie, en vertrekkend vanuit gemeenschappelijke
                        criteria een diagnose van behoeftigheid te maken. Hierdoor kunnen
                        ontoelaatbare verschillen tussen en binnen OCMW’s worden voorkomen
                        (Expertisecentrum Budget en Financieel Welzijn, 2024).
                    </li>
                    <li>Hoe inclusief is uw digitaal product? De Digital Inclusion By Design Index tool
                        helpt onderzoeken hoe toegankelijk een digitale dienst, website, applicatie of
                        andere digitale toepassing is. Aan de hand van een vragenlijst worden zeven
                        toegankelijkheidscriteria overlopen. Na afloop ontvangt de gebruiker een
                        rapport met de resultaten (DigitAll, z.d.).</li>
                </ul>
                <footer
                    class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Barometer Digitale Inclusie 2024</span>
                    <span class="flex gap-1">
                        <span title="Veldonderzoek"
                            class="w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                        <span title="Literatuurstudie"
                            class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #c8403d">
                <h3 class="text-lg font-bold">Hiaten</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Dat een digitale dienst beschikbaar is of gebruikt wordt, betekent niet
                        automatisch dat mensen deze begrijpen of er vlot mee kunnen werken. Er is
                        meer onderzoek nodig naar waar mensen tijdens het gebruik vastlopen, bij
                        welke digitale diensten dit gebeurt en welke bevolkingsgroepen hierbij de
                        meeste moeilijkheden ervaren. (Interview OCMW Brugge)
                    </li>
                    <li>Het opnemen van toegankelijkheid in beleidsplannen of charters betekent niet
                        automatisch dat digitale diensten in de praktijk voor iedereen toegankelijk zijn.
                        Er is meer onderzoek nodig naar hoe overheden en dienstverleners deze
                        richtlijnen uitvoeren, hoe dit gecontroleerd wordt en of gebruikers
                        daadwerkelijk verbetering ervaren. (Interview VVSG)
                    </li>
                    <li>Chatbots en automatische telefoonsystemen kunnen een extra drempel
                        vormen voor mensen die hun hulpvraag moeilijk kunnen verwoorden of
                        behoefte hebben aan persoonlijk contact. Er is meer inzicht nodig in hoe
                        gemakkelijk mensen een medewerker kunnen bereiken wanneer
                        geautomatiseerde hulp niet volstaat, welke bevolkingsgroepen hierbij de
                        grootste drempels ondervinden en welke alternatieven voor persoonlijk contact
                        beschikbaar moeten blijven. (Interview OCMW Brugge)
                    </li>
                    <li>Wanneer websites en apps regelmatig veranderen van uitzicht of werking,
                        kunnen mensen die eerder geleerd hebben ermee te werken opnieuw
                        moeilijkheden ondervinden. Er is meer onderzoek nodig naar welke
                        veranderingen precies problemen veroorzaken, welke gebruikers hierdoor
                        moeilijkheden ervaren en hoe hiermee rekening gehouden kan worden bij
                        toekomstige aanpassingen aan websites en apps. (Interview OCMW Brugge)
                    </li>
                    <li>Bij het gebruik van digitale toepassingen, zoals datakluizen, is het belangrijk
                        dat mensen begrijpen welke persoonsgegevens verzameld worden en
                        waarvoor deze gebruikt worden. Er is meer onderzoek nodig naar hoe
                        duidelijk deze informatie momenteel is en welke concrete richtlijnen nodig zijn
                        om ervoor te zorgen dat mensen de uitleg begrijpen en de toepassingen
                        gemakkelijk kunnen gebruiken.
                    </li>
                    <li>Digitale diensten zijn niet altijd voldoende afgestemd op de diverse behoeften
                        van gebruikers, zoals mensen met een visuele, auditieve, motorische of cognitieve beperking en
                        mensen die moeite hebben met de Nederlandse taal
                        of administratief jargon. Er is meer onderzoek nodig naar de drempels die
                        deze gebruikers ervaren en naar hoe digitale diensten beter kunnen inspelen
                        op hun verschillende toegankelijkheids- en taalbehoeften.</li>
                </ul>
                <footer
                    class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Barometer Digitale Inclusie 2024</span>
                    <span class="flex gap-1">
                        <span title="Literatuurstudie"
                            class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #c8403d">
                <h3 class="text-lg font-bold">Minimumstandaarden</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Websites en digitale diensten van overheden moeten duidelijk, toegankelijk en
                        gebruiksvriendelijk zijn (vb. eenvoudige structuur, zo weinig mogelijk klikken
                        nodig), zodat burgers zelfstandig en efficiënt zaken online kunnen regelen.
                    </li>
                    <li>Onlinediensten moeten gebruikmaken van begrijpelijke taal en eenvoudige
                        procedures, zodat burgers de aangeboden informatie begrijpen en hun zaken
                        gemakkelijk kunnen regelen.
                    </li>
                    <li>Veranderingen aan de lay-out of werking van websites en apps voor
                        essentiële diensten moeten zoveel mogelijk beperkt worden. Bij noodzakelijke
                        wijzigingen, moeten duidelijke en korte instructies worden voorzien, zodat ze
                        zelfstandig de informatie of diensten die ze nodig hebben kunnen terugvinden.
                    </li>
                    <li>Websites en digitale toepassingen moeten toegankelijk en bruikbaar zijn voor
                        iedereen, dus ook voor mensen met een beperking, lage geletterdheid,
                        beperkte taalvaardigheid of beperkte digitale vaardigheden. De
                        toegankelijkheid moet regelmatig geëvalueerd worden en waar nodig
                        verbeterd.
                    </li>
                    <li>Overheidsdiensten moeten gebruikers met uiteenlopende achtergronden,
                        vaardigheden en ondersteuningsbehoeften betrekken bij het ontwerpen,
                        testen en verbeteren van hun dienstverlening, zodat deze inclusief en
                        gebruiksvriendelijk is.
                    </li>
                    <li>Hybride dienstverlening moet beschikbaar zijn voor essentiële diensten, zoals
                        burgerzaken, bankzaken en gezondheidsdiensten. Digitale en niet-digitale
                        dienstverlening (vb. fysieke of telefonische toegang) moeten naast elkaar
                        blijven bestaan. Burgers moeten zonder extra kosten en met behoud van een
                        gelijkwaardige dienstverlening kunnen kiezen tussen deze kanalen.
                    </li>
                    <li>Een volwaardige omnichannel dienstverlening moet mogelijk zijn. De
                        verschillende dienstverleningskanalen moeten op elkaar afgestemd zijn, zodat
                        burgers vlot kunnen wisselen tussen digitale, telefonische en fysieke
                        dienstverlening, zonder informatie opnieuw te moeten verstrekken of hun
                        aanvraag opnieuw te moeten starten.

                    </li>
                    <li>Er moeten voldoende gemakkelijk toegankelijke niet-digitale alternatieven zijn
                        waar burgers nog fysieke en telefonische ondersteuning kunnen krijgen vb.
                        Digibanken en digipunten.
                    </li>
                    <li>Digitale toepassingen (vb. Datakluizen) moeten op een transparante,
                        begrijpelijke en toegankelijke manier communiceren welke persoonsgegevens
                        worden verzameld en waarvoor deze worden gebruikt, zodat iedereen
                        geïnformeerde keuzes kan maken.</li>
                </ul>
                <footer
                    class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: MDLS</span>
                    <span class="flex gap-1">
                        <span title="Literatuurstudie"
                            class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>
        </div>
    </section>

    <section class="mt-6 flex justify-center items-center gap-6 text-sm" aria-label="Legenda methodologie">
        <span class="flex items-center gap-2"><span
                class="w-6 h-6 rounded-full bg-green-600 text-white flex items-center justify-center"><x-icon name="check"
                    class="w-4 h-4" /></span>Veldonderzoek</span>
        <span class="text-slate-400">|</span>
        <span class="flex items-center gap-2"><span
                class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon name="check"
                    class="w-4 h-4" /></span>Literatuurstudie</span>
    </section>
@endsection
