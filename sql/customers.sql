
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Michael Scott', 'michealscott@gmail.com', 80000),
(2, 'Dwight Schrute', 'dwightschrute@gmail.com', 40000),
(3, 'Jim Halpert', 'halpert@gmail.com', 50000),
(4, 'Pam Beesly', 'pambeesly@gmail.com', 30000),
(5, 'Creed Bratton', 'creedbratton@gmail.com', 40000),
(6, 'Kevin Malone', 'malonekevin@gmail.com', 69000),
(7, 'Andy Bernard', 'narddog@gmail.com', 50000),
(8, 'Stanley Hudson', 'stanley@gmail.com', 60000),
(9, 'Angela Martin', 'angelamartin@gmail.com', 20000),
(10, 'Toby Flenderson', 'tobyflenderson@gmail.com', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;


