-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.41 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных php_base
CREATE DATABASE IF NOT EXISTS `php_base` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `php_base`;

-- Дамп структуры для таблица php_base.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `date` date DEFAULT NULL,
  `author_name` tinytext,
  `short_content` tinytext,
  `preview` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы php_base.news: ~14 rows (приблизительно)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `date`, `author_name`, `short_content`, `preview`) VALUES
	(1, 'Заголовок\r\n', '2018-11-08', 'Гарри Марковиц', 'Диверсификация портфеля на основе статистических и корреляционных расчетов.', '0_CyF6-PYOuq77iD82.jpg'),
	(2, 'Еще что-то', '2018-06-21', 'Тихонов', 'Математическая физика', '003.jpg'),
	(3, 'ДУ', '2018-04-05', 'Самарский', 'Численнные методы', '017.jpg'),
	(4, 'Вероятность', '2018-10-16', 'Гмурман', 'Теория вероятностей', 'DiscreteMathematics_html_m33c23054.png'),
	(5, 'Оптимизация', '2018-07-17', 'Вентцель', 'Исследование операций', 'gVOZ1.png'),
	(6, 'Стохастические методы', '2018-06-18', 'Гурса', 'Случайные процессы', 'img07.jpg'),
	(7, 'Теория управления', '2018-07-27', 'Колмогоров', 'Теория динамических систем', 'maxresdefault.jpg'),
	(8, 'Ряды', '2018-04-06', 'Бернштейн', 'Математический анализ', 'MySQL-CROSS-JOIN-1.png'),
	(9, 'Топология', '2018-07-16', 'Владимир Арнольд', 'Теория катастроф', 'pic01.jpg'),
	(10, 'Гильбертово пространство', '2018-09-23', 'Давид Гильберт', 'функциональный анализ', 'pic02.jpg'),
	(11, 'Числа Фибоначчи', '2018-10-09', 'Джулия Робертс', 'Проблема Гильберта', 'slide-40.jpg'),
	(12, 'Дифференциальные уравнения', '2018-11-15', 'Александр Гротендик', 'Алгебраическая гелметрия', 'SQL JOIN.jpeg'),
	(13, 'Многомерность', '2018-09-05', 'Риман', 'Многомерные пространства', 'sql joins guide and syntax.jpg'),
	(14, 'Бесконечные множества', '2018-05-11', 'Кантор', 'Теория множеств', 'SQL-JOINS-Example-0.png');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
