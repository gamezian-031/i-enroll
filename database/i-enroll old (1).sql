-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 10:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-enroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `curriculums`
--

CREATE TABLE `curriculums` (
  `id` int(11) NOT NULL,
  `idCurr` varchar(10) NOT NULL,
  `idCourse` varchar(10) NOT NULL,
  `nameCurr` text NOT NULL,
  `department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curriculums`
--

INSERT INTO `curriculums` (`id`, `idCurr`, `idCourse`, `nameCurr`, `department`) VALUES
(3, 'BSCS', 'CS', 'Bachelor of Science in Computer Science (2020)', 'CICT');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `idDept` varchar(10) NOT NULL,
  `nameDept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `idDept`, `nameDept`) VALUES
(1, 'CAS', 'College of Arts and Sciences'),
(2, 'CICT', 'College of Information & Communication Technology'),
(3, 'CENG', 'College of Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `enroll-codes`
--

CREATE TABLE `enroll-codes` (
  `id` int(11) NOT NULL,
  `enrollCode` varchar(30) NOT NULL,
  `idStud` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `semester` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll-codes`
--

INSERT INTO `enroll-codes` (`id`, `enrollCode`, `idStud`, `year`, `semester`) VALUES
(1, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', '2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `idLog` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  `source` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `target` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `idLog`, `date`, `source`, `action`, `target`) VALUES
(1, '67c40fd1a6c3159a22eba9f483c3c07b449d35302577d098136c06a011b12815', '2022-11-03 18:23:19', 'admin2022init', 'CREATE / ADD', 'PE1'),
(2, '5f3f23b48ad2295f085c8140580a0082eec255bcb8c92a5f185f52ea985dc120', '2022-11-03 18:25:39', 'admin2022init', 'EDIT / CHANGE', 'AL101'),
(3, '8517c149ee3a7b728042a3fd9357d299b162bd620ddd7d14defcb9e89470ed74', '2022-11-03 18:26:03', 'admin2022init', 'EDIT / CHANGE', 'AL101'),
(4, '19f5c623680a78f92bf45162832624e8e15d01bb03324f20a0878a95f03d1118', '2022-11-03 18:27:49', 'admin2022init', 'DELETE / REMOVE', 'PE1'),
(5, '05b97e6e6da3bfd8069a3f0836a4aaaae1b1b98ebd1d0cdc2d97507f4b3cc094', '2022-11-03 18:28:09', 'admin2022init', 'CREATE / ADD', 'PE1'),
(6, '128663643d5ec0197541a00e5fbefbaa4071ceff511173213f589a26b4b89fda', '2022-11-03 18:37:56', 'admin2022init', 'CREATE / ADD', 'CC103'),
(7, 'aea888875887bbcc6b38d7f3f7ec64738fad8208621bb7f37914121efa42b69e', '2022-11-03 18:38:10', 'admin2022init', 'EDIT / CHANGE', 'CC103'),
(8, '5dddfd4525b78a3b792986e2517f6ae1184ac3b4c2461d73fb0fbeb97e1082d7', '2022-11-03 18:38:37', 'admin2022init', 'CREATE / ADD', 'CC104'),
(9, '45d5fa6fb3845b583bdba95c45b79bdc653ad610a2b0efcf05ccbf10f815eac1', '2022-11-03 18:39:03', 'admin2022init', 'CREATE / ADD', 'CC105'),
(10, '2d9d5de4cdc7d7ba4b99708026c59c657c0b36e58170b5c19753dfcd4ba181bb', '2022-11-03 18:39:25', 'admin2022init', 'CREATE / ADD', 'DS102'),
(11, '747de8177f8acd98ef2fb253a76dc71f8a8e03c1fe646dbcd7c86a267150276b', '2022-11-03 18:39:44', 'admin2022init', 'CREATE / ADD', 'GE3'),
(12, 'b020d1c15a7fdf648fb6fb505580de14c14ce25f5ed24d3b4d6609703abe966a', '2022-11-03 18:40:08', 'admin2022init', 'CREATE / ADD', 'GE4'),
(13, '7066ea704b39d0eebb3cbc4a7af846dc0d057151e98e15d13af19378eef7746b', '2022-11-03 18:40:28', 'admin2022init', 'CREATE / ADD', 'PE2'),
(14, 'db1abc8bf809866cc0e262b99130de3b6a5f57b7e314aa0a63a3fb7841b65844', '2022-11-03 18:40:56', 'admin2022init', 'CREATE / ADD', 'GE11'),
(15, '34da54fa9b024fb3c5f2570c397f60dfa241d2d1b1923de6fcf527d03d1d841e', '2022-11-03 18:41:13', 'admin2022init', 'CREATE / ADD', 'NSTP2'),
(16, '4bf7b45e1700fee72d82381c8b73f67f2f1be58f2a3e332d10cd702e29729137', '2022-11-03 18:41:25', 'admin2022init', 'EDIT / CHANGE', 'NSTP2'),
(17, '57631e2d180248f062fec4477cda01041ea68b29a187a4129e6a45a46aa5eb60', '2022-11-03 18:41:51', 'admin2022init', 'CREATE / ADD', 'NSTP1'),
(18, '04110e28178ab827edd965949739ef60d8a327a88cb0cdd5a796a77dd1b4ba8a', '2022-11-03 20:20:45', 'admin2022init', 'CREATE / ADD', 'CC106'),
(19, '3f5f943232db96eab3f85271d978cd35b26029846b9023d161506a62469fc5ca', '2022-11-03 20:21:10', 'admin2022init', 'CREATE / ADD', 'SDF104'),
(20, 'f17d378f02b112ae0d24f7fb0f41f4b0805e27e4918dda22c0f1fbd88c05fe52', '2022-11-03 20:24:53', 'admin2022init', 'CREATE / ADD', 'AL102'),
(21, '019d562a60880770a50541a5f6d5d1ba3362e4d7800381e5858e69ed101b569c', '2022-11-03 20:25:13', 'admin2022init', 'CREATE / ADD', 'NC101'),
(22, 'ef3518f05287dac1bf6d52099968e675aaca974063d946a383f8c05e84108489', '2022-11-03 20:25:40', 'admin2022init', 'CREATE / ADD', 'GE5'),
(23, '96ad76b743d83807ab42be145a2afc48bace4c808bd0e7a7daf7b297cd4dc776', '2022-11-03 20:26:02', 'admin2022init', 'CREATE / ADD', 'GE6'),
(24, '50ce6737511f042e3f52c7718b8d2b899aa868dd6380dabdb2cc92acd92378d4', '2022-11-03 20:26:22', 'admin2022init', 'CREATE / ADD', 'GEE22'),
(25, '3bb501f71ed2b936af0878777dc9363252abe488b4f975746af5fb9da474c295', '2022-11-03 20:27:22', 'admin2022init', 'CREATE / ADD', 'IT100'),
(26, '20887b73600bd2cca5ed6e3c12cb666d92f60b253897a11180e3f911cb950a24', '2022-11-03 20:27:53', 'admin2022init', 'CREATE / ADD', 'PE3'),
(27, 'f1289706a15be67e8214f68b90f16b31c7dc0ef7d674cfb406c895b8ca91ce96', '2022-11-03 20:28:18', 'admin2022init', 'CREATE / ADD', 'AR101'),
(28, '7af24fb0b5056fbd6dead38cc1bf102ea17e7561ca19c2966b597006647a83bb', '2022-11-03 20:31:14', 'admin2022init', 'CREATE / ADD', 'OS101'),
(29, '1ded3c13f771530f47c84e93e87c3088e28bfaf5ec18a385c1b46c0ebe4fa088', '2022-11-03 20:32:18', 'admin2022init', 'CREATE / ADD', 'PL101'),
(30, '3f967d683f6de3798015c74ceb2a261bd81e16ed98545ad159cc3e12131a9f76', '2022-11-03 20:34:54', 'admin2022init', 'CREATE / ADD', 'HCI101'),
(31, 'ad66cd6d7d65a994b6a27a546558e1a3099845ef14ab344b1c4c90147fbf926a', '2022-11-03 20:35:20', 'admin2022init', 'CREATE / ADD', 'AL103'),
(32, 'decc278da7db652a6701fa1a76de25e3bed856432fe3a89ca458565fe96ea0d1', '2022-11-03 20:36:12', 'admin2022init', 'CREATE / ADD', 'GE7'),
(33, 'cc6e97f6b86b238cd7b97df7c5d0f8d4915bd3a1f831548165c9f4ef6e11e820', '2022-11-03 20:36:27', 'admin2022init', 'CREATE / ADD', 'GE8'),
(34, '07cd0fa9a3d16f4ca02c3306ac7cb26d8943cfb4f894a901805f632b762b6ec6', '2022-11-03 20:36:43', 'admin2022init', 'CREATE / ADD', 'GEE32'),
(35, 'e55ece42f1aa7ec25bc3b84507592a2b68a1044cd0c883f93b49cbc4126f8c00', '2022-11-03 20:37:02', 'admin2022init', 'CREATE / ADD', 'PE4'),
(36, '31670829d36da2c2db74584b80910f659df222cc8189a1381333af7c4b9cf798', '2022-11-03 20:38:44', 'admin2022init', 'CREATE / ADD', 'IAS101'),
(37, '7d02e42f02d8f03b89d19714e5379de0a9ab53400089e10ba607c393ddd8aeb4', '2022-11-03 20:39:09', 'admin2022init', 'CREATE / ADD', 'SE101'),
(38, 'cfde04311303c7caaa55d1594622d66b0ef04a2b11fe9d08b1542da966399114', '2022-11-03 20:40:13', 'admin2022init', 'CREATE / ADD', 'ELEC1'),
(39, '28f109b175f7fc8be03704e5e8b4fe97e9c2adf192e28d1240d26950c19f62f6', '2022-11-03 20:40:31', 'admin2022init', 'CREATE / ADD', 'CC107'),
(40, '47b686c8bc16f29c057b541fb824b1ced23b3bb6ebf9ddda0e84673bf147ca4c', '2022-11-03 20:40:51', 'admin2022init', 'CREATE / ADD', 'DS103'),
(41, 'cb9cdeb9f4402c927a0f31b1c9426fe66d1cc72ca95da34b8066f6521170c0e7', '2022-11-03 20:41:15', 'admin2022init', 'CREATE / ADD', 'GE9'),
(42, '64c557532763a0d5be9b816f46aa79b4ff1a9994f79a0995a2f81ef1b04b8734', '2022-11-03 20:41:36', 'admin2022init', 'CREATE / ADD', 'IT101'),
(43, '83353165ef3520f114ed2ed9c71758c9db528e9eaf4f0314f530f0b1e80f6fd7', '2022-11-03 20:42:20', 'admin2022init', 'CREATE / ADD', 'GEE13'),
(44, '31273550f28e33f2ba0608d52e6f39f0cac938bfd3e4cbf563ad6c9fa67249f7', '2022-11-03 20:46:29', 'admin2022init', 'CREATE / ADD', 'ELEC2'),
(45, '37183ff95c97014fa8c9f2c7a4363a2bd480c5fd231c20ea4dc5d29a7c9161f7', '2022-11-03 20:47:05', 'admin2022init', 'CREATE / ADD', 'SE102'),
(46, '7d0d1942154f154a9a034f34cf3a967f981f4fc0a0e811837034ac8231518e5e', '2022-11-03 20:47:26', 'admin2022init', 'CREATE / ADD', 'THS101'),
(47, '51dcdbb22556a178f1f5b24ada77297bc73ef83eaa1ff0566bf9b4ce34778d27', '2022-11-03 20:47:56', 'admin2022init', 'CREATE / ADD', 'ELEC3'),
(48, 'bc33b2e6772f6de7fb908cb2be9ce21f161f2ad996db8d8f8118097fe68226ff', '2022-11-03 20:55:13', 'admin2022init', 'CREATE / ADD', 'CC108'),
(49, '5ebd3adc19036b756b45317dcefba46ebdb286a717d76b87f8b74717989783f9', '2022-11-03 20:57:15', 'admin2022init', 'CREATE / ADD', 'OS102'),
(50, '0ba5770ee8fb23104a99752779287d2df255431b49eb33b079de9799b6b03c2a', '2022-11-03 21:00:10', 'admin2022init', 'CREATE / ADD', 'SDF105'),
(51, '303c323e790d6bd8941a3266278024b56cd1385c9033bbb5aed48e9c72ba23b7', '2022-11-03 21:00:31', 'admin2022init', 'CREATE / ADD', 'SP101'),
(52, '7ccfaf66be34af373aebcf34b1a42b8cce07c450d7a295f47fea93d3b2bfad52', '2022-11-03 21:02:03', 'admin2022init', 'CREATE / ADD', 'THS102'),
(53, 'a96a1bf129eb488030ea00ff29d1abf7410dc0b52510fd78562cee57a47eeb02', '2022-11-03 21:02:27', 'admin2022init', 'CREATE / ADD', 'ELEC 4'),
(54, '2e78a30e258810a66d296f512e27850dc08865f5d63ad799f716ced01e1fec04', '2022-11-03 21:02:43', 'admin2022init', 'CREATE / ADD', 'ELEC 5'),
(55, '521f7bf7a82d589bd578708123ea1cc621d9da752aba26f6cda0a483a13f138f', '2022-11-03 21:05:27', 'admin2022init', 'CREATE / ADD', 'IT102'),
(56, '2e8ce2ad5dcfdda83f105f55a551a58751a4db967ccd67788bd92ab5f76bfb87', '2022-11-03 21:34:53', 'admin2022init', 'CREATE / ADD', 'PRC101'),
(57, '837c2d53b8a42cbe4a982df36c75033b5089eef1ea246553f1308236505249ad', '2022-11-03 22:48:22', 'admin2022init', 'EDIT / CHANGE', 'GE3'),
(58, '762304f03506b97499d8832fdcde4949dec2a53655c59882dcc4d0ea9dcf6454', '2022-11-03 22:48:28', 'admin2022init', 'EDIT / CHANGE', 'CC106'),
(59, '5f8a55dd0c46bb20a925f4add3b3aa81faf9719e25933c6fbef2beafa5ce6406', '2022-11-03 22:48:33', 'admin2022init', 'EDIT / CHANGE', 'SDF104'),
(60, '6c539a49c69b033114bd6d298b8a0d0b11eab9137f1cdbba2938eb2729c1e0f5', '2022-11-03 22:48:39', 'admin2022init', 'EDIT / CHANGE', 'CC108'),
(61, 'd1a68b4e32f8a35cb1bdc4c47f0f436e06541f2d6fc75613d64d341006d3a8a3', '2022-11-04 11:22:12', 'admin2022init', 'CREATE / ADD', 'HCI102'),
(62, '9b988e4f56da81fd7df1c93e97cf28ef817f09e8c3d5a31165b91f3126f222e7', '2022-11-04 15:09:51', 'admin2022init', 'EDIT / CHANGE', 'CC101'),
(63, '9f57624a42f23be27593ae0a1c07f580da4a7caa4b5b919fdd06636cd4136a01', '2022-11-04 15:09:57', 'admin2022init', 'EDIT / CHANGE', 'CC102'),
(64, '80d4ed776363a337e73423c07e051b0ec6738836a35e1c19a9582fb4c570c3ad', '2022-11-04 15:10:01', 'admin2022init', 'EDIT / CHANGE', 'DS101'),
(65, '0db0daca619043d73b7d18d5c40656f2cc88f2001e253fb2fbe5042f3a278ca5', '2022-11-04 15:10:05', 'admin2022init', 'EDIT / CHANGE', 'AL101'),
(66, 'cbaedf2f67d2db8a0c494c86eae9a24cc441e7453d78ec0842aa9b2d3e013910', '2022-11-04 15:10:19', 'admin2022init', 'EDIT / CHANGE', 'GE1'),
(67, '4f0d30d71f6ab92134ac574f42b1b1c1be6ff260697eea927a069c186051ba70', '2022-11-04 15:10:25', 'admin2022init', 'EDIT / CHANGE', 'GE2'),
(68, '230c692953635a5205730c85f2e04386338103679f6e44cb12f7a71fc90f8067', '2022-11-04 15:10:29', 'admin2022init', 'EDIT / CHANGE', 'GE10'),
(69, '47a6a83abadda2b3ebcd9e10f532f7d078ba391abbdc91c248d7093ec7e3c1a6', '2022-11-04 15:10:33', 'admin2022init', 'EDIT / CHANGE', 'PE1'),
(70, '09fdce572c4d67b94ab8d8753176d3c03aa21047b9fb119f65f1eabb95f51656', '2022-11-04 15:10:39', 'admin2022init', 'EDIT / CHANGE', 'NSTP1'),
(71, 'f502188ea5c5737f11f58c3bee47d98137c68746b65d7541bb6abfe4daa03307', '2022-11-04 15:11:18', 'admin2022init', 'EDIT / CHANGE', 'CC103'),
(72, '9ac58ba8fee081ad3b861d25a223fadb53743a67822b980d4a98af4805b9462f', '2022-11-04 15:11:25', 'admin2022init', 'EDIT / CHANGE', 'CC104'),
(73, '86b2ef4bb586f9a8c649db75a68e9dffcd6f5cf91e999f105cb71bb32c50b3fd', '2022-11-04 15:11:30', 'admin2022init', 'EDIT / CHANGE', 'CC105'),
(74, '55d01d3be3729cade8660278bb036dd69b0bd468204160d65c2dc44191ff08d1', '2022-11-06 16:54:58', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(75, 'fe767d4fbfd7bb1e755c70fdfa6c1593257ab8764b6ae94d480071bd20c3c4d6', '2022-11-06 16:55:59', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(76, '1f634e2c9f9c2925b90ec4fe1375b26411b7874398d557fa83f7cd2eefccba02', '2022-11-06 16:57:02', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(77, '1fc6df7d4ecdca53ce90efcea12cc4607ee8a93e6f268eea3d4ba4b9baf080ee', '2022-11-06 16:58:58', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(78, '6ae45385b8dfcbb7236fdb6da553a3960776e6395cb83d8b6a7f76c6ef7c8dd1', '2022-11-06 17:00:50', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(79, '6fab3158849b60b672261a6f82df574e7adf115f9bd03e72ba990b350bbb40da', '2022-11-06 17:06:37', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(80, '69daa8588b4fa0542ebe4ef6e9e98e203e0e7b938b936e97866f38bac48d570f', '2022-11-06 17:07:05', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(81, '1f3002ae99601e3219f812856f9da5c9f00347c04d131d58c964a910955ebd1f', '2022-11-06 17:09:54', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(82, '676002539194753ad1b58d416e6d704bcdcac568381565dab4d060cc1db4bd2e', '2022-11-06 17:11:39', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(83, '610d3ade2b964d13c0573368cafb6501dd891e4b0b6cc1d397bb3c39ffa6b71a', '2022-11-06 17:12:03', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(84, 'c19798ce916997a9fab74e9b1cc2360f32ea1081e8f2c63050c682ba93546358', '2022-11-06 19:08:04', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(85, 'c51c2457b03cee11303ed078a3232a4de6a324e00614b58b7cd9faa526326cad', '2022-11-06 19:09:49', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(86, '6b96b426359dd5749580f19a9626d67d3d50d1d35d72c69682eb5e4f10d022eb', '2022-11-06 20:49:39', 'admin2022init', 'ADD SECTION', 'CS1A'),
(87, 'cd1a60ef4f4e58a72fbe5ff78207206e9e39e05f88cc0ec80b85d18594e48de2', '2022-11-06 21:30:08', 'admin2022init', 'DELETE / REMOVE', 'CC101'),
(88, 'b6952a25397be0097bd94aedb6f99edc92e9d760d2d3eb453a2df954c6c6aca0', '2022-11-06 21:30:44', 'admin2022init', 'CREATE / ADD', 'CC101'),
(89, '72c49e20bb0382c879fe2920557317c3b8885cda004109b08a3515ce93f63ca4', '2022-11-06 21:34:24', 'admin2022init', 'REMOVE SECTIONS', 'CC101'),
(90, '13fc79d8ae582acfe5bb7cdfd71bb32e08a9a10a2147c8a7223f538a691c2d2a', '2022-11-06 21:39:55', 'admin2022init', 'ADD SECTION', 'CS1A'),
(91, 'f5c151278426a537daba09cb0a66fb8896333edefb350bcd4490e66e64415165', '2022-11-06 21:40:17', 'admin2022init', 'ADD SECTION', 'CS1B'),
(92, 'a58f9dec1c82106b984af2ff1b4125793ffd996182df1c5ae9e36a64f93c7327', '2022-11-06 21:48:00', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(93, '53de26ac84f6f7f11cab9417ac08ba72d51904a5fdc9af7c6d4c7f45586c77d7', '2022-11-07 12:45:59', 'admin2022init', 'ADD SECTION', 'CS1A'),
(94, 'c59c39750362724655d524878b6ddea4e51fef38251e18faa7cffd3dde02e748', '2022-11-07 12:48:00', 'admin2022init', 'ADD SECTION', 'CS1A'),
(95, 'e1a3856d54f23430c8edb37c9da37757f7a37e666a4b2299d512e002d1463378', '2022-11-07 12:51:45', 'admin2022init', 'ADD SECTION', 'CS1A'),
(96, 'e24bc99e5543ddd9483ba3a40958dccf9e4a64d6a8e10ced0bf65c30d795cfcf', '2022-11-07 13:08:52', 'admin2022init', 'ADD SECTION', 'CS1A'),
(97, 'e78d339e43c5eec8da56475ca758abec6de9ff2ebc224d563aee6cb99883a912', '2022-11-07 13:47:58', 'admin2022init', 'ADD SECTION', 'CS1A'),
(98, '36b8ed9e32bcfb01d95c136be9238443fad14ac8bf7199255d852c3c030378b3', '2022-11-10 17:00:00', 'SYSTEM', 'ADD STUDENT', ''),
(99, 'fab70ba5c714635e9566819e1db325f85860b6b43c31694713a0da34197575a6', '2022-11-10 17:04:07', 'SYSTEM', 'ADD STUDENT', '21-00214'),
(100, '949b5ab81497883e98834691232d63061e63c86181921edfb8bb372a444455ac', '2022-11-10 17:06:33', 'SYSTEM', 'ADD STUDENT', '21-00214'),
(101, 'c16be0eac85e3f0740055562dadb0b7cd176395064447042c0ebceb0c7e6e92c', '2022-11-10 17:07:03', 'SYSTEM', 'ADD STUDENT', '21-00214'),
(102, 'e81d7afb25fb5d4c02f3d62f10a2f4343a063e853c0f3acc3eca180a8a26fac9', '2022-11-10 17:10:24', 'SYSTEM', 'ADD STUDENT', '21-00214'),
(103, 'ce21259e3746a39dc1350a02b30c2b4b8396c85979756c546a12690d898e2ce8', '2022-11-10 17:22:23', 'SYSTEM', 'ADD STUDENT', '21-00214'),
(104, '60bed1e153fc1bfb6a622d74a7be4c63da5c6f8b6fe4ec13191e4b268fd8f760', '2022-11-10 19:54:10', 'SYSTEM', 'ADD STUDENT', '21-01244'),
(105, 'e3fb50c257d8363b749c829ff5e7ebf0c059a5c1d68fb272a0c61394099ad34b', '2022-11-10 19:55:41', 'SYSTEM', 'ADD STUDENT', '21-01244'),
(106, 'dfddc8e1539e0391b4defd8baa533af6b28bbecfbd0a93e96d5d284ff4b32e6e', '2022-11-10 20:10:39', 'SYSTEM', 'ADD STUDENT', '21-01244'),
(107, 'd31318282ace314274178a22aee080ba1f5e736794fee6f7edef67019262b910', '2022-11-10 22:09:11', 'admin2022init', 'REMOVE SCHEDULE', '3'),
(108, '6823af508810d558dbff9a096022ab9261c02e838de996f0af9dcd45fbeacc4d', '2022-11-10 22:12:06', 'admin2022init', 'ADD SECTION', 'CS1A'),
(109, '40dac334ae8f9a3069cf514f2a9752a048a50ebca866f1c70eebccab2f1d65d4', '2022-11-10 22:12:16', 'admin2022init', 'REMOVE SCHEDULE', 'CC101'),
(110, '286fad825a948f241b10b1896552715a0c357d29fac54a558f61e2f4a84fbbbf', '2022-11-11 01:26:43', 'admin2022init', 'ADD SECTION', 'CS1A'),
(111, 'ff5e86542ea1856d365053f5a1ed6f6f4bc3d61099802ca62f7cd2ffe605af42', '2022-11-11 01:27:18', 'admin2022init', 'ADD SECTION', 'CS1A'),
(112, 'a3e3dd44bd77b5ea08580f724860a44ba74aea7d29e863b840ce2fc2b5d527a9', '2022-11-11 01:30:01', 'admin2022init', 'ADD SECTION', 'CS1A'),
(113, '6fa224ae07b929591bfc7728788aaf52bd869a4150c3d2c428d628d11e2f5335', '2022-11-11 01:32:06', 'admin2022init', 'ADD SECTION', 'CS1A'),
(114, 'a832f39e28dcd376461f56c42017fae5cd4817c8314e1d74eb16c4975bc138f8', '2022-11-11 01:33:03', 'admin2022init', 'ADD SECTION', ''),
(115, 'd8a94271440b5ba315fdcb03361be936ddfbc186f5a4feeec5d0a78585850346', '2022-11-11 01:34:06', 'admin2022init', 'ADD SECTION', 'CS1A'),
(116, '71e3613c3c235701e19b20ca2a4da3ebb85562f72deb8ad67806b5ec07a57486', '2022-11-11 01:38:22', 'admin2022init', 'ADD SECTION', 'Test1'),
(117, '3d785eed33023cd8a89fc97b62ea55a413cef66139e33adea6841a57863fec83', '2022-11-11 01:39:11', 'admin2022init', 'ADD SECTION', 'CS1A'),
(118, '484f93b319e202e504e0422d1a7839e8707f51fb0f0a431c845c8b73747e8fd2', '2022-11-11 01:39:24', 'admin2022init', 'REMOVE SCHEDULE', 'GE10'),
(119, 'f37bb9651b1cc3f0adc0627d139484bb4880b671791106328f7f72a9bde32ee9', '2022-11-11 02:02:02', 'admin2022init', 'ADD SECTION', 'CS1B'),
(120, '8260961da0b2edd935051f34523925e22fc23c0de9d8a36b3393ab3353cd2f99', '2022-11-11 02:11:25', 'admin2022init', 'ADD SECTION', 'CS1A'),
(121, '24c02d584d2555e4391209801f6edeabcaf88de4f7744ed7436e1ebe666c0f7b', '2022-11-11 02:11:51', 'admin2022init', 'ADD SECTION', 'CS1A'),
(122, 'cc1390be98988964c08496b24fd658183d7b8c183dad751a1a8d49509ba908e1', '2022-11-11 02:12:35', 'admin2022init', 'ADD SECTION', 'CS1A'),
(123, 'f40c858fedeadeaeee1527a8da43747ae08002d6ed12c419d4fb8875bf107f5d', '2022-11-11 02:16:27', 'SYSTEM', 'ADD STUDENT', ''),
(124, 'b186960231e002bce5d5e317c494d8827f57242ecd7b32b58689f4d2606d1df6', '2022-11-11 02:17:11', 'SYSTEM', 'ADD STUDENT', ''),
(125, '8f016b9bcf667502f7fab5dacf2791ff4b76ab12b04dc9eb4da78490ac2bf58b', '2022-11-11 02:19:43', 'SYSTEM', 'ADD STUDENT', ''),
(126, '26f57268fb2d2e07328977514b52f5e0847582d69b388e49bdd532f75cf156e6', '2022-11-11 02:21:51', 'SYSTEM', 'ADD STUDENT', '22-00001'),
(127, 'd1eec5994f187a4bd4fcc60d094b5434d3113cb1913b2503e372eb172f18d3a3', '2022-11-11 08:42:43', 'SYSTEM', 'ADD STUDENT', '22-00001'),
(128, 'ea726529f942e98276db16d790674a7e61a762e585ca6abe62790a75d157c529', '2022-11-11 08:45:06', 'admin2022init', 'REMOVE SCHEDULE', 'AL101'),
(129, 'e3ed2dc89bafffac4c97944c51b546b78f710f3da95804decd752b19640eac4a', '2022-11-11 08:45:22', 'admin2022init', 'ADD SECTION', 'CS1A'),
(130, 'f712be43ae552e91af72827c55ce394d14515dfc4e6afaf7b672d27e4a5e2fa0', '2022-11-11 09:22:13', 'admin2022init', 'ADD SECTION', 'Test1'),
(131, 'f02bc42715f874e71b19f963e476b4c34af616056718564a90a4d8175552ea44', '2022-11-11 09:31:37', 'SYSTEM', 'ADD STUDENT', '22-00002'),
(132, '408a7fd1432deed0395841d83e16c26500deeb14fcd1a8e3bb2988220c826002', '2022-11-11 09:34:11', 'SYSTEM', 'ADD STUDENT', '22-00003'),
(133, 'd0b3b80aec4f60d976da59a8d6f8656e02d5ff01178e367560d5a9e1895e81d9', '2022-11-15 13:31:28', 'SYSTEM', 'ADD STUDENT', '21-04454'),
(134, 'dfbf22a92e75e71aead37fa9442f85274e000480c01acd161ecd9ac34f99ada5', '2022-11-15 13:34:15', 'SYSTEM', 'ADD STUDENT', '21-04455'),
(135, 'f37fe5a6d4a39a26e64ecf82d686c7012ed56001bd28723f70144db207463dac', '2022-11-15 13:34:34', 'SYSTEM', 'ADD STUDENT', '21-04452'),
(136, '3d0dcc14a2e43bdf822c116fd389a6df7056e0d9b3710ff129b2ee3130fc4f26', '2022-11-15 13:35:17', 'SYSTEM', 'ADD STUDENT', '21-04451'),
(137, '4c279730d5890ab444eb1882b549768a8bdb2a58e95562befc8f968b0b01099c', '2022-11-15 13:35:57', 'SYSTEM', 'ADD STUDENT', '21-04450'),
(138, '4b3ed58c029fe3894017e1fa6fc6c01bb4b990a8680e5d7e290989666155c6f6', '2022-11-15 13:38:46', 'SYSTEM', 'ADD STUDENT', '21-04416'),
(139, 'bc3e0aacb910c24cb245d9577f22be59516862035935a56fc9d06e9dfa78d435', '2022-11-15 13:39:20', 'SYSTEM', 'ADD STUDENT', '20-21214'),
(140, '9a46a54a0cd0f4606c874d8fa04811fee73bfff480e76a82d512fc83c8aa2c12', '2022-11-15 13:40:06', 'SYSTEM', 'ADD STUDENT', '20-21212'),
(141, 'c10c67788d4c325838f9289d52e128a0e5a73e349bce71bcab169cae0fa9e14e', '2022-11-15 13:40:42', 'SYSTEM', 'ADD STUDENT', '20-21211'),
(142, 'b54485be5203508a7097c57c8f6eb9e1c21740ae3f541182c8dbd52011a268dd', '2022-11-15 13:41:21', 'SYSTEM', 'ADD STUDENT', '20-55521'),
(143, '1520a6e5e1222ca02488565fc9cb72dc5f8f10a62446a41c25db3ff85e3bc54c', '2022-11-15 13:46:17', 'SYSTEM', 'ADD STUDENT', ' '),
(144, 'aa8e2a1f70455b8459881e87e26a99a95cf657ec441974e5f31aad6213e7f0e4', '2022-11-15 13:48:29', 'SYSTEM', 'ADD STUDENT', '20-11235'),
(145, '89c823aea49ff1e92a882d74476556b2b71cfcc6c1f42022f4f8e152f83415a5', '2022-11-15 13:53:04', 'SYSTEM', 'ADD STUDENT', '20-11234'),
(146, '26ea44504fd7b7438a6eab06155eee2b185f2e736e09c127ba7d21bffb023d76', '2022-11-15 14:01:41', 'SYSTEM', 'ADD STUDENT', '21-12154'),
(147, 'ff11da0745c70a216d89f07bd32270f036a53ec7a326bb84524102054761ee1e', '2022-11-15 15:43:08', 'SYSTEM', 'ADD STUDENT', '22-00001'),
(148, '1e82992710377ee83311f72d88ec14c4b94ac8e96ac31465a7b3e1d193a3bb72', '2022-11-15 15:48:02', 'SYSTEM', 'ADD STUDENT', '22-00000'),
(149, 'd1f3f2f17e81a892e53152c7e825d64e18de50e799ef00edf2a6eda2417b5e79', '2022-11-23 07:25:58', '22-00000', 'CHANGE PASSWORD', '22-00000'),
(150, 'bed8bfff8d25621368d46fe54c8e77cacbef70819376c851b08ee6afdd11b890', '2022-11-23 07:27:06', '22-00000', 'CHANGE PASSWORD', '22-00000'),
(151, 'c1f3000b33f4135666276ba018d26c6d741ec132be23fa93126a971991b24545', '2022-11-23 07:37:03', 'tomagan.ariel', 'CHANGE PASSWORD', 'tomagan.ariel');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `idSub` varchar(10) NOT NULL,
  `section` varchar(15) NOT NULL,
  `studLimit` int(11) NOT NULL,
  `faculty` varchar(150) DEFAULT NULL,
  `room` varchar(50) DEFAULT NULL,
  `days` varchar(50) DEFAULT NULL,
  `timeIni` varchar(5) DEFAULT NULL,
  `timeEnd` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `idSub`, `section`, `studLimit`, `faculty`, `room`, `days`, `timeIni`, `timeEnd`) VALUES
(10, 'CC101', 'CS1A', 15, 'vinalon.haidee', '331', 'MON,WED', '10:00', '12:00'),
(11, 'CC102', 'CS1A', 15, 'vinalon.haidee', '331', 'MON,FRI', '10:00', '12:00'),
(12, 'NSTP1', 'CS1A', 15, 'vinalon.haidee', '331', 'MON', '10:00', '12:00'),
(13, 'PE1', 'CS1A', 15, 'vinalon.haidee', '331', 'MON', '10:00', '12:00'),
(15, 'DS101', 'CS1A', 15, 'vinalon.haidee', '331', 'MON', '10:00', '12:00'),
(18, 'PE1', 'CS1B', 15, 'calderon.joelvilzon', 'GYMB', 'SUN', '10:00', '12:00'),
(19, 'GE10', 'CS1A', 15, 'vinalon.haidee', '331', 'MON', '10:00', '12:00'),
(20, 'GE2', 'CS1A', 15, 'vinalon.haidee', '331', 'MON', '10:00', '12:00'),
(21, 'GE1', 'CS1A', 15, 'vinalon.haidee', '331', 'MON', '10:00', '12:00'),
(22, 'AL101', 'CS1A', 15, 'vinalon.haidee', '331', 'MON', '10:00', '12:00'),
(23, 'AL101', 'Test1', 1, 'tomagan.ariel', '331', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `idCourse` varchar(10) NOT NULL,
  `section` varchar(15) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `idCourse`, `section`, `type`) VALUES
(2, 'CS', 'CS1A', 'B'),
(4, 'CS', 'CS1B', 'B'),
(5, 'CS', 'Test1', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `student-academics`
--

CREATE TABLE `student-academics` (
  `id` int(11) NOT NULL,
  `idStud` varchar(10) NOT NULL,
  `idSub` varchar(10) NOT NULL,
  `units` tinyint(4) NOT NULL,
  `grade` decimal(3,2) NOT NULL DEFAULT 4.00,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student-academics`
--

INSERT INTO `student-academics` (`id`, `idStud`, `idSub`, `units`, `grade`, `status`) VALUES
(59, '22-00000', 'CC101', 3, '4.00', 'O'),
(60, '22-00000', 'CC102', 3, '4.00', 'E'),
(61, '22-00000', 'DS101', 3, '4.00', 'E'),
(62, '22-00000', 'AL101', 3, '4.00', 'E'),
(63, '22-00000', 'GE1', 3, '4.00', 'E'),
(64, '22-00000', 'GE2', 3, '4.00', 'E'),
(65, '22-00000', 'GE10', 3, '4.00', 'E'),
(66, '22-00000', 'PE1', 2, '4.00', 'E'),
(67, '22-00000', 'NSTP1', 3, '4.00', 'E'),
(68, '22-00000', 'CC103', 3, '4.00', 'O'),
(69, '22-00000', 'CC104', 3, '4.00', 'O'),
(70, '22-00000', 'CC105', 3, '4.00', 'O'),
(71, '22-00000', 'DS102', 3, '4.00', 'O'),
(72, '22-00000', 'GE3', 3, '4.00', 'O'),
(73, '22-00000', 'GE4', 3, '4.00', 'O'),
(74, '22-00000', 'PE2', 2, '4.00', 'O'),
(75, '22-00000', 'GE11', 3, '4.00', 'O'),
(76, '22-00000', 'NSTP2', 3, '4.00', 'O'),
(77, '22-00000', 'CC106', 3, '4.00', 'O'),
(78, '22-00000', 'SDF104', 3, '4.00', 'O'),
(79, '22-00000', 'AL102', 3, '4.00', 'O'),
(80, '22-00000', 'NC101', 3, '4.00', 'O'),
(81, '22-00000', 'GE5', 3, '4.00', 'O'),
(82, '22-00000', 'GE6', 3, '4.00', 'O'),
(83, '22-00000', 'GEE22', 3, '4.00', 'O'),
(84, '22-00000', 'IT100', 3, '4.00', 'O'),
(85, '22-00000', 'PE3', 2, '4.00', 'O'),
(86, '22-00000', 'AR101', 3, '4.00', 'O'),
(87, '22-00000', 'OS101', 3, '4.00', 'O'),
(88, '22-00000', 'PL101', 3, '4.00', 'O'),
(89, '22-00000', 'HCI101', 3, '4.00', 'O'),
(90, '22-00000', 'AL103', 3, '4.00', 'O'),
(91, '22-00000', 'GE7', 3, '4.00', 'O'),
(92, '22-00000', 'GE8', 3, '4.00', 'O'),
(93, '22-00000', 'GEE32', 3, '4.00', 'O'),
(94, '22-00000', 'PE4', 2, '4.00', 'O'),
(95, '22-00000', 'IAS101', 3, '4.00', 'O'),
(96, '22-00000', 'SE101', 3, '4.00', 'O'),
(97, '22-00000', 'ELEC1', 3, '4.00', 'O'),
(98, '22-00000', 'CC107', 3, '4.00', 'O'),
(99, '22-00000', 'DS103', 3, '4.00', 'O'),
(100, '22-00000', 'GE9', 3, '4.00', 'O'),
(101, '22-00000', 'IT101', 3, '4.00', 'O'),
(102, '22-00000', 'GEE13', 3, '4.00', 'O'),
(103, '22-00000', 'ELEC2', 3, '4.00', 'O'),
(104, '22-00000', 'SE102', 3, '4.00', 'O'),
(105, '22-00000', 'THS101', 3, '4.00', 'O'),
(106, '22-00000', 'ELEC3', 3, '4.00', 'O'),
(107, '22-00000', 'CC108', 3, '4.00', 'O'),
(108, '22-00000', 'OS102', 3, '4.00', 'O'),
(109, '22-00000', 'SDF105', 3, '4.00', 'O'),
(110, '22-00000', 'SP101', 3, '4.00', 'O'),
(111, '22-00000', 'THS102', 6, '4.00', 'O'),
(112, '22-00000', 'ELEC 4', 3, '4.00', 'O'),
(113, '22-00000', 'ELEC 5', 3, '4.00', 'O'),
(114, '22-00000', 'HCI102', 6, '4.00', 'O'),
(115, '22-00000', 'IT102', 3, '4.00', 'O'),
(116, '22-00000', 'PRC101', 3, '4.00', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `student-enrollment`
--

CREATE TABLE `student-enrollment` (
  `id` int(11) NOT NULL,
  `enrollCode` varchar(30) NOT NULL,
  `idStud` varchar(10) NOT NULL,
  `idSub` varchar(10) NOT NULL,
  `section` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student-enrollment`
--

INSERT INTO `student-enrollment` (`id`, `enrollCode`, `idStud`, `idSub`, `section`) VALUES
(1, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'CC101', 'CS1A'),
(2, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'CC102', 'CS1A'),
(3, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'DS101', 'CS1A'),
(4, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'AL101', 'CS1A'),
(5, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'GE1', 'CS1A'),
(6, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'GE2', 'CS1A'),
(7, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'GE10', 'CS1A'),
(8, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'PE1', 'CS1A'),
(9, 'aEQIZibD2ctpilapCTeBzyKBJOKMWP', '22-00000', 'NSTP1', 'CS1A');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `idSub` varchar(10) DEFAULT NULL,
  `name` text NOT NULL,
  `unitLec` tinyint(4) NOT NULL,
  `unitLab` tinyint(4) NOT NULL,
  `unitTot` tinyint(4) NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `program` varchar(10) NOT NULL,
  `prerequisite` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `idSub`, `name`, `unitLec`, `unitLab`, `unitTot`, `semester`, `year`, `program`, `prerequisite`) VALUES
(1, 'CC101', 'Introduction to Programming (HTML/CSS)', 2, 1, 3, 1, 1, 'CS', ''),
(2, 'CC102', 'Fundamentals of Programming (Java)', 2, 1, 3, 1, 1, 'CS', ''),
(3, 'DS101', 'Discrete Structures 1', 3, 0, 3, 1, 1, 'CS', ''),
(4, 'AL101', 'Algorithms and Complexity', 2, 1, 3, 1, 1, 'CS', ''),
(5, 'GE1', 'Understanding the Self', 3, 0, 3, 1, 1, 'CS', ''),
(6, 'GE2', 'Readings in Philippine History', 3, 0, 3, 1, 1, 'CS', ''),
(7, 'GE10', 'Pagbasa at Pagsulat sa Iba\'t-ibang Disiplina', 3, 0, 3, 1, 1, 'CS', ''),
(8, 'PE1', 'Physical Education I', 2, 0, 2, 1, 1, 'CS', ''),
(9, 'NSTP1', 'CWTS/ROTC 1', 3, 0, 3, 1, 1, 'CS', ''),
(10, 'CC103', 'Intermediate Programming (Adv. Java)', 2, 1, 3, 2, 1, 'CS', 'CC102'),
(11, 'CC104', 'Data Structures and Algorithms', 2, 1, 3, 2, 1, 'CS', 'CC102'),
(12, 'CC105', 'Information Management (DB/SQL)', 2, 1, 3, 2, 1, 'CS', 'CC101'),
(13, 'DS102', 'Discrete Structures 2', 3, 0, 3, 2, 1, 'CS', ''),
(14, 'GE3', 'The Contemporary World', 3, 0, 3, 2, 1, 'CS', ''),
(15, 'GE4', 'Mathematics in the Modern World', 3, 0, 3, 2, 1, 'CS', ''),
(16, 'PE2', 'Physical Education 2', 2, 0, 2, 2, 1, 'CS', 'PE1'),
(17, 'GE11', 'Panitikang Filipino', 3, 0, 3, 2, 1, 'CS', ''),
(18, 'NSTP2', 'CWTS/ROTC 2', 3, 0, 3, 2, 1, 'CS', 'NSTP1'),
(19, 'CC106', 'Applications Development and Emerging Technologies', 2, 1, 3, 1, 2, 'CS', 'CC105'),
(20, 'SDF104', 'Object Oriented Programming 1 (VB.net)', 2, 1, 3, 1, 2, 'CS', 'CC103'),
(21, 'AL102', 'Automata Theory and Formal Languages', 3, 0, 3, 1, 2, 'CS', 'AL101'),
(22, 'NC101', 'Networks and Communications', 2, 1, 3, 1, 2, 'CS', ''),
(23, 'GE5', 'Purposive Communication', 3, 0, 3, 1, 2, 'CS', ''),
(24, 'GE6', 'Art Appreciation', 3, 0, 3, 1, 2, 'CS', ''),
(25, 'GEE22', 'Philippine Indigineous Communities', 3, 0, 3, 1, 2, 'CS', ''),
(26, 'IT100', 'Internet and Advanced Office Productivity', 1, 2, 3, 1, 2, 'CS', ''),
(27, 'PE3', 'Physical Education 3', 2, 0, 2, 1, 2, 'CS', 'PE2'),
(28, 'AR101', 'Architecture and Organization', 2, 1, 3, 2, 2, 'CS', 'AL102'),
(29, 'OS101', 'Operating System', 2, 1, 3, 2, 2, 'CS', ''),
(30, 'PL101', 'Programming Languages', 2, 1, 3, 2, 2, 'CS', 'SDF104'),
(31, 'HCI101', 'Human Computer Interaction', 2, 1, 3, 1, 2, 'CS', 'CC106'),
(32, 'AL103', 'Logic Design', 2, 1, 3, 2, 2, 'CS', 'AL102'),
(33, 'GE7', 'Science, Technology and Society', 3, 0, 3, 2, 2, 'CS', ''),
(34, 'GE8', 'Ethics', 3, 0, 3, 2, 2, 'CS', ''),
(35, 'GEE32', 'Philippine Popular Culture', 3, 0, 3, 2, 2, 'CS', ''),
(36, 'PE4', 'Physical Education 4', 2, 0, 2, 2, 2, 'CS', 'PE3'),
(37, 'IAS101', 'Information Assurance and Security', 2, 1, 3, 1, 3, 'CS', 'AR101'),
(38, 'SE101', 'Software Engineering 1', 3, 0, 3, 1, 3, 'CS', 'PL101'),
(39, 'ELEC1', 'Computational Science', 2, 1, 3, 1, 3, 'CS', ''),
(40, 'CC107', 'Mobile Programming', 2, 1, 3, 1, 3, 'CS', 'CC103'),
(41, 'DS103', 'Statistics with SPSS', 1, 2, 3, 1, 3, 'CS', 'DS102'),
(42, 'GE9', 'Rizal\'s Life and Works', 3, 0, 3, 1, 3, 'CS', ''),
(43, 'IT101', 'Micro Controller Programming', 2, 1, 3, 1, 3, 'CS', ''),
(44, 'GEE13', 'Human Reproduction', 3, 0, 3, 1, 3, 'CS', ''),
(45, 'ELEC2', 'Intelligent Systems', 2, 1, 3, 2, 3, 'CS', ''),
(46, 'SE102', 'Software Engineering 2', 2, 1, 3, 2, 3, 'CS', 'SE101'),
(47, 'THS101', 'CS Thesis Writing 1', 3, 0, 3, 2, 3, 'CS', ''),
(48, 'ELEC3', 'Parallel and Distributed Computing', 2, 1, 3, 2, 3, 'CS', ''),
(49, 'CC108', 'Content Management System', 2, 1, 3, 2, 3, 'CS', 'CC105'),
(50, 'OS102', 'Open Source Operating System', 1, 2, 3, 2, 3, 'CS', 'OS101'),
(51, 'SDF105', 'Object Oriented Programming 2 (C#)', 2, 1, 3, 2, 3, 'CS', 'SDF104'),
(52, 'SP101', 'Social Issues and Professional Practice', 3, 0, 3, 2, 3, 'CS', 'HCI101'),
(53, 'THS102', 'CS Thesis Writing 2', 3, 3, 6, 1, 4, 'CS', 'THS101'),
(54, 'ELEC 4', 'Graphics and Visual Computing', 2, 1, 3, 1, 4, 'CS', ''),
(55, 'ELEC 5', 'System Fundamentals', 2, 1, 3, 1, 4, 'CS', ''),
(56, 'HCI102', 'Technopreneurship/E-Commerce', 3, 3, 6, 1, 4, 'CS', 'HCI101'),
(57, 'IT102', 'Social Media and Presentation', 2, 1, 3, 1, 4, 'CS', ''),
(58, 'PRC101', 'Practicum (OJT) Orientation, Presentation And Documentation [500 hours]', 3, 0, 3, 2, 4, 'CS', '');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `yrLvl` tinyint(4) NOT NULL,
  `section` varchar(50) NOT NULL,
  `label` tinyint(4) NOT NULL,
  `a11` int(11) NOT NULL,
  `a12` int(11) NOT NULL,
  `a13` int(11) NOT NULL,
  `a14` int(11) NOT NULL,
  `a15` int(11) NOT NULL,
  `a1t` int(11) NOT NULL,
  `a21` int(11) NOT NULL,
  `a22` int(11) NOT NULL,
  `a23` int(11) NOT NULL,
  `a24` int(11) NOT NULL,
  `a2t` int(11) NOT NULL,
  `a31` int(11) NOT NULL,
  `a32` int(11) NOT NULL,
  `a33` int(11) NOT NULL,
  `a3t` int(11) NOT NULL,
  `a41` int(11) NOT NULL,
  `a42` int(11) NOT NULL,
  `a43` int(11) NOT NULL,
  `a4t` int(11) NOT NULL,
  `a51` int(11) NOT NULL,
  `a52` int(11) NOT NULL,
  `a53` int(11) NOT NULL,
  `a5t` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `name`, `yrLvl`, `section`, `label`, `a11`, `a12`, `a13`, `a14`, `a15`, `a1t`, `a21`, `a22`, `a23`, `a24`, `a2t`, `a31`, `a32`, `a33`, `a3t`, `a41`, `a42`, `a43`, `a4t`, `a51`, `a52`, `a53`, `a5t`) VALUES
(1, 'Andre Gianne Gamez', 4, 'CS1A', 1, 1, 2, 3, 4, 5, 15, 1, 2, 3, 4, 10, 1, 3, 5, 9, 1, 3, 5, 9, 1, 3, 5, 9),
(2, 'John Mark Santos', 4, 'CS1A', 0, 1, 1, 1, 1, 1, 5, 1, 1, 1, 1, 4, 1, 1, 1, 3, 1, 1, 1, 3, 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user-admin`
--

CREATE TABLE `user-admin` (
  `id` int(11) NOT NULL,
  `idAdmin` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `lName` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-admin`
--

INSERT INTO `user-admin` (`id`, `idAdmin`, `username`, `password`, `lName`, `fName`, `mName`, `email`) VALUES
(3, 'admin2022init', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin.admin@tcu.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `user-faculty`
--

CREATE TABLE `user-faculty` (
  `id` int(11) NOT NULL,
  `idFaculty` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `curriculum` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-faculty`
--

INSERT INTO `user-faculty` (`id`, `idFaculty`, `fName`, `mName`, `lName`, `department`, `curriculum`, `password`, `email`) VALUES
(6, 'tomagan.ariel', 'Ariel', '', 'Tomagan', 'CICT', 'BSCS', 'facc', 'tomagan.ariel@tcu.edu.ph'),
(7, 'vinalon.haidee', 'Haidee', 'Argana', 'Vinalon', 'CICT', 'BSCS', 'fac2', 'vinalon.haidee@tcu.edu.ph'),
(8, 'nuez.jeric', 'Jeric', '', 'Nuez', 'CICT', 'BSCS', 'fac3', 'nuez.jeric@tcu.edu.ph'),
(9, 'pineda.arlene', 'Arlene', '', 'Pineda', 'CICT', 'BSCS', 'fac4', 'pineda.arlene@tcu.edu.ph'),
(10, 'calderon.joelvilzon', 'Joelvilzon', 'Macuja', 'Calderon', 'CICT', 'BSCS', 'fac5', 'calderon.joelvilzon@tcu.edu.ph'),
(11, 'cruz.mark', 'Mark', '', 'Cruz', 'CAS', 'BSCS', 'testfac1', 'cruz.mark@tcu.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `user-student`
--

CREATE TABLE `user-student` (
  `id` int(11) NOT NULL,
  `idStud` varchar(10) NOT NULL,
  `fName` varchar(64) NOT NULL,
  `mName` varchar(64) NOT NULL,
  `lName` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(1) NOT NULL,
  `civStat` varchar(1) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` text NOT NULL,
  `program` varchar(10) NOT NULL,
  `yrReg` year(4) NOT NULL,
  `yrLvl` tinyint(1) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` varchar(1) NOT NULL,
  `validation` varchar(1) NOT NULL DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-student`
--

INSERT INTO `user-student` (`id`, `idStud`, `fName`, `mName`, `lName`, `address`, `birthdate`, `sex`, `civStat`, `contactNo`, `nationality`, `religion`, `program`, `yrReg`, `yrLvl`, `password`, `email`, `status`, `validation`) VALUES
(3, '22-00000', 'John Marc', 'Damien', 'Cruz', '2714 Street, City', '2001-01-01', 'M', 'S', '09496118215', 'Filipino', 'Christian', 'BSCS', 2022, 1, 'LALALALA', 'cruz.johnmarca@tcu.edu.ph', 'N', 'T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curriculums`
--
ALTER TABLE `curriculums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`idCurr`),
  ADD UNIQUE KEY `idCourse` (`idCourse`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idDept` (`idDept`);

--
-- Indexes for table `enroll-codes`
--
ALTER TABLE `enroll-codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enrollCode` (`enrollCode`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idLog` (`idLog`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student-academics`
--
ALTER TABLE `student-academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student-enrollment`
--
ALTER TABLE `student-enrollment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idSub` (`idSub`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-admin`
--
ALTER TABLE `user-admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idAdmin` (`idAdmin`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `user-faculty`
--
ALTER TABLE `user-faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idFaculty` (`idFaculty`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user-student`
--
ALTER TABLE `user-student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idStud` (`idStud`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curriculums`
--
ALTER TABLE `curriculums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enroll-codes`
--
ALTER TABLE `enroll-codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student-academics`
--
ALTER TABLE `student-academics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `student-enrollment`
--
ALTER TABLE `student-enrollment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user-admin`
--
ALTER TABLE `user-admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user-faculty`
--
ALTER TABLE `user-faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user-student`
--
ALTER TABLE `user-student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
