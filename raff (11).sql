-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2023 г., 18:30
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `raff`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gnumner`
--

CREATE TABLE `gnumner` (
  `id` int(11) NOT NULL,
  `nkar` varchar(250) NOT NULL,
  `vernagir` varchar(250) NOT NULL,
  `gin` double NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gnumner`
--

INSERT INTO `gnumner` (`id`, `nkar`, `vernagir`, `gin`, `text`) VALUES
(12, 'https://s0.rbk.ru/v6_top_pics/media/img/0/47/756504609782470.jpg', 'bmw', 20000, 'bervele hayastan 2022 tvakanin,artadrvele 2017 tvakanin'),
(13, 'https://im.kommersant.ru/Issues.photo/AUTO_News/2022/05/20/KMO_152985_08778_1_t218_111335.jpg', 'bmw', 50000, 'bervele hayastan 2022 tvakanin,artadrvele 2017 tvakanin'),
(14, 'https://avatars.mds.yandex.net/get-verba/216201/2a00000179a9b016f6db74f738a8c5299cd2/cattouch', 'mersedes', 80000, 'bervele hayastan 2020 tvakanin,artadrvele 2015 tvakanin'),
(15, 'https://img.mercedes-benz-kiev.com/data/news/181-mercedes-benz-vision-avtr/181-Mercedes-Benz-vision-avtr-1.jpg', 'mersedes', 70000, 'bervele hayastan 2020 tvakanin,artadrvele 2015 tvakanin'),
(16, ' https://www.ixbt.com/img/n1/news/2022/0/4/tesla-roadster_large.jpg', 'tesla', 90000, ' bervele hayastan 2020 tvakanin,artadrvele 2015 tvakanin'),
(17, ' https://www.ixbt.com/img/n1/news/2022/1/5/tesla-model-x-p100d-97_large.jpg', '  tesla', 1000, '  bervele hayastan 2019 tvakanin,artadrvele 2015 tvakanin');

-- --------------------------------------------------------

--
-- Структура таблицы `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `vernagir` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `vernagir2` varchar(250) NOT NULL,
  `text2` text NOT NULL,
  `nkar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `html`
--

