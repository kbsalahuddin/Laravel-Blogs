-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 09:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleId` bigint(20) UNSIGNED NOT NULL,
  `categoryId` int(11) NOT NULL,
  `authorId` int(11) NOT NULL,
  `articleName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleSubHead` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleBody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`articleId`, `categoryId`, `authorId`, `articleName`, `articleSubHead`, `articleBody`, `articleImage`, `articleStatus`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Will Sudan’s Revolution Succeed?', '"We’ve been ruled by military\r\ndictatorships for over 50 years.\r\nWe cannot accept another one."', 'Representatives of the protesters had been in talks with the military over who would take control following the ousting of long-time President Omar al-Bashir. But negotiations collapsed when a military crackdown on 3 June left dozens of protesters dead. The army said it had scrapped all agreements with the opposition, and that elections would be held within nine months. But the protest movement insisted a transition period of at least three years was needed to ensure elections are free and fair. Much of the country was then shut down by an open-ended strike called by the opposition. Amid the deadlock, an envoy from Ethiopia was brought in to mediate and said talks between the two sides could resume soon. Here&#39;s what you need to know. How did it all begin? The unrest in Sudan can be traced back to December 2018, when President Bashir&#39;s government imposed emergency austerity measures in an attempt to stave off economic collapse. Cuts to bread and fuel subsidies sparked demonstrations in the east over living standards and the anger spread to Khartoum. The protests broadened into demands for the removal of Mr Bashir - who had been in charge for 30 years - and his government. Image copyrightAFP Image captionPresident Omar al-Bashir was overthrown in a coup in April The protests reached a climax on 6 April, when demonstrators occupied the square in front of the military&#39;s headquarters to demand that the army force the president out. Five days later, the military announced that the president had been overthrown. So who is in charge now? A council of generals assumed power on 11 April but it has struggled to return normality to the country. The seven-member Transitional Military Council (TMC) is led by Lt-Gen Abdel Fattah Abdelrahman Burhan. The council says it needs to be in charge to ensure order and security. But the army is not a unified force in Sudan. There are other paramilitary organisations and various Islamist militias that hold some sway. How protesters keep going during Ramadan The art fuelling Sudan&#39;s revolution &#39;Why Sudan is shooting medics&#39; The military has also faced international condemnation for launching a violent attack on protesters in Khartoum on 3 June which reportedly left at least 30 dead. The US condemned what it called a &quot;brutal attack&quot; and the UK said the military council bore &quot;full responsibility&quot;. In response, the TMC expressed &quot;sorrow for the way events escalated&quot;, saying that the operation had targeted &quot;trouble makers and petty criminals&quot; . Who are the opposition? The economic problems brought Sudanese from all walks of life to the streets, but the organisation of demonstrations was taken on by&nbsp;the Sudanese Professionals Association (SPA) - a collaboration of doctors, health workers and lawyers. The protesters are mostly young, reflecting the country&#39;s demographics, but people of all ages have been seen in the crowds. Women are at the forefront of the demonstrations and a video of a woman who has been named Kandaka, meaning Nubian queen, leading the chants has gone viral. When the military took power in April, demonstrators stayed put outside its headquarters and insisted that it transfer authority to a civilian administration. Talks between the ruling generals and the protest organisers, who have come together under the umbrella group Alliance for Freedom and Change, initially showed little sign of progress, but they eventually came to an agreement. What did the two sides agree? The military and protesters agreed on 15 May to a three-year transition periodto civilian rule. Demonstrators argue that Mr Bashir&#39;s regime is so deeply entrenched that a long transition is needed to dismantle his political network and allow fair elections. The two sides also agreed on the structure of a new government - including a sovereign council, a cabinet and a legislative body. But the military leaders scrapped all of these agreements on 3 June and said fresh elections would be held within nine months. The TMC&#39;s head said they had decided to &quot;stop negotiating with the Alliance for Freedom and Change and cancel what had been agreed on&quot;. Former British ambassador to Sudan, Rosalind Marsden, told the BBC that the snap election would &quot;simply pave the way for much of the old regime to come back into power&quot;. The announcement came shortly after the violent crackdown on protesters in Khartoum. In the wake of killings, the leaders of the pro-democracy movement said they were cutting all contact with the TMC and called for &quot;total civil disobedience&quot; and a general strike. What about mediation? When talks broke down, Ethiopian Prime Minister Abiy Ahmed flew to Sudan to try to broker a new agreement between the two sides. After days of talks, his special envoy, Mahmoud Dirir, announced on 11 June that protest leaders had agreed to suspend widespread strikes and return to the negotiating table. Mr Dirir said that, in return, the military had agreed to release political prisoners. No firm date for the resumption of talks was given. The privately-owned Baj News website reported that the opposition was insisting on an independent investigation into the violent crackdown before direct talks restart. What has the international response been? Most African and western countries have backed the protesters. Saudi Arabia has urged discussions between the two sides, but not directly condemned military violence. Along with UAE and Egypt, it perhaps fears the protests could inspire similar events to take place on home turf. The TMC&#39;s vice president, Mohamed Hamdan Dagolo, also known as Hemeti, flew to Saudi Arabia last month to meet the crown prince Mohamed Bin Salman, promising to stand with the kingdom against threats and continue sending Sudanese troops to help the Saudi-led coalition in Yemen. The African Union (AU) has suspended Sudan from its membership until a civilian led transitional authority is established. The UN is removing all non-essential staff from Sudan but China and Russia have blocked moves to impose sanctions. The US National Security Advisor, John Bolton, condemned the Khartoum violence, calling it &quot;abhorrent&quot;. But the BBC Africa editor Fergal Keane said this will only mean something if the US demands that its regional allies - Egypt, Saudi Arabia and the United Arab Emirates - exert pressure on the Sudanese military.', 'articleImages/sudanA.png', 'published', '2019-07-16 10:26:28', '2019-07-17 01:01:58'),
(2, 1, 2, 'Engage children in cultural practices, President to guardians', 'President Abdul Hamid calls upon the guardians to inspire their children to engage in cultural practices alongside their academic activities.', '&quot;Everyone should come forward to nurture and develop healthy culture. I call upon the guardians to encourage your children in cultural practices alongside the academic activities. Because, practice of good qualities plays an important role in the development of human values, patriotism, liberation war and non-communal spirit.&quot;\r\n\r\nHe said this while delivering his speech as the chief guest at Shilpakala Padak 2018 awarding ceremony.\r\n\r\n&quot;No one is born with culture. Culture has to be achieved through continuous practice. A cultured person can never do harm to society. Therefore, to overcome the filthiness of society, culture has to be used as a tool,&quot; he also said.\r\n\r\nTerming culture as a tool for preventing social degradation, the President said, &quot;Development of culture is very important for eradicating militancy, fundamentalism and hatred from society. &quot;\r\n\r\n&nbsp;\r\n\r\n&quot;An enlightened society can build a humane society, and ensure the desired prosperity and welfare of a country and nation,&quot; he also said.\r\n\r\n&quot;There have been many changes in society with the passage of time. It also touches the culture. For the expansion of satellite culture, the culture of foreign countries is entering into our own culture.&quot;\r\n\r\nThe President also urged all to shun the mentality of taking everything from foreign culture.\r\n\r\nHe said,&quot;You have to take as much asit is relevant to our culture and heritage. Everything which is unnecessary, foreign and bad culture must be abhorred.&quot;\r\n\r\nSeven personalities received &#39;Shilpakala Padak 2018&#39; for their contributions to their respective fields.\r\n\r\nThey are - Goura Gopal Haldar (vocal), Sunil Chandra Das (instrumental), M Hamid (dramatics), Mina Barua (folklore), Alokesh Ghosh (fine arts), Shukla Sarkar (dance) and Jayanta Chattopadhyay (recitation).\r\n\r\nState Minister for Cultural Affairs KM Khalid was present as special guest while additional secretary Abu Hena Mostofa Kamal chaired the event.\r\n\r\nBSA director Liaquat Ali Lucky delivered the welcome speech at the event.\r\n\r\nEach awardee got a gold medal, a cheque for Tk 1 lakh and a certificate.\r\n\r\n&nbsp;', 'articleImages/hamid.jpg', 'published', '2019-07-18 08:17:09', '2019-07-18 08:17:09'),
(3, 3, 3, 'Ranga announces Quader JP chairman', 'Jatiya Party Secretary General Moshiur Rahman Ranga today announced lawmaker Golam Mohammad Quader as the party''s chairman.', 'The announcement has been made following an organisational directive which was given by HM Ershad before he fell ill, a party press release reads quoting JP leader Ranga.\r\n\r\nIn absence of the party&#39;s chairman, Kader will take over the responsibility as a chairman, Ranga said.\r\n\r\nRanga urged the media to address Kader as the chairman of the party.\r\n\r\nGolam Mohammad&nbsp;Quader stated that everyone in the Jatiya Party are united and there is no division, the press release said.\r\n\r\nThe vacant post of Ershad will be finalized in a forum following the party&#39;s constitution, Quader added.\r\n\r\nJP will inform the Speaker about the leader of the opposition in the parliament after it holds discussion among its members, he added.\r\n\r\nOn July 14, Jatiya Party Chairman and former president HM Ershad passed away at Combined Military Hospital (CMH) in Dhaka at the age of 90.\r\n\r\nErshad, also the leader of the opposition in the Parliament and a five-time MP, had long been suffering from various ailments including infection in his lungs and kidneys and was admitted to CMH on June 26 and was kept at the Intensive Care Unit (ICU). His condition later deteriorated and was kept on oxygen support on June 30.', 'articleImages/gm-kader.jpg', 'published', '2019-07-18 08:21:15', '2019-07-18 08:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorId` bigint(20) UNSIGNED NOT NULL,
  `authorName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorEdu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorAward` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorAge` int(11) NOT NULL,
  `authorImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorEmail` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorId`, `authorName`, `authorEdu`, `authorAward`, `authorAge`, `authorImage`, `authorEmail`, `authorStatus`, `created_at`, `updated_at`) VALUES
