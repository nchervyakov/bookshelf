<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nikolay Chervyakov 
 * Date: 28.04.2014
 * Time: 20:57
 */


namespace Bookshelf\AppBundle\DataFixtures\ORM;


use Bookshelf\AppBundle\Entity\Book;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class BookFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $book1 = new Book();
        $book1->setName('Корабль невест');
        $book1->setAuthor('Джоджо Мойес');
        $book1->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book1);

        $book2 = new Book();
        $book2->setName('Голодные игры. И вспыхнет пламя. Сойка-пересмешница');
        $book2->setAuthor('Сьюзен Коллинз');
        $book2->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book2);

        $book3 = new Book();
        $book3->setName('Таймлесс. Сапфировая книга');
        $book3->setAuthor('Керстин Гир');
        $book3->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book3);

        $book4 = new Book();
        $book4->setName('Последнее письмо от твоего любимого');
        $book4->setAuthor('Джоджо Мойес');
        $book4->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book4);

        $book5 = new Book();
        $book5->setName('Шантарам (комплект из 2 книг)');
        $book5->setAuthor('Грегори Дэвид Робертс');
        $book5->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book5);

        $book6 = new Book();
        $book6->setName('11/22/63');
        $book6->setAuthor('Стивен Кинг');
        $book6->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book6);

        $book7 = new Book();
        $book7->setName('Билли');
        $book7->setAuthor('Анна Гавальда');
        $book7->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book7);

        $book8 = new Book();
        $book8->setName('Игра престолов');
        $book8->setAuthor('Джордж Р. Р. Мартин');
        $book8->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book8);

        $book9 = new Book();
        $book9->setName('Пир стервятников');
        $book9->setAuthor('Джордж Р. Р. Мартин');
        $book9->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book9);

        $book10 = new Book();
        $book10->setName('Я чувствую тебя');
        $book10->setAuthor('Ирэне Као');
        $book10->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book10);

        $book11 = new Book();
        $book11->setName('Книжный вор');
        $book11->setAuthor('Маркус Зусак');
        $book11->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book11);

        $book12 = new Book();
        $book12->setName('Доктор Сон');
        $book12->setAuthor('Стивен Кинг');
        $book12->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book12);

        $book13 = new Book();
        $book13->setName('Я смотрю на тебя');
        $book13->setAuthor('Ирэне Као');
        $book13->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book13);

        $book14 = new Book();
        $book14->setName('Тайна замка Роксфорд-Холл');
        $book14->setAuthor('Джон Харвуд');
        $book14->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book14);

        $book15 = new Book();
        $book15->setName('Бегущий за ветром');
        $book15->setAuthor('Халед Хоссейни');
        $book15->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book15);

        $book16 = new Book();
        $book16->setName('Самая таинственная тайна и другие сюжеты');
        $book16->setAuthor('Борис Акунин');
        $book16->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book16);

        $book17 = new Book();
        $book17->setName('Источник (комплект из 2 книг)');
        $book17->setAuthor('Айн Рэнд');
        $book17->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book17);

        $book18 = new Book();
        $book18->setName('Сволочей тоже жалко');
        $book18->setAuthor('Виктория Токарева');
        $book18->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book18);

        $book19 = new Book();
        $book19->setName('Черт-те что и сбоку бантик');
        $book19->setAuthor('Екатерина Вильмонт');
        $book19->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book19);

        $book20 = new Book();
        $book20->setName('Таймлесс. Рубиновая книга');
        $book20->setAuthor('Керстин Гир');
        $book20->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book20);

        $book21 = new Book();
        $book21->setName('Повелитель мух');
        $book21->setAuthor('Уильям Голдинг');
        $book21->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book21);

        $book22 = new Book();
        $book22->setName('Слишком много счастья');
        $book22->setAuthor('Элис Манро');
        $book22->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book22);

        $book23 = new Book();
        $book23->setName('Король и его королева');
        $book23->setAuthor('Александр Бушков');
        $book23->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book23);

        $book24 = new Book();
        $book24->setName('Битва королей');
        $book24->setAuthor('Джордж Р. Р. Мартин');
        $book24->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book24);

        $book25 = new Book();
        $book25->setName('Буря мечей');
        $book25->setAuthor('Джордж Р. Р. Мартин');
        $book25->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book25);

        $book26 = new Book();
        $book26->setName('Город потерянных душ. Книга 5');
        $book26->setAuthor('Кассандра Клэр');
        $book26->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book26);

        $book27 = new Book();
        $book27->setName('Танец с драконами. Искры над пеплом');
        $book27->setAuthor('Джордж Р. Р. Мартин');
        $book27->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book27);

        $book28 = new Book();
        $book28->setName('Беллмен и Блэк, или Незнакомец в черном');
        $book28->setAuthor('Диана Сеттерфилд');
        $book28->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book28);

        $book29 = new Book();
        $book29->setName('Властелин колец (комплект из 3 книг)');
        $book29->setAuthor('Дж. Р. Р. Толкин');
        $book29->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book29);

        $book30 = new Book();
        $book30->setName('Иосиф Бродский. Малое собрание сочинений');
        $book30->setAuthor('Иосиф Бродский');
        $book30->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book30);

        $book31 = new Book();
        $book31->setName('Хорошо быть тихоней');
        $book31->setAuthor('Стивен Чбоски');
        $book31->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book31);

        $book32 = new Book();
        $book32->setName('Бэтмен. Лечебница Аркхем. Дом скорби на скорбной земле');
        $book32->setAuthor('Грант Моррисон, Дэйв Маккин');
        $book32->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book32);

        $book33 = new Book();
        $book33->setName('Печать Сумрака');
        $book33->setAuthor('Сергей Лукьяненко, Иван Кузнецов');
        $book33->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book33);

        $book34 = new Book();
        $book34->setName('Адские механизмы. Книга 3. Механическая принцесса.');
        $book34->setAuthor('Кассандра Клэр');
        $book34->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book34);

        $book35 = new Book();
        $book35->setName('Ведьмак');
        $book35->setAuthor('Анджей Сапковский');
        $book35->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book35);

        $book36 = new Book();
        $book36->setName('Танец с драконами. Грезы и пыль');
        $book36->setAuthor('Джордж Р. Р. Мартин');
        $book36->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book36);

        $book37 = new Book();
        $book37->setName('Как влюбиться без памяти');
        $book37->setAuthor('Сесилия Ахерн');
        $book37->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book37);

        $book38 = new Book();
        $book38->setName('Боль');
        $book38->setAuthor('Евгений Гришковец');
        $book38->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book38);

        $book39 = new Book();
        $book39->setName('Дом, в котором...');
        $book39->setAuthor('Мариам Петросян');
        $book39->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book39);

        $book40 = new Book();
        $book40->setName('Ржавый меч царя Гороха');
        $book40->setAuthor('Андрей Белянин');
        $book40->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book40);

        $book41 = new Book();
        $book41->setName('Любовь во время чумы');
        $book41->setAuthor('Габриэль Гарсиа Маркес');
        $book41->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book41);

        $book42 = new Book();
        $book42->setName('Мир глазами кота Боба. Новые приключения человека и его рыжего друга');
        $book42->setAuthor('Джеймс Боуэн');
        $book42->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book42);

        $book43 = new Book();
        $book43->setName('Сталин. Вспоминаем вместе');
        $book43->setAuthor('Николай Стариков');
        $book43->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book43);

        $book44 = new Book();
        $book44->setName('Бэтмен. Тихо!');
        $book44->setAuthor('Джеф Лоэб, Джим Ли');
        $book44->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book44);

        $book45 = new Book();
        $book45->setName('Страна радости');
        $book45->setAuthor('Стивен Кинг');
        $book45->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book45);

        $book46 = new Book();
        $book46->setName('1984');
        $book46->setAuthor('Джордж Оруэлл');
        $book46->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book46);

        $book47 = new Book();
        $book47->setName('Тщательная работа');
        $book47->setAuthor('Пьер Леметр');
        $book47->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book47);

        $book48 = new Book();
        $book48->setName('Повелитель мух');
        $book48->setAuthor('Уильям Голдинг');
        $book48->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book48);

        $book49 = new Book();
        $book49->setName('Понедельник начинается в субботу');
        $book49->setAuthor('Аркадий и Борис Стругацкие');
        $book49->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book49);

        $book50 = new Book();
        $book50->setName('Просто вместе');
        $book50->setAuthor('Анна Гавальда');
        $book50->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book50);

        $book51 = new Book();
        $book51->setName('О дивный новый мир');
        $book51->setAuthor('Олдос Хаксли');
        $book51->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book51);

        $book52 = new Book();
        $book52->setName('Кодекс Братана');
        $book52->setAuthor('Барни Стинсон, Мэтт Кун');
        $book52->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book52);

        $book53 = new Book();
        $book53->setName('Портрет Дориана Грея');
        $book53->setAuthor('Оскар Уайльд');
        $book53->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book53);

        $book54 = new Book();
        $book54->setName('Исчезнувшая');
        $book54->setAuthor('Флинн Гиллиан');
        $book54->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book54);

        $book55 = new Book();
        $book55->setName('Воспоминания о войне');
        $book55->setAuthor('Николай Никулин');
        $book55->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book55);

        $book56 = new Book();
        $book56->setName('Танцовщик');
        $book56->setAuthor('Колум Маккэнн');
        $book56->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book56);

        $book57 = new Book();
        $book57->setName('Тайна');
        $book57->setAuthor('Ронда Берн');
        $book57->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book57);

        $book58 = new Book();
        $book58->setName('Школьный Надзор');
        $book58->setAuthor('Сергей Лукьяненко, Аркадий Шушпанов');
        $book58->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book58);

        $book59 = new Book();
        $book59->setName('Зов Ктулху');
        $book59->setAuthor('Говард Филлипс Лавкрафт');
        $book59->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book59);

        $book60 = new Book();
        $book60->setName('Ебург');
        $book60->setAuthor('Алексей Иванов');
        $book60->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book60);

        $book61 = new Book();
        $book61->setName('Три товарища');
        $book61->setAuthor('Эрих Мария Ремарк');
        $book61->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book61);

        $book62 = new Book();
        $book62->setName('Обломов');
        $book62->setAuthor('Иван Гончаров');
        $book62->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book62);

        $book63 = new Book();
        $book63->setName('Мы живые');
        $book63->setAuthor('Айн Рэнд');
        $book63->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book63);

        $book64 = new Book();
        $book64->setName('Избранная');
        $book64->setAuthor('Вероника Рот');
        $book64->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book64);

        $book65 = new Book();
        $book65->setName('Тринадцатая сказка');
        $book65->setAuthor('Диана Сеттерфилд');
        $book65->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book65);

        $book66 = new Book();
        $book66->setName('Инферно');
        $book66->setAuthor('Дэн Браун');
        $book66->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book66);

        $book67 = new Book();
        $book67->setName('Люди, которые всегда со мной');
        $book67->setAuthor('Наринэ Абгарян');
        $book67->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book67);

        $book68 = new Book();
        $book68->setName('Клуб любителей книг и пирогов из картофельных очистков');
        $book68->setAuthor('Мэри Энн Шеффер, Энни Бэрроуз');
        $book68->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book68);

        $book69 = new Book();
        $book69->setName('Переписка И. Сталина с У. Черчиллем и К. Эттли (июль 1941 г. – ноябрь 1945 г.)');
        $book69->setAuthor('И. Сталин, У. Черчилль, К. Эттли');
        $book69->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book69);

        $book70 = new Book();
        $book70->setName('Супермен. Земля-1. Книга 2');
        $book70->setAuthor('Дж. М. Стражински');
        $book70->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book70);

        $book71 = new Book();
        $book71->setName('12 лет рабства. Реальная история предательства, похищения и силы духа');
        $book71->setAuthor('Соломон Нортап');
        $book71->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book71);

        $book72 = new Book();
        $book72->setName('Иные боги и другие истории');
        $book72->setAuthor('Говард Филлипс Лавкрафт');
        $book72->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book72);

        $book73 = new Book();
        $book73->setName('Лето, прощай');
        $book73->setAuthor('Рэй Брэдбери');
        $book73->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book73);

        $book74 = new Book();
        $book74->setName('Жизнь взаймы');
        $book74->setAuthor('Эрих Мария Ремарк');
        $book74->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book74);

        $book75 = new Book();
        $book75->setName('Адские механизмы. Книга 1. Механический ангел');
        $book75->setAuthor('Кассандра Клэр');
        $book75->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book75);

        $book76 = new Book();
        $book76->setName('Лавр');
        $book76->setAuthor('Евгений Водолазкин');
        $book76->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book76);

        $book77 = new Book();
        $book77->setName('Завод "Свобода"');
        $book77->setAuthor('Ксения Букша');
        $book77->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book77);

        $book78 = new Book();
        $book78->setName('Полковнику никто не пишет');
        $book78->setAuthor('Габриэль Гарсиа Маркес');
        $book78->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book78);

        $book79 = new Book();
        $book79->setName('Страшные рассказы');
        $book79->setAuthor('Эдгар Аллан По');
        $book79->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book79);

        $book80 = new Book();
        $book80->setName('Реверс. Пограничье');
        $book80->setAuthor('Сергей Лукьяненко, Александр Громов');
        $book80->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book80);

        $book81 = new Book();
        $book81->setName('Дочь палача');
        $book81->setAuthor('Оливер Петч');
        $book81->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book81);

        $book82 = new Book();
        $book82->setName('Чисто конкретное убийство');
        $book82->setAuthor('Иоанна Хмелевская');
        $book82->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book82);

        $book83 = new Book();
        $book83->setName('Охота на Горностая');
        $book83->setAuthor('Вадим Панов');
        $book83->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book83);

        $book84 = new Book();
        $book84->setName('Темная башня. Часть 3. Предательство');
        $book84->setAuthor('Стивен Кинг');
        $book84->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book84);

        $book85 = new Book();
        $book85->setName('Бегущий по лабиринту. Лекарство от смерти');
        $book85->setAuthor('Джеймс Дэшнер');
        $book85->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book85);

        $book86 = new Book();
        $book86->setName('Моя жизнь, мои достижения');
        $book86->setAuthor('Генри Форд');
        $book86->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book86);

        $book87 = new Book();
        $book87->setName('Колыбель для кошки');
        $book87->setAuthor('Курт Воннегут');
        $book87->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book87);

        $book88 = new Book();
        $book88->setName('Полковнику никто не пишет');
        $book88->setAuthor('Габриэль Гарсиа Маркес');
        $book88->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book88);

        $book89 = new Book();
        $book89->setName('Три товарища');
        $book89->setAuthor('Эрих Мария Ремарк');
        $book89->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book89);

        $book90 = new Book();
        $book90->setName('Осточерчение');
        $book90->setAuthor('Вера Полозкова');
        $book90->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book90);

        $book91 = new Book();
        $book91->setName('Ветры, ангелы и люди');
        $book91->setAuthor('Макс Фрай');
        $book91->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book91);

        $book92 = new Book();
        $book92->setName('Мемуары');
        $book92->setAuthor('Джон Рокфеллер');
        $book92->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book92);

        $book93 = new Book();
        $book93->setName('Триумфальная арка');
        $book93->setAuthor('Эрих Мария Ремарк');
        $book93->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book93);

        $book94 = new Book();
        $book94->setName('1984. Скотный Двор');
        $book94->setAuthor('Джордж Оруэлл');
        $book94->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book94);

        $book95 = new Book();
        $book95->setName('Портрет Дориана Грея');
        $book95->setAuthor('Оскар Уайльд');
        $book95->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book95);

        $book96 = new Book();
        $book96->setName('Прощание с иллюзиями');
        $book96->setAuthor('Владимир Познер');
        $book96->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book96);

        $book97 = new Book();
        $book97->setName('Американские боги. Король горной долины. Сыновья Ананси');
        $book97->setAuthor('Нил Гейман');
        $book97->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book97);

        $book98 = new Book();
        $book98->setName('Зеленая миля');
        $book98->setAuthor('Стивен Кинг');
        $book98->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book98);

        $book99 = new Book();
        $book99->setName('Тринадцатая сказка');
        $book99->setAuthor('Диана Сеттерфилд');
        $book99->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book99);

        $book100 = new Book();
        $book100->setName('Божественная Комедия. Новая Жизнь');
        $book100->setAuthor('Данте Алигьери');
        $book100->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book100);

        $book101 = new Book();
        $book101->setName('Никогда не сдаваться! Лучшие речи Черчилля');
        $book101->setAuthor('Уинстон Черчилль');
        $book101->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book101);

        $book102 = new Book();
        $book102->setName('Бесконечная Земля');
        $book102->setAuthor('Терри Пратчетт, Стивен Бакстер');
        $book102->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book102);

        $book103 = new Book();
        $book103->setName('Доктор Sleep. Сияние (комплект из 2 книг)');
        $book103->setAuthor('Стивен Кинг');
        $book103->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book103);

        $book104 = new Book();
        $book104->setName('Последний рассвет. Том 2');
        $book104->setAuthor('Алескандра Маринина');
        $book104->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book104);

        $book105 = new Book();
        $book105->setName('Вино из одуванчиков');
        $book105->setAuthor('Рэй Брэдбери');
        $book105->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book105);

        $book106 = new Book();
        $book106->setName('Все о Манюне');
        $book106->setAuthor('Наринэ Абгарян');
        $book106->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book106);

        $book107 = new Book();
        $book107->setName('Город падших ангелов');
        $book107->setAuthor('Кассандра Клэр');
        $book107->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book107);

        $book108 = new Book();
        $book108->setName('Жизнь без границ. Путь к потрясающе счастливой жизни');
        $book108->setAuthor('Ник Вуйчич');
        $book108->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book108);

        $book109 = new Book();
        $book109->setName('Адские механизмы. Книга 2. Механический принц');
        $book109->setAuthor('Кассандра Клэр');
        $book109->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book109);

        $book110 = new Book();
        $book110->setName('Город Грехов-1. Трудное прощание');
        $book110->setAuthor('Фрэнк Миллер');
        $book110->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book110);

        $book111 = new Book();
        $book111->setName('451° по Фаренгейту');
        $book111->setAuthor('Рэй Брэдбери');
        $book111->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book111);

        $book112 = new Book();
        $book112->setName('Отбор');
        $book112->setAuthor('Кира Касс');
        $book112->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book112);

        $book113 = new Book();
        $book113->setName('Месть носит Prada');
        $book113->setAuthor('Лорен Вайсбергер');
        $book113->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book113);

        $book114 = new Book();
        $book114->setName('Жестокая жара');
        $book114->setAuthor('Ричард Касл');
        $book114->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book114);

        $book115 = new Book();
        $book115->setName('Старик, который читал любовные романы');
        $book115->setAuthor('Луис Сепульведа');
        $book115->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book115);

        $book116 = new Book();
        $book116->setName('Последний рассвет. В 2 томах. Том 1');
        $book116->setAuthor('Александра Маринина');
        $book116->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book116);

        $book117 = new Book();
        $book117->setName('Приват-танец мисс Марпл');
        $book117->setAuthor('Дарья Донцова');
        $book117->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book117);

        $book118 = new Book();
        $book118->setName('Черт-те что и сбоку бантик');
        $book118->setAuthor('Екатерина Вильмонт');
        $book118->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book118);

        $book119 = new Book();
        $book119->setName('Никола Тесла');
        $book119->setAuthor('Евгений Матонин');
        $book119->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book119);

        $book120 = new Book();
        $book120->setName('Колыбельная');
        $book120->setAuthor('Чак Паланик');
        $book120->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book120);

        $book121 = new Book();
        $book121->setName('В дороге');
        $book121->setAuthor('Джек Керуак');
        $book121->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book121);

        $book122 = new Book();
        $book122->setName('Жизнь взаймы');
        $book122->setAuthor('Эрих Мария Ремарк');
        $book122->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book122);

        $book123 = new Book();
        $book123->setName('Бегущий по Лабиринту');
        $book123->setAuthor('Джеймс Дэшнер');
        $book123->setLibrary($em->merge($this->getReference('library_central')));
        $em->persist($book123);

        $book124 = new Book();
        $book124->setName('Сантехник. Твое мое колено');
        $book124->setAuthor('Слава Сэ');
        $book124->setLibrary($em->merge($this->getReference('library_first')));
        $em->persist($book124);

        $book125 = new Book();
        $book125->setName('Дикая. Опасное путешествие как способ обрести себя');
        $book125->setAuthor('Ш. Стрэйд');
        $book125->setLibrary($em->merge($this->getReference('library_gorkogo')));
        $em->persist($book125);

        $em->flush();
    }

    public function getOrder()
    {
        return 2; // This represents the order in which fixtures will be loaded
    }
}
