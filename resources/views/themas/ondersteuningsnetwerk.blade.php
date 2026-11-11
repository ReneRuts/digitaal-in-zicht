@extends('layouts.app')
@section('title', 'Ondersteuningsnetwerk - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: #2f4a78">
            <x-icon name="ondersteuningsnetwerk" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">Ondersteuningsnetwerk</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">Wanneer mensen zichzelf digitaal niet kunnen navigeren of als ze
                stuiten op complexe systemen,
                keren ze zich vaak tot anderen. Deze dimensie draait om het netwerk waarop iemand kan terugvallen:
                dit omvat zowel informele hulp (familie, vrienden, buren) als formele hulpbronnen (Digibanken,
                OCMW, bibliotheken).</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: #d9e0ee">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">Ondersteuningsnetwerk</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #2f4a78">
                <h3 class="text-lg font-bold">Onderzocht / Bevindingen</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>67% kan voor digitale vragen terecht bij vrienden of familie, 44% gebruikt
                        zoekmachines/YouTube, 29% generatieve AI en 4% maakt gebruik van Digipunten
                        (Imec.digimeter.2025).</li>
                    <li>60% fungeert zelf als digitale hulplijn voor anderen: 60% kan terecht bij partner/familie, 32%
                        bij vrienden/buren/kennissen en 24% bij collega’s (Imec.digimeter.2025).</li>
                    <li>10% heeft ondersteuning van vrienden of familie nodig bij online financiële transacties: bij 18-
                        24-jarigen heeft 17% ondersteuning nodig. Bij 75-plussers komt dit vaker voor, maar niet
                        uitsluitend (Imec.digimeter.2025).</li>
                    <li>Bijna één op de drie gebruikers (28%) vraagt een derde partij om hulp bij online administratie.
                        Dit stijgt naar 45% bij personen van buiten de EU en 40% bij personen met maximaal een
                        diploma secundair onderwijs (Barometer Digitale inclusie. 2026).</li>
                    <li>De partner, familie en directe sociale omgeving zijn de allerbelangrijkste bronnen van hulp.
                        Hoger opgeleiden hebben een breder netwerk (ook collega’s/vrienden), terwijl formele
                        structuren (digipunten) algemeen weinig gebruikt worden (Barometer Digitale inclusie. 2026).</li>
                    <li>Ondersteuning is menselijke/sociale hulp bij concrete gebruiksproblemen op het moment dat
                        ze zich voordoen: ze verschilt van algemene vaardigheidstraining. De auteurs bevelen aan
                        begeleide toegang als afdwingbaar recht te verankeren, digipunten te professionaliseren en
                        leren tijdens begeleiding optioneel te houden: niet iedereen wil digitale taken zelf leren
                        uitvoeren (Van Leeuwen, C. et al. 2026).</li>
                    <li>52,6% van lokale besturen vermeldt ondersteuning bij digitale toestellen/toepassingen in het
                        plan: voorbeelden zijn digipunten, digibanken en persoonlijke begeleiding. Dit telt
                        beleidsvermeldingen, niet het aantal bereikte burgers of de kwaliteit van hulp
                        (Mediawijs.2026).</li>
                    <li>Hulp- en dienstverleners die actief handelen beantwoorden hulpvragen op een correcte
                        manier en anticiperen op mogelijke onderbescherming op andere domeinen. De burger krijgt
                        dus niet alleen een antwoord op de vraag die hij stelde, maar ook informatie over andere
                        vormen van hulp- en steunverlening waarop hij en zijn gezin mogelijk aanspraak kunnen
                        maken (Mediawijs. 2026).</li>
                    <li>We spreken van proactief handelen als de vraag niet van de burger komt, maar als het
                        initiatief uitgaat van de hulp- of dienstverleners. Zij zetten stappen om ervoor te zorgen dat
                        sociale correcties worden toegepast door proactief onderbescherming op te sporen, burgers
                        te informeren en de realisatie van automatische rechtentoekenning mogelijk te maken vb:
                        onlline tool Remini om zelf na te gaan of financieel aanvullende steun mogelijk is, sociale
                        gidsen die OCMW-cliënten begeleiden bij opnemen van hun rechten, Maatschappelijk werkers van OCMW
                        staan op de markt om hun aanbod en dienstverlening bekend te maken
                        (Thomasmore. 2024).</li>
                    <li>Outreachend werken verwijst naar laagdrempelige werkvormen waarbij sociale professionals
                        buiten de muren van de organisatie werken. Hiermee stappen ze in de leefwereld van mensen
                        in maatschappelijk kwetsbare posities om zo proactief onderbescherming aan te pakken en/of
                        vermaatschappelijking vorm te geven (Thomasmore. 2024).</li>
                    <li>Ondersteuning moet plaatsvinden in de vertrouwde thuisomgeving. Alleen daar worden
                        netwerkobstakels (zoals ontbrekende wifi, verouderde bekabeling of verkeerde
                        modemlocaties) én de werkelijke omgang met toestellen zichtbaar (Interview OCMW Brugge).</li>
                    <li>Uit onderzoek naar Digibanken blijkt dat jongeren hulpvragen vaak niet durven te stellen in
                        hun eigen netwerk omdat ze denken &quot;ik ben jonger, ik moet mee zijn&quot;. De angst dat hun
                        gebrek aan vaardigheden geridiculiseerd wordt, blokkeert de informele hulpvraag (Interview
                        Imec Ugent).</li>
                </ul>
                <footer
                    class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Digimeter 2024</span>
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

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #2f4a78">
                <h3 class="text-lg font-bold">Hiaten</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Tevredenheid over de ondersteuning die de mensen krijgen. &OpenCurlyDoubleQuote;De meeste mensen halen de
                        hulp uit hun nabije omgeving. In hoeverre zijn ze daar tevreden over die hulp, in hoeverre
                        leren ze daar effectief iets uit of betekent dat gewoon dat de digitale handeling, die ze moeten
                        stellen, dat die gebeurt maar als ze het de volgende keer opnieuw met hulp moeten doen, een
                        keer daarna ook nog een keer.&CloseCurlyDoubleQuote; (Interview mediawijs)</li>
                    <li>De overheid neigt ertoe om fysieke dienstverlening af te wentelen op vrijwilligers (bijv. in
                        bibliotheken). Vrijwilligers hebben echter continu ondersteuning, vorming en een betaalde
                        coördinator nodig. Zonder coördinatie sijpelt het aanbod binnen enkele jaren leeg (Interview
                        VVSG).</li>
                    <li>Bestaande metingen (zoals de Imec Digimeter) bevragen individuele volwassenen. Hierdoor
                        blijven de ondersteuningsnoden en de verdeling van middelen/toestellen binnen een volledig
                        gezin/huishouden onzichtbaar.</li>
                    <li>Ondersteuning betekent niet alleen mensen dwingen digitaal te worden (met het risico op
                        digitale stress, verslaving of 2-step authenticatie verplichtingen), maar ook het garanderen van
                        een volwaardig niet-digitaal netwerk voor wie het niet kan of wil (Interview VVSG).</li>
                    <li>Vaak vormt de stap naar formele hulpverlening/ondersteuning zelf ook een drempel waar
                        weinig rekening mee wordt gehouden.</li>
                    <li>De referentiebudgetten werken met de aanname dat burgers in goede gezondheid verkeert,
                        zelfredzaam zijn en budgettair vaardig zijn. Burgers die een beperkt informeel
                        ondersteuningsnetwerk hebben of cognitieve/digitale drempels ervaren, vallen buiten deze
                        basisnorm en hebben in de praktijk juist méér financiële en menselijke ondersteuning nodig
                        (Interview Thomas More).</li>
                </ul>
                <footer
                    class="mt-6 pt-4 border-t border-slate-200 flex items-center justify-between text-sm text-slate-500">
                    <span>Bron: Digimeter 2024</span>
                    <span class="flex gap-1">
                        <span title="Literatuurstudie"
                            class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center"><x-icon
                                name="check" class="w-4 h-4" /></span>
                    </span>
                </footer>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #2f4a78">
                <h3 class="text-lg font-bold">Minimumstandaarden</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Een stabiel netwerk van fysieke inlooppunten in de buurt (onafhankelijk van tijdelijke
                        projectsubsidies) voor continue vragen en updates. Met andere woorden dat digipunten blijven
                        bestaan.</li>
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
