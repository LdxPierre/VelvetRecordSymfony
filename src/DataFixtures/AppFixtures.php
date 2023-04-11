<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use App\Entity\Disc;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $artist1 = new Artist();
        $artist1->setName('Nei Young');
        $manager->persist($artist1);

        $artist2 = new Artist();
        $artist2->setName('Yes');
        $manager->persist($artist2);

        $artist3 = new Artist();
        $artist3->setName('Rolling Stones');
        $manager->persist($artist3);

        $artist4 = new Artist();
        $artist4->setName('Queens of the Stone Age');
        $manager->persist($artist4);

        $artist5 = new Artist();
        $artist5->setName('Serge Gainsbourg');
        $manager->persist($artist5);

        $artist6 = new Artist();
        $artist6->setName('AC/DC');
        $manager->persist($artist6);

        $artist7 = new Artist();
        $artist7->setName('Marillion');
        $manager->persist($artist7);

        $artist8 = new Artist();
        $artist8->setName('Bob Dylan');
        $manager->persist($artist8);

        $artist9 = new Artist();
        $artist9->setName('Fleshtones');
        $manager->persist($artist9);

        $artist10 = new Artist();
        $artist10->setName('The Clash');
        $manager->persist($artist10);

        $disc1 = new Disc();
        $disc1->setTitle('Fugazi');
        $disc1->setYear('1984');
        $disc1->setPicture('Fugazi.jpeg');
        $disc1->setLabel('EMI');
        $disc1->setGenre('Prog');
        $disc1->setPrice(1499);
        $disc1->setArtist($artist7);
        $manager->persist($disc1);

        $disc2 = new Disc();
        $disc2->setTitle('Songs for the Deaf');
        $disc2->setYear('2002');
        $disc2->setPicture('Songs for the Deaf.jpeg');
        $disc2->setLabel('Interscope Records');
        $disc2->setGenre('Rock/Stoner');
        $disc2->setPrice(1299);
        $disc2->setArtist($artist4);
        $manager->persist($disc2);

        $disc3 = new Disc();
        $disc3->setTitle('Harvest Moon');
        $disc3->setYear('1992');
        $disc3->setPicture('Harvest Moon.jpeg');
        $disc3->setLabel('Reprise Records');
        $disc3->setGenre('Rock');
        $disc3->setPrice(420);
        $disc3->setArtist($artist1);
        $manager->persist($disc3);

        $disc4 = new Disc();
        $disc4->setTitle('Initials BB');
        $disc4->setYear('1968');
        $disc4->setPicture('Initials BB.jpeg');
        $disc4->setLabel('Philips');
        $disc4->setGenre('Chanson / Rock Pop');
        $disc4->setPrice(1299);
        $disc4->setArtist($artist5);
        $manager->persist($disc4);

        $disc5 = new Disc();
        $disc5->setTitle('After the Gold Rush');
        $disc5->setYear('1970');
        $disc5->setPicture('After the Gold Rush.jpeg');
        $disc5->setLabel('Reprise Records');
        $disc5->setGenre('Country Rock');
        $disc5->setPrice(2000);
        $disc5->setArtist($artist1);
        $manager->persist($disc5);

        $disc6 = new Disc();
        $disc6->setTitle('Broken Arrow');
        $disc6->setYear('1996');
        $disc6->setPicture('Broken Arrow.jpeg');
        $disc6->setLabel('Reprise Records');
        $disc6->setGenre('Country Rock, Classique Rock');
        $disc6->setPrice(1500);
        $disc6->setArtist($artist1);
        $manager->persist($disc6);

        $disc7 = new Disc();
        $disc7->setTitle('Highway To Hell');
        $disc7->setYear('1979');
        $disc7->setPicture('Highway To Hell.jpeg');
        $disc7->setLabel('Atlantic');
        $disc7->setGenre('Hard Rock');
        $disc7->setPrice(1500);
        $disc7->setArtist($artist6);
        $manager->persist($disc7);

        $disc8 = new Disc();
        $disc8->setTitle('Drama');
        $disc8->setYear('1980');
        $disc8->setPicture('Drama.jpeg');
        $disc8->setLabel('Atlantic');
        $disc8->setGenre('Prog');
        $disc8->setPrice('1500');
        $disc8->setArtist($artist2);
        $manager->persist($disc8);

        $disc9 = new Disc();
        $disc9->setTitle('Year of the Horse');
        $disc9->setYear('1997');
        $disc9->setPicture('Year of the Horse.jpeg');
        $disc9->setLabel('Reprise Records');
        $disc9->setGenre('Country Rock, Classique Rock');
        $disc9->setPrice(750);
        $disc9->setArtist($artist1);
        $manager->persist($disc9);

        $disc10 = new Disc();
        $disc10->setTitle('Ragged Glory');
        $disc10->setYear('1990');
        $disc10->setPicture('Ragged Glory.jpeg');
        $disc10->setLabel('Reprise Records');
        $disc10->setGenre('Country Rock, Grunge');
        $disc10->setPrice(1100);
        $disc10->setArtist($artist1);
        $manager->persist($disc10);

        $disc11 = new Disc();
        $disc11->setTitle('Rust Never Sleeps');
        $disc11->setYear('1979');
        $disc11->setPicture('Rust Never Sleeps.jpeg');
        $disc11->setLabel('Reprise Records');
        $disc11->setGenre('Classic Rock, Arena Rock');
        $disc11->setPrice(1500);
        $disc11->setArtist($artist1);
        $manager->persist($disc11);

        $disc12 = new Disc();
        $disc12->setTitle('Exile on main street');
        $disc12->setYear('1972');
        $disc12->setPicture('Exile on main street.jpeg');
        $disc12->setLabel('Rolling Stones Records');
        $disc12->setGenre('Blues Rock, Classique Rock');
        $disc12->setPrice(3300);
        $disc12->setArtist($artist1);
        $manager->persist($disc12);

        $disc13 = new Disc();
        $disc13->setTitle('London Calling');
        $disc13->setYear('1971');
        $disc13->setPicture('London Calling.jpeg');
        $disc13->setLabel('CBS');
        $disc13->setGenre('Punk, New Wave');
        $disc13->setPrice(3300);
        $disc13->setArtist($artist10);
        $manager->persist($disc13);

        $disc14 = new Disc();
        $disc14->setTitle('Beggars Banquet');
        $disc14->setYear('1968');
        $disc14->setPicture('Beggars Banquet.jpeg');
        $disc14->setLabel('Rolling Stones Records');
        $disc14->setGenre('Blues Rock, Classic Rock');
        $disc14->setPrice(3300);
        $disc14->setArtist($artist1);
        $manager->persist($disc14);

        $disc15 = new Disc();
        $disc15->setTitle('Labotory of Sound');
        $disc15->setYear('1995');
        $disc15->setPicture('Laboratory of sound.jpeg');
        $disc15->setLabel('Rebel Rec.');
        $disc15->setGenre('Rock');
        $disc15->setPrice(3300);
        $disc15->setArtist($artist9);
        $manager->persist($disc15);

        $manager->flush();
    }
}
