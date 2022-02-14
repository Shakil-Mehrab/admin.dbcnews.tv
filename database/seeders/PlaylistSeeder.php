<?php

namespace Database\Seeders;

use App\Models\Playlist;
use Illuminate\Database\Seeder;

class PLaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlists = [
            [
                'name' => 'Dbc News Special',
                'bd_name' => 'ডিবিসি নিউজ স্পেশাল',
                'onaired_at' => null
            ],
            [
                'name' => 'Chaturango',
                'bd_name' => 'চতুরঙ্গ',
                'onaired_at' => null
            ],
            [
                'name' => 'Dbc News',
                'bd_name' => 'ডিবিসি সংবাদ',
                'onaired_at' => null
            ],
            [
                'name' => 'Rajkahon',
                'bd_name' => 'রাজকাহন',
                'onaired_at' => 'রবিবার - বৃহস্পতিবার, রাত ১০ঃ০০ থেকে ১১ঃ০০ টা'
            ],
            [
                'name' => 'Sangbad Samprasaron',
                'bd_name' => 'সংবাদ সম্প্রসারন',
                'onaired_at' => 'প্রতিদিন রাত ৮ঃ০০ থেকে ৯ঃ০০ টা'
            ],
            [
                'name' => 'Khelar Duniya',
                'bd_name' => 'খেলার দুনিয়া',
                'onaired_at' => 'প্রতিদিন সন্ধ্যা ৭ঃ৩০ থেকে ৮ঃ০০ টা'
            ],
            [
                'name' => 'Manchitra',
                'bd_name' => 'মানচিত্র',
                'onaired_at' => 'প্রতিদিন বিকাল ৪ঃ৩০ থেকে ৫ঃ০০ টা'
            ],
            [
                'name' => 'Samadhan Sutra',
                'bd_name' => 'সমাধান সুত্র',
                'onaired_at' => 'রবিবার - বৃহস্পতিবার, সকাল ১০ঃ৩০ থেকে ১১ঃ০০ টা'
            ],
            [
                'name' => 'Onyapokkho',
                'bd_name' => 'অন্যপক্ষ',
                'onaired_at' => 'শুক্রবার - শনিবার, সকাল ১০ঃ৩০ থেকে ১১ঃ০০ টা'
            ],
            [
                'name' => 'Sasthya Kotha',
                'bd_name' => 'স্বাস্থ্য কথা',
                'onaired_at' => 'শুক্রবার, সকাল ১১ঃ৩০ থেকে দুপুর ১২০০ টা'
            ],
            [
                'name' => 'Talikhata',
                'bd_name' => 'টালিখাতা',
                'onaired_at' => 'রবিবার - বৃহস্পতিবার, দুপুর ১২ঃ৩০ থেকে ১ঃ০০ টা'
            ],
            [
                'name' => 'Uposonghar',
                'bd_name' => 'উপসংহার',
                'onaired_at' => 'শুক্রবার, রাত ১০ঃ০০ থেকে ১১ঃ০০ টা'
            ],
            [
                'name' => 'Khela Niye Khela',
                'bd_name' => 'খেলা নিয়ে খেলা',
                'onaired_at' => 'শনিবার, রাত ১০ঃ০০ থেকে ১১ঃ০০ টা'
            ],
        ];

        foreach ($playlists  as $playlist) {
            Playlist::create([
                'name' => $playlist['name'],
                'bd_name' => $playlist['bd_name'],
                'onaired_at' => $playlist['onaired_at'],
            ]);
        }
    }
}