<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'cég neve kft',
                'title' => 'Szálloda neve',
                'email' => 'bela.papp@gmail.com',
                'tax_id' => '12345676123',
                'categories_id' => 19,
                'subscriptiontype' => 1,
                'payment' => 0,
                'cities_id' => 822,
                'address' => 'Kossuth u. 36.',
                'contact' => '',
                'phone' => '+36302560543',
                'website' => 'sziveslatas.hu',
                'licence' => '2017-01-04',
                'description' => '<h1><br />
QWE profil</h1>

<p>Ez az oldal a c&eacute;g műk&ouml;d&eacute;s&eacute;t mutatja be.</p>

<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/5aIb4mKgp44" width="640"></iframe></p>

<p>&nbsp;</p>
',
                'created_at' => '2016-09-30 19:49:28',
                'updated_at' => '2016-10-13 08:51:15',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Regutrade Kft.',
                'title' => 'Hotel Regu',
                'email' => 'regutradekft@gmail.com',
                'tax_id' => '25110931209',
                'categories_id' => 5,
                'subscriptiontype' => 1,
                'payment' => 0,
                'cities_id' => 1210,
                'address' => '4028 Apafi utca 42-44./A Fszt. 26.',
                'contact' => 'Gurzó György',
                'phone' => '+36706294499',
                'website' => 'www.regutradekft.hu',
                'licence' => '2017-10-04',
                'description' => '<p><strong><img alt="" src="/public/images/users/images/gyurci%20oviban.jpg" style="height:960px; width:720px" /><img alt="" src="/public/images/users/images/Bozsik%201.JPG" style="height:482px; width:720px" /><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/dru3nyZjmt0" width="640"></iframe><img alt="" src="/public/images/users/images/Gyurci%20els%C5%91%20meccse%202..jpg" style="height:480px; width:720px" /><img alt="" src="/public/images/users/images/Gyurci%20els%C5%91%20meccse%281%29.jpg" style="height:480px; width:720px" />Őszi Gyulai Wellness Kikapcsol&oacute;d&aacute;s 2 &eacute;jtől</strong></p>

<p>GYULA V&Aacute;ROS ELSŐ &Eacute;S EGYETLEN 4*SUPERIOR SZ&Aacute;LLOD&Aacute;JA!<br />
TELJES PANZI&Oacute; AKCI&Oacute;: Teljes panzi&oacute;t biztos&iacute;tunk f&eacute;lpanzi&oacute;s &aacute;ron!<br />
Aj&aacute;nd&eacute;k 2 fog&aacute;sos wellness eb&eacute;d!<br />
P&eacute;ntek &eacute;s szombat &eacute;jszak&aacute;k csak egy&uuml;tt foglalhat&oacute;ak.<br />
Szob&aacute;ink előzetes megrendel&eacute;s eset&eacute;n &eacute;s korl&aacute;tozott sz&aacute;mban &aacute;llnak rendelkez&eacute;sre.<br />
Az &aacute;r tartalmazza:<br />
sz&aacute;ll&aacute;s, b&uuml;f&eacute;reggeli, aj&aacute;nd&eacute;k 2 fog&aacute;sos wellness eb&eacute;d (1 f&eacute;le leves, 2 f&eacute;le fő&eacute;tel, sal&aacute;tab&aacute;r) &eacute;rkez&eacute;s napj&aacute;n &eacute;s a t&aacute;voz&aacute;s előtti napokon*, b&uuml;f&eacute;vacsora Farkas G&eacute;za szak&aacute;csmester&uuml;nk kitűnő &eacute;telk&iacute;n&aacute;lat&aacute;val, vezet&eacute;k n&eacute;lk&uuml;li internethaszn&aacute;lat, szobasz&eacute;f, a sz&aacute;lloda Wellness O&aacute;zis&aacute;nak haszn&aacute;lata (finn szauna, infrakabin, gőzkamra, s&oacute;kabin, mer&uuml;lő medence, &eacute;lm&eacute;nymedence, pezsgőf&uuml;rdő, gyermekmedence, pihenő&aacute;gyak haszn&aacute;lata), fitness terem haszn&aacute;lata, f&uuml;rdők&ouml;nt&ouml;s, &Aacute;fa.<br />
<br />
*2 fog&aacute;sos wellness eb&eacute;d: 12:00 - 15:00 k&ouml;z&ouml;tt az I. emeleti B&uuml;f&eacute; &eacute;tteremben. Az eb&eacute;d tartalmaz: 1 f&eacute;le levest, 2 f&eacute;le fő&eacute;telt, sal&aacute;tab&aacute;r.<br />
<br />
Felh&iacute;vjuk kedves Vend&eacute;geink figyelm&eacute;t, hogy a Teljes panzi&oacute;ban szereplő 2 fog&aacute;sos wellness eb&eacute;det &eacute;rkez&eacute;s napj&aacute;n &eacute;s a t&aacute;voz&aacute;s napja előtti napokon biztos&iacute;tunk 12:00 - 15:00 k&ouml;z&ouml;tt. T&aacute;voz&aacute;s napj&aacute;n nem tudjuk biztos&iacute;tani Vend&eacute;geinknek a 2 fog&aacute;sos wellness eb&eacute;det.<br />
*A gyermek p&oacute;t&aacute;gy &aacute;ra a sz&aacute;ll&aacute;s &eacute;s a teljes panzi&oacute;s ell&aacute;t&aacute;s mellett tartalmazza a 250 m2-es j&aacute;tsz&oacute;h&aacute;z (szivacssarok labdatengerrel, labirintus &eacute;s ugr&aacute;l&oacute;v&aacute;r cs&uacute;szd&aacute;val &eacute;s labdatengerrel) haszn&aacute;lat&aacute;t 3 &eacute;v alatt sz&uuml;lői, 3 &eacute;v f&ouml;l&ouml;tt gyermekfel&uuml;gyelettel, tov&aacute;bb&aacute; JELMEZB&Aacute;LLAL egybek&ouml;t&ouml;tt MINIDISCOT a gyermekeknek minden h&eacute;ten h&eacute;tfőn, szerd&aacute;n &eacute;s szombaton 18.30 &oacute;r&aacute;t&oacute;l!</p>

