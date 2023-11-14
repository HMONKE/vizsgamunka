-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Nov 15. 00:49
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Weapons'),
(2, 'Helmets'),
(3, 'Spells');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `addres` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `contacts`
--

INSERT INTO `contacts` (`id`, `addres`, `phone`, `email`) VALUES
(1, 'Kingdom of Drangleic', '911', 'dark@souls.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `product_id`, `product_quantity`) VALUES
(3, 23099, 2, 1),
(4, 23099, 3, 1),
(6, 74644, 4, 1),
(7, 78836, 1, 1),
(9, 78836, 5, 1),
(10, 80605, 2, 1),
(11, 80605, 5, 1),
(12, 80605, 6, 1),
(13, 99712, 7, 1),
(14, 99712, 18, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_desc`, `price`, `stock`, `image`, `featured`, `category_id`) VALUES
(1, 'Dancer\'s Enchanted Swords', 'Paired enchanted swords that Pontiff Sulyvahn bestowed upon the Dancer of the Boreal Valley. These blades, symbollic of the Dancer\'s vows, are enchanted with dark magic in the right hand, and fire in the left, mirroring the Pontiff.\r\n\r\nSkill: Dancer\'s Grace\r\nUnleash the fury of both blades in a dancing spin motion and use strong attack to continue the performance until stamina is exhausted. ', 7500, 3, 'weapon1.png', 0, 1),
(2, 'Smough\'s Great Hammer', 'Twisted great Hammer associated with Smough, the last knight to remain at his post, guarding the ruined cathedral.\r\n\r\nRestore HP while attacking, a carryover from Smough\'s past as an executioner.\r\n\r\nSkill: Perseverance\r\nAnchor weapon in earth to temporarily boost poise. Damage reduced while activated.', 12000, 13, 'weapon2.png', 1, 1),
(3, 'Wolnir\'s Holy Sword', 'A holy sword eroded by the Abyss. When Wolnir fell to the Abyss, he was gripped by a fear of true darkness, and pleaded to the gods for the first time.\r\n\r\nThis holy sword, together with three armlets stripped from the corpses of clerics, gave him some semblance of comfort.\r\n\r\nSkill: Wrath of the Gods\r\nThrust weapon into earth to emit powerful shockwave. The wrath of those swallowed by the Abyss is a thing to be wary of indeed.', 6500, 32, 'weapon3.png', 0, 1),
(4, 'Millwood Knight Helm', 'Helm worn by knights of Millwood. Adorned with antlers believed to grow from the blessed beast of the Ethereal Oak.\r\n\r\nWhen the fabled Millwood forest was discovered it was a vacant ruin. The only thing left was the Ethereal Oak, stood rotting. No corpses were discovered, yet their belongings lay neatly on the ground.', 5000, 48, 'helmet1.png', 0, 2),
(5, 'Wolnir\'s Crown', 'Crown of Wolnir, the Carthus conqueror.\r\n\r\nOnce upon a time, such things were bequeathed judiciously to each of the rightful lords, until Wolnir brought them to their knees, and ground their crowns to dust. Then the crowns became one, and Wolnir, the one High Lord.', 15000, 1, 'helmet2.png', 1, 2),
(6, 'Outrider Knight Helm', 'Armor of an Irithyll outrider knight. Enveloped in a dimly cool air.\r\n\r\nThe knights were given the eyes of the Pontiff, but the eyes transformed them into savage, raving warriors who only knew how to serve as mindless guards.', 5500, 35, 'helmet3.png', 0, 2),
(7, 'Great Chaos Fire Orb', 'Art of the Flame of Chaos, from Ancient Izalith. Hurls a great chaos fire orb.\r\n\r\nChaotic flame melts even great boulders, and creates a brief surge of molten lava on impact.\r\n\r\nThe Witch of Izalith and her daughters birthed the Flame of Chaos, but it devoured them along with their home.', 10000, 42, 'spell1.png', 0, 3),
(8, 'Lightning Stake', 'A lost dragonslaying miracle.\r\n\r\nStrikes with a stake of lightning.\r\n\r\nThis tale describes the lost practices of ancient dragonslayers, who found that in order to pierce dragonscale, lightning should not be hurled as a bolt, but rather be thrust as a stake directly into the dragon\'s hide, to be truly effective.', 9000, 57, 'spell2.png', 0, 3),
(9, 'Dead Again', 'Sacrilegious miracle of the Sable Church of Londor.\r\n\r\nBless corpses, transforming them into traps.\r\n\r\nLondor, the Hollow Realm, is a society of undead, comprised of the corpses and shades of those who led unsavory lives. Is such blessing really something one must ponder?', 5000, 23, 'spell3.png', 0, 3),
(10, 'Lifehunt Scythe', 'Miracle of Aldrich, Devourer of Gods.\r\n\r\nSteals HP of foes using an illusory scythe.\r\n\r\nAldrich dreamt as he slowly devoured the God of the Darkmoon. In this dream, he perceived the form of a young, pale girl in hiding.', 5000, 96, 'spell4.png', 0, 3),
(11, 'Great Soul Dregs', 'A sorcery that fires great dark soul dregs that have stewed for ages, far within the deep.\r\n\r\nThis sorcery is the highest form of Deep Soul\r\n\r\nSome of the murkmen who rise from the depths are possessed by soul dregs, which have a grave likeness to the human form', 8900, 32, 'spell5.png', 0, 3),
(12, 'Black Serpent', 'Pyromancy discovered from the Abyss by High Lord Wolnir that inspired the black arts of the grave wardens. \r\n\r\nReleases undulating black flames that trace the ground.\r\n\r\nBe it sorcery or pyromancy, all techniques that infringe on humanity lead to the same place. That is to say, they all seek a will of their own.', 23000, 14, 'spell6.png', 1, 3),
(13, 'Helm of Favor', 'Helm of the pitiable Embraced Knight.\r\nDepicts the affection of goddess Fina.\r\n\r\nAdrift on sea of isolation, only his faith in the love of his goddess remained true, and so the knight forsook all else.', 7000, 22, 'helmet4.png', 0, 2),
(14, 'Dark Mask', 'Bone Mask of the Darkwraiths, relics of a small country that fell to the dark long ago.\r\nLooks as if it may crumble to dust at any moment.\r\n\r\nThe Darkwraiths were the oldest of the Red Eye Invaders, and rumored to have served a Primordial Serpent.', 6000, 41, 'helmet5.png', 0, 2),
(15, 'Gundyr\'s Helm', 'Ancient helm of a set of cast iron armor, belonging to Champion Gundyr. Modeled after a former king.\r\n\r\nGundyr, or the Belated Champion, was bested by an unknown warrior. He then became sheath to a coiled sword in the hopes that someday, the first flame would be linked once more.', 8000, 74, 'helmet6.png', 0, 2),
(17, 'Chaos Blade', 'A cursed sword of unknown origin bearing uncanny streaks on its blade.\r\n\r\nAttacks also damage its wielder.\r\n\r\nThe sword is not unlike a thing misshappen, granted life, but never welcome in this world. In other words, chaos itself.\r\n\r\nSkill: Hold\r\nAssume a holding stance to rapidly execute a lunging slash with normal attack, or a deflecting parry with strong attack.', 13500, 4, 'weapon5.png', 0, 1),
(18, 'Morion Blade', 'A twisted sword resembling the towers of Londor\'s Sable Church. Eight branching blades and thorns induce bleeding.\r\n\r\nThe church\'s blessing makes the weapon revel in the agony of its owner. Heavy losses of HP boost attack, a curse most befitting its deformed appearance.\r\n\r\nSkill: Stance\r\nWhile in stance, use normal attack to break a foe\'s guard from below, and a strong attack to slash upwards with a forward lunge.', 4500, 94, 'weapon4.png', 0, 1);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
