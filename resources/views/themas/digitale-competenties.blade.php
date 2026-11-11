@extends('layouts.app')
@section('title', 'Digitale competenties - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: #f2b632">
            <x-icon name="digitale-competenties" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">Digitale competenties</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">&OpenCurlyDoubleQuote;Digitale competenties gaan over de kennis,
                vaardigheden en attitudes die nodig zijn om actief,
                kritisch en bewust online te gaan. Het gaat om een brede set: van basisvaardigheden zoals een e-mail
                versturen tot moeilijkere taken zoals phishing herkennen of privacy-instellingen
                beheren.&CloseCurlyDoubleQuote; (Mediawijs
                z.d.).</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: #fdf0cf">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">Digitale competenties</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #f2b632">
                <h3 class="text-lg font-bold">Onderzocht / Bevindingen</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>23% heeft moeite met digitale taal, 31% met digitale termen en 31% ervaart moeilijkheden
                        wanneer de lay-out of werking van een website/app verandert (Imec.digimeter. 2025).
                    </li>
                    <li>25% vreest soms fouten te maken die niet meer rechtgezet kunnen worden en 27% vermijdt
                        digitale technologie omdat men zich onvoldoende vertrouwd voelt (Imec.digimeter. 2025).
                    </li>
                    <li>83% heeft vertrouwen in het eigen vermogen om digitale vaardigheden aan te leren, maar
                        slechts 58% zegt de meest alledaagse digitale problemen zelfstandig te kunnen oplossen
                        (Imec.digimeter. 2025).
                    </li>
                    <li>In 2025 is 39% van de Belgen (16-74 jaar) digitaal kwetsbaar. Dit cijfer daalt nauwelijks
                        vergeleken met vroeger, omdat de technologische verwachtingen continu blijven stijgen. Als
                        je ook de kwetsbare 75-plussers meerekent, ligt het totale percentage met 42% nog hoger
                        (Barometer Digitale Inclusie. 2026).
                    </li>
                    <li>67% van de personen met maximaal lager secundair onderwijs is digitaal kwetsbaar,
                        vergeleken met 19% van de hoogopgeleiden. 41% van de werkzoekenden is digitaal
                        kwetsbaar. Zes op de tien werkzoekenden met een laag diploma hebben zwakke
                        vaardigheden (Barometer Digitale Inclusie. 2026).
                    </li>
                    <li>Vaardigheden zijn competenties om technologie doeltreffend, veilig en zelfstandig te
                        gebruiken. Omdat interfaces veranderen, vraagt ontwikkeling volgens de auteurs een
                        volgehouden investering die aansluit bij werkelijke noden. Zij bevelen een recht op
                        gesubsidieerd leeraanbod aan, toegekend op basis van een vaardigheidskader;
                        basisvaardigheden zouden toegang tot het aanbod bepalen, niet inkomen (Van Leeuwen, C.
                        et al. 2026).
                    </li>
                    <li>60,4% van de 285 lokale besturen vermeldt acties voor digitale competenties in de
                        meerjarenplannen 2026–2031; vaak basisvaardigheden, soms cyberveiligheid/AI.
                        Beleidsvermelding is geen meting van competentieniveau of voldoende vaardigheden
                        (Mediawijs. 2026).
                    </li>
                    <li>Speerpunt 1 wil het verwerven van digitale vaardigheden en kennis ondersteunen via
                        levenslang leren, onderwijs- en opleidingsaanbod aanpassen aan veranderende
                        arbeidsmarktnoden en digitale inclusie bevorderen (Digitaal Vlaanderen. 2025).
                    </li>
                    <li>Er bestaat zoiets als een digiscan. Een digiscan is een gestructureerde doorlichting
                        (inventarisatie) van de digitale situatie, vaardigheden en behoeften van een burger of
                        huishouden. Het wordt ingezet door sociale diensten (zoals het OCMW) om precies in kaart
                        te brengen waar iemand op digitaal vlak vastloopt en welke ondersteuning nodig is (OCMW
                        Brugge. 2026).

                    </li>
                    <li>Sommige mensen beschikken niet alleen over digitale vaardigheden, kennis of attitudes,
                        maar hebben ook te weinig kennis van hun eigen abonnementen. “Vaak zijn ze niet goed op
                        de hoogte van wat ze betaalden en dat facturen kunnen ingediend worden bij cultuur en
                        vrije tijdspraticipatie voor terugbetaling.” (OCMW Brugge. 2026).
                    </li>
                    <li>Slechts 56% schat de eigen kennis als voldoende in om datakluizen te gebruiken, en 66%
                        vindt het moeilijk om mee te blijven met alles wat op het internet gebeurt (Maes, M.,
                        Bourgeus, A., Van Damme, S., De Wolf, R. 2024).
                    </li>
                    <li>Niet iedereen heeft de nodige vaardigheden en ruimte om goedkopere tarieven en
                        pakketten op te zoeken. Dit vereist dat men zeer bedreven is in digitaal opzoekwerk,
                        verschillende websites kan raadplegen, kleine lettertjes kan lezen en hiervoor de tijd vindt
                        (Storms, B., Goedemé, T., &amp; Nisen, L. (Red.). 2025).
                    </li>
                    <li>De beschikbare informatie is vaak onvoldoende transparant, prijzen veranderen
                        voortdurend en het is moeilijk providers onderling te vergelijken. Reclame en
                        promoties zijn vaak misleidend en bieden geen duidelijke informatie over de totale
                        kosten (Storms, B., Goedemé, T., &amp; Nisen, L. (Red.). 2025).
                    </li>
                    <li>Meer dan 90% van de eerstelijnsmedewerkers (zoals onthaal-, bibliotheek- en
                        maatschappelijk werkers) krijgt minstens één keer per week te maken met digitale
                        vragen van burgers. Slechts 1% ontving er in de voorbije zes maanden geen enkele.
                        (Duran, W., Verplancke, J. 2024)</li>
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

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #f2b632">
                <h3 class="text-lg font-bold">Hiaten</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>De impact van software-updates op het verlies van zelfredzaamheid. Een update kan
                        opgebouwde digitale vaardigheden of handleidingen in één klap tenietdoen, wat leidt tot
                        angst, frustratie en uitsluiting. De digitale toegankelijkheid wordt meestal enkel getest bij de
                        lancering van een app, niet op de duurzaamheid/continuïteit bij updates. (Interview OCMW
                        Brugge)
                    </li>
                    <li>Geen &quot;Digital Native&quot;-automatisme bij jongeren: Jongeren gebruiken toestellen om in
                        connectie te staan met anderen (WhatsApp, Facebook), maar zodra ze voor school of
                        overheid nieuwe platformen moeten gebruiken (zoals Smartschool of Google Drive), stuiten
                        ze op een duidelijke drempel. Opgroeien in een digitale wereld betekent niet dat men
                        automatisch met administratieve software kan werken. (interview OCMW brugge)
                    </li>
                    <li>Metingen zoals de digimeter bevragen individuele volwassenen. Dit geeft een vertekend
                        beeld van de competentienoden binnen een volledig gezin of huishouden (bijv. de druk op
                        ouders die met meerdere schoolgaande kinderen digitale platformen moeten beheren).
                        (interview VVSG)
                    </li>
                    <li>Er zou ook moeten gekeken worden naar effectiviteit van het kunnen gebruiken zodat ze
                        effectief kunnen deelnemen (mag niche zijn maar moet aansluiten bij bepaalde nood vb. met
                        gezondheidsapps kunnen werken en weten dat het bestaat =&gt; de app moet voldoen aan
                        standaarden om inclusief te zijn) (interview Ugent)
                    </li>
                    <li>“Er zijn dingen die je doet online, bepaalde vaardigheden, je hebt bepaalde toegang, maar
                        welk doel bereik je daar nu effectief mee?” - Outcomes, wat zijn de gevolgen van
                        handelingen die de mensen kunnen doen. (Interview Mediawijs)</li>
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

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #f2b632">
                <h3 class="text-lg font-bold">Minimumstandaarden</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Norm van ‘levenslang leren’: Digitale vaardigheden zouden in de toekomst eventueel als
                        norm en budgetpost ingerekend kunnen worden onder de reeds bestaande korf. Onder
                        ‘levenslang leren’ wordt begrepen dat er middelen of opleidingen worden voorzien om
                        vaardig te worden en te blijven. (Referentiebudgetten)</li>
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
