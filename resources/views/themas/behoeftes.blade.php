@extends('layouts.app')
@section('title', 'Behoeftes - Digitaal in Zicht')
@section('content')
    <section class="flex items-center gap-2">
        <div class="md:ml-40 w-30 h-30 rounded-full flex items-center justify-center text-white shrink-0"
            style="background: #e0617f">
            <x-icon name="behoeftes" class="w-20 h-20" />
        </div>
        <div class="flex-1 text-center pr-5 md:pr-20">
            <h1 class="text-3xl font-bold text-diz-brand">Behoeftes</h1>
            <p class="mt-2 text-slate-600 max-w-2xl mx-auto">Digitale behoeftes gaan over de concrete ondersteuning,
                toegankelijkheid en
                randvoorwaarden die burgers en gezinnen nodig hebben om zonder drempels deel te
                kunnen nemen aan de digitale samenleving.</p>
        </div>
    </section>

    <section class="mt-6 rounded-3xl p-6 md:p-6" style="background: #fbdfe7">
        <h2 class="text-2xl font-bold text-diz-brand mb-6"><span class="text-3xl text-diz-ink">Behoeftes</span>
            - Gevonden informatie &amp; onderzoek</h2>
        <div class="grid gap-6 lg:grid-cols-3">
            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #e0617f">
                <h3 class="text-lg font-bold">Onderzocht / Bevindingen</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>64% van de ouders vindt de eigen digitale vaardigheden voldoende om hun kinderen de
                        nodige digitale ondersteuning te bieden.
                    </li>
                    <li>De Digimeter bevraagt individuele volwassenen en stelt dat de resultaten niet zomaar
                        generaliseerbaar zijn naar het niveau van gezinnen/huishoudens.
                    </li>
                    <li>De onderzoekers bevelen aan het leeraanbod aan te passen aan de werkelijke behoeften en
                        levensomstandigheden van digitaal kwetsbare personen (bijv. kortere lessenreeksen, buiten
                        werkuren) en consultaties met kwetsbare profielen en organisaties te organiseren.
                        Algemeen moet regelgeving via maatschappelijke consultatie aansluiten op leefwereld en
                        noden.
                    </li>
                    <li>We weten dat niet-gebruikers zich uitgesloten voelen, dat kwetsbare burgers hulp vragen
                        aan familie, en maatschappelijk werkers signaleren zware problemen met administratie. Er
                        is echter weinig inzicht in de tactieken en betekenis die mensen zelf aan hun niet-gebruik
                        geven.
                    </li>
                    <li>Datakluizen maken het makkelijker om belangrijke taken te voltooien (58%) en sneller te
                        vervullen (64%); 62% wil uitleg over hoe een organisatie hun data gebruikt.
                    </li>
                    <li>46% wil duidelijke en stapsgewijze instructies over veilig datadelen; 24% voelt zich
                        comfortabeler als het delen van data minder complex is.</li>
                </ul>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #e0617f">
                <h3 class="text-lg font-bold">Hiaten</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Er is onvoldoende inzicht in hoe de concrete digitale behoeften van verschillende
                        gezinsleden en specifieke huishoudtypes gezamenlijk in kaart gebracht kunnen worden;
                        individuele metingen volstaan niet om een heel gezin in kaart te brengen.
                    </li>
                    <li>Het is onduidelijk in hoeverre ouders daadwerkelijk in staat zijn om alle concrete
                        schoolplatformen of taken te ondersteunen, aangezien onderzoeken zich momenteel vooral
                        baseren op de eigen inschatting van ouders.
                    </li>
                    <li>Er is weinig kwalitatief inzicht in de persoonlijke tactieken en de eigen betekenis die burgers
                        zelf geven aan hun niet-gebruik van digitale middelen; de directe visie van de burger
                        ontbreekt.
                    </li>
                    <li>Het ontbreekt aan concrete, opgelegde richtlijnen voor inclusief ontwerp (zoals bij
                        datakluizen) en er is onvoldoende data over welke specifieke burgers daadwerkelijk
                        deelnemen aan co-creatie.</li>
                </ul>
            </article>

            <article class="bg-white rounded-xl p-6 shadow-sm flex flex-col border-t-4" style="border-color: #e0617f">
                <h3 class="text-lg font-bold">Minimumstandaarden</h3>
                <ul class="mt-4 space-y-2 list-disc pl-5 flex-1">
                    <li>Vorming en leeraanbod moeten standaard worden aangepast aan de
                        levensomstandigheden van digitaal kwetsbare personen (bijv. via kortere lessenreeksen of
                        lessen buiten de werkuren).
                    </li>
                    <li>Regelgeving en nieuw beleid dienen te steunen op maatschappelijke consultatie en
                        participatief ontwerp (co-creatie) waarbij kwetsbare profielen direct betrokken worden.
                    </li>
                    <li>Het ontwerp van digitale interfaces (zoals datakluizen) moet verplicht toegankelijk, minder
                        complex en voorzien zijn van duidelijke, stapsgewijze instructies.
                    </li>
                    <li>Organisaties moeten standaard volledige transparantie en begrijpelijke uitleg bieden over
                        hoe de data van gebruikers wordt ingezet.</li>
                </ul>
            </article>
        </div>
    </section>
@endsection
