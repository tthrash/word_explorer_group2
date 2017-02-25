
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Enter Database
--
Use ics325;
-- --------------------------------------------------------

-- If there exists a table called word_list drop it.

DROP TABLE IF EXISTS word_list;
--
-- Table structure for table 'word_list'
--

CREATE TABLE word_list (
  topic varchar(20) DEFAULT NULL,
  image varchar(20) DEFAULT NULL,
  english varchar(20) NOT NULL,
  telugu varchar(20) DEFAULT NULL,
  hindi varchar(20) DEFAULT NULL,
  kannada varchar(20) DEFAULT NULL,
  gujarathi varchar(20) DEFAULT NULL,
  malayalam varchar(20) DEFAULT NULL,
  telugu_in_english varchar(20) DEFAULT NULL,
  english_in_telugu varchar(20) DEFAULT NULL,
  hindi_in_english varchar(20) DEFAULT NULL,
  english_in_hindi varchar(20) DEFAULT NULL,
  kannada_in_english varchar(20) DEFAULT NULL,
  english_in_kannada varchar(20) DEFAULT NULL,
  gujarathi_in_english varchar(20) DEFAULT NULL,
  english_in_gujarathi varchar(20) DEFAULT NULL,
  malayalam_in_english varchar(20) DEFAULT NULL,
  english_in_malayalam varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table 'word_list'
--

INSERT INTO word_list (topic, image, english, telugu, hindi, kannada, gujarathi, malayalam, telugu_in_english, english_in_telugu, hindi_in_english, english_in_hindi, kannada_in_english, english_in_kannada, gujarathi_in_english, english_in_gujarathi, malayalam_in_english, english_in_malayalam) VALUES
('animal', 'ant.png', 'ant', 'చీమల', 'चींटी', 'ಇರುವೆ', 'કીડી', 'ഉറുന്വ്', 'Cīmala', 'ఆంట్ ', 'cheentee', 'ant', 'Iruve', 'ಅಂಟ್', 'Kīḍī', 'અંત ', 'uṟunv', 'ant'),
('food', 'bread.jpg', 'bread', 'బ్రెడ్', 'रोटी', 'ಬ್ರೆಡ್', 'બ્રેડ', 'റൊട്ടി', 'breḍ', 'బ్రెడ్ ', 'rotee', 'braiad', 'breḍ', 'ಬ್ರೆಡ್ ', 'brēḍa', 'બ્રેડ ', 'ṟeāṭṭi', 'bread'),
('animal', 'cat.jpg', 'cat', 'పిల్లి', 'हवाई  ', 'ಚಾಸಿಸ್', 'ચેસિસ', 'ചേസിസ്', 'pilli', 'చట్ ', 'havaee ', 'chat', 'cāsis', 'ಕ್ಯಾಟ್', 'cēsisa', 'કેટ ', 'cēsis', 'cat'),
('food', 'cereal.jpg', 'cereal', 'ధాన్యం', 'Serel', 'Serel', 'Serel', 'Serel', 'dhān''yaṁ', 'సెరెల్ ', 'sairail', 'chairaial', 'Serel', 'ಸರೆಯಾಳ್', 'Serel', 'સેરેળ', 'Serel', 'cereal'),
('food', 'chicken.jpg', 'chicken', 'చికెన్', 'चिकन', 'ಚಿಕನ್', 'ચિકન', 'ചിക്കൻ', 'ciken', 'చికెన్ ', 'chikan', 'chhichkain', 'cikan', 'ಚಿಕನ್ ', 'cikana', 'ચિકન ', 'cikkan', 'chicken'),
('school', 'classroom.jpg', 'classroom', 'తరగతిలో', 'कक्षा', 'ವರ್ಗ', 'વર્ગ', 'ക്ലാസ്', 'taragatilō', 'క్లాస్రూమ్ ', 'kaksha', 'chlassroom', 'varga', 'ಕ್ಲಾಶ್ಸ್ರೂಮ್ ', 'varga', 'કલાસસરૂમ ', 'klās', 'classroom'),
('school', 'computer.jpg', 'computer', 'కంప్యూటర్', 'कंप्यूटर', 'ಕಂಪ್ಯೂಟರ್', 'કમ્પ્યુટર', 'കമ്പ്യൂട്ടർ', 'kampyūṭar', 'కంప్యూటర్ ', 'kampyootar', 'chomputair', 'kampyūṭar', 'ಕಂಪ್ಯೂಟರ್ ', 'kampyuṭara', 'કમ્પ્યુટર', 'kampyūṭṭar', 'computer'),
('animal', 'dino.jpg', 'dino', 'రక్తవర్ణం', 'डिनो', 'ಡಿನೋ', 'દીનો', 'വീ', 'raktavarṇaṁ', 'డినో ', 'dino', 'dino', 'ḍinō', 'ದಿನೋ ', 'dīnō', 'દીનો', 'vī', 'dino'),
('animal', 'dog.jpg', 'dog', 'కుక్క', 'कुत्ता', 'ಡಾಗ್', 'ડોગ', 'നായ്', 'kukka', 'డాగ్ ', 'kutta', 'dog', 'ḍāg', 'ಡಾಗ್', 'ḍōga', 'ડોગ ', 'nāy', 'dog'),
('animal', 'eel.jpg', 'eel', 'ఈల్', 'बाममछली', 'ಈಲ್', 'ઇલ', 'ആരല്', 'īl', 'ఈల్ ', 'baamamachhalee', 'aiail', 'īl', 'ಎಎಲ್ ', 'ila', 'એલ ', 'āral', 'eel'),
('food', 'eggs.jpg', 'eggs', 'గుడ్లు', 'अंडे', 'ಮೊಟ್ಟೆಗಳು', 'ઇંડા', 'മുട്ടകൾ', 'guḍlu', 'ఎగ్స్ ', 'ande', 'aiggs', 'moṭṭegaḷu', 'ಎಗ್ಸ್ ', 'iṇḍā', 'એગગ્સ ', 'muṭṭakaḷ', 'eggs'),
('animal', 'elephant.jpg', 'elephant', 'ఏనుగు', 'हाथी', 'ಆನೆ', 'હાથી', 'ആന', 'ēnugu', 'ఎలిఫెంట్ ', 'haathee', 'ailaiphant', 'āne', 'ಎಲಿಫೆಂಟ್ ', 'hāthī', 'એલેફન્ટ ', 'āna', 'elephant'),
('school', 'eraser.jpg', 'eraser', 'ఎరేజర్', 'लिखना', 'ಬರೆಯಿರಿ', 'લખો', 'എഴുതുക', 'erējar', 'రేజర్ ', 'likhana', 'airasair', 'bareyiri', 'ಎರಸೆರ್ ', 'lakhō', 'એરસેર ', 'eḻutuka', 'eraser'),
('animal', 'fish.jpg', 'fish', 'చేపలు', 'मछली', 'ಮೀನು', 'માછલી', 'ഫിഷ്', 'cēpalu', 'ఫిష్ ', 'machhalee', 'fish', 'mīnu', 'ಫಿಶ್ ', 'māchalī', 'ફિશ ', 'phiṣ', 'fish'),
('animal', 'fox.jpg', 'fox', 'నక్క', 'लोमड़ी', 'ಫಾಕ್ಸ್', 'ફોક્સ', 'കുറുക്കന്', 'nakka', 'ఫాక్స్ ', 'lomri', 'fox', 'phāks', 'ಫಾಕ್ಸ್', 'phōksa', 'ફોક્સ ', 'kuṟukkan', 'fox'),
('food', 'hotdog.jpg', 'hotdog', 'హాట్డాగ్', 'hotdog', 'hotdog', 'Hotdog', 'Hotdog', 'hāṭḍāg', 'హోట్డోగ్ ', 'hotdog', 'hotdog', 'hotdog', 'ಹೊತ್ಡೊಗ್ ', 'Hotdog', 'હોટ્ડોગ ', 'Hotdog', 'hotdog'),
('food', 'milk.jpg', 'milk', 'పాల', 'दूध', 'ಹಾಲು', 'દૂધ', 'പാല്', 'pāla', 'మిల్క్ ', 'doodh', 'milk', 'hālu', 'ಮಿಲ್ಕ್ ', 'dūdha', 'મિલ્ક', 'pāl', 'milk'),
('school', 'mouse.jpg', 'mouse', 'మౌస్', 'माउस', 'ಮೌಸ್', 'માઉસ', 'ചുണ്ടെലി', 'maus', 'మౌస్ ', 'maus', 'mousai', 'maus', 'ಮೌಸ್ ', 'mā''usa', 'મોઉસે ', 'cuṇṭeli', 'mouse'),
('school', 'notebook.jpg', 'notebook', 'నోట్బుక్', 'नोटबुक', 'ನೋಟ್ಬುಕ್', 'નોટબુક', 'നോട്ടുബുക്ക്', 'nōṭbuk', 'నోట్బుక్ ', 'notabuk', 'notaibook', 'nōṭbuk', 'ನೋಟ್ಬುಕ್', 'nōṭabuka', 'નોટબુક ', 'nēāṭṭubukk', 'notebook'),
('school', 'pen.jpg', 'pen', 'పెన్', 'लेखनी', 'ಪೆನ್', 'પેન', 'തൂലിക', 'pen', 'పెన్ ', 'lekhanee', 'pain', 'pen', 'ಪೆಣ್ ', 'pēna', 'પેન ', 'tūlika', 'pen'),
('school', 'pencil.jpg', 'pencil', 'పెన్సిల్', 'पेंसिल', 'ಪೆನ್ಸಿಲ್', 'પેન્સિલ', 'പെന്സില്', 'pensil', 'పెన్సిల్ ', 'pensil', 'painchil', 'pensil', 'ಪೆನ್ಸಿಲ್ ', 'pēnsila', 'પેન્સિલ ', 'pensil', 'pencil'),
('food', 'pizza.jpg', 'pizza', 'పిజ్జా', 'पिज़्ज़ा', 'ಪಿಜ್ಜಾ', 'પિઝા', 'പിസ്സ', 'pijjā', 'పిజ్జా ', 'pizza', 'pizz', 'pijjā', 'ಪಿಜ್ಜಾ ', 'pijhā', 'પિઝા ', 'pis''sa', 'pizza'),
('food', 'rice.jpg', 'rice', 'వరి', 'चावल', 'ಅಕ್ಕಿ', 'ચોખા', 'അരി', 'vari', 'రైస్ ', 'chaaval', 'richai', 'akki', 'ರೈಸ್ ', 'cōkhā', 'રીસે ', 'ari', 'rice'),
('school', 'school.jpg', 'school', 'పాఠశాల', 'स्कूल', 'ಸ್ಕೂಲ್', 'શાળા', 'സ്കൂൾ', 'pāṭhaśāla', 'స్కూల్ ', 'skool', 'schhool', 'skūl', 'ಸ್ಕೂಲ್ ', 'śāḷā', 'સ્કૂલ ', 'skūḷ', 'school');

--
-- Indexes for dumped tables
--

--
-- Indexes for table 'word_list'
--
ALTER TABLE word_list
  ADD PRIMARY KEY (english);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
