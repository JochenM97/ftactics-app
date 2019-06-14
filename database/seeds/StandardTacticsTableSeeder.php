<?php

use Illuminate\Database\Seeder;

class StandardTacticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('standard_tactics')->insert([
            'name' => '5 Side Attacking',
            'data' => '%7B%220%22%3A436.00000000000006%2C%221%22%3A654%2C%222%22%3A4.36%2C%223%22%3A4.36%2C%224%22%3A%5B%5B%5B44.77064220183486%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B44.31192660550459%2C0.9174311926605504%2C%22blue-player%22%2C%221%22%5D%2C%5B53.532110091743114%2C114.95412844036696%2C%22red-player%22%2C%222%22%5D%2C%5B28.256880733944953%2C67.24770642201834%2C%22red-player%22%2C%223%22%5D%2C%5B47.522935779816514%2C32.61467889908256%2C%22red-player%22%2C%224%22%5D%2C%5B87.93577981651374%2C68.85321100917432%2C%22red-player%22%2C%225%22%5D%2C%5B57.15596330275229%2C88.348623853211%2C%22blue-player%22%2C%222%22%5D%2C%5B46.68807339449542%2C113.20183486238527%2C%22ball%22%5D%2C%5B36.28440366972478%2C58.76146788990825%2C%22blue-player%22%2C%223%22%5D%2C%5B53.25688073394494%2C22.064220183486245%2C%22blue-player%22%2C%224%22%5D%2C%5B87.01834862385321%2C58.532110091743114%2C%22blue-player%22%2C%225%22%5D%5D%2C%5B%5B46.1467889908257%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B44.54128440366972%2C0.9174311926605504%2C%22blue-player%22%2C%221%22%5D%2C%5B43.165137614678905%2C109.6788990825688%2C%22red-player%22%2C%222%22%5D%2C%5B12.972477064220183%2C81.77981651376142%2C%22ball%22%5D%2C%5B48.89908256880733%2C95.91743119266054%2C%22blue-player%22%2C%222%22%5D%2C%5B8.990825688073398%2C72.06422018348624%2C%22red-player%22%2C%223%22%5D%2C%5B31.23853211009176%2C59.6788990825688%2C%22blue-player%22%2C%223%22%5D%2C%5B45.91743119266056%2C30.321100917431192%2C%22red-player%22%2C%224%22%5D%2C%5B50.73394495412844%2C20.917431192660555%2C%22blue-player%22%2C%224%22%5D%5D%2C%5B%5B44.54128440366972%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B43.623853211009184%2C1.3761467889908257%2C%22blue-player%22%2C%221%22%5D%2C%5B17.477064220183486%2C102.11009174311927%2C%22red-player%22%2C%222%22%5D%2C%5B18.93577981651376%2C93.93577981651376%2C%22ball%22%5D%2C%5B36.51376146788991%2C96.37614678899081%2C%22blue-player%22%2C%222%22%5D%2C%5B39.03669724770641%2C67.01834862385319%2C%22red-player%22%2C%223%22%5D%2C%5B30.55045871559633%2C56.00917431192661%2C%22blue-player%22%2C%223%22%5D%2C%5B42.706422018348626%2C18.165137614678912%2C%22blue-player%22%2C%224%22%5D%2C%5B40.642201834862384%2C28.256880733944964%2C%22red-player%22%2C%224%22%5D%5D%2C%5B%5B46.605504587155956%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B36.972477064220186%2C1.4220183486238636%2C%22blue-player%22%2C%221%22%5D%2C%5B11.055045871559637%2C82.84403669724772%2C%22red-player%22%2C%222%22%5D%2C%5B29.633027522935777%2C80.77981651376147%2C%22blue-player%22%2C%222%22%5D%2C%5B34.449541284403665%2C52.11009174311928%2C%22blue-player%22%2C%223%22%5D%2C%5B49.816513761467874%2C51.42201834862384%2C%22red-player%22%2C%223%22%5D%2C%5B10.366972477064223%2C25.275229357798175%2C%22red-player%22%2C%224%22%5D%2C%5B15.03669724770642%2C33.61467889908257%2C%22ball%22%5D%2C%5B27.798165137614674%2C19.541284403669735%2C%22blue-player%22%2C%224%22%5D%5D%2C%5B%5B44.31192660550459%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B41.3302752293578%2C0.9633027522935883%2C%22blue-player%22%2C%221%22%5D%2C%5B11.51376146788991%2C70.68807339449543%2C%22red-player%22%2C%222%22%5D%2C%5B31.009174311926607%2C70.91743119266056%2C%22blue-player%22%2C%222%22%5D%2C%5B39.03669724770643%2C41.559633027522935%2C%22blue-player%22%2C%223%22%5D%2C%5B59.67889908256881%2C32.38532110091743%2C%22red-player%22%2C%223%22%5D%2C%5B55.63302752293578%2C25.357798165137613%2C%22ball%22%5D%2C%5B17.93577981651376%2C16.330275229357802%2C%22red-player%22%2C%224%22%5D%2C%5B29.862385321100927%2C21.605504587155973%2C%22blue-player%22%2C%224%22%5D%5D%2C%5B%5B44.31192660550459%2C1.192660550458726%2C%22blue-player%22%2C%221%22%5D%2C%5B44.77064220183485%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B26.651376146788994%2C64.03669724770643%2C%22blue-player%22%2C%222%22%5D%2C%5B10.366972477064223%2C61.51376146788991%2C%22red-player%22%2C%222%22%5D%2C%5B45.22935779816513%2C23.440366972477072%2C%22blue-player%22%2C%223%22%5D%2C%5B85.59633027522935%2C4.63302752293579%2C%22red-player%22%2C%223%22%5D%2C%5B58.61467889908256%2Cnull%2C%22ball%22%5D%2C%5B27.110091743119266%2C5.779816513761478%2C%22red-player%22%2C%224%22%5D%2C%5B29.862385321100916%2C19.08256880733946%2C%22blue-player%22%2C%224%22%5D%5D%5D%7D'
        ]);

		DB::table('standard_tactics')->insert([
            'name' => 'Outplayed',
            'data' => '%7B%220%22%3A436.00000000000006%2C%221%22%3A654%2C%222%22%3A4.36%2C%223%22%3A4.36%2C%224%22%3A%5B%5B%5B45.45871559633028%2C139.95412844036701%2C%22red-player%22%2C%221%22%5D%2C%5B44.77064220183486%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B78.02752293577983%2C88.34862385321098%2C%22red-player%22%2C%222%22%5D%2C%5B77.33944954128441%2C78.25688073394494%2C%22blue-player%22%2C%222%22%5D%2C%5B38.11926605504588%2C73.44036697247707%2C%22red-player%22%2C%223%22%5D%2C%5B54.17431192660549%2C53.4862385321101%2C%22red-player%22%2C%224%22%5D%2C%5B40.87155963302751%2C62.43119266055047%2C%22blue-player%22%2C%223%22%5D%2C%5B12.660550458715598%2C46.834862385321124%2C%22red-player%22%2C%225%22%5D%2C%5B59.44954128440368%2C42.24770642201835%2C%22blue-player%22%2C%224%22%5D%2C%5B17.935779816513765%2C36.05504587155965%2C%22blue-player%22%2C%225%22%5D%2C%5B52.42201834862385%2C132.697247706422%2C%22ball%22%5D%5D%2C%5B%5B46.60550458715596%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B45%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B75.04587155963301%2C92.70642201834863%2C%22red-player%22%2C%222%22%5D%2C%5B71.91743119266054%2C102.65137614678899%2C%22ball%22%5D%2C%5B76.88073394495413%2C82.38532110091742%2C%22blue-player%22%2C%222%22%5D%2C%5B38.11926605504587%2C80.55045871559633%2C%22red-player%22%2C%223%22%5D%2C%5B40.18348623853212%2C69.99999999999999%2C%22blue-player%22%2C%223%22%5D%2C%5B53.25688073394494%2C52.798165137614696%2C%22red-player%22%2C%224%22%5D%2C%5B58.302752293577974%2C42.24770642201835%2C%22blue-player%22%2C%224%22%5D%2C%5B10.366972477064223%2C52.568807339449535%2C%22red-player%22%2C%225%22%5D%2C%5B16.3302752293578%2C41.78899082568808%2C%22blue-player%22%2C%225%22%5D%5D%2C%5B%5B46.60550458715596%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B45.22935779816513%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B75.96330275229359%2C87.88990825688074%2C%22red-player%22%2C%222%22%5D%2C%5B80.55045871559633%2C76.42201834862385%2C%22blue-player%22%2C%222%22%5D%2C%5B38.577981651376106%2C90.64220183486238%2C%22red-player%22%2C%223%22%5D%2C%5B31.091743119266035%2C94.85321100917432%2C%22ball%22%5D%2C%5B39.954128440366965%2C74.81651376146787%2C%22blue-player%22%2C%223%22%5D%2C%5B54.1743119266055%2C53.25688073394496%2C%22red-player%22%2C%224%22%5D%2C%5B59.67889908256881%2C42.70642201834862%2C%22blue-player%22%2C%224%22%5D%2C%5B15.642201834862387%2C43.62385321100918%2C%22blue-player%22%2C%225%22%5D%2C%5B9.220183486238536%2C54.40366972477064%2C%22red-player%22%2C%225%22%5D%5D%2C%5B%5B45.45871559633027%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B45.22935779816514%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B75.73394495412845%2C87.66055045871562%2C%22red-player%22%2C%222%22%5D%2C%5B80.77981651376147%2C77.11009174311927%2C%22blue-player%22%2C%222%22%5D%2C%5B35.825688073394495%2C99.12844036697247%2C%22red-player%22%2C%223%22%5D%2C%5B39.49541284403671%2C84.22018348623854%2C%22blue-player%22%2C%223%22%5D%2C%5B60.36697247706422%2C42.01834862385322%2C%22blue-player%22%2C%224%22%5D%2C%5B55.321100917431195%2C52.79816513761469%2C%22red-player%22%2C%224%22%5D%2C%5B9.67889908256881%2C64.03669724770643%2C%22red-player%22%2C%225%22%5D%2C%5B11.972477064220186%2C53.71559633027523%2C%22blue-player%22%2C%225%22%5D%2C%5B12.513761467889909%2C72.60550458715596%2C%22ball%22%5D%5D%2C%5B%5B45.91743119266055%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B44.54128440366972%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B80.55045871559633%2C77.11009174311927%2C%22blue-player%22%2C%222%22%5D%2C%5B74.81651376146789%2C87.88990825688074%2C%22red-player%22%2C%222%22%5D%2C%5B12.201834862385322%2C103.0275229357798%2C%22red-player%22%2C%223%22%5D%2C%5B32.84403669724771%2C90.87155963302753%2C%22blue-player%22%2C%223%22%5D%2C%5B56.69724770642203%2C53.027522935779814%2C%22red-player%22%2C%224%22%5D%2C%5B62.88990825688074%2C43.165137614678905%2C%22blue-player%22%2C%224%22%5D%2C%5B12.431192660550458%2C53.02752293577982%2C%22blue-player%22%2C%225%22%5D%2C%5B10.596330275229361%2C63.80733944954129%2C%22red-player%22%2C%225%22%5D%2C%5B14.34862385321101%2C94.62385321100916%2C%22ball%22%5D%5D%2C%5B%5B44.54128440366973%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B73.44036697247707%2C87.43119266055047%2C%22red-player%22%2C%222%22%5D%2C%5B47.981651376146786%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B79.63302752293579%2C77.33944954128441%2C%22blue-player%22%2C%222%22%5D%2C%5B15.412844036697251%2C93.39449541284404%2C%22red-player%22%2C%223%22%5D%2C%5B34.22018348623854%2C80.55045871559633%2C%22blue-player%22%2C%223%22%5D%2C%5B61.74311926605506%2C23.6697247706422%2C%22red-player%22%2C%224%22%5D%2C%5B70.22935779816513%2C12.660550458715607%2C%22blue-player%22%2C%224%22%5D%2C%5B56.091743119266035%2C32.0091743119266%2C%22ball%22%5D%2C%5B20.22935779816514%2C61.9724770642202%2C%22red-player%22%2C%225%22%5D%2C%5B13.577981651376149%2C51.422018348623844%2C%22blue-player%22%2C%225%22%5D%5D%2C%5B%5B45.45871559633027%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B37.88990825688074%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B72.29357798165137%2C86.97247706422019%2C%22red-player%22%2C%222%22%5D%2C%5B78.02752293577983%2C76.88073394495414%2C%22blue-player%22%2C%222%22%5D%2C%5B15.183486238532106%2C95.91743119266054%2C%22red-player%22%2C%223%22%5D%2C%5B34.44954128440367%2C78.94495412844037%2C%22blue-player%22%2C%223%22%5D%2C%5B69.31192660550458%2C12.889908256880744%2C%22blue-player%22%2C%224%22%5D%2C%5B63.80733944954129%2C22.75229357798166%2C%22red-player%22%2C%224%22%5D%2C%5B46.68807339449541%2C37.74311926605505%2C%22ball%22%5D%2C%5B41.3302752293578%2C45.91743119266055%2C%22red-player%22%2C%225%22%5D%2C%5B25.96330275229358%2C45.00000000000001%2C%22blue-player%22%2C%225%22%5D%5D%2C%5B%5B45.45871559633028%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B44.54128440366973%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B56.55045871559633%2Cnull%2C%22ball%22%5D%2C%5B70.6880733944954%2C84.90825688073393%2C%22red-player%22%2C%222%22%5D%2C%5B75.73394495412845%2C75.73394495412845%2C%22blue-player%22%2C%222%22%5D%2C%5B15.871559633027525%2C96.1467889908257%2C%22red-player%22%2C%223%22%5D%2C%5B35.137614678899084%2C72.52293577981652%2C%22blue-player%22%2C%223%22%5D%2C%5B65.1834862385321%2C10.825688073394508%2C%22blue-player%22%2C%224%22%5D%2C%5B63.577981651376156%2C21.834862385321106%2C%22red-player%22%2C%224%22%5D%2C%5B29.862385321100906%2C39.036697247706435%2C%22blue-player%22%2C%225%22%5D%2C%5B35.36697247706422%2C26.651376146788998%2C%22red-player%22%2C%225%22%5D%5D%5D%7D'
        ]);

		DB::table('standard_tactics')->insert([
            'name' => '2 Pass Killer',
            'data' => '%7B%220%22%3A436.00000000000006%2C%221%22%3A654%2C%222%22%3A4.36%2C%223%22%3A4.36%2C%224%22%3A%5B%5B%5B45%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B51.04587155963303%2C131.77981651376146%2C%22ball%22%5D%2C%5B77.11009174311926%2C96.8348623853211%2C%22red-player%22%2C%222%22%5D%2C%5B45%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B78.94495412844036%2C86.28440366972478%2C%22blue-player%22%2C%222%22%5D%2C%5B44.770642201834846%2C78.02752293577981%2C%22red-player%22%2C%223%22%5D%2C%5B41.3302752293578%2C70.45871559633028%2C%22blue-player%22%2C%223%22%5D%2C%5B10.137614678899086%2C81.697247706422%2C%22red-player%22%2C%224%22%5D%2C%5B13.348623853211013%2C70.45871559633028%2C%22blue-player%22%2C%224%22%5D%2C%5B45.91743119266056%2C47.75229357798166%2C%22red-player%22%2C%225%22%5D%2C%5B43.1651376146789%2C39.26605504587157%2C%22blue-player%22%2C%225%22%5D%5D%2C%5B%5B44.08256880733944%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B74.81651376146789%2C100.04587155963306%2C%22red-player%22%2C%222%22%5D%2C%5B31.009174311926607%2C98.89908256880734%2C%22red-player%22%2C%223%22%5D%2C%5B10.366972477064223%2C80.09174311926604%2C%22red-player%22%2C%224%22%5D%2C%5B49.357798165137616%2C47.064220183486235%2C%22red-player%22%2C%225%22%5D%2C%5B45.688073394495405%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B78.71559633027522%2C89.03669724770643%2C%22blue-player%22%2C%222%22%5D%2C%5B30.321100917431195%2C88.11926605504586%2C%22blue-player%22%2C%223%22%5D%2C%5B12.660550458715598%2C69.08256880733946%2C%22blue-player%22%2C%224%22%5D%2C%5B45.45871559633027%2C36.743119266055054%2C%22blue-player%22%2C%225%22%5D%2C%5B49.6697247706422%2C131.77981651376143%2C%22ball%22%5D%5D%2C%5B%5B47.752293577981646%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B45.917431192660544%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B72.06422018348623%2C96.37614678899082%2C%22red-player%22%2C%222%22%5D%2C%5B76.42201834862385%2C85.82568807339447%2C%22blue-player%22%2C%222%22%5D%2C%5B28.944954128440365%2C101.651376146789%2C%22red-player%22%2C%223%22%5D%2C%5B27.110091743119266%2C90.41284403669725%2C%22blue-player%22%2C%223%22%5D%2C%5B10.366972477064223%2C77.79816513761469%2C%22red-player%22%2C%224%22%5D%2C%5B14.036697247706424%2C66.78899082568807%2C%22blue-player%22%2C%224%22%5D%2C%5B48.669724770642205%2C49.587155963302756%2C%22red-player%22%2C%225%22%5D%2C%5B44.54128440366973%2C39.49541284403671%2C%22blue-player%22%2C%225%22%5D%2C%5B48.752293577981646%2C59.073394495412835%2C%22ball%22%5D%5D%2C%5B%5B42.706422018348626%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B28.71559633027522%2C52.110091743119256%2C%22red-player%22%2C%222%22%5D%2C%5B44.77064220183486%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B27.339449541284406%2C100.96330275229356%2C%22red-player%22%2C%223%22%5D%2C%5B36.743119266055054%2C63.80733944954126%2C%22blue-player%22%2C%222%22%5D%2C%5B24.357798165137616%2C89.72477064220182%2C%22blue-player%22%2C%223%22%5D%2C%5B51.192660550458726%2C63.577981651376156%2C%22blue-player%22%2C%224%22%5D%2C%5B62.889908256880744%2C54.174311926605505%2C%22red-player%22%2C%224%22%5D%2C%5B47.29357798165137%2C50.04587155963303%2C%22red-player%22%2C%225%22%5D%2C%5B63.889908256880744%2C45.99999999999999%2C%22ball%22%5D%2C%5B44.54128440366973%2C40.18348623853212%2C%22blue-player%22%2C%225%22%5D%5D%2C%5B%5B45.688073394495405%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B43.39449541284404%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5B27.56880733944955%2C50.27522935779816%2C%22red-player%22%2C%222%22%5D%2C%5B34.67889908256882%2C60.59633027522935%2C%22blue-player%22%2C%222%22%5D%2C%5B25.963302752293576%2C99.35779816513762%2C%22red-player%22%2C%223%22%5D%2C%5B22.293577981651385%2C88.57798165137612%2C%22blue-player%22%2C%223%22%5D%2C%5B71.37614678899084%2C35.13761467889908%2C%22red-player%22%2C%224%22%5D%2C%5B56.55045871559633%2Cnull%2C%22ball%22%5D%2C%5B44.54128440366973%2C50.045871559633035%2C%22red-player%22%2C%225%22%5D%2C%5B57.84403669724771%2C55.55045871559633%2C%22blue-player%22%2C%224%22%5D%2C%5B40.87155963302752%2C39.72477064220183%2C%22blue-player%22%2C%225%22%5D%5D%5D%7D'
        ]);

		DB::table('standard_tactics')->insert([
            'name' => 'Sneaky Corner',
            'data' => '%7B%220%22%3A436.00000000000006%2C%221%22%3A654%2C%222%22%3A4.36%2C%223%22%3A4.36%2C%224%22%3A%5B%5B%5B44.77064220183486%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5B35.82568807339449%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5Bnull%2Cnull%2C%22red-player%22%2C%222%22%5D%2C%5B1.7339449541284406%2C2.880733944954129%2C%22ball%22%5D%2C%5B17.706422018348626%2C1.192660550458726%2C%22blue-player%22%2C%222%22%5D%2C%5B37.88990825688074%2C13.348623853211016%2C%22blue-player%22%2C%223%22%5D%2C%5B36.055045871559635%2C35.366972477064216%2C%22blue-player%22%2C%224%22%5D%2C%5B38.57798165137615%2C23.66972477064221%2C%22red-player%22%2C%223%22%5D%2C%5B17.935779816513765%2C17.93577981651377%2C%22blue-player%22%2C%225%22%5D%2C%5B38.11926605504588%2C59.67889908256882%2C%22red-player%22%2C%224%22%5D%2C%5B12.201834862385331%2C71.8348623853211%2C%22red-player%22%2C%225%22%5D%5D%2C%5B%5B35.825688073394495%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B17.70642201834863%2C0.9174311926605504%2C%22blue-player%22%2C%222%22%5D%2C%5B44.77064220183486%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5Bnull%2Cnull%2C%22red-player%22%2C%222%22%5D%2C%5B1.9633027522935784%2C2.880733944954128%2C%22ball%22%5D%2C%5B26.192660550458708%2C22.293577981651392%2C%22red-player%22%2C%223%22%5D%2C%5B31.926605504587158%2C10.596330275229366%2C%22blue-player%22%2C%223%22%5D%2C%5B51.19266055045871%2C28.944954128440376%2C%22blue-player%22%2C%224%22%5D%2C%5B58.53211009174312%2C20.000000000000007%2C%22red-player%22%2C%224%22%5D%2C%5B18.165137614678898%2C63.80733944954129%2C%22red-player%22%2C%225%22%5D%2C%5B17.706422018348626%2C13.11926605504588%2C%22blue-player%22%2C%225%22%5D%5D%2C%5B%5B37.201834862385326%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B19.541284403669728%2C1.192660550458726%2C%22blue-player%22%2C%222%22%5D%2C%5B31.92660550458715%2C10.825688073394504%2C%22blue-player%22%2C%223%22%5D%2C%5B58.99082568807341%2C22.293577981651385%2C%22blue-player%22%2C%224%22%5D%2C%5B44.77064220183485%2C139.99999999999994%2C%22red-player%22%2C%221%22%5D%2C%5Bnull%2Cnull%2C%22red-player%22%2C%222%22%5D%2C%5B17.706422018348626%2C12.431192660550469%2C%22blue-player%22%2C%225%22%5D%2C%5B26.651376146788987%2C21.605504587155973%2C%22red-player%22%2C%223%22%5D%2C%5B64.03669724770643%2C12.889908256880744%2C%22red-player%22%2C%224%22%5D%2C%5B25.73394495412844%2C49.35779816513762%2C%22red-player%22%2C%225%22%5D%2C%5B31.550458715596328%2C41.412844036697244%2C%22ball%22%5D%5D%2C%5B%5B44.77064220183487%2C139.99999999999997%2C%22red-player%22%2C%221%22%5D%2C%5Bnull%2Cnull%2C%22red-player%22%2C%222%22%5D%2C%5B38.807339449541296%2Cnull%2C%22blue-player%22%2C%221%22%5D%2C%5B22.522935779816514%2C1.651376146789001%2C%22blue-player%22%2C%222%22%5D%2C%5B52.42201834862385%2Cnull%2C%22ball%22%5D%2C%5B24.12844036697248%2C24.128440366972487%2C%22red-player%22%2C%223%22%5D%2C%5B35.137614678899084%2C11.055045871559644%2C%22blue-player%22%2C%223%22%5D%2C%5B58.073394495412835%2C19.770642201834875%2C%22blue-player%22%2C%224%22%5D%2C%5B65.64220183486239%2C8.53211009174313%2C%22red-player%22%2C%224%22%5D%2C%5B24.357798165137613%2C12.431192660550469%2C%22blue-player%22%2C%225%22%5D%5D%5D%7D'
        ]);
    }
}