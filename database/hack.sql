-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2018 at 05:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `local_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`local_id`, `user_id`, `id`, `flag`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 1),
(7, 1, 7, 1),
(8, 1, 8, 1),
(9, 1, 9, 1),
(10, 1, 10, 1),
(11, 1, 11, 1),
(12, 1, 12, 1),
(13, 1, 13, 1),
(14, 1, 14, 1),
(15, 1, 15, 1),
(16, 1, 16, 1),
(17, 1, 17, 1),
(18, 1, 18, 1),
(19, 1, 18, 1),
(20, 1, 20, 1),
(21, 1, 21, 1),
(22, 1, 22, 1),
(23, 1, 23, 1),
(24, 1, 24, 1),
(25, 1, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `per_id` int(11) NOT NULL,
  `per_name` varchar(255) NOT NULL,
  `per_handel` varchar(255) NOT NULL,
  `per_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`per_id`, `per_name`, `per_handel`, `per_image`) VALUES
(1, 'Donald Trump', '@realDonaldTrump', './Assests/dt.jpg'),
(2, 'Rahul Gandhi', '@officeofrg', 'Assests/rg.jpg'),
(3, 'Mike Pence', '@mike_pence', 'Assests/mp.jpg'),
(4, 'Justine Bieber', '@justinbieber', 'Assests/jb.jpg'),
(5, 'Hillary Clinton', '@hillaryclinton', 'Assests/hc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `refs`
--

CREATE TABLE `refs` (
  `ref_id` int(11) NOT NULL,
  `tweet_id` int(11) NOT NULL,
  `ref_link` text NOT NULL,
  `ref_flag` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refs`
--

INSERT INTO `refs` (`ref_id`, `tweet_id`, `ref_link`, `ref_flag`) VALUES
(1, 1, 'https://www.politico.com/story/2018/01/26/trump-dreamers-daca-chuck-schumer-371279', ''),
(2, 2, 'http://www.bbc.com/news/business-42812453', '1'),
(3, 3, 'http://www.washingtonexaminer.com/trump-signs-fisa-reauthorization-says-different-from-law-that-was-so-wrongly-abused-during-the-election/article/2646505', ''),
(4, 4, 'We need the Wall for the safety and security of our country. We need the Wall to help stop the massive inflow of drugs from Mexico, now rated the number one most dangerous country in the world. If there is no Wall, there is no Deal!', ''),
(5, 5, 'https://www.reuters.com/article/us-usa-trump-tweet-factbox/trump-on-twitter-border-security-fake-news-kazakhstan-idUSKBN1F51RT', ''),
(6, 6, 'https://www.hindustantimes.com/india-news/bjp-s-use-of-hatred-violence-is-setting-india-on-fire-rahul-on-padmaavat-row/story-JWZe1z4EswcDzYzbhYHfqJ.html', ''),
(7, 7, 'https://economictimes.indiatimes.com/news/politics-and-nation/government-treating-migrant-workers-like-second-class-citizens-rahul-gandhi/articleshow/62495939.cms', '1'),
(8, 8, 'https://economictimes.indiatimes.com/news/politics-and-nation/rss-bjps-fascist-vision-is-dalits-should-remain-at-bottom-of-society-rahul-gandhi/articleshow/62340769.cms', ''),
(9, 9, 'http://indianexpress.com/article/india/rahul-gandhi-condoles-death-of-former-up-governor-banwari-lal-joshi-4994852/', '1'),
(10, 10, 'http://ummid.com/news/2018/January/04.01.2018/rahul-gandhi-about-make-in-india.html', ''),
(11, 11, 'https://secondnexus.com/news/donald-trump-steve-bannon-blame-ed-gillespie/', '1'),
(12, 12, 'http://www.news.com.au/finance/work/leaders/republican-tax-overhaul-could-benefit-us-president/news-story/0cccab8adb6458692b512ab0c9813c98', ''),
(13, 13, 'https://twitter.com/dprkwatch/status/925904154123489281', '1'),
(14, 14, 'https://www.nytimes.com/2017/12/01/us/politics/senate-tax-bill.html', ''),
(17, 20, 'https://www.lteshare.com/2017/09/13/60839/amazing-thanks-everyone-lets-keep-helping-eachother-https-twitter-com-billboard-status-907974662650564612/', '1'),
(18, 21, 'http://www.eonline.com/news/879614/justin-bieber-george-clooney-beyonce-and-more-stars-support-hand-in-hand-a-benefit-for-hurricane-relief', ''),
(19, 22, 'https://www.thestar.com/entertainment/music/2017/06/06/justin-bieber-takes-to-twitter-to-defend-his-penguins-jersey-leafs-above-all-but-.html', ''),
(20, 23, 'https://twitter.com/justinbieber', ''),
(21, 24, 'https://t.co/fgHHK6WVPg', '1'),
(22, 25, 'http://www.businessinsider.com/hillary-clinton-sexual-harassment-2008-burns-strider-2018-1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` int(11) NOT NULL,
  `code` text NOT NULL,
  `type` int(11) NOT NULL,
  `rate_up` int(11) NOT NULL DEFAULT '1',
  `rate_down` int(11) NOT NULL DEFAULT '1',
  `ref` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COMMENT='holds the tweets';

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `code`, `type`, `rate_up`, `rate_down`, `ref`) VALUES
(1, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">DACA has been made increasingly difficult by the fact that Cryinâ€™ Chuck Schumer took such a beating over the shutdown that he is unable to act on immigration!</p>&mdash; Donald J. Trump (@realDonaldTrump) <a href=\"https://twitter.com/realDonaldTrump/status/956938973326098432?ref_src=twsrc%5Etfw\">January 26, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 1, 1, 2, ''),
(2, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Tremendous investment by companies from all over the world being made in America. There has never been anything like it. Now Disney, J.P. Morgan Chase and many others. Massive Regulation Reduction and Tax Cuts are making us a powerhouse again. Long way to go! Jobs, Jobs, Jobs!</p>&mdash; Donald J. Trump (@realDonaldTrump) <a href=\"https://twitter.com/realDonaldTrump/status/956134228726558720?ref_src=twsrc%5Etfw\">January 24, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 1, 2, 1, ''),
(3, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Just signed 702 Bill to reauthorize foreign intelligence collection. This is NOT the same FISA law that was so wrongly abused during the election. I will always do the right thing for our country and put the safety of the American people first!</p>&mdash; Donald J. Trump (@realDonaldTrump) <a href=\"https://twitter.com/realDonaldTrump/status/954456754137501697?ref_src=twsrc%5Etfw\">January 19, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 1, 1, 2, ''),
(4, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">We need the Wall for the safety and security of our country. We need the Wall to help stop the massive inflow of drugs from Mexico, now rated the number one most dangerous country in the world. If there is no Wall, there is no Deal!</p>&mdash; Donald J. Trump (@realDonaldTrump) <a href=\"https://twitter.com/realDonaldTrump/status/953979393180950528?ref_src=twsrc%5Etfw\">January 18, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 1, 1, 2, ''),
(5, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">New report from DOJ &amp; DHS shows that nearly 3 in 4 individuals convicted of terrorism-related charges are foreign-born. We have submitted to Congress a list of resources and reforms....</p>&mdash; Donald J. Trump (@realDonaldTrump) <a href=\"https://twitter.com/realDonaldTrump/status/953406423177859073?ref_src=twsrc%5Etfw\">January 16, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 1, 1, 2, ''),
(6, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">There will never be a cause big enough to justify violence against children. Violence and hatred are the weapons of the weak. The BJP&#39;s use of hatred and violence is setting our entire country on fire.</p>&mdash; Office of RG (@OfficeOfRG) <a href=\"https://twitter.com/OfficeOfRG/status/956216093940461570?ref_src=twsrc%5Etfw\">January 24, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 2, 1, 2, ''),
(7, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Treating India&#39;s migrant workers like second class citizens is completely unacceptable. This action demonstrates BJPâ€™s discriminatory mindset.<a href=\"https://t.co/6iiOy2rPKC\">https://t.co/6iiOy2rPKC</a></p>&mdash; Office of RG (@OfficeOfRG) <a href=\"https://twitter.com/OfficeOfRG/status/952415825239175168?ref_src=twsrc%5Etfw\">January 14, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 2, 2, 1, ''),
(8, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">A central pillar of the RSS/BJPâ€™s fascist vision for India is that Dalits should remain at the bottom of Indian society. Una, Rohith Vemula and now Bhima-Koregaon are potent symbols of the resistance.</p>&mdash; Office of RG (@OfficeOfRG) <a href=\"https://twitter.com/OfficeOfRG/status/948158586676326400?ref_src=twsrc%5Etfw\">January 2, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 2, 1, 2, ''),
(9, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Deeply saddened by the passing away of Shri BL Joshi. A distinguished police officer and administrator, as Governor he discharged his duties with aplomb across U.P., Uttarakhand, Delhi and Meghalaya. A true son of Rajasthan, he will be deeply missed.</p>&mdash; Office of RG (@OfficeOfRG) <a href=\"https://twitter.com/OfficeOfRG/status/944192345540403200?ref_src=twsrc%5Etfw\">December 22, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 2, 2, 1, ''),
(10, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Guys a quick update on the Fake in India program.<a href=\"https://twitter.com/hashtag/FakeinIndia?src=hash&amp;ref_src=twsrc%5Etfw\">#FakeinIndia</a><a href=\"https://t.co/37SojCnXpM\">https://t.co/37SojCnXpM</a></p>&mdash; Office of RG (@OfficeOfRG) <a href=\"https://twitter.com/OfficeOfRG/status/948871858228682753?ref_src=twsrc%5Etfw\">January 4, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 2, 1, 2, ''),
(11, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">.<a href=\"https://twitter.com/EdWGillespie?ref_src=twsrc%5Etfw\">@EdWGillespie</a> will cut taxes, grow the economy &amp; support law enforcement - he will be a GREAT Governor for Virginia. Vote today!</p>&mdash; Mike Pence (@mike_pence) <a href=\"https://twitter.com/mike_pence/status/927885251233439745?ref_src=twsrc%5Etfw\">November 7, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 3, 2, 1, ''),
(12, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">With the support of FL and the leadership of <a href=\"https://twitter.com/POTUS?ref_src=twsrc%5Etfw\">@POTUS</a> Trump, we&#39;ll pass the largest tax cut in American historyâ€”and we&#39;ll pass it this year.</p>&mdash; Mike Pence (@mike_pence) <a href=\"https://twitter.com/mike_pence/status/926233363631001600?ref_src=twsrc%5Etfw\">November 2, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 0, 1, 2, ''),
(13, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">With Republican unity, we&#39;re already rebuilding our military, reviving our economy, and renewing our judiciary.</p>&mdash; Mike Pence (@mike_pence) <a href=\"https://twitter.com/mike_pence/status/923713809784758273?ref_src=twsrc%5Etfw\">October 27, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 3, 2, 1, ''),
(14, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Today, w/ the passage of the budget in the House, we have set the table to cut taxes for working families, small biz &amp; family farms.</p>&mdash; Mike Pence (@mike_pence) <a href=\"https://twitter.com/mike_pence/status/923713296456396800?ref_src=twsrc%5Etfw\">October 27, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 0, 1, 2, ''),
(15, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Today at <a href=\"https://twitter.com/The_RGA?ref_src=twsrc%5Etfw\">@The_RGA</a> I told my fellow Republicans that before the end of this year, under <a href=\"https://twitter.com/realDonaldTrump?ref_src=twsrc%5Etfw\">@realdonaldtrump</a>, weâ€™re going to CUT TAXES ACROSS THE BOARD for working families and businesses large and small. <a href=\"https://twitter.com/hashtag/RGA2017?src=hash&amp;ref_src=twsrc%5Etfw\">#RGA2017</a> <a href=\"https://t.co/XBQUGaShx8\">pic.twitter.com/XBQUGaShx8</a></p>&mdash; Mike Pence (@mike_pence) <a href=\"https://twitter.com/mike_pence/status/930954365334097921?ref_src=twsrc%5Etfw\">November 16, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 3, 1, 1, ''),
(16, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">A year of accomplishments under <a href=\"https://twitter.com/POTUS?ref_src=twsrc%5Etfw\">@POTUS</a>. 1.5 million new jobs. The stock market is setting records. POTUS stands without apology for law enforcement. He&#39;s rebuilding our military &amp; ISIS is on the run.<br><br>Read my op-ed in the <a href=\"https://twitter.com/USATODAY?ref_src=twsrc%5Etfw\">@USATODAY</a>: <a href=\"https://t.co/M5X4kXHw9v\">https://t.co/M5X4kXHw9v</a></p>&mdash; Vice President Mike Pence (@VP) <a href=\"https://twitter.com/VP/status/928277027123355649?ref_src=twsrc%5Etfw\">November 8, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 3, 2, 1, ''),
(17, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">I&#39;m honored. Thanks for all <a href=\"https://twitter.com/SBAList?ref_src=twsrc%5Etfw\">@SBAList</a> does for life. I&#39;m in. <a href=\"https://t.co/3wWGRHc7yU\">https://t.co/3wWGRHc7yU</a></p>&mdash; Mike Pence (@mike_pence) <a href=\"https://twitter.com/mike_pence/status/926940341361659905?ref_src=twsrc%5Etfw\">November 4, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 3, 1, 2, ''),
(20, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Amazing. Thanks everyone. Let&#39;s keep helping eachother. <a href=\"https://t.co/RNbmGPeJqX\">https://t.co/RNbmGPeJqX</a></p>&mdash; Justin Bieber (@justinbieber) <a href=\"https://twitter.com/justinbieber/status/907997636317257728?ref_src=twsrc%5Etfw\">September 13, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 4, 2, 1, ''),
(21, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Call me<br>1 (800) 258-6000<a href=\"https://twitter.com/hashtag/HandInHand?src=hash&amp;ref_src=twsrc%5Etfw\">#HandInHand</a></p>&mdash; Justin Bieber (@justinbieber) <a href=\"https://twitter.com/justinbieber/status/907753476502851584?ref_src=twsrc%5Etfw\">September 12, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 4, 1, 2, ''),
(22, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Leafs above all but other than that  u give me ANY JERSEY THAT LOOKS COOL ILL THROW IT ON</p>&mdash; Justin Bieber (@justinbieber) <a href=\"https://twitter.com/justinbieber/status/871872525910855680?ref_src=twsrc%5Etfw\">June 5, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 4, 1, 2, ''),
(23, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"et\" dir=\"ltr\">Elsa<br>Jasmine<br>Sara<br>Romee<br>Stella<br>Martha</p>&mdash; Justin Bieber (@justinbieber) <a href=\"https://twitter.com/justinbieber/status/871814885914562560?ref_src=twsrc%5Etfw\">June 5, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 4, 1, 2, ''),
(24, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">Nice <a href=\"https://t.co/fgHHK6WVPg\">https://t.co/fgHHK6WVPg</a></p>&mdash; Justin Bieber (@justinbieber) <a href=\"https://twitter.com/justinbieber/status/871367704124334081?ref_src=twsrc%5Etfw\">June 4, 2017</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 4, 2, 1, ''),
(25, '<blockquote class=\"twitter-tweet\" data-lang=\"en\"><p lang=\"en\" dir=\"ltr\">A story appeared today about something that happened in 2008. I was dismayed when it occurred, but was heartened the young woman came forward, was heard, and had her concerns taken seriously and addressed.</p>&mdash; Hillary Clinton (@HillaryClinton) <a href=\"https://twitter.com/HillaryClinton/status/957091151122747392?ref_src=twsrc%5Etfw\">January 27, 2018</a></blockquote>\r\n<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>\r\n', 5, 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `address`, `email`, `website`, `twitter`, `contact_no`, `pwd`) VALUES
(1, 'officialTOI', 'The Times of India', 'A-107,Karol Bagh, New Delhi', 'editor@toi.com', 'www.timesofindia.com', '@theTOI', '8838464151', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`local_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `refs`
--
ALTER TABLE `refs`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `refs`
--
ALTER TABLE `refs`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