(1, 'Martin Amis', 'Exeter College, Oxford, UK', 'James Tait Black Memorial Prize, Listed twice for Booker Prize', 69, 'authorImages/martin_amis.jpg', 'mail@wylieagency.co.uk', 'active', '2019-07-16 02:08:47', '2019-07-16 07:20:25'),
(2, 'Paul Auster', 'Columbia University, NYC, USA', 'Booker Prize Shortlisted ''17, NYC Literary Honors ''12, International Dublin Literary Award ''12-''10', 72, 'authorImages/p_auster.jpg', 'contact@faber.co.uk', 'active', '2019-07-16 06:45:34', '2019-07-16 06:45:34'),
(3, 'Julian Barnes', 'Magdalen College, Oxford, UK', 'Siegfried Lenz Prize ''16,  Zinklar Award ''15, Europese Literatuurprijs ''12', 73, 'authorImages/jBarnes.jpg', 'jpickering@penguinrandomhouse.co.uk', 'active', '2019-07-16 06:50:18', '2019-07-16 06:50:18'),
(4, 'Saul Bellow', 'University of Chicago, Northwestern University, University of Wisconsin', 'Chicago Literary Hall of Fame, Medal for Distinguished Contribution to American Letters, National Medal of Arts', 89, 'authorImages/sBellow.jpg', 'global@penguinouse.com', 'inactive', '2019-07-16 06:56:56', '2019-07-16 06:56:56'),
(5, 'T.C. Boyle', 'State University of New York at Potsdam (B.A.), University of Iowa Writers'' Workshop (M.F.A), University of Iowa (Ph.D.)', 'Rea Award, Best American Stories selection, Induction into the American Academy of Arts and Letters', 70, 'authorImages/tc_boyle.jpg', 'borchardt@georges.com', 'active', '2019-07-16 07:02:19', '2019-07-16 07:02:19'),
(6, 'A. S. Byatt', 'Newnham College, Cambridge, Bryn Mawr College, Somerville College, Oxford, UK', 'Hans Christian Andersen Literature Award,  Park Kyong-ni Prize,  Fellow of the British Academy', 82, 'authorImages/at_byatt.jpg', 'zoewaldie@rcwlitagency.com', 'active', '2019-07-16 07:07:33', '2019-07-16 07:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`, `categoryStatus`, `created_at`, `updated_at`) VALUES
(1, 'BDs', 'published', '2019-07-16 00:24:15', '2019-07-16 00:56:46'),
(2, 'Worlds', 'published', '2019-07-15 00:40:15', '2019-07-16 00:20:48'),
(3, 'Politics', 'published', '2019-07-15 00:41:49', '2019-07-15 00:41:49'),
(4, 'Business', 'published', '2019-07-15 00:42:38', '2019-07-15 00:42:38'),
(5, 'Science', 'published', '2019-07-15 00:43:00', '2019-07-15 10:52:06'),
(6, 'Sports', 'published', '2019-07-15 00:43:14', '2019-07-15 00:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_14_160714_create_categories_table', 2),
(4, '2019_07_15_165631_create_authors_table', 3),
(5, '2019_07_16_143325_create_articles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'KBS', 'kbs@mail.com', NULL, '$2y$10$anK3.X2joodpaGTyrZZnGuENgVOBSovmJOYVW4YLtXEBS44DD2.iW', NULL, '2019-07-14 07:34:02', '2019-07-14 07:34:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorId`),
  ADD UNIQUE KEY `authors_authoremail_unique` (`authorEmail`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articleId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
