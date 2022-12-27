--
-- Database: `phpi18n_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title_en_GB` varchar(128) NOT NULL,
  `title_es` varchar(128) NOT NULL,
  `description_en_GB` text NOT NULL,
  `description_es` text NOT NULL,
  `size` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title_en_GB`, `title_es`, `description_en_GB`, `description_es`, `size`) VALUES
(1, 'Thing', 'Cosa', 'This is a thing', 'Esto es una cosa', 20),
(2, 'Wotsit', 'Chisme', 'A high quality wotsit', 'Un chisme de alta calidad', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


