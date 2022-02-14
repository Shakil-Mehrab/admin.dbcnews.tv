<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Bangladesh",
                "bd_name" => "বাংলাদেশ",
                'children' => [
                    [
                        'name' => 'National',
                        'bd_name' => 'জাতীয়'
                    ],
                    [
                        'name' => 'Politics',
                        'bd_name' => 'রাজনীতি'
                    ],
                    [
                        'name' => 'Economics',
                        'bd_name' => 'অর্থনীতি'
                    ],
                    [
                        'name' => 'District News',
                        'bd_name' => 'জেলার সংবাদ'
                    ],
                    [
                        'name' => 'Crime',
                        'bd_name' => 'অপরাধ'
                    ],
                    [
                        'name' => 'Capital',
                        'bd_name' => 'রাজধানী'
                    ],
                    [
                        'name' => 'Megha City',
                        'bd_name' => 'মহানগরী'
                    ]
                ],
            ],

            [
                "name" => "International",
                "bd_name" => "আন্তর্জাতিক",
                "children" => [
                    [
                        "name" => "America",
                        "bd_name" => "আমেরিকা"
                    ],
                    [
                        "name" => "India",
                        "bd_name" => "ভারত"
                    ],
                    [
                        "name" => "Asia",
                        "bd_name" => "এশিয়া"
                    ],
                    [
                        "name" => "Europe",
                        "bd_name" => "ইউরোপ"
                    ],
                    [
                        "name" => "Arab",
                        "bd_name" => "আরব"
                    ],
                    [
                        "name" => "Others International",
                        "bd_name" => "অন্যান্য"
                    ]
                ]
            ],
            [
                "name" => "Sports",
                "bd_name" => "খেলাধুলা",
                "children" => [
                    [
                        "name" => "Cricket",
                        "bd_name" => "ক্রিকেট"
                    ],
                    [
                        "name" => "Football",
                        "bd_name" => "ফুটবল"
                    ],
                    [
                        "name" => "Others Sports",
                        "bd_name" => "অন্যান্য খেলা"
                    ],
                ]
            ],
            [
                "name" => "Recreation",
                "bd_name" => "বিনোদন",
                "children" => [
                    [
                        "name" => "Culture",
                        "bd_name" => "সংস্কৃতি"
                    ],
                    [
                        "name" => "Dhallywood",
                        "bd_name" => "ঢালিউড"
                    ],
                    [
                        "name" => "Hollywood",
                        "bd_name" => "হলিউড"
                    ],
                    [
                        "name" => "Bollywood",
                        "bd_name" => "বলিউড"
                    ],
                    [
                        "name" => "Television",
                        "bd_name" => "টেলিভিশন"
                    ],
                    [
                        "name" => "Others Entertainment",
                        "bd_name" => "অন্যান্য"
                    ]
                ]
            ],
            [
                "name" => "Opinion",
                "bd_name" => "মতামত",
                "children" => [
                    [
                        "name" => "Interview",
                        "bd_name" => "সাক্ষাৎকার"
                    ],
                    [
                        "name" => "Editorial Opinion",
                        "bd_name" => "সম্পাদকীয়"
                    ],
                    [
                        "name" => "Controversy",
                        "bd_name" => "বিতর্ক"
                    ],
                    [
                        "name" => "Society",
                        "bd_name" => "সমাজ"
                    ],
                ]
            ],
            [
                "name" => "Religion",
                "bd_name" => "ধর্ম",
                "children" => [
                    [
                        "name" => "Islam Religion",
                        "bd_name" => "ইসলাম"
                    ],
                    [
                        "name" => "Others Religions",
                        "bd_name" => "অন্যান্য ধর্ম"
                    ],
                ]
            ],
            [
                "name" => "Literature",
                "bd_name" => "সাহিত্য",
                "children" => [
                    [
                        "name" => "Poem Literature",
                        "bd_name" => "কবিতা"
                    ],
                    [
                        "name" => "Story Literature",
                        "bd_name" => "গল্প"
                    ],
                    [
                        "name" => "Travel Literature",
                        "bd_name" => "ভ্রমণ"
                    ],
                    [
                        "name" => "Books Literature",
                        "bd_name" => "বইপত্র"
                    ],
                    [
                        "name" => "Translation Literature",
                        "bd_name" => "অনুবাদ"
                    ],
                    [
                        "name" => "Others Literature",
                        "bd_name" => "অন্যান্য"
                    ],
                ]
            ],
            [
                "name" => "Job",
                "bd_name" => "চাকরি",
                "children" => [
                    [
                        "name" => "Career",
                        "bd_name" => "ক্যারিয়ার"
                    ],
                    [
                        "name" => "Anouncement Job",
                        "bd_name" => "বিজ্ঞাপন"
                    ],
                    [
                        "name" => "Counsel Job",
                        "bd_name" => "পরামর্শ"
                    ],
                ]
            ],
            [
                "name" => "Video",
                "bd_name" => "ভিডিও",
                "children" => [
                    [
                        "name" => "Special Report",
                        "bd_name" => "বিশেষ প্রতিবেদন"
                    ],
                    [
                        "name" => "News Video",
                        "bd_name" => "সংবাদের ভিডিও"
                    ],
                    [
                        "name" => "Program",
                        "bd_name" => "অনুষ্ঠান"
                    ],
                ]
            ],
            [
                "name" => "English News",
                "bd_name" => "English News",
                "children" => [
                    [
                        "name" => "English Economics",
                        "bd_name" => "Economics"
                    ],
                    [
                        "name" => "English Politics",
                        "bd_name" => "Politics"
                    ],
                    [
                        "name" => "English International",
                        "bd_name" => "International"
                    ],
                    [
                        "name" => "English Sports",
                        "bd_name" => "Sports"
                    ],
                    [
                        "name" => "English National",
                        "bd_name" => "National"
                    ],
                ]
            ],
            [
                "name" => "Miscellaneous",
                "bd_name" => "বিবিধ",
                "children" => [
                    [
                        "name" => "Science Tech",
                        "bd_name" => "বিজ্ঞান ও প্রযুক্তি"
                    ],
                    [
                        "name" => "Emigration",
                        "bd_name" => "প্রবাস"
                    ],
                    [
                        "name" => "Education",
                        "bd_name" => "শিক্ষা"
                    ],
                    [
                        "name" => "Health",
                        "bd_name" => "স্বাস্থ্য"
                    ],
                    [
                        "name" => "Lifestyle",
                        "bd_name" => "লাইফস্টাইল"
                    ],
                    [
                        "name" => "Women",
                        "bd_name" => "নারী"
                    ],
                    [
                        "name" => "Agriculture",
                        "bd_name" => "কৃষি"
                    ],
                    [
                        "name" => "Law Rules",
                        "bd_name" => "আইন ও কানুন"
                    ],
                    [
                        "name" => "Kids Zone",
                        "bd_name" => "কিডজ জোন"
                    ],
                    [
                        "name" => "Book Fair",
                        "bd_name" => "অমর একুশে গ্রন্থমেলা"
                    ],
                    [
                        "name" => "Repoters Diary",
                        "bd_name" => "রিপোর্টার্স ডায়েরি"
                    ],
                    [
                        "name" => "Cricket World Cup 2019",
                        "bd_name" => "বিশ্বকাপ ক্রিকেট ২০১৯"
                    ],
                    [
                        "name" => "Eid Special",
                        "bd_name" => "ঈদ স্পেশাল"
                    ],
                    [
                        "name" => "Dengue",
                        "bd_name" => "ডেঙ্গু"
                    ],
                    [
                        "name" => "Dengue Helpdesk",
                        "bd_name" => "ডেঙ্গু হেল্পডেস্ক"
                    ],
                    [
                        "name" => "Dengue Headline",
                        "bd_name" => "ডেঙ্গু শিরোনাম"
                    ],
                ]
            ],
            [
                "name" => "Travel",
                "bd_name" => "ভ্রমণ",
                "children" => [
                    [
                        "name" => "Where To Travel",
                        "bd_name" => "কোথায় বেড়াবো"
                    ],

                ]
            ],
            [
                "name" => "Youth",
                "bd_name" => "তারুণ্য",
                "children" => []
            ],
        ];

        // Category::create($categories);
        // foreach ($categories as $category) {
        //     Category::create([
        //         'name' => $category['name'],
        //         'bd_name' => $category['bd_name']
        //     ]);
        // }

        foreach ($categories  as $category) {
            $parent = Category::create([
                'name' => $category['name'],
                'bd_name' => $category['bd_name']
            ]);

            if (isset($category['children']) && count($category['children']) > 0) {
                foreach ($category['children'] as $child) {
                    $parent->children()->create([
                        'name' => $child['name'],
                        'bd_name' => $child['bd_name']
                    ]);
                }
            }
        }
    }
}