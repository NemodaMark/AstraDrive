<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizQuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            [
                'id' => '1',
                'question' => 'Melyik típust kívánta bevetni az Opel a Volkswagen Golfja (I.) ellen?',
                'correct_answer' => 'Kadett C',
                'wrong_answer1' => 'Astra F',
                'wrong_answer2' => 'Ascona',
                'wrong_answer3' => 'Astra H',
            ],
            [
                'id' => '2',
                'question' => 'Hány Millió darab kelt el az Opel Astra F Modellből?',
                'correct_answer' => '4.13',
                'wrong_answer1' => '5',
                'wrong_answer2' => '6',
                'wrong_answer3' => '1.2',
            ],
            [
                'id' => '3',
                'question' => 'Melyik ország gyártotta az Astra szériát 1997 után?',
                'correct_answer' => 'Lengyelország',
                'wrong_answer1' => 'Svédország',
                'wrong_answer2' => 'Kína',
                'wrong_answer3' => 'Moldova',
            ],
            [
                'id' => '4',
                'question' => 'Melyik volt a legnépszerűbb karosszéria változat az Astra kategóriában?',
                'correct_answer' => 'Ötajtós, csapotthátú',
                'wrong_answer1' => 'Ötajtós, Sedan',
                'wrong_answer2' => 'Ötajtós, kombi',
                'wrong_answer3' => 'Ötajtós, kombi',
            ],
            [
                'id' => '5',
                'question' => 'Mi vált tartozékká a 94-es Facelift után az Astra modellekben?',
                'correct_answer' => 'Légzsák',
                'wrong_answer1' => 'Biztonsági öv',
                'wrong_answer2' => 'Rádió',
                'wrong_answer3' => 'Kesztyűtartó',
            ],
            [
                'id' => '6',
                'question' => 'Hány db benzines motor érhető el az Astra F családhoz ? (típus szerint)',
                'correct_answer' => '5',
                'wrong_answer1' => '9',
                'wrong_answer2' => '4',
                'wrong_answer3' => '2',
            ],
            [
                'id' => '7',
                'question' => 'Az Astra F családból készítettek Rendőrváltozatot?',
                'correct_answer' => 'Igen',
                'wrong_answer1' => 'Nem',
                'wrong_answer2' => 'Csak Afrikában',
                'wrong_answer3' => 'Csak Moldovában',
            ],
            [
                'id' => '8',
                'question' => 'Hol rendezték meg a 2002-es Opel kupát?',
                'correct_answer' => 'Rábaring',
                'wrong_answer1' => 'Kakucsring',
                'wrong_answer2' => 'Nürburgring',
                'wrong_answer3' => 'Mogyoród',
            ],
            [
                'id' => '9',
                'question' => 'Mikor mutatták be az Astra F típust?',
                'correct_answer' => '1991',
                'wrong_answer1' => '2000',
                'wrong_answer2' => '1984',
                'wrong_answer3' => '2002',
            ],
            [
                'id' => '10',
                'question' => 'Hol gyártották Magyarországon az Astra F gépjárművet?',
                'correct_answer' => 'Szentgotthárd',
                'wrong_answer1' => 'Szentendre',
                'wrong_answer2' => 'Budapest',
                'wrong_answer3' => 'Szikszó',
            ],
            [
                'id' => '11',
                'question' => 'Milyen kategóriába volt sorolható az Astra F gépjármű a megjelenéskor?',
                'correct_answer' => 'Alsó-középkategória',
                'wrong_answer1' => 'Felsőkategória',
                'wrong_answer2' => 'Alsókategória',
                'wrong_answer3' => 'Középkategória',
            ],
            [
                'id' => '12',
                'question' => 'Mely ország kezdte meg az Astra F modell gyártását?',
                'correct_answer' => 'Németország',
                'wrong_answer1' => 'Franciaország',
                'wrong_answer2' => 'Lengyelország',
                'wrong_answer3' => 'Olaszország',
            ],
            [
                'id' => '13',
                'question' => 'Mi volt az Astra F belterének leggyengébb pontja?',
                'correct_answer' => 'Tetőkárpit',
                'wrong_answer1' => 'Ülések',
                'wrong_answer2' => 'Rádió',
                'wrong_answer3' => 'Légzsák',
            ],
            [
                'id' => '14',
                'question' => 'Mikor gördült le a futószalagról az I. Magyar Astra F?',
                'correct_answer' => '1992',
                'wrong_answer1' => '1998',
                'wrong_answer2' => '1989',
                'wrong_answer3' => '2002',
            ],
            [
                'id' => '15',
                'question' => '2023-ban hány darab Astra F van átlagosan az utakon? (darab)',
                'correct_answer' => '525.000',
                'wrong_answer1' => '400.000',
                'wrong_answer2' => '84.500',
                'wrong_answer3' => '900.000',
            ],
            [
                'id' => '16',
                'question' => 'Melyik az Opel testvérmárkája az Egyesült Királyságban?',
                'correct_answer' => 'Vauxhall',
                'wrong_answer1' => 'Peugeot',
                'wrong_answer2' => 'Citröen',
                'wrong_answer3' => 'Chrysler',
            ],
            [
                'id' => '17',
                'question' => 'Melyik típus előzte meg az Astra F típust?',
                'correct_answer' => 'Kadett E',
                'wrong_answer1' => 'Ascona',
                'wrong_answer2' => 'Zafira',
                'wrong_answer3' => 'Corsa B',
            ],
            [
                'id' => '18',
                'question' => 'Hogyan nevezték az Astra F család sportváltozatát?',
                'correct_answer' => 'Gsi',
                'wrong_answer1' => 'GL',
                'wrong_answer2' => 'GLS',
                'wrong_answer3' => 'GI',
            ],
            [
                'id' => '19',
                'question' => '1997 után milyen néven folytatódott az Astra F gyártása?',
                'correct_answer' => 'Astra Classic',
                'wrong_answer1' => 'Astra F II.',
                'wrong_answer2' => 'Astra E',
                'wrong_answer3' => 'Ascona',
            ],
            [
                'id' => '20',
                'question' => 'Mikor vezették be a GL és a GLS közötti komfort változatot?',
                'correct_answer' => '1996',
                'wrong_answer1' => '2000',
                'wrong_answer2' => '1978',
                'wrong_answer3' => '1981',
            ],
        ];

        foreach ($questions as $question) {
            DB::table('quiz_questions')->insert($question);
        }
    }
}
