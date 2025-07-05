<?php

namespace Database\Seeders;

use App\Models\YerlerPoints;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class yerlerPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        YerlerPoints::create([

            'company_id' => 1,
            'name' => 'best selim ofisi' ,
            'city' => 'karabuk' ,
            'ilce' => 'Merkez',
            'mahalle' => 'Bayır',
            'address' => 'Bayır, Sümer Cd. 2-18, 78100 Karabük Merkez/Karabük',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.166016840901!2d32.60738087668509!3d41.196354007821945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409cacd0d568ae25%3A0x6fbf97a772db0451!2zQmF5xLFyLCBTw7xtZXIgQ2QuIDItMTgsIDc4MTAwIEthcmFiw7xrIE1lcmtlei9LYXJhYsO8aw!5e0!3m2!1str!2str!4v1726134463287!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);

        YerlerPoints::create([

            'company_id' => 1,
            'name' => 'best selim ofisi' ,
            'city' => 'karabuk' ,
            'ilce' => 'Merkez',
            'mahalle' => 'Ergenekon',
            'address' => 'Ergenekon, Pınar Sk., 78200 Karabük Merkez/Karabük',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1501.075458972921!2d32.62090823896987!3d41.1966832110686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409cacd2ae81dac3%3A0x5e88fd581fcde2ed!2sErgenekon%2C%20P%C4%B1nar%20Sk.%2C%2078200%20Karab%C3%BCk%20Merkez%2FKarab%C3%BCk!5e0!3m2!1str!2str!4v1726134703085!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);

        YerlerPoints::create([

            'company_id' => 1,
            'name' => 'best halil ofisi' ,
            'city' => 'karabuk' ,
            'ilce' => 'Safranbolu',
            'mahalle' => 'Yenimahalle',
            'address' => 'Yenimahalle, 78600 Safranbolu/Karabük',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999.6538925497593!2d32.67493697668708!3d41.25109650443711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409caad0afb892f1%3A0x44f60f730f22b6a1!2sSafranbolu%2C%20Yenimahalle%2C%2078600%20Safranbolu%2FKarab%C3%BCk!5e0!3m2!1str!2str!4v1726134806874!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);


        YerlerPoints::create([

            'company_id' => 2,
            'name' => 'gold kamil ofisi' ,
            'city' => 'karabuk' ,
            'ilce' => 'Safranbolu',
            'mahalle' => 'Emek',
            'address' => 'Emek, Kızılay Cd., 78600 Safranbolu/Karabük',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999.7549259700536!2d32.67730707668688!3d41.248896004573226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409caad6c0a3b42b%3A0x2de00435b7d42c8d!2sAbdurahman%20%C4%B0brahim%20Ulusoy%20Park%C4%B1!5e0!3m2!1str!2str!4v1726134875986!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);


        YerlerPoints::create([

            'company_id' => 2,
            'name' => 'İstanbul kamil ofisi' ,
            'city' => 'İstanbul' ,
            'ilce' => '34015 Zeytinburnu',
            'mahalle' => 'Merkezefendi',
            'address' => 'Merkezefendi, 34015 Zeytinburnu/İstanbul',
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.3782673855935!2d28.910855691148097!3d41.0169795450247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba518f137137%3A0x6e3ecdcf53d150e5!2sAvrupa%20Yakas%C4%B1%2C%20Merkezefendi%2C%2034015%20Zeytinburnu%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1726320391752!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        ]);


    }
}
