-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018 年 05 月 24 日 12:09
-- 伺服器版本: 10.1.29-MariaDB
-- PHP 版本： 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `infs3202`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `ID` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `customer`
--

INSERT INTO `customer` (`ID`, `FirstName`, `LastName`, `Email`, `Username`, `Password`) VALUES
(1, 'kkk', 'lll', 'uq@uq.com', 'admin', '$2y$10$DnhmlLW4Psx.Hv8G0Aysx.MGHDo7Jaw1cPNJI8NlUlST.XNwiQDwG'),
(2, 'rrr', '', 'vv@vv.cc', 'abc', '$2y$10$CEjTW33orild3OMAA1u3denOTyN1Gth1SuyjGiqqeFKwNt7P7ag1S');

-- --------------------------------------------------------

--
-- 資料表結構 `destination`
--

CREATE TABLE `destination` (
  `DestinationID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `ImageLocation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `destination`
--

INSERT INTO `destination` (`DestinationID`, `Name`, `Description`, `ImageLocation`) VALUES
(1, 'Brisbane', 'Brisbane is the capital of and most populous city in the Australian state of Queensland, and the third most populous city in Australia. Brisbane\'s metropolitan area has a population of 2.4 million, and the South East Queensland region, centre on Brisbane, encompasses a population of more than 3.5 million. The Brisbane central business district stands on the original European settlement and is situated inside a bend of the Brisbane River, about 15 kilometres (9 miles) from its mouth at Moreton Bay. Queensland’s buzzing riverside capital city is wedged between the ocean and rugged national parks. Brisbane is a cosmopolitan hub for arts, culture and dining but still retains a close connection with nature and a classic laid-back Queensland attitude. It’s also the gateway to the wonders of the Gold Coast and Sunshine Coast. The metropolitan area extends in all directions along the floodplain of the Brisbane River Valley between Moreton Bay and the Great Dividing Range, sprawling across several of Australia\'s most populous local government areas (LGAs), most centrally the City of Brisbane, which is by far the most populous LGA in the nation.', './images/bne.jpg'),
(2, 'Gold Coast', 'The Gold Coast is a coastal city in the Australian state of Queensland, approximately 66 kilometres (41 miles) south-southeast of the state capital Brisbane and immediately north of the border with New South Wales. Today, the Gold Coast is a major tourist destination with its sunny subtropical climate and has become widely known for its surfing beaches, high-rise dominated skyline, theme parks, nightlife, and rainforest hinterland. The city is part of the nation\'s entertainment industry with television productions and a major film and music industry. The city hosted the 21st Commonwealth Games which ran from 4 to 15 April 2018.There’s something here for everyone, from dedicated surfers to easy-going families and sophisticated foodies. Just 30 minutes from the beach you’ll find a subtropical hinterland dotted with tumbling waterfalls, bushwalking trails and quaint villages. It has set the scene for blockbuster movies and world-class surf events, so it’s no surprise Queensland’s most charismatic city has been drawing visitors for more than 50 years. The Gold Coast is a glitzy strip of high-rise hotels and expansive resorts set along more than a dozen golden sand beaches.', './images/gc.jpg'),
(3, 'Sunshine Coast', 'Sunshine Coast is a peri-urban area and the third most populated area in the Australian state of Queensland. Located 100 km (62 miles) north of the state capital Brisbane in South East Queensland on the Pacific Ocean coastline, its urban area spans approximately 60 km (37 miles) of coastline and hinterland from Pelican Waters to Tewantin. The estimated urban population of Sunshine Coast as at June 2015 was 302,122, making it the 9th most populous in the country. The Sunshine Coast is made up of more than 100km of sparkling coastline, dotted with stunning beaches, stylish villages such as Noosa, and bustling coastal towns like Maroochydore and Mooloolaba. Less than half an hour inland, the Sunshine Coast Hinterland is famous for its fresh produce and gourmet dining. The region is only 90 minutes north of Brisbane, but in this laid-back holiday favourite you’ll feel like you’ve escaped to another world.', './images/sc.jpg'),
(4, 'Cairns', 'Cairns is a city in the Cairns Region, Queensland, Australia. It is on the east coast of Far North Queensland. The city is the 5th-most-populous in Queensland and ranks 14th overall in Australia. The estimated residential population of the Cairns urban area in 2015 was 147,993. Based on 2015 data, the associated local government area has experienced an average annual growth rate of 2.3% over the last 10 years. Cairns is a popular tourist destination because of its tropical climate and access to the Great Barrier Reef, one of the seven natural wonders of the world. Famed for its first-class access to the nation’s biggest drawcards, the Great Barrier Reef and the Daintree Rainforest, these world-heritage sites stamp Cairns on the map as Australia’s nature capital with some serious adventure game. No matter who you are or how long you’re there, Cairns is a bucket list destination that speaks for itself when it comes to flaunting its natural assets. You could be rubbing fins with Nemo while you snorkel the Great Barrier Reef, surfing your way through the jungle of the Daintree Rainforest or hammock-side on a tropical island all within a day.', './images/cns.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'University of Queensland', 'St Lucia QLD 4072', -27.495405, 153.011993, 'University'),
(2, 'Brisbane City', '4000', -27.469896, 153.026382, 'city'),
(3, 'Sunshine Coast', 'Sunshine Coast', -26.654648, 153.067245, 'city'),
(4, 'Noosa Head', 'Noosa Head', -26.401415, 153.091949, 'City'),
(5, 'Gold Coast', 'Gold Coast', -28.025955, 153.412750, 'city'),
(6, 'Cairns', 'Cairns', -16.918722, 145.830597, 'city');

-- --------------------------------------------------------

--
-- 資料表結構 `package`
--

CREATE TABLE `package` (
  `PackageID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` float NOT NULL,
  `Stock` int(11) NOT NULL,
  `DestinationID` int(11) NOT NULL,
  `ImageLocation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `package`
--

INSERT INTO `package` (`PackageID`, `Name`, `Description`, `Price`, `Stock`, `DestinationID`, `ImageLocation`) VALUES
(1, 'Urban Brisbane Cultural Day Trip', 'Urban Brisbane Cultural Day Trip will spend visitor almost whole day in the urban city area with an excellent cultural experiences. We will pick up all the tourist on the designated place and drop them on the Brisbane City Council. The first place to visit is the city council, go on a tour of the heritage-listed building or the organ and auditorium then head up to the clock tower to experience incredible views of the CBD below you. Next, descend the stairs and explore Museum of Brisbane\'s latest exhibition. Albert Street Uniting Church will be the next place, tourist can view the traditional western church and have a nice photographic here. Move to Anzac Square, tourist can learn about the history and information about the Anzac Day. After that, we move to the Queen Street for Shopping & lunch purpose, we will be here for a couples hour. Afterwards, we will move to the North Quay and take the City Hopper for a Brisbane River Around tour. We will stop at South bank Quay and have a relax walk through the south bank and the artificial beach. Hence we move on to the Queensland Museum and Queensland Performing Art Centre for some particular shows & events. Later on, we will pick up tourists to the kangaroo point and have a wonderful sundown and city view. Lastly, we will walk through the beautiful lightshow story bright and have the dinner on Eagle Street with the amazing night view.', 10, 20, 1, './images/B01S.jpg'),
(2, 'Moreton Island and Dolphin Viewing Day Trip', 'Catch a boat, ferry or barge the short 40 kilometres off the Brisbane shoreline to the oasis of Moreton Island. There, all you need to do is choose the ideal camp spot, opt for ease of a holiday home or splurge on an inclusive resort. Leave Brisbane on a luxury catamaran and land on Moreton Island for a full day of fun in the sun. See vibrant marine life in the Tangalooma Wrecks during a guided snorkelling tour and paddle over the reef in the transparent kayak. There will also be time for chilling, picnicking on the beach and sandboarding down the island?s dunes. Spend half a day in the pools of Tangalooma Island Resort or option to join a marine discovery tour in search of dugongs, sea turtles and sea cucumbers. Alternatively, go on a desert safari and take to the dunes for an exhilarating session of sand-tobogganing. Then see the island?s bottlenose dolphins come to share ? something you will never forget! Snorkel or dive the island?s trail of sunken shipwrecks as you watch the flurry of marine life below. Hand-feed wild dolphins, or fish off the beach and enjoy cooking your catch at one of the many designated fire pits. Did someone say sand tobogganing? Being the third largest sand island in the world, Moreton Island has plenty of dunes to ride down!', 15, 20, 1, './images/B02S.jpg'),
(3, 'North Stradbroke Island Short Term Package', 'Comprised of three small townships, North Stradbroke Island is the perfect escape for all budgets ? from comfortable holiday homes and cabins, to powered beachfront camping grounds and hundreds of natural sites. You can make the most of the day during the trip. Wake up take the bus on the designate location, then enjoy the sea breeze with a beach yoga class or a stroll to Point Lookout. Discover jagged, powerful rock formations and a whale-like ?blow whole? ? plus, you might even spot real whales on their migration north! If sleeping-in to the sound of the lapping waves is too hard to resist, make sure you enjoy a gelato on the Gorge Walk later in the day. Cylinder Beach is a picturesque cove between Cylinder and Home Beach Headlands. It is popular with families because it is easily accessible with a carpark situated only metres from the beach. The waves at Cylinder are often smaller and therefore it is perfect for sun bathing and swimming during good weather conditions. However during strong southerly winds there is a side sweep which may carry you parallel to the beach. Cylinder Beach is also a favourite with surfers when the conditions are right. Lifeguards and lifesavers patrol this beach. Cylinder Beach generally produces smaller, rolling waves. Know what that means? This is the holiday to learn to surf, or give your longboard a workout.', 13, 20, 1, './images/B03S.jpg'),
(4, 'Gold Coast Beginner Day Trip', 'As the birthplace of the ?bikini?, the Gold Coast ?s popularity should be apparent! Named after miles of endless gold sand and limitless sunshine, fun-loving Surfers is a world-famous party playground! Bronzed beauties and local surf legends mingle with giddy backpackers in party-hard bars and wild theme parks. If you can draw yourself away from the rush, you will find a nearby world of tropical rainforests, idyllic islands and humpback migrations. Perfect for first time surfers who want to maximise their time in the water and catch that first wave, we will supply a two-hour lesson includes all equipment, a brief safety briefing, transfers from your Surfers Paradise accommodation and expert instruction. Based at Gold Coast?s split Beach, you will be up in no time. Then we will move to the Gold Coast waters armed with a paddle and a friendly tour guide. After the lesson, you will be able to keep an eye out for dolphins, turtles and stingrays as you enjoy some awesome snorkelling on Wave Break Island, and check out one of the world?s best surfing beachers on South Stradbroke Island.', 22, 20, 2, './images/G01S.jpg'),
(5, 'Surfer Paradise Adventure Short Term Package', 'Staying at the brand new Bunk in Surfers Paradise, this package introduces you to all the things fun, splashy and adventure. You will get a two-hour surf lesson with the Get Wet Surf School at Spit Beach, a one-hour beginner?s lesson for Stand Up Paddle Boarding, and a two hour rive kayak tour in Surfers paradise where you will pass celebrity homes and get the chance to spot exotic native birds at Macintosh Island. Not enough, if you?ve got a need for speed that your fastest front crawl just can?t satisfy then let?s get the motors Jet Boating for extra activity. This thrilling a one-hour jet boat ride takes you on a round trip from Mariners Cove, there?ll be twist, turns, fishtails, and plenty of ?WOOS?. See stunning coastline and be prepared to get a little wet during these adventure! All equipment and safety instructions are included. Another bonus service about a sky point ticket thrown in for good measure? This observation deck in the Gold Coast?s highest attraction and offers panoramic views of Surfer Paradise and surrounding hinterland. There?s no need to have and prior experience of surfing, Stand Up Paddle Boarding or kayaking making this the perfect package for first-timers!', 24, 20, 2, './images/G02S.jpg'),
(6, 'Lamington National Park Day Trip', 'Green Mountains section of Lamington National Park, in the hinterland of the Gold Coast, features lush rainforests, ancient trees and spectacular views. Densely-forested ranges and valleys conceal the area\'s ancient volcanic origins and dramatic lookouts afford views over the southern edge of the Scenic Rim. Lamington is part of the Gondwana Rainforests of Australia World Heritage Area, which includes the most extensive areas of subtropical rainforest in the world, most of the world\'s warm temperate rainforest and nearly all of the Antarctic beech cool temperate rainforest. Camp at the park\'s Green Mountain camping area. Choose from the many half-day or full-day walks that explore the park. On the Python Rock track, listen for the masked mountain frog\'s popping call. Enjoy views of Morans Falls and Morans Creek gorge on the Morans falls track. Spot leaf-tailed geckos on the West Canungra Creek track. Set out on a full day walk along the Border track or Mount Merino track for outstanding views. A privately-operated mountain retreat, Segway tours and zip line are also offered here.', 30, 20, 2, './images/G03S.jpg'),
(7, 'Noosa Wonderful Experience Trip', 'In a genetically blessed family of golden beaches stretching across the Sunshine Coast, Noosa is the sophisticated older sister with impeccable looks and incredible charm. If you?re after sophisticated seaside relaxation or you want to immerse yourself in the stunning natural scenery of the great outdoors, Noosa has a wave for everyone with your name on it. Hastings Street unites fashionistas and foodies in one deliciously stylish strip in the heart of Noosa. Just walking distance from the main beach, you could be soaking up UV rays on the sand and hitting the strip for some retail therapy within minutes. Shop till you drop along Hastings Street with a range of high-end boutiques, signature local designers and your favourite labels dotted in between. Some of the best bars and restaurants line the Hasting Street strip from cute cocktail bars to local favourites. And let?s not forget, Noosa is home to the Noosa Food and Wine Festival where you can taste some of Australia?s best food and wine in an event for all senses over a weekend in May. Less than 30 minutes? drive outside of Noosa is one of Australia?s best art and craft markets, the Eumundi Markets. Known for their locally made artisan treasures, the Eumundi Markets are open every Wednesday and Saturday morning and you can bet your bottom dollar you won?t be able to leave without taking home a unique handmade gift or some delicious produce from one of the 500 market stalls. Lace up your sneakers and explore the jaw-droopingly beautiful walk through Noosa National Park. The 15km of walking tracks will provide you with some of the most incredible natural scenery in South East Queensland, from secluded coves to rugged coastal tracks and 360-degree views from the headland at Noosa Heads. You won?t need any koalafications to catch the local wildlife on your walk with koalas nestled in the trees and pods of dolphins visible from the clifftops. The fairy pools in Noosa National Park are the best places to cool off and it can be worth your while to BYO snorkel to see the coral and sponges beneath the rocks at low tide. Paddle around a 60km stretch of reflective, pristine water that is the Noosa Everglades. One of only two everglades in the world, this wetland wilderness rich with flora and fauna is one of Queensland?s best kept secrets just waiting to be explored. Here are four reasons to do the Noosa Everglades, so put this epic experience on your bucket list pronto.', 40, 20, 3, './images/S01S.jpg'),
(8, 'Fraser Island Short Term Package', 'Enjoy the best of the bush from your private deck or get out on those timber walkways and go explore the world?s largest sand island. Whist here you will drive across the world Heritage ? listed Fraser Island on the 4WD guided tour checking out the rusting hulk of the Maheno shipwreck and the coloured sands of the Pinnacles. There will be time to chill on 75 Mile Beach and you will visit Wanggoolba Creek and Lake McKnezie. After your accommodation in the Hervey Bay, barge transfers to and from the island, 4WD touring, meal and overnight accommodation in the Eurong Beach Resort included, there really is no better way to discover the many sights of Fraser Island! Swim in the beautiful Lake McKnezie, walk through ancient rainforests, and circle the spooky Maheno Shipwreck. Then back to the mainland and off to the Airlie Beach to check in for your yaching romp! Get ready to cruise around idyllic beaches, swim in picture perfect waters and enjoy daily cold ones with your shipmates. Start with a morning dip and then take advantage of numerous snorkelling and scuba diving activities on offer. Head back to Airlie Beach in the afternoon and, after one final night with the group.', 50, 20, 3, './images/S02S.jpg'),
(9, 'Sunshine Coast Beach Trip', 'The stretch of beaches from Mooloolaba to Coolum forms the heart of the Sunshine Coast with plenty of activities for the whole family to enjoy. Embrace the laid back attitude and beach hop from Alexandra Headlands to Coolum Beach. Hang ten with the surfers, frolic along the sandy shore or enjoy an alfresco barbecue in your personal \'open air\' kitchen. Test your SUP skills at Cotton Tree or hire a boat and go fishing on the Maroochy River. However you choose to enjoy the water, Mooloolaba to Coolum will keep the good times rolling from dawn to dusk. Named by Lieutenant James Cook during his epic voyage along Australia\'s east coast, the Glass House Mountains are intrusive plugs formed by volcanic activity millions of years ago. Enjoy scenic views from the lookout in Beerburrum State Forest or explore one of the walking tracks through open forests to lookouts offering panoramic views. Chase waterfalls and enjoy the scenic lookouts from the quaint country towns of Maleny and Montville, through to Kenilworth. Along the way, explore the boutiques and discover the thriving art trial showcasing local artists and their original works.  Discover the heritage village of Yandina and visit the Ginger Factory or visit the iconic Big Pineapple in Nambour. Disconnect from the rush of everyday life and soak up kilometres of family-friendly beaches from Caloundra to Kawana on the southern end of the Sunshine Coast. Whatever your family\'s interest, you\'re guaranteed to find something epic to do. Let the kids loose in the fountain play-area at Kings Beach and watch a surf carnival at Dicky Beach. Stroll or cycle the Caloundra Coastal walk, stretching from Golden Beach to Currimundi Lake, stopping off at waterfront cafes along the way. Make a day of it at Australia Zoo, Aussie World or the Big Kart Track. Step aside, gymnasiums. Mother Nature\'s calling with plenty of natural assets that encourage heart-pumping, sweat-dripping antics and will leave you throwing active anecdotes around like glitter. Catch a wave at Moffat Beach or play a round at the Greg Norman-designed golf course at Pelican Waters. Cruise the Pumicestone Passage in the shadow of the Glass House Mountains, home to more than 300 species of birds. Hit the surf at Kawana or pack a picnic and watch the yachts sail in at Point Cartwright.', 55, 0, 3, './images/S03S.jpg'),
(10, 'Great Barrier Reef Relax Trip', 'The Great Barrier Reef is the world?s largest and longest coral reef system, stretching for 2,300km from the tip of Cape York in the north to Bundaberg in the south. Comprising 3,000 separate reefs and some 900 continental islands and coral cays, it?s one of the world?s great natural wonders. Home to over 1,500 species of fish, abundant marine life and over 200 types of birds, it?s also one of Australia?s greatest conservation successes. The reef?s islands range from tiny rocky outcrops, to sprawling national parks of untouched rainforest, to exclusive private resorts fringed with powder-white beaches. In the centre, the Whitsundays ? an archipelago of 74 islands ? can accessed by flying directly to Hamilton Island (the islands? main hub), or by ferry from Airlie Beach, the closest hub on the mainland. Stay on popular Whitsunday holiday locations like Hamilton Island and Long Island?s Palm Bay Resort. On the Southern Great Barrier Reef, Heron Island is an eco-haven, with turtle nesting sites and an on-site research station. At the northern end of the reef, Lizard Island ? 240km north of Cairns ? is home to an ultra-luxe retreat with just 40 rooms. The Great Barrier Reef Marine Park is home to a complex yet fragile ecosystem that, with almost three million visitors each year, requires ?careful management and conservation strategies. Sustainability is key and tourism operators play a crucial role in protecting and advocating that coral and marine life are preserved. Visitors, too can play an important role: look for and book with a high standard operator (those who have Ecotourism Australia or Earth Check certification) to make a direct contribution to the conservation of the reef. High standard operators include an environmental management charge (EMC) of $6.50 as part of their ticket price. You can also get involved with a number of organisations, including Citizens of the Great Barrier Reef, Reef Check Australia, Reef Teach and the Great Barrier Reef Foundation, many of which offer volunteerisms opportunities to help clean up the reef, monitor wildlife and collect invaluable data. Many tourism operators also encourage guests to act as ?citizen scientists?, report observations and wildlife sightings via on the Eye on the Reef app. The Great Barrier Reef?s extraordinary biodiversity of species and habitats make it one of the most complex natural systems on Earth. It?s home to an incredible array of marine animals, including six of the world?s seven marine turtle species, important dugong populations and Australia?s underwater answer to Africa?s Big Five game animals, The Great Eight (giant clams, manta rays, sharks, turtles, whales (both humpbacks and minkes), potato cod, Maori wrasse and clown fish).', 60, 0, 4, './images/C01S.jpg'),
(11, 'Daintree Rainforest Origin Trip', 'Stretching from Daintree Village across the river, the Daintree encompasses Cape Kimberley, Cow Bay, Thornton\'s Peak, Cooper Creek, Thornton Beach, Noah Valley, Cape Tribulation and the Bloomfield Track to the north. This is the home of the world\'s oldest surviving rainforest with examples of plant species that existed millions of years ago. Be dwarfed by king ferns and giant bull kauri pines, watch for the flash of blue that gives away the cassowary moving through the evergreen forest or discover tiny fish in cool freshwater pools. Winding for 140 kilometres, the Daintree River is one of the longest rivers on Australia\'s east coast providing diverse habitats for many species. Cruise along it to spot prehistoric crocodiles and colourful birds or join a fishing charter to haul in a mighty barramundi. Guided walks, Four Wheel Drive or Eight Wheel Drive tours also give an insight into this special environment. Sir David Attenborough described the Daintree rainforest as extraordinary after a recent visit filming in the area, telling viewers around the world he was particularly impressed with the region\'s diverse birdlife. Daintree village has a number of eateries, artists\' studios, local souvenir shops and a general store with a post office, bottle shop and information and tour booking centre. It is the last stop-off before the Daintree River Ferry which takes you across the river even deeper into the Daintree rainforest. Choose to stay in a discreet eco-resort, amazing tree house, join the fun crowd at a backpacker resort or get to know the locals at an intimate bed and breakfast. Venture out at night when the rainforest puts on a spectacular show with mammals emerging for midnight feasts, bush turkeys hosting noisy parties and frogs providing the rainforest chorus.', 73, 0, 4, './images/C02S.jpg'),
(12, 'Great Barrier Reef Open Water Wonderful Package', 'The popular learn to dive option is a great way to discover the surrounding beauty of Cairns. You will spend two days learning the SCUBA basics in a controlled poll environment before completing your PADI Open Water on a live aboard experience over the Great Barrier Reef. Once certified, you will get six additional fun dives, including a guided night rive and a ?Shark in the Dark? experience! After the certificated up, you can have the next level Advanced Open Water experience. The Advanced experience consists of five training dives, six fun dives and two nights living aboard on the Great Barrier Reef. All the passengers must present their Dive Card at the beginning of the trip in order to participate in the certified dives and there will be plenty of time to discover the reef?s fantastic variety of fish and coral. You will learn the art of a successful night dives as well as how to navigate on dives below 18 meters. The Ocean Quest boat will treat you to breakfasts, buffet lunches and starlit dinner to make sure you maintain a certain buoyancy. Plus, there is a fully licensed bar on board so ease into those social evening on deck.', 78, 0, 4, './images/CO3S.jpg');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`DestinationID`);

--
-- 資料表索引 `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`PackageID`) USING BTREE,
  ADD KEY `DestinationID` (`DestinationID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `destination`
--
ALTER TABLE `destination`
  MODIFY `DestinationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表 AUTO_INCREMENT `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表 AUTO_INCREMENT `package`
--
ALTER TABLE `package`
  MODIFY `PackageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`DestinationID`) REFERENCES `destination` (`DestinationID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
