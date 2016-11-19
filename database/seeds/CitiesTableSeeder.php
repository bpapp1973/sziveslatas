<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'counties_id' => 1,
                'name' => 'Ágasegyháza',
                'created_at' => '2016-09-09 18:43:21',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'counties_id' => 1,
                'name' => 'Akasztó',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'counties_id' => 1,
                'name' => 'Apostag',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'counties_id' => 1,
                'name' => 'Bácsalmás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'counties_id' => 1,
                'name' => 'Bácsbokod',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'counties_id' => 1,
                'name' => 'Bácsborsód',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'counties_id' => 1,
                'name' => 'Bácsszentgyörgy',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'counties_id' => 1,
                'name' => 'Bácsszőlős',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'counties_id' => 1,
                'name' => 'Baja',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'counties_id' => 1,
                'name' => 'Ballószög',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'counties_id' => 1,
                'name' => 'Balotaszállás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'counties_id' => 1,
                'name' => 'Bátmonostor',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'counties_id' => 1,
                'name' => 'Bátya',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'counties_id' => 1,
                'name' => 'Bócsa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'counties_id' => 1,
                'name' => 'Borota',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'counties_id' => 1,
                'name' => 'Bugac',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'counties_id' => 1,
                'name' => 'Bugacpusztaháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'counties_id' => 1,
                'name' => 'Császártöltés',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'counties_id' => 1,
                'name' => 'Csátalja',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'counties_id' => 1,
                'name' => 'Csávoly',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'counties_id' => 1,
                'name' => 'Csengőd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'counties_id' => 1,
                'name' => 'Csikéria',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'counties_id' => 1,
                'name' => 'Csólyospálos',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'counties_id' => 1,
                'name' => 'Dávod',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'counties_id' => 1,
                'name' => 'Drágszél',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'counties_id' => 1,
                'name' => 'Dunaegyháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'counties_id' => 1,
                'name' => 'Dunafalva',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'counties_id' => 1,
                'name' => 'Dunapataj',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'counties_id' => 1,
                'name' => 'Dunaszentbenedek',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'counties_id' => 1,
                'name' => 'Dunatetétlen',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'counties_id' => 1,
                'name' => 'Dunavecse',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'counties_id' => 1,
                'name' => 'Dusnok',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'counties_id' => 1,
                'name' => 'Érsekcsanád',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'counties_id' => 1,
                'name' => 'Érsekhalma',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'counties_id' => 1,
                'name' => 'Fajsz',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'counties_id' => 1,
                'name' => 'Felsőlajos',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'counties_id' => 1,
                'name' => 'Felsőszentiván',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'counties_id' => 1,
                'name' => 'Foktő',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'counties_id' => 1,
                'name' => 'Fülöpháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'counties_id' => 1,
                'name' => 'Fülöpjakab',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'counties_id' => 1,
                'name' => 'Fülöpszállás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'counties_id' => 1,
                'name' => 'Gara',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'counties_id' => 1,
                'name' => 'Gátér',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'counties_id' => 1,
                'name' => 'Géderlak',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'counties_id' => 1,
                'name' => 'Hajós',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'counties_id' => 1,
                'name' => 'Harkakötöny',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'counties_id' => 1,
                'name' => 'Harta',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'counties_id' => 1,
                'name' => 'Helvécia',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'counties_id' => 1,
                'name' => 'Hercegszántó',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'counties_id' => 1,
                'name' => 'Homokmégy',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'counties_id' => 1,
                'name' => 'Imrehegy',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'counties_id' => 1,
                'name' => 'Izsák',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'counties_id' => 1,
                'name' => 'Jakabszállás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'counties_id' => 1,
                'name' => 'Jánoshalma',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'counties_id' => 1,
                'name' => 'Jászszentlászló',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'counties_id' => 1,
                'name' => 'Kalocsa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'counties_id' => 1,
                'name' => 'Kaskantyú',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'counties_id' => 1,
                'name' => 'Katymár',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'counties_id' => 1,
                'name' => 'Kecel',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'counties_id' => 1,
                'name' => 'Kecskemét',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'counties_id' => 1,
                'name' => 'Kelebia',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'counties_id' => 1,
                'name' => 'Kéleshalom',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'counties_id' => 1,
                'name' => 'Kerekegyháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'counties_id' => 1,
                'name' => 'Kiskőrös',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'counties_id' => 1,
                'name' => 'Kiskunfélegyháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'counties_id' => 1,
                'name' => 'Kiskunhalas',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'counties_id' => 1,
                'name' => 'Kiskunmajsa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'counties_id' => 1,
                'name' => 'Kisszállás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'counties_id' => 1,
                'name' => 'Kömpöc',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'counties_id' => 1,
                'name' => 'Kunadacs',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'counties_id' => 1,
                'name' => 'Kunbaja',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'counties_id' => 1,
                'name' => 'Kunbaracs',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'counties_id' => 1,
                'name' => 'Kunfehértó',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'counties_id' => 1,
                'name' => 'Kunpeszér',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'counties_id' => 1,
                'name' => 'Kunszállás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'counties_id' => 1,
                'name' => 'Kunszentmiklós',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'counties_id' => 1,
                'name' => 'Ladánybene',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'counties_id' => 1,
                'name' => 'Lajosmizse',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'counties_id' => 1,
                'name' => 'Lakitelek',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'counties_id' => 1,
                'name' => 'Madaras',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'counties_id' => 1,
                'name' => 'Mátételke',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'counties_id' => 1,
                'name' => 'Mélykút',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'counties_id' => 1,
                'name' => 'Miske',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'counties_id' => 1,
                'name' => 'Móricgát',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'counties_id' => 1,
                'name' => 'Nagybaracska',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'counties_id' => 1,
                'name' => 'Nemesnádudvar',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'counties_id' => 1,
                'name' => 'Nyárlőrinc',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'counties_id' => 1,
                'name' => 'Ordas',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'counties_id' => 1,
                'name' => 'Orgovány',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'counties_id' => 1,
                'name' => 'Öregcsertő',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'counties_id' => 1,
                'name' => 'Páhi',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'counties_id' => 1,
                'name' => 'Pálmonostora',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'counties_id' => 1,
                'name' => 'Petőfiszállás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'counties_id' => 1,
                'name' => 'Pirtó',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'counties_id' => 1,
                'name' => 'Rém',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'counties_id' => 1,
                'name' => 'Solt',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'counties_id' => 1,
                'name' => 'Soltszentimre',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'counties_id' => 1,
                'name' => 'Soltvadkert',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'counties_id' => 1,
                'name' => 'Sükösd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'counties_id' => 1,
                'name' => 'Szabadszállás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'counties_id' => 1,
                'name' => 'Szakmár',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'counties_id' => 1,
                'name' => 'Szalkszentmárton',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'counties_id' => 1,
                'name' => 'Szank',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'counties_id' => 1,
                'name' => 'Szentkirály',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'counties_id' => 1,
                'name' => 'Szeremle',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'counties_id' => 1,
                'name' => 'Tabdi',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'counties_id' => 1,
                'name' => 'Tass',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'counties_id' => 1,
                'name' => 'Tataháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'counties_id' => 1,
                'name' => 'Tázlár',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'counties_id' => 1,
                'name' => 'Tiszaalpár',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'counties_id' => 1,
                'name' => 'Tiszakécske',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'counties_id' => 1,
                'name' => 'Tiszaug',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'counties_id' => 1,
                'name' => 'Tompa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'counties_id' => 1,
                'name' => 'Újsolt',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'counties_id' => 1,
                'name' => 'Újtelek',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'counties_id' => 1,
                'name' => 'Uszód',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'counties_id' => 1,
                'name' => 'Városföld',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'counties_id' => 1,
                'name' => 'Vaskút',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'counties_id' => 1,
                'name' => 'Zsana',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'counties_id' => 2,
                'name' => 'Almáskamarás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'counties_id' => 2,
                'name' => 'Battonya',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'counties_id' => 2,
                'name' => 'Békés',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'counties_id' => 2,
                'name' => 'Békéscsaba',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'counties_id' => 2,
                'name' => 'Békéssámson',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'counties_id' => 2,
                'name' => 'Békésszentandrás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'counties_id' => 2,
                'name' => 'Bélmegyer',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'counties_id' => 2,
                'name' => 'Biharugra',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'counties_id' => 2,
                'name' => 'Bucsa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'counties_id' => 2,
                'name' => 'Csabacsűd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'counties_id' => 2,
                'name' => 'Csabaszabadi',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'counties_id' => 2,
                'name' => 'Csanádapáca',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'counties_id' => 2,
                'name' => 'Csárdaszállás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'counties_id' => 2,
                'name' => 'Csorvás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'counties_id' => 2,
                'name' => 'Dévaványa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'counties_id' => 2,
                'name' => 'Doboz',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'counties_id' => 2,
                'name' => 'Dombegyház',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'counties_id' => 2,
                'name' => 'Dombiratos',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'counties_id' => 2,
                'name' => 'Ecsegfalva',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'counties_id' => 2,
                'name' => 'Elek',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'counties_id' => 2,
                'name' => 'Füzesgyarmat',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'counties_id' => 2,
                'name' => 'Gádoros',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'counties_id' => 2,
                'name' => 'Gerendás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'counties_id' => 2,
                'name' => 'Geszt',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'counties_id' => 2,
                'name' => 'Gyomaendrőd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'counties_id' => 2,
                'name' => 'Gyula',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'counties_id' => 2,
                'name' => 'Hunya',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'counties_id' => 2,
                'name' => 'Kamut',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'counties_id' => 2,
                'name' => 'Kardos',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'counties_id' => 2,
                'name' => 'Kardoskút',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'counties_id' => 2,
                'name' => 'Kaszaper',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'counties_id' => 2,
                'name' => 'Kertészsziget',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'counties_id' => 2,
                'name' => 'Kétegyháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'counties_id' => 2,
                'name' => 'Kétsoprony',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'counties_id' => 2,
                'name' => 'Kevermes',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'counties_id' => 2,
                'name' => 'Kisdombegyház',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'counties_id' => 2,
                'name' => 'Kondoros',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'counties_id' => 2,
                'name' => 'Körösladány',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'counties_id' => 2,
                'name' => 'Körösnagyharsány',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'counties_id' => 2,
                'name' => 'Köröstarcsa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'counties_id' => 2,
                'name' => 'Körösújfalu',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'counties_id' => 2,
                'name' => 'Kötegyán',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'counties_id' => 2,
                'name' => 'Kunágota',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'counties_id' => 2,
                'name' => 'Lőkösháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'counties_id' => 2,
                'name' => 'Magyarbánhegyes',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'counties_id' => 2,
                'name' => 'Magyardombegyház',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'counties_id' => 2,
                'name' => 'Medgyesbodzás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'counties_id' => 2,
                'name' => 'Medgyesegyháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'counties_id' => 2,
                'name' => 'Méhkerék',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'counties_id' => 2,
                'name' => 'Mezőberény',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'counties_id' => 2,
                'name' => 'Mezőgyán',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'counties_id' => 2,
                'name' => 'Mezőhegyes',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'counties_id' => 2,
                'name' => 'Mezőkovácsháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'counties_id' => 2,
                'name' => 'Murony',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'counties_id' => 2,
                'name' => 'Nagybánhegyes',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'counties_id' => 2,
                'name' => 'Nagykamarás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'counties_id' => 2,
                'name' => 'Nagyszénás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'counties_id' => 2,
                'name' => 'Okány',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'counties_id' => 2,
                'name' => 'Orosháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'counties_id' => 2,
                'name' => 'Örménykút',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'counties_id' => 2,
                'name' => 'Pusztaföldvár',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'counties_id' => 2,
                'name' => 'Pusztaottlaka',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'counties_id' => 2,
                'name' => 'Sarkad',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'counties_id' => 2,
                'name' => 'Sarkadkeresztúr',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'counties_id' => 2,
                'name' => 'Szabadkígyós',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'counties_id' => 2,
                'name' => 'Szarvas',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'counties_id' => 2,
                'name' => 'Szeghalom',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'counties_id' => 2,
                'name' => 'Tarhos',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'counties_id' => 2,
                'name' => 'Telekgerendás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'counties_id' => 2,
                'name' => 'Tótkomlós',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'counties_id' => 2,
                'name' => 'Újkígyós',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'counties_id' => 2,
                'name' => 'Újszalonta',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'counties_id' => 2,
                'name' => 'Végegyháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'counties_id' => 2,
                'name' => 'Vésztő',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'counties_id' => 2,
                'name' => 'Zsadány',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'counties_id' => 3,
                'name' => 'Abaliget',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'counties_id' => 3,
                'name' => 'Adorjás',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'counties_id' => 3,
                'name' => 'Ág',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'counties_id' => 3,
                'name' => 'Almamellék',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'counties_id' => 3,
                'name' => 'Almáskeresztúr',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'counties_id' => 3,
                'name' => 'Alsómocsolád',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'counties_id' => 3,
                'name' => 'Alsószentmárton',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'counties_id' => 3,
                'name' => 'Apátvarasd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'counties_id' => 3,
                'name' => 'Aranyosgadány',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'counties_id' => 3,
                'name' => 'Áta',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'counties_id' => 3,
                'name' => 'Babarc',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'counties_id' => 3,
                'name' => 'Babarcszőlős',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'counties_id' => 3,
                'name' => 'Bakóca',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'counties_id' => 3,
                'name' => 'Bakonya',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'counties_id' => 3,
                'name' => 'Baksa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'counties_id' => 3,
                'name' => 'Bánfa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'counties_id' => 3,
                'name' => 'Bár',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'counties_id' => 3,
                'name' => 'Baranyahídvég',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'counties_id' => 3,
                'name' => 'Baranyajenő',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'counties_id' => 3,
                'name' => 'Baranyaszentgyörgy',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'counties_id' => 3,
                'name' => 'Basal',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'counties_id' => 3,
                'name' => 'Belvárdgyula',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'counties_id' => 3,
                'name' => 'Beremend',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'counties_id' => 3,
                'name' => 'Berkesd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'counties_id' => 3,
                'name' => 'Besence',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'counties_id' => 3,
                'name' => 'Bezedek',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'counties_id' => 3,
                'name' => 'Bicsérd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'counties_id' => 3,
                'name' => 'Bikal',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'counties_id' => 3,
                'name' => 'Birján',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'counties_id' => 3,
                'name' => 'Bisse',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'counties_id' => 3,
                'name' => 'Boda',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'counties_id' => 3,
                'name' => 'Bodolyabér',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'counties_id' => 3,
                'name' => 'Bogád',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'counties_id' => 3,
                'name' => 'Bogádmindszent',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'counties_id' => 3,
                'name' => 'Bogdása',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'counties_id' => 3,
                'name' => 'Boldogasszonyfa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'counties_id' => 3,
                'name' => 'Bóly',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'counties_id' => 3,
                'name' => 'Borjád',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'counties_id' => 3,
                'name' => 'Bosta',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'counties_id' => 3,
                'name' => 'Botykapeterd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'counties_id' => 3,
                'name' => 'Bükkösd',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'counties_id' => 3,
                'name' => 'Bürüs',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'counties_id' => 3,
                'name' => 'Cún',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'counties_id' => 3,
                'name' => 'Csányoszró',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'counties_id' => 3,
                'name' => 'Csarnóta',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'counties_id' => 3,
                'name' => 'Csebény',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'counties_id' => 3,
                'name' => 'Cserdi',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'counties_id' => 3,
                'name' => 'Cserkút',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'counties_id' => 3,
                'name' => 'Csertő',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'counties_id' => 3,
                'name' => 'Csonkamindszent',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'counties_id' => 3,
                'name' => 'Dencsháza',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'counties_id' => 3,
                'name' => 'Dinnyeberki',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'counties_id' => 3,
                'name' => 'Diósviszló',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'counties_id' => 3,
                'name' => 'Drávacsehi',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'counties_id' => 3,
                'name' => 'Drávacsepely',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'counties_id' => 3,
                'name' => 'Drávafok',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'counties_id' => 3,
                'name' => 'Drávaiványi',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'counties_id' => 3,
                'name' => 'Drávakeresztúr',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'counties_id' => 3,
                'name' => 'Drávapalkonya',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'counties_id' => 3,
                'name' => 'Drávapiski',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'counties_id' => 3,
                'name' => 'Drávaszabolcs',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'counties_id' => 3,
                'name' => 'Drávaszerdahely',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'counties_id' => 3,
                'name' => 'Drávasztára',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'counties_id' => 3,
                'name' => 'Dunaszekcső',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'counties_id' => 3,
                'name' => 'Egerág',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'counties_id' => 3,
                'name' => 'Egyházasharaszti',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'counties_id' => 3,
                'name' => 'Egyházaskozár',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'counties_id' => 3,
                'name' => 'Ellend',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'counties_id' => 3,
                'name' => 'Endrőc',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'counties_id' => 3,
                'name' => 'Erdősmárok',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'counties_id' => 3,
                'name' => 'Erdősmecske',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'counties_id' => 3,
                'name' => 'Erzsébet',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'counties_id' => 3,
                'name' => 'Fazekasboda',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'counties_id' => 3,
                'name' => 'Feked',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'counties_id' => 3,
                'name' => 'Felsőegerszeg',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'counties_id' => 3,
                'name' => 'Felsőszentmárton',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'counties_id' => 3,
                'name' => 'Garé',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'counties_id' => 3,
                'name' => 'Gerde',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'counties_id' => 3,
                'name' => 'Gerényes',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'counties_id' => 3,
                'name' => 'Geresdlak',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'counties_id' => 3,
                'name' => 'Gilvánfa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'counties_id' => 3,
                'name' => 'Gordisa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'counties_id' => 3,
                'name' => 'Gödre',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'counties_id' => 3,
                'name' => 'Görcsöny',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'counties_id' => 3,
                'name' => 'Görcsönydoboka',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'counties_id' => 3,
                'name' => 'Gyód',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'counties_id' => 3,
                'name' => 'Gyöngyfa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'counties_id' => 3,
                'name' => 'Gyöngyösmellék',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'counties_id' => 3,
                'name' => 'Harkány',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'counties_id' => 3,
                'name' => 'Hásságy',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'counties_id' => 3,
                'name' => 'Hegyhátmaróc',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'counties_id' => 3,
                'name' => 'Hegyszentmárton',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'counties_id' => 3,
                'name' => 'Helesfa',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'counties_id' => 3,
                'name' => 'Hetvehely',
                'created_at' => '2016-09-09 18:44:27',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'counties_id' => 3,
                'name' => 'Hidas',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'counties_id' => 3,
                'name' => 'Himesháza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'counties_id' => 3,
                'name' => 'Hirics',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'counties_id' => 3,
                'name' => 'Hobol',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'counties_id' => 3,
                'name' => 'Homorúd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'counties_id' => 3,
                'name' => 'Horváthertelend',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'counties_id' => 3,
                'name' => 'Hosszúhetény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'counties_id' => 3,
                'name' => 'Husztót',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'counties_id' => 3,
                'name' => 'Ibafa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'counties_id' => 3,
                'name' => 'Illocska',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'counties_id' => 3,
                'name' => 'Ipacsfa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'counties_id' => 3,
                'name' => 'Ivánbattyán',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'counties_id' => 3,
                'name' => 'Ivándárda',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'counties_id' => 3,
                'name' => 'Kacsóta',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'counties_id' => 3,
                'name' => 'Kákics',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'counties_id' => 3,
                'name' => 'Kárász',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'counties_id' => 3,
                'name' => 'Kásád',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'counties_id' => 3,
                'name' => 'Katádfa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'counties_id' => 3,
                'name' => 'Kátoly',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'counties_id' => 3,
                'name' => 'Kékesd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'counties_id' => 3,
                'name' => 'Kémes',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'counties_id' => 3,
                'name' => 'Kemse',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'counties_id' => 3,
                'name' => 'Keszü',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'counties_id' => 3,
                'name' => 'Kétújfalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'counties_id' => 3,
                'name' => 'Királyegyháza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'counties_id' => 3,
                'name' => 'Kisasszonyfa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'counties_id' => 3,
                'name' => 'Kisbeszterce',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'counties_id' => 3,
                'name' => 'Kisbudmér',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'counties_id' => 3,
                'name' => 'Kisdér',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'counties_id' => 3,
                'name' => 'Kisdobsza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'counties_id' => 3,
                'name' => 'Kishajmás',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'counties_id' => 3,
                'name' => 'Kisharsány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'counties_id' => 3,
                'name' => 'Kisherend',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'counties_id' => 3,
                'name' => 'Kisjakabfalva',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'counties_id' => 3,
                'name' => 'Kiskassa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'counties_id' => 3,
                'name' => 'Kislippó',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'counties_id' => 3,
                'name' => 'Kisnyárád',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'counties_id' => 3,
                'name' => 'Kistamási',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'counties_id' => 3,
                'name' => 'Kistapolca',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'counties_id' => 3,
                'name' => 'Kistótfalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'counties_id' => 3,
                'name' => 'Kisvaszar',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'counties_id' => 3,
                'name' => 'Kisszentmárton',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'counties_id' => 3,
                'name' => 'Komló',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'counties_id' => 3,
                'name' => 'Kórós',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'counties_id' => 3,
                'name' => 'Kovácshida',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'counties_id' => 3,
                'name' => 'Kovácsszénája',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'counties_id' => 3,
                'name' => 'Kozármisleny',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'counties_id' => 3,
                'name' => 'Köblény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'counties_id' => 3,
                'name' => 'Kökény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'counties_id' => 3,
                'name' => 'Kölked',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'counties_id' => 3,
                'name' => 'Kővágószőlős',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'counties_id' => 3,
                'name' => 'Kővágótöttös',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'counties_id' => 3,
                'name' => 'Lánycsók',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'counties_id' => 3,
                'name' => 'Lapáncsa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'counties_id' => 3,
                'name' => 'Lengyel',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'counties_id' => 3,
                'name' => 'Liget',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'counties_id' => 3,
                'name' => 'Lippó',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'counties_id' => 3,
                'name' => 'Liptód',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'counties_id' => 3,
                'name' => 'Lothárd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'counties_id' => 3,
                'name' => 'Lovászhetény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'counties_id' => 3,
                'name' => 'Lúzsok',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'counties_id' => 3,
                'name' => 'Mágocs',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'counties_id' => 3,
                'name' => 'Magyarbóly',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'counties_id' => 3,
                'name' => 'Magyaregregy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'counties_id' => 3,
                'name' => 'Magyarhertelend',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'counties_id' => 3,
                'name' => 'Magyarlukafa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'counties_id' => 3,
                'name' => 'Magyarmecske',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'counties_id' => 3,
                'name' => 'Magyarsarlós',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'counties_id' => 3,
                'name' => 'Magyarszék',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'counties_id' => 3,
                'name' => 'Magyartelek',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'counties_id' => 3,
                'name' => 'Majs',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'counties_id' => 3,
                'name' => 'Mánfa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'counties_id' => 3,
                'name' => 'Maráza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'counties_id' => 3,
                'name' => 'Márfa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'counties_id' => 3,
                'name' => 'Máriakéménd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'counties_id' => 3,
                'name' => 'Markóc',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'counties_id' => 3,
                'name' => 'Marócsa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'counties_id' => 3,
                'name' => 'Márok',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'counties_id' => 3,
                'name' => 'Martonfa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'counties_id' => 3,
                'name' => 'Matty',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'counties_id' => 3,
                'name' => 'Máza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'counties_id' => 3,
                'name' => 'Mecseknádasd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'counties_id' => 3,
                'name' => 'Mecsekpölöske',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'counties_id' => 3,
                'name' => 'Mekényes',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'counties_id' => 3,
                'name' => 'Merenye',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'counties_id' => 3,
                'name' => 'Meződ',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'counties_id' => 3,
                'name' => 'Mindszentgodisa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'counties_id' => 3,
                'name' => 'Mohács',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'counties_id' => 3,
                'name' => 'Molvány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'counties_id' => 3,
                'name' => 'Monyoród',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'counties_id' => 3,
                'name' => 'Mozsgó',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'counties_id' => 3,
                'name' => 'Nagybudmér',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'counties_id' => 3,
                'name' => 'Nagycsány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'counties_id' => 3,
                'name' => 'Nagydobsza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'counties_id' => 3,
                'name' => 'Nagyhajmás',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'counties_id' => 3,
                'name' => 'Nagyharsány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'counties_id' => 3,
                'name' => 'Nagykozár',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'counties_id' => 3,
                'name' => 'Nagynyárád',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'counties_id' => 3,
                'name' => 'Nagypall',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'counties_id' => 3,
                'name' => 'Nagypeterd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'counties_id' => 3,
                'name' => 'Nagytótfalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'counties_id' => 3,
                'name' => 'Nagyváty',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'counties_id' => 3,
                'name' => 'Nemeske',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'counties_id' => 3,
                'name' => 'Nyugotszenterzsébet',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'counties_id' => 3,
                'name' => 'Óbánya',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'counties_id' => 3,
                'name' => 'Ócsárd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'counties_id' => 3,
                'name' => 'Ófalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'counties_id' => 3,
                'name' => 'Okorág',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'counties_id' => 3,
                'name' => 'Okorvölgy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'counties_id' => 3,
                'name' => 'Olasz',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'counties_id' => 3,
                'name' => 'Old',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'counties_id' => 3,
                'name' => 'Orfű',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'counties_id' => 3,
                'name' => 'Oroszló',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'counties_id' => 3,
                'name' => 'Ózdfalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'counties_id' => 3,
                'name' => 'Palé',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'counties_id' => 3,
                'name' => 'Palkonya',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'counties_id' => 3,
                'name' => 'Palotabozsok',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'counties_id' => 3,
                'name' => 'Páprád',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'counties_id' => 3,
                'name' => 'Patapoklosi',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'counties_id' => 3,
                'name' => 'Pécs',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'counties_id' => 3,
                'name' => 'Pécsbagota',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'counties_id' => 3,
                'name' => 'Pécsdevecser',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'counties_id' => 3,
                'name' => 'Pécsudvard',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'counties_id' => 3,
                'name' => 'Pécsvárad',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'counties_id' => 3,
                'name' => 'Pellérd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'counties_id' => 3,
                'name' => 'Pereked',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'counties_id' => 3,
                'name' => 'Peterd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'counties_id' => 3,
                'name' => 'Pettend',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'counties_id' => 3,
                'name' => 'Piskó',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'counties_id' => 3,
                'name' => 'Pócsa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'counties_id' => 3,
                'name' => 'Pogány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'counties_id' => 3,
                'name' => 'Rádfalva',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'counties_id' => 3,
                'name' => 'Regenye',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'counties_id' => 3,
                'name' => 'Romonya',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'counties_id' => 3,
                'name' => 'Rózsafa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'counties_id' => 3,
                'name' => 'Sámod',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'counties_id' => 3,
                'name' => 'Sárok',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'counties_id' => 3,
                'name' => 'Sásd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'counties_id' => 3,
                'name' => 'Sátorhely',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'counties_id' => 3,
                'name' => 'Sellye',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'counties_id' => 3,
                'name' => 'Siklós',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'counties_id' => 3,
                'name' => 'Siklósbodony',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'counties_id' => 3,
                'name' => 'Siklósnagyfalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'counties_id' => 3,
                'name' => 'Somberek',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'counties_id' => 3,
                'name' => 'Somogyapáti',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'counties_id' => 3,
                'name' => 'Somogyhárságy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'counties_id' => 3,
                'name' => 'Somogyhatvan',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'counties_id' => 3,
                'name' => 'Somogyviszló',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'counties_id' => 3,
                'name' => 'Sósvertike',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'counties_id' => 3,
                'name' => 'Sumony',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'counties_id' => 3,
                'name' => 'Szabadszentkirály',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'counties_id' => 3,
                'name' => 'Szágy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'counties_id' => 3,
                'name' => 'Szajk',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'counties_id' => 3,
                'name' => 'Szalánta',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'counties_id' => 3,
                'name' => 'Szalatnak',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'counties_id' => 3,
                'name' => 'Szaporca',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'counties_id' => 3,
                'name' => 'Szárász',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'counties_id' => 3,
                'name' => 'Szászvár',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'counties_id' => 3,
                'name' => 'Szava',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'counties_id' => 3,
                'name' => 'Szebény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'counties_id' => 3,
                'name' => 'Szederkény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'counties_id' => 3,
                'name' => 'Székelyszabar',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'counties_id' => 3,
                'name' => 'Szellő',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'counties_id' => 3,
                'name' => 'Szemely',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'counties_id' => 3,
                'name' => 'Szentdénes',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'counties_id' => 3,
                'name' => 'Szentegát',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'counties_id' => 3,
                'name' => 'Szentkatalin',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'counties_id' => 3,
                'name' => 'Szentlászló',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'counties_id' => 3,
                'name' => 'Szentlőrinc',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'counties_id' => 3,
                'name' => 'Szigetvár',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'counties_id' => 3,
                'name' => 'Szilágy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'counties_id' => 3,
                'name' => 'Szilvás',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'counties_id' => 3,
                'name' => 'Szőke',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'counties_id' => 3,
                'name' => 'Szőkéd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'counties_id' => 3,
                'name' => 'Szörény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'counties_id' => 3,
                'name' => 'Szulimán',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'counties_id' => 3,
                'name' => 'Szűr',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'counties_id' => 3,
                'name' => 'Tékes',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'counties_id' => 3,
                'name' => 'Teklafalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'counties_id' => 3,
                'name' => 'Tengeri',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'counties_id' => 3,
                'name' => 'Tésenfa',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'counties_id' => 3,
                'name' => 'Téseny',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'counties_id' => 3,
                'name' => 'Tófű',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'counties_id' => 3,
                'name' => 'Tormás',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'counties_id' => 3,
                'name' => 'Tótszentgyörgy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'counties_id' => 3,
                'name' => 'Töttös',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'counties_id' => 3,
                'name' => 'Túrony',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'counties_id' => 3,
                'name' => 'Udvar',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'counties_id' => 3,
                'name' => 'Újpetre',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'counties_id' => 3,
                'name' => 'Vajszló',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'counties_id' => 3,
                'name' => 'Várad',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'counties_id' => 3,
                'name' => 'Varga',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'counties_id' => 3,
                'name' => 'Vásárosbéc',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'counties_id' => 3,
                'name' => 'Vásárosdombó',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'counties_id' => 3,
                'name' => 'Vázsnok',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'counties_id' => 3,
                'name' => 'Vejti',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'counties_id' => 3,
                'name' => 'Vékény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'counties_id' => 3,
                'name' => 'Velény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'counties_id' => 3,
                'name' => 'Véménd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'counties_id' => 3,
                'name' => 'Versend',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'counties_id' => 3,
                'name' => 'Villány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'counties_id' => 3,
                'name' => 'Villánykövesd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'counties_id' => 3,
                'name' => 'Vokány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'counties_id' => 3,
                'name' => 'Zádor',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'counties_id' => 3,
                'name' => 'Zaláta',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'counties_id' => 3,
                'name' => 'Zengővárkony',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'counties_id' => 3,
                'name' => 'Zók',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'counties_id' => 4,
                'name' => 'Abaújalpár',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'counties_id' => 4,
                'name' => 'Abaújkér',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'counties_id' => 4,
                'name' => 'Abaújlak',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'counties_id' => 4,
                'name' => 'Abaújszántó',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'counties_id' => 4,
                'name' => 'Abaújszolnok',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'counties_id' => 4,
                'name' => 'Abaújvár',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'counties_id' => 4,
                'name' => 'Abod',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'counties_id' => 4,
                'name' => 'Aggtelek',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'counties_id' => 4,
                'name' => 'Alacska',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'counties_id' => 4,
                'name' => 'Alsóberecki',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'counties_id' => 4,
                'name' => 'Alsódobsza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'counties_id' => 4,
                'name' => 'Alsógagy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'counties_id' => 4,
                'name' => 'Alsóregmec',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'counties_id' => 4,
                'name' => 'Alsószuha',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'counties_id' => 4,
                'name' => 'Alsótelekes',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'counties_id' => 4,
                'name' => 'Alsóvadász',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'counties_id' => 4,
                'name' => 'Alsózsolca',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'counties_id' => 4,
                'name' => 'Arka',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'counties_id' => 4,
                'name' => 'Arló',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'counties_id' => 4,
                'name' => 'Arnót',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'counties_id' => 4,
                'name' => 'Ároktő',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'counties_id' => 4,
                'name' => 'Aszaló',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'counties_id' => 4,
                'name' => 'Baktakék',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'counties_id' => 4,
                'name' => 'Balajt',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'counties_id' => 4,
                'name' => 'Bánhorváti',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'counties_id' => 4,
                'name' => 'Bánréve',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'counties_id' => 4,
                'name' => 'Baskó',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'counties_id' => 4,
                'name' => 'Becskeháza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'counties_id' => 4,
                'name' => 'Bekecs',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'counties_id' => 4,
                'name' => 'Beret',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'counties_id' => 4,
                'name' => 'Berzék',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'counties_id' => 4,
                'name' => 'Bodroghalom',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'counties_id' => 4,
                'name' => 'Bodrogkeresztúr',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'counties_id' => 4,
                'name' => 'Bodrogkisfalud',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'counties_id' => 4,
                'name' => 'Bodrogolaszi',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'counties_id' => 4,
                'name' => 'Bódvalenke',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'counties_id' => 4,
                'name' => 'Bódvarákó',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'counties_id' => 4,
                'name' => 'Bódvaszilas',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'counties_id' => 4,
                'name' => 'Bogács',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'counties_id' => 4,
                'name' => 'Boldogkőújfalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'counties_id' => 4,
                'name' => 'Boldogkőváralja',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'counties_id' => 4,
                'name' => 'Boldva',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'counties_id' => 4,
                'name' => 'Borsodbóta',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'counties_id' => 4,
                'name' => 'Borsodgeszt',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'counties_id' => 4,
                'name' => 'Borsodivánka',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'counties_id' => 4,
                'name' => 'Borsodnádasd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'counties_id' => 4,
                'name' => 'Borsodszentgyörgy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'counties_id' => 4,
                'name' => 'Borsodszirák',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'counties_id' => 4,
                'name' => 'Bózsva',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'counties_id' => 4,
                'name' => 'Bőcs',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'counties_id' => 4,
                'name' => 'Bükkábrány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'counties_id' => 4,
                'name' => 'Bükkaranyos',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'counties_id' => 4,
                'name' => 'Bükkmogyorósd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'counties_id' => 4,
                'name' => 'Bükkszentkereszt',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'counties_id' => 4,
                'name' => 'Bükkzsérc',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'counties_id' => 4,
                'name' => 'Büttös',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'counties_id' => 4,
                'name' => 'Cigánd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'counties_id' => 4,
                'name' => 'Csenyéte',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'counties_id' => 4,
                'name' => 'Cserépfalu',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'counties_id' => 4,
                'name' => 'Cserépváralja',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'counties_id' => 4,
                'name' => 'Csernely',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'counties_id' => 4,
                'name' => 'Csincse',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'counties_id' => 4,
                'name' => 'Csobád',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'counties_id' => 4,
                'name' => 'Csobaj',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'counties_id' => 4,
                'name' => 'Csokvaomány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'counties_id' => 4,
                'name' => 'Damak',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'counties_id' => 4,
                'name' => 'Dámóc',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'counties_id' => 4,
                'name' => 'Debréte',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'counties_id' => 4,
                'name' => 'Dédestapolcsány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'counties_id' => 4,
                'name' => 'Detek',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'counties_id' => 4,
                'name' => 'Domaháza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'counties_id' => 4,
                'name' => 'Dövény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'counties_id' => 4,
                'name' => 'Dubicsány',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'counties_id' => 4,
                'name' => 'Edelény',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'counties_id' => 4,
                'name' => 'Egerlövő',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'counties_id' => 4,
                'name' => 'Égerszög',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'counties_id' => 4,
                'name' => 'Emőd',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'counties_id' => 4,
                'name' => 'Encs',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'counties_id' => 4,
                'name' => 'Erdőbénye',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'counties_id' => 4,
                'name' => 'Erdőhorváti',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'counties_id' => 4,
                'name' => 'Fáj',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'counties_id' => 4,
                'name' => 'Fancsal',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'counties_id' => 4,
                'name' => 'Felsőberecki',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'counties_id' => 4,
                'name' => 'Felsődobsza',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'counties_id' => 4,
                'name' => 'Felsőgagy',
                'created_at' => '2016-09-09 18:44:28',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'counties_id' => 4,
                'name' => 'Felsőkelecsény',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'counties_id' => 4,
                'name' => 'Felsőnyárád',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'counties_id' => 4,
                'name' => 'Felsőregmec',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'counties_id' => 4,
                'name' => 'Felsőtelekes',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'counties_id' => 4,
                'name' => 'Felsővadász',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'counties_id' => 4,
                'name' => 'Felsőzsolca',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'counties_id' => 4,
                'name' => 'Filkeháza',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'counties_id' => 4,
                'name' => 'Fony',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'counties_id' => 4,
                'name' => 'Forró',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'counties_id' => 4,
                'name' => 'Fulókércs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'counties_id' => 4,
                'name' => 'Füzér',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'counties_id' => 4,
                'name' => 'Füzérkajata',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'counties_id' => 4,
                'name' => 'Füzérkomlós',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'counties_id' => 4,
                'name' => 'Füzérradvány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'counties_id' => 4,
                'name' => 'Gadna',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'counties_id' => 4,
                'name' => 'Gagyapáti',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'counties_id' => 4,
                'name' => 'Gagybátor',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'counties_id' => 4,
                'name' => 'Gagyvendégi',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'counties_id' => 4,
                'name' => 'Galvács',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'counties_id' => 4,
                'name' => 'Garadna',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'counties_id' => 4,
                'name' => 'Gelej',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'counties_id' => 4,
                'name' => 'Gesztely',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'counties_id' => 4,
                'name' => 'Girincs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'counties_id' => 4,
                'name' => 'Golop',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'counties_id' => 4,
                'name' => 'Gömörszőlős',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'counties_id' => 4,
                'name' => 'Gönc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'counties_id' => 4,
                'name' => 'Göncruszka',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'counties_id' => 4,
                'name' => 'Györgytarló',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'counties_id' => 4,
                'name' => 'Halmaj',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'counties_id' => 4,
                'name' => 'Hangács',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'counties_id' => 4,
                'name' => 'Hangony',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'counties_id' => 4,
                'name' => 'Háromhuta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'counties_id' => 4,
                'name' => 'Harsány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'counties_id' => 4,
                'name' => 'Hegymeg',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'counties_id' => 4,
                'name' => 'Hejce',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'counties_id' => 4,
                'name' => 'Hejőbába',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'counties_id' => 4,
                'name' => 'Hejőkeresztúr',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'counties_id' => 4,
                'name' => 'Hejőkürt',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'counties_id' => 4,
                'name' => 'Hejőpapi',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'counties_id' => 4,
                'name' => 'Hejőszalonta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'counties_id' => 4,
                'name' => 'Hercegkút',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'counties_id' => 4,
                'name' => 'Hernádbűd',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'counties_id' => 4,
                'name' => 'Hernádcéce',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'counties_id' => 4,
                'name' => 'Hernádkak',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'counties_id' => 4,
                'name' => 'Hernádkércs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'counties_id' => 4,
                'name' => 'Hernádnémeti',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'counties_id' => 4,
                'name' => 'Hernádpetri',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'counties_id' => 4,
                'name' => 'Hernádszentandrás',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'counties_id' => 4,
                'name' => 'Hernádszurdok',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'counties_id' => 4,
                'name' => 'Hernádvécse',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'counties_id' => 4,
                'name' => 'Hét',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'counties_id' => 4,
                'name' => 'Hidasnémeti',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'counties_id' => 4,
                'name' => 'Hidvégardó',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'counties_id' => 4,
                'name' => 'Hollóháza',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'counties_id' => 4,
                'name' => 'Homrogd',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'counties_id' => 4,
                'name' => 'Igrici',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'counties_id' => 4,
                'name' => 'Imola',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'counties_id' => 4,
                'name' => 'Ináncs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'counties_id' => 4,
                'name' => 'Irota',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'counties_id' => 4,
                'name' => 'Izsófalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'counties_id' => 4,
                'name' => 'Jákfalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'counties_id' => 4,
                'name' => 'Járdánháza',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'counties_id' => 4,
                'name' => 'Jósvafő',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'counties_id' => 4,
                'name' => 'Kács',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'counties_id' => 4,
                'name' => 'Kánó',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'counties_id' => 4,
                'name' => 'Kány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'counties_id' => 4,
                'name' => 'Karcsa',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'counties_id' => 4,
                'name' => 'Karos',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'counties_id' => 4,
                'name' => 'Kazincbarcika',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'counties_id' => 4,
                'name' => 'Kázsmárk',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'counties_id' => 4,
                'name' => 'Kéked',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'counties_id' => 4,
                'name' => 'Kelemér',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'counties_id' => 4,
                'name' => 'Kenézlő',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'counties_id' => 4,
                'name' => 'Keresztéte',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'counties_id' => 4,
                'name' => 'Kesznyéten',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'counties_id' => 4,
                'name' => 'Királd',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'counties_id' => 4,
                'name' => 'Kiscsécs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'counties_id' => 4,
                'name' => 'Kisgyőr',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'counties_id' => 4,
                'name' => 'Kishuta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'counties_id' => 4,
                'name' => 'Kiskinizs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'counties_id' => 4,
                'name' => 'Kisrozvágy',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'counties_id' => 4,
                'name' => 'Kissikátor',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'counties_id' => 4,
                'name' => 'Kistokaj',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'counties_id' => 4,
                'name' => 'Komjáti',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'counties_id' => 4,
                'name' => 'Komlóska',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'counties_id' => 4,
                'name' => 'Kondó',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'counties_id' => 4,
                'name' => 'Korlát',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'counties_id' => 4,
                'name' => 'Kovácsvágás',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'counties_id' => 4,
                'name' => 'Köröm',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'counties_id' => 4,
                'name' => 'Krasznokvajda',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'counties_id' => 4,
                'name' => 'Kupa',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'counties_id' => 4,
                'name' => 'Kurityán',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'counties_id' => 4,
                'name' => 'Lácacséke',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'counties_id' => 4,
                'name' => 'Ládbesenyő',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'counties_id' => 4,
                'name' => 'Lak',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'counties_id' => 4,
                'name' => 'Legyesbénye',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'counties_id' => 4,
                'name' => 'Léh',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'counties_id' => 4,
                'name' => 'Lénárddaróc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'counties_id' => 4,
                'name' => 'Litka',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'counties_id' => 4,
                'name' => 'Mád',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'counties_id' => 4,
                'name' => 'Makkoshotyka',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'counties_id' => 4,
                'name' => 'Mályi',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'counties_id' => 4,
                'name' => 'Mályinka',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'counties_id' => 4,
                'name' => 'Martonyi',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'counties_id' => 4,
                'name' => 'Megyaszó',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'counties_id' => 4,
                'name' => 'Méra',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'counties_id' => 4,
                'name' => 'Meszes',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'counties_id' => 4,
                'name' => 'Mezőcsát',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'counties_id' => 4,
                'name' => 'Mezőkeresztes',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'counties_id' => 4,
                'name' => 'Mezőkövesd',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'counties_id' => 4,
                'name' => 'Mezőnagymihály',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'counties_id' => 4,
                'name' => 'Mezőnyárád',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'counties_id' => 4,
                'name' => 'Mezőzombor',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'counties_id' => 4,
                'name' => 'Mikóháza',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'counties_id' => 4,
                'name' => 'Miskolc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'counties_id' => 4,
                'name' => 'Mogyoróska',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'counties_id' => 4,
                'name' => 'Monaj',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'counties_id' => 4,
                'name' => 'Monok',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'counties_id' => 4,
                'name' => 'Múcsony',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'counties_id' => 4,
                'name' => 'Muhi',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'counties_id' => 4,
                'name' => 'Nagybarca',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'counties_id' => 4,
                'name' => 'Nagycsécs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'counties_id' => 4,
                'name' => 'Nagyhuta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'counties_id' => 4,
                'name' => 'Nagykinizs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'counties_id' => 4,
                'name' => 'Nagyrozvágy',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'counties_id' => 4,
                'name' => 'Négyes',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'counties_id' => 4,
                'name' => 'Nekézseny',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'counties_id' => 4,
                'name' => 'Nemesbikk',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'counties_id' => 4,
                'name' => 'Novajidrány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'counties_id' => 4,
                'name' => 'Nyékládháza',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'counties_id' => 4,
                'name' => 'Nyésta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'counties_id' => 4,
                'name' => 'Nyíri',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'counties_id' => 4,
                'name' => 'Nyomár',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'counties_id' => 4,
                'name' => 'Olaszliszka',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'counties_id' => 4,
                'name' => 'Onga',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'counties_id' => 4,
                'name' => 'Ónod',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'counties_id' => 4,
                'name' => 'Ormosbánya',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'counties_id' => 4,
                'name' => 'Oszlár',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'counties_id' => 4,
                'name' => 'Ózd',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'counties_id' => 4,
                'name' => 'Pácin',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'counties_id' => 4,
                'name' => 'Pálháza',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'counties_id' => 4,
                'name' => 'Pamlény',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'counties_id' => 4,
                'name' => 'Pányok',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'counties_id' => 4,
                'name' => 'Parasznya',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'counties_id' => 4,
                'name' => 'Pere',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'counties_id' => 4,
                'name' => 'Perecse',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'counties_id' => 4,
                'name' => 'Perkupa',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'counties_id' => 4,
                'name' => 'Prügy',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'counties_id' => 4,
                'name' => 'Pusztafalu',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'counties_id' => 4,
                'name' => 'Pusztaradvány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'counties_id' => 4,
                'name' => 'Putnok',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'counties_id' => 4,
                'name' => 'Radostyán',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'counties_id' => 4,
                'name' => 'Ragály',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'counties_id' => 4,
                'name' => 'Rakaca',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'counties_id' => 4,
                'name' => 'Rakacaszend',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'counties_id' => 4,
                'name' => 'Rásonysápberencs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'counties_id' => 4,
                'name' => 'Rátka',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'counties_id' => 4,
                'name' => 'Regéc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'counties_id' => 4,
                'name' => 'Répáshuta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'counties_id' => 4,
                'name' => 'Révleányvár',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'counties_id' => 4,
                'name' => 'Ricse',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'counties_id' => 4,
                'name' => 'Rudabánya',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'counties_id' => 4,
                'name' => 'Rudolftelep',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'counties_id' => 4,
                'name' => 'Sajóbábony',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'counties_id' => 4,
                'name' => 'Sajóecseg',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'counties_id' => 4,
                'name' => 'Sajógalgóc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'counties_id' => 4,
                'name' => 'Sajóhídvég',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'counties_id' => 4,
                'name' => 'Sajóivánka',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'counties_id' => 4,
                'name' => 'Sajókápolna',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'counties_id' => 4,
                'name' => 'Sajókaza',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'counties_id' => 4,
                'name' => 'Sajókeresztúr',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'counties_id' => 4,
                'name' => 'Sajólád',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'counties_id' => 4,
                'name' => 'Sajólászlófalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'counties_id' => 4,
                'name' => 'Sajómercse',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'counties_id' => 4,
                'name' => 'Sajónémeti',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'counties_id' => 4,
                'name' => 'Sajóörös',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'counties_id' => 4,
                'name' => 'Sajópálfala',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'counties_id' => 4,
                'name' => 'Sajópetri',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'counties_id' => 4,
                'name' => 'Sajópüspöki',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'counties_id' => 4,
                'name' => 'Sajósenye',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'counties_id' => 4,
                'name' => 'Sajószentpéter',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'counties_id' => 4,
                'name' => 'Sajószöged',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'counties_id' => 4,
                'name' => 'Sajóvámos',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'counties_id' => 4,
                'name' => 'Sajóvelezd',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'counties_id' => 4,
                'name' => 'Sály',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'counties_id' => 4,
                'name' => 'Sárazsadány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'counties_id' => 4,
                'name' => 'Sárospatak',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'counties_id' => 4,
                'name' => 'Sáta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'counties_id' => 4,
                'name' => 'Sátoraljaújhely',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'counties_id' => 4,
                'name' => 'Selyeb',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'counties_id' => 4,
                'name' => 'Semjén',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'counties_id' => 4,
                'name' => 'Serényfalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'counties_id' => 4,
                'name' => 'Sima',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'counties_id' => 4,
                'name' => 'Sóstófalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'counties_id' => 4,
                'name' => 'Szakácsi',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'counties_id' => 4,
                'name' => 'Szakáld',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'counties_id' => 4,
                'name' => 'Szalaszend',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'counties_id' => 4,
                'name' => 'Szalonna',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'counties_id' => 4,
                'name' => 'Szászfa',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'counties_id' => 4,
                'name' => 'Szegi',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'counties_id' => 4,
                'name' => 'Szegilong',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'counties_id' => 4,
                'name' => 'Szemere',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'counties_id' => 4,
                'name' => 'Szendrő',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'counties_id' => 4,
                'name' => 'Szendrőlád',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'counties_id' => 4,
                'name' => 'Szentistván',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'counties_id' => 4,
                'name' => 'Szentistvánbaksa',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'counties_id' => 4,
                'name' => 'Szerencs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'counties_id' => 4,
                'name' => 'Szikszó',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'counties_id' => 4,
                'name' => 'Szin',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'counties_id' => 4,
                'name' => 'Szinpetri',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'counties_id' => 4,
                'name' => 'Szirmabesenyő',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'counties_id' => 4,
                'name' => 'Szomolya',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'counties_id' => 4,
                'name' => 'Szögliget',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'counties_id' => 4,
                'name' => 'Szőlősardó',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'counties_id' => 4,
                'name' => 'Szuhafő',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'counties_id' => 4,
                'name' => 'Szuhakálló',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'counties_id' => 4,
                'name' => 'Szuhogy',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'counties_id' => 4,
                'name' => 'Taktabáj',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'counties_id' => 4,
                'name' => 'Taktaharkány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'counties_id' => 4,
                'name' => 'Taktakenéz',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'counties_id' => 4,
                'name' => 'Taktaszada',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'counties_id' => 4,
                'name' => 'Tállya',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'counties_id' => 4,
                'name' => 'Tarcal',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'counties_id' => 4,
                'name' => 'Tard',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'counties_id' => 4,
                'name' => 'Tardona',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'counties_id' => 4,
                'name' => 'Telkibánya',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'counties_id' => 4,
                'name' => 'Teresztenye',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'counties_id' => 4,
                'name' => 'Tibolddaróc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'counties_id' => 4,
                'name' => 'Tiszabábolna',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'counties_id' => 4,
                'name' => 'Tiszacsermely',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'counties_id' => 4,
                'name' => 'Tiszadorogma',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'counties_id' => 4,
                'name' => 'Tiszakarád',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'counties_id' => 4,
                'name' => 'Tiszakeszi',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'counties_id' => 4,
                'name' => 'Tiszaladány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'counties_id' => 4,
                'name' => 'Tiszalúc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'counties_id' => 4,
                'name' => 'Tiszapalkonya',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'counties_id' => 4,
                'name' => 'Tiszatardos',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'counties_id' => 4,
                'name' => 'Tiszatarján',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'counties_id' => 4,
                'name' => 'Tiszaújváros',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'counties_id' => 4,
                'name' => 'Tiszavalk',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'counties_id' => 4,
                'name' => 'Tokaj',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'counties_id' => 4,
                'name' => 'Tolcsva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'counties_id' => 4,
                'name' => 'Tomor',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'counties_id' => 4,
                'name' => 'Tornabarakony',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'counties_id' => 4,
                'name' => 'Tornakápolna',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'counties_id' => 4,
                'name' => 'Tornanádaska',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'counties_id' => 4,
                'name' => 'Tornaszentandrás',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'counties_id' => 4,
                'name' => 'Tornaszentjakab',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'counties_id' => 4,
                'name' => 'Tornyosnémeti',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'counties_id' => 4,
                'name' => 'Trizs',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'counties_id' => 4,
                'name' => 'Újcsanálos',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'counties_id' => 4,
                'name' => 'Uppony',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'counties_id' => 4,
                'name' => 'Vadna',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'counties_id' => 4,
                'name' => 'Vágáshuta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'counties_id' => 4,
                'name' => 'Vajdácska',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'counties_id' => 4,
                'name' => 'Vámosújfalu',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'counties_id' => 4,
                'name' => 'Varbó',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'counties_id' => 4,
                'name' => 'Varbóc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'counties_id' => 4,
                'name' => 'Vatta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'counties_id' => 4,
                'name' => 'Vilmány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'counties_id' => 4,
                'name' => 'Vilyvitány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'counties_id' => 4,
                'name' => 'Viss',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'counties_id' => 4,
                'name' => 'Viszló',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'counties_id' => 4,
                'name' => 'Vizsoly',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'counties_id' => 4,
                'name' => 'Zádorfalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'counties_id' => 4,
                'name' => 'Zalkod',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'counties_id' => 4,
                'name' => 'Zemplénagárd',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'counties_id' => 4,
                'name' => 'Ziliz',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'counties_id' => 4,
                'name' => 'Zubogy',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'counties_id' => 4,
                'name' => 'Zsujta',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'counties_id' => 5,
                'name' => 'Algyő',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'counties_id' => 5,
                'name' => 'Ambrózfalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'counties_id' => 5,
                'name' => 'Apátfalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'counties_id' => 5,
                'name' => 'Árpádhalom',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'counties_id' => 5,
                'name' => 'Ásotthalom',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'counties_id' => 5,
                'name' => 'Baks',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'counties_id' => 5,
                'name' => 'Balástya',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'counties_id' => 5,
                'name' => 'Bordány',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'counties_id' => 5,
                'name' => 'Csanádalberti',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'counties_id' => 5,
                'name' => 'Csanádpalota',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'counties_id' => 5,
                'name' => 'Csanytelek',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'counties_id' => 5,
                'name' => 'Csengele',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'counties_id' => 5,
                'name' => 'Csongrád',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'counties_id' => 5,
                'name' => 'Derekegyház',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'counties_id' => 5,
                'name' => 'Deszk',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'counties_id' => 5,
                'name' => 'Dóc',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'counties_id' => 5,
                'name' => 'Domaszék',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'counties_id' => 5,
                'name' => 'Eperjes',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'counties_id' => 5,
                'name' => 'Fábiánsebestyén',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'counties_id' => 5,
                'name' => 'Felgyő',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'counties_id' => 5,
                'name' => 'Ferencszállás',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'counties_id' => 5,
                'name' => 'Forráskút',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'counties_id' => 5,
                'name' => 'Földeák',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'counties_id' => 5,
                'name' => 'Hódmezővásárhely',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'counties_id' => 5,
                'name' => 'Királyhegyes',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'counties_id' => 5,
                'name' => 'Kistelek',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'counties_id' => 5,
                'name' => 'Kiszombor',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'counties_id' => 5,
                'name' => 'Klárafalva',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'counties_id' => 5,
                'name' => 'Kövegy',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'counties_id' => 5,
                'name' => 'Kübekháza',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'counties_id' => 5,
                'name' => 'Magyarcsanád',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'counties_id' => 5,
                'name' => 'Makó',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'counties_id' => 5,
                'name' => 'Maroslele',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'counties_id' => 5,
                'name' => 'Mártély',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'counties_id' => 5,
                'name' => 'Mindszent',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'counties_id' => 5,
                'name' => 'Mórahalom',
                'created_at' => '2016-09-09 18:44:29',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'counties_id' => 5,
                'name' => 'Nagyér',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'counties_id' => 5,
                'name' => 'Nagylak',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'counties_id' => 5,
                'name' => 'Nagymágocs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'counties_id' => 5,
                'name' => 'Nagytőke',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'counties_id' => 5,
                'name' => 'Óföldeák',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'counties_id' => 5,
                'name' => 'Ópusztaszer',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'counties_id' => 5,
                'name' => 'Öttömös',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'counties_id' => 5,
                'name' => 'Pitvaros',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'counties_id' => 5,
                'name' => 'Pusztamérges',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'counties_id' => 5,
                'name' => 'Pusztaszer',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'counties_id' => 5,
                'name' => 'Röszke',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'counties_id' => 5,
                'name' => 'Ruzsa',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'counties_id' => 5,
                'name' => 'Sándorfalva',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'counties_id' => 5,
                'name' => 'Szatymaz',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'counties_id' => 5,
                'name' => 'Szeged',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'counties_id' => 5,
                'name' => 'Szegvár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'counties_id' => 5,
                'name' => 'Székkutas',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'counties_id' => 5,
                'name' => 'Szentes',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'counties_id' => 5,
                'name' => 'Tiszasziget',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'counties_id' => 5,
                'name' => 'Tömörkény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'counties_id' => 5,
                'name' => 'Újszentiván',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'counties_id' => 5,
                'name' => 'Üllés',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'counties_id' => 5,
                'name' => 'Zákányszék',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'counties_id' => 5,
                'name' => 'Zsombó',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'counties_id' => 6,
                'name' => 'Aba',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'counties_id' => 6,
                'name' => 'Adony',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'counties_id' => 6,
                'name' => 'Alap',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'counties_id' => 6,
                'name' => 'Alcsútdoboz',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'counties_id' => 6,
                'name' => 'Alsószentiván',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'counties_id' => 6,
                'name' => 'Bakonycsernye',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'counties_id' => 6,
                'name' => 'Bakonykúti',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'counties_id' => 6,
                'name' => 'Balinka',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'counties_id' => 6,
                'name' => 'Baracs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'counties_id' => 6,
                'name' => 'Baracska',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'counties_id' => 6,
                'name' => 'Beloiannisz',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'counties_id' => 6,
                'name' => 'Besnyő',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'counties_id' => 6,
                'name' => 'Bicske',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'counties_id' => 6,
                'name' => 'Bodajk',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'counties_id' => 6,
                'name' => 'Bodmér',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'counties_id' => 6,
                'name' => 'Cece',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'counties_id' => 6,
                'name' => 'Csabdi',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'counties_id' => 6,
                'name' => 'Csákberény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'counties_id' => 6,
                'name' => 'Csákvár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'counties_id' => 6,
                'name' => 'Csókakő',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'counties_id' => 6,
                'name' => 'Csór',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'counties_id' => 6,
                'name' => 'Csősz',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'counties_id' => 6,
                'name' => 'Daruszentmiklós',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'counties_id' => 6,
                'name' => 'Dég',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'counties_id' => 6,
                'name' => 'Dunaújváros',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'counties_id' => 6,
                'name' => 'Előszállás',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'counties_id' => 6,
                'name' => 'Enying',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'counties_id' => 6,
                'name' => 'Ercsi',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'counties_id' => 6,
                'name' => 'Etyek',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'counties_id' => 6,
                'name' => 'Fehérvárcsurgó',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'counties_id' => 6,
                'name' => 'Felcsút',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'counties_id' => 6,
                'name' => 'Füle',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'counties_id' => 6,
                'name' => 'Gánt',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'counties_id' => 6,
                'name' => 'Gárdony',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'counties_id' => 6,
                'name' => 'Gyúró',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'counties_id' => 6,
                'name' => 'Hantos',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'counties_id' => 6,
                'name' => 'Igar',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'counties_id' => 6,
                'name' => 'Iszkaszentgyörgy',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'counties_id' => 6,
                'name' => 'Isztimér',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'counties_id' => 6,
                'name' => 'Iváncsa',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'counties_id' => 6,
                'name' => 'Jenő',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'counties_id' => 6,
                'name' => 'Kajászó',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'counties_id' => 6,
                'name' => 'Káloz',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'counties_id' => 6,
                'name' => 'Kápolnásnyék',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'counties_id' => 6,
                'name' => 'Kincsesbánya',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'counties_id' => 6,
                'name' => 'Kisapostag',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'counties_id' => 6,
                'name' => 'Kisláng',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'counties_id' => 6,
                'name' => 'Kőszárhegy',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'counties_id' => 6,
                'name' => 'Kulcs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'counties_id' => 6,
                'name' => 'Lajoskomárom',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'counties_id' => 6,
                'name' => 'Lepsény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'counties_id' => 6,
                'name' => 'Lovasberény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'counties_id' => 6,
                'name' => 'Magyaralmás',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'counties_id' => 6,
                'name' => 'Mány',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'counties_id' => 6,
                'name' => 'Martonvásár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'counties_id' => 6,
                'name' => 'Mátyásdomb',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'counties_id' => 6,
                'name' => 'Mezőfalva',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'counties_id' => 6,
                'name' => 'Mezőkomárom',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'counties_id' => 6,
                'name' => 'Mezőszentgyörgy',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'counties_id' => 6,
                'name' => 'Mezőszilas',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'counties_id' => 6,
                'name' => 'Moha',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'counties_id' => 6,
                'name' => 'Mór',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'counties_id' => 6,
                'name' => 'Nadap',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'counties_id' => 6,
                'name' => 'Nádasdladány',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'counties_id' => 6,
                'name' => 'Nagykarácsony',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'counties_id' => 6,
                'name' => 'Nagylók',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'counties_id' => 6,
                'name' => 'Nagyveleg',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'counties_id' => 6,
                'name' => 'Nagyvenyim',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'counties_id' => 6,
                'name' => 'Pákozd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'counties_id' => 6,
                'name' => 'Pátka',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'counties_id' => 6,
                'name' => 'Pázmánd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'counties_id' => 6,
                'name' => 'Perkáta',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'counties_id' => 6,
                'name' => 'Polgárdi',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'counties_id' => 6,
                'name' => 'Pusztaszabolcs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'counties_id' => 6,
                'name' => 'Pusztavám',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'counties_id' => 6,
                'name' => 'Rácalmás',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'counties_id' => 6,
                'name' => 'Ráckeresztúr',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'counties_id' => 6,
                'name' => 'Sárbogárd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'counties_id' => 6,
                'name' => 'Sáregres',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'counties_id' => 6,
                'name' => 'Sárkeresztes',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'counties_id' => 6,
                'name' => 'Sárkeresztúr',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'counties_id' => 6,
                'name' => 'Sárkeszi',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'counties_id' => 6,
                'name' => 'Sárosd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'counties_id' => 6,
                'name' => 'Sárszentágota',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'counties_id' => 6,
                'name' => 'Sárszentmihály',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'counties_id' => 6,
                'name' => 'Seregélyes',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'counties_id' => 6,
                'name' => 'Soponya',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'counties_id' => 6,
                'name' => 'Söréd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'counties_id' => 6,
                'name' => 'Sukoró',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'counties_id' => 6,
                'name' => 'Szabadbattyán',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'counties_id' => 6,
                'name' => 'Szabadegyháza',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'counties_id' => 6,
                'name' => 'Szabadhídvég',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'counties_id' => 6,
                'name' => 'Szár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'counties_id' => 6,
                'name' => 'Szárliget',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'counties_id' => 6,
                'name' => 'Székesfehérvár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'counties_id' => 6,
                'name' => 'Tabajd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'counties_id' => 6,
                'name' => 'Tác',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'counties_id' => 6,
                'name' => 'Tordas',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'counties_id' => 6,
                'name' => 'Újbarok',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'counties_id' => 6,
                'name' => 'Úrhida',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'counties_id' => 6,
                'name' => 'Vajta',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'counties_id' => 6,
                'name' => 'Vál',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'counties_id' => 6,
                'name' => 'Velence',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'counties_id' => 6,
                'name' => 'Vereb',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'counties_id' => 6,
                'name' => 'Vértesacsa',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'counties_id' => 6,
                'name' => 'Vértesboglár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'counties_id' => 6,
                'name' => 'Zámoly',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'counties_id' => 6,
                'name' => 'Zichyújfalu',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'counties_id' => 7,
                'name' => 'Abda',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'counties_id' => 7,
                'name' => 'Acsalag',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'counties_id' => 7,
                'name' => 'Ágfalva',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'counties_id' => 7,
                'name' => 'Agyagosszergény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'counties_id' => 7,
                'name' => 'Árpás',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'counties_id' => 7,
                'name' => 'Ásványráró',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'counties_id' => 7,
                'name' => 'Babót',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'counties_id' => 7,
                'name' => 'Bágyogszovát',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'counties_id' => 7,
                'name' => 'Barbacs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'counties_id' => 7,
                'name' => 'Beled',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'counties_id' => 7,
                'name' => 'Bezenye',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'counties_id' => 7,
                'name' => 'Bezi',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'counties_id' => 7,
                'name' => 'Bodonhely',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'counties_id' => 7,
                'name' => 'Bogyoszló',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'counties_id' => 7,
                'name' => 'Bőny',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'counties_id' => 7,
                'name' => 'Börcs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'counties_id' => 7,
                'name' => 'Bősárkány',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'counties_id' => 7,
                'name' => 'Cakóháza',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'counties_id' => 7,
                'name' => 'Cirák',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'counties_id' => 7,
                'name' => 'Csáfordjánosfa',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'counties_id' => 7,
                'name' => 'Csapod',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'counties_id' => 7,
                'name' => 'Csér',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'counties_id' => 7,
                'name' => 'Csikvánd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'counties_id' => 7,
                'name' => 'Csorna',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'counties_id' => 7,
                'name' => 'Darnózseli',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'counties_id' => 7,
                'name' => 'Dénesfa',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'counties_id' => 7,
                'name' => 'Dör',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'counties_id' => 7,
                'name' => 'Dunakiliti',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'counties_id' => 7,
                'name' => 'Dunaremete',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'counties_id' => 7,
                'name' => 'Dunaszeg',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'counties_id' => 7,
                'name' => 'Dunaszentpál',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'counties_id' => 7,
                'name' => 'Dunasziget',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'counties_id' => 7,
                'name' => 'Ebergőc',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'counties_id' => 7,
                'name' => 'Écs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'counties_id' => 7,
                'name' => 'Edve',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'counties_id' => 7,
                'name' => 'Egyed',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'counties_id' => 7,
                'name' => 'Egyházasfalu',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'counties_id' => 7,
                'name' => 'Enese',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'counties_id' => 7,
                'name' => 'Farád',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'counties_id' => 7,
                'name' => 'Fehértó',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'counties_id' => 7,
                'name' => 'Feketeerdő',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'counties_id' => 7,
                'name' => 'Felpéc',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'counties_id' => 7,
                'name' => 'Fertőboz',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'counties_id' => 7,
                'name' => 'Fertőd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'counties_id' => 7,
                'name' => 'Fertőendréd',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'counties_id' => 7,
                'name' => 'Fertőhomok',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'counties_id' => 7,
                'name' => 'Fertőrákos',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'counties_id' => 7,
                'name' => 'Fertőszentmiklós',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'counties_id' => 7,
                'name' => 'Fertőszéplak',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'counties_id' => 7,
                'name' => 'Gönyű',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'counties_id' => 7,
                'name' => 'Gyalóka',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'counties_id' => 7,
                'name' => 'Gyarmat',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'counties_id' => 7,
                'name' => 'Gyóró',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'counties_id' => 7,
                'name' => 'Gyömöre',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'counties_id' => 7,
                'name' => 'Győr',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'counties_id' => 7,
                'name' => 'Győrasszonyfa',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'counties_id' => 7,
                'name' => 'Győrladamér',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'counties_id' => 7,
                'name' => 'Győrság',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'counties_id' => 7,
                'name' => 'Győrsövényház',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'counties_id' => 7,
                'name' => 'Győrszemere',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'counties_id' => 7,
                'name' => 'Győrújbarát',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'counties_id' => 7,
                'name' => 'Győrújfalu',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'counties_id' => 7,
                'name' => 'Győrzámoly',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'counties_id' => 7,
                'name' => 'Halászi',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'counties_id' => 7,
                'name' => 'Harka',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'counties_id' => 7,
                'name' => 'Hédervár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'counties_id' => 7,
                'name' => 'Hegyeshalom',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'counties_id' => 7,
                'name' => 'Hegykő',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'counties_id' => 7,
                'name' => 'Hidegség',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'counties_id' => 7,
                'name' => 'Himod',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'counties_id' => 7,
                'name' => 'Hövej',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'counties_id' => 7,
                'name' => 'Ikrény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'counties_id' => 7,
                'name' => 'Iván',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'counties_id' => 7,
                'name' => 'Jánossomorja',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'counties_id' => 7,
                'name' => 'Jobaháza',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'counties_id' => 7,
                'name' => 'Kajárpéc',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'counties_id' => 7,
                'name' => 'Kapuvár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'counties_id' => 7,
                'name' => 'Károlyháza',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'counties_id' => 7,
                'name' => 'Kimle',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'counties_id' => 7,
                'name' => 'Kisbabot',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'counties_id' => 7,
                'name' => 'Kisbajcs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'counties_id' => 7,
                'name' => 'Kisbodak',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'counties_id' => 7,
                'name' => 'Kisfalud',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'counties_id' => 7,
                'name' => 'Kóny',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'counties_id' => 7,
                'name' => 'Kópháza',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'counties_id' => 7,
                'name' => 'Koroncó',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'counties_id' => 7,
                'name' => 'Kunsziget',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'counties_id' => 7,
                'name' => 'Lébény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'counties_id' => 7,
                'name' => 'Levél',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'counties_id' => 7,
                'name' => 'Lipót',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'counties_id' => 7,
                'name' => 'Lövő',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'counties_id' => 7,
                'name' => 'Maglóca',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'counties_id' => 7,
                'name' => 'Magyarkeresztúr',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'counties_id' => 7,
                'name' => 'Máriakálnok',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'counties_id' => 7,
                'name' => 'Markotabödöge',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'counties_id' => 7,
                'name' => 'Mecsér',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'counties_id' => 7,
                'name' => 'Mérges',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'counties_id' => 7,
                'name' => 'Mezőörs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'counties_id' => 7,
                'name' => 'Mihályi',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'counties_id' => 7,
                'name' => 'Mórichida',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'counties_id' => 7,
                'name' => 'Mosonmagyaróvár',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'counties_id' => 7,
                'name' => 'Mosonszentmiklós',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'counties_id' => 7,
                'name' => 'Mosonszolnok',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'counties_id' => 7,
                'name' => 'Nagybajcs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'counties_id' => 7,
                'name' => 'Nagycenk',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'counties_id' => 7,
                'name' => 'Nagylózs',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'counties_id' => 7,
                'name' => 'Nagyszentjános',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'counties_id' => 7,
                'name' => 'Nemeskér',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'counties_id' => 7,
                'name' => 'Nyalka',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'counties_id' => 7,
                'name' => 'Nyúl',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'counties_id' => 7,
                'name' => 'Osli',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'counties_id' => 7,
                'name' => 'Öttevény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'counties_id' => 7,
                'name' => 'Páli',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'counties_id' => 7,
                'name' => 'Pannonhalma',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'counties_id' => 7,
                'name' => 'Pásztori',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'counties_id' => 7,
                'name' => 'Pázmándfalu',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'counties_id' => 7,
                'name' => 'Pér',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'counties_id' => 7,
                'name' => 'Pereszteg',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'counties_id' => 7,
                'name' => 'Petőháza',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'counties_id' => 7,
                'name' => 'Pinnye',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'counties_id' => 7,
                'name' => 'Potyond',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1140,
                'counties_id' => 7,
                'name' => 'Pusztacsalád',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1141,
                'counties_id' => 7,
                'name' => 'Püski',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1142,
                'counties_id' => 7,
                'name' => 'Rábacsanak',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1143,
                'counties_id' => 7,
                'name' => 'Rábacsécsény',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1144,
                'counties_id' => 7,
                'name' => 'Rábakecöl',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1145,
                'counties_id' => 7,
                'name' => 'Rábapatona',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1146,
                'counties_id' => 7,
                'name' => 'Rábapordány',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'counties_id' => 7,
                'name' => 'Rábasebes',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1148,
                'counties_id' => 7,
                'name' => 'Rábaszentandrás',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1149,
                'counties_id' => 7,
                'name' => 'Rábaszentmihály',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1150,
                'counties_id' => 7,
                'name' => 'Rábaszentmiklós',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1151,
                'counties_id' => 7,
                'name' => 'Rábatamási',
                'created_at' => '2016-09-09 18:44:30',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1152,
                'counties_id' => 7,
                'name' => 'Rábcakapi',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1153,
                'counties_id' => 7,
                'name' => 'Rajka',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1154,
                'counties_id' => 7,
                'name' => 'Ravazd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1155,
                'counties_id' => 7,
                'name' => 'Répceszemere',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'counties_id' => 7,
                'name' => 'Répcevis',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'counties_id' => 7,
                'name' => 'Rétalap',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1158,
                'counties_id' => 7,
                'name' => 'Röjtökmuzsaj',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'counties_id' => 7,
                'name' => 'Sarród',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1160,
                'counties_id' => 7,
                'name' => 'Sobor',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1161,
                'counties_id' => 7,
                'name' => 'Sokorópátka',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1162,
                'counties_id' => 7,
                'name' => 'Sopron',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'counties_id' => 7,
                'name' => 'Sopronhorpács',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1164,
                'counties_id' => 7,
                'name' => 'Sopronkövesd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1165,
                'counties_id' => 7,
                'name' => 'Sopronnémeti',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1166,
                'counties_id' => 7,
                'name' => 'Szakony',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1167,
                'counties_id' => 7,
                'name' => 'Szany',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1168,
                'counties_id' => 7,
                'name' => 'Szárföld',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1169,
                'counties_id' => 7,
                'name' => 'Szerecseny',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1170,
                'counties_id' => 7,
                'name' => 'Szil',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1171,
                'counties_id' => 7,
                'name' => 'Szilsárkány',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1172,
                'counties_id' => 7,
                'name' => 'Táp',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1173,
                'counties_id' => 7,
                'name' => 'Tápszentmiklós',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1174,
                'counties_id' => 7,
                'name' => 'Tarjánpuszta',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1175,
                'counties_id' => 7,
                'name' => 'Tárnokréti',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1176,
                'counties_id' => 7,
                'name' => 'Tényő',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1177,
                'counties_id' => 7,
                'name' => 'Tét',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1178,
                'counties_id' => 7,
                'name' => 'Töltéstava',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1179,
                'counties_id' => 7,
                'name' => 'Újkér',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1180,
                'counties_id' => 7,
                'name' => 'Újrónafő',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1181,
                'counties_id' => 7,
                'name' => 'Und',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1182,
                'counties_id' => 7,
                'name' => 'Vadosfa',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1183,
                'counties_id' => 7,
                'name' => 'Vág',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1184,
                'counties_id' => 7,
                'name' => 'Vámosszabadi',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1185,
                'counties_id' => 7,
                'name' => 'Várbalog',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1186,
                'counties_id' => 7,
                'name' => 'Vásárosfalu',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1187,
                'counties_id' => 7,
                'name' => 'Vének',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1188,
                'counties_id' => 7,
                'name' => 'Veszkény',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1189,
                'counties_id' => 7,
                'name' => 'Vitnyéd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1190,
                'counties_id' => 7,
                'name' => 'Völcsej',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1191,
                'counties_id' => 7,
                'name' => 'Zsebeháza',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1192,
                'counties_id' => 7,
                'name' => 'Zsira',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1193,
                'counties_id' => 8,
                'name' => 'Álmosd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1194,
                'counties_id' => 8,
                'name' => 'Ártánd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1195,
                'counties_id' => 8,
                'name' => 'Bagamér',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1196,
                'counties_id' => 8,
                'name' => 'Bakonszeg',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1197,
                'counties_id' => 8,
                'name' => 'Balmazújváros',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1198,
                'counties_id' => 8,
                'name' => 'Báránd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1199,
                'counties_id' => 8,
                'name' => 'Bedő',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1200,
                'counties_id' => 8,
                'name' => 'Berekböszörmény',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1201,
                'counties_id' => 8,
                'name' => 'Berettyóújfalu',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1202,
                'counties_id' => 8,
                'name' => 'Bihardancsháza',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1203,
                'counties_id' => 8,
                'name' => 'Biharkeresztes',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1204,
                'counties_id' => 8,
                'name' => 'Biharnagybajom',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1205,
                'counties_id' => 8,
                'name' => 'Bihartorda',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1206,
                'counties_id' => 8,
                'name' => 'Bocskaikert',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1207,
                'counties_id' => 8,
                'name' => 'Bojt',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1208,
                'counties_id' => 8,
                'name' => 'Csökmő',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1209,
                'counties_id' => 8,
                'name' => 'Darvas',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1210,
                'counties_id' => 8,
                'name' => 'Debrecen',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1211,
                'counties_id' => 8,
                'name' => 'Derecske',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1212,
                'counties_id' => 8,
                'name' => 'Ebes',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1213,
                'counties_id' => 8,
                'name' => 'Egyek',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1214,
                'counties_id' => 8,
                'name' => 'Esztár',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1215,
                'counties_id' => 8,
                'name' => 'Folyás',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1216,
                'counties_id' => 8,
                'name' => 'Földes',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1217,
                'counties_id' => 8,
                'name' => 'Furta',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1218,
                'counties_id' => 8,
                'name' => 'Fülöp',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1219,
                'counties_id' => 8,
                'name' => 'Gáborján',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1220,
                'counties_id' => 8,
                'name' => 'Görbeháza',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1221,
                'counties_id' => 8,
                'name' => 'Hajdúbagos',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1222,
                'counties_id' => 8,
                'name' => 'Hajdúböszörmény',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1223,
                'counties_id' => 8,
                'name' => 'Hajdúdorog',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1224,
                'counties_id' => 8,
                'name' => 'Hajdúhadház',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1225,
                'counties_id' => 8,
                'name' => 'Hajdúnánás',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1226,
                'counties_id' => 8,
                'name' => 'Hajdúsámson',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1227,
                'counties_id' => 8,
                'name' => 'Hajdúszoboszló',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1228,
                'counties_id' => 8,
                'name' => 'Hajdúszovát',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1229,
                'counties_id' => 8,
                'name' => 'Hencida',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1230,
                'counties_id' => 8,
                'name' => 'Hortobágy',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1231,
                'counties_id' => 8,
                'name' => 'Hosszúpályi',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1232,
                'counties_id' => 8,
                'name' => 'Kaba',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1233,
                'counties_id' => 8,
                'name' => 'Kismarja',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1234,
                'counties_id' => 8,
                'name' => 'Kokad',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1235,
                'counties_id' => 8,
                'name' => 'Komádi',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1236,
                'counties_id' => 8,
                'name' => 'Konyár',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1237,
                'counties_id' => 8,
                'name' => 'Körösszakál',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1238,
                'counties_id' => 8,
                'name' => 'Körösszegapáti',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1239,
                'counties_id' => 8,
                'name' => 'Létavértes',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1240,
                'counties_id' => 8,
                'name' => 'Magyarhomorog',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1241,
                'counties_id' => 8,
                'name' => 'Mezőpeterd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1242,
                'counties_id' => 8,
                'name' => 'Mezősas',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1243,
                'counties_id' => 8,
                'name' => 'Mikepércs',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1244,
                'counties_id' => 8,
                'name' => 'Monostorpályi',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1245,
                'counties_id' => 8,
                'name' => 'Nádudvar',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1246,
                'counties_id' => 8,
                'name' => 'Nagyhegyes',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1247,
                'counties_id' => 8,
                'name' => 'Nagykereki',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1248,
                'counties_id' => 8,
                'name' => 'Nagyrábé',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1249,
                'counties_id' => 8,
                'name' => 'Nyírábrány',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1250,
                'counties_id' => 8,
                'name' => 'Nyíracsád',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1251,
                'counties_id' => 8,
                'name' => 'Nyíradony',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1252,
                'counties_id' => 8,
                'name' => 'Nyírmártonfalva',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1253,
                'counties_id' => 8,
                'name' => 'Pocsaj',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1254,
                'counties_id' => 8,
                'name' => 'Polgár',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1255,
                'counties_id' => 8,
                'name' => 'Püspökladány',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1256,
                'counties_id' => 8,
                'name' => 'Sáp',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1257,
                'counties_id' => 8,
                'name' => 'Sáránd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1258,
                'counties_id' => 8,
                'name' => 'Sárrétudvari',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1259,
                'counties_id' => 8,
                'name' => 'Szentpéterszeg',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1260,
                'counties_id' => 8,
                'name' => 'Szerep',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1261,
                'counties_id' => 8,
                'name' => 'Tarnalelesz',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1262,
                'counties_id' => 8,
                'name' => 'Téglás',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1263,
                'counties_id' => 8,
                'name' => 'Tépe',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1264,
                'counties_id' => 8,
                'name' => 'Tetétlen',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1265,
                'counties_id' => 8,
                'name' => 'Tiszacsege',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1266,
                'counties_id' => 8,
                'name' => 'Tiszagyulaháza',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1267,
                'counties_id' => 8,
                'name' => 'Told',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1268,
                'counties_id' => 8,
                'name' => 'Újiráz',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1269,
                'counties_id' => 8,
                'name' => 'Újléta',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1270,
                'counties_id' => 8,
                'name' => 'Újszentmargita',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1271,
                'counties_id' => 8,
                'name' => 'Újtikos',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1272,
                'counties_id' => 8,
                'name' => 'Vámospércs',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1273,
                'counties_id' => 8,
                'name' => 'Váncsod',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1274,
                'counties_id' => 8,
                'name' => 'Vekerd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1275,
                'counties_id' => 8,
                'name' => 'Zsáka',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1276,
                'counties_id' => 9,
                'name' => 'Abasár',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1277,
                'counties_id' => 9,
                'name' => 'Adács',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1278,
                'counties_id' => 9,
                'name' => 'Aldebrő',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'counties_id' => 9,
                'name' => 'Andornaktálya',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1280,
                'counties_id' => 9,
                'name' => 'Apc',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1281,
                'counties_id' => 9,
                'name' => 'Átány',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1282,
                'counties_id' => 9,
                'name' => 'Atkár',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1283,
                'counties_id' => 9,
                'name' => 'Balaton',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1284,
                'counties_id' => 9,
                'name' => 'Bátor',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1285,
                'counties_id' => 9,
                'name' => 'Bekölce',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1286,
                'counties_id' => 9,
                'name' => 'Bélapátfalva',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1287,
                'counties_id' => 9,
                'name' => 'Besenyőtelek',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1288,
                'counties_id' => 9,
                'name' => 'Boconád',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1289,
                'counties_id' => 9,
                'name' => 'Bodony',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1290,
                'counties_id' => 9,
                'name' => 'Boldog',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1291,
                'counties_id' => 9,
                'name' => 'Bükkszék',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1292,
                'counties_id' => 9,
                'name' => 'Bükkszenterzsébet',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1293,
                'counties_id' => 9,
                'name' => 'Bükkszentmárton',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1294,
                'counties_id' => 9,
                'name' => 'Csány',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1295,
                'counties_id' => 9,
                'name' => 'Demjén',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1296,
                'counties_id' => 9,
                'name' => 'Detk',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1297,
                'counties_id' => 9,
                'name' => 'Domoszló',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1298,
                'counties_id' => 9,
                'name' => 'Dormánd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1299,
                'counties_id' => 9,
                'name' => 'Ecséd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1300,
                'counties_id' => 9,
                'name' => 'Eger',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1301,
                'counties_id' => 9,
                'name' => 'Egerbakta',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1302,
                'counties_id' => 9,
                'name' => 'Egerbocs',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1303,
                'counties_id' => 9,
                'name' => 'Egercsehi',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1304,
                'counties_id' => 9,
                'name' => 'Egerfarmos',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1305,
                'counties_id' => 9,
                'name' => 'Egerszalók',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1306,
                'counties_id' => 9,
                'name' => 'Egerszólát',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1307,
                'counties_id' => 9,
                'name' => 'Erdőkövesd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1308,
                'counties_id' => 9,
                'name' => 'Erdőtelek',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1309,
                'counties_id' => 9,
                'name' => 'Erk',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1310,
                'counties_id' => 9,
                'name' => 'Fedémes',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1311,
                'counties_id' => 9,
                'name' => 'Feldebrő',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1312,
                'counties_id' => 9,
                'name' => 'Felsőtárkány',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1313,
                'counties_id' => 9,
                'name' => 'Füzesabony',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1314,
                'counties_id' => 9,
                'name' => 'Gyöngyös',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'counties_id' => 9,
                'name' => 'Gyöngyöshalász',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1316,
                'counties_id' => 9,
                'name' => 'Gyöngyösoroszi',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1317,
                'counties_id' => 9,
                'name' => 'Gyöngyöspata',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1318,
                'counties_id' => 9,
                'name' => 'Gyöngyössolymos',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1319,
                'counties_id' => 9,
                'name' => 'Gyöngyöstarján',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1320,
                'counties_id' => 9,
                'name' => 'Halmajugra',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1321,
                'counties_id' => 9,
                'name' => 'Hatvan',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1322,
                'counties_id' => 9,
                'name' => 'Heréd',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1323,
                'counties_id' => 9,
                'name' => 'Heves',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1324,
                'counties_id' => 9,
                'name' => 'Hevesaranyos',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1325,
                'counties_id' => 9,
                'name' => 'Hevesvezekény',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1326,
                'counties_id' => 9,
                'name' => 'Hort',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'counties_id' => 9,
                'name' => 'Istenmezeje',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1328,
                'counties_id' => 9,
                'name' => 'Ivád',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1329,
                'counties_id' => 9,
                'name' => 'Kál',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1330,
                'counties_id' => 9,
                'name' => 'Kápolna',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'counties_id' => 9,
                'name' => 'Karácsond',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1332,
                'counties_id' => 9,
                'name' => 'Kerecsend',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1333,
                'counties_id' => 9,
                'name' => 'Kisfüzes',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1334,
                'counties_id' => 9,
                'name' => 'Kisköre',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1335,
                'counties_id' => 9,
                'name' => 'Kisnána',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1336,
                'counties_id' => 9,
                'name' => 'Kompolt',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1337,
                'counties_id' => 9,
                'name' => 'Kömlő',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1338,
                'counties_id' => 9,
                'name' => 'Lőrinci',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1339,
                'counties_id' => 9,
                'name' => 'Ludas',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1340,
                'counties_id' => 9,
                'name' => 'Maklár',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1341,
                'counties_id' => 9,
                'name' => 'Markaz',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1342,
                'counties_id' => 9,
                'name' => 'Mátraballa',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1343,
                'counties_id' => 9,
                'name' => 'Mátraderecske',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1344,
                'counties_id' => 9,
                'name' => 'Mátraszentimre',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1345,
                'counties_id' => 9,
                'name' => 'Mezőszemere',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1346,
                'counties_id' => 9,
                'name' => 'Mezőtárkány',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1347,
                'counties_id' => 9,
                'name' => 'Mikófalva',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1348,
                'counties_id' => 9,
                'name' => 'Mónosbél',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1349,
                'counties_id' => 9,
                'name' => 'Nagyfüged',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1350,
                'counties_id' => 9,
                'name' => 'Nagykökényes',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1351,
                'counties_id' => 9,
                'name' => 'Nagyréde',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'counties_id' => 9,
                'name' => 'Nagytálya',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1353,
                'counties_id' => 9,
                'name' => 'Nagyút',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1354,
                'counties_id' => 9,
                'name' => 'Nagyvisnyó',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1355,
                'counties_id' => 9,
                'name' => 'Noszvaj',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1356,
                'counties_id' => 9,
                'name' => 'Novaj',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1357,
                'counties_id' => 9,
                'name' => 'Ostoros',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1358,
                'counties_id' => 9,
                'name' => 'Parád',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1359,
                'counties_id' => 9,
                'name' => 'Parádsasvár',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1360,
                'counties_id' => 9,
                'name' => 'Pély',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1361,
                'counties_id' => 9,
                'name' => 'Pétervására',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1362,
                'counties_id' => 9,
                'name' => 'Petőfibánya',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1363,
                'counties_id' => 9,
                'name' => 'Poroszló',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1364,
                'counties_id' => 9,
                'name' => 'Recsk',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1365,
                'counties_id' => 9,
                'name' => 'Rózsaszentmárton',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1366,
                'counties_id' => 9,
                'name' => 'Sarud',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1367,
                'counties_id' => 9,
                'name' => 'Sirok',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1368,
                'counties_id' => 9,
                'name' => 'Szajla',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1369,
                'counties_id' => 9,
                'name' => 'Szarvaskő',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1370,
                'counties_id' => 9,
                'name' => 'Szentdomonkos',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1371,
                'counties_id' => 9,
                'name' => 'Szihalom',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1372,
                'counties_id' => 9,
                'name' => 'Szilvásvárad',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1373,
                'counties_id' => 9,
                'name' => 'Szúcs',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1374,
                'counties_id' => 9,
                'name' => 'Szűcsi',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1375,
                'counties_id' => 9,
                'name' => 'Tarnabod',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1376,
                'counties_id' => 9,
                'name' => 'Tarnalelesz',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1377,
                'counties_id' => 9,
                'name' => 'Tarnaméra',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1378,
                'counties_id' => 9,
                'name' => 'Tarnaörs',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1379,
                'counties_id' => 9,
                'name' => 'Tarnaszentmária',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1380,
                'counties_id' => 9,
                'name' => 'Tarnaszentmiklós',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1381,
                'counties_id' => 9,
                'name' => 'Tarnazsadány',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1382,
                'counties_id' => 9,
                'name' => 'Tenk',
                'created_at' => '2016-09-09 18:44:31',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1383,
                'counties_id' => 9,
                'name' => 'Terpes',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1384,
                'counties_id' => 9,
                'name' => 'Tiszanána',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1385,
                'counties_id' => 9,
                'name' => 'Tófalu',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1386,
                'counties_id' => 9,
                'name' => 'Újlőrincfalva',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1387,
                'counties_id' => 9,
                'name' => 'Vámosgyörk',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1388,
                'counties_id' => 9,
                'name' => 'Váraszó',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1389,
                'counties_id' => 9,
                'name' => 'Vécs',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1390,
                'counties_id' => 9,
                'name' => 'Verpelét',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'counties_id' => 9,
                'name' => 'Visonta',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1392,
                'counties_id' => 9,
                'name' => 'Visznek',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1393,
                'counties_id' => 9,
                'name' => 'Zagyvaszántó',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1394,
                'counties_id' => 9,
                'name' => 'Zaránk',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1395,
                'counties_id' => 10,
                'name' => 'Abádszalók',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1396,
                'counties_id' => 10,
                'name' => 'Alattyán',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1397,
                'counties_id' => 10,
                'name' => 'Berekfürdő',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1398,
                'counties_id' => 10,
                'name' => 'Besenyszög',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1399,
                'counties_id' => 10,
                'name' => 'Cibakháza',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1400,
                'counties_id' => 10,
                'name' => 'Csataszög',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1401,
                'counties_id' => 10,
                'name' => 'Csépa',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1402,
                'counties_id' => 10,
                'name' => 'Cserkeszőlő',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1403,
                'counties_id' => 10,
                'name' => 'Fegyvernek',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1404,
                'counties_id' => 10,
                'name' => 'Hunyadfalva',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1405,
                'counties_id' => 10,
                'name' => 'Jánoshida',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1406,
                'counties_id' => 10,
                'name' => 'Jászágó',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1407,
                'counties_id' => 10,
                'name' => 'Jászalsószentgyörgy',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1408,
                'counties_id' => 10,
                'name' => 'Jászapáti',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1409,
                'counties_id' => 10,
                'name' => 'Jászárokszállás',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1410,
                'counties_id' => 10,
                'name' => 'Jászberény',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1411,
                'counties_id' => 10,
                'name' => 'Jászboldogháza',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1412,
                'counties_id' => 10,
                'name' => 'Jászdózsa',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1413,
                'counties_id' => 10,
                'name' => 'Jászfelsőszentgyörgy',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1414,
                'counties_id' => 10,
                'name' => 'Jászfényszaru',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1415,
                'counties_id' => 10,
                'name' => 'Jászivány',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1416,
                'counties_id' => 10,
                'name' => 'Jászjákóhalma',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1417,
                'counties_id' => 10,
                'name' => 'Jászkisér',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'counties_id' => 10,
                'name' => 'Jászladány',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1419,
                'counties_id' => 10,
                'name' => 'Jászszentandrás',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1420,
                'counties_id' => 10,
                'name' => 'Jásztelek',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1421,
                'counties_id' => 10,
                'name' => 'Karcag',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1422,
                'counties_id' => 10,
                'name' => 'Kenderes',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1423,
                'counties_id' => 10,
                'name' => 'Kengyel',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1424,
                'counties_id' => 10,
                'name' => 'Kétpó',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1425,
                'counties_id' => 10,
                'name' => 'Kisújszállás',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1426,
                'counties_id' => 10,
                'name' => 'Kőtelek',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1427,
                'counties_id' => 10,
                'name' => 'Kuncsorba',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1428,
                'counties_id' => 10,
                'name' => 'Kunhegyes',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1429,
                'counties_id' => 10,
                'name' => 'Kunmadaras',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1430,
                'counties_id' => 10,
                'name' => 'Kunszentmárton',
                'created_at' => '2016-09-09 18:44:32',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'counties_id' => 10,
                'name' => 'Martfű',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1432,
                'counties_id' => 10,
                'name' => 'Mesterszállás',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1433,
                'counties_id' => 10,
                'name' => 'Mezőhék',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1434,
                'counties_id' => 10,
                'name' => 'Mezőtúr',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1435,
                'counties_id' => 10,
                'name' => 'Nagyiván',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1436,
                'counties_id' => 10,
                'name' => 'Nagykörű',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1437,
                'counties_id' => 10,
                'name' => 'Nagyrév',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1438,
                'counties_id' => 10,
                'name' => 'Öcsöd',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1439,
                'counties_id' => 10,
                'name' => 'Örményes',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1440,
                'counties_id' => 10,
                'name' => 'Pusztamonostor',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1441,
                'counties_id' => 10,
                'name' => 'Rákóczifalva',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1442,
                'counties_id' => 10,
                'name' => 'Rákócziújfalu',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1443,
                'counties_id' => 10,
                'name' => 'Szajol',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1444,
                'counties_id' => 10,
                'name' => 'Szászberek',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1445,
                'counties_id' => 10,
                'name' => 'Szelevény',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1446,
                'counties_id' => 10,
                'name' => 'Szolnok',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1447,
                'counties_id' => 10,
                'name' => 'Tiszabő',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1448,
                'counties_id' => 10,
                'name' => 'Tiszabura',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1449,
                'counties_id' => 10,
                'name' => 'Tiszaderzs',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1450,
                'counties_id' => 10,
                'name' => 'Tiszaföldvár',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'counties_id' => 10,
                'name' => 'Tiszafüred',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1452,
                'counties_id' => 10,
                'name' => 'Tiszagyenda',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1453,
                'counties_id' => 10,
                'name' => 'Tiszaigar',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1454,
                'counties_id' => 10,
                'name' => 'Tiszainoka',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1455,
                'counties_id' => 10,
                'name' => 'Tiszajenő',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1456,
                'counties_id' => 10,
                'name' => 'Tiszakürt',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1457,
                'counties_id' => 10,
                'name' => 'Tiszaörs',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1458,
                'counties_id' => 10,
                'name' => 'Tiszapüspöki',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1459,
                'counties_id' => 10,
                'name' => 'Tiszaroff',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1460,
                'counties_id' => 10,
                'name' => 'Tiszasas',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1461,
                'counties_id' => 10,
                'name' => 'Tiszasüly',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1462,
                'counties_id' => 10,
                'name' => 'Tiszaszentimre',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'counties_id' => 10,
                'name' => 'Tiszaszőlős',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1464,
                'counties_id' => 10,
                'name' => 'Tiszatenyő',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1465,
                'counties_id' => 10,
                'name' => 'Tiszaug',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1466,
                'counties_id' => 10,
                'name' => 'Tiszavárkony',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1467,
                'counties_id' => 10,
                'name' => 'Tomajmonostora',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1468,
                'counties_id' => 10,
                'name' => 'Tószeg',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1469,
                'counties_id' => 10,
                'name' => 'Törökszentmiklós',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1470,
                'counties_id' => 10,
                'name' => 'Túrkeve',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1471,
                'counties_id' => 10,
                'name' => 'Újszász',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1472,
                'counties_id' => 10,
                'name' => 'Vezseny',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1473,
                'counties_id' => 10,
                'name' => 'Zagyvarékas',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1474,
                'counties_id' => 11,
                'name' => 'Ács',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1475,
                'counties_id' => 11,
                'name' => 'Ácsteszér',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1476,
                'counties_id' => 11,
                'name' => 'Aka',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1477,
                'counties_id' => 11,
                'name' => 'Almásfüzitő',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1478,
                'counties_id' => 11,
                'name' => 'Annavölgy',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1479,
                'counties_id' => 11,
                'name' => 'Ászár',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1480,
                'counties_id' => 11,
                'name' => 'Bábolna',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1481,
                'counties_id' => 11,
                'name' => 'Baj',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1482,
                'counties_id' => 11,
                'name' => 'Bajna',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1483,
                'counties_id' => 11,
                'name' => 'Bajót',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1484,
                'counties_id' => 11,
                'name' => 'Bakonybánk',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1485,
                'counties_id' => 11,
                'name' => 'Bakonysárkány',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1486,
                'counties_id' => 11,
                'name' => 'Bakonyszombathely',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1487,
                'counties_id' => 11,
                'name' => 'Bana',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'counties_id' => 11,
                'name' => 'Bársonyos',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1489,
                'counties_id' => 11,
                'name' => 'Bokod',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1490,
                'counties_id' => 11,
                'name' => 'Császár',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1491,
                'counties_id' => 11,
                'name' => 'Csatka',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1492,
                'counties_id' => 11,
                'name' => 'Csém',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1493,
                'counties_id' => 11,
                'name' => 'Csép',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1494,
                'counties_id' => 11,
                'name' => 'Csolnok',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1495,
                'counties_id' => 11,
                'name' => 'Dad',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1496,
                'counties_id' => 11,
                'name' => 'Dág',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1497,
                'counties_id' => 11,
                'name' => 'Dorog',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1498,
                'counties_id' => 11,
                'name' => 'Dömös',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'counties_id' => 11,
                'name' => 'Dunaalmás',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1500,
                'counties_id' => 11,
                'name' => 'Dunaszentmiklós',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'counties_id' => 11,
                'name' => 'Epöl',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1502,
                'counties_id' => 11,
                'name' => 'Esztergom',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1503,
                'counties_id' => 11,
                'name' => 'Ete',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1504,
                'counties_id' => 11,
                'name' => 'Gyermely',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'counties_id' => 11,
                'name' => 'Héreg',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'counties_id' => 11,
                'name' => 'Kecskéd',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'counties_id' => 11,
                'name' => 'Kerékteleki',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1508,
                'counties_id' => 11,
                'name' => 'Kesztölc',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1509,
                'counties_id' => 11,
                'name' => 'Kisbér',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1510,
                'counties_id' => 11,
                'name' => 'Kisigmánd',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1511,
                'counties_id' => 11,
                'name' => 'Kocs',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1512,
                'counties_id' => 11,
                'name' => 'Komárom',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1513,
                'counties_id' => 11,
                'name' => 'Kömlőd',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1514,
                'counties_id' => 11,
                'name' => 'Környe',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1515,
                'counties_id' => 11,
                'name' => 'Lábatlan',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1516,
                'counties_id' => 11,
                'name' => 'Leányvár',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1517,
                'counties_id' => 11,
                'name' => 'Máriahalom',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1518,
                'counties_id' => 11,
                'name' => 'Mocsa',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1519,
                'counties_id' => 11,
                'name' => 'Mogyorósbánya',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1520,
                'counties_id' => 11,
                'name' => 'Nagyigmánd',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1521,
                'counties_id' => 11,
                'name' => 'Nagysáp',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1522,
                'counties_id' => 11,
                'name' => 'Naszály',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1523,
                'counties_id' => 11,
                'name' => 'Neszmély',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1524,
                'counties_id' => 11,
                'name' => 'Nyergesújfalu',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1525,
                'counties_id' => 11,
                'name' => 'Oroszlány',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1526,
                'counties_id' => 11,
                'name' => 'Piliscsév',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1527,
                'counties_id' => 11,
                'name' => 'Pilismarót',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1528,
                'counties_id' => 11,
                'name' => 'Réde',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1529,
                'counties_id' => 11,
                'name' => 'Sárisáp',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1530,
                'counties_id' => 11,
                'name' => 'Súr',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1531,
                'counties_id' => 11,
                'name' => 'Süttő',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1532,
                'counties_id' => 11,
                'name' => 'Szákszend',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1533,
                'counties_id' => 11,
                'name' => 'Szomód',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1534,
                'counties_id' => 11,
                'name' => 'Szomor',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1535,
                'counties_id' => 11,
                'name' => 'Tardos',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'counties_id' => 11,
                'name' => 'Tarján',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1537,
                'counties_id' => 11,
                'name' => 'Tárkány',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'counties_id' => 11,
                'name' => 'Tát',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1539,
                'counties_id' => 11,
                'name' => 'Tata',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1540,
                'counties_id' => 11,
                'name' => 'Tatabánya',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1541,
                'counties_id' => 11,
                'name' => 'Tokod',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1542,
                'counties_id' => 11,
                'name' => 'Tokodaltáró',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1543,
                'counties_id' => 11,
                'name' => 'Úny',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1544,
                'counties_id' => 11,
                'name' => 'Várgesztes',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1545,
                'counties_id' => 11,
                'name' => 'Vérteskethely',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1546,
                'counties_id' => 11,
                'name' => 'Vértessomló',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1547,
                'counties_id' => 11,
                'name' => 'Vértestolna',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1548,
                'counties_id' => 11,
                'name' => 'Vértesszőlős',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1549,
                'counties_id' => 12,
                'name' => 'Alsópetény',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1550,
                'counties_id' => 12,
                'name' => 'Alsótold',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1551,
                'counties_id' => 12,
                'name' => 'Balassagyarmat',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1552,
                'counties_id' => 12,
                'name' => 'Bánk',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1553,
                'counties_id' => 12,
                'name' => 'Bárna',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1554,
                'counties_id' => 12,
                'name' => 'Bátonyterenye',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1555,
                'counties_id' => 12,
                'name' => 'Becske',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1556,
                'counties_id' => 12,
                'name' => 'Bér',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1557,
                'counties_id' => 12,
                'name' => 'Bercel',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1558,
                'counties_id' => 12,
                'name' => 'Berkenye',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1559,
                'counties_id' => 12,
                'name' => 'Bokor',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1560,
                'counties_id' => 12,
                'name' => 'Borsosberény',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1561,
                'counties_id' => 12,
                'name' => 'Buják',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1562,
                'counties_id' => 12,
                'name' => 'Cered',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'counties_id' => 12,
                'name' => 'Csécse',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1564,
                'counties_id' => 12,
                'name' => 'Cserháthaláp',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1565,
                'counties_id' => 12,
                'name' => 'Cserhátsurány',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1566,
                'counties_id' => 12,
                'name' => 'Cserhátszentiván',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1567,
                'counties_id' => 12,
                'name' => 'Csesztve',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1568,
                'counties_id' => 12,
                'name' => 'Csitár',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1569,
                'counties_id' => 12,
                'name' => 'Debercsény',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1570,
                'counties_id' => 12,
                'name' => 'Dejtár',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1571,
                'counties_id' => 12,
                'name' => 'Diósjenő',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1572,
                'counties_id' => 12,
                'name' => 'Dorogháza',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1573,
                'counties_id' => 12,
                'name' => 'Drégelypalánk',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1574,
                'counties_id' => 12,
                'name' => 'Ecseg',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1575,
                'counties_id' => 12,
                'name' => 'Egyházasdengeleg',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1576,
                'counties_id' => 12,
                'name' => 'Egyházasgerge',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1577,
                'counties_id' => 12,
                'name' => 'Endrefalva',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1578,
                'counties_id' => 12,
                'name' => 'Erdőkürt',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1579,
                'counties_id' => 12,
                'name' => 'Erdőtarcsa',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1580,
                'counties_id' => 12,
                'name' => 'Érsekvadkert',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1581,
                'counties_id' => 12,
                'name' => 'Etes',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1582,
                'counties_id' => 12,
                'name' => 'Felsőpetény',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1583,
                'counties_id' => 12,
                'name' => 'Felsőtold',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1584,
                'counties_id' => 12,
                'name' => 'Galgaguta',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1585,
                'counties_id' => 12,
                'name' => 'Garáb',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1586,
                'counties_id' => 12,
                'name' => 'Héhalom',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1587,
                'counties_id' => 12,
                'name' => 'Herencsény',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1588,
                'counties_id' => 12,
                'name' => 'Hollókő',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1589,
                'counties_id' => 12,
                'name' => 'Hont',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1590,
                'counties_id' => 12,
                'name' => 'Horpács',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1591,
                'counties_id' => 12,
                'name' => 'Hugyag',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'counties_id' => 12,
                'name' => 'Iliny',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1593,
                'counties_id' => 12,
                'name' => 'Ipolytarnóc',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1594,
                'counties_id' => 12,
                'name' => 'Ipolyvece',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1595,
                'counties_id' => 12,
                'name' => 'Jobbágyi',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1596,
                'counties_id' => 12,
                'name' => 'Kálló',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1597,
                'counties_id' => 12,
                'name' => 'Karancsalja',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1598,
                'counties_id' => 12,
                'name' => 'Karancsberény',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1599,
                'counties_id' => 12,
                'name' => 'Karancskeszi',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1600,
                'counties_id' => 12,
                'name' => 'Karancslapujtő',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1601,
                'counties_id' => 12,
                'name' => 'Karancsság',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1602,
                'counties_id' => 12,
                'name' => 'Kazár',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1603,
                'counties_id' => 12,
                'name' => 'Keszeg',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1604,
                'counties_id' => 12,
                'name' => 'Kétbodony',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1605,
                'counties_id' => 12,
                'name' => 'Kisbágyon',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1606,
                'counties_id' => 12,
                'name' => 'Kisbárkány',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1607,
                'counties_id' => 12,
                'name' => 'Kisecset',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1608,
                'counties_id' => 12,
                'name' => 'Kishartyán',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1609,
                'counties_id' => 12,
                'name' => 'Kozárd',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1610,
                'counties_id' => 12,
                'name' => 'Kutasó',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1611,
                'counties_id' => 12,
                'name' => 'Legénd',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1612,
                'counties_id' => 12,
                'name' => 'Litke',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1613,
                'counties_id' => 12,
                'name' => 'Lucfalva',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1614,
                'counties_id' => 12,
                'name' => 'Ludányhalászi',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1615,
                'counties_id' => 12,
                'name' => 'Magyargéc',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'counties_id' => 12,
                'name' => 'Magyarnándor',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1617,
                'counties_id' => 12,
                'name' => 'Márkháza',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1618,
                'counties_id' => 12,
                'name' => 'Mátramindszent',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1619,
                'counties_id' => 12,
                'name' => 'Mátranovák',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1620,
                'counties_id' => 12,
                'name' => 'Mátraszele',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1621,
                'counties_id' => 12,
                'name' => 'Mátraszőlős',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1622,
                'counties_id' => 12,
                'name' => 'Mátraterenye',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1623,
                'counties_id' => 12,
                'name' => 'Mátraverebély',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1624,
                'counties_id' => 12,
                'name' => 'Mihálygerge',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1625,
                'counties_id' => 12,
                'name' => 'Mohora',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1626,
                'counties_id' => 12,
                'name' => 'Nagybárkány',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1627,
                'counties_id' => 12,
                'name' => 'Nagylóc',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1628,
                'counties_id' => 12,
                'name' => 'Nagyoroszi',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1629,
                'counties_id' => 12,
                'name' => 'Nemti',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1630,
                'counties_id' => 12,
                'name' => 'Nézsa',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1631,
                'counties_id' => 12,
                'name' => 'Nógrád',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1632,
                'counties_id' => 12,
                'name' => 'Nógrádkövesd',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1633,
                'counties_id' => 12,
                'name' => 'Nógrádmarcal',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1634,
                'counties_id' => 12,
                'name' => 'Nógrádmegyer',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1635,
                'counties_id' => 12,
                'name' => 'Nógrádsáp',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1636,
                'counties_id' => 12,
                'name' => 'Nógrádsipek',
                'created_at' => '2016-09-09 18:44:33',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1637,
                'counties_id' => 12,
                'name' => 'Nógrádszakál',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1638,
                'counties_id' => 12,
                'name' => 'Nőtincs',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1639,
                'counties_id' => 12,
                'name' => 'Őrhalom',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1640,
                'counties_id' => 12,
                'name' => 'Ősagárd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1641,
                'counties_id' => 12,
                'name' => 'Palotás',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1642,
                'counties_id' => 12,
                'name' => 'Pásztó',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1643,
                'counties_id' => 12,
                'name' => 'Patak',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1644,
                'counties_id' => 12,
                'name' => 'Patvarc',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1645,
                'counties_id' => 12,
                'name' => 'Piliny',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1646,
                'counties_id' => 12,
                'name' => 'Pusztaberki',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1647,
                'counties_id' => 12,
                'name' => 'Rákóczibánya',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1648,
                'counties_id' => 12,
                'name' => 'Rétság',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1649,
                'counties_id' => 12,
                'name' => 'Rimóc',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1650,
                'counties_id' => 12,
                'name' => 'Romhány',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1651,
                'counties_id' => 12,
                'name' => 'Ságújfalu',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1652,
                'counties_id' => 12,
                'name' => 'Salgótarján',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1653,
                'counties_id' => 12,
                'name' => 'Sámsonháza',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1654,
                'counties_id' => 12,
                'name' => 'Sóshartyán',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1655,
                'counties_id' => 12,
                'name' => 'Szalmatercs',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1656,
                'counties_id' => 12,
                'name' => 'Szanda',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1657,
                'counties_id' => 12,
                'name' => 'Szarvasgede',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1658,
                'counties_id' => 12,
                'name' => 'Szátok',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'counties_id' => 12,
                'name' => 'Szécsénke',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1660,
                'counties_id' => 12,
                'name' => 'Szécsény',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1661,
                'counties_id' => 12,
                'name' => 'Szécsényfelfalu',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1662,
                'counties_id' => 12,
                'name' => 'Szendehely',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1663,
                'counties_id' => 12,
                'name' => 'Szente',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1664,
                'counties_id' => 12,
                'name' => 'Szilaspogony',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1665,
                'counties_id' => 12,
                'name' => 'Szirák',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1666,
                'counties_id' => 12,
                'name' => 'Szuha',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1667,
                'counties_id' => 12,
                'name' => 'Szurdokpüspöki',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1668,
                'counties_id' => 12,
                'name' => 'Szügy',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1669,
                'counties_id' => 12,
                'name' => 'Tar',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1670,
                'counties_id' => 12,
                'name' => 'Terény',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1671,
                'counties_id' => 12,
                'name' => 'Tereske',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1672,
                'counties_id' => 12,
                'name' => 'Tolmács',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1673,
                'counties_id' => 12,
                'name' => 'Vanyarc',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1674,
                'counties_id' => 12,
                'name' => 'Varsány',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1675,
                'counties_id' => 12,
                'name' => 'Vizslás',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1676,
                'counties_id' => 12,
                'name' => 'Zabar',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1677,
                'counties_id' => 13,
                'name' => 'Abony',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1678,
                'counties_id' => 13,
                'name' => 'Acsa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1679,
                'counties_id' => 13,
                'name' => 'Albertirsa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1680,
                'counties_id' => 13,
                'name' => 'Alsónémedi',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1681,
                'counties_id' => 13,
                'name' => 'Apaj',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1682,
                'counties_id' => 13,
                'name' => 'Áporka',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1683,
                'counties_id' => 13,
                'name' => 'Aszód',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1684,
                'counties_id' => 13,
                'name' => 'Bag',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1685,
                'counties_id' => 13,
                'name' => 'Bénye',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1686,
                'counties_id' => 13,
                'name' => 'Bernecebaráti',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1687,
                'counties_id' => 13,
                'name' => 'Biatorbágy',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1688,
                'counties_id' => 13,
                'name' => 'Budajenő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1689,
                'counties_id' => 13,
                'name' => 'Budakalász',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1690,
                'counties_id' => 13,
                'name' => 'Budakeszi',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1691,
                'counties_id' => 13,
                'name' => 'Budaörs',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1692,
                'counties_id' => 13,
                'name' => 'Bugyi',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1693,
                'counties_id' => 13,
                'name' => 'Cegléd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1694,
                'counties_id' => 13,
                'name' => 'Ceglédbercel',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'counties_id' => 13,
                'name' => 'Csemő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1696,
                'counties_id' => 13,
                'name' => 'Csévharaszt',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1697,
                'counties_id' => 13,
                'name' => 'Csobánka',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1698,
                'counties_id' => 13,
                'name' => 'Csomád',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1699,
                'counties_id' => 13,
                'name' => 'Csömör',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1700,
                'counties_id' => 13,
                'name' => 'Csörög',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1701,
                'counties_id' => 13,
                'name' => 'Csővár',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1702,
                'counties_id' => 13,
                'name' => 'Dabas',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1703,
                'counties_id' => 13,
                'name' => 'Dánszentmiklós',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1704,
                'counties_id' => 13,
                'name' => 'Dány',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1705,
                'counties_id' => 13,
                'name' => 'Délegyháza',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'counties_id' => 13,
                'name' => 'Diósd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1707,
                'counties_id' => 13,
                'name' => 'Dobogókő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1708,
                'counties_id' => 13,
                'name' => 'Domony',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1709,
                'counties_id' => 13,
                'name' => 'Dömsöd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1710,
                'counties_id' => 13,
                'name' => 'Dunabogdány',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'counties_id' => 13,
                'name' => 'Dunaharaszti',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1712,
                'counties_id' => 13,
                'name' => 'Dunakeszi',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1713,
                'counties_id' => 13,
                'name' => 'Dunavarsány',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1714,
                'counties_id' => 13,
                'name' => 'Ecser',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1715,
                'counties_id' => 13,
                'name' => 'Érd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1716,
                'counties_id' => 13,
                'name' => 'Erdőkertes',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1717,
                'counties_id' => 13,
                'name' => 'Farmos',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1718,
                'counties_id' => 13,
                'name' => 'Felsőpakony',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'counties_id' => 13,
                'name' => 'Fót',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1720,
                'counties_id' => 13,
                'name' => 'Galgagyörk',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1721,
                'counties_id' => 13,
                'name' => 'Galgahévíz',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1722,
                'counties_id' => 13,
                'name' => 'Galgamácsa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1723,
                'counties_id' => 13,
                'name' => 'Gomba',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1724,
                'counties_id' => 13,
                'name' => 'Göd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1725,
                'counties_id' => 13,
                'name' => 'Gödöllő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'counties_id' => 13,
                'name' => 'Gyál',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1727,
                'counties_id' => 13,
                'name' => 'Gyömrő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1728,
                'counties_id' => 13,
                'name' => 'Halásztelek',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1729,
                'counties_id' => 13,
                'name' => 'Herceghalom',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1730,
                'counties_id' => 13,
                'name' => 'Hernád',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'counties_id' => 13,
                'name' => 'Hévízgyörk',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1732,
                'counties_id' => 13,
                'name' => 'Iklad',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1733,
                'counties_id' => 13,
                'name' => 'Inárcs',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1734,
                'counties_id' => 13,
                'name' => 'Ipolydamásd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1735,
                'counties_id' => 13,
                'name' => 'Ipolytölgyes',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1736,
                'counties_id' => 13,
                'name' => 'Isaszeg',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1737,
                'counties_id' => 13,
                'name' => 'Jászkarajenő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1738,
                'counties_id' => 13,
                'name' => 'Kakucs',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1739,
                'counties_id' => 13,
                'name' => 'Kartal',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1740,
                'counties_id' => 13,
                'name' => 'Káva',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1741,
                'counties_id' => 13,
                'name' => 'Kemence',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1742,
                'counties_id' => 13,
                'name' => 'Kerepes',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1743,
                'counties_id' => 13,
                'name' => 'Kiskunlacháza',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1744,
                'counties_id' => 13,
                'name' => 'Kismaros',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1745,
                'counties_id' => 13,
                'name' => 'Kisnémedi',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1746,
                'counties_id' => 13,
                'name' => 'Kisoroszi',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1747,
                'counties_id' => 13,
                'name' => 'Kistarcsa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1748,
                'counties_id' => 13,
                'name' => 'Kocsér',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1749,
                'counties_id' => 13,
                'name' => 'Kóka',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1750,
                'counties_id' => 13,
                'name' => 'Kosd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1751,
                'counties_id' => 13,
                'name' => 'Kóspallag',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1752,
                'counties_id' => 13,
                'name' => 'Kőröstetétlen',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1753,
                'counties_id' => 13,
                'name' => 'Leányfalu',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1754,
                'counties_id' => 13,
                'name' => 'Letkés',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1755,
                'counties_id' => 13,
                'name' => 'Lórév',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1756,
                'counties_id' => 13,
                'name' => 'Maglód',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1757,
                'counties_id' => 13,
                'name' => 'Majosháza',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'counties_id' => 13,
                'name' => 'Makád',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1759,
                'counties_id' => 13,
                'name' => 'Márianosztra',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1760,
                'counties_id' => 13,
                'name' => 'Mende',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1761,
                'counties_id' => 13,
                'name' => 'Mikebuda',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1762,
                'counties_id' => 13,
                'name' => 'Mogyoród',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'counties_id' => 13,
                'name' => 'Monor',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1764,
                'counties_id' => 13,
                'name' => 'Nagybörzsöny',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1765,
                'counties_id' => 13,
                'name' => 'Nagykáta',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1766,
                'counties_id' => 13,
                'name' => 'Nagykovácsi',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1767,
                'counties_id' => 13,
                'name' => 'Nagykőrös',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1768,
                'counties_id' => 13,
                'name' => 'Nagymaros',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1769,
                'counties_id' => 13,
                'name' => 'Nagytarcsa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1770,
                'counties_id' => 13,
                'name' => 'Nyáregyháza',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1771,
                'counties_id' => 13,
                'name' => 'Nyársapát',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1772,
                'counties_id' => 13,
                'name' => 'Ócsa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1773,
                'counties_id' => 13,
                'name' => 'Őrbottyán',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1774,
                'counties_id' => 13,
                'name' => 'Örkény',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1775,
                'counties_id' => 13,
                'name' => 'Pánd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1776,
                'counties_id' => 13,
                'name' => 'Páty',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1777,
                'counties_id' => 13,
                'name' => 'Pécel',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1778,
                'counties_id' => 13,
                'name' => 'Penc',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1779,
                'counties_id' => 13,
                'name' => 'Perbál',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1780,
                'counties_id' => 13,
                'name' => 'Perőcsény',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1781,
                'counties_id' => 13,
                'name' => 'Péteri',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1782,
                'counties_id' => 13,
                'name' => 'Pilis',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1783,
                'counties_id' => 13,
                'name' => 'Pilisborosjenő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1784,
                'counties_id' => 13,
                'name' => 'Piliscsaba',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'counties_id' => 13,
                'name' => 'Pilisjászfalu',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'counties_id' => 13,
                'name' => 'Pilisvörösvár',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1787,
                'counties_id' => 13,
                'name' => 'Pilisszántó',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1788,
                'counties_id' => 13,
                'name' => 'Pilisszentiván',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'counties_id' => 13,
                'name' => 'Pilisszentkereszt',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'counties_id' => 13,
                'name' => 'Pilisszentlászló',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'counties_id' => 13,
                'name' => 'Pócsmegyer',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'counties_id' => 13,
                'name' => 'Pomáz',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'counties_id' => 13,
                'name' => 'Pusztavacs',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'counties_id' => 13,
                'name' => 'Pusztazámor',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'counties_id' => 13,
                'name' => 'Püspökhatvan',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'counties_id' => 13,
                'name' => 'Püspökszilágy',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'counties_id' => 13,
                'name' => 'Ráckeve',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1798,
                'counties_id' => 13,
                'name' => 'Rád',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1799,
                'counties_id' => 13,
                'name' => 'Remeteszőlős',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1800,
                'counties_id' => 13,
                'name' => 'Solymár',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1801,
                'counties_id' => 13,
                'name' => 'Sóskút',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'counties_id' => 13,
                'name' => 'Sülysáp',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1803,
                'counties_id' => 13,
                'name' => 'Szada',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'counties_id' => 13,
                'name' => 'Százhalombatta',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1805,
                'counties_id' => 13,
                'name' => 'Szentendre',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1806,
                'counties_id' => 13,
                'name' => 'Szentlőrinckáta',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1807,
                'counties_id' => 13,
                'name' => 'Szentmártonkáta',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1808,
                'counties_id' => 13,
                'name' => 'Szigetbecse',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1809,
                'counties_id' => 13,
                'name' => 'Szigetcsép',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'counties_id' => 13,
                'name' => 'Szigethalom',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1811,
                'counties_id' => 13,
                'name' => 'Szigetmonostor',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1812,
                'counties_id' => 13,
                'name' => 'Szigetszentmárton',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1813,
                'counties_id' => 13,
                'name' => 'Szigetszentmiklós',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1814,
                'counties_id' => 13,
                'name' => 'Szigetújfalu',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1815,
                'counties_id' => 13,
                'name' => 'Szob',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1816,
                'counties_id' => 13,
                'name' => 'Szokolya',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'counties_id' => 13,
                'name' => 'Sződ',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1818,
                'counties_id' => 13,
                'name' => 'Sződliget',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1819,
                'counties_id' => 13,
                'name' => 'Táborfalva',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1820,
                'counties_id' => 13,
                'name' => 'Tahitótfalu',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1821,
                'counties_id' => 13,
                'name' => 'Taksony',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1822,
                'counties_id' => 13,
                'name' => 'Tápióbicske',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1823,
                'counties_id' => 13,
                'name' => 'Tápiógyörgye',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1824,
                'counties_id' => 13,
                'name' => 'Tápióság',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1825,
                'counties_id' => 13,
                'name' => 'Tápiószecső',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1826,
                'counties_id' => 13,
                'name' => 'Tápiószele',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1827,
                'counties_id' => 13,
                'name' => 'Tápiószentmárton',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1828,
                'counties_id' => 13,
                'name' => 'Tápiószőlős',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1829,
                'counties_id' => 13,
                'name' => 'Tárnok',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1830,
                'counties_id' => 13,
                'name' => 'Tatárszentgyörgy',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1831,
                'counties_id' => 13,
                'name' => 'Telki',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1832,
                'counties_id' => 13,
                'name' => 'Tésa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1833,
                'counties_id' => 13,
                'name' => 'Tinnye',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1834,
                'counties_id' => 13,
                'name' => 'Tóalmás',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1835,
                'counties_id' => 13,
                'name' => 'Tök',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1836,
                'counties_id' => 13,
                'name' => 'Tököl',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1837,
                'counties_id' => 13,
                'name' => 'Törökbálint',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1838,
                'counties_id' => 13,
                'name' => 'Törtel',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1839,
                'counties_id' => 13,
                'name' => 'Tura',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1840,
                'counties_id' => 13,
                'name' => 'Újhartyán',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1841,
                'counties_id' => 13,
                'name' => 'Újlengyel',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1842,
                'counties_id' => 13,
                'name' => 'Újszilvás',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1843,
                'counties_id' => 13,
                'name' => 'Úri',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1844,
                'counties_id' => 13,
                'name' => 'Üllő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1845,
                'counties_id' => 13,
                'name' => 'Üröm',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1846,
                'counties_id' => 13,
                'name' => 'Vác',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1847,
                'counties_id' => 13,
                'name' => 'Vácduka',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1848,
                'counties_id' => 13,
                'name' => 'Vácegres',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1849,
                'counties_id' => 13,
                'name' => 'Váchartyán',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1850,
                'counties_id' => 13,
                'name' => 'Váckisújfalu',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1851,
                'counties_id' => 13,
                'name' => 'Vácrátót',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1852,
                'counties_id' => 13,
                'name' => 'Vácszentlászló',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1853,
                'counties_id' => 13,
                'name' => 'Valkó',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1854,
                'counties_id' => 13,
                'name' => 'Vámosmikola',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1855,
                'counties_id' => 13,
                'name' => 'Vasad',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1856,
                'counties_id' => 13,
                'name' => 'Vecsés',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1857,
                'counties_id' => 13,
                'name' => 'Veresegyház',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1858,
                'counties_id' => 13,
                'name' => 'Verőce',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1859,
                'counties_id' => 13,
                'name' => 'Verseg',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1860,
                'counties_id' => 13,
                'name' => 'Visegrád',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1861,
                'counties_id' => 13,
                'name' => 'Zebegény',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1862,
                'counties_id' => 13,
                'name' => 'Zsámbék',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1863,
                'counties_id' => 13,
                'name' => 'Zsámbok',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1864,
                'counties_id' => 14,
                'name' => 'Ádánd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1865,
                'counties_id' => 14,
                'name' => 'Alsóbogát',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1866,
                'counties_id' => 14,
                'name' => 'Andocs',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1867,
                'counties_id' => 14,
                'name' => 'Babócsa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1868,
                'counties_id' => 14,
                'name' => 'Bábonymegyer',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1869,
                'counties_id' => 14,
                'name' => 'Bakháza',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1870,
                'counties_id' => 14,
                'name' => 'Balatonberény',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1871,
                'counties_id' => 14,
                'name' => 'Balatonboglár',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1872,
                'counties_id' => 14,
                'name' => 'Balatonendréd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1873,
                'counties_id' => 14,
                'name' => 'Balatonfenyves',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1874,
                'counties_id' => 14,
                'name' => 'Balatonföldvár',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1875,
                'counties_id' => 14,
                'name' => 'Balatonkeresztúr',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1876,
                'counties_id' => 14,
                'name' => 'Balatonlelle',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1877,
                'counties_id' => 14,
                'name' => 'Balatonmáriafürdő',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1878,
                'counties_id' => 14,
                'name' => 'Balatonőszöd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1879,
                'counties_id' => 14,
                'name' => 'Balatonszabadi',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1880,
                'counties_id' => 14,
                'name' => 'Balatonszárszó',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1881,
                'counties_id' => 14,
                'name' => 'Balatonszemes',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1882,
                'counties_id' => 14,
                'name' => 'Balatonszentgyörgy',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1883,
                'counties_id' => 14,
                'name' => 'Balatonújlak',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1884,
                'counties_id' => 14,
                'name' => 'Bálványos',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1885,
                'counties_id' => 14,
                'name' => 'Barcs',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1886,
                'counties_id' => 14,
                'name' => 'Bárdudvarnok',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1887,
                'counties_id' => 14,
                'name' => 'Baté',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1888,
                'counties_id' => 14,
                'name' => 'Bedegkér',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1889,
                'counties_id' => 14,
                'name' => 'Bélavár',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1890,
                'counties_id' => 14,
                'name' => 'Beleg',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1891,
                'counties_id' => 14,
                'name' => 'Berzence',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1892,
                'counties_id' => 14,
                'name' => 'Birján',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1893,
                'counties_id' => 14,
                'name' => 'Bodrog',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1894,
                'counties_id' => 14,
                'name' => 'Bolhás',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1895,
                'counties_id' => 14,
                'name' => 'Bolhó',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1896,
                'counties_id' => 14,
                'name' => 'Bonnya',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1897,
                'counties_id' => 14,
                'name' => 'Böhönye',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1898,
                'counties_id' => 14,
                'name' => 'Bőszénfa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1899,
                'counties_id' => 14,
                'name' => 'Buzsák',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1900,
                'counties_id' => 14,
                'name' => 'Büssü',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1901,
                'counties_id' => 14,
                'name' => 'Csákány',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1902,
                'counties_id' => 14,
                'name' => 'Cserénfa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1903,
                'counties_id' => 14,
                'name' => 'Csokonyavisonta',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1904,
                'counties_id' => 14,
                'name' => 'Csoma',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1905,
                'counties_id' => 14,
                'name' => 'Csombárd',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1906,
                'counties_id' => 14,
                'name' => 'Csököly',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1907,
                'counties_id' => 14,
                'name' => 'Csömend',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1908,
                'counties_id' => 14,
                'name' => 'Csurgó',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1909,
                'counties_id' => 14,
                'name' => 'Csurgónagymarton',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1910,
                'counties_id' => 14,
                'name' => 'Darány',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1911,
                'counties_id' => 14,
                'name' => 'Drávagárdony',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1912,
                'counties_id' => 14,
                'name' => 'Drávatamási',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1913,
                'counties_id' => 14,
                'name' => 'Ecseny',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1914,
                'counties_id' => 14,
                'name' => 'Edde',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1915,
                'counties_id' => 14,
                'name' => 'Felsőmocsolád',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1916,
                'counties_id' => 14,
                'name' => 'Fiad',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1917,
                'counties_id' => 14,
                'name' => 'Fonó',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1918,
                'counties_id' => 14,
                'name' => 'Fonyód',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1919,
                'counties_id' => 14,
                'name' => 'Főnyed',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1920,
                'counties_id' => 14,
                'name' => 'Gadács',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1921,
                'counties_id' => 14,
                'name' => 'Gadány',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1922,
                'counties_id' => 14,
                'name' => 'Gálosfa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1923,
                'counties_id' => 14,
                'name' => 'Gamás',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1924,
                'counties_id' => 14,
                'name' => 'Gige',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1925,
                'counties_id' => 14,
                'name' => 'Gölle',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1926,
                'counties_id' => 14,
                'name' => 'Görgeteg',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1927,
                'counties_id' => 14,
                'name' => 'Gyékényes',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1928,
                'counties_id' => 14,
                'name' => 'Gyugy',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1929,
                'counties_id' => 14,
                'name' => 'Hács',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1930,
                'counties_id' => 14,
                'name' => 'Hajmás',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1931,
                'counties_id' => 14,
                'name' => 'Háromfa',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1932,
                'counties_id' => 14,
                'name' => 'Hedrehely',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1933,
                'counties_id' => 14,
                'name' => 'Hencse',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1934,
                'counties_id' => 14,
                'name' => 'Heresznye',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1935,
                'counties_id' => 14,
                'name' => 'Hetes',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1936,
                'counties_id' => 14,
                'name' => 'Hollád',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1937,
                'counties_id' => 14,
                'name' => 'Homokszentgyörgy',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1938,
                'counties_id' => 14,
                'name' => 'Hosszúvíz',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1939,
                'counties_id' => 14,
                'name' => 'Igal',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1940,
                'counties_id' => 14,
                'name' => 'Iharos',
                'created_at' => '2016-09-09 18:44:34',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1941,
                'counties_id' => 14,
                'name' => 'Iharosberény',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1942,
                'counties_id' => 14,
                'name' => 'Inke',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1943,
                'counties_id' => 14,
                'name' => 'Istvándi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1944,
                'counties_id' => 14,
                'name' => 'Jákó',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1945,
                'counties_id' => 14,
                'name' => 'Juta',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1946,
                'counties_id' => 14,
                'name' => 'Kadarkút',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1947,
                'counties_id' => 14,
                'name' => 'Kálmáncsa',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1948,
                'counties_id' => 14,
                'name' => 'Kánya',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1949,
                'counties_id' => 14,
                'name' => 'Kapoly',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1950,
                'counties_id' => 14,
                'name' => 'Kaposfő',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1951,
                'counties_id' => 14,
                'name' => 'Kaposgyarmat',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1952,
                'counties_id' => 14,
                'name' => 'Kaposhomok',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1953,
                'counties_id' => 14,
                'name' => 'Kaposkeresztúr',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1954,
                'counties_id' => 14,
                'name' => 'Kaposmérő',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1955,
                'counties_id' => 14,
                'name' => 'Kaposújlak',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1956,
                'counties_id' => 14,
                'name' => 'Kaposvár',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1957,
                'counties_id' => 14,
                'name' => 'Kaposszerdahely',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1958,
                'counties_id' => 14,
                'name' => 'Kára',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1959,
                'counties_id' => 14,
                'name' => 'Karád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1960,
                'counties_id' => 14,
                'name' => 'Kastélyosdombó',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1961,
                'counties_id' => 14,
                'name' => 'Kaszó',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1962,
                'counties_id' => 14,
                'name' => 'Kazsok',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1963,
                'counties_id' => 14,
                'name' => 'Kelevíz',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1964,
                'counties_id' => 14,
                'name' => 'Kercseliget',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1965,
                'counties_id' => 14,
                'name' => 'Kereki',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1966,
                'counties_id' => 14,
                'name' => 'Kéthely',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1967,
                'counties_id' => 14,
                'name' => 'Kisasszond',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1968,
                'counties_id' => 14,
                'name' => 'Kisbajom',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1969,
                'counties_id' => 14,
                'name' => 'Kisbárapáti',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1970,
                'counties_id' => 14,
                'name' => 'Kisberény',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1971,
                'counties_id' => 14,
                'name' => 'Kisgyalán',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1972,
                'counties_id' => 14,
                'name' => 'Kiskorpád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1973,
                'counties_id' => 14,
                'name' => 'Komlósd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1974,
                'counties_id' => 14,
                'name' => 'Kőkút',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1975,
                'counties_id' => 14,
                'name' => 'Kőröshegy',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1976,
                'counties_id' => 14,
                'name' => 'Kötcse',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1977,
                'counties_id' => 14,
                'name' => 'Kutas',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1978,
                'counties_id' => 14,
                'name' => 'Lábod',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1979,
                'counties_id' => 14,
                'name' => 'Lad',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1980,
                'counties_id' => 14,
                'name' => 'Lakócsa',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1981,
                'counties_id' => 14,
                'name' => 'Látrány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1982,
                'counties_id' => 14,
                'name' => 'Lengyeltóti',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1983,
                'counties_id' => 14,
                'name' => 'Libickozma',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1984,
                'counties_id' => 14,
                'name' => 'Lulla',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1985,
                'counties_id' => 14,
                'name' => 'Magyaratád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1986,
                'counties_id' => 14,
                'name' => 'Magyaregres',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1987,
                'counties_id' => 14,
                'name' => 'Marcali',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1988,
                'counties_id' => 14,
                'name' => 'Mernye',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1989,
                'counties_id' => 14,
                'name' => 'Mesztegnyő',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1990,
                'counties_id' => 14,
                'name' => 'Mezőcsokonya',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1991,
                'counties_id' => 14,
                'name' => 'Mike',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1992,
                'counties_id' => 14,
                'name' => 'Miklósi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1993,
                'counties_id' => 14,
                'name' => 'Mosdós',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1994,
                'counties_id' => 14,
                'name' => 'Nágocs',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1995,
                'counties_id' => 14,
                'name' => 'Nagyatád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1996,
                'counties_id' => 14,
                'name' => 'Nagybajom',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1997,
                'counties_id' => 14,
                'name' => 'Nagyberény',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1998,
                'counties_id' => 14,
                'name' => 'Nagyberki',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1999,
                'counties_id' => 14,
                'name' => 'Nagycsepely',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2000,
                'counties_id' => 14,
                'name' => 'Nagykorpád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'counties_id' => 14,
                'name' => 'Nagyszakácsi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2002,
                'counties_id' => 14,
                'name' => 'Nemesdéd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2003,
                'counties_id' => 14,
                'name' => 'Nemeskisfalud',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2004,
                'counties_id' => 14,
                'name' => 'Nemesvid',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2005,
                'counties_id' => 14,
                'name' => 'Nikla',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2006,
                'counties_id' => 14,
                'name' => 'Nyim',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2007,
                'counties_id' => 14,
                'name' => 'Orci',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2008,
                'counties_id' => 14,
                'name' => 'Ordacsehi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2009,
                'counties_id' => 14,
                'name' => 'Osztopán',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2010,
                'counties_id' => 14,
                'name' => 'Öreglak',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2011,
                'counties_id' => 14,
                'name' => 'Őrtilos',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2012,
                'counties_id' => 14,
                'name' => 'Ötvöskónyi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2013,
                'counties_id' => 14,
                'name' => 'Pálmajor',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2014,
                'counties_id' => 14,
                'name' => 'Pamuk',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2015,
                'counties_id' => 14,
                'name' => 'Patalom',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2016,
                'counties_id' => 14,
                'name' => 'Patca',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2017,
                'counties_id' => 14,
                'name' => 'Patosfa',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2018,
                'counties_id' => 14,
                'name' => 'Péterhida',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2019,
                'counties_id' => 14,
                'name' => 'Pogányszentpéter',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2020,
                'counties_id' => 14,
                'name' => 'Polány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2021,
                'counties_id' => 14,
                'name' => 'Porrog',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2022,
                'counties_id' => 14,
                'name' => 'Porrogszentkirály',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2023,
                'counties_id' => 14,
                'name' => 'Porrogszentpál',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2024,
                'counties_id' => 14,
                'name' => 'Potony',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2025,
                'counties_id' => 14,
                'name' => 'Pusztakovácsi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2026,
                'counties_id' => 14,
                'name' => 'Pusztaszemes',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2027,
                'counties_id' => 14,
                'name' => 'Ráksi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2028,
                'counties_id' => 14,
                'name' => 'Rinyabesenyő',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2029,
                'counties_id' => 14,
                'name' => 'Rinyakovácsi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2030,
                'counties_id' => 14,
                'name' => 'Rinyaszentkirály',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2031,
                'counties_id' => 14,
                'name' => 'Rinyaújlak',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2032,
                'counties_id' => 14,
                'name' => 'Rinyaújnép',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2033,
                'counties_id' => 14,
                'name' => 'Ságvár',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2034,
                'counties_id' => 14,
                'name' => 'Sántos',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2035,
                'counties_id' => 14,
                'name' => 'Sávoly',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2036,
                'counties_id' => 14,
                'name' => 'Segesd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2037,
                'counties_id' => 14,
                'name' => 'Sérsekszőlős',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2038,
                'counties_id' => 14,
                'name' => 'Simonfa',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2039,
                'counties_id' => 14,
                'name' => 'Siófok',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2040,
                'counties_id' => 14,
                'name' => 'Siójut',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2041,
                'counties_id' => 14,
                'name' => 'Som',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2042,
                'counties_id' => 14,
                'name' => 'Somodor',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2043,
                'counties_id' => 14,
                'name' => 'Somogyacsa',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2044,
                'counties_id' => 14,
                'name' => 'Somogyaracs',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2045,
                'counties_id' => 14,
                'name' => 'Somogyaszaló',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2046,
                'counties_id' => 14,
                'name' => 'Somogybabod',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2047,
                'counties_id' => 14,
                'name' => 'Somogybükkösd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2048,
                'counties_id' => 14,
                'name' => 'Somogycsicsó',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2049,
                'counties_id' => 14,
                'name' => 'Somogydöröcske',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2050,
                'counties_id' => 14,
                'name' => 'Somogyegres',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2051,
                'counties_id' => 14,
                'name' => 'Somogyfajsz',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2052,
                'counties_id' => 14,
                'name' => 'Somogygeszti',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2053,
                'counties_id' => 14,
                'name' => 'Somogyjád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2054,
                'counties_id' => 14,
                'name' => 'Somogymeggyes',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2055,
                'counties_id' => 14,
                'name' => 'Somogysámson',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2056,
                'counties_id' => 14,
                'name' => 'Somogysárd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2057,
                'counties_id' => 14,
                'name' => 'Somogysimonyi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2058,
                'counties_id' => 14,
                'name' => 'Somogyszentpál',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2059,
                'counties_id' => 14,
                'name' => 'Somogyszil',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2060,
                'counties_id' => 14,
                'name' => 'Somogyszob',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2061,
                'counties_id' => 14,
                'name' => 'Somogytúr',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2062,
                'counties_id' => 14,
                'name' => 'Somogyudvarhely',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2063,
                'counties_id' => 14,
                'name' => 'Somogyvámos',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2064,
                'counties_id' => 14,
                'name' => 'Somogyvár',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2065,
                'counties_id' => 14,
                'name' => 'Somogyzsitfa',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2066,
                'counties_id' => 14,
                'name' => 'Szabadi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2067,
                'counties_id' => 14,
                'name' => 'Szabás',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2068,
                'counties_id' => 14,
                'name' => 'Szántód',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2069,
                'counties_id' => 14,
                'name' => 'Szegerdő',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2070,
                'counties_id' => 14,
                'name' => 'Szenna',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2071,
                'counties_id' => 14,
                'name' => 'Szenta',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2072,
                'counties_id' => 14,
                'name' => 'Szentbalázs',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2073,
                'counties_id' => 14,
                'name' => 'Szentborbás',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2074,
                'counties_id' => 14,
                'name' => 'Szentgáloskér',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2075,
                'counties_id' => 14,
                'name' => 'Szenyér',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2076,
                'counties_id' => 14,
                'name' => 'Szilvásszentmárton',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2077,
                'counties_id' => 14,
                'name' => 'Szólád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2078,
                'counties_id' => 14,
                'name' => 'Szorosad',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2079,
                'counties_id' => 14,
                'name' => 'Szőkedencs',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2080,
                'counties_id' => 14,
                'name' => 'Szőlősgyörök',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2081,
                'counties_id' => 14,
                'name' => 'Szulok',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2082,
                'counties_id' => 14,
                'name' => 'Tab',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2083,
                'counties_id' => 14,
                'name' => 'Tapsony',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2084,
                'counties_id' => 14,
                'name' => 'Tarany',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2085,
                'counties_id' => 14,
                'name' => 'Táska',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2086,
                'counties_id' => 14,
                'name' => 'Taszár',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2087,
                'counties_id' => 14,
                'name' => 'Teleki',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2088,
                'counties_id' => 14,
                'name' => 'Tengőd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2089,
                'counties_id' => 14,
                'name' => 'Tikos',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2090,
                'counties_id' => 14,
                'name' => 'Torvaj',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2091,
                'counties_id' => 14,
                'name' => 'Tótújfalu',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2092,
                'counties_id' => 14,
                'name' => 'Törökkoppány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2093,
                'counties_id' => 14,
                'name' => 'Újvárfalva',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2094,
                'counties_id' => 14,
                'name' => 'Varászló',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2095,
                'counties_id' => 14,
                'name' => 'Várda',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2096,
                'counties_id' => 14,
                'name' => 'Vése',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2097,
                'counties_id' => 14,
                'name' => 'Visnye',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2098,
                'counties_id' => 14,
                'name' => 'Visz',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2099,
                'counties_id' => 14,
                'name' => 'Vízvár',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2100,
                'counties_id' => 14,
                'name' => 'Vörs',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2101,
                'counties_id' => 14,
                'name' => 'Zákány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2102,
                'counties_id' => 14,
                'name' => 'Zákányfalu',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2103,
                'counties_id' => 14,
                'name' => 'Zala',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2104,
                'counties_id' => 14,
                'name' => 'Zamárdi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2105,
                'counties_id' => 14,
                'name' => 'Zics',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2106,
                'counties_id' => 14,
                'name' => 'Zimány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2107,
                'counties_id' => 14,
                'name' => 'Zselickisfalud',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2108,
                'counties_id' => 14,
                'name' => 'Zselickislak',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2109,
                'counties_id' => 14,
                'name' => 'Zselicszentpál',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2110,
                'counties_id' => 15,
                'name' => 'Ajak',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2111,
                'counties_id' => 15,
                'name' => 'Anarcs',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2112,
                'counties_id' => 15,
                'name' => 'Apagy',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2113,
                'counties_id' => 15,
                'name' => 'Aranyosapáti',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2114,
                'counties_id' => 15,
                'name' => 'Baktalórántháza',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2115,
                'counties_id' => 15,
                'name' => 'Balkány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2116,
                'counties_id' => 15,
                'name' => 'Balsa',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2117,
                'counties_id' => 15,
                'name' => 'Barabás',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2118,
                'counties_id' => 15,
                'name' => 'Bátorliget',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2119,
                'counties_id' => 15,
                'name' => 'Benk',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2120,
                'counties_id' => 15,
                'name' => 'Beregdaróc',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2121,
                'counties_id' => 15,
                'name' => 'Beregsurány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2122,
                'counties_id' => 15,
                'name' => 'Berkesz',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2123,
                'counties_id' => 15,
                'name' => 'Besenyőd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2124,
                'counties_id' => 15,
                'name' => 'Beszterec',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2125,
                'counties_id' => 15,
                'name' => 'Biri',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2126,
                'counties_id' => 15,
                'name' => 'Botpalád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2127,
                'counties_id' => 15,
                'name' => 'Bököny',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2128,
                'counties_id' => 15,
                'name' => 'Buj',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2129,
                'counties_id' => 15,
                'name' => 'Cégénydányád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2130,
                'counties_id' => 15,
                'name' => 'Csaholc',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2131,
                'counties_id' => 15,
                'name' => 'Csaroda',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2132,
                'counties_id' => 15,
                'name' => 'Császló',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2133,
                'counties_id' => 15,
                'name' => 'Csegöld',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2134,
                'counties_id' => 15,
                'name' => 'Csenger',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2135,
                'counties_id' => 15,
                'name' => 'Csengersima',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2136,
                'counties_id' => 15,
                'name' => 'Csengerújfalu',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2137,
                'counties_id' => 15,
                'name' => 'Darnó',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2138,
                'counties_id' => 15,
                'name' => 'Demecser',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2139,
                'counties_id' => 15,
                'name' => 'Dombrád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2140,
                'counties_id' => 15,
                'name' => 'Döge',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2141,
                'counties_id' => 15,
                'name' => 'Encsencs',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2142,
                'counties_id' => 15,
                'name' => 'Eperjeske',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2143,
                'counties_id' => 15,
                'name' => 'Érpatak',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2144,
                'counties_id' => 15,
                'name' => 'Fábiánháza',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2145,
                'counties_id' => 15,
                'name' => 'Fehérgyarmat',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2146,
                'counties_id' => 15,
                'name' => 'Fényeslitke',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2147,
                'counties_id' => 15,
                'name' => 'Fülesd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2148,
                'counties_id' => 15,
                'name' => 'Fülpösdaróc',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2149,
                'counties_id' => 15,
                'name' => 'Gacsály',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2150,
                'counties_id' => 15,
                'name' => 'Garbolc',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2151,
                'counties_id' => 15,
                'name' => 'Gávavencsellő',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2152,
                'counties_id' => 15,
                'name' => 'Géberjén',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2153,
                'counties_id' => 15,
                'name' => 'Gégény',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2154,
                'counties_id' => 15,
                'name' => 'Gelénes',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2155,
                'counties_id' => 15,
                'name' => 'Gemzse',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2156,
                'counties_id' => 15,
                'name' => 'Geszteréd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2157,
                'counties_id' => 15,
                'name' => 'Gulács',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2158,
                'counties_id' => 15,
                'name' => 'Győröcske',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2159,
                'counties_id' => 15,
                'name' => 'Győrtelek',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2160,
                'counties_id' => 15,
                'name' => 'Gyulaháza',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2161,
                'counties_id' => 15,
                'name' => 'Gyügye',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2162,
                'counties_id' => 15,
                'name' => 'Gyüre',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2163,
                'counties_id' => 15,
                'name' => 'Hermánszeg',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2164,
                'counties_id' => 15,
                'name' => 'Hetefejércse',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2165,
                'counties_id' => 15,
                'name' => 'Hodász',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2166,
                'counties_id' => 15,
                'name' => 'Ibrány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2167,
                'counties_id' => 15,
                'name' => 'Ilk',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2168,
                'counties_id' => 15,
                'name' => 'Jánd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2169,
                'counties_id' => 15,
                'name' => 'Jánkmajtis',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2170,
                'counties_id' => 15,
                'name' => 'Jármi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2171,
                'counties_id' => 15,
                'name' => 'Jéke',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2172,
                'counties_id' => 15,
                'name' => 'Kállósemjén',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2173,
                'counties_id' => 15,
                'name' => 'Kálmánháza',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2174,
                'counties_id' => 15,
                'name' => 'Kántorjánosi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2175,
                'counties_id' => 15,
                'name' => 'Kék',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2176,
                'counties_id' => 15,
                'name' => 'Kékcse',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2177,
                'counties_id' => 15,
                'name' => 'Kemecse',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2178,
                'counties_id' => 15,
                'name' => 'Kérsemjén',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2179,
                'counties_id' => 15,
                'name' => 'Kisar',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2180,
                'counties_id' => 15,
                'name' => 'Kishódos',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2181,
                'counties_id' => 15,
                'name' => 'Kisléta',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2182,
                'counties_id' => 15,
                'name' => 'Kisnamény',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2183,
                'counties_id' => 15,
                'name' => 'Kispalád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2184,
                'counties_id' => 15,
                'name' => 'Kisvárda',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2185,
                'counties_id' => 15,
                'name' => 'Kisvarsány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2186,
                'counties_id' => 15,
                'name' => 'Kisszekeres',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2187,
                'counties_id' => 15,
                'name' => 'Kocsord',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2188,
                'counties_id' => 15,
                'name' => 'Komlódtótfalu',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2189,
                'counties_id' => 15,
                'name' => 'Komoró',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2190,
                'counties_id' => 15,
                'name' => 'Kótaj',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2191,
                'counties_id' => 15,
                'name' => 'Kölcse',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2192,
                'counties_id' => 15,
                'name' => 'Kömörő',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2193,
                'counties_id' => 15,
                'name' => 'Laskod',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2194,
                'counties_id' => 15,
                'name' => 'Levelek',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2195,
                'counties_id' => 15,
                'name' => 'Lónya',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2196,
                'counties_id' => 15,
                'name' => 'Lövőpetri',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2197,
                'counties_id' => 15,
                'name' => 'Magosliget',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2198,
                'counties_id' => 15,
                'name' => 'Magy',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2199,
                'counties_id' => 15,
                'name' => 'Mánd',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2200,
                'counties_id' => 15,
                'name' => 'Mándok',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2201,
                'counties_id' => 15,
                'name' => 'Máriapócs',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2202,
                'counties_id' => 15,
                'name' => 'Márokpapi',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2203,
                'counties_id' => 15,
                'name' => 'Mátészalka',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2204,
                'counties_id' => 15,
                'name' => 'Mátyus',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2205,
                'counties_id' => 15,
                'name' => 'Méhtelek',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2206,
                'counties_id' => 15,
                'name' => 'Mérk',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2207,
                'counties_id' => 15,
                'name' => 'Mezőladány',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2208,
                'counties_id' => 15,
                'name' => 'Milota',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2209,
                'counties_id' => 15,
                'name' => 'Nábrád',
                'created_at' => '2016-09-09 18:44:35',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2210,
                'counties_id' => 15,
                'name' => 'Nagyar',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2211,
                'counties_id' => 15,
                'name' => 'Nagycserkesz',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2212,
                'counties_id' => 15,
                'name' => 'Nagydobos',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2213,
                'counties_id' => 15,
                'name' => 'Nagyecsed',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2214,
                'counties_id' => 15,
                'name' => 'Nagyhalász',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2215,
                'counties_id' => 15,
                'name' => 'Nagyhódos',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2216,
                'counties_id' => 15,
                'name' => 'Nagykálló',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2217,
                'counties_id' => 15,
                'name' => 'Nagyszekeres',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2218,
                'counties_id' => 15,
                'name' => 'Nagyvarsány',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2219,
                'counties_id' => 15,
                'name' => 'Napkor',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2220,
                'counties_id' => 15,
                'name' => 'Nemesborzova',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2221,
                'counties_id' => 15,
                'name' => 'Nyírbátor',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2222,
                'counties_id' => 15,
                'name' => 'Nyírbéltek',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2223,
                'counties_id' => 15,
                'name' => 'Nyírbogát',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2224,
                'counties_id' => 15,
                'name' => 'Nyírbogdány',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2225,
                'counties_id' => 15,
                'name' => 'Nyírcsaholy',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2226,
                'counties_id' => 15,
                'name' => 'Nyírcsászári',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2227,
                'counties_id' => 15,
                'name' => 'Nyírderzs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2228,
                'counties_id' => 15,
                'name' => 'Nyíregyháza',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2229,
                'counties_id' => 15,
                'name' => 'Nyírgelse',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2230,
                'counties_id' => 15,
                'name' => 'Nyírgyulaj',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2231,
                'counties_id' => 15,
                'name' => 'Nyíribrony',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2232,
                'counties_id' => 15,
                'name' => 'Nyírjákó',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2233,
                'counties_id' => 15,
                'name' => 'Nyírkarász',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2234,
                'counties_id' => 15,
                'name' => 'Nyírkáta',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2235,
                'counties_id' => 15,
                'name' => 'Nyírkércs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2236,
                'counties_id' => 15,
                'name' => 'Nyírlövő',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2237,
                'counties_id' => 15,
                'name' => 'Nyírlugos',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2238,
                'counties_id' => 15,
                'name' => 'Nyírmada',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2239,
                'counties_id' => 15,
                'name' => 'Nyírmeggyes',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2240,
                'counties_id' => 15,
                'name' => 'Nyírmihálydi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2241,
                'counties_id' => 15,
                'name' => 'Nyírparasznya',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2242,
                'counties_id' => 15,
                'name' => 'Nyírpazony',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2243,
                'counties_id' => 15,
                'name' => 'Nyírpilis',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2244,
                'counties_id' => 15,
                'name' => 'Nyírtass',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2245,
                'counties_id' => 15,
                'name' => 'Nyírtelek',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2246,
                'counties_id' => 15,
                'name' => 'Nyírtét',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2247,
                'counties_id' => 15,
                'name' => 'Nyírtura',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2248,
                'counties_id' => 15,
                'name' => 'Nyírvasvári',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2249,
                'counties_id' => 15,
                'name' => 'Ófehértó',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2250,
                'counties_id' => 15,
                'name' => 'Olcsva',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2251,
                'counties_id' => 15,
                'name' => 'Olcsvaapáti',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2252,
                'counties_id' => 15,
                'name' => 'Ópályi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2253,
                'counties_id' => 15,
                'name' => 'Ököritófülpös',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2254,
                'counties_id' => 15,
                'name' => 'Ömböly',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2255,
                'counties_id' => 15,
                'name' => 'Őr',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2256,
                'counties_id' => 15,
                'name' => 'Panyola',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2257,
                'counties_id' => 15,
                'name' => 'Pap',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2258,
                'counties_id' => 15,
                'name' => 'Papos',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2259,
                'counties_id' => 15,
                'name' => 'Paszab',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2260,
                'counties_id' => 15,
                'name' => 'Pátroha',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2261,
                'counties_id' => 15,
                'name' => 'Pátyod',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2262,
                'counties_id' => 15,
                'name' => 'Penészlek',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2263,
                'counties_id' => 15,
                'name' => 'Penyige',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2264,
                'counties_id' => 15,
                'name' => 'Petneháza',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2265,
                'counties_id' => 15,
                'name' => 'Piricse',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2266,
                'counties_id' => 15,
                'name' => 'Pócspetri',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2267,
                'counties_id' => 15,
                'name' => 'Porcsalma',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2268,
                'counties_id' => 15,
                'name' => 'Pusztadobos',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2269,
                'counties_id' => 15,
                'name' => 'Rakamaz',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2270,
                'counties_id' => 15,
                'name' => 'Ramocsaháza',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2271,
                'counties_id' => 15,
                'name' => 'Rápolt',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2272,
                'counties_id' => 15,
                'name' => 'Rétközberencs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2273,
                'counties_id' => 15,
                'name' => 'Rohod',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2274,
                'counties_id' => 15,
                'name' => 'Rozsály',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2275,
                'counties_id' => 15,
                'name' => 'Sényő',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2276,
                'counties_id' => 15,
                'name' => 'Sonkád',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2277,
                'counties_id' => 15,
                'name' => 'Szabolcs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2278,
                'counties_id' => 15,
                'name' => 'Szabolcsbáka',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2279,
                'counties_id' => 15,
                'name' => 'Szabolcsveresmart',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2280,
                'counties_id' => 15,
                'name' => 'Szakoly',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2281,
                'counties_id' => 15,
                'name' => 'Szamosangyalos',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2282,
                'counties_id' => 15,
                'name' => 'Szamosbecs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2283,
                'counties_id' => 15,
                'name' => 'Szamoskér',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2284,
                'counties_id' => 15,
                'name' => 'Szamossályi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2285,
                'counties_id' => 15,
                'name' => 'Szamostatárfalva',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2286,
                'counties_id' => 15,
                'name' => 'Szamosújlak',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2287,
                'counties_id' => 15,
                'name' => 'Szamosszeg',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2288,
                'counties_id' => 15,
                'name' => 'Szatmárcseke',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2289,
                'counties_id' => 15,
                'name' => 'Székely',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2290,
                'counties_id' => 15,
                'name' => 'Szorgalmatos',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2291,
                'counties_id' => 15,
                'name' => 'Tákos',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2292,
                'counties_id' => 15,
                'name' => 'Tarpa',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2293,
                'counties_id' => 15,
                'name' => 'Terem',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2294,
                'counties_id' => 15,
                'name' => 'Tiborszállás',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2295,
                'counties_id' => 15,
                'name' => 'Timár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2296,
                'counties_id' => 15,
                'name' => 'Tiszaadony',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2297,
                'counties_id' => 15,
                'name' => 'Tiszabecs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2298,
                'counties_id' => 15,
                'name' => 'Tiszabercel',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2299,
                'counties_id' => 15,
                'name' => 'Tiszabezdéd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2300,
                'counties_id' => 15,
                'name' => 'Tiszacsécse',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2301,
                'counties_id' => 15,
                'name' => 'Tiszadada',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2302,
                'counties_id' => 15,
                'name' => 'Tiszadob',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2303,
                'counties_id' => 15,
                'name' => 'Tiszaeszlár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2304,
                'counties_id' => 15,
                'name' => 'Tiszakanyár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2305,
                'counties_id' => 15,
                'name' => 'Tiszakerecseny',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2306,
                'counties_id' => 15,
                'name' => 'Tiszakóród',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2307,
                'counties_id' => 15,
                'name' => 'Tiszalök',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2308,
                'counties_id' => 15,
                'name' => 'Tiszamogyorós',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2309,
                'counties_id' => 15,
                'name' => 'Tiszanagyfalu',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2310,
                'counties_id' => 15,
                'name' => 'Tiszarád',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2311,
                'counties_id' => 15,
                'name' => 'Tiszaszalka',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2312,
                'counties_id' => 15,
                'name' => 'Tiszaszentmárton',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2313,
                'counties_id' => 15,
                'name' => 'Tiszatelek',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2314,
                'counties_id' => 15,
                'name' => 'Tiszavasvári',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2315,
                'counties_id' => 15,
                'name' => 'Tiszavid',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2316,
                'counties_id' => 15,
                'name' => 'Tisztaberek',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2317,
                'counties_id' => 15,
                'name' => 'Tivadar',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2318,
                'counties_id' => 15,
                'name' => 'Tornyospálca',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2319,
                'counties_id' => 15,
                'name' => 'Tunyogmatolcs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2320,
                'counties_id' => 15,
                'name' => 'Túristvándi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2321,
                'counties_id' => 15,
                'name' => 'Túrricse',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2322,
                'counties_id' => 15,
                'name' => 'Tuzsér',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2323,
                'counties_id' => 15,
                'name' => 'Tyukod',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2324,
                'counties_id' => 15,
                'name' => 'Újdombrád',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2325,
                'counties_id' => 15,
                'name' => 'Újfehértó',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2326,
                'counties_id' => 15,
                'name' => 'Újkenéz',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2327,
                'counties_id' => 15,
                'name' => 'Ura',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2328,
                'counties_id' => 15,
                'name' => 'Uszka',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2329,
                'counties_id' => 15,
                'name' => 'Vaja',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2330,
                'counties_id' => 15,
                'name' => 'Vállaj',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2331,
                'counties_id' => 15,
                'name' => 'Vámosatya',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2332,
                'counties_id' => 15,
                'name' => 'Vámosoroszi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2333,
                'counties_id' => 15,
                'name' => 'Vásárosnamény',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2334,
                'counties_id' => 15,
                'name' => 'Vasmegyer',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2335,
                'counties_id' => 15,
                'name' => 'Záhony',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2336,
                'counties_id' => 15,
                'name' => 'Zajta',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2337,
                'counties_id' => 15,
                'name' => 'Zsarolyán',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2338,
                'counties_id' => 15,
                'name' => 'Zsurk',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2339,
                'counties_id' => 16,
                'name' => 'Alsónána',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2340,
                'counties_id' => 16,
                'name' => 'Alsónyék',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2341,
                'counties_id' => 16,
                'name' => 'Aparhant',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2342,
                'counties_id' => 16,
                'name' => 'Attala',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2343,
                'counties_id' => 16,
                'name' => 'Báta',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2344,
                'counties_id' => 16,
                'name' => 'Bátaapáti',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2345,
                'counties_id' => 16,
                'name' => 'Bátaszék',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2346,
                'counties_id' => 16,
                'name' => 'Belecska',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2347,
                'counties_id' => 16,
                'name' => 'Bikács',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2348,
                'counties_id' => 16,
                'name' => 'Bogyiszló',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2349,
                'counties_id' => 16,
                'name' => 'Bonyhád',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2350,
                'counties_id' => 16,
                'name' => 'Bonyhádvarasd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2351,
                'counties_id' => 16,
                'name' => 'Bölcske',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2352,
                'counties_id' => 16,
                'name' => 'Cikó',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2353,
                'counties_id' => 16,
                'name' => 'Csibrák',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2354,
                'counties_id' => 16,
                'name' => 'Csikóstőttős',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2355,
                'counties_id' => 16,
                'name' => 'Dalmand',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2356,
                'counties_id' => 16,
                'name' => 'Decs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2357,
                'counties_id' => 16,
                'name' => 'Diósberény',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2358,
                'counties_id' => 16,
                'name' => 'Dombóvár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2359,
                'counties_id' => 16,
                'name' => 'Döbrököz',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2360,
                'counties_id' => 16,
                'name' => 'Dunaföldvár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2361,
                'counties_id' => 16,
                'name' => 'Dunaszentgyörgy',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2362,
                'counties_id' => 16,
                'name' => 'Dúzs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2363,
                'counties_id' => 16,
                'name' => 'Értény',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2364,
                'counties_id' => 16,
                'name' => 'Fácánkert',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2365,
                'counties_id' => 16,
                'name' => 'Fadd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2366,
                'counties_id' => 16,
                'name' => 'Felsőnána',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2367,
                'counties_id' => 16,
                'name' => 'Felsőnyék',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2368,
                'counties_id' => 16,
                'name' => 'Fürged',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2369,
                'counties_id' => 16,
                'name' => 'Gerjen',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2370,
                'counties_id' => 16,
                'name' => 'Grábóc',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2371,
                'counties_id' => 16,
                'name' => 'Gyönk',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2372,
                'counties_id' => 16,
                'name' => 'Györe',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2373,
                'counties_id' => 16,
                'name' => 'Györköny',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2374,
                'counties_id' => 16,
                'name' => 'Gyulaj',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2375,
                'counties_id' => 16,
                'name' => 'Harc',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2376,
                'counties_id' => 16,
                'name' => 'Hőgyész',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2377,
                'counties_id' => 16,
                'name' => 'Iregszemcse',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2378,
                'counties_id' => 16,
                'name' => 'Izmény',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2379,
                'counties_id' => 16,
                'name' => 'Jágónak',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2380,
                'counties_id' => 16,
                'name' => 'Kajdacs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2381,
                'counties_id' => 16,
                'name' => 'Kakasd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2382,
                'counties_id' => 16,
                'name' => 'Kalaznó',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2383,
                'counties_id' => 16,
                'name' => 'Kapospula',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2384,
                'counties_id' => 16,
                'name' => 'Kaposszekcső',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2385,
                'counties_id' => 16,
                'name' => 'Keszőhidegkút',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2386,
                'counties_id' => 16,
                'name' => 'Kéty',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2387,
                'counties_id' => 16,
                'name' => 'Kisdorog',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2388,
                'counties_id' => 16,
                'name' => 'Kismányok',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2389,
                'counties_id' => 16,
                'name' => 'Kistormás',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2390,
                'counties_id' => 16,
                'name' => 'Kisvejke',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2391,
                'counties_id' => 16,
                'name' => 'Kisszékely',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2392,
                'counties_id' => 16,
                'name' => 'Kocsola',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2393,
                'counties_id' => 16,
                'name' => 'Koppányszántó',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2394,
                'counties_id' => 16,
                'name' => 'Kölesd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2395,
                'counties_id' => 16,
                'name' => 'Kurd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2396,
                'counties_id' => 16,
                'name' => 'Lápafő',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2397,
                'counties_id' => 16,
                'name' => 'Madocsa',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2398,
                'counties_id' => 16,
                'name' => 'Magyarkeszi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2399,
                'counties_id' => 16,
                'name' => 'Medina',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2400,
                'counties_id' => 16,
                'name' => 'Miszla',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2401,
                'counties_id' => 16,
                'name' => 'Mórágy',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2402,
                'counties_id' => 16,
                'name' => 'Mőcsény',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2403,
                'counties_id' => 16,
                'name' => 'Mucsfa',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2404,
                'counties_id' => 16,
                'name' => 'Mucsi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2405,
                'counties_id' => 16,
                'name' => 'Murga',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2406,
                'counties_id' => 16,
                'name' => 'Nagydorog',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2407,
                'counties_id' => 16,
                'name' => 'Nagykónyi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2408,
                'counties_id' => 16,
                'name' => 'Nagymányok',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2409,
                'counties_id' => 16,
                'name' => 'Nagyszékely',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2410,
                'counties_id' => 16,
                'name' => 'Nagyszokoly',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2411,
                'counties_id' => 16,
                'name' => 'Nagyvejke',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2412,
                'counties_id' => 16,
                'name' => 'Nak',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2413,
                'counties_id' => 16,
                'name' => 'Németkér',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2414,
                'counties_id' => 16,
                'name' => 'Ozora',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2415,
                'counties_id' => 16,
                'name' => 'Őcsény',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2416,
                'counties_id' => 16,
                'name' => 'Paks',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2417,
                'counties_id' => 16,
                'name' => 'Pálfa',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2418,
                'counties_id' => 16,
                'name' => 'Pincehely',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2419,
                'counties_id' => 16,
                'name' => 'Pörböly',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2420,
                'counties_id' => 16,
                'name' => 'Pusztahencse',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2421,
                'counties_id' => 16,
                'name' => 'Regöly',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2422,
                'counties_id' => 16,
                'name' => 'Sárpilis',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2423,
                'counties_id' => 16,
                'name' => 'Sárszentlőrinc',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2424,
                'counties_id' => 16,
                'name' => 'Simontornya',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2425,
                'counties_id' => 16,
                'name' => 'Sióagárd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2426,
                'counties_id' => 16,
                'name' => 'Szakadát',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2427,
                'counties_id' => 16,
                'name' => 'Szakály',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2428,
                'counties_id' => 16,
                'name' => 'Szakcs',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2429,
                'counties_id' => 16,
                'name' => 'Szálka',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2430,
                'counties_id' => 16,
                'name' => 'Szárász',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2431,
                'counties_id' => 16,
                'name' => 'Szárazd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2432,
                'counties_id' => 16,
                'name' => 'Szedres',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2433,
                'counties_id' => 16,
                'name' => 'Szekszárd',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2434,
                'counties_id' => 16,
                'name' => 'Tamási',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2435,
                'counties_id' => 16,
                'name' => 'Tarrós',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2436,
                'counties_id' => 16,
                'name' => 'Tengelic',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2437,
                'counties_id' => 16,
                'name' => 'Tevel',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2438,
                'counties_id' => 16,
                'name' => 'Tolna',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2439,
                'counties_id' => 16,
                'name' => 'Tolnanémedi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2440,
                'counties_id' => 16,
                'name' => 'Udvari',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2441,
                'counties_id' => 16,
                'name' => 'Újireg',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2442,
                'counties_id' => 16,
                'name' => 'Váralja',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2443,
                'counties_id' => 16,
                'name' => 'Várdomb',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2444,
                'counties_id' => 16,
                'name' => 'Várong',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2445,
                'counties_id' => 16,
                'name' => 'Varsád',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2446,
                'counties_id' => 16,
                'name' => 'Závod',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2447,
                'counties_id' => 16,
                'name' => 'Zomba',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2448,
                'counties_id' => 17,
                'name' => 'Acsád',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2449,
                'counties_id' => 17,
                'name' => 'Alsószölnök',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2450,
                'counties_id' => 17,
                'name' => 'Alsóújlak',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2451,
                'counties_id' => 17,
                'name' => 'Andrásfa',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2452,
                'counties_id' => 17,
                'name' => 'Apátistvánfalva',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2453,
                'counties_id' => 17,
                'name' => 'Bajánsenye',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2454,
                'counties_id' => 17,
                'name' => 'Balogunyom',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2455,
                'counties_id' => 17,
                'name' => 'Bejcgyertyános',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2456,
                'counties_id' => 17,
                'name' => 'Bérbaltavár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2457,
                'counties_id' => 17,
                'name' => 'Boba',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2458,
                'counties_id' => 17,
                'name' => 'Borgáta',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2459,
                'counties_id' => 17,
                'name' => 'Bozzai',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2460,
                'counties_id' => 17,
                'name' => 'Bozsok',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2461,
                'counties_id' => 17,
                'name' => 'Bő',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2462,
                'counties_id' => 17,
                'name' => 'Bögöt',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2463,
                'counties_id' => 17,
                'name' => 'Bögöte',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 2464,
                'counties_id' => 17,
                'name' => 'Bucsu',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 2465,
                'counties_id' => 17,
                'name' => 'Bük',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 2466,
                'counties_id' => 17,
                'name' => 'Cák',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 2467,
                'counties_id' => 17,
                'name' => 'Celldömölk',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 2468,
                'counties_id' => 17,
                'name' => 'Chernelházadamonya',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 2469,
                'counties_id' => 17,
                'name' => 'Csákánydoroszló',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 2470,
                'counties_id' => 17,
                'name' => 'Csánig',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 2471,
                'counties_id' => 17,
                'name' => 'Csehi',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 2472,
                'counties_id' => 17,
                'name' => 'Csehimindszent',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 2473,
                'counties_id' => 17,
                'name' => 'Csempeszkopács',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 2474,
                'counties_id' => 17,
                'name' => 'Csénye',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 2475,
                'counties_id' => 17,
                'name' => 'Csepreg',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 2476,
                'counties_id' => 17,
                'name' => 'Csipkerek',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 2477,
                'counties_id' => 17,
                'name' => 'Csönge',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 2478,
                'counties_id' => 17,
                'name' => 'Csörötnek',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 2479,
                'counties_id' => 17,
                'name' => 'Daraboshegy',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 2480,
                'counties_id' => 17,
                'name' => 'Dozmat',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 2481,
                'counties_id' => 17,
                'name' => 'Döbörhegy',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 2482,
                'counties_id' => 17,
                'name' => 'Döröske',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 2483,
                'counties_id' => 17,
                'name' => 'Duka',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 2484,
                'counties_id' => 17,
                'name' => 'Egervölgy',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 2485,
                'counties_id' => 17,
                'name' => 'Egyházashetye',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 2486,
                'counties_id' => 17,
                'name' => 'Egyházashollós',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 2487,
                'counties_id' => 17,
                'name' => 'Egyházasrádóc',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 2488,
                'counties_id' => 17,
                'name' => 'Felsőcsatár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 2489,
                'counties_id' => 17,
                'name' => 'Felsőjánosfa',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 2490,
                'counties_id' => 17,
                'name' => 'Felsőmarác',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 2491,
                'counties_id' => 17,
                'name' => 'Felsőszölnök',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 2492,
                'counties_id' => 17,
                'name' => 'Gasztony',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 2493,
                'counties_id' => 17,
                'name' => 'Gencsapáti',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 2494,
                'counties_id' => 17,
                'name' => 'Gérce',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 2495,
                'counties_id' => 17,
                'name' => 'Gersekarát',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 2496,
                'counties_id' => 17,
                'name' => 'Gór',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 2497,
                'counties_id' => 17,
                'name' => 'Gyanógeregye',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 2498,
                'counties_id' => 17,
                'name' => 'Gyöngyösfalu',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 2499,
                'counties_id' => 17,
                'name' => 'Győrvár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2500,
                'counties_id' => 17,
                'name' => 'Halastó',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'counties_id' => 17,
                'name' => 'Halogy',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2502,
                'counties_id' => 17,
                'name' => 'Harasztifalu',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2503,
                'counties_id' => 17,
                'name' => 'Hegyfalu',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2504,
                'counties_id' => 17,
                'name' => 'Hegyháthodász',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2505,
                'counties_id' => 17,
                'name' => 'Hegyhátsál',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2506,
                'counties_id' => 17,
                'name' => 'Hegyhátszentjakab',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2507,
                'counties_id' => 17,
                'name' => 'Hegyhátszentmárton',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2508,
                'counties_id' => 17,
                'name' => 'Hegyhátszentpéter',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2509,
                'counties_id' => 17,
                'name' => 'Horvátlövő',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2510,
                'counties_id' => 17,
                'name' => 'Horvátzsidány',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2511,
                'counties_id' => 17,
                'name' => 'Hosszúpereszteg',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2512,
                'counties_id' => 17,
                'name' => 'Ikervár',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2513,
                'counties_id' => 17,
                'name' => 'Iklanberény',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2514,
                'counties_id' => 17,
                'name' => 'Ispánk',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2515,
                'counties_id' => 17,
                'name' => 'Ivánc',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2516,
                'counties_id' => 17,
                'name' => 'Ják',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2517,
                'counties_id' => 17,
                'name' => 'Jákfa',
                'created_at' => '2016-09-09 18:44:36',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2518,
                'counties_id' => 17,
                'name' => 'Jánosháza',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2519,
                'counties_id' => 17,
                'name' => 'Káld',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2520,
                'counties_id' => 17,
                'name' => 'Kám',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2521,
                'counties_id' => 17,
                'name' => 'Karakó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2522,
                'counties_id' => 17,
                'name' => 'Katafa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2523,
                'counties_id' => 17,
                'name' => 'Keléd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2524,
                'counties_id' => 17,
                'name' => 'Kemeneskápolna',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2525,
                'counties_id' => 17,
                'name' => 'Kemenesmagasi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2526,
                'counties_id' => 17,
                'name' => 'Kemenesmihályfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2527,
                'counties_id' => 17,
                'name' => 'Kemenespálfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2528,
                'counties_id' => 17,
                'name' => 'Kemenessömjén',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2529,
                'counties_id' => 17,
                'name' => 'Kemenesszentmárton',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2530,
                'counties_id' => 17,
                'name' => 'Kemestaródfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2531,
                'counties_id' => 17,
                'name' => 'Kenéz',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2532,
                'counties_id' => 17,
                'name' => 'Kenyeri',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2533,
                'counties_id' => 17,
                'name' => 'Kercaszomor',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2534,
                'counties_id' => 17,
                'name' => 'Kerkáskápolna',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2535,
                'counties_id' => 17,
                'name' => 'Kétvölgy',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2536,
                'counties_id' => 17,
                'name' => 'Kisrákos',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2537,
                'counties_id' => 17,
                'name' => 'Kissomlyó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2538,
                'counties_id' => 17,
                'name' => 'Kisunyom',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2539,
                'counties_id' => 17,
                'name' => 'Kiszsidány',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2540,
                'counties_id' => 17,
                'name' => 'Kondorfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2541,
                'counties_id' => 17,
                'name' => 'Köcsk',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2542,
                'counties_id' => 17,
                'name' => 'Körmend',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2543,
                'counties_id' => 17,
                'name' => 'Kőszeg',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2544,
                'counties_id' => 17,
                'name' => 'Kőszegdoroszló',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2545,
                'counties_id' => 17,
                'name' => 'Kőszegpaty',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2546,
                'counties_id' => 17,
                'name' => 'Kőszegszerdahely',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2547,
                'counties_id' => 17,
                'name' => 'Lócs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2548,
                'counties_id' => 17,
                'name' => 'Lukácsháza',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2549,
                'counties_id' => 17,
                'name' => 'Magyarlak',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2550,
                'counties_id' => 17,
                'name' => 'Magyarnádalja',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2551,
                'counties_id' => 17,
                'name' => 'Magyarszecsőd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2552,
                'counties_id' => 17,
                'name' => 'Magyarszombatfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2553,
                'counties_id' => 17,
                'name' => 'Megyehíd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2554,
                'counties_id' => 17,
                'name' => 'Meggyeskovácsi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2555,
                'counties_id' => 17,
                'name' => 'Mersevát',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2556,
                'counties_id' => 17,
                'name' => 'Mesterháza',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2557,
                'counties_id' => 17,
                'name' => 'Mesteri',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2558,
                'counties_id' => 17,
                'name' => 'Meszlen',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2559,
                'counties_id' => 17,
                'name' => 'Mikosszéplak',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2560,
                'counties_id' => 17,
                'name' => 'Molnaszecsőd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2561,
                'counties_id' => 17,
                'name' => 'Nádasd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2562,
                'counties_id' => 17,
                'name' => 'Nagygeresd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2563,
                'counties_id' => 17,
                'name' => 'Nagykölked',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2564,
                'counties_id' => 17,
                'name' => 'Nagymizdó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2565,
                'counties_id' => 17,
                'name' => 'Nagyrákos',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2566,
                'counties_id' => 17,
                'name' => 'Nagysimonyi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2567,
                'counties_id' => 17,
                'name' => 'Nagytilaj',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2568,
                'counties_id' => 17,
                'name' => 'Nárai',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2569,
                'counties_id' => 17,
                'name' => 'Narda',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2570,
                'counties_id' => 17,
                'name' => 'Nemesbőd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2571,
                'counties_id' => 17,
                'name' => 'Nemescsó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2572,
                'counties_id' => 17,
                'name' => 'Nemeskeresztúr',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2573,
                'counties_id' => 17,
                'name' => 'Nemeskocs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2574,
                'counties_id' => 17,
                'name' => 'Nemeskolta',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2575,
                'counties_id' => 17,
                'name' => 'Nemesládony',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2576,
                'counties_id' => 17,
                'name' => 'Nemesmedves',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2577,
                'counties_id' => 17,
                'name' => 'Nemesrempehollós',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2578,
                'counties_id' => 17,
                'name' => 'Nick',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2579,
                'counties_id' => 17,
                'name' => 'Nyőgér',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2580,
                'counties_id' => 17,
                'name' => 'Olaszfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2581,
                'counties_id' => 17,
                'name' => 'Ólmod',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2582,
                'counties_id' => 17,
                'name' => 'Orfalu',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2583,
                'counties_id' => 17,
                'name' => 'Ostffyasszonyfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2584,
                'counties_id' => 17,
                'name' => 'Oszkó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2585,
                'counties_id' => 17,
                'name' => 'Ölbő',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2586,
                'counties_id' => 17,
                'name' => 'Őrimagyarósd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2587,
                'counties_id' => 17,
                'name' => 'Őriszentpéter',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2588,
                'counties_id' => 17,
                'name' => 'Pácsony',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2589,
                'counties_id' => 17,
                'name' => 'Pankasz',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2590,
                'counties_id' => 17,
                'name' => 'Pápoc',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2591,
                'counties_id' => 17,
                'name' => 'Pecöl',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2592,
                'counties_id' => 17,
                'name' => 'Perenye',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2593,
                'counties_id' => 17,
                'name' => 'Peresznye',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2594,
                'counties_id' => 17,
                'name' => 'Petőmihályfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2595,
                'counties_id' => 17,
                'name' => 'Pinkamindszent',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2596,
                'counties_id' => 17,
                'name' => 'Pornóapáti',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2597,
                'counties_id' => 17,
                'name' => 'Porpác',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2598,
                'counties_id' => 17,
                'name' => 'Pósfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2599,
                'counties_id' => 17,
                'name' => 'Pusztacsó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2600,
                'counties_id' => 17,
                'name' => 'Püspökmolnári',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2601,
                'counties_id' => 17,
                'name' => 'Rábagyarmat',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2602,
                'counties_id' => 17,
                'name' => 'Rábahídvég',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2603,
                'counties_id' => 17,
                'name' => 'Rábapaty',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2604,
                'counties_id' => 17,
                'name' => 'Rábatöttös',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2605,
                'counties_id' => 17,
                'name' => 'Rádóckölked',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2606,
                'counties_id' => 17,
                'name' => 'Rátót',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2607,
                'counties_id' => 17,
                'name' => 'Répcelak',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2608,
                'counties_id' => 17,
                'name' => 'Répceszentgyörgy',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2609,
                'counties_id' => 17,
                'name' => 'Rönök',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2610,
                'counties_id' => 17,
                'name' => 'Rum',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2611,
                'counties_id' => 17,
                'name' => 'Sajtoskál',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2612,
                'counties_id' => 17,
                'name' => 'Salköveskút',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2613,
                'counties_id' => 17,
                'name' => 'Sárfimizdó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2614,
                'counties_id' => 17,
                'name' => 'Sárvár',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2615,
                'counties_id' => 17,
                'name' => 'Sé',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2616,
                'counties_id' => 17,
                'name' => 'Simaság',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2617,
                'counties_id' => 17,
                'name' => 'Sitke',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2618,
                'counties_id' => 17,
                'name' => 'Sorkifalud',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2619,
                'counties_id' => 17,
                'name' => 'Sorkikápolna',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2620,
                'counties_id' => 17,
                'name' => 'Sorokpolány',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2621,
                'counties_id' => 17,
                'name' => 'Sótony',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2622,
                'counties_id' => 17,
                'name' => 'Söpte',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2623,
                'counties_id' => 17,
                'name' => 'Szaknyér',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2624,
                'counties_id' => 17,
                'name' => 'Szakonyfalu',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2625,
                'counties_id' => 17,
                'name' => 'Szalafő',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2626,
                'counties_id' => 17,
                'name' => 'Szarvaskend',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2627,
                'counties_id' => 17,
                'name' => 'Szatta',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2628,
                'counties_id' => 17,
                'name' => 'Szeleste',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2629,
                'counties_id' => 17,
                'name' => 'Szemenye',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2630,
                'counties_id' => 17,
                'name' => 'Szentgotthárd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2631,
                'counties_id' => 17,
                'name' => 'Szentpéterfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2632,
                'counties_id' => 17,
                'name' => 'Szergény',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2633,
                'counties_id' => 17,
                'name' => 'Szombathely',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2634,
                'counties_id' => 17,
                'name' => 'Szőce',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2635,
                'counties_id' => 17,
                'name' => 'Tanakajd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2636,
                'counties_id' => 17,
                'name' => 'Táplánszentkereszt',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2637,
                'counties_id' => 17,
                'name' => 'Telekes',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2638,
                'counties_id' => 17,
                'name' => 'Tokorcs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2639,
                'counties_id' => 17,
                'name' => 'Tompaládony',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2640,
                'counties_id' => 17,
                'name' => 'Tormásliget',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2641,
                'counties_id' => 17,
                'name' => 'Torony',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2642,
                'counties_id' => 17,
                'name' => 'Tömörd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2643,
                'counties_id' => 17,
                'name' => 'Uraiújfalu',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2644,
                'counties_id' => 17,
                'name' => 'Vámoscsalád',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2645,
                'counties_id' => 17,
                'name' => 'Vasalja',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2646,
                'counties_id' => 17,
                'name' => 'Vásárosmiske',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2647,
                'counties_id' => 17,
                'name' => 'Vasasszonyfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2648,
                'counties_id' => 17,
                'name' => 'Vasegerszeg',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2649,
                'counties_id' => 17,
                'name' => 'Vashosszúfalu',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2650,
                'counties_id' => 17,
                'name' => 'Vaskeresztes',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2651,
                'counties_id' => 17,
                'name' => 'Vassurány',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2652,
                'counties_id' => 17,
                'name' => 'Vasvár',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2653,
                'counties_id' => 17,
                'name' => 'Vasszécseny',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2654,
                'counties_id' => 17,
                'name' => 'Vasszentmihály',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2655,
                'counties_id' => 17,
                'name' => 'Vasszilvágy',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2656,
                'counties_id' => 17,
                'name' => 'Vát',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2657,
                'counties_id' => 17,
                'name' => 'Velem',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2658,
                'counties_id' => 17,
                'name' => 'Velemér',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2659,
                'counties_id' => 17,
                'name' => 'Vép',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2660,
                'counties_id' => 17,
                'name' => 'Vinár',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2661,
                'counties_id' => 17,
                'name' => 'Viszák',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2662,
                'counties_id' => 17,
                'name' => 'Vönöck',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2663,
                'counties_id' => 17,
                'name' => 'Zsédeny',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2664,
                'counties_id' => 17,
                'name' => 'Zsennye',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2665,
                'counties_id' => 18,
                'name' => 'Ábrahámhegy',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2666,
                'counties_id' => 18,
                'name' => 'Adásztevel',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2667,
                'counties_id' => 18,
                'name' => 'Adorjánháza',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2668,
                'counties_id' => 18,
                'name' => 'Ajka',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2669,
                'counties_id' => 18,
                'name' => 'Alsóörs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2670,
                'counties_id' => 18,
                'name' => 'Apácatorna',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2671,
                'counties_id' => 18,
                'name' => 'Aszófő',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2672,
                'counties_id' => 18,
                'name' => 'Badacsonytomaj',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2673,
                'counties_id' => 18,
                'name' => 'Badacsonytördemic',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2674,
                'counties_id' => 18,
                'name' => 'Bakonybél',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2675,
                'counties_id' => 18,
                'name' => 'Bakonygyirót',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2676,
                'counties_id' => 18,
                'name' => 'Bakonyjákó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2677,
                'counties_id' => 18,
                'name' => 'Bakonykoppány',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2678,
                'counties_id' => 18,
                'name' => 'Bakonynána',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2679,
                'counties_id' => 18,
                'name' => 'Bakonyoszlop',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2680,
                'counties_id' => 18,
                'name' => 'Bakonypéterd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2681,
                'counties_id' => 18,
                'name' => 'Bakonypölöske',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2682,
                'counties_id' => 18,
                'name' => 'Bakonyság',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2683,
                'counties_id' => 18,
                'name' => 'Bakonyszentiván',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2684,
                'counties_id' => 18,
                'name' => 'Bakonyszentkirály',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2685,
                'counties_id' => 18,
                'name' => 'Bakonyszentlászló',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2686,
                'counties_id' => 18,
                'name' => 'Bakonyszücs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2687,
                'counties_id' => 18,
                'name' => 'Bakonytamási',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2688,
                'counties_id' => 18,
                'name' => 'Balatonakali',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2689,
                'counties_id' => 18,
                'name' => 'Balatonalmádi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2690,
                'counties_id' => 18,
                'name' => 'Balatoncsicsó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2691,
                'counties_id' => 18,
                'name' => 'Balatonederics',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2692,
                'counties_id' => 18,
                'name' => 'Balatonfőkajár',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2693,
                'counties_id' => 18,
                'name' => 'Balatonfüred',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2694,
                'counties_id' => 18,
                'name' => 'Balatonfűzfő',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2695,
                'counties_id' => 18,
                'name' => 'Balatonhenye',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2696,
                'counties_id' => 18,
                'name' => 'Balatonkenese',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2697,
                'counties_id' => 18,
                'name' => 'Balatonrendes',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2698,
                'counties_id' => 18,
                'name' => 'Balatonszepezd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2699,
                'counties_id' => 18,
                'name' => 'Balatonszőlős',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2700,
                'counties_id' => 18,
                'name' => 'Balatonudvari',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2701,
                'counties_id' => 18,
                'name' => 'Balatonvilágos',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2702,
                'counties_id' => 18,
                'name' => 'Bánd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2703,
                'counties_id' => 18,
                'name' => 'Barnag',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2704,
                'counties_id' => 18,
                'name' => 'Bazsi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2705,
                'counties_id' => 18,
                'name' => 'Béb',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2706,
                'counties_id' => 18,
                'name' => 'Békás',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2707,
                'counties_id' => 18,
                'name' => 'Berhida',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2708,
                'counties_id' => 18,
                'name' => 'Bodorfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2709,
                'counties_id' => 18,
                'name' => 'Borszörcsök',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2710,
                'counties_id' => 18,
                'name' => 'Borzavár',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2711,
                'counties_id' => 18,
                'name' => 'Csabrendek',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2712,
                'counties_id' => 18,
                'name' => 'Csajág',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2713,
                'counties_id' => 18,
                'name' => 'Csehbánya',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2714,
                'counties_id' => 18,
                'name' => 'Csesznek',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2715,
                'counties_id' => 18,
                'name' => 'Csetény',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2716,
                'counties_id' => 18,
                'name' => 'Csopak',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2717,
                'counties_id' => 18,
                'name' => 'Csót',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2718,
                'counties_id' => 18,
                'name' => 'Csögle',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2719,
                'counties_id' => 18,
                'name' => 'Dabronc',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2720,
                'counties_id' => 18,
                'name' => 'Dabrony',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2721,
                'counties_id' => 18,
                'name' => 'Dáka',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2722,
                'counties_id' => 18,
                'name' => 'Devecser',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2723,
                'counties_id' => 18,
                'name' => 'Doba',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2724,
                'counties_id' => 18,
                'name' => 'Döbrönte',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2725,
                'counties_id' => 18,
                'name' => 'Dörgicse',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2726,
                'counties_id' => 18,
                'name' => 'Dudar',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2727,
                'counties_id' => 18,
                'name' => 'Egeralja',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2728,
                'counties_id' => 18,
                'name' => 'Egyházaskesző',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2729,
                'counties_id' => 18,
                'name' => 'Eplény',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2730,
                'counties_id' => 18,
                'name' => 'Farkasgyepű',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2731,
                'counties_id' => 18,
                'name' => 'Felsőörs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2732,
                'counties_id' => 18,
                'name' => 'Fenyőfő',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2733,
                'counties_id' => 18,
                'name' => 'Ganna',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2734,
                'counties_id' => 18,
                'name' => 'Gecse',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2735,
                'counties_id' => 18,
                'name' => 'Gic',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2736,
                'counties_id' => 18,
                'name' => 'Gógánfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2737,
                'counties_id' => 18,
                'name' => 'Gyepükaján',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2738,
                'counties_id' => 18,
                'name' => 'Gyulakeszi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2739,
                'counties_id' => 18,
                'name' => 'Hajmáskér',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2740,
                'counties_id' => 18,
                'name' => 'Halimba',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2741,
                'counties_id' => 18,
                'name' => 'Hárskút',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2742,
                'counties_id' => 18,
                'name' => 'Hegyesd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2743,
                'counties_id' => 18,
                'name' => 'Hegymagas',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2744,
                'counties_id' => 18,
                'name' => 'Herend',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2745,
                'counties_id' => 18,
                'name' => 'Hetyefő',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2746,
                'counties_id' => 18,
                'name' => 'Hidegkút',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2747,
                'counties_id' => 18,
                'name' => 'Homokbödöge',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2748,
                'counties_id' => 18,
                'name' => 'Hosztót',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2749,
                'counties_id' => 18,
                'name' => 'Iszkáz',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2750,
                'counties_id' => 18,
                'name' => 'Jásd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2751,
                'counties_id' => 18,
                'name' => 'Kamond',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2752,
                'counties_id' => 18,
                'name' => 'Kapolcs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2753,
                'counties_id' => 18,
                'name' => 'Káptalanfa',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2754,
                'counties_id' => 18,
                'name' => 'Káptalantóti',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2755,
                'counties_id' => 18,
                'name' => 'Karakószörcsök',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2756,
                'counties_id' => 18,
                'name' => 'Kékkút',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2757,
                'counties_id' => 18,
                'name' => 'Kemeneshőgyész',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2758,
                'counties_id' => 18,
                'name' => 'Kemenesszentpéter',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2759,
                'counties_id' => 18,
                'name' => 'Kerta',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2760,
                'counties_id' => 18,
                'name' => 'Királyszentistván',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2761,
                'counties_id' => 18,
                'name' => 'Kisapáti',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2762,
                'counties_id' => 18,
                'name' => 'Kisberzseny',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2763,
                'counties_id' => 18,
                'name' => 'Kiscsősz',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2764,
                'counties_id' => 18,
                'name' => 'Kislőd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2765,
                'counties_id' => 18,
                'name' => 'Kispirit',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2766,
                'counties_id' => 18,
                'name' => 'Kisszőlős',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2767,
                'counties_id' => 18,
                'name' => 'Kolontár',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2768,
                'counties_id' => 18,
                'name' => 'Kővágóörs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2769,
                'counties_id' => 18,
                'name' => 'Köveskál',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2770,
                'counties_id' => 18,
                'name' => 'Kup',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2771,
                'counties_id' => 18,
                'name' => 'Külsővat',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2772,
                'counties_id' => 18,
                'name' => 'Küngös',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2773,
                'counties_id' => 18,
                'name' => 'Lázi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2774,
                'counties_id' => 18,
                'name' => 'Lesencefalu',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2775,
                'counties_id' => 18,
                'name' => 'Lesenceistvánd',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2776,
                'counties_id' => 18,
                'name' => 'Lesencetomaj',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2777,
                'counties_id' => 18,
                'name' => 'Litér',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2778,
                'counties_id' => 18,
                'name' => 'Lókút',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2779,
                'counties_id' => 18,
                'name' => 'Lovas',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2780,
                'counties_id' => 18,
                'name' => 'Lovászpatona',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2781,
                'counties_id' => 18,
                'name' => 'Magyargencs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2782,
                'counties_id' => 18,
                'name' => 'Magyarpolány',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2783,
                'counties_id' => 18,
                'name' => 'Malomsok',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2784,
                'counties_id' => 18,
                'name' => 'Marcalgergelyi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2785,
                'counties_id' => 18,
                'name' => 'Marcaltő',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2786,
                'counties_id' => 18,
                'name' => 'Márkó',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2787,
                'counties_id' => 18,
                'name' => 'Megyer',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2788,
                'counties_id' => 18,
                'name' => 'Mencshely',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2789,
                'counties_id' => 18,
                'name' => 'Mezőlak',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2790,
                'counties_id' => 18,
                'name' => 'Mihályháza',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2791,
                'counties_id' => 18,
                'name' => 'Mindszentkálla',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2792,
                'counties_id' => 18,
                'name' => 'Monostorapáti',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2793,
                'counties_id' => 18,
                'name' => 'Monoszló',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2794,
                'counties_id' => 18,
                'name' => 'Nagyacsád',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2795,
                'counties_id' => 18,
                'name' => 'Nagyalásony',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2796,
                'counties_id' => 18,
                'name' => 'Nagydém',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2797,
                'counties_id' => 18,
                'name' => 'Nagyesztergár',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2798,
                'counties_id' => 18,
                'name' => 'Nagygyimót',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2799,
                'counties_id' => 18,
                'name' => 'Nagypirit',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2800,
                'counties_id' => 18,
                'name' => 'Nagytevel',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2801,
                'counties_id' => 18,
                'name' => 'Nagyvázsony',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2802,
                'counties_id' => 18,
                'name' => 'Nemesgörzsöny',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2803,
                'counties_id' => 18,
                'name' => 'Nemesgulács',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2804,
                'counties_id' => 18,
                'name' => 'Nemeshany',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2805,
                'counties_id' => 18,
                'name' => 'Nemesvámos',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2806,
                'counties_id' => 18,
                'name' => 'Nemesvita',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2807,
                'counties_id' => 18,
                'name' => 'Nemesszalók',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2808,
                'counties_id' => 18,
                'name' => 'Németbánya',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2809,
                'counties_id' => 18,
                'name' => 'Nóráp',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2810,
                'counties_id' => 18,
                'name' => 'Noszlop',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2811,
                'counties_id' => 18,
                'name' => 'Nyárád',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2812,
                'counties_id' => 18,
                'name' => 'Nyirád',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2813,
                'counties_id' => 18,
                'name' => 'Óbudavár',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2814,
                'counties_id' => 18,
                'name' => 'Olaszfalu',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2815,
                'counties_id' => 18,
                'name' => 'Oroszi',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2816,
                'counties_id' => 18,
                'name' => 'Öcs',
                'created_at' => '2016-09-09 18:44:37',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2817,
                'counties_id' => 18,
                'name' => 'Örvényes',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2818,
                'counties_id' => 18,
                'name' => 'Ősi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2819,
                'counties_id' => 18,
                'name' => 'Öskü',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2820,
                'counties_id' => 18,
                'name' => 'Paloznak',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2821,
                'counties_id' => 18,
                'name' => 'Pápa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2822,
                'counties_id' => 18,
                'name' => 'Pápadereske',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2823,
                'counties_id' => 18,
                'name' => 'Pápakovácsi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2824,
                'counties_id' => 18,
                'name' => 'Pápasalamon',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2825,
                'counties_id' => 18,
                'name' => 'Pápateszér',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2826,
                'counties_id' => 18,
                'name' => 'Papkeszi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2827,
                'counties_id' => 18,
                'name' => 'Pécsely',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2828,
                'counties_id' => 18,
                'name' => 'Pénzesgyőr',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2829,
                'counties_id' => 18,
                'name' => 'Pétfürdő',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2830,
                'counties_id' => 18,
                'name' => 'Porva',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2831,
                'counties_id' => 18,
                'name' => 'Pula',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2832,
                'counties_id' => 18,
                'name' => 'Pusztamiske',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2833,
                'counties_id' => 18,
                'name' => 'Raposka',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2834,
                'counties_id' => 18,
                'name' => 'Révfülöp',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2835,
                'counties_id' => 18,
                'name' => 'Rigács',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2836,
                'counties_id' => 18,
                'name' => 'Románd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2837,
                'counties_id' => 18,
                'name' => 'Salföld',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2838,
                'counties_id' => 18,
                'name' => 'Sáska',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2839,
                'counties_id' => 18,
                'name' => 'Sikátor',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2840,
                'counties_id' => 18,
                'name' => 'Sóly',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2841,
                'counties_id' => 18,
                'name' => 'Somlójenő',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2842,
                'counties_id' => 18,
                'name' => 'Somlószőlős',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2843,
                'counties_id' => 18,
                'name' => 'Somlóvásárhely',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2844,
                'counties_id' => 18,
                'name' => 'Somlóvecse',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2845,
                'counties_id' => 18,
                'name' => 'Sümeg',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2846,
                'counties_id' => 18,
                'name' => 'Sümegprága',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2847,
                'counties_id' => 18,
                'name' => 'Szápár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2848,
                'counties_id' => 18,
                'name' => 'Szentantalfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2849,
                'counties_id' => 18,
                'name' => 'Szentbékkálla',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2850,
                'counties_id' => 18,
                'name' => 'Szentgál',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2851,
                'counties_id' => 18,
                'name' => 'Szentimrefalva',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2852,
                'counties_id' => 18,
                'name' => 'Szentjakabfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2853,
                'counties_id' => 18,
                'name' => 'Szentkirályszabadja',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2854,
                'counties_id' => 18,
                'name' => 'Szigliget',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2855,
                'counties_id' => 18,
                'name' => 'Szőc',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2856,
                'counties_id' => 18,
                'name' => 'Tagyon',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2857,
                'counties_id' => 18,
                'name' => 'Takácsi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2858,
                'counties_id' => 18,
                'name' => 'Taliándörögd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2859,
                'counties_id' => 18,
                'name' => 'Tapolca',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2860,
                'counties_id' => 18,
                'name' => 'Tés',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2861,
                'counties_id' => 18,
                'name' => 'Tihany',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2862,
                'counties_id' => 18,
                'name' => 'Tótvázsony',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2863,
                'counties_id' => 18,
                'name' => 'Tüskevár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2864,
                'counties_id' => 18,
                'name' => 'Ugod',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2865,
                'counties_id' => 18,
                'name' => 'Ukk',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2866,
                'counties_id' => 18,
                'name' => 'Úrkút',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2867,
                'counties_id' => 18,
                'name' => 'Uzsa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2868,
                'counties_id' => 18,
                'name' => 'Vanyola',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2869,
                'counties_id' => 18,
                'name' => 'Várkesző',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2870,
                'counties_id' => 18,
                'name' => 'Városlőd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2871,
                'counties_id' => 18,
                'name' => 'Várpalota',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2872,
                'counties_id' => 18,
                'name' => 'Vaszar',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2873,
                'counties_id' => 18,
                'name' => 'Vászoly',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2874,
                'counties_id' => 18,
                'name' => 'Veszprém',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2875,
                'counties_id' => 18,
                'name' => 'Veszprémfajsz',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2876,
                'counties_id' => 18,
                'name' => 'Veszprémgalsa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2877,
                'counties_id' => 18,
                'name' => 'Veszprémvarsány',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2878,
                'counties_id' => 18,
                'name' => 'Vid',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2879,
                'counties_id' => 18,
                'name' => 'Vigántpetend',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2880,
                'counties_id' => 18,
                'name' => 'Vilonya',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2881,
                'counties_id' => 18,
                'name' => 'Vinár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2882,
                'counties_id' => 18,
                'name' => 'Vöröstó',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2883,
                'counties_id' => 18,
                'name' => 'Zalaerdőd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2884,
                'counties_id' => 18,
                'name' => 'Zalagyömörő',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2885,
                'counties_id' => 18,
                'name' => 'Zalahaláp',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2886,
                'counties_id' => 18,
                'name' => 'Zalameggyes',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2887,
                'counties_id' => 18,
                'name' => 'Zalaszegvár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2888,
                'counties_id' => 18,
                'name' => 'Zánka',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2889,
                'counties_id' => 18,
                'name' => 'Zirc',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2890,
                'counties_id' => 19,
                'name' => 'Alibánfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2891,
                'counties_id' => 19,
                'name' => 'Almásháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2892,
                'counties_id' => 19,
                'name' => 'Alsónemesapáti',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2893,
                'counties_id' => 19,
                'name' => 'Alsópáhok',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2894,
                'counties_id' => 19,
                'name' => 'Alsórajk',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2895,
                'counties_id' => 19,
                'name' => 'Alsószenterzsébet',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2896,
                'counties_id' => 19,
                'name' => 'Babosdöbréte',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2897,
                'counties_id' => 19,
                'name' => 'Baglad',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2898,
                'counties_id' => 19,
                'name' => 'Bagod',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2899,
                'counties_id' => 19,
                'name' => 'Bak',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2900,
                'counties_id' => 19,
                'name' => 'Baktüttös',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2901,
                'counties_id' => 19,
                'name' => 'Balatongyörök',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2902,
                'counties_id' => 19,
                'name' => 'Balatonmagyaród',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2903,
                'counties_id' => 19,
                'name' => 'Bánokszentgyörgy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2904,
                'counties_id' => 19,
                'name' => 'Barlahida',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2905,
                'counties_id' => 19,
                'name' => 'Batyk',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2906,
                'counties_id' => 19,
                'name' => 'Bázakerettye',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2907,
                'counties_id' => 19,
                'name' => 'Becsehely',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2908,
                'counties_id' => 19,
                'name' => 'Becsvölgye',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2909,
                'counties_id' => 19,
                'name' => 'Belezna',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2910,
                'counties_id' => 19,
                'name' => 'Belsősárd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2911,
                'counties_id' => 19,
                'name' => 'Bezeréd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2912,
                'counties_id' => 19,
                'name' => 'Bocfölde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2913,
                'counties_id' => 19,
                'name' => 'Bocska',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2914,
                'counties_id' => 19,
                'name' => 'Bókaháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2915,
                'counties_id' => 19,
                'name' => 'Boncodfölde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2916,
                'counties_id' => 19,
                'name' => 'Borsfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2917,
                'counties_id' => 19,
                'name' => 'Böde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2918,
                'counties_id' => 19,
                'name' => 'Bödeháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2919,
                'counties_id' => 19,
                'name' => 'Börzönce',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2920,
                'counties_id' => 19,
                'name' => 'Búcsúszentlászló',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2921,
                'counties_id' => 19,
                'name' => 'Bucsuta',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2922,
                'counties_id' => 19,
                'name' => 'Csapi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2923,
                'counties_id' => 19,
                'name' => 'Csatár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2924,
                'counties_id' => 19,
                'name' => 'Cserszegtomaj',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2925,
                'counties_id' => 19,
                'name' => 'Csertalakos',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2926,
                'counties_id' => 19,
                'name' => 'Csesztreg',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2927,
                'counties_id' => 19,
                'name' => 'Csonkahegyhát',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2928,
                'counties_id' => 19,
                'name' => 'Csöde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2929,
                'counties_id' => 19,
                'name' => 'Csömödér',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2930,
                'counties_id' => 19,
                'name' => 'Csörnyeföld',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2931,
                'counties_id' => 19,
                'name' => 'Dióskál',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2932,
                'counties_id' => 19,
                'name' => 'Dobri',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2933,
                'counties_id' => 19,
                'name' => 'Dobronhegy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2934,
                'counties_id' => 19,
                'name' => 'Döbröce',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2935,
                'counties_id' => 19,
                'name' => 'Dötk',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2936,
                'counties_id' => 19,
                'name' => 'Egeraracsa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2937,
                'counties_id' => 19,
                'name' => 'Egervár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2938,
                'counties_id' => 19,
                'name' => 'Eszteregnye',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2939,
                'counties_id' => 19,
                'name' => 'Esztergályhorváti',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2940,
                'counties_id' => 19,
                'name' => 'Felsőpáhok',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2941,
                'counties_id' => 19,
                'name' => 'Felsőrajk',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2942,
                'counties_id' => 19,
                'name' => 'Felsőszenterzsébet',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2943,
                'counties_id' => 19,
                'name' => 'Fityeház',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2944,
                'counties_id' => 19,
                'name' => 'Fűzvölgy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2945,
                'counties_id' => 19,
                'name' => 'Gáborjánháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2946,
                'counties_id' => 19,
                'name' => 'Galambok',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2947,
                'counties_id' => 19,
                'name' => 'Garabonc',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2948,
                'counties_id' => 19,
                'name' => 'Gellénháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2949,
                'counties_id' => 19,
                'name' => 'Gelse',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2950,
                'counties_id' => 19,
                'name' => 'Gelsesziget',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2951,
                'counties_id' => 19,
                'name' => 'Gétye',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2952,
                'counties_id' => 19,
                'name' => 'Gombosszeg',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2953,
                'counties_id' => 19,
                'name' => 'Gosztola',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2954,
                'counties_id' => 19,
                'name' => 'Gősfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2955,
                'counties_id' => 19,
                'name' => 'Gutorfölde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2956,
                'counties_id' => 19,
                'name' => 'Gyenesdiás',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2957,
                'counties_id' => 19,
                'name' => 'Gyűrűs',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2958,
                'counties_id' => 19,
                'name' => 'Hagyárosbörönd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2959,
                'counties_id' => 19,
                'name' => 'Hahót',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2960,
                'counties_id' => 19,
                'name' => 'Hernyék',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2961,
                'counties_id' => 19,
                'name' => 'Hévíz',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2962,
                'counties_id' => 19,
                'name' => 'Homokkomárom',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2963,
                'counties_id' => 19,
                'name' => 'Hosszúvölgy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 2964,
                'counties_id' => 19,
                'name' => 'Hottó',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 2965,
                'counties_id' => 19,
                'name' => 'Iborfia',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 2966,
                'counties_id' => 19,
                'name' => 'Iklódbördőce',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 2967,
                'counties_id' => 19,
                'name' => 'Kacorlak',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 2968,
                'counties_id' => 19,
                'name' => 'Kallósd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 2969,
                'counties_id' => 19,
                'name' => 'Kálócfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 2970,
                'counties_id' => 19,
                'name' => 'Kányavár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 2971,
                'counties_id' => 19,
                'name' => 'Karmacs',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 2972,
                'counties_id' => 19,
                'name' => 'Kávás',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 2973,
                'counties_id' => 19,
                'name' => 'Kehidakustány',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 2974,
                'counties_id' => 19,
                'name' => 'Kemendollár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 2975,
                'counties_id' => 19,
                'name' => 'Keménfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 2976,
                'counties_id' => 19,
                'name' => 'Kerecseny',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 2977,
                'counties_id' => 19,
                'name' => 'Kerkabarabás',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 2978,
                'counties_id' => 19,
                'name' => 'Kerkafalva',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 2979,
                'counties_id' => 19,
                'name' => 'Kerkakutas',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 2980,
                'counties_id' => 19,
                'name' => 'Kerkaszentkirály',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 2981,
                'counties_id' => 19,
                'name' => 'Kerkateskánd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 2982,
                'counties_id' => 19,
                'name' => 'Keszthely',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 2983,
                'counties_id' => 19,
                'name' => 'Kilimán',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 2984,
                'counties_id' => 19,
                'name' => 'Kisbucsa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 2985,
                'counties_id' => 19,
                'name' => 'Kiscsehi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 2986,
                'counties_id' => 19,
                'name' => 'Kisgörbő',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 2987,
                'counties_id' => 19,
                'name' => 'Kiskutas',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 2988,
                'counties_id' => 19,
                'name' => 'Kispáli',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 2989,
                'counties_id' => 19,
                'name' => 'Kisrécse',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 2990,
                'counties_id' => 19,
                'name' => 'Kistolmács',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 2991,
                'counties_id' => 19,
                'name' => 'Kisvásárhely',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 2992,
                'counties_id' => 19,
                'name' => 'Kissziget',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 2993,
                'counties_id' => 19,
                'name' => 'Kozmadombja',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 2994,
                'counties_id' => 19,
                'name' => 'Kustánszeg',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 2995,
                'counties_id' => 19,
                'name' => 'Külsősárd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 2996,
                'counties_id' => 19,
                'name' => 'Lakhegy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 2997,
                'counties_id' => 19,
                'name' => 'Lasztonya',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 2998,
                'counties_id' => 19,
                'name' => 'Lendvadedes',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 2999,
                'counties_id' => 19,
                'name' => 'Lendvajakabfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 3000,
                'counties_id' => 19,
                'name' => 'Lenti',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'counties_id' => 19,
                'name' => 'Letenye',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3002,
                'counties_id' => 19,
                'name' => 'Lickóvadamos',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3003,
                'counties_id' => 19,
                'name' => 'Ligetfalva',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 3004,
                'counties_id' => 19,
                'name' => 'Lispeszentadorján',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 3005,
                'counties_id' => 19,
                'name' => 'Liszó',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 3006,
                'counties_id' => 19,
                'name' => 'Lovászi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 3007,
                'counties_id' => 19,
                'name' => 'Magyarföld',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 3008,
                'counties_id' => 19,
                'name' => 'Magyarszentmiklós',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 3009,
                'counties_id' => 19,
                'name' => 'Magyarszerdahely',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 3010,
                'counties_id' => 19,
                'name' => 'Maróc',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 3011,
                'counties_id' => 19,
                'name' => 'Márokföld',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 3012,
                'counties_id' => 19,
                'name' => 'Miháld',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 3013,
                'counties_id' => 19,
                'name' => 'Mihályfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 3014,
                'counties_id' => 19,
                'name' => 'Mikekarácsonyfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 3015,
                'counties_id' => 19,
                'name' => 'Milejszeg',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 3016,
                'counties_id' => 19,
                'name' => 'Misefa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 3017,
                'counties_id' => 19,
                'name' => 'Molnári',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 3018,
                'counties_id' => 19,
                'name' => 'Murakeresztúr',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 3019,
                'counties_id' => 19,
                'name' => 'Murarátka',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 3020,
                'counties_id' => 19,
                'name' => 'Muraszemenye',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 3021,
                'counties_id' => 19,
                'name' => 'Nagybakónak',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 3022,
                'counties_id' => 19,
                'name' => 'Nagygörbő',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 3023,
                'counties_id' => 19,
                'name' => 'Nagykanizsa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 3024,
                'counties_id' => 19,
                'name' => 'Nagykapornak',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 3025,
                'counties_id' => 19,
                'name' => 'Nagykutas',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 3026,
                'counties_id' => 19,
                'name' => 'Nagylengyel',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 3027,
                'counties_id' => 19,
                'name' => 'Nagypáli',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 3028,
                'counties_id' => 19,
                'name' => 'Nagyrada',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 3029,
                'counties_id' => 19,
                'name' => 'Nagyrécse',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 3030,
                'counties_id' => 19,
                'name' => 'Nemesapáti',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 3031,
                'counties_id' => 19,
                'name' => 'Nemesbük',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 3032,
                'counties_id' => 19,
                'name' => 'Nemeshetés',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 3033,
                'counties_id' => 19,
                'name' => 'Nemesnép',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 3034,
                'counties_id' => 19,
                'name' => 'Nemespátró',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 3035,
                'counties_id' => 19,
                'name' => 'Nemesrádó',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 3036,
                'counties_id' => 19,
                'name' => 'Nemessándorháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 3037,
                'counties_id' => 19,
                'name' => 'Nemesszentandrás',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 3038,
                'counties_id' => 19,
                'name' => 'Németfalu',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 3039,
                'counties_id' => 19,
                'name' => 'Nova',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 3040,
                'counties_id' => 19,
                'name' => 'Óhíd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 3041,
                'counties_id' => 19,
                'name' => 'Oltárc',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 3042,
                'counties_id' => 19,
                'name' => 'Orbányosfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 3043,
                'counties_id' => 19,
                'name' => 'Ormándlak',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 3044,
                'counties_id' => 19,
                'name' => 'Orosztony',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 3045,
                'counties_id' => 19,
                'name' => 'Ortaháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 3046,
                'counties_id' => 19,
                'name' => 'Ozmánbük',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 3047,
                'counties_id' => 19,
                'name' => 'Pacsa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 3048,
                'counties_id' => 19,
                'name' => 'Padár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 3049,
                'counties_id' => 19,
                'name' => 'Páka',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 3050,
                'counties_id' => 19,
                'name' => 'Pakod',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 3051,
                'counties_id' => 19,
                'name' => 'Pálfiszeg',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 3052,
                'counties_id' => 19,
                'name' => 'Pat',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 3053,
                'counties_id' => 19,
                'name' => 'Pethőhenye',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 3054,
                'counties_id' => 19,
                'name' => 'Petrikeresztúr',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 3055,
                'counties_id' => 19,
                'name' => 'Petrivente',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 3056,
                'counties_id' => 19,
                'name' => 'Pókaszepetk',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 3057,
                'counties_id' => 19,
                'name' => 'Pórszombat',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 3058,
                'counties_id' => 19,
                'name' => 'Pölöske',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 3059,
                'counties_id' => 19,
                'name' => 'Pölöskefő',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 3060,
                'counties_id' => 19,
                'name' => 'Pördefölde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 3061,
                'counties_id' => 19,
                'name' => 'Pötréte',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 3062,
                'counties_id' => 19,
                'name' => 'Pusztaapáti',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 3063,
                'counties_id' => 19,
                'name' => 'Pusztaederics',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 3064,
                'counties_id' => 19,
                'name' => 'Pusztamagyaród',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 3065,
                'counties_id' => 19,
                'name' => 'Pusztaszentlászló',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 3066,
                'counties_id' => 19,
                'name' => 'Ramocsa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 3067,
                'counties_id' => 19,
                'name' => 'Rédics',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 3068,
                'counties_id' => 19,
                'name' => 'Resznek',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 3069,
                'counties_id' => 19,
                'name' => 'Rezi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 3070,
                'counties_id' => 19,
                'name' => 'Rigyác',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 3071,
                'counties_id' => 19,
                'name' => 'Salomvár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 3072,
                'counties_id' => 19,
                'name' => 'Sand',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 3073,
                'counties_id' => 19,
                'name' => 'Sárhida',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 3074,
                'counties_id' => 19,
                'name' => 'Sármellék',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 3075,
                'counties_id' => 19,
                'name' => 'Semjénháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 3076,
                'counties_id' => 19,
                'name' => 'Sénye',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 3077,
                'counties_id' => 19,
                'name' => 'Sormás',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 3078,
                'counties_id' => 19,
                'name' => 'Söjtör',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 3079,
                'counties_id' => 19,
                'name' => 'Surd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 3080,
                'counties_id' => 19,
                'name' => 'Sümegcsehi',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 3081,
                'counties_id' => 19,
                'name' => 'Szalapa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 3082,
                'counties_id' => 19,
                'name' => 'Szécsisziget',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 3083,
                'counties_id' => 19,
                'name' => 'Szentgyörgyvár',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 3084,
                'counties_id' => 19,
                'name' => 'Szentgyörgyvölgy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 3085,
                'counties_id' => 19,
                'name' => 'Szentkozmadombja',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 3086,
                'counties_id' => 19,
                'name' => 'Szentliszló',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 3087,
                'counties_id' => 19,
                'name' => 'Szentmargitfalva',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 3088,
                'counties_id' => 19,
                'name' => 'Szentpéterfölde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 3089,
                'counties_id' => 19,
                'name' => 'Szentpéterúr',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 3090,
                'counties_id' => 19,
                'name' => 'Szepetnek',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 3091,
                'counties_id' => 19,
                'name' => 'Szijártóháza',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 3092,
                'counties_id' => 19,
                'name' => 'Szilvágy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 3093,
                'counties_id' => 19,
                'name' => 'Teskánd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 3094,
                'counties_id' => 19,
                'name' => 'Tilaj',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 3095,
                'counties_id' => 19,
                'name' => 'Tófej',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 3096,
                'counties_id' => 19,
                'name' => 'Tormafölde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 3097,
                'counties_id' => 19,
                'name' => 'Tornyiszentmiklós',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 3098,
                'counties_id' => 19,
                'name' => 'Tótszentmárton',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 3099,
                'counties_id' => 19,
                'name' => 'Tótszerdahely',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 3100,
                'counties_id' => 19,
                'name' => 'Türje',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 3101,
                'counties_id' => 19,
                'name' => 'Újudvar',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 3102,
                'counties_id' => 19,
                'name' => 'Valkonya',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 3103,
                'counties_id' => 19,
                'name' => 'Vállus',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 3104,
                'counties_id' => 19,
                'name' => 'Várfölde',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 3105,
                'counties_id' => 19,
                'name' => 'Várvölgy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 3106,
                'counties_id' => 19,
                'name' => 'Vasboldogasszony',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 3107,
                'counties_id' => 19,
                'name' => 'Vaspör',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 3108,
                'counties_id' => 19,
                'name' => 'Vindornyafok',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 3109,
                'counties_id' => 19,
                'name' => 'Vindornyalak',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 3110,
                'counties_id' => 19,
                'name' => 'Vindornyaszőlős',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 3111,
                'counties_id' => 19,
                'name' => 'Vonyarcvashegy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 3112,
                'counties_id' => 19,
                'name' => 'Vöckönd',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 3113,
                'counties_id' => 19,
                'name' => 'Zajk',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 3114,
                'counties_id' => 19,
                'name' => 'Zalaapáti',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 3115,
                'counties_id' => 19,
                'name' => 'Zalabaksa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 3116,
                'counties_id' => 19,
                'name' => 'Zalabér',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 3117,
                'counties_id' => 19,
                'name' => 'Zalaboldogfa',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 3118,
                'counties_id' => 19,
                'name' => 'Zalacsány',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 3119,
                'counties_id' => 19,
                'name' => 'Zalacséb',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 3120,
                'counties_id' => 19,
                'name' => 'Zalaegerszeg',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 3121,
                'counties_id' => 19,
                'name' => 'Zalaháshágy',
                'created_at' => '2016-09-09 18:44:38',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 3122,
                'counties_id' => 19,
                'name' => 'Zalaigrice',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 3123,
                'counties_id' => 19,
                'name' => 'Zalaistvánd',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 3124,
                'counties_id' => 19,
                'name' => 'Zalakaros',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 3125,
                'counties_id' => 19,
                'name' => 'Zalakomár',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 3126,
                'counties_id' => 19,
                'name' => 'Zalaköveskút',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 3127,
                'counties_id' => 19,
                'name' => 'Zalalövő',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 3128,
                'counties_id' => 19,
                'name' => 'Zalamerenye',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 3129,
                'counties_id' => 19,
                'name' => 'Zalasárszeg',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 3130,
                'counties_id' => 19,
                'name' => 'Zalaszabar',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 3131,
                'counties_id' => 19,
                'name' => 'Zalaszántó',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 3132,
                'counties_id' => 19,
                'name' => 'Zalaszentbalázs',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 3133,
                'counties_id' => 19,
                'name' => 'Zalaszentgrót',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 3134,
                'counties_id' => 19,
                'name' => 'Zalaszentgyörgy',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 3135,
                'counties_id' => 19,
                'name' => 'Zalaszentiván',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 3136,
                'counties_id' => 19,
                'name' => 'Zalaszentjakab',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 3137,
                'counties_id' => 19,
                'name' => 'Zalaszentlászló',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 3138,
                'counties_id' => 19,
                'name' => 'Zalaszentlőrinc',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 3139,
                'counties_id' => 19,
                'name' => 'Zalaszentmárton',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 3140,
                'counties_id' => 19,
                'name' => 'Zalaszentmihály',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 3141,
                'counties_id' => 19,
                'name' => 'Zalaszombatfa',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 3142,
                'counties_id' => 19,
                'name' => 'Zalatárnok',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 3143,
                'counties_id' => 19,
                'name' => 'Zalaújlak',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 3144,
                'counties_id' => 19,
                'name' => 'Zalavár',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 3145,
                'counties_id' => 19,
                'name' => 'Zalavég',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 3146,
                'counties_id' => 19,
                'name' => 'Zebecke',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 3147,
                'counties_id' => 20,
                'name' => 'Budapest I. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 3148,
                'counties_id' => 20,
                'name' => 'Budapest II. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 3149,
                'counties_id' => 20,
                'name' => 'Budapest III. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 3150,
                'counties_id' => 20,
                'name' => 'Budapest IV. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 3151,
                'counties_id' => 20,
                'name' => 'Budapest IX. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 3152,
                'counties_id' => 20,
                'name' => 'Budapest V. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 3153,
                'counties_id' => 20,
                'name' => 'Budapest VI. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 3154,
                'counties_id' => 20,
                'name' => 'Budapest VII. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 3155,
                'counties_id' => 20,
                'name' => 'Budapest VIII. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 3156,
                'counties_id' => 20,
                'name' => 'Budapest X. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 3157,
                'counties_id' => 20,
                'name' => 'Budapest XI. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 3158,
                'counties_id' => 20,
                'name' => 'Budapest XII. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 3159,
                'counties_id' => 20,
                'name' => 'Budapest XIII. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 3160,
                'counties_id' => 20,
                'name' => 'Budapest XIV. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 3161,
                'counties_id' => 20,
                'name' => 'Budapest XIX. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 3162,
                'counties_id' => 20,
                'name' => 'Budapest XV. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 3163,
                'counties_id' => 20,
                'name' => 'Budapest XVI. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 3164,
                'counties_id' => 20,
                'name' => 'Budapest XVII. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 3165,
                'counties_id' => 20,
                'name' => 'Budapest XVIII. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 3166,
                'counties_id' => 20,
                'name' => 'Budapest XX. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 3167,
                'counties_id' => 20,
                'name' => 'Budapest XXI. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 3168,
                'counties_id' => 20,
                'name' => 'Budapest XXII. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 3169,
                'counties_id' => 20,
                'name' => 'Budapest XXIII. kerület',
                'created_at' => '2016-09-09 18:44:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
