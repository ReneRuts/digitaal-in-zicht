<?php

namespace Database\Seeders;

use App\Models\Dimension;
use Illuminate\Database\Seeder;

/**
 * VOORBEELDTEKSTEN: vervang door de definitieve inhoud (zie HERVATTEN.md).
 * methods: field = veldonderzoek (groen vinkje), literature = literatuurstudie (blauw vinkje)
 */
class DimensionSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'digitale-toegang',
                'Digitale toegang',
                'green',
                1,
                1,
                'Korte uitleg over wat er met digitale toegang bedoeld wordt, gericht op inclusie. Hier komt een toelichting over de toegang tot hardware, internet en de nodige omgevingsfactoren om digitaal actief te kunnen zijn.',
                'Barometer Digitale Inclusie 2024',
                ['Een deel van de bevolking mist een geschikt apparaat of een betaalbare internetverbinding.', 'Toegang verschilt sterk naar inkomen, leeftijd en opleidingsniveau.', 'Een smartphone alleen volstaat vaak niet voor complexe digitale taken.'],
                ['Weinig zicht op de kwaliteit en stabiliteit van verbindingen in de praktijk.', 'Beperkte data over de kosten van onderhoud, vervanging en abonnementen.'],
                ['Elk huishouden heeft toegang tot een geschikt apparaat.', 'Een betaalbare, stabiele internetverbinding is beschikbaar.', 'Openbare, gratis toegangspunten zijn in de buurt aanwezig.']
            ],
            [
                'kennis-vaardigheden',
                'Kennis & vaardigheden',
                'yellow',
                5,
                2,
                'Beschikken over de kennis en vaardigheden om digitale middelen veilig, zelfstandig en doelgericht te gebruiken.',
                'Digimeter 2024',
                ['Basisvaardigheden zoals e-mailen en online formulieren invullen zijn niet voor iedereen vanzelfsprekend.', 'Veiligheids- en privacykennis blijft achter bij het dagelijks gebruik.', 'Vaardigheden nemen af bij oudere leeftijdsgroepen.'],
                ['Weinig onderzoek naar het onderhouden van vaardigheden over tijd.', 'Beperkt inzicht in de effectiviteit van bestaande cursussen.'],
                ['Iedereen kan zelfstandig basisdiensten online gebruiken.', 'Laagdrempelig leeraanbod is beschikbaar in de eigen omgeving.', 'Kennis over online veiligheid maakt deel uit van dit aanbod.']
            ],
            [
                'behoeftes',
                'Behoeftes',
                'pink',
                4,
                4,
                'Inzicht in de verschillende behoeften van doelgroepen bij het gebruik van digitale middelen en diensten.',
                'Media & Samenleving (M&S) rapport',
                ['Behoeften verschillen per doelgroep, zoals ouderen, mensen met een beperking en nieuwkomers.', 'Persoonlijke begeleiding wordt door veel mensen als voorwaarde genoemd.'],
                ['Doelgroepen worden vaak als één groep onderzocht, waardoor verschillen verdwijnen.', 'Weinig onderzoek waarin mensen zelf hun behoeften formuleren.'],
                ['Digitale diensten worden ontworpen met en voor diverse doelgroepen.', 'Er blijft altijd een niet-digitaal alternatief beschikbaar.']
            ],
            [
                'inclusieve-dienstverlening',
                'Inclusieve dienstverlening',
                'red',
                3,
                5,
                'Digitale dienstverlening door overheid en organisaties die toegankelijk, begrijpelijk en voor iedereen bruikbaar is.',
                'Barometer Digitale Inclusie 2024',
                ['Digitale formulieren en portalen zijn niet altijd toegankelijk of begrijpelijk.', 'Veel diensten zijn alleen nog online beschikbaar.'],
                ['Beperkt inzicht in hoe vaak mensen afhaken bij digitale dienstverlening.', 'Weinig systematische toetsing van toegankelijkheid in de praktijk.'],
                ['Diensten voldoen aan toegankelijkheidsrichtlijnen.', 'Taal is helder en begrijpelijk (taalniveau B1).', 'Hulp is zichtbaar en bereikbaar bij elke digitale dienst.']
            ],
            [
                'ondersteuningsnetwerk',
                'Ondersteuningsnetwerk',
                'blue',
                2,
                3,
                'Het netwerk van mensen en organisaties dat ondersteuning biedt bij digitale vragen en problemen.',
                'Digimeter 2024',
                ['Mensen vragen hulp meestal eerst aan familie of vrienden.', 'Bibliotheken en informatiepunten vervullen een belangrijke rol.', 'Het aanbod verschilt per gemeente en regio.'],
                ['Weinig overzicht van het totale aanbod aan ondersteuning.', 'Onduidelijk hoe goed vraag en aanbod op elkaar aansluiten.'],
                ['Iedereen weet waar hulp te vinden is.', 'Er is een lokaal, laagdrempelig ondersteuningspunt binnen bereik.']
            ],
        ];

        foreach ($data as [$slug, $name, $color, $sort, $rank, $intro, $source, $found, $gaps, $min]) {
            $d = Dimension::updateOrCreate(['slug' => $slug], compact('name', 'color', 'sort', 'intro') + ['research_rank' => $rank]);
            $d->cards()->delete();
            $d->cards()->createMany([
                ['type' => 'bevindingen', 'source' => "Bron: $source", 'methods' => ['field', 'literature'], 'items' => $found, 'sort' => 1],
                ['type' => 'hiaten', 'source' => "Bron: $source", 'methods' => ['literature'], 'items' => $gaps, 'sort' => 2],
                ['type' => 'minimumstandaarden', 'source' => 'Bron: MDLS', 'methods' => ['literature'], 'items' => $min, 'sort' => 3],
            ]);
        }
    }
}
