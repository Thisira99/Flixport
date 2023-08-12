-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 09:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `email`, `message`) VALUES
('thisira thilakshana jayasekara', 'thilakshanathisira@gmail.com', 'nbhh'),
('thisira thilakshana jayasekara', 'thilakshanathisira@gmail.com', 'nbhh'),
('T.T. JAYASEKARA', 'tharushajayasekara04@gmail.com', 'hey'),
('thisira thilakshana jayasekara', 'thilakshanathisira@gmail.com', 'how are y'),
('thisira thilakshana jayasekara', 'thilakshanathisira@gmail.com', 'sfsf'),
('T.T. JAYASEKARA', 'tharushajayasekara04@gmail.com', 'hi'),
('T.T. JAYASEKARA', 'tharushajayasekara04@gmail.com', 'hi'),
('thisira thilakshana jayasekara', 'thilakshanathisira@gmail.com', 'hi'),
('thisira thilakshana jayasekara', 'thilakshanathisira@gmail.com', 'hi'),
('T.T. JAYASEKARA', 'tharushajayasekara04@gmail.com', 'how'),
('T.T. JAYASEKARA', 'tharushajayasekara04@gmail.com', 'how'),
('thisira thilakshana jayasekara', 'thilakshanathisira@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`firstname`, `lastname`, `email`, `password`) VALUES
('thisira', 'jayasekara', 'thilakshanathisira@gmail.com', '$2y$10$5kJfedrgK0IUHY.FoFjlwunbtD2nyAEwvAIs6CA43hSZeRGCnbYGm'),
('T.T.', 'JAYASEKARA', 'jayasekarathisira@gmail.com', '$2y$10$aLbh8S8kX0Z1AJGfba9ZdO4gyIMvFVMjHsD0mMvj5Y3XntUhf3kO.'),
('sanduni', 'lak', 'asd@hdjjs', '$2y$10$uslPCpxa5eL08EwtoT/FMeUmjHGQcV.jbVbRLarttjXD22mNPYuje'),
('uvinde', 'abdedwa', 'uvindu@gmail.com', '$2y$10$aZi15ClfFcNZgI.zUBjgl.sqNL8MfFif4lfzI8.o6oX/GIGK0JwVm'),
('uvinde', 'abdedwa', 'uvindu@gmail.com', '$2y$10$yj8GaC1tQvHN7Jyncm5/F.AfaQlY17liNXiewzgeMDDS1OiLe1yIy'),
('tharushi', 'jaya', 'tharu@gmail.com', '$2y$10$jX7004SPnTspJLph2vDG5OZoV2tHhlft30y9g1rSNzzMXAOpXsLN2'),
('tharushi', 'jaya', 'tharu@gmail.com', '$2y$10$Y4pclvCjhJEnmUxSFEwp7OudknqnBR.wd5R9oeMrnYqXVeb9w4HTO'),
('thisira', 'jayasekara', 'jayasekarathisira@gmail.com', '$2y$10$d7Svi0wrUQYZgnDsL6DPienROkHK7DmPMNvSEs.3S59sNLWqzF54m'),
('thisira', 'jayasekara', 'jayasekarathisira@gmail.com', '$2y$10$JVI.0rN5qC95Hww8PwOLLuXi4mZhqrtK/60EOKZK3TH3casSmhICu'),
('aabb', 'cc', 'a123@ggd.com', '$2y$10$meWR26CsTB2GA/TjVjY8o.cIbgb3VfQANbpyCanP8fAPAAFq/BqZu'),
('aabb', 'cc', 'a123@ggd.com', '$2y$10$5jlhwZ9RRfmJBMoLWPSoT.1rbTp52B40U0a1l5q5cNkzDVoJy6Lyy'),
('aabb', 'cc', 'a123@ggd.com', '$2y$10$NeQ0T4gGUxzUqN5NWuLQ4ukHRDcMYSce3FF4RqooAXU0CRePNW2MO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