<p>Azonnali visszaigazol&aacute;s</p>

<p>Gyulai V&aacute;rf&uuml;rdő &lsaquo; 50 m</p>

<p>Sz&aacute;z&eacute;ves Cukr&aacute;szda 800 m</p>

<p>Alm&aacute;sy-kast&eacute;ly 800 m</p>

<p>Gyulai V&aacute;rkil&aacute;t&oacute; 800 m</p>

<p>Wellness szolg&aacute;ltat&aacute;sok</p>

<p>Ingyenes WIFI</p>

<p>L&eacute;gkond&iacute;cion&aacute;l&aacute;s</p>

<p>Parkol&aacute;si lehetős&eacute;g (Fizetős)</p>

<p>SZ&Eacute;P k&aacute;rtya elfogad&oacute;hely: OTP, MKB, K&amp;H r&eacute;szletek &raquo;</p>

<p>Saj&aacute;t &eacute;tterem</p>

<p>Ha itt foglalsz tov&aacute;bbi 9 kedvezm&eacute;nyt kapsz! r&eacute;szletek &raquo;</p>

<p>Bababar&aacute;t sz&aacute;ll&aacute;shely (1 &eacute;ves korig ingyenes)</p>

<p>Szob&aacute;k sz&aacute;ma: 68 db</p>

<p>F&eacute;rőhelyek sz&aacute;ma: 150 fő</p>

<p>Besz&eacute;lt nyelvek: Magyar, Rom&aacute;n</p>
',
                'created_at' => '2016-10-04 08:46:32',
                'updated_at' => '2016-11-14 14:07:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'name' => 'ITSH2',
                'title' => 'IT',
                'email' => 'bela.papp@outlook.hu',
                'tax_id' => '',
                'categories_id' => 20,
                'subscriptiontype' => 0,
                'payment' => 0,
                'cities_id' => 1212,
                'address' => 'Kossuth u. 36.',
                'contact' => 'Papp Béla',
                'phone' => '+36302560543',
                'website' => 'sziveslatas.hu',
                'licence' => '2016-11-19',
                'description' => '<p><strong>Lorem </strong><em>ipsum </em>dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.&nbsp;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, <strong>luctus</strong> ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>

<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/bvPeb3VLVwk" width="640"></iframe></p>
',
                'created_at' => '2016-10-13 10:29:16',
                'updated_at' => '2016-10-25 17:22:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'EMC Hungária Kft.',
                'title' => 'DUBAI HOTEL',
                'email' => 'gigamarketkft@gmail.com',
                'tax_id' => '13657406209',
                'categories_id' => 5,
                'subscriptiontype' => 2,
                'payment' => 0,
                'cities_id' => 1210,
                'address' => 'Feketerét u. 24.',
                'contact' => 'Huszka Zsolt',
                'phone' => '+36709567899',
                'website' => 'www.emcgroup.com',
                'licence' => '2017-11-09',
                'description' => NULL,
                'created_at' => '2016-11-09 14:36:19',
                'updated_at' => '2016-11-09 14:36:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
