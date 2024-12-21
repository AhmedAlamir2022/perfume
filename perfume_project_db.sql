-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 12:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfume_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `username`, `contact`, `gender`, `dob`, `country`, `city`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin521@gmail.com', '$2y$10$DG2W2dQHOaGmwvcdRdKiRuQoNoD0K65qtncPZI92Y8hnDV2mJ.ho2', 'Admin', '0547036968', 'Male', '1997-09-16', 'KSA', 'Riyadh', 'KSA - Riyadh', '2024-04-01 19:19:26', '2024-04-07 16:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Dior', 'uploads/brands/1795704946020406.png', '2024-04-07 16:21:27', NULL),
(3, 'Maison Francis Kurkdjian Paris', 'uploads/brands/1796571089979958.jpg', '2024-04-17 05:48:26', NULL),
(4, 'ARMANI', 'uploads/brands/1796572714745513.avif', '2024-04-17 06:14:15', NULL),
(6, 'CHANEL', 'uploads/brands/1796572798206479.avif', '2024-04-17 06:15:35', NULL),
(7, 'Hugo Boss', 'uploads/brands/1796572878504859.jpg', '2024-04-17 06:16:52', NULL),
(8, 'KILIAN PARIS', 'uploads/brands/1796572911732380.webp', '2024-04-17 06:17:23', NULL),
(9, 'NEST New York', 'uploads/brands/1796572961902127.avif', '2024-04-17 06:18:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', '2024-03-30 07:50:09', '2024-04-07 16:20:31'),
(2, 'Women', '2024-04-07 16:26:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE IF NOT EXISTS `components` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `components_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `name`, `description`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 'rftgyh', 'wdtrgyuj', 5, '2024-04-17 05:42:37', NULL),
(3, 'Gold', 'Gold description', 7, '2024-04-17 05:50:45', NULL),
(4, 'Rose Water', 'Rose Water description', 18, '2024-04-17 07:16:25', NULL),
(5, 'Gold Dust', 'Gold Dust Description', 18, '2024-04-17 07:17:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_29_184601_create_admins_table', 1),
(6, '2024_01_29_190650_create_categories_table', 1),
(7, '2024_01_29_191548_create_brands_table', 1),
(8, '2024_01_29_193118_create_contacts_table', 1),
(9, '2024_01_29_194459_create_queries_table', 1),
(10, '2024_01_29_195538_create_offers_table', 1),
(11, '2024_01_29_202245_create_subscripes_table', 1),
(12, '2024_01_29_203550_create_testimonials_table', 1),
(13, '2024_02_03_132726_create_products_table', 1),
(14, '2024_02_03_174317_create_orders_table', 1),
(16, '2024_03_30_094523_create_components_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offers_cat_id_foreign` (`cat_id`),
  KEY `offers_brand_id_foreign` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `my_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_product_id_foreign` (`product_id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `my_quantity`, `product_price`, `total_price`, `created_at`, `updated_at`) VALUES
(2, 5, 2, '1', '89', '89', '2024-04-17 06:08:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `size` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_cat_id_foreign` (`cat_id`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cat_id`, `brand_id`, `size`, `user_id`, `code`, `short_desc`, `long_desc`, `old_price`, `new_price`, `quantity`, `image1`, `image2`, `image3`, `image4`, `image5`, `created_at`, `updated_at`) VALUES
(5, 'Miss Dior', 2, 2, 50, NULL, 'PER001', 'Miss Dior eau de parfum brings in a wave of optimism and brims with life- echoing Miss Dior\'s very essence. Miss Dior\'s fresh and floral notes are composed like a bouquet of countless flowers with endless sparkling colours.', '\'The new Miss Dior is a fresh & sensual floral.\r\nThe secret to this new Eau de Parfum signature is a smooth & velvety rose\r\nembroidered with a thousand shimmering colourful flowers: a true olfactory \"millefiori\".\r\nFreshness and sensuality are intertwined together to unveil the most couture fragrance.\r\nSplendid Grasse roses lead a voluptuous cascade of powdery iris, verdant lily of the valley and an expressive peony.\r\n\r\nAs the ultimate feature on the new Miss Dior bottle,\r\neach bow evokes a myriad of multicoloured flowers through delicate embroidery.\r\nEach bow is hand-tied and unique: all the Dior dream in a bow.\r\n\r\nThe new Miss Dior campaign is a true breath of love and optimism:\r\nNatalie Portman calls out to wake up to the beauty of the world and for always...to love.\r\nWAKEUPFORLOVE', '100', '89', '9', 'uploads/products/1795705487542059.jpeg', 'uploads/products/1795705487758871.avif', 'uploads/products/1795705487956854.avif', 'uploads/products/1795705488137219.avif', 'uploads/products/1795705488307440.jpeg', '2024-04-07 16:30:04', '2024-04-17 06:08:05'),
(7, 'Maison Francis', 1, 3, 70, NULL, 'O48T1042301', 'Skip to the beginning of the images gallery\r\nMaison Francis Kurkdjian Rouge 540 Baccart Extrait 200ML', 'The Baccarat Rouge 540 Extrait de Parfum from Maison Francis Kurkdjian augments the strength and radiance of the fragrance’s amber woody floral aura. In this exalted version of a signature scent, jasmine blossoms and woody musks engage in an alchemy of the senses. • Fragrance notes: Grandiflorum Jasmine from Egypt, Saffron, Bitter Almond from Morocco, Cedarwood, Musky Woody Accord, Ambergris', '100', '88', '20', 'uploads/products/1796571192085401.jpeg', 'uploads/products/1796571192269366.jpg', 'uploads/products/1796571192366947.jpeg', 'uploads/products/1796571192495714.jpg', 'uploads/products/1796571192639109.jpg', '2024-04-17 05:50:04', NULL),
(8, 'Sì Eau de Parfum Intense Gift Set', 2, 4, 65, NULL, 'HFD454', 'Open the Armani gift box and fall for the inimitable icons. Contains 3 fragrances: 100ml, 15ml', 'Set Includes:\r\n- Sì Eau De Parfum Intense 100 ml\r\n- 2 x Sì Eau De Parfum Intense 15 ml\r\n\r\nOpen the Armani gift box and fall for the inimitable icons. Contains 3 fragrances: 100ml, 15ml and 15ml\r\n\r\nSì is the most powerful word. Feel the power of Sì with the new eau de parfum intense and embrace the infinite possibilities of life. The new contrasting and hyper-sensory fragrance is wrapped in an ambery structure. It’s a blend of the signature blackcurrant nectar empowered by a velvety floral heart and a sensual vanilla bouquet.\r\nCrafted with a unique glass making savoir-faire, the new jewel bottle is adorned by the golden Sì logo, embossed in the glass. It is a powerful statement to invite every woman to say Sì. The precious bottle is designed to last, refillable and recyclable.', '66', '50', '30', 'uploads/products/1796573101431867.avif', 'uploads/products/1796573101798585.avif', 'uploads/products/1796573102116741.avif', 'uploads/products/1796573102444057.avif', 'uploads/products/1796573102717823.avif', '2024-04-17 06:20:25', NULL),
(9, 'Sí Passione - Eau de Parfum', 1, 4, 40, NULL, 'KIG125', 'Sì Passione, the feminine fragrance by Giorgio Armani, is for the woman who is passionate', 'Sì Passione, the feminine fragrance by Giorgio Armani, is for the woman who is passionate, feminine and free. Sì Passione opens with a sparkling, joyful pear, then combines woody vanilla with the blooms of rose, heliotrope and jasmine to create a sensual, fruity floral scent.\r\n\r\nThe striking red color of the bottle is emblematic of Sì Passione’s attitude and essence. “Red as a sign of vitality, red as a signal of passion. Red to wish you good and punitiveness” says Giorgio Armani. Red is also the color of passion and of love - passion that makes your heart beat faster.', '88', '80', '99', 'uploads/products/1796573231618438.avif', 'uploads/products/1796573231932239.avif', 'uploads/products/1796573232382022.avif', 'uploads/products/1796573232641777.avif', 'uploads/products/1796573233045863.avif', '2024-04-17 06:22:30', NULL),
(10, 'GABRIELLE CHANEL', 2, 6, 70, NULL, 'CLI968', 'A floral, solar and voluptuous interpretation composed by Olivier Polge, Perfumer-Creator', 'A floral, solar and voluptuous interpretation composed by Olivier Polge, Perfumer-Creator for the House of CHANEL.\r\nInspired by Gabrielle Chanel, GABRIELLE CHANEL ESSENCE is the fragrance of a woman who is attentive to her needs and speaks her mind. A radiant woman who truly shines as she fully expresses her personality.', '33', '30', '11', 'uploads/products/1796573439725259.avif', 'uploads/products/1796573440144011.avif', 'uploads/products/1796573440453916.avif', 'uploads/products/1796573440785687.avif', 'uploads/products/1796573441177076.avif', '2024-04-17 06:25:48', NULL),
(11, 'COCO Eau De Parfum Spray', 1, 6, 80, NULL, 'NGF854', 'COCO expresses the intensity of Gabrielle Chanel\'s personality and her love of all things baroque', 'COCO expresses the intensity of Gabrielle Chanel\'s personality and her love of all things baroque. A luxuriant oriental symphony that gradually reveals its contrasting notes.', '69', '59', '55', 'uploads/products/1796573558157796.webp', 'uploads/products/1796573558460136.avif', 'uploads/products/1796573558575464.webp', 'uploads/products/1796573558812919.avif', 'uploads/products/1796573558926987.webp', '2024-04-17 06:27:40', NULL),
(12, 'BLEU DE CHANEL', 1, 6, 100, NULL, 'KLO542', 'An ode to masculine freedom expressed in an aromatic-woody fragrance with a captivating trai', 'An ode to masculine freedom expressed in an aromatic-woody fragrance with a captivating trail. A timeless scent housed in a bottle of deep and mysterious blue.\r\nBLEU DE CHANEL Parfum is an accomplished composition with a pure, deep character. An intensely masculine signature that exudes self-confidence.', '55', '50', '50', 'uploads/products/1796574297122852.avif', 'uploads/products/1796574297476167.webp', 'uploads/products/1796574297739839.avif', 'uploads/products/1796574298089265.webp', 'uploads/products/1796574298340626.webp', '2024-04-17 06:39:26', NULL),
(13, 'BOSS The Scent Elixir for Him - Parfum Intense', 1, 7, 85, NULL, 'KHF859', 'Inflame the senses with the enticing BOSS The Scent Elixir for Him, a rich, highly concentrated', 'Inflame the senses with the enticing BOSS The Scent Elixir for Him, a rich, highly concentrated interpretation of the original BOSS The Scent for Him fragrance.\r\n\r\nThis ambery leathery Elixir opens with a burst of red-hot Pimento, which conjures a complex, spicy scent full of charisma. At the heart of this fragrance for men, a lively Lavandin absolute – sourced from Provence – instantly captivates with its vibrant', '151', '140', '9', 'uploads/products/1796574454550448.avif', 'uploads/products/1796574454957058.avif', 'uploads/products/1796574455298264.avif', 'uploads/products/1796574455616375.avif', 'uploads/products/1796574456020222.avif', '2024-04-17 06:41:56', NULL),
(14, 'Boss The Scent Le Parfum', 2, 7, 90, NULL, 'LOI658', 'Feel the power of attraction pull you in with BOSS The Scent Le Parfum for her. This intense', 'Feel the power of attraction pull you in with BOSS The Scent Le Parfum for her. This intense reinterpretation of the iconic ambery signature of BOSS The Scent ignites the senses with orange blossom and vetiver accord, unleashing an alchemy of attraction impossible to resist. \r\n\r\nSpicy top notes of pink peppercorn contrast with orange blossom at the heart', '58', '49', '54', 'uploads/products/1796574561634193.avif', 'uploads/products/1796574562030772.avif', 'uploads/products/1796574562335356.avif', 'uploads/products/1796574562629545.avif', 'uploads/products/1796574562941598.avif', '2024-04-17 06:43:38', NULL),
(15, 'BOSS Bottled Pacific Eau de Toilette for Men', 1, 7, 55, NULL, 'HYG698', 'Warm blue waters, pastel sunrises and golden sands are a tonic for the BOSS Man', 'Warm blue waters, pastel sunrises and golden sands are a tonic for the BOSS Man, as he enjoys every moment of his well-deserved downtime.\r\n\r\nRefreshing and invigorating, BOSS Bottled Pacific men\'s Eau de Toilette is an invitation to dive into summer. Infused with coconut, lemon and salt, the Eau de Toilette fragrance adds a fresh burst of energy to the BOSS Bottled family', '88', '77', '30', 'uploads/products/1796574770620381.avif', 'uploads/products/1796574770949425.avif', 'uploads/products/1796574771259899.avif', 'uploads/products/1796574771438548.webp', 'uploads/products/1796574771819220.avif', '2024-04-17 06:46:57', NULL),
(16, 'Good girl gone Bad by KILIAN Extrême', 2, 8, 60, NULL, 'HHY987', 'Good girl gone Bad by KILIAN Extrême Eau de Parfum opens with a pink and white bouquet', 'Good girl gone Bad by KILIAN Extrême Eau de Parfum opens with a pink and white bouquet of roses of May, and the most beautiful orange blossoms carried by the song of three sirens, calling from its core: tuberose, Egyptian jasmine sambac, and narcissus.\r\n\r\nThese exquisite flowers are wrapped in a milky toffee elixir, making them half-innocent, half-voluptuous, and now—a delicious temptress altogether.', '24', '98', '50', 'uploads/products/1796574919512960.avif', 'uploads/products/1796574919794865.avif', 'uploads/products/1796574920058832.avif', 'uploads/products/1796574920382944.webp', 'uploads/products/1796574920604516.avif', '2024-04-17 06:49:19', NULL),
(17, 'Smoking Hot - Eau de Parfum', 1, 2, 95, NULL, 'BGF', 'Kilian Hennessy\'s Inspiration: At night, there are no rules but one: just be Smoking Hot! KILIAN', 'Kilian Hennessy\'s Inspiration: At night, there are no rules but one: just be Smoking Hot! KILIAN PARIS newest smoky fragrance is a truly caramelized delight. It features Kentucky Tobacco absolute, infused with a hookah drag of Apple-flavoured shisha tobacco and intense Bourbon Vanilla. Evoking everything from European clubs to Eastern hookah lounges, Smoking Hot redefines what a smokey scent is today, going almost where it’s too hot to handle.', '100', '79', '60', 'uploads/products/1796575038501979.avif', 'uploads/products/1796575038813955.avif', 'uploads/products/1796575039081397.avif', 'uploads/products/1796575039374113.webp', 'uploads/products/1796575039667104.avif', '2024-04-17 06:51:13', '2024-04-17 07:12:30'),
(18, 'Blue Moon Ginger Dash - Refillable Perfume', 1, 8, 40, NULL, 'VFD874', 'Kilian Hennessy\'s Inspiration: KILIAN PARIS drops the quintessential summer cocktail in scent.', 'Kilian Hennessy\'s Inspiration: KILIAN PARIS drops the quintessential summer cocktail in scent. Blue Moon Ginger Dash is a limited edition fresh addition to The Liquors olfactive family, inspired by Kilian Hennessy\'s summer cocktail, the cult beachside party drink from the 90\'s, Blue Lagoon, a mix of lemon, vodka and blue caraçao liquor.', '55', '48', '66', 'uploads/products/1796575144130916.avif', 'uploads/products/1796575144539258.avif', 'uploads/products/1796575144900471.avif', 'uploads/products/1796575145298740.webp', 'uploads/products/1796575145563617.avif', '2024-04-17 06:52:54', NULL),
(19, 'Black Tulip Eau de Parfum', 1, 9, 30, NULL, 'BFD859', 'This mysterious chypre eau de parfum blends the sensuality of Japanese violet and Indonesian jasmine', 'This mysterious chypre eau de parfum blends the sensuality of Japanese violet and Indonesian jasmine with the richness of patchouli and the freshness of pink peppercorn. Black amber plum and black cherry bring a dark fruity accord to create a sultry fragrance.\r\n\r\nThe inspiration for Black Tulip began during a cruise along the Black Sea when NEST New York founder Laura Slatkin tasted delicious black cherries and dark plums that she discovered along the way in a Turkish market.', '20', '19', '49', 'uploads/products/1796575444472746.avif', 'uploads/products/1796575444844911.avif', 'uploads/products/1796575445225882.jpg', 'uploads/products/1796575445506996.avif', 'uploads/products/1796575445955439.avif', '2024-04-17 06:57:40', NULL),
(20, 'Wild Poppy Eau de Parfum', 2, 2, 56, NULL, 'PPO598', 'This spirited fruity floral eau de parfum captures the evolution of a poppy flower from bud', 'NEST New York founder Laura Slatkin has always found inspiration in the flower market. One day she came across these very large buds that were so unattractive she had to ask what they were. She learned they were poppy buds. Week after week, she began to notice the evolution of this ugly bud to an extraordinary flower. This evolution became her inspiration to create Wild Poppy.', '22', '18', '15', 'uploads/products/1796575564942174.avif', 'uploads/products/1796575565344154.webp', 'uploads/products/1796575565557547.webp', 'uploads/products/1796575565854836.avif', 'uploads/products/1796575566291343.avif', '2024-04-17 06:59:35', '2024-04-17 07:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `email`, `phone`, `address`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Perfume_store@gmail.com', '0547069874', 'KSA - Riyadh', 'Our information to be in touch', '2024-04-01 19:22:23', '2024-04-01 19:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `subscripes`
--

CREATE TABLE IF NOT EXISTS `subscripes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `testimonials_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contact`, `dob`, `country`, `city`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dfghj', 'fghjuk', NULL, 'gyhujikl', 'rfghyjukil', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Ahmed Mostafa', 'ahmed521@gmail.com', NULL, '$2y$12$UBG6tEWnVhzseALPX6QYCuOKKGoZksyO9yk1pq2g2JdXWgWmrD096', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-30 08:08:00', '2024-03-30 08:08:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `components`
--
ALTER TABLE `components`
  ADD CONSTRAINT `components_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offers_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