INSERT INTO `html` (`id`, `vernagir`, `text`, `vernagir2`, `text2`, `nkar`) VALUES
(12, 'html', '  HTML (անգլ.՝ HyperText Markup Language, գերտեքստի նշագրման լեզու), նշագրման լեզու, որն օգտագործվում է վեբ-էջերի մեծամասնության նշագրման համար։ HTML լեզուն վերամշակվում է դիտարկչի կողմից և ցուցադրվում է մարդու կողմից հեշտ ընթեռնելի փաստաթղթի տեսքով։  HTML-ի օգնությամբ հեշտությամբ կարելի է ստեղծել համեմատաբար պարզ, սակայն գեղեցիկ ձևավորված փաստաթուղթ։ Ի հավելումն փաստաթղթի կառուցվածքի պարզեցմանը՝ HTML-ում աջակցվում էր հիպերտեքստը։ Մուլտիմեդիայի հնարավորությունները ավելացվեցին քիչ ավելի ուշ։ Ի սկզբանե HTML լեզուն ստեղծվել է որպես փաստաթղթերի կառուցման և ձևավորման միջոց՝ անկախ օգտագործվող արտածման միջոցից (էկրան, տպիչ և այլն) ցուցադրելու միջոց։ Նախնական HTML ձևաչափով տեքստը պետք է առանց ոճային և կառուծվածքային ձևափոխման արտածվեր սարքավորման վրա՝ տարբեր տեխնիկական համալրմամբ (ժամանակակից համակարգչի գունավոր էկրանը, օրգանայզերի մոնոխրոմային էկրան, բջջային հեռախոսների կամ տեքստերի ձայնային վերարտադրման ծրագրերի կամ սարքավորումների սահմանափակ չափերով էկրան)։ Սակայն HTML-ի ժամանակակից կիրառումը հեռու է սկզբնական\r\n HTML (անգլ.՝ HyperText Markup Language, գերտեքստի նշագրման լեզու), նշագրման լեզու, որն օգտագործվում է վեբ-էջերի մեծամասնության նշագրման համար։ HTML լեզուն վերամշակվում է դիտարկչի կողմից և ցուցադրվում է մարդու կողմից հեշտ ընթեռնելի փաստաթղթի տեսքով։', ' nkaragrucyun', '  HTML-ի օգնությամբ հեշտությամբ կարելի է ստեղծել համեմատաբար պարզ, սակայն գեղեցիկ ձևավորված փաստաթուղթ։ Ի հավելումն փաստաթղթի կառուցվածքի պարզեցմանը՝ HTML-ում աջակցվում էր հիպերտեքստը։ Մուլտիմեդիայի հնարավորությունները ավելացվեցին քիչ ավելի ուշ։ Ի սկզբանե HTML լեզուն ստեղծվել է որպես փաստաթղթերի կառուցման և ձևավորման միջոց՝ անկախ օգտագործվող արտածման միջոցից (էկրան, տպիչ և այլն) ցուցադրելու միջոց։ Նախնական HTML ձևաչափով տեքստը պետք է առանց ոճային և կառուծվածքային ձևափոխման արտածվեր սարքավորման վրա՝ տարբեր տեխնիկական համալրմամբ (ժամանակակից համակարգչի գունավոր էկրանը, օրգանայզերի մոնոխրոմային էկրան, բջջային հեռախոսների կամ տեքստերի ձայնային վերարտադրման ծրագրերի կամ սարքավորումների սահմանափակ չափերով էկրան)։ Սակայն HTML-ի ժամանակակից կիրառումը հեռու է սկզբնական', '  https://timeweb.com/ru/community/article/ff/ff0770833a0026f1b62813408cf5bfb6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `username` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `meknab`
--

CREATE TABLE `meknab` (
  `id` int(11) NOT NULL,
  `anun` varchar(20) NOT NULL,
  `azganun` varchar(20) NOT NULL,
  `nkar` varchar(250) NOT NULL,
  `meknabanucyun` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `nkar` varchar(300) NOT NULL,
  `vernagir` varchar(250) NOT NULL,
  `text` varchar(10000) NOT NULL,
  `ta` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `nkar`, `vernagir`, `text`, `ta`) VALUES
(1, 'http://3.bp.blogspot.com/-owD3bQF7hWk/UwfWmLEq7TI/AAAAAAAABk8/7HNs46VxFjc/s1600/1797518_503896883060462_1213626707_n.jpg', 'Հովհաննես Թումանյան', 'Հովհաննես Թադևոսի Թումանյան (փետրվարի 19, 1869, Դսեղ, Բորչալուի գավառ, Թիֆլիսի նահանգ, Ռուսական կայսրություն - մարտի 23, 1923, Մոսկվա, ԽՍՀՄ), հայ բանաստեղծ, արձակագիր, գրական, ազգային և հասարակական գործիչ։ Գրել է բանաստեղծություններ, պոեմներ, քառյակներ, բալլադներ, պատմվածքներ ու հեքիաթներ, ակնարկներ, քննադատական ու հրապարակախոսական հոդվածներ[5], կատարել է թարգմանություններ, մշակել է «Սասնա ծռեր» դյուցազնավեպի «Սասունցի Դավիթ» ճյուղը։ Համարվում է ամենայն հայոց մեծ բանաստեղծ[6]։\r\n\r\nՀովհաննես Թումանյանը ծնվել է 1869 թվականի փետրվարի 19-ին Լոռվա Դսեղ գյուղում[5]։ 1877-1879 թվականներին Թումանյանը սովորել է Դսեղի ծխական դպրոցում։ 1879-1883 թվականներին սովորել է Ջալալօղլու (այժմ Ստեփանավան) նորաբաց երկսեռ դպրոցում[7]։ 1883 թվականից բնակվել է Թիֆլիսում։ 1883-1887 թվականներին սովորել է Թիֆլիսի Ներսիսյան դպրոցում, սակայն նյութական ծանր դրության պատճառով 1887 թվականին կիսատ թողնելով ուսումը` աշխատել է Թիֆլիսի հայ եկեղեցական դատարանում, այնուհետև Հայ Հրատարակչական միության գրասենյակում (մինչև 1893 թ.)։ 1893 թվականից աշխատակցել է «Աղբյուր», «Մուրճ», «Հասկեր», «Հորիզոն» գրական պարբերականներին։\r\n\r\n1899 թվականին նրա նախաձեռնությամբ Թիֆլիսում ստեղծվել է «Վերնատուն» գրական խմբակը, որի անդամներն էին Հովհաննես Թումանյանը, Դերենիկ Դեմիրճյանը, Լևոն Շանթը, Ղազարոս Աղայանը, Ավետիք Իսահակյանը, Նիկոլ Աղբալյանը և ուրիշներ։ Որոշ ընդմիջումներով խմբակը գործել է մինչև 1908 թվականը[5]։\r\n\r\n1912 թվականին Թումանյանն ընտրվել է նորաստեղծ Հայ գրողների կովկասյան ընկերության նախագահ, իսկ 1918 թվականին՝ Հայոց հայրենակցական միությունների միության (ՀՀՄՄ) նախագահ։ Առաջին համաշխարհային պատերազմում (1914-1918 թթ.) հայ ժողովրդի կրած վնասները հաշվելու և Փարիզի հաշտության խորհրդաժողովին (1919-1920) ներկայացնելու նպատակով ՀՀՄՄ-ն 1918 թվականին ստեղծել է Քննիչ հանձնաժողով՝ Թումանյանի գլխավորությամբ։ 1912-1921 թվականներին եղել է Հայ գրողների կովկասյան միության նախագահ։ Հայաստանի խորհրդայնացումից հետո նախագահել է Հայաստանի օգնության կոմիտեն (1921-1922)։', 'tesnel avelin'),
(2, 'https://mamul.am/images/pics/170814/hovhannes-shiraz-u72220-1.jpg           ', 'Հովհաննես Շիրազ           ', 'Ծնվել է 1914 թվականին  Ալեքսանդրապոլ  քաղաքում (այժմ՝ Գյումրի)։ Շիրազը  մեծացել է աղքատության մեջ։ Առաջին գիրքը՝  «Գարնանամուտ» վերնագրով,   հրատարակվել է 1935 թվականին։ Նովելագիր Ատրպետը տաղանդավոր  պոետին տալիս  է «Շիրազ» գրական  անունը, որովհետև  «Այս երիտասարդի  բանաստեղծությունները  Շիրազի  թարմ  և  ցողով ծածկված վարդերի բուրմունքն ունեն» (Շիրազը քաղաք է Իրանում, որը հայտնի է իր վարդերով և պոետներով)։   Սովորել է Երևանի համալսարանի բանասիրական ֆակուլտետում, այնուհետև՝ Մոսկվայի Մ. Գորկու անվան գրականության ինստիտուտի գրական բարձրագույն դասընթացներում։ 1958 թվականին հրատարակում է «Քնար Հայաստանի» գրքի առաջին հատորը։ Երկրորդ և երրորդ հատորները հրատարակվում են 1965 թվականին և 1974 թվականին։ Այս ժողովածուները ներառում են Շիրազի պոեզիայի լավագույն նմուշները։ Շիրազի ստեղծագործությունները չափածո են։ Նա հեղինակ է հանրաճանաչ հայրենասիրական և լիրիկական պոեմների ու բանաստեղծությունների, որոնցից են՝ «Անի», «Սիամանթո և Խջեզարե», «Էքսպրոմտ», «Իմ սուրբ Հայրենիք», «Սերս գաղտնի թող մնա», «Հայերի ճակատագիր», «Անդրանիկին» և այլն։ Նա գրել է «Հայոց Դանթեական» մեծածավալ պոեմը, որը Հայոց ցեղասպանության մասին է, թեմա, որն արգելված էր Խորհրդային Միությունում. Գլուխգործոց համարվող այս ստեղծագործության առաջին տարբերակը գրվել է 1941 թ.[1] Շիրազի կենդանության օրոք այդ գործից միայն կարճ հատվածներ հրատարակվեցին Խորհրդային Միությունում և մի քանի գլուխներ Բեյրութում և Թեհրանում։ Պոեմը ամբողջությամբ (ավելի քան 8000 տող) լույս տեսավ Երևանում 1990 թվականին։\r\n\r\nԹաղված է Երևանի  Կոմիտասի անվան   պանթեոնում՝ այլ հանրահայտ հայերի  կողքին։\r\n\r\nՆրա առաջին կինը հայտնի բանաստեղծուհի Սիլվա Կապուտիկյանն էր։ Նրանց տղան՝ Արա Շիրազը քանդակագործ է։ Շիրազը իր երկրորդ կնոջից՝ Շուշանից յոթ երեխա ունեցավ։ Նրանց որդին՝ Սիփան Շիրազը, պոետ էր։\r\n\r\nՀովհաննես Շիրազի անվամբ են կոչվում Երևանի թիվ 169 դպրոցը և Սպահանի մարզի Ջուղայի մի փողոց։ Գյումրիի 19-րդ դարի կառույցում բացվել է Հովհաննես Շիրազի հուշատուն-թանգարանը[2]։ Շիրազը հայտնի էր իր լավ հումորի զգացումով։ 1960-ականների սկզբներին Ջոն Ստեյնբեկը այցելում է Երևանում պոետի բնակարանը, ավելի ուշ Շիրազին ուղղված իր նամակում գրում է՝ ...մարդիկ հարազատ են զգում միասին, երբ նրանք միասին ծիծաղում են։ \r\n\r\n', 'tesnel avelin');

-- --------------------------------------------------------

--
-- Структура таблицы `product2`
--

CREATE TABLE `product2` (
  `id` int(11) NOT NULL,
  `nkar` varchar(250) NOT NULL,
  `vernagir` varchar(250) NOT NULL,
  `text` varchar(250) NOT NULL,
  `vernagir2` text NOT NULL,
  `text2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product2`
--

INSERT INTO `product2` (`id`, `nkar`, `vernagir`, `text`, `vernagir2`, `text2`) VALUES
(10, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9OFEgNGAfHna3FgpL4JzDdvwZL5nMu4_4JQ&usqp=CAU', 'css', 'CSS используется создателями веб-страниц для задания цветов, шрифтов, стилей, расположения отдельных блоков и других аспектов представления внешнего вида этих веб-страниц. Основной целью разработки CSS является ограждение и отделение описания логичес', 'nkaragrucyun', 'CSS используется создателями веб-страниц для задания цветов, шрифтов, стилей, расположения отдельных блоков и других аспектов представления внешнего вида этих веб-страниц. Основной целью разработки CSS является ограждение и отделение описания логичес');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image_url`, `info`) VALUES
(41, 'ass', '45000', 'https://autopronews.ru/wp-content/uploads/2022/05/bmw-m4-csl-2023-pokazan-na-oficzialnyh-fotografiyah.jpg', 'aasd'),
(46, 'bmw', '10.000', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROORIV4fCZDJzYc0qzI7QscjV6ViPGog663w&usqp=CAU', 'gffffffffffffffffffffffffff'),
(47, 'meqena', '80.000', 'https://s0.rbk.ru/v6_top_pics/media/img/0/98/756473436040980.jpg', 'lav avtoya');

-- --------------------------------------------------------

--
-- Структура таблицы `texekucyun`
--

CREATE TABLE `texekucyun` (
  `id` int(11) NOT NULL,
  `hamar` int(11) NOT NULL,
  `qanak` int(11) NOT NULL,
  `heraxos` varchar(250) NOT NULL,
  `hasce` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `texekucyun`
--

INSERT INTO `texekucyun` (`id`, `hamar`, `qanak`, `heraxos`, `hasce`) VALUES
(28, 17, 5, '077-00-00-00', 'erevan');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gnumner`
--
ALTER TABLE `gnumner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `meknab`
--
ALTER TABLE `meknab`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texekucyun`
--
ALTER TABLE `texekucyun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gnumner`
--
ALTER TABLE `gnumner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `meknab`
--
ALTER TABLE `meknab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product2`
--
ALTER TABLE `product2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `texekucyun`
--
ALTER TABLE `texekucyun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
