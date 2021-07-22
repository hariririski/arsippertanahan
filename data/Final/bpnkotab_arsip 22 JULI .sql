-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2021 at 05:38 PM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpnkotab_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(5) NOT NULL,
  `status` int(5) DEFAULT 0,
  `nama_lengkap` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`, `status`, `nama_lengkap`, `image`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 'Hariririski', 'assets/images/users/admin.jpg'),
(2, 'pustaka', '339165af4d07b3b1cea5c557f37c0a25', 2, 1, 'Azwar', 'assets/images/users/pustaka.jpg'),
(7, 'umum', 'adfab9c56b8b16d6c067f8d3cff8818e', 3, 1, 'Imed Badratul, S.P', 'assets/images/users/umum.jpg'),
(12, 'link', '2a304a1348456ccd2234cd71a81bd338', 4, 1, 'Mutiara Tiara Indra, S.E.', 'assets/images/users/link.jpg'),
(13, 'tata', '49d02d55ad10973b7b9d0dc9eba7fdf0', 2, 1, 'Tachtassarazulkarnain.A.Md.', 'assets/images/users/pustaka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `baris`
--

CREATE TABLE `baris` (
  `id_baris` varchar(15) NOT NULL,
  `qrcode` varchar(25) NOT NULL,
  `nama_baris` varchar(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_lemari` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baris`
--

INSERT INTO `baris` (`id_baris`, `qrcode`, `nama_baris`, `keterangan`, `id_lemari`) VALUES
('0FZTiORfCm', 'B-0FZTiORfCm', 'C', '', 'Z7W283rfOV'),
('0G1lX6YkOQ', 'B-0G1lX6YkOQ', 'A', '', 'YAnv0lB1Ur'),
('0mGnbQ4dWC', 'B-0mGnbQ4dWC', 'D', '', 'GsUpAM9nVY'),
('0oUcIeVs4d', 'B-0oUcIeVs4d', 'B', '', 'K8xs6uVULY'),
('14LrMTbIG5', 'B-14LrMTbIG5', 'B', '', 'qRDjfXr7Zo'),
('1Ie3af5pOX', 'B-1Ie3af5pOX', 'B', '', 'oecNYCdJ9S'),
('1JXcWY8Rvm', 'B-1JXcWY8Rvm', 'B', '', 'TARrXDJmMu'),
('1kVupM4nZt', 'B-1kVupM4nZt', 'B', '', '5YNVsRvgIT'),
('1lHmc5Verh', 'B-1lHmc5Verh', 'B', '', 'TrduElHnm9'),
('2kdJlPWHu4', 'B-2kdJlPWHu4', 'A', '', 'w4d7tY18XU'),
('2tN8T0RhDk', 'B-2tN8T0RhDk', 'E', '', 'MCjWqcZG1U'),
('2zuNkTJgPH', 'B-2zuNkTJgPH', 'E', '', '8PNASLXz35'),
('36NiPdHmgA', 'B-36NiPdHmgA', 'E', '', 'HSYh7Ozv2f'),
('38C6OBLhzk', 'B-38C6OBLhzk', 'D', '', 'MCjWqcZG1U'),
('3ceyMgOmXE', 'B-3ceyMgOmXE', 'D', '', 'th6OKXVEw2'),
('3dcbjrJkoS', 'B-3dcbjrJkoS', 'C', '', 'MAXRa4ipUu'),
('3HETg2j9Ou', 'B-3HETg2j9Ou', 'E', '', 'MNaOp9FjHC'),
('3ijaFlrJB1', 'B-3ijaFlrJB1', 'D', '', '9iXlMhBvjt'),
('3nkLrsuYXj', 'B-3nkLrsuYXj', 'E', '', 'r9nXvVUWed'),
('3W7CtwxR5V', 'B-3W7CtwxR5V', 'E', '', 'Wxk3CeyrHZ'),
('4csxLu0RmY', 'B-4csxLu0RmY', 'E', '', 'OCS0QDbz9X'),
('4FtNuo79Gf', 'B-4FtNuo79Gf', 'A', '', 'K8xs6uVULY'),
('4gIwCoQFd5', 'B-4gIwCoQFd5', 'D', '', 'MAXRa4ipUu'),
('4Hqrt9x8zs', 'B-4Hqrt9x8zs', 'C', '', 'vSD0dX2hx6'),
('4lVQZhKHNY', 'B-4lVQZhKHNY', 'B', '', 'DLOc1bveup'),
('4pgi2vL3MZ', 'B-4pgi2vL3MZ', 'A', '', 'MNaOp9FjHC'),
('4uZ0M6ewRA', 'B-4uZ0M6ewRA', 'B', '', 'GsUpAM9nVY'),
('4wKnoPjmXC', 'B-4wKnoPjmXC', 'A', '', '0uibFeMjBT'),
('4xw3qEZUAJ', 'B-4xw3qEZUAJ', 'D', '', 'NCSolveTtq'),
('50FNk6OUva', 'B-50FNk6OUva', 'B', '', 'OioeSYQlKB'),
('50ubDVCEZ3', 'B-50ubDVCEZ3', 'D', '', 'OCS0QDbz9X'),
('57ethjEliU', 'B-57ethjEliU', 'E', '', 'th6OKXVEw2'),
('5FHqtwU7rb', 'B-5FHqtwU7rb', 'B', '', '2SiWUFBLr7'),
('5MlCs0Pwqo', 'B-5MlCs0Pwqo', 'B', '', 'R5l8Jhrn0c'),
('5TWq7xQI9V', 'B-5TWq7xQI9V', 'D', '', 'KilLxOruaW'),
('5UwELd8kab', 'B-5UwELd8kab', 'B', '', 'jJwKDmF8hM'),
('6djOQmlf9q', 'B-6djOQmlf9q', 'B', '', 'Z7W283rfOV'),
('6Zzg8MLkmG', 'B-6Zzg8MLkmG', 'B', '', 'Wxk3CeyrHZ'),
('78vJeQFnlb', 'B-78vJeQFnlb', 'A', '', 'oecNYCdJ9S'),
('7agf40XFSi', 'B-7agf40XFSi', 'C', '', 'DLOc1bveup'),
('7LPkmpJYFx', 'B-7LPkmpJYFx', 'B', '', 'J5RcwktB61'),
('7mOXvRlIQB', 'B-7mOXvRlIQB', 'C', '', 'OCS0QDbz9X'),
('8KEJRP0wxQ', 'B-8KEJRP0wxQ', 'A', '', 'MAXRa4ipUu'),
('906mrldftZ', 'B-906mrldftZ', 'B', '', 'rd7I8ngJ6h'),
('92naWm0Edw', 'B-92naWm0Edw', 'D', '', 'MNaOp9FjHC'),
('9IaEeoGRfN', 'B-9IaEeoGRfN', 'E', '', 'HR79hk64Cf'),
('9OTsbjSm4B', 'B-9OTsbjSm4B', 'C', '', 'qRDjfXr7Zo'),
('9tN1BpD37v', 'B-9tN1BpD37v', 'C', '', 'jJwKDmF8hM'),
('9tnAvd7CxF', 'B-9tnAvd7CxF', 'C', '', 'OioeSYQlKB'),
('9uXQ7es1fb', 'B-9uXQ7es1fb', 'C', '', 'w4d7tY18XU'),
('a2MkjANf6J', 'B-a2MkjANf6J', 'D', '', 'VvtD6Mq1b3'),
('A3LKYNvdpe', 'B-A3LKYNvdpe', 'B', '', 'th6OKXVEw2'),
('a5vM7neuiK', 'B-a5vM7neuiK', 'A', '', 'aYl1WwtZ0T'),
('Adh2mcnFZ3', 'B-Adh2mcnFZ3', 'D', '', 'swtA2Pn73C'),
('AEHjwdnKpG', 'B-AEHjwdnKpG', 'D', '', 'staixqvUZl'),
('AGToKzpy92', 'B-AGToKzpy92', 'D', '', 'vlrH2d9pQE'),
('amTPEBlvrK', 'B-amTPEBlvrK', 'C', '', 'swtA2Pn73C'),
('aP7xZLkCzR', 'B-aP7xZLkCzR', 'C', '', 'OGQ8YKN3JC'),
('AQpJY1aDcw', 'B-AQpJY1aDcw', 'C', '', 'aYl1WwtZ0T'),
('AVHTYs1k6y', 'B-AVHTYs1k6y', 'D', '', 'HR79hk64Cf'),
('AzI1kDOwVB', 'B-AzI1kDOwVB', 'A', '', 'anAFxPU5c1'),
('b2XRVlgLHI', 'B-b2XRVlgLHI', 'D', '', 'BCy6K9PEZ0'),
('bfsPHcoXgy', 'B-bfsPHcoXgy', 'D', '', '9x8NTFhKVj'),
('Bi6cU5gpLl', 'B-Bi6cU5gpLl', 'D', '', 'E9k5niHwf8'),
('bRsnx8TjBf', 'B-bRsnx8TjBf', 'A', '', 'r9nXvVUWed'),
('C0ocGderYI', 'B-C0ocGderYI', 'B', '', 'KilLxOruaW'),
('c50NHMfPuA', 'B-c50NHMfPuA', 'A', '', 'TrduElHnm9'),
('CDF8xKBRwo', 'B-CDF8xKBRwo', 'A', '', 'mCzHLJieWu'),
('CDZFBd68bP', 'B-CDZFBd68bP', 'C', '', '9x8NTFhKVj'),
('chjs9SF851', 'B-chjs9SF851', 'E', '', 'w4d7tY18XU'),
('CJ0Tn7q4Rc', 'B-CJ0Tn7q4Rc', 'A', '', 'OioeSYQlKB'),
('Ckv50teRzP', 'B-Ckv50teRzP', 'C', '', '9iXlMhBvjt'),
('CmSVEAfy5X', 'B-CmSVEAfy5X', 'C', '', 'rd7I8ngJ6h'),
('Co12jcw3yu', 'B-Co12jcw3yu', 'E', '', 'swtA2Pn73C'),
('cQbtapk8GC', 'B-cQbtapk8GC', 'B', '', 'HR79hk64Cf'),
('CReycrKFkg', 'B-CReycrKFkg', 'B', '', '9x8NTFhKVj'),
('d0SqE7VPNT', 'B-d0SqE7VPNT', 'A', '', 'OCS0QDbz9X'),
('D6uOSF0LV4', 'B-D6uOSF0LV4', 'B', '', 'mCzHLJieWu'),
('Dodt7xRMCb', 'B-Dodt7xRMCb', 'A', '', '1ZECen30dG'),
('drupzoHaVk', 'B-drupzoHaVk', 'D', '', 'anAFxPU5c1'),
('drZFORuU4h', 'B-drZFORuU4h', 'D', '', 'aYl1WwtZ0T'),
('Dt3N0APGzj', 'B-Dt3N0APGzj', 'E', '', 'E9k5niHwf8'),
('e0Pk7YC1Ol', 'B-e0Pk7YC1Ol', 'B', '', 'HSYh7Ozv2f'),
('E2jWnRKdf9', 'B-E2jWnRKdf9', 'A', '', 'vSD0dX2hx6'),
('e8VLKZ3yHY', 'B-e8VLKZ3yHY', 'C', '', 'MNaOp9FjHC'),
('eC1OyzFk6B', 'B-eC1OyzFk6B', 'B', '', '9iXlMhBvjt'),
('EfdRWe8YPa', 'B-EfdRWe8YPa', 'E', '', 'K8xs6uVULY'),
('eiP9XR1auT', 'B-eiP9XR1auT', 'A', '', 'staixqvUZl'),
('eoyadYKP1E', 'B-eoyadYKP1E', 'E', '', 'vSD0dX2hx6'),
('esp9wQ374P', 'B-esp9wQ374P', 'E', '', 'TrduElHnm9'),
('ExfMzKRHn9', 'B-ExfMzKRHn9', 'E', '', 'BCy6K9PEZ0'),
('EyWOZBKPAU', 'B-EyWOZBKPAU', 'E', '', 'OGQ8YKN3JC'),
('F1b2jtTYy0', 'B-F1b2jtTYy0', 'C', '', 'oecNYCdJ9S'),
('FCVUL8m09Y', 'B-FCVUL8m09Y', 'A', '', '5YNVsRvgIT'),
('FcZhfpLiVA', 'B-FcZhfpLiVA', 'B', '', 'cNbOmaJ9zt'),
('fLKoFivysQ', 'B-fLKoFivysQ', 'A', '', 'BCy6K9PEZ0'),
('flue6MLrQc', 'B-flue6MLrQc', 'E', '', '0ItOYp3cdi'),
('FMaqCTOXh3', 'B-FMaqCTOXh3', 'E', '', 'staixqvUZl'),
('fQ3s1r8a0I', 'B-fQ3s1r8a0I', 'D', '', 'PUTw7OuVkA'),
('fqALV1PFO9', 'B-fqALV1PFO9', 'E', '', 'VvtD6Mq1b3'),
('fuyWQFxTUN', 'B-fuyWQFxTUN', 'C', '', 'r9nXvVUWed'),
('FvtC70dycO', 'B-FvtC70dycO', 'A', '', 'DGCNeA1lfc'),
('FWBdtfJ8vN', 'B-FWBdtfJ8vN', 'B', '', '8PNASLXz35'),
('g8N9aycQqI', 'B-g8N9aycQqI', 'C', '', '0ItOYp3cdi'),
('gctbfT8oVr', 'B-gctbfT8oVr', 'E', '', 'DGCNeA1lfc'),
('gIV6OZ57K4', 'B-gIV6OZ57K4', 'A', '', 'XhbjRS31dC'),
('gj6O8ulUtT', 'B-gj6O8ulUtT', 'B', '', 'MNaOp9FjHC'),
('gPbiRItU3m', 'B-gPbiRItU3m', 'C', '', 'VvtD6Mq1b3'),
('gtWkL4dNZq', 'B-gtWkL4dNZq', 'A', '', '9iXlMhBvjt'),
('H1C32kiFLp', 'B-H1C32kiFLp', 'E', '', 'OioeSYQlKB'),
('H3QCVt1DSp', 'B-H3QCVt1DSp', 'C', '', 'XhbjRS31dC'),
('h8PHMDCXn2', 'B-h8PHMDCXn2', 'D', '', 'w4d7tY18XU'),
('hAubawzCZs', 'B-hAubawzCZs', 'D', '', 'snZ20aQm8x'),
('hG2bok7FP8', 'B-hG2bok7FP8', 'E', '', 'KilLxOruaW'),
('HgJMehmOSD', 'B-HgJMehmOSD', 'B', '', 'vSD0dX2hx6'),
('Hh9FlIKy4B', 'B-Hh9FlIKy4B', 'E', '', 'Z7W283rfOV'),
('Hjka4u0wBS', 'B-Hjka4u0wBS', 'D', '', 'OGQ8YKN3JC'),
('Hkg2Ae6M7f', 'B-Hkg2Ae6M7f', 'B', '', 'DGCNeA1lfc'),
('hUkuKFcYm4', 'B-hUkuKFcYm4', 'D', '', '2SiWUFBLr7'),
('hzA2WCgFuJ', 'B-hzA2WCgFuJ', 'C', '', 'BCy6K9PEZ0'),
('I4G5BEWg37', 'B-I4G5BEWg37', 'E', '', '2SiWUFBLr7'),
('i5qhzxQpBo', 'B-i5qhzxQpBo', 'D', '', 'TrduElHnm9'),
('iSTJfcmUdC', 'B-iSTJfcmUdC', 'C', '', 'vlrH2d9pQE'),
('j5p3ahWDSI', 'B-j5p3ahWDSI', 'C', '', 'YAnv0lB1Ur'),
('J8SBtkp1LR', 'B-J8SBtkp1LR', 'C', '', 'HSYh7Ozv2f'),
('JiqTORvA3N', 'B-JiqTORvA3N', 'B', '', 'MAXRa4ipUu'),
('jKABylWZUX', 'B-jKABylWZUX', 'D', '', 'plSY5UmB4G'),
('JN5lsj3Wzv', 'B-JN5lsj3Wzv', 'D', '', 'OioeSYQlKB'),
('JRT84uSeaO', 'B-JRT84uSeaO', 'D', '', 'XhbjRS31dC'),
('JRu2tjDwK8', 'B-JRu2tjDwK8', 'D', '', 'r9nXvVUWed'),
('K0M7s5pciG', 'B-K0M7s5pciG', 'C', '', 'HR79hk64Cf'),
('K2QXc6veE9', 'B-K2QXc6veE9', 'C', '', 'r7jyDPTtQv'),
('kC6bcEmYrp', 'B-kC6bcEmYrp', 'A', '', 'DLOc1bveup'),
('Kd0o8LSTij', 'B-Kd0o8LSTij', 'A', '', 'r7jyDPTtQv'),
('KFv9ocCfAm', 'B-KFv9ocCfAm', 'C', '', 'GsUpAM9nVY'),
('kibuLUpHsA', 'B-kibuLUpHsA', 'B', '', 'w4d7tY18XU'),
('KmNDsyGeUo', 'B-KmNDsyGeUo', 'B', '', 'plSY5UmB4G'),
('knoSB8UypA', 'B-knoSB8UypA', 'D', '', 'mCzHLJieWu'),
('kufdGtC8qO', 'B-kufdGtC8qO', 'B', '', '0ItOYp3cdi'),
('lJtwq9TAdu', 'B-lJtwq9TAdu', 'E', '', 'vlrH2d9pQE'),
('lnAhUxsk2c', 'B-lnAhUxsk2c', 'E', '', 'jJwKDmF8hM'),
('LNBgHjPfF2', 'B-LNBgHjPfF2', 'C', '', 'TARrXDJmMu'),
('lpJOtyq6hI', 'B-lpJOtyq6hI', 'D', '', 'chBUxaMbIe'),
('LPVfApF7vK', 'B-LPVfApF7vK', 'B', '', '0uibFeMjBT'),
('LQJ9ex8rPS', 'B-LQJ9ex8rPS', 'B', '', 'anAFxPU5c1'),
('LqMDEaxjzI', 'B-LqMDEaxjzI', 'A', '', 'E9k5niHwf8'),
('ltpiMuyK2k', 'B-ltpiMuyK2k', 'A', '', 'HSYh7Ozv2f'),
('M01nbXDLOW', 'B-M01nbXDLOW', 'E', '', 'R5l8Jhrn0c'),
('m6JGAVbu42', 'B-m6JGAVbu42', 'B', '', 'VvtD6Mq1b3'),
('m7OcZtz1Aq', 'B-m7OcZtz1Aq', 'D', '', 'oecNYCdJ9S'),
('mdSNbWuZXr', 'B-mdSNbWuZXr', 'E', '', '1ZECen30dG'),
('MEeyQkhJXq', 'B-MEeyQkhJXq', 'B', '', 'BCy6K9PEZ0'),
('MJx97rd0By', 'B-MJx97rd0By', 'C', '', 'mCzHLJieWu'),
('ml6BuvWdJp', 'B-ml6BuvWdJp', 'C', '', 'KilLxOruaW'),
('mn6eaUSpul', 'B-mn6eaUSpul', 'D', '', '5YNVsRvgIT'),
('MoNXl8vncQ', 'B-MoNXl8vncQ', 'C', '', '9RGcKEgX2u'),
('MPBowqdakb', 'B-MPBowqdakb', 'E', '', 'TARrXDJmMu'),
('mRcMCqpBa9', 'B-mRcMCqpBa9', 'B', '', 'rGDmyS9Avl'),
('MUDcrki8lF', 'B-MUDcrki8lF', 'A', '', '9RGcKEgX2u'),
('MZmk4uxn7Y', 'B-MZmk4uxn7Y', 'B', '', '9RGcKEgX2u'),
('n3dWS5UDN7', 'B-n3dWS5UDN7', 'D', '', 'HSYh7Ozv2f'),
('nbx0fkdiVy', 'B-nbx0fkdiVy', 'B', '', 'swtA2Pn73C'),
('ncFCkyfiZR', 'B-ncFCkyfiZR', 'A', '', 'TARrXDJmMu'),
('NCjduq6tpS', 'B-NCjduq6tpS', 'E', '', 'GsUpAM9nVY'),
('NdCT3Syw0P', 'B-NdCT3Syw0P', 'D', '', 'R5l8Jhrn0c'),
('NLeVnf5u7k', 'B-NLeVnf5u7k', 'C', '', 'staixqvUZl'),
('NrF4l9Bw3Z', 'B-NrF4l9Bw3Z', 'E', '', 'PUTw7OuVkA'),
('NSxQI21bit', 'B-NSxQI21bit', 'D', '', '8PNASLXz35'),
('NV6aZcL4Tv', 'B-NV6aZcL4Tv', 'E', '', 'aYl1WwtZ0T'),
('NZLhks1rDp', 'B-NZLhks1rDp', 'D', '', 'qRDjfXr7Zo'),
('O6zLIRfXnP', 'B-O6zLIRfXnP', 'B', '', 'OGQ8YKN3JC'),
('oaxrYH4iGq', 'B-oaxrYH4iGq', 'E', '', 'cNbOmaJ9zt'),
('oBdxasSb4V', 'B-oBdxasSb4V', 'E', '', 'anAFxPU5c1'),
('OfJuHl3not', 'B-OfJuHl3not', 'A', '', '9x8NTFhKVj'),
('oME9Zv7Nmz', 'B-oME9Zv7Nmz', 'B', '', 'NCSolveTtq'),
('Omw9AgCvDs', 'B-Omw9AgCvDs', 'A', '', 'GsUpAM9nVY'),
('oTG7eMbOu4', 'B-oTG7eMbOu4', 'B', '', '1ZECen30dG'),
('oXKFCHEOUx', 'B-oXKFCHEOUx', 'E', '', '9iXlMhBvjt'),
('Oz54PitwMA', 'B-Oz54PitwMA', 'E', '', '0uibFeMjBT'),
('PbNcGv8tOU', 'B-PbNcGv8tOU', 'B', '', 'PUTw7OuVkA'),
('PbSGNtLgfi', 'B-PbSGNtLgfi', 'A', '', 'vlrH2d9pQE'),
('PCVwKkziZn', 'B-PCVwKkziZn', 'A', '', '8PNASLXz35'),
('PjWYt1QBrV', 'B-PjWYt1QBrV', 'C', '', 'Wxk3CeyrHZ'),
('PNxl5aVOot', 'B-PNxl5aVOot', 'E', '', 'r7jyDPTtQv'),
('POWpZ8Ty7e', 'B-POWpZ8Ty7e', 'E', '', '9RGcKEgX2u'),
('QcW926LRAl', 'B-QcW926LRAl', 'E', '', 'oecNYCdJ9S'),
('QeVWJnqK5M', 'B-QeVWJnqK5M', 'E', '', 'plSY5UmB4G'),
('QFcZtXkCT9', 'B-QFcZtXkCT9', 'A', '', 'Wxk3CeyrHZ'),
('qltbYLy7IP', 'B-qltbYLy7IP', 'D', '', '0uibFeMjBT'),
('R4tbwBXCp5', 'B-R4tbwBXCp5', 'A', '', 'Z7W283rfOV'),
('r8fIdC7BLV', 'B-r8fIdC7BLV', 'A', '', 'NCSolveTtq'),
('RrJDnc3ja7', 'B-RrJDnc3ja7', 'E', '', 'rd7I8ngJ6h'),
('rS28qgo0kf', 'B-rS28qgo0kf', 'C', '', 'J5RcwktB61'),
('Rx0tn4IXML', 'B-Rx0tn4IXML', 'E', '', 'MAXRa4ipUu'),
('RxtAyvMLTk', 'B-RxtAyvMLTk', 'C', '', '1ZECen30dG'),
('S9e2NRhBPI', 'B-S9e2NRhBPI', 'E', '', 'XhbjRS31dC'),
('sbjT9CngME', 'B-sbjT9CngME', 'C', '', '8PNASLXz35'),
('soc9d5bq6N', 'B-soc9d5bq6N', 'A', '', 'rGDmyS9Avl'),
('SRCyunE8mJ', 'B-SRCyunE8mJ', 'C', '', '5YNVsRvgIT'),
('stwEqRXrQg', 'B-stwEqRXrQg', 'D', '', 'DLOc1bveup'),
('sVJXAlRvoF', 'B-sVJXAlRvoF', 'E', '', 'NCSolveTtq'),
('SwhbGtjy9J', 'B-SwhbGtjy9J', 'E', '', 'rGDmyS9Avl'),
('T6s5LMCxt1', 'B-T6s5LMCxt1', 'C', '', 'chBUxaMbIe'),
('tFhVN4n9ef', 'B-tFhVN4n9ef', 'A', '', 'cNbOmaJ9zt'),
('TFj0Holnrd', 'B-TFj0Holnrd', 'D', '', '9RGcKEgX2u'),
('tgyHDjC6zS', 'B-tgyHDjC6zS', 'D', '', 'Wxk3CeyrHZ'),
('TJPZLXW5wu', 'B-TJPZLXW5wu', 'A', '', '0ItOYp3cdi'),
('tlLUAzyrhO', 'B-tlLUAzyrhO', 'A', '', 'J5RcwktB61'),
('TocX9q8kFu', 'B-TocX9q8kFu', 'A', '', 'MCjWqcZG1U'),
('TrtgjPocxU', 'B-TrtgjPocxU', 'E', '', 'YAnv0lB1Ur'),
('txJ53W9wyE', 'B-txJ53W9wyE', 'D', '', 'r7jyDPTtQv'),
('txWXPNs6Gw', 'B-txWXPNs6Gw', 'A', '', '2SiWUFBLr7'),
('U6BJdQTX4I', 'B-U6BJdQTX4I', 'E', '', 'qRDjfXr7Zo'),
('u6oIBq091t', 'B-u6oIBq091t', 'D', '', 'cNbOmaJ9zt'),
('u8qXShTAF9', 'B-u8qXShTAF9', 'A', '', 'PUTw7OuVkA'),
('uLbdQiWO8C', 'B-uLbdQiWO8C', 'C', '', 'snZ20aQm8x'),
('UmMK4Bf1l5', 'B-UmMK4Bf1l5', 'B', '', 'r7jyDPTtQv'),
('Upcyn3PSIu', 'B-Upcyn3PSIu', 'D', '', '0ItOYp3cdi'),
('UsNxB5PjIr', 'B-UsNxB5PjIr', 'D', '', 'J5RcwktB61'),
('UTMHZLIF6u', 'B-UTMHZLIF6u', 'C', '', '2SiWUFBLr7'),
('UTp6kwDlvz', 'B-UTp6kwDlvz', 'A', '', 'HR79hk64Cf'),
('v7Us1LfzRa', 'B-v7Us1LfzRa', 'C', '', 'th6OKXVEw2'),
('v9yiLtwWOA', 'B-v9yiLtwWOA', 'C', '', 'K8xs6uVULY'),
('VfxyFl7WEn', 'B-VfxyFl7WEn', 'A', '', 'VvtD6Mq1b3'),
('ViXef4Bu2l', 'B-ViXef4Bu2l', 'A', '', 'R5l8Jhrn0c'),
('VjvfQxec38', 'B-VjvfQxec38', 'D', '', 'YAnv0lB1Ur'),
('VOvjICB06H', 'B-VOvjICB06H', 'E', '', 'chBUxaMbIe'),
('VYo9XKTOCS', 'B-VYo9XKTOCS', 'A', '', 'snZ20aQm8x'),
('WaTjNq8xon', 'B-WaTjNq8xon', 'B', '', 'staixqvUZl'),
('WfFKBHX9JE', 'B-WfFKBHX9JE', 'C', '', 'anAFxPU5c1'),
('wHJoF1dnGb', 'B-wHJoF1dnGb', 'D', '', '1ZECen30dG'),
('Whu9q1aidZ', 'B-Whu9q1aidZ', 'D', '', 'DGCNeA1lfc'),
('WhV1FuGRQH', 'B-WhV1FuGRQH', 'C', '', 'plSY5UmB4G'),
('WipEX81InH', 'B-WipEX81InH', 'D', '', 'K8xs6uVULY'),
('WKmLM9qUBx', 'B-WKmLM9qUBx', 'E', '', '5YNVsRvgIT'),
('WSQeFtrAxi', 'B-WSQeFtrAxi', 'A', '', 'plSY5UmB4G'),
('x6ImhbnLTl', 'B-x6ImhbnLTl', 'C', '', 'TrduElHnm9'),
('x9Lev8btOY', 'B-x9Lev8btOY', 'C', '', 'NCSolveTtq'),
('XF07pHrLbw', 'B-XF07pHrLbw', 'B', '', 'MCjWqcZG1U'),
('xFJTnSt1lP', 'B-xFJTnSt1lP', 'A', '', 'qRDjfXr7Zo'),
('xmOqPVAbd2', 'B-xmOqPVAbd2', 'B', '', 'r9nXvVUWed'),
('xMspEzCv98', 'B-xMspEzCv98', 'C', '', 'MCjWqcZG1U'),
('XoE3598lJP', 'B-XoE3598lJP', 'D', '', 'vSD0dX2hx6'),
('xRwZ9HvUNo', 'B-xRwZ9HvUNo', 'C', '', 'DGCNeA1lfc'),
('xUcWzaC5Ko', 'B-xUcWzaC5Ko', 'B', '', 'vlrH2d9pQE'),
('XV6uB4NWYI', 'B-XV6uB4NWYI', 'A', '', 'swtA2Pn73C'),
('xVDUhypIoQ', 'B-xVDUhypIoQ', 'B', '', 'XhbjRS31dC'),
('XY8jkdDfTa', 'B-XY8jkdDfTa', 'D', '', 'Z7W283rfOV'),
('Y20UyvMo8Z', 'B-Y20UyvMo8Z', 'B', '', 'OCS0QDbz9X'),
('y2p7I6c8N1', 'B-y2p7I6c8N1', 'A', '', 'rd7I8ngJ6h'),
('Y3Id24Ay7h', 'B-Y3Id24Ay7h', 'A', '', 'KilLxOruaW'),
('y8ItWEiUhf', 'B-y8ItWEiUhf', 'C', '', 'PUTw7OuVkA'),
('YDMcu9rbyR', 'B-YDMcu9rbyR', 'C', '', 'rGDmyS9Avl'),
('YeUi7LjPEO', 'B-YeUi7LjPEO', 'E', '', 'J5RcwktB61'),
('YFCrJgiGHV', 'B-YFCrJgiGHV', 'C', '', 'E9k5niHwf8'),
('YhbI0GoHwW', 'B-YhbI0GoHwW', 'A', '', 'jJwKDmF8hM'),
('ymdR4BAGPI', 'B-ymdR4BAGPI', 'E', '', 'mCzHLJieWu'),
('yoblp3Jmkj', 'B-yoblp3Jmkj', 'D', '', 'TARrXDJmMu'),
('YP5oLf3mBO', 'B-YP5oLf3mBO', 'D', '', 'rGDmyS9Avl'),
('yQvtq0IwoA', 'B-yQvtq0IwoA', 'C', '', 'R5l8Jhrn0c'),
('Yrfwle876N', 'B-Yrfwle876N', 'C', '', '0uibFeMjBT'),
('YTlua7cRPn', 'B-YTlua7cRPn', 'E', '', 'snZ20aQm8x'),
('z27WwXRiC5', 'B-z27WwXRiC5', 'A', '', 'chBUxaMbIe'),
('z8TufAgqPF', 'B-z8TufAgqPF', 'E', '', '9x8NTFhKVj'),
('zdaHTgeInf', 'B-zdaHTgeInf', 'A', '', 'th6OKXVEw2'),
('zeCu7xW6Qy', 'B-zeCu7xW6Qy', 'D', '', 'jJwKDmF8hM'),
('zfDiAFMjE4', 'B-zfDiAFMjE4', 'B', '', 'aYl1WwtZ0T'),
('zh5Wdo9vfT', 'B-zh5Wdo9vfT', 'B', '', 'YAnv0lB1Ur'),
('zJdcXw8Hib', 'B-zJdcXw8Hib', 'A', '', 'OGQ8YKN3JC'),
('ZNHrJEyT1v', 'B-ZNHrJEyT1v', 'C', '', 'cNbOmaJ9zt'),
('ZPBa9FDIyY', 'B-ZPBa9FDIyY', 'B', '', 'E9k5niHwf8'),
('Zt9q6sPbUc', 'B-Zt9q6sPbUc', 'D', '', 'rd7I8ngJ6h'),
('ZTUuER4m6w', 'B-ZTUuER4m6w', 'E', '', 'DLOc1bveup'),
('ZUzB1Quy2x', 'B-ZUzB1Quy2x', 'B', '', 'chBUxaMbIe'),
('ZXeVzgl5I6', 'B-ZXeVzgl5I6', 'B', '', 'snZ20aQm8x');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tanah`
--

