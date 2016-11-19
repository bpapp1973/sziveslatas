<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ads')->delete();
        
        \DB::table('ads')->insert(array (
            0 => 
            array (
                'id' => 11,
                'isvalid' => 0,
                'title' => 'IT',
                'website' => NULL,
                'companies_id' => 10,
                'categories_id' => 20,
                'cities_id' => 1212,
                'calendars_id' => NULL,
                'responsible' => 'Papp Béla',
                'address' => 'Kossuth u. 36.',
                'phone' => '+36302650543',
                'email' => 'bela.papp@outlook.hu',
                'description' => '',
                'price' => 100,
                'discountprice' => 80,
                'visitors' => 11,
                'menu1' => NULL,
                'menu2' => NULL,
                'menu3' => NULL,
                'menu4' => NULL,
                'startdate' => '2016-11-19',
                'enddate' => '2016-11-20',
                'expireson' => '2016-11-19',
                'created_by' => NULL,
                'created_at' => '2016-10-25 19:01:36',
                'updated_by' => NULL,
                'updated_at' => '2016-10-26 05:44:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 27,
                'isvalid' => 0,
                'title' => 'HUNGUEST GRANDHOTEL GALYA',
                'website' => 'http://index.hu',
                'companies_id' => 10,
                'categories_id' => 5,
                'cities_id' => 1212,
                'calendars_id' => NULL,
                'responsible' => 'Papp Béla',
                'address' => 'Kossuth u. 36.',
                'phone' => '+36302650543',
                'email' => 'bela.papp@outlook.hu',
                'description' => '<p>A M&aacute;tra &eacute;s az orsz&aacute;g m&aacute;sodik legmagasabb cs&uacute;cs&aacute;n, 957 m&eacute;ter magasan, 5 hekt&aacute;ros park k&ouml;zep&eacute;n, gy&ouml;ny&ouml;rű panor&aacute;m&aacute;val v&aacute;rja vend&eacute;geit Magyarorsz&aacute;g 4 csillagos magaslati sz&aacute;llod&aacute;ja, a Hunguest Grandhotel Galya****, a 4 &eacute;vszak &eacute;lm&eacute;nysz&aacute;llod&aacute;ja. A patin&aacute;s, 1939-ben &eacute;p&iacute;tett sz&aacute;lloda akkor is &eacute;s ma is a term&eacute;szet szerelmeseinek kedvenc sz&aacute;llod&aacute;ja. T&ouml;bb szoba p&oacute;t&aacute;gyazhat&oacute;, zuhanyz&oacute;s vagy k&aacute;das f&uuml;rdőszob&aacute;val rendelkezik. Minib&aacute;r, sz&eacute;f, műholdas telev&iacute;zi&oacute;, telefon, hajsz&aacute;r&iacute;t&oacute; &eacute;s ingyenes internet-csatlakoz&aacute;s is a vend&eacute;gek k&eacute;nyelm&eacute;t szolg&aacute;lja.<br />
A sz&aacute;llod&aacute;ban egyedi st&iacute;lus&uacute;, I. oszt&aacute;ly&uacute; Panor&aacute;ma &Eacute;tterem tal&aacute;lhat&oacute;.&nbsp; A&nbsp;wellness r&eacute;szleg&nbsp;k&uuml;l&ouml;nleges &eacute;lm&eacute;nyt k&iacute;n&aacute;l mind a gyermekek, mind a felnőttek r&eacute;sz&eacute;re:&nbsp;&uacute;sz&oacute;-, &eacute;lm&eacute;ny-, &eacute;s gyermekmedence, szaun&aacute;k, kerti bio r&ouml;nkszauna mer&uuml;lő medenc&eacute;vel, k&uuml;lső &eacute;lm&eacute;nymedence, infrakabin, SALVUS s&oacute;kabin, &eacute;lm&eacute;nyzuhanyok, massz&aacute;zsok, testkezel&eacute;sek, kozmetika.&nbsp;A gyermekek&nbsp;sz&oacute;rakoztat&aacute;s&aacute;ra pedig rendelkez&eacute;sre &aacute;ll a &nbsp;vadaspark,&nbsp;kalandpark, Xbox szoba, a j&aacute;t&eacute;kokkal teli Bambi kuck&oacute;, a j&aacute;tsz&oacute;t&eacute;r &eacute;s a k&eacute;pzett anim&aacute;torok &aacute;ltal vezetett gyerekprogramok.<br />
A sz&aacute;lloda r&eacute;szben akad&aacute;lymentes&iacute;tett.<br />
A napi h&aacute;romszori &eacute;tkez&eacute;s minden esetben az &eacute;rkez&eacute;s napj&aacute;n vacsor&aacute;val kezdődik, &eacute;s az elutaz&aacute;s napj&aacute;n eb&eacute;ddel fejeződik be.<br />
Az Erzs&eacute;bet-program keret&eacute;ben elnyerhető t&aacute;mogat&aacute;s nem terjed ki az idegenforgalmi ad&oacute; (IFA) &ouml;sszeg&eacute;re, amelyet minden, 18. &eacute;let&eacute;v&eacute;t bet&ouml;lt&ouml;tt vend&eacute;gnek az adott sz&aacute;ll&aacute;shelyen, k&eacute;szp&eacute;nzben sz&uuml;ks&eacute;ges megfizetnie. Az IFA m&eacute;rt&eacute;k&eacute;re minden esetben az illet&eacute;kes telep&uuml;l&eacute;si &ouml;nkorm&aacute;nyzat rendelete az ir&aacute;nyad&oacute;, &ouml;sszeg&eacute;ről a sz&aacute;ll&aacute;shely ny&uacute;jt felvil&aacute;gos&iacute;t&aacute;st.</p>

<p>&nbsp;<strong>T&eacute;r&iacute;t&eacute;s n&eacute;lk&uuml;l ig&eacute;nybe vehető szolg&aacute;ltat&aacute;sok </strong><strong>az Erzs&eacute;bet-program p&aacute;ly&aacute;zatnyertesei sz&aacute;m&aacute;ra</strong></p>

<ul>
<li>napi h&aacute;romszori &eacute;tkez&eacute;s (b&uuml;f&eacute;reggeli, eb&eacute;d, b&uuml;f&eacute;vacsora)</li>
<li>1 &oacute;ra ingyenes ker&eacute;kp&aacute;r haszn&aacute;lat (a szabad kapacit&aacute;s f&uuml;ggv&eacute;ny&eacute;ben)</li>
<li>5 hekt&aacute;ros park szabadt&eacute;ri j&aacute;tsz&oacute;t&eacute;rrel</li>
<li>anim&aacute;torok &aacute;ltal szervezett napi szabadidős, sport &eacute;s wellness programok</li>
<li>Aqualand wellness szolg&aacute;ltat&aacute;sok&nbsp;(&uacute;sz&oacute;medence, &eacute;lm&eacute;nyf&uuml;rdő, gyermekmedence, finn szauna, gőzkabin, infrakabin, &eacute;lm&eacute;nyzuhany, sk&oacute;tzuhany, k&uuml;lt&eacute;ri r&ouml;nkszauna, k&uuml;lt&eacute;ri mer&uuml;lő d&eacute;zsa &eacute;s k&uuml;lt&eacute;ri &eacute;lm&eacute;nymedence)</li>
<li>asztalitenisz</li>
<li>Bambi kuck&oacute;</li>
<li>csomagmegőrz&eacute;s</li>
<li>&eacute;breszt&eacute;s</li>
<li>&eacute;rkez&eacute;skor &uuml;dv&ouml;zlőital</li>
<li>f&uuml;rdők&ouml;nt&ouml;s-haszn&aacute;lat felnőtteknek</li>
<li>kondicion&aacute;l&oacute; terem</li>
<li>l&aacute;btenisz p&aacute;lya</li>
<li>lift</li>
<li>mozg&aacute;skorl&aacute;tozott szoba</li>
<li>parkol&oacute;haszn&aacute;lat</li>
<li>p&oacute;kerasztal</li>
<li>szobasz&eacute;f</li>
<li>t&aacute;rsasj&aacute;t&eacute;k</li>
<li>t&aacute;rsasj&aacute;t&eacute;kok k&ouml;lcs&ouml;nz&eacute;se</li>
<li>tollaslabda</li>
<li>vadaspark</li>
<li>Wi-Fi</li>
</ul>

<p><strong>T&eacute;r&iacute;t&eacute;s ellen&eacute;ben ig&eacute;nybe vehető szolg&aacute;ltat&aacute;sok</strong></p>

<ul>
<li>bili&aacute;rd</li>
<li>csocs&oacute;</li>
<li>darts</li>
<li>halpedikűr</li>
<li>&iacute;j&aacute;szat</li>
<li>kozmetika</li>
<li>lőt&eacute;r</li>
<li>massz&aacute;zs</li>
<li>minib&aacute;r</li>
<li>programszervez&eacute;s</li>
<li>Salvus s&oacute;kabin</li>
<li>szobaszerviz (az &eacute;tterem nyitva tart&aacute;sa szerint)</li>
<li>szol&aacute;rium</li>
<li>telefon</li>
<li>vir&aacute;grendel&eacute;s</li>
<li>Xbox</li>
</ul>

<p>&nbsp;<strong>L&aacute;tnival&oacute;k a k&ouml;rny&eacute;ken</strong></p>

<ul>
<li>Cs&ouml;rgő-patak v&ouml;lgye,&nbsp;V&aacute;ndor-forr&aacute;s</li>
<li>K&eacute;kestető</li>
<li>M&aacute;traf&uuml;red</li>
<li>M&aacute;traszentimre-Galyatető: Galyatetői R&oacute;mai Katolikus templom,&nbsp;Galya-kil&aacute;t&oacute;</li>
<li>M&aacute;traszentistv&aacute;n fel&eacute; vezető bek&ouml;tő&uacute;t mellett: H&aacute;rom falu temploma</li>
<li>M&aacute;traszentistv&aacute;n: s&iacute;park</li>
<li>Par&aacute;d</li>
<li>Par&aacute;df&uuml;rdő: Ilona-v&ouml;lgyi v&iacute;zes&eacute;s</li>
<li>Par&aacute;dsasv&aacute;r: Par&aacute;d Krist&aacute;ly M&uacute;zeum</li>
<li>P&eacute;ter-hegyese kil&aacute;t&oacute;</li>
<li>Piszk&eacute;stető: csillagvizsg&aacute;l&oacute;</li>
<li>Siroki v&aacute;r</li>
</ul>

<p><strong>A sz&aacute;lloda elfogad</strong></p>

<ul>
<li>bankk&aacute;rty&aacute;t (VISA, MasterCard, American Express)</li>
<li>Erzs&eacute;bet-utalv&aacute;ny Plusz k&aacute;rty&aacute;t (Aj&aacute;nd&eacute;k, &Eacute;tkez&eacute;si utalv&aacute;nyzseb)</li>
<li>SZ&Eacute;P k&aacute;rty&aacute;t (OTP, K&amp;H, MKB)</li>
</ul>

<p><strong>Megk&ouml;zel&iacute;t&eacute;s</strong></p>

<ul>
<li>aut&oacute;busz</li>
<li>g&eacute;pkocsi</li>
</ul>
',
                'price' => 1000,
                'discountprice' => NULL,
                'visitors' => NULL,
                'menu1' => '123',
                'menu2' => 'qwe',
                'menu3' => 'asd',
                'menu4' => 'yxc',
                'startdate' => '2016-10-27',
                'enddate' => '2016-10-29',
                'expireson' => '2016-11-19',
                'created_by' => NULL,
                'created_at' => '2016-10-25 20:14:28',
                'updated_by' => NULL,
                'updated_at' => '2016-11-06 21:17:33',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 28,
                'isvalid' => 0,
                'title' => 'X',
                'website' => NULL,
                'companies_id' => 10,
                'categories_id' => 20,
                'cities_id' => 1212,
                'calendars_id' => NULL,
                'responsible' => 'Papp Béla',
                'address' => 'Kossuth u. 36.',
                'phone' => '+36302650543',
                'email' => 'bela.papp@outlook.hu',
                'description' => '<p>Xyz</p>
',
                'price' => 1,
                'discountprice' => NULL,
                'visitors' => 1,
                'menu1' => '',
                'menu2' => '',
                'menu3' => '',
                'menu4' => '',
                'startdate' => '2016-11-12',
                'enddate' => '2016-12-12',
                'expireson' => '2016-11-19',
                'created_by' => NULL,
                'created_at' => '2016-11-12 10:39:46',
                'updated_by' => NULL,
                'updated_at' => '2016-11-12 10:39:46',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 29,
                'isvalid' => 0,
                'title' => 'X',
                'website' => NULL,
                'companies_id' => 10,
                'categories_id' => 20,
                'cities_id' => 1212,
                'calendars_id' => NULL,
                'responsible' => 'Papp Béla',
                'address' => 'Kossuth u. 36.',
                'phone' => '+36302650543',
                'email' => 'bela.papp@outlook.hu',
                'description' => '<p>Xyz</p>
',
                'price' => 1,
                'discountprice' => NULL,
                'visitors' => 1,
                'menu1' => '',
                'menu2' => '',
                'menu3' => '',
                'menu4' => '',
                'startdate' => '2016-11-12',
                'enddate' => '2016-12-12',
                'expireson' => '2016-11-19',
                'created_by' => NULL,
                'created_at' => '2016-11-12 10:39:47',
                'updated_by' => NULL,
                'updated_at' => '2016-11-12 10:39:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 30,
                'isvalid' => 0,
                'title' => 'Nyerges Hotel',
                'website' => NULL,
                'companies_id' => 7,
                'categories_id' => 45,
                'cities_id' => 1763,
                'calendars_id' => NULL,
                'responsible' => 'Gurzó György',
                'address' => 'Hegyesí Tanya 3.',
                'phone' => ' +36 29 410 758',
                'email' => 'gurzo.gyorgy@gmail.com',
                'description' => '<div style="text-align: justify;">
<p>Az 1983-ban alap&iacute;tott Nyerges Hotel Term&aacute;l***Superior K&ouml;z&eacute;p-Eur&oacute;pa legnagyobb n&aacute;dfedeles sz&aacute;llod&aacute;ja, Pest megy&eacute;ben a 4-es sz&aacute;m&uacute; fő&uacute;t mellet helyezkedik el, mind&ouml;sszesen f&eacute;l&oacute;r&aacute;nyi aut&oacute;&uacute;tra Budapest centrum&aacute;t&oacute;l.</p>

<p>A Budapesti Liszt Ferenc Nemzetk&ouml;zi rep&uuml;lőt&eacute;r k&ouml;zels&eacute;ge miatt (15 km) sz&aacute;llod&aacute;nk optim&aacute;lis v&aacute;laszt&aacute;s az &aacute;tutaz&oacute; vend&eacute;gek elsz&aacute;ll&aacute;sol&aacute;s&aacute;ra. Vend&eacute;geink r&eacute;sz&eacute;re d&iacute;jmentes, őrz&ouml;tt parkol&oacute;helyet, rept&eacute;ri &bdquo;Shuttle&rdquo; szolg&aacute;ltat&aacute;st kedvezm&eacute;nyesen biztos&iacute;tunk.&nbsp;A Nyerges Hotel Term&aacute;l*** Superior 24 standard szob&aacute;val, 3 junior lakoszt&aacute;llyal, 3 csal&aacute;di lakoszt&aacute;llyal &eacute;s egy k&uuml;l&ouml;nleges n&aacute;szutas lakoszt&aacute;llyal rendelkezik, &iacute;gy &ouml;sszesen 78 k&eacute;nyelmes f&eacute;rőhelyet k&iacute;n&aacute;l.&nbsp;</p>

<p>Kellemes vid&eacute;ki k&ouml;rnyezetben elhelyezkedő, hangulatos ALBION &eacute;tterm&uuml;nkben k&oacute;stolhatnak helyi specialit&aacute;sokat, b&uacute;bos kemenc&eacute;ben s&uuml;lt finoms&aacute;gokat, vagy nemzetk&ouml;zi &eacute;teleket. Fedett, musk&aacute;tlis teraszunkkal egy&uuml;tt 200 fő &eacute;tterm&uuml;nk befogad&oacute;k&eacute;pess&eacute;ge.</p>

<p>Konferenciatermeink 180 fő, 25 fő &eacute;s 8 fő befogad&aacute;s&aacute;ra alkalmasak. A 180 fős, Szent Istv&aacute;n terem mindk&eacute;t oldal&aacute;n terasz tal&aacute;lhat&oacute;, melyekkel 300 főre bőv&iacute;thető a kapacit&aacute;sa. Sz&aacute;llod&aacute;nkhoz hatalmas park, valamint egy n&ouml;v&eacute;nyzetben &eacute;s &aacute;llatvil&aacute;gban gazdag t&oacute; szigettel tartozik, mely kitűnő lehetős&eacute;get teremt esk&uuml;vők, szabadt&eacute;ri rendezv&eacute;nyek, &aacute;ll&oacute;fogad&aacute;sok, medencepartik szervez&eacute;s&eacute;re &eacute;s lebonyol&iacute;t&aacute;s&aacute;ra.</p>

<p>A k&ouml;rny&eacute;ken egyed&uuml;l&aacute;ll&oacute; szolg&aacute;ltat&aacute;sunk a 700 m&eacute;ter m&eacute;lyről, saj&aacute;t f&uacute;rt k&uacute;tb&oacute;l felt&ouml;rő, 40 fokos term&aacute;lv&iacute;z, melyet egy 5x10 m&eacute;teres fedett medenc&eacute;ben &eacute;lvezhetnek vend&eacute;geink. Viz&uuml;nk egyedi &ouml;sszet&eacute;tele alapj&aacute;n mozg&aacute;sszervi &eacute;s reum&aacute;s panaszok enyh&iacute;t&eacute;s&eacute;re kiv&aacute;l&oacute;an alkalmas. Term&aacute;lr&eacute;szleg&uuml;nk&ouml;n tal&aacute;lhat&oacute; jakuzzi, tangentor, finnszauna &eacute;s ny&aacute;ron &uuml;zemelő 10x20 m&eacute;teres hideg vizű &uacute;sz&oacute;medence hatalmas napoz&oacute;terasszal &eacute;s 1 db gyermekmedence, mindez csod&aacute;latos parkkal k&ouml;r&uuml;lv&eacute;ve.</p>

<p>Sportolni v&aacute;gy&oacute; vend&eacute;geink sz&aacute;m&aacute;ra sz&aacute;llod&aacute;nk f&uuml;ves focip&aacute;ly&aacute;t, kivil&aacute;g&iacute;tott teniszp&aacute;ly&aacute;t,<strong> </strong>biciklik&ouml;lcs&ouml;nzőt &eacute;s lovagl&aacute;si lehetős&eacute;get k&iacute;n&aacute;l, valamint a k&ouml;rny&eacute;k kiv&aacute;l&oacute;an alkalmas nordic walkingra.</p>
</div>
',
                'price' => 8000,
                'discountprice' => 8000,
                'visitors' => 150,
                'menu1' => 'Esküvői ajánlatunk

Általános esküvői ajánlatunk:

Kérje aktuális ajánlatunkat kollégáinktól emailen az info@nyergeshotel.hu címen, vagy telefonon a +36 (29) 410-758 telefonszámon.

Tekintse meg lakodalmas menüajánlatainkat, amennyiben nem sikerült ajánlatainkból az Önnek legmegfelelőbbet kiválasztani, úgy kérésre bármilyen ételt elkészítünk, menüinket az igényekre szabjuk.',
                'menu2' => 'I. Hagyományos lakodalmas menü: felszolgálva 

Újházy tyúkhúsleves (tálakban)
Bőség tál (cordon blue, pulykamell csíkok Orly módra, ropogós csirkecomb, rántott gomba, rántott karfiol, párolt rizs, házi hasábburgonya, grillezett zöldségek)
Vegyes savanyúság, tartármártás



Éjfélkor:

Kemencében sült apró töltött káposzta és maradék sültek vagy hidegtál és maradék sültek, házi kovászolt fehér kenyér, tejföl (büféasztalon)

',
                'menu3' => 'II. Hagyományos lakodalmas menü: felszolgálva

Újházy tyúkhúsleves (tálban)
Sertéspörkölt vajas galuskával
Bőség tál (cordon blue, pulykamell csíkok Orly módra, ropogós csirkecomb, flecken, rántott gomba, rántott karfiol, párolt rizs, házi hasábburgonya, grillezett zöldségek)
Vegyes savanyúság, tartármártás



Éjfélkor:

Kemencében sült apró töltött káposzta és maradék sültek vagy hidegtál és maradék sültek, házi kovászolt fehér kenyér, tejföl (büféasztalon)

',
                'menu4' => '',
                'startdate' => '2017-01-04',
                'enddate' => '2017-12-20',
                'expireson' => '2017-10-04',
                'created_by' => NULL,
                'created_at' => '2016-11-12 13:46:35',
                'updated_by' => NULL,
                'updated_at' => '2016-11-12 13:46:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
