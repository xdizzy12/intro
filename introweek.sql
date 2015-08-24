-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 aug 2015 om 12:13
-- Serverversie: 5.6.25
-- PHP-versie: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `introweek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`) VALUES
(1, 'Home', 'Leggings drinking vinegar narwhal, synth next level sustainable messenger bag occupy 8-bit skateboard. Retro keytar High Life, fanny pack Schlitz gastropub banh mi VHS Tumblr +1 health goth PBR&B heirloom YOLO flannel. Pickled tattooed hella listicle banh mi aesthetic. Gastropub before they sold out cronut, Pinterest paleo tattooed forage tilde. Umami quinoa Wes Anderson, chambray fanny pack kitsch scenester retro photo booth butcher fingerstache Bushwick aesthetic before they sold out banh mi. Marfa try-hard cold-pressed lomo tilde chia. Put a bird on it before they sold out selfies, selvage crucifix migas 8-bit kale chips squid.\r\n\r\nHoodie plaid tofu readymade trust fund distillery. Whatever Vice hoodie, trust fund bespoke cronut kale chips semiotics crucifix keffiyeh Intelligentsia cardigan chia lumbersexual Wes Anderson. Meditation freegan chillwave tilde, yr deep v tattooed roof party scenester polaroid shabby chic try-hard vegan. Pop-up Pitchfork selvage fanny pack, cardigan Brooklyn ennui tattooed dreamcatcher flexitarian jean shorts yr food truck. YOLO Pitchfork Bushwick synth. Godard vegan Schlitz, sustainable retro umami wayfarers church-key. Neutra occupy bespoke, Brooklyn quinoa polaroid four loko salvia 90''s High Life dreamcatcher trust fund Austin.\r\n\r\nDrinking vinegar plaid vegan shabby chic selvage cornhole. Pop-up pug deep v, beard Echo Park cliche 90''s quinoa Bushwick Schlitz cornhole direct trade forage typewriter. Bushwick twee iPhone forage, bicycle rights High Life flexitarian Carles raw denim PBR shabby chic banh mi you probably haven''t heard of them chia. Pour-over artisan scenester PBR&B tote bag viral Blue Bottle, Wes Anderson brunch jean shorts aesthetic selfies Banksy gluten-free hella. Umami lumbersexual wayfarers Wes Anderson, PBR&B normcore selfies keffiyeh stumptown Helvetica pork belly Echo Park. Quinoa raw denim shabby chic wolf pour-over squid. Echo Park Carles artisan, mustache chillwave American Apparel Intelligentsia flexitarian street art Williamsburg yr chia.\r\n\r\nUgh vinyl keffiyeh crucifix, 3 wolf moon cornhole brunch Marfa deep v Intelligentsia leggings twee Echo Park banh mi cred. Hella street art biodiesel cred VHS. Yr keffiyeh seitan quinoa Williamsburg, leggings kitsch YOLO Neutra irony raw denim put a bird on it sustainable. Sriracha locavore fashion axe, wayfarers DIY paleo pickled. Wes Anderson meggings YOLO mumblecore, freegan fashion axe PBR&B vegan you probably haven''t heard of them tousled listicle cornhole umami. Quinoa kitsch banjo Bushwick Neutra crucifix. IPhone fashion axe quinoa irony cray selfies.'),
(2, 'Contact', 'Chillwave polaroid sartorial direct trade gentrify. Polaroid lumbersexual bicycle rights, Echo Park kitsch plaid pop-up before they sold out flannel pickled drinking vinegar. Godard Wes Anderson tattooed Echo Park. Single-origin coffee salvia distillery Carles post-ironic, Echo Park normcore Austin cardigan cold-pressed heirloom aesthetic chia. Fixie letterpress XOXO, biodiesel Wes Anderson bespoke mixtape Schlitz bicycle rights pour-over listicle cornhole blog pop-up Austin. Chillwave you probably haven''t heard of them sartorial, kogi health goth trust fund asymmetrical seitan kale chips keffiyeh PBR authentic bespoke aesthetic. Beard PBR hashtag try-hard vegan.\r\n\r\nXOXO raw denim kogi paleo tousled, letterpress tilde typewriter quinoa chambray mlkshk whatever shabby chic locavore. Organic vegan asymmetrical butcher pork belly, ennui flexitarian swag migas post-ironic whatever ugh Etsy. Art party letterpress American Apparel shabby chic hashtag, High Life fanny pack taxidermy normcore. Seitan Helvetica Carles beard, organic ennui Shoreditch Pinterest bitters Intelligentsia tousled VHS. Brunch Etsy banh mi, asymmetrical heirloom stumptown paleo normcore 3 wolf moon single-origin coffee polaroid. Swag fixie skateboard Odd Future. Farm-to-table keytar Austin plaid 8-bit cronut cornhole DIY pour-over.\r\n\r\nBrooklyn cliche sartorial, quinoa High Life McSweeney''s meh. Artisan authentic DIY cardigan Echo Park. Polaroid fanny pack hoodie mixtape kitsch. Wayfarers street art kale chips next level, salvia gentrify Brooklyn Wes Anderson normcore. Vinyl four loko deep v, Thundercats Tumblr +1 you probably haven''t heard of them YOLO. Williamsburg iPhone master cleanse, beard vinyl tote bag skateboard aesthetic locavore next level. Try-hard bespoke bitters forage McSweeney''s pug.\r\n\r\nNormcore Williamsburg aesthetic, Shoreditch Banksy twee readymade Blue Bottle fingerstache tote bag mixtape heirloom mumblecore. Dreamcatcher cardigan squid 8-bit, migas XOXO synth Odd Future PBR bespoke try-hard mustache Blue Bottle. Viral polaroid sustainable, sartorial narwhal iPhone ethical banh mi butcher slow-carb banjo whatever try-hard fixie. Pinterest tilde Banksy next level, Brooklyn migas four dollar toast irony Pitchfork you probably haven''t heard of them. Aesthetic 90''s Vice meggings. Synth cronut shabby chic before they sold out, semiotics +1 meditation. Bushwick fingerstache Echo Park, readymade cold-pressed before they sold out health goth.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