CREATE TABLE `buku_tanah` (
  `id_buku_tanah` varchar(100) NOT NULL,
  `no_hak` varchar(20) NOT NULL,
  `id_jenis_hak` int(10) NOT NULL,
  `kode_desa` varchar(15) NOT NULL,
  `id_kondisi` int(10) NOT NULL DEFAULT 0,
  `id_bundel` varchar(15) DEFAULT NULL,
  `id_surat_ukur` varchar(100) DEFAULT NULL,
  `id_bundel_sengketa` varchar(15) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `nib` varchar(10) DEFAULT NULL,
  `valid` int(2) NOT NULL DEFAULT 0,
  `admin_valid` varchar(100) DEFAULT NULL,
  `admin_tambah` varchar(100) NOT NULL,
  `tgl_valid` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bundel`
--

CREATE TABLE `bundel` (
  `id_bundel` varchar(15) NOT NULL,
  `qrcode` varchar(25) NOT NULL,
  `nama_bundel` varchar(50) NOT NULL,
  `id_baris` varchar(10) NOT NULL,
  `kode_desa` varchar(15) NOT NULL,
  `sengketa` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `kode_desa` varchar(15) NOT NULL,
  `id_desa` varchar(10) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `kode_kec` varchar(10) NOT NULL,
  `qrcode` varchar(25) NOT NULL,
  `aktif` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`kode_desa`, `id_desa`, `nama_desa`, `kode_kec`, `qrcode`, `aktif`) VALUES
('0AcbnKzB4w', '09', 'GEUCEU KOMPLEK', 'vQDUw5G97E', 'D-0AcbnKzB4w', 1),
('0FRK1wZO2q', '03', 'DEAH GLUMPANG', '7ZSBpFugC9', 'D-0FRK1wZO2q', 1),
('0nyfkQrd16', '08', 'GEUCEU INIEM', 'vQDUw5G97E', 'D-0nyfkQrd16', 1),
('1QNDm5BzIO', '01', 'KEUDAH', 'P0EuDUepZS', 'D-1QNDm5BzIO', 1),
('2zNUCLlt7q', '05', 'LHONG CUT', 'vQDUw5G97E', 'D-2zNUCLlt7q', 1),
('3PrzORAlsj', '08', 'Mulia', 'xrUB3pWNdE', 'D-3PrzORAlsj', 1),
('49mbkX8law', '05', 'MERDUATI', 'P0EuDUepZS', 'D-49mbkX8law', 1),
('4iqAZasw1h', '01', 'PUNGE JURONG', '7ZSBpFugC9', 'D-4iqAZasw1h', 1),
('5BHGfD0vd9', '01', 'CEURIH', 'RACnZbx3mv', 'D-5BHGfD0vd9', 1),
('5E9fVZykPU', '07', 'Peunayong', 'xrUB3pWNdE', 'D-5E9fVZykPU', 1),
('5LfbYtkZJR', '02', 'COT MESJID', 'OqmAKvY9y4', 'D-5LfbYtkZJR', 1),
('5LJU0Zdn9w', '11', 'ASOE NANGGROE', '7ZSBpFugC9', 'D-5LJU0Zdn9w', 1),
('5zOcyLxSjZ', '05', 'PANGO DEAH', 'RACnZbx3mv', 'D-5zOcyLxSjZ', 1),
('6OqDvGwcrz', '03', 'ALUE NAGA', 'dGMiRCulON', 'D-6OqDvGwcrz', 1),
('6PNq1aBrSv', '00', 'Banda Aceh', 'uQDi4sXbNv', 'D-6PNq1aBrSv', 1),
('7luYRJwv3s', '02', 'Bandar Baru', 'xrUB3pWNdE', 'D-7luYRJwv3s', 1),
('8bQB2TfS9E', '10', 'LAMJABAT', '7ZSBpFugC9', 'D-8bQB2TfS9E', 1),
('8mgY7K06sW', '01', 'LUENG BATA', 'OqmAKvY9y4', 'D-8mgY7K06sW', 1),
('8nmIYdxc51', '10', 'Ateuk Deah Tanoh', 'beBLTiJ9xN', 'D-8nmIYdxc51', 1),
('9Clnw1fhxD', '04', 'Kampung Baru', 'beBLTiJ9xN', 'D-9Clnw1fhxD', 1),
('B0kWTh7o3f', '04', 'BITAI', 'I89e1rfYBH', 'D-B0kWTh7o3f', 1),
('bk5n83QiCz', '06', 'PANGO RAYA', 'RACnZbx3mv', 'D-bk5n83QiCz', 1),
('bkePTJXOAj', '01', 'JEULINGKE', 'dGMiRCulON', 'D-bkePTJXOAj', 1),
('BlUakLz8iq', '16', 'GAMPONG BLANG', '7ZSBpFugC9', 'D-BlUakLz8iq', 1),
('bpmuytE92B', '09', 'Lampulo', 'xrUB3pWNdE', 'D-bpmuytE92B', 1),
('BUqQKlVZ27', '03', 'Beurawe', 'xrUB3pWNdE', 'D-BUqQKlVZ27', 1),
('BwcaxWT04E', '09', 'RUKOH', 'dGMiRCulON', 'D-BwcaxWT04E', 1),
('By9iHke8ca', '06', 'PINEUNG', 'dGMiRCulON', 'D-By9iHke8ca', 1),
('bz9460OcwM', '07', 'IE MASEN KAYEE ADANG', 'dGMiRCulON', 'D-bz9460OcwM', 1),
('csMHJDGBd1', '05', 'LAMTEUMEN BARAT', 'I89e1rfYBH', 'D-csMHJDGBd1', 1),
('cU89HIFKlZ', '12', 'SURIEN', '7ZSBpFugC9', 'D-cU89HIFKlZ', 1),
('DCHENLPjWh', '09', 'LAMPALOH', 'OqmAKvY9y4', 'D-DCHENLPjWh', 1),
('e8BTOCWf1M', '02', 'ULEE LHE', '7ZSBpFugC9', 'D-e8BTOCWf1M', 1),
('eJNPxBjtR5', '02', 'TIBANG', 'dGMiRCulON', 'D-eJNPxBjtR5', 1),
('eVc53usALD', '10', 'Lamdingin', 'xrUB3pWNdE', 'D-eVc53usALD', 1),
('evoA1fKVIz', '01', 'LHONG RAYA', 'vQDUw5G97E', 'D-evoA1fKVIz', 1),
('fedsKcJyqX', '01', 'Ateuk Pahlawan', 'beBLTiJ9xN', 'D-fedsKcJyqX', 1),
('FHiUmLagVZ', '07', 'LAMGLUMPANG', 'RACnZbx3mv', 'D-FHiUmLagVZ', 1),
('gBY4RTXqfU', '07', 'GEUCEU KAYE JATO', 'vQDUw5G97E', 'D-gBY4RTXqfU', 1),
('GK1WshiPtd', '04', 'ILIE', 'RACnZbx3mv', 'D-GK1WshiPtd', 1),
('H8uOB2fq9h', '06', 'Laksana', 'xrUB3pWNdE', 'D-H8uOB2fq9h', 1),
('hH1YNoPcLa', '04', 'DEAH RAYA', 'dGMiRCulON', 'D-hH1YNoPcLa', 1),
('I86dk3Q45i', '07', 'SUKARAMAI', 'OqmAKvY9y4', 'D-I86dk3Q45i', 1),
('Ig2EJOdv8r', '08', 'KOPELMA DARUSSALAM', 'dGMiRCulON', 'D-Ig2EJOdv8r', 1),
('igGTnIhBH5', '11', 'Lambaro Skep', 'xrUB3pWNdE', 'D-igGTnIhBH5', 1),
('JNcSTurQCt', '09', 'BLANG OI', '7ZSBpFugC9', 'D-JNcSTurQCt', 1),
('jw0WS5qQaI', '09', 'PUNGE BLANG CUT', 'I89e1rfYBH', 'D-jw0WS5qQaI', 1),
('k3pERiBcZH', '13', 'GAMPONG BARO', '7ZSBpFugC9', 'D-k3pERiBcZH', 1),
('KA74jexk9Y', '07', 'Ateuk Jawo', 'beBLTiJ9xN', 'D-KA74jexk9Y', 1),
('LF1aQyIT3e', '06', 'BATOH', 'OqmAKvY9y4', 'D-LF1aQyIT3e', 1),
('Lhu2JqUGDI', '14', 'PUNGE UJONG', '7ZSBpFugC9', 'D-Lhu2JqUGDI', 1),
('MLXrYDaZA8', '04', 'Kuta Alam', 'xrUB3pWNdE', 'D-MLXrYDaZA8', 1),
('mZIL2prwjB', '01', 'LAMPOH DAYA', 'I89e1rfYBH', 'D-mZIL2prwjB', 1),
('NPD7QndC61', '08', 'Neusu Aceh', 'beBLTiJ9xN', 'D-NPD7QndC61', 1),
('Oh6SxbHcCT', '08', 'COT LAMKUWEUH', '7ZSBpFugC9', 'D-Oh6SxbHcCT', 1),
('oTqfv2RsPK', '02', 'PEULANGGAHAN', 'P0EuDUepZS', 'D-oTqfv2RsPK', 1),
('PDq9w2LFjv', '01', 'Kota Baru', 'xrUB3pWNdE', 'D-PDq9w2LFjv', 1),
('pDWJi8EXHy', '05', 'Sukaramai', 'beBLTiJ9xN', 'D-pDWJi8EXHy', 1),
('pYmitAqnJh', '06', 'PEUNYEURAT', 'vQDUw5G97E', 'D-pYmitAqnJh', 1),
('Qbjetu8Ccs', '10', 'LAMLAGANG', 'vQDUw5G97E', 'D-Qbjetu8Ccs', 1),
('quJXmEbZje', '02', 'Peuniti', 'beBLTiJ9xN', 'D-quJXmEbZje', 1),
('R84WUc1VYx', '02', 'LAMPEUOT', 'vQDUw5G97E', 'D-R84WUc1VYx', 1),
('RgsePDOV1c', '03', 'LAMBHUK', 'RACnZbx3mv', 'D-RgsePDOV1c', 1),
('rKdzbLvt8C', '07', 'GAMPONG PIE', '7ZSBpFugC9', 'D-rKdzbLvt8C', 1),
('rxDvwaMRiT', '04', 'LAM ARA', 'vQDUw5G97E', 'D-rxDvwaMRiT', 1),
('s34WrkxoNl', '07', 'ULEE PATA', 'I89e1rfYBH', 'D-s34WrkxoNl', 1),
('SrFxhQ8OJg', '09', 'Ateuk Munjing', 'beBLTiJ9xN', 'D-SrFxhQ8OJg', 1),
('szbfqQimZd', '08', 'GEUCEU MENARA', 'I89e1rfYBH', 'D-szbfqQimZd', 1),
('TAj3LCHe1u', '05', 'LAMSEUPEUNG', 'OqmAKvY9y4', 'D-TAj3LCHe1u', 1),
('TkVihzXRF7', '04', 'LAMBUNG', '7ZSBpFugC9', 'D-TkVihzXRF7', 1),
('TvdsWCgEtH', '15', 'LAMPASEH ACEH', '7ZSBpFugC9', 'D-TvdsWCgEtH', 1),
('Tzx1lSQFno', '05', 'LAMGUGOP', 'dGMiRCulON', 'D-Tzx1lSQFno', 1),
('U84x1LkPEV', '08', 'IE MASEN ULEE KARENG', 'RACnZbx3mv', 'D-U84x1LkPEV', 1),
('UFVTkSeqlY', '05', 'ALUE DEAH TEUNGOH', '7ZSBpFugC9', 'D-UFVTkSeqlY', 1),
('uM1xPkUady', '10', 'PRADA', 'dGMiRCulON', 'D-uM1xPkUady', 1),
('uZyJimCShP', '03', 'MIBO', 'vQDUw5G97E', 'D-uZyJimCShP', 1),
('vCLui8pe6x', '09', 'DOY', 'RACnZbx3mv', 'D-vCLui8pe6x', 1),
('VKabLA6wro', '04', 'GAMPONG PANDE', 'P0EuDUepZS', 'D-VKabLA6wro', 1),
('VkYPjnwC1N', '08', 'LAM DOM', 'OqmAKvY9y4', 'D-VkYPjnwC1N', 1),
('vYDlXfoZG2', '06', 'LAMPASEH ACEH', 'P0EuDUepZS', 'D-vYDlXfoZG2', 1),
('VyLUQ0YsbN', '03', 'LAMJAME', 'I89e1rfYBH', 'D-VyLUQ0YsbN', 1),
('WLo0sfzwe2', '03', 'Neusu Jaya', 'beBLTiJ9xN', 'D-WLo0sfzwe2', 1),
('WSbHec1u8C', '05', 'Keuramat', 'xrUB3pWNdE', 'D-WSbHec1u8C', 1),
('x1BTWulnHL', '02', 'LAMTEH', 'RACnZbx3mv', 'D-x1BTWulnHL', 1),
('XJlCDwjImr', '06', 'Setui', 'beBLTiJ9xN', 'D-XJlCDwjImr', 1),
('XZgbhWjY0D', '03', 'GAMPONG JAWA', 'P0EuDUepZS', 'D-XZgbhWjY0D', 1),
('Y85iecOptk', '04', 'BLANG CUT', 'OqmAKvY9y4', 'D-Y85iecOptk', 1),
('Ye1rtl8CJi', '06', 'DEAH BARO', '7ZSBpFugC9', 'D-Ye1rtl8CJi', 1),
('ygSxARDOqY', '06', 'LAMTEUMEN TIMUR', 'I89e1rfYBH', 'D-ygSxARDOqY', 1),
('yYz5VB8bGc', '03', 'PANTERIK', 'OqmAKvY9y4', 'D-yYz5VB8bGc', 1),
('YzBqsRpL9J', '02', 'EMPEROM', 'I89e1rfYBH', 'D-YzBqsRpL9J', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_hak`
--

CREATE TABLE `jenis_hak` (
  `id_jenis_hak` int(10) NOT NULL,
  `nama_jenis_hak` varchar(50) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `aktif` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_hak`
--

INSERT INTO `jenis_hak` (`id_jenis_hak`, `nama_jenis_hak`, `keterangan`, `aktif`) VALUES
(1, 'Hak Milik', 'HM', 1),
(2, 'Hak Guna Usaha', 'HGU', 1),
(3, 'Hak Guna Bangunan', 'HGB', 1),
(4, 'Hak Pakai', 'HP', 1),
(5, 'Hak Pengelolaan', 'HPe', 1),
(7, 'Hak Milik Satuan Rumah Susun', 'HMSRS', 1),
(8, 'Hak Wakaf', 'HW', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kec`
--

CREATE TABLE `kec` (
  `id_kec` varchar(10) NOT NULL,
  `kode_kec` varchar(15) NOT NULL,
  `qrcode` varchar(25) NOT NULL,
  `nama_kec` varchar(50) NOT NULL,
  `kode_kota` varchar(10) NOT NULL,
  `aktif` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kec`
--

INSERT INTO `kec` (`id_kec`, `kode_kec`, `qrcode`, `nama_kec`, `kode_kota`, `aktif`) VALUES
('03', '7ZSBpFugC9', 'KEC-7ZSBpFugC9', 'MEURAXA', '9JR3UBP2TE', 1),
('02', 'beBLTiJ9xN', 'KEC-beBLTiJ9xN', 'BAITURRAHMAN', '9JR3UBP2TE', 1),
('04', 'dGMiRCulON', 'KEC-dGMiRCulON', 'SYIAH KUALA', '9JR3UBP2TE', 1),
('08', 'I89e1rfYBH', 'KEC-I89e1rfYBH', 'JAYA BARU', '9JR3UBP2TE', 1),
('06', 'OqmAKvY9y4', 'KEC-OqmAKvY9y4', 'LUENG BATA', '9JR3UBP2TE', 1),
('05', 'P0EuDUepZS', 'KEC-P0EuDUepZS', 'KUTA RAJA', '9JR3UBP2TE', 1),
('09', 'RACnZbx3mv', 'KEC-RACnZbx3mv', 'ULEE KARENG', '9JR3UBP2TE', 1),
('00', 'uQDi4sXbNv', 'KEC-uQDi4sXbNv', 'BANDA ACEH', '9JR3UBP2TE', 1),
('07', 'vQDUw5G97E', 'KEC-vQDUw5G97E', 'BANDA RAYA', '9JR3UBP2TE', 1),
('01', 'xrUB3pWNdE', 'KEC-xrUB3pWNdE', 'KUTA ALAM', '9JR3UBP2TE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(10) NOT NULL,
  `nama_kondisi` varchar(50) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `aktif` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `nama_kondisi`, `keterangan`, `aktif`) VALUES
(0, 'Belum Di Tentukan', '-', 0),
(1, 'Baik', 'Kondidi baik tanpa ada kerusakan', 1),
(2, 'Rusak Ringan', 'Kerusakan Ringan Berupa Pinggiran berkas rusak, Pudar, Usang', 1),
(3, 'Rusak Sedang', 'Memiliki Kerusakan sudah luas mencapai setengah berkas tetapi masih bisa di kenali dan terbaca', 1),
(4, 'Rusak Berat', 'Kerusakan Meliputu 80% kerusakan dan Sulit untuk di kenali', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` varchar(10) NOT NULL,
  `kode_kota` varchar(15) NOT NULL,
  `qrcode` varchar(25) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `kode_prov` varchar(10) NOT NULL,
  `aktif` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kode_kota`, `qrcode`, `nama_kota`, `kode_prov`, `aktif`) VALUES
('01', '9JR3UBP2TE', 'K-9JR3UBP2TE', 'BANDA ACEH', 'kFTAQm3Zjw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lemari`
--

CREATE TABLE `lemari` (
  `id_lemari` varchar(15) NOT NULL,
  `qrcode` varchar(25) NOT NULL,
  `nama_lemari` varchar(50) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lemari`
--

INSERT INTO `lemari` (`id_lemari`, `qrcode`, `nama_lemari`, `keterangan`) VALUES
('0ItOYp3cdi', 'L-0ItOYp3cdi', 'GOLF 2', '-'),
('0uibFeMjBT', 'L-0uibFeMjBT', 'INDIA 3', '-'),
('1SLgquOy9U', 'L-1SLgquOy9U', 'ECHO 3', '-'),
('1ZECen30dG', 'L-1ZECen30dG', 'FOXTROT 3', '-'),
('2SiWUFBLr7', 'L-2SiWUFBLr7', 'DELTA 1', '-'),
('5YNVsRvgIT', 'L-5YNVsRvgIT', 'JULIETT 4', '-'),
('8PNASLXz35', 'L-8PNASLXz35', 'BRAVO 5', '-'),
('9iXlMhBvjt', 'L-9iXlMhBvjt', 'JULIETT 3', '-'),
('9RGcKEgX2u', 'L-9RGcKEgX2u', 'KILO 4', '-'),
('9x8NTFhKVj', 'L-9x8NTFhKVj', 'MIKE 5', '-'),
('anAFxPU5c1', 'L-anAFxPU5c1', 'JULIETT 5', '-'),
('aYl1WwtZ0T', 'L-aYl1WwtZ0T', 'ALFA 3', '-'),
('BCy6K9PEZ0', 'L-BCy6K9PEZ0', 'DELTA 4', '-'),
('chBUxaMbIe', 'L-chBUxaMbIe', 'KILO 3', '-'),
('cNbOmaJ9zt', 'L-cNbOmaJ9zt', 'GOLF 3', '-'),
('dfP9OK3IlT', 'L-dfP9OK3IlT', 'ECHO 4', '-'),
('DGCNeA1lfc', 'L-DGCNeA1lfc', 'HOTEL 1', '-'),
('DLOc1bveup', 'L-DLOc1bveup', 'HOTEL 2', '-'),
('E9k5niHwf8', 'L-E9k5niHwf8', 'JULIETT 2', '-'),
('GsUpAM9nVY', 'L-GsUpAM9nVY', 'INDIA 5', '-'),
('HR79hk64Cf', 'L-HR79hk64Cf', 'ALFA 1', '-'),
('HSYh7Ozv2f', 'L-HSYh7Ozv2f', 'BRAVO 2', '-'),
('J5RcwktB61', 'L-J5RcwktB61', 'JULIETT 1', '-'),
('jJwKDmF8hM', 'L-jJwKDmF8hM', 'GOLF 4', '-'),
('K8xs6uVULY', 'L-K8xs6uVULY', 'KILO 2', '-'),
('KilLxOruaW', 'L-KilLxOruaW', 'BRAVO 3', '-'),
('KXn9EA6au1', 'L-KXn9EA6au1', 'ECHO 5', '-'),
('MAXRa4ipUu', 'L-MAXRa4ipUu', 'HOTEL 3', '-'),
('MCjWqcZG1U', 'L-MCjWqcZG1U', 'CHARLIE 5', '-'),
('mCzHLJieWu', 'L-mCzHLJieWu', 'HOTEL 5', '-'),
('MNaOp9FjHC', 'L-MNaOp9FjHC', 'BRAVO 4', '-'),
('NCSolveTtq', 'L-NCSolveTtq', 'GOLF 5', '-'),
('OCS0QDbz9X', 'L-OCS0QDbz9X', 'INDIA 2', '-'),
('oecNYCdJ9S', 'L-oecNYCdJ9S', 'ALFA 5', '-'),
('OGQ8YKN3JC', 'L-OGQ8YKN3JC', 'DELTA 2', '-'),
('OioeSYQlKB', 'L-OioeSYQlKB', 'FOXTROT 5', '-'),
('PBLxCvf23z', 'L-PBLxCvf23z', 'ECHO 2', '-'),
('plSY5UmB4G', 'L-plSY5UmB4G', 'FOXTROT 1', '-'),
('PUTw7OuVkA', 'L-PUTw7OuVkA', 'BRAVO 1', '-'),
('qRDjfXr7Zo', 'L-qRDjfXr7Zo', 'DELTA 5', '-'),
('R5l8Jhrn0c', 'L-R5l8Jhrn0c', 'KILO 5', '-'),
('r7jyDPTtQv', 'L-r7jyDPTtQv', 'CHARLIE 1', '-'),
('r9nXvVUWed', 'L-r9nXvVUWed', 'FOXTROT 4', '-'),
('rd7I8ngJ6h', 'L-rd7I8ngJ6h', 'INDIA 4', '-'),
('rGDmyS9Avl', 'L-rGDmyS9Avl', 'KILO 1', '-'),
('snZ20aQm8x', 'L-snZ20aQm8x', 'MIKE 2', '-'),
('staixqvUZl', 'L-staixqvUZl', 'MIKE 3', '-'),
('swtA2Pn73C', 'L-swtA2Pn73C', 'INDIA 1', '-'),
('TARrXDJmMu', 'L-TARrXDJmMu', 'CHARLIE 4', '-'),
('th6OKXVEw2', 'L-th6OKXVEw2', 'ALFA 2', '-'),
('TrduElHnm9', 'L-TrduElHnm9', 'DELTA 3', '-'),
('vlrH2d9pQE', 'L-vlrH2d9pQE', 'HOTEL 4', '-'),
('vSD0dX2hx6', 'L-vSD0dX2hx6', 'ALFA 4', '-'),
('VvtD6Mq1b3', 'L-VvtD6Mq1b3', 'CHARLIE 2', '-'),
('w4d7tY18XU', 'L-w4d7tY18XU', 'CHARLIE 3', '-'),
('Wxk3CeyrHZ', 'L-Wxk3CeyrHZ', 'MIKE 1', '-'),
('XhbjRS31dC', 'L-XhbjRS31dC', 'FOXTROT 2', '-'),
('YAnv0lB1Ur', 'L-YAnv0lB1Ur', 'GOLF 1', '-'),
('z0uph1lFa5', 'L-z0uph1lFa5', 'ECHO 1', '-'),
('Z7W283rfOV', 'L-Z7W283rfOV', 'MIKE 4', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `aktif` int(2) NOT NULL,
  `jenis` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama_lengkap`, `jabatan`, `aktif`, `jenis`) VALUES
('1106060312960001', 'M. Iqbal Maulana', 'Operator Komputer', 0, 3),
('1106062307950003', 'Muhammad Haiqal', 'Asisten Pengadministrasi Umum', 0, 3),
('1106105904950003', 'Munirah', 'Asisten Pengadministrasi Umum', 0, 3),
('1171026204860001', 'Aprima Winata', 'Asisten Pengadministrasi Umum', 0, 3),
('196408071986031004', 'Drs.SURIA BAKTI, M.Si', 'Kepala Kantor Pertanahan', 1, 1),
('196904032012121002', 'Khairullah', 'Pengadministrasi Umum', 0, 1),
('197207082012121003', 'Darwin', 'Pengadministrasi Umum', 0, 1),
('197303281992032001', 'Anny Setiawati, A.Ptnh, M.M.', 'Kepala Seksi Penetapan Hak dan Pendaftaran', 1, 1),
('197408071996032002', 'Cut Noni Marlina, S.H., M.H', 'Penata Pertanahan Pertama', 1, 1),
('197604301997031002', 'Irvandi Satria, S.SiT', 'Kepala Seksi Survei dan Pemetaan', 1, 1),
('198004292007101001', 'Roy Mubarak, SE, M.M.', 'Penata Pertanahan Pertama', 0, 1),
('198301072009121004', 'Imed Badratul', 'Kepala Sub Bagian Tata Usaha', 0, 1),
('198502142006041002', 'Sri Hendrian Masri', 'Penata Kadastral Pertama', 0, 1),
('198507282011011004', 'Muhadhir, S.H.', 'Penata Pertanahan Pertama', 0, 1),
('198608202009121003', 'Rafli Hidayat', 'Petugas Ukur', 0, 1),
('198702192009122003', 'Misbah Andalia', 'Pengadministrasi Pertanahan', 0, 1),
('198704282009031001', 'Teuku Fazrul Afrizal, S.E, S.H', 'Penata Kadastral Pertama', 0, 1),
('199007062012121001', 'Fajar Abdul Rochim', 'Petugas Ukur', 0, 1),
('199306182019032003', 'Yunni Efrina Caniago, S.H', 'Analis Hukum Pertanahan', 0, 1),
('199401232018012001', 'QAMILAH AYUNI AZZAHRA, S.H', 'Penata Pertanahan Pertama', 0, 1),
('Naufal Sulistyanto, ', '199905292019031001', 'Petugas Ukur', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `tgl_dikembalikan` date DEFAULT NULL,
  `tgl_susun` date DEFAULT NULL,
  `id_waktu` int(10) NOT NULL,
  `id_warkah` varchar(100) DEFAULT NULL,
  `id_buku_tanah` varchar(100) DEFAULT NULL,
  `id_surat_ukur` varchar(100) DEFAULT NULL,
  `admin_tambah` varchar(100) NOT NULL,
  `admin_kembali` varchar(100) DEFAULT NULL,
  `admin_susun` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `induk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prov`
--

CREATE TABLE `prov` (
  `id_prov` varchar(10) NOT NULL,
  `kode_prov` varchar(15) NOT NULL,
  `qrcode` varchar(25) NOT NULL,
  `nama_prov` varchar(50) NOT NULL,
  `aktif` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prov`
--

INSERT INTO `prov` (`id_prov`, `kode_prov`, `qrcode`, `nama_prov`, `aktif`) VALUES
('01', 'kFTAQm3Zjw', 'P-kFTAQm3Zjw', 'ACEH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_ukur`
--

CREATE TABLE `surat_ukur` (
  `id_surat_ukur` varchar(100) NOT NULL,
  `nomor` varchar(5) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kode_desa` varchar(15) NOT NULL,
  `id_bundel` varchar(15) DEFAULT NULL,
  `id_bundel_sengketa` varchar(15) DEFAULT NULL,
  `id_kondisi` int(10) NOT NULL DEFAULT 0,
  `status` int(2) NOT NULL DEFAULT 0,
  `nib` int(10) DEFAULT NULL,
  `valid` int(2) NOT NULL DEFAULT 0,
  `admin_valid` varchar(100) DEFAULT NULL,
  `admin_tambah` varchar(100) NOT NULL,
  `tgl_valid` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(10) NOT NULL,
  `pelayanan` varchar(100) NOT NULL,
  `durasi` int(5) NOT NULL,
  `aktif` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `pelayanan`, `durasi`, `aktif`) VALUES
(8, 'Peralihan Hak', 10, 1),
(9, 'Pemecahan/ Pemisahan/Penggabungan', 24, 1),
(10, 'Pembaharuan HGB', 29, 1),
(11, 'Pembaharuan HP', 29, 1),
(12, 'Perpanjangan HGB', 29, 1),
(13, 'Perpanjangan HP', 30, 1),
(14, 'Wakaf dari tanah terdaftar', 10, 1),
(15, '(SKPT) Surat keterangan Pendaftaran Tanah', 9, 1),
(16, 'Roya', 10, 1),
(17, 'Penggantian Sertipikat Karena Blangko Lama', 30, 1),
(18, 'Penggantian Sertipikat Karena rusak', 30, 0),
(19, 'Penggantian Sertipikat Karena Hilang', 59, 0);

-- --------------------------------------------------------

--
-- Table structure for table `warkah`
--

CREATE TABLE `warkah` (
  `id_warkah` varchar(100) NOT NULL,
  `nomor` int(10) NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_bundel` varchar(15) DEFAULT NULL,
  `id_kondisi` int(10) NOT NULL DEFAULT 0,
  `id_bundel_sengketa` int(10) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `id_buku_tanah` varchar(100) DEFAULT NULL,
  `valid` int(2) NOT NULL DEFAULT 0,
  `admin_valid` varchar(100) DEFAULT NULL,
  `admin_tambah` varchar(100) NOT NULL,
  `tgl_valid` date DEFAULT NULL,
  `kode_desa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `baris`
--
ALTER TABLE `baris`
  ADD PRIMARY KEY (`id_baris`),
  ADD UNIQUE KEY `qrcode` (`qrcode`);

--
-- Indexes for table `buku_tanah`
--
ALTER TABLE `buku_tanah`
  ADD PRIMARY KEY (`id_buku_tanah`);

--
-- Indexes for table `bundel`
--
ALTER TABLE `bundel`
  ADD PRIMARY KEY (`id_bundel`),
  ADD UNIQUE KEY `qrcode` (`qrcode`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`kode_desa`);

--
-- Indexes for table `jenis_hak`
--
ALTER TABLE `jenis_hak`
  ADD PRIMARY KEY (`id_jenis_hak`);

--
-- Indexes for table `kec`
--
ALTER TABLE `kec`
  ADD PRIMARY KEY (`kode_kec`),
  ADD UNIQUE KEY `qrcode` (`qrcode`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`),
  ADD UNIQUE KEY `namaKondisi` (`nama_kondisi`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kode_kota`),
  ADD UNIQUE KEY `qrcode` (`qrcode`);

--
-- Indexes for table `lemari`
--
ALTER TABLE `lemari`
  ADD PRIMARY KEY (`id_lemari`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `prov`
--
ALTER TABLE `prov`
  ADD PRIMARY KEY (`kode_prov`),
  ADD UNIQUE KEY `qrcode` (`qrcode`);

--
-- Indexes for table `surat_ukur`
--
ALTER TABLE `surat_ukur`
  ADD PRIMARY KEY (`id_surat_ukur`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Indexes for table `warkah`
--
ALTER TABLE `warkah`
  ADD PRIMARY KEY (`id_warkah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
