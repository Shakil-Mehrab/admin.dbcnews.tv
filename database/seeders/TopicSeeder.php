<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = [
            [
                "name" => "Chatro Dol",
                "bd_name" => "ছাত্রদল",

            ],
            [
                "name" => "Music",
                "bd_name" => "মিউজিক",
            ],
            [
                "name" => "Daily Magazine",
                "bd_name" => "ডেইলি ম্যাগাজিন",

            ],
            [
                "name" => "Cinema Hall",
                "bd_name" => "সিনেমা হল",
            ],
            [
                "name" => "Bangla Cinema",
                "bd_name" => "বাংলা সিনেমা",

            ],
            [
                "name" => "Budget 2020 2021",
                "bd_name" => "বাজেট ২০২০-২০২১",
            ],
            [
                "name" => "Corona Virus",
                "bd_name" => "করোনা ভাইরাস",

            ],
            [
                "name" => "100th Birth Year of Bangabandhu",
                "bd_name" => "মুজিববর্ষ",
            ],
            [
                "name" => "Iran America",
                "bd_name" => "ইরান-আমেরিকা",

            ],
            [
                "name" => "Bush Fire",
                "bd_name" => "দাবানল",
            ],
            [
                "name" => "Jatiya Party",
                "bd_name" => "জাতীয় পার্টি",

            ],
            [
                "name" => "Torture",
                "bd_name" => "অত্যাচার",
            ],
            [
                "name" => "Collision",
                "bd_name" => "সংঘর্ষ",

            ],
            [
                "name" => "Bangabandhu BPL	",
                "bd_name" => "বঙ্গবন্ধু বিপিএল",
            ],
            [
                "name" => "Occupancy",
                "bd_name" => "দখল",

            ],
            [
                "name" => "Nature",
                "bd_name" => "পরিবেশ",
            ],
            [
                "name" => "Hunger Strike",
                "bd_name" => "অনশন",

            ],
            [
                "name" => "	Sexually Assault",
                "bd_name" => "যৌন হয়রানি",
            ],
            [
                "name" => "Demonstration",
                "bd_name" => "বিক্ষোভ",
            ],
            [
                "name" => "Border",
                "bd_name" => "সীমান্ত",
            ],
            [
                "name" => "Suicide",
                "bd_name" => "আত্মহত্যা",
            ],
            [
                "name" => "Strike",
                "bd_name" => "ধর্মঘট",
            ],
            [
                "name" => "Air Polution",
                "bd_name" => "বায়ু দূষণ",
            ],
            [
                "name" => "Drugs",
                "bd_name" => "মাদক",
            ],
            [
                "name" => "Transport strike",
                "bd_name" => "পরিবহন ধর্মঘট",
            ],
            [
                "name" => "	Border Killing",
                "bd_name" => "সীমান্তে হত্যা",
            ],
            [
                "name" => "Road Law",
                "bd_name" => "নতুন সড়ক পরিবহন আইন",

            ],
            [
                "name" => "Natural Disaster",
                "bd_name" => "প্রাকৃতিক দুর্যোগ",
            ],
            [
                "name" => "Rumors",
                "bd_name" => "গুজব",

            ],
            [
                "name" => "Metrorail",
                "bd_name" => "মেট্রোরেল",
            ],
            [
                "name" => "Festival",
                "bd_name" => "উৎসব",

            ],
            [
                "name" => "Riverbank Erosion",
                "bd_name" => "নদী ভাঙ্গন",
            ],
            [
                "name" => "	Bangladesh Cricket",
                "bd_name" => "বাংলাদেশ ক্রিকেট",

            ],
            [
                "name" => "Strange News",
                "bd_name" => "আজব খবর",
            ],
            [
                "name" => "	Traffic Jam",
                "bd_name" => "যানজট",

            ],
            [
                "name" => "Boat Sink",
                "bd_name" => "নৌকাডুবি",
            ],
            [
                "name" => "Launch Sink",
                "bd_name" => "লঞ্চডুবি",

            ],
            [
                "name" => "Private University",
                "bd_name" => "প্রাইভেট বিশ্ববিদ্যালয়",
            ],
            [
                "name" => "	Jahangirnagar University",
                "bd_name" => "জাহাঙ্গীরনগর বিশ্ববিদ্যালয়",

            ],
            [
                "name" => "Accident",
                "bd_name" => "দুর্ঘটনা",
            ],
            [
                "name" => "Death by Drowning",
                "bd_name" => "পানিতে ডুবে মৃত্যু",

            ],
            [
                "name" => "Mirza Fakhrul Islam Alamgir",
                "bd_name" => "মীর্জা ফখরুল ইসলাম আলমগীর",
            ],
            [
                "name" => "	Obaidul Kader",
                "bd_name" => "ওবায়দুল কাদের",

            ],
            [
                "name" => "Fire Incident",
                "bd_name" => "অগ্নিকাণ্ড",
            ],
            [
                "name" => "Beating killing",
                "bd_name" => "পিটিয়ে হত্যা",

            ],
            [
                "name" => "BNP",
                "bd_name" => "বিএনপি",
            ],
            [
                "name" => "Awami League",
                "bd_name" => "আওয়ামী লীগ",

            ],
            [
                "name" => "	Padma Bridge",
                "bd_name" => "পদ্মা সেতু",
            ],
            [
                "name" => "Gas Cylinder",
                "bd_name" => "গ্যাস সিলিন্ডার",

            ],
            [
                "name" => "Lynch",
                "bd_name" => "গণপিটুনি",
            ],
            [
                "name" => "Shakib Al Hasan",
                "bd_name" => "সাকিব আল হাসান",

            ],
            [
                "name" => "Corruption",
                "bd_name" => "দুর্নীতি",
            ],
            [
                "name" => "Suffering",
                "bd_name" => "দুর্ভোগ",

            ],
            [
                "name" => "	Gun Fight",
                "bd_name" => "বন্দুকযুদ্ধ",
            ],
            [
                "name" => "	Hilsha",
                "bd_name" => "ইলিশ",
            ],
            [
                "name" => "	Dhaka University",
                "bd_name" => "ঢাকা বিশ্ববিদ্যালয়",
            ],
            [
                "name" => "Council",
                "bd_name" => "কাউন্সিল",
            ],
            [
                "name" => "	BUET",
                "bd_name" => "বুয়েট",
            ],
            [
                "name" => "Khaleda Zia",
                "bd_name" => "খালেদা জিয়া",
            ],
            [
                "name" => "Flood",
                "bd_name" => "বন্যা",
            ],
            [
                "name" => "	Onion price",
                "bd_name" => "পেঁয়াজের মূল্য",
            ],
            [
                "name" => "বশেমুরবিপ্রবি",
                "bd_name" => "বশেমুরবিপ্রবি",
            ],
            [
                "name" => "Chhatra League",
                "bd_name" => "ছাত্রলীগ",

            ],
            [
                "name" => "Facebook",
                "bd_name" => "ফেসবুক",
            ],
            [
                "name" => "Dengue",
                "bd_name" => "ডেঙ্গু",
            ],
            [
                "name" => "	Child Rape",
                "bd_name" => "শিশু ধর্ষণ",

            ],
            [
                "name" => "War Criminal",
                "bd_name" => "যুদ্ধাপরাধী",
            ],
            [
                "name" => "	Murder",
                "bd_name" => "হত্যা",

            ],
            [
                "name" => "River Occupy",
                "bd_name" => "নদী দখল",
            ],
            [
                "name" => "Airplane Accident",
                "bd_name" => "বিমান দুর্ঘটনা",

            ],
            [
                "name" => "	Rail Accident",
                "bd_name" => "রেল দুর্ঘটনা",
            ],
            [
                "name" => "	Road Accident",
                "bd_name" => "সড়ক দুর্ঘটনা",
            ],
            [
                "name" => "	Environment Pollution",
                "bd_name" => "পরিবেশ দূষণ",
            ],
            [
                "name" => "	River Pollution",
                "bd_name" => "নদী দূষণ",
            ],
            [
                "name" => "Rohinga",
                "bd_name" => "রোহিঙ্গা",
            ],
            [
                "name" => "Juba League",
                "bd_name" => "যুবলীগ",
            ],
            [
                "name" => "Rape",
                "bd_name" => "ধর্ষণ",
            ],
            [
                "name" => "Sheikh Hasina",
                "bd_name" => "শেখ হাসিনা",
            ],
        ];

        foreach ($topics  as $topic) {
            Topic::create([
                'name' => $topic['name'],
                'bd_name' => $topic['bd_name']
            ]);
        }
    }
}