/*
Navicat MySQL Data Transfer

Source Server         : mysqli
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : itkktech

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-02-27 15:50:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin','user') NOT NULL,
  `a_image` varchar(255) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Admin', 'Saranyapong', 'admin', '123456', 'superadmin', '16457062665104.png', '1', '2022-02-27 13:01:01', '2022-02-26 17:20:53', '2022-02-11 00:02:20');
INSERT INTO `admin` VALUES ('2', 'suoip', 'qweryuioa', 'admin2', '123456', 'superadmin', '16456331560598.jpg', '2', '2022-02-25 21:02:15', '2022-02-25 21:02:15', '2022-02-25 21:02:15');
INSERT INTO `admin` VALUES ('3', 'sadf', 'qwer', 'user', '123456', 'superadmin', '16457051148825.png', '3', '2022-02-26 16:49:44', '2022-02-26 17:13:47', '2022-02-26 16:49:44');
INSERT INTO `admin` VALUES ('4', 'asdfqwer', 'asdfqwerzxcv', 'user2', '123456', 'user', '16457044426843.jpg', '4', '2022-02-26 16:50:29', '2022-02-26 16:51:56', '2022-02-26 16:50:29');
INSERT INTO `admin` VALUES ('5', 'qwersdfg', 'rtyuvcbn', 'user3', '123456', 'user', '16457045198474.jpg', '5', '2022-02-26 16:51:46', '2022-02-26 16:51:46', '2022-02-26 16:51:46');

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `ar_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `status` enum('true','false') NOT NULL,
  `update_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`ar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'HTML คืออะไร', 'ภาษาหลักที่ใช้ในการเขียนเว็บเพจ โดยใช้ tag ในการกำหนดการแสดงผล', '<h1><span style=\"font-size:18px\"><strong>HTML5 คืออะไร</strong></span><br />\r\n&nbsp;&nbsp; <span style=\"font-size:16px\">HTML5 คือ ภาษามาร์กอัป ที่ใช้สำหรับเขียน website&nbsp; ซึ่ง HTML5 นี้เป็นภาษาที่ถูกพัฒนาต่อมาจากภาษา HTML และพัฒนาขึ้นมาโดย WHATWG (The Web Hypertext Application Technology Working Group) โดยได้มีการปรับเพิ่ม Feature หลายๆอย่างเข้ามาเพื่อให้ผู้พัฒนาสามารถใช้งานได้ง่ายมากยิ่งขึ้น<br />\r\nข้อดีของ HTML5</span></h1>\r\n\r\n<ol>\r\n	<li>\r\n	<h1><span style=\"font-size:16px\">เว็บไซต์ที่สร้างจากภาษา HTML5 สามารถแสดงผลได้กับทุก <a class=\"hasTip mlinkarticle\" href=\"https://www.mindphp.com/บทเรียนออนไลน์/บทเรียน-html5/1849-web-browser.php\" title=\"Web browser (เว็บเบราว์เซอร์) คืออะไร::Web browser \r\n                           ...\">web browser </a></span></h1>\r\n	</li>\r\n	<li><span style=\"font-size:16px\">HTML5 จะช่วยลดการใช้พวกปลั๊กอินพิเศษอย่างพวก Adobe Flash, Microsoft Silverlight, Apache Pivot สนับสนุน วิดีโอ และ องค์ประกอบเสียง รวมทั้ง สื่อมัลติมีเดียต่างๆมากขึ้น โดยไม่ต้องใช้ Flash</span></li>\r\n	<li><span style=\"font-size:16px\">มีการจัดการข้อผิดพลาดที่ดีขึ้น</span></li>\r\n	<li><span style=\"font-size:16px\">สคริปต์ใหม่ ที่จะมาแทนที่สคริปต์เดิม (เขียนโค้ดสั้นลง)</span></li>\r\n	<li><span style=\"font-size:16px\">HTML5 มีความเป็นอิสระสูง (คล้ายๆ XML )</span></li>\r\n	<li><span style=\"font-size:16px\">HTML5 ทำงานควบคู่กับ CSS3 ได้ดี ช่วยให้สามารถเพิ่มลูกเล่นต่างๆบนเว็บไซต์ได้สวยงามมากยิ่งขึ้น (CSS คือส่วนแสดงผล ที่นักออกแบบสามารถกำหนดสีสัน ตำแหน่ง ลักษณะเวลานำเมาส์ไปแหย่แล้วมีกระต่ายโผล่ออกมาจากโพรง หรือจับก้อนวัตถุในหน้าเว็บฯ ให้ชิดซ้ายชิดขวา ส่วน CSS3 คือเวอร์ชั่นที่ 3 ของ CSS )<br />\r\n	features ใหม่ๆ ของ HTML5<br />\r\n	1.Semantic Markup : การเพิ่ม Element ที่ อ่านง่ายมากขึ้น และช่วยให้ เราทำ SEO ได้มีประสิทธิภาพมากยิ่งขึ้น<br />\r\n	2.Form Enhancements : เพิ่มความสามารถของ Form ต่างๆ ไม่ว่าจะเป็น Input type, Attribute หรือ แม้แต่ Element<br />\r\n	3. Audio / Video: รองรับการอ่านไฟล์เสียง และ วีดีโอ โดยไม่จำเป็นต้องใช้ Embed Code ของ Third Party<br />\r\n	4.Canvas : ใช้ในการวาดรูป โดยจำเป็นต้องใช้ Javascriptช่วย<br />\r\n	5.ContentEditable : สามารถแก้ไข Content ได้โดยตรงผ่านทางหน้าเว็บ<br />\r\n	6.Drag and Drop : ลากวางObject ได้ เพื่อเพิ่มการ ตอบสนองระหว่างระบบกับผู้ใช้</span></li>\r\n	<li><span style=\"font-size:16px\">Persistent Data Storage : มีการจัดการที่ดีขึ้น โดยเก็บข้อมูลลงบนเครื่องของผู้ใช้ </span></li>\r\n</ol>\r\n\r\n<h1>&nbsp;</h1>\r\n', 'html.jpg', '1', '1', 'all,news', 'true', '2022-02-17 21:53:28', '2022-01-13 12:33:04');
INSERT INTO `articles` VALUES ('2', 'CSS คืออะไร', 'CSS คือการจัดตกแต่งเว็บไซต์ให้สวยงาม', '                    <h1><span style=\"font-size:18px\"><strong>CSS คืออะไร</strong></span><br />\n                        &nbsp;&nbsp; <span style=\"font-size:16px\">HTML5 คือ ภาษามาร์กอัป ที่ใช้สำหรับเขียน website&nbsp; ซึ่ง HTML5 นี้เป็นภาษาที่ถูกพัฒนาต่อมาจากภาษา HTML และพัฒนาขึ้นมาโดย WHATWG (The Web Hypertext Application Technology Working Group) โดยได้มีการปรับเพิ่ม Feature หลายๆอย่างเข้ามาเพื่อให้ผู้พัฒนาสามารถใช้งานได้ง่ายมากยิ่งขึ้น<br />\n                        ข้อดีของ HTML5</span></h1>\n                        \n                        <ol>\n                            <li>\n                            <h1><span style=\"font-size:16px\">เว็บไซต์ที่สร้างจากภาษา HTML5 สามารถแสดงผลได้กับทุก <a class=\"hasTip mlinkarticle\" href=\"https://www.mindphp.com/บทเรียนออนไลน์/บทเรียน-html5/1849-web-browser.php\" title=\"Web browser (เว็บเบราว์เซอร์) คืออะไร::Web browser \n                           ...\">web browser </a></span></h1>\n                            </li>\n                            <li><span style=\"font-size:16px\">HTML5 จะช่วยลดการใช้พวกปลั๊กอินพิเศษอย่างพวก Adobe Flash, Microsoft Silverlight, Apache Pivot สนับสนุน วิดีโอ และ องค์ประกอบเสียง รวมทั้ง สื่อมัลติมีเดียต่างๆมากขึ้น โดยไม่ต้องใช้ Flash</span></li>\n                            <li><span style=\"font-size:16px\">มีการจัดการข้อผิดพลาดที่ดีขึ้น</span></li>\n                            <li><span style=\"font-size:16px\">สคริปต์ใหม่ ที่จะมาแทนที่สคริปต์เดิม (เขียนโค้ดสั้นลง)</span></li>\n                            <li><span style=\"font-size:16px\">HTML5 มีความเป็นอิสระสูง (คล้ายๆ XML )</span></li>\n                            <li><span style=\"font-size:16px\">HTML5 ทำงานควบคู่กับ CSS3 ได้ดี ช่วยให้สามารถเพิ่มลูกเล่นต่างๆบนเว็บไซต์ได้สวยงามมากยิ่งขึ้น (CSS คือส่วนแสดงผล ที่นักออกแบบสามารถกำหนดสีสัน ตำแหน่ง ลักษณะเวลานำเมาส์ไปแหย่แล้วมีกระต่ายโผล่ออกมาจากโพรง หรือจับก้อนวัตถุในหน้าเว็บฯ ให้ชิดซ้ายชิดขวา ส่วน CSS3 คือเวอร์ชั่นที่ 3 ของ CSS )<br />\n                            features ใหม่ๆ ของ HTML5<br />\n                            1.Semantic Markup : การเพิ่ม Element ที่ อ่านง่ายมากขึ้น และช่วยให้ เราทำ SEO ได้มีประสิทธิภาพมากยิ่งขึ้น<br />\n                            2.Form Enhancements : เพิ่มความสามารถของ Form ต่างๆ ไม่ว่าจะเป็น Input type, Attribute หรือ แม้แต่ Element<br />\n                            3. Audio / Video: รองรับการอ่านไฟล์เสียง และ วีดีโอ โดยไม่จำเป็นต้องใช้ Embed Code ของ Third Party<br />\n                            4.Canvas : ใช้ในการวาดรูป โดยจำเป็นต้องใช้ Javascriptช่วย<br />\n                            5.ContentEditable : สามารถแก้ไข Content ได้โดยตรงผ่านทางหน้าเว็บ<br />\n                            6.Drag and Drop : ลากวางObject ได้ เพื่อเพิ่มการ ตอบสนองระหว่างระบบกับผู้ใช้</span></li>\n                            <li><span style=\"font-size:16px\">Persistent Data Storage : มีการจัดการที่ดีขึ้น โดยเก็บข้อมูลลงบนเครื่องของผู้ใช้ </span></li>\n                        </ol>\n                        \n                        <h1>&nbsp;</h1>', 'CSS.jpg', '1', '1', 'all,news', 'true', '2022-01-13 19:23:13', '2022-01-22 19:23:13');
INSERT INTO `articles` VALUES ('3', 'javascript คืออะไร', 'JavaScript คือ ภาษาคอมพิวเตอร์สำหรับการเขียนโปรแกรมบนระบบอินเทอร์เน็ต', 'JavaScript คือ ภาษาคอมพิวเตอร์สำหรับการเขียนโปรแกรมบนระบบอินเทอร์เน็ต ที่กำลังได้รับความนิยมอย่างสูง Java JavaScript เป็น ภาษาสคริปต์เชิงวัตถุ (ที่เรียกกันว่า \"สคริปต์\" (script) ซึ่งในการสร้างและพัฒนาเว็บไซต์ (ใช่ร่วมกับ HTML) เพื่อให้เว็บไซต์ของเราดูมีการเคลื่อนไหว สามารถตอบสนองผู้ใช้งานได้มากขึ้น ซึ่งมีวิธีการทำงานในลักษณะ \"แปลความและดำเนินงานไปทีละคำสั่ง\" (interpret) หรือเรียกว่า อ็อบเจ็กโอเรียลเต็ด (Object Oriented Programming) ที่มีเป้าหมายในการ ออกแบบและพัฒนาโปรแกรมในระบบอินเทอร์เน็ต สำหรับผู้เขียนด้วยภาษา HTML สามารถทำงานข้ามแพลตฟอร์มได้ โดยทำงานร่วมกับ ภาษา HTML และภาษา Java ได้ทั้งทางฝั่งไคลเอนต์ (Client) และ ทางฝั่งเซิร์ฟเวอร์ (Server)\r\n     JavaScript ถูกพัฒนาขึ้นโดย เน็ตสเคปคอมมิวนิเคชันส์ (Netscape Communications Corporation) โดยใช้ชื่อว่า Live Script ออกมาพร้อมกับ Netscape Navigator2.0 เพื่อใช้สร้างเว็บเพจโดยติดต่อกับเซิร์ฟเวอร์แบบ Live Wire ต่อมาเน็ตสเคปจึงได้ร่วมมือกับ บริษัทซันไมโครซิสเต็มส์ปรับปรุงระบบของบราวเซอร์เพื่อให้สามารถติดต่อใช้งานกับภาษาจาวาได้ และได้ปรับปรุง LiveScript ใหม่เมื่อ ปี 2538 แล้วตั้งชื่อใหม่ว่า JavaScript JavaScript สามารถทำให้ การสร้างเว็บเพจ มีลูกเล่น ต่าง ๆ มากมาย และยังสามารถโต้ตอบกับผู้ใช้ได้อย่างทันที เช่น การใช้เมาส์คลิก หรือ การกรอกข้อความในฟอร์ม เป็นต้น\r\n     เนื่องจาก JavaScript ช่วยให้ผู้พัฒนา สามารถสร้างเว็บเพจได้ตรงกับความต้องการ และมีความน่าสนใจมากขึ้น ประกอบกับเป็นภาษาเปิด ที่ใครก็สามารถนำไปใช้ได้ ดังนั้นจึงได้รับความนิยมเป็นอย่างสูง มีการใช้งานอย่างกว้างขวาง รวมทั้งได้ถูกกำหนดให้เป็นมาตรฐานโดย ECMA การทำงานของ JavaScript จะต้องมีการแปลความคำสั่ง ซึ่งขั้นตอนนี้จะถูกจัดการโดยบราวเซอร์ (เรียกว่าเป็น client-side script) ดังนั้น JavaScript จึงสามารถทำงานได้ เฉพาะบนบราวเซอร์ที่สนับสนุน ซึ่งปัจจุบันบราวเซอร์เกือบทั้งหมดก็สนับสนุน JavaScript แล้ว อย่างไรก็ดี สิ่งที่ต้องระวังคือ JavaScript มีการพัฒนาเป็นเวอร์ชั่นใหม่ๆออกมาด้วย (ปัจจุบันคือรุ่น 1.5) ดังนั้น ถ้านำโค้ดของเวอร์ชั่นใหม่ ไปรันบนบราวเซอร์รุ่นเก่าที่ยังไม่สนับสนุน ก็อาจจะทำให้เกิด error ได้', 'javascript-wallpaper.jpg', '1', '1', 'all,news', 'true', '2022-01-18 23:09:09', '2022-01-19 23:09:09');
INSERT INTO `articles` VALUES ('4', 'วันพ่อแห่งชาติ', 'วันคล้ายวันพระบรมราชสมภพของพระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราช', '<h2 style=\"text-align:center\">ประวัติ</h2>\r\n\r\n<p>วันพ่อแห่งชาติ ได้จัดให้มีขึ้นครั้งแรก เมื่อวันที่ 5 ธันวาคม พ.ศ. 2523 โดยคุณหญิงเนื้อทิพย์ เสมรสุต นายกสมาคมผู้อาสาสมัครและช่วยการศึกษา หลักการเหตุผลที่มีการจัดตั้งวันพ่อแห่งชาติขึ้น เนื่องจาก<a href=\"https://th.wikipedia.org/wiki/%E0%B8%9E%E0%B9%88%E0%B8%AD\" title=\"พ่อ\">พ่อ</a>เป็นบุคคลผู้มีพระคุณและมีบทบาทสำคัญต่อครอบครัว สังคม ที่ผู้เป็นลูกจะต้องเคารพเทิดทูนและตอบแทนพระคุณด้วยความกตัญญู และสังคมควรที่จะยกย่องให้เกียรติรำลึกถึงผู้เป็นพ่อ จึงถือเอาวันที่ 5 ธันวาคม ของทุกปี เป็นวันคล้ายวันเฉลิมพระชนมพรรษาของพระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร เป็น &quot;วันพ่อ&quot;</p>\r\n\r\n<p>ในวันที่ 8 ธันวาคม พ.ศ. 2559 ภายหลังการเสด็จสวรรคตของพระบาทสมเด็จพระบรมชนกาธิเบศร มหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร เมื่อวันที่ 13 ตุลาคม พ.ศ. 2559 ก็ได้มีการประกาศจากรัฐบาลของประเทศไทยว่า &quot;วันพ่อแห่งชาติ&quot; ของประเทศไทย จะยังคงไว้ ให้เป็นวันที่ 5 ธันวาคมของทุกปีต่อไปตามเดิม</p>\r\n', '16443971587825.jpg', '1', '1', 'all,activity', 'true', '2022-02-11 13:40:14', '2022-02-11 13:40:14');
INSERT INTO `articles` VALUES ('5', 'วันแม่แห่งชาติ', 'วันแม่แห่งชาติ (Mother’s Day) ตรงกับวันที่ 12 สิงหาคมของทุกปี', '<h2 style=\"text-align:center\">ประวัติวันแม่แห่งชาติ</h2>\r\n\r\n<p>แต่เดิมนั้น วันที่ 12 สิงหาคม มิได้เป็น&nbsp;<strong>วันแม่แห่งชาติ</strong>&nbsp;อย่างเช่นในปัจจุบัน แต่ได้มีการกำหนดเอาวันที่ 15 เมษายนของทุกๆ ปีเป็น วันแม่แห่งชาติ<strong>&nbsp;</strong>โดยเป็นไปตามมติของคณะรัฐมนตรีที่ได้ประกาศรับรองเอาไว้เมื่อวันที่ 23 กุมภาพันธ์ พุทธศักราช 2493 ซึ่งได้พิจารณาเห็นว่าการจัดงานวันแม่เป็นส่วนงานของสำนักวัฒนธรรมฝ่ายหญิง จึงได้มอบหมายให้สภาวัฒนธรรมแห่งชาติเป็นผู้จัดงานวันแม่มาตั้งแต่วันที่ 15 เมษายน พุทธศักราช 2493 เป็นต้นมา อีกทั้งการจัดงานก็เป็นได้ด้วยความสำเร็จ เนื่องด้วยประชาชนให้การสนับสนุนจนสามารถขยายขอบข่ายของงานให้กว้างออกไปได้ จึงทำให้การจัดงานไม่เพียงแต่มีการจัดพิธีทางพระพุทธศาสนาเท่านั้น แต่ยังจัดให้มีการประกวดแม่ของชาติ การประกวดคำขวัญวันแม่ ทั้งนี้ก็เพื่อเป็นเกียรติแก่แม่ และเป็นการเพิ่มความสำคัญของงานวันแม่ให้มีมากยิ่งขึ้น ด้วยเหตุนี้ งานวันแม่จึงเป็นวันแม่ประจำปีของชาติตามประกาศของรัฐบาล&nbsp;ฯพณฯ จอมพล ป.พิบูลสงคราม แต่โดยทั่วไปมักเรียกกันว่า&nbsp;<strong>วันแม่ของชาติ</strong></p>\r\n\r\n<p>ต่อมา ในปีพุทธศักราช 2519 ทางราชการได้เปลี่ยนแปลงวันแม่ใหม่ โดยให้ถือว่าวันเสด็จพระราชสมภพของ<strong>สมเด็จพระนางเจ้าฯ พระบรมราชินินาถ</strong>&nbsp;ซึ่งก็คือวันที่ 12 สิงหาคม เป็น&nbsp;<strong>วันแม่แห่งชาติ&nbsp;</strong>โดยได้เริ่มประกาศใช้เป็นครั้งแรกในปีพุทธศักราช 2519 เป็นต้นมา&nbsp;จากหนังสือของกรมวิชาการ กระทรวงศึกษาธิการ ชื่อแม่หลวงของปวงชน พิมพ์เผยแพร่เมื่อวันที่ 6&nbsp;กรกฎาคม พุทธศักราช 2520&nbsp;มีข้อความตอนหนึ่งเทิดพระเกียรติไว้ว่า &hellip;</p>\r\n\r\n<p><em>&ldquo;แม่ที่ดีย่อมรู้จักส่งเสริมธำรงรักษาศิลปวัฒนธรรมประจำชาติ เพราะแม่ทราบดีว่าถ้าขาดสิ่งเหล่านี้แล้วความเป็นไทยที่แท้จริงจะมิปรากฏอยู่บนผืนแผ่นดินไทยอันเป็นที่รักยิ่งของเรา</em><br />\r\n<br />\r\n<em>แม่ที่ดีย่อมประพฤติปฏิบัติตนเป็นพลเมืองดี ตามระบอบของการปกครองแบบประชาธิปไตย ซึ่งมีพระมหากษัตริย์เป็นพระประมุข โดยรักเคารพและเทิดทูนสถาบันชาติ ศาสนาและพระมหากษัตริย์เหนือสิ่งอื่นใด</em><br />\r\n<br />\r\n<em>หญิงไทยทุกคน ย่อมจะมีคุณลักษณะต่างๆ ของแม่ที่ดีดังกล่าวข้างต้นอยู่แล้ว จะมากหรือน้อยขึ้นอยู่กับการศึกษาและการฝึกอบรม แต่จะหาหญิงใดที่มีคุณลักษณะครบถ้วนทุกประการเสมอเหมือนสมเด็จพระนางเจ้าสิริกิติ์พระบรมราชินีนาถ นั้นไม่ง่ายนัก ด้วยเหตุนี้เราจึงขอเทิดทูนพระเกียรติสมเด็จพระนางเจ้าฯ ว่าทรงเป็นแม่หลวงของปวงชน ผู้ทรงเป็นศรีสง่าของพระบาทสมเด็จพระเจ้าอยู่หัว ของบ้านเมืองและของประชาชนชาวไทยทั้งมวล&rdquo;</em></p>\r\n', '16443976154021.jpg', '1', '1', 'all,activity', 'true', '2022-02-11 13:47:51', '2022-02-11 13:47:51');
INSERT INTO `articles` VALUES ('6', 'วันครูแห่งชาติ', 'วันครูตรงกับวันที่ 16 มกราคมของทุกปี เพื่อเชิดชู “ครู” ผู้เป็นแบบอย่างที่ดีและดูแลเด็กให้เป็นผู้ที่มีความรู้', '<p style=\"text-align:center\"><span style=\"font-size:18px\"><strong>ประวัติวันครูแห่งชาติ</strong></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>เมื่อวันที่ 16 มกราคม พ.ศ. 2488 เป็นวันที่ประกาศใช้พระราชบัญญัติครูในพระราชกิจจานุเบกษา โดยจัดตั้งสภาในกระทรวงศึกษาธิการ เรียกว่า &ldquo;คุรุสภา&rdquo; ซึ่งเป็นนิติบุคคล รวบรวมคุณครูในสังกัดมาเป็นสมาชิกคุรุสภา สมาชิกมีหน้าที่เสนอความคิดเห็นอันเป็นประโยชน์ต่อสถาบันวิชาชีพครู พร้อมทั้งแสดงความคิดเห็นเรื่องนโยบายการศึกษาและวิชาการทั่วไปแก่กระทรวงศึกษาธิการ</p>\r\n\r\n<p>ทุกๆ ปี คุรุสภาจะจัดให้มีการประชุมสามัญคุรุสภาประจำปี เพื่อเปิดโอกาสให้ครูจากทั่วประเทศมาแถลงผลงานประจำปี และสอบถามข้อสงสัยในการดำเนินงานต่างๆ โดยเริ่มแรกใช้หอประชุมสามัคยาจารย์ จุฬาลงกรณ์มหาวิทยาลัยเป็นสถานที่ประชุม ภายหลังจึงจัดประชุมขึ้นที่หอประชุมคุรุสภา</p>\r\n\r\n<p>งานวันครูจัดขึ้นเป็นครั้งแรกในปี พ.ศ. 2500 โดยเป็นวันหยุดของครูและนักเรียน โดยมีกิจกรรมที่เกี่ยวข้องกับการศึกษา ดังนี้</p>\r\n\r\n<p>1. จัดนิทรรศการ รวบรวมผลงานของครู<br />\r\n2. มอบรางวัลให้กับครูที่มีผลงานได้รับการเชิดชูในปีนั้นๆ<br />\r\n3. พิธีคารวะครูผู้สอนที่ยังมีชีวิตอยู่<br />\r\n4. พิธีระลึกถึงครูที่เสียชีวิตไปแล้ว<br />\r\n5. กิจกรรมเพื่อสร้างความสามัคคีระหว่างผู้ประกอบวิชาชีพครู เช่น การแข่งขันกีฬา</p>\r\n\r\n<h2><span style=\"font-size:18px\"><strong>คำขวัญวันครู 2565</strong></span></h2>\r\n\r\n<p><strong>คำขวัญวันครู 2565</strong>&nbsp;โดย พลเอกประยุทธ์ จันทร์โอชา นายกรัฐมนตรี ได้ให้คำขวัญเนื่องในโอกาสวันครูแห่งชาติ ครั้งที่ 66 ไว้ว่า &ldquo;พัฒนาครู พัฒนาเด็ก เรียนรู้ สู่อนาคต&rdquo;</p>\r\n', '16443978559908.jpg', '1', '1', 'all,activity', 'true', '2022-02-11 13:51:52', '2022-02-11 13:51:52');
INSERT INTO `articles` VALUES ('7', 'BigCleaningDay', 'ทำความดีถวายพ่อหลวง เนื่องในวันเฉลิมมชนพรรษา รัชกาลที่ 10 แผนกเทโนโลยีสารสนเทศ 29 กรกฎาคม 2019', '<p style=\"text-align:center\"><strong><span style=\"font-size:18px\">BigCleaningDay<br />\n<img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/2.jpg\" style=\"height:960px; width:720px\" /></span></strong></p>\n\n<p style=\"text-align:center\"><strong><span style=\"font-size:18px\"><img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/1%20(1).jpg\" style=\"height:719px; width:960px\" /></span></strong></p>\n\n<p style=\"text-align:center\"><strong><span style=\"font-size:18px\"><img alt=\"\" class=\"img-fluid\" src=\"./assets/images/upload/source/5.jpg\" style=\"height:960px; width:720px\" /></span></strong></p>\n', '16443987214299.jpg', '1', '1', 'all,activity', 'true', '2022-02-16 21:16:09', '2022-02-11 14:06:17');
INSERT INTO `articles` VALUES ('8', 'opjijaiofjdsifj', 'asdfjieuwqurpav', '<p>This is my textarea to be replaced with CKEditor 4.saf</p>\r\n', '16448558587432.jpg', '1', '1', 'all,news', 'true', '2022-02-16 21:06:00', '2022-02-16 21:06:00');
INSERT INTO `articles` VALUES ('9', 'aqwoeri[qewm', 'eiqru', '<p>This is my textarea to be replaced with CKEditor 4.qwerq</p>\r\n', '16448558794806.jpg', '1', '1', 'all,activity', 'true', '2022-02-17 21:53:39', '2022-02-16 21:06:21');
INSERT INTO `articles` VALUES ('10', 'mbnigj', 'qwer9ioifdsf', '<p>This is my textarea to be replaced with CKEditor 4.qwer</p>\r\n', '16448558969681.jpg', '1', '1', 'all,news', 'true', '2022-02-16 21:06:39', '2022-02-16 21:06:39');
INSERT INTO `articles` VALUES ('11', 'mxcmnvlnodsa;f', 'oqiewrueiowvhcx', '<p>This is my textarea to be replaced with CKEditor 4.qwerqw</p>\r\n', '16448559103190.jpg', '1', '1', 'all,activity', 'true', '2022-02-16 21:06:52', '2022-02-16 21:06:52');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contacts
-- ----------------------------

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_Phone` varchar(20) NOT NULL,
  `p_Address` text NOT NULL,
  `p_Email` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('1', '0863954794', 'ขอนแก่น 40000', 'test@gmail.com');
INSERT INTO `profile` VALUES ('2', '1234567890', 'asdfhjlkqweuriop', 'asdfhjBE@asdf.com');
INSERT INTO `profile` VALUES ('3', '123434567324', 'sfdsafasdf', 'saf@asdfewr');
INSERT INTO `profile` VALUES ('4', '1234567890', 'asdfqwerzxcv', 'asdf@qwerasd');
INSERT INTO `profile` VALUES ('5', '123434567', 'cvbndfghertywer', 'asdf@rtuy');

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_sex` enum('นาย','นาง','นางสาว') NOT NULL,
  `t_first_name` varchar(100) NOT NULL,
  `t_lastname` varchar(100) NOT NULL,
  `t_image` varchar(255) NOT NULL,
  `t_position` enum('หัวหน้าแผนกวิชา','ประจำแผนกวิชา','ประจำแผนก') NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', 'นาย', 'สุริยันต์', 'เงาะเศษ', '16454328942001.png', 'หัวหน้าแผนกวิชา');
INSERT INTO `teacher` VALUES ('2', 'นาย', 'asdfasdfdas', 'qwerqwerqwe', '16456926808116.jpg', 'ประจำแผนกวิชา');
INSERT INTO `teacher` VALUES ('3', 'นาง', 'qwrqwe', 'wer134', '16457067821028.jpg', 'ประจำแผนกวิชา');
INSERT INTO `teacher` VALUES ('4', 'นาย', 'weqrq342', 'gfhfdgfdg', '16457067981791.png', 'ประจำแผนก');
INSERT INTO `teacher` VALUES ('5', 'นาย', 'wqersad', 'qwergfdgbvxc', '16457068111376.png', 'ประจำแผนก');
INSERT INTO `teacher` VALUES ('6', 'นางสาว', 'wqerdsaf', 'qwrrw', '16457068211854.jpg', 'ประจำแผนก');

-- ----------------------------
-- Table structure for userlogs
-- ----------------------------
DROP TABLE IF EXISTS `userlogs`;
CREATE TABLE `userlogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userlogs
-- ----------------------------
INSERT INTO `userlogs` VALUES ('1', '::1', 'Computer', 'Windows 10', 'Chrome', 'contact', '2022-02-26 23:43:54');
INSERT INTO `userlogs` VALUES ('2', '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2022-02-26 23:44:58');
INSERT INTO `userlogs` VALUES ('3', '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2022-02-26 23:46:01');
INSERT INTO `userlogs` VALUES ('4', '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2022-02-27 11:50:54');
INSERT INTO `userlogs` VALUES ('5', '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2022-02-27 11:50:54');
INSERT INTO `userlogs` VALUES ('6', '::1', 'Computer', 'Windows 10', 'Chrome', 'personnel', '2022-02-27 11:50:57');
INSERT INTO `userlogs` VALUES ('7', '::1', 'Computer', 'Windows 10', 'Chrome', 'personnel', '2022-02-27 11:51:20');
INSERT INTO `userlogs` VALUES ('8', '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2022-02-27 11:57:18');
INSERT INTO `userlogs` VALUES ('9', '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2022-02-27 12:04:12');
INSERT INTO `userlogs` VALUES ('10', '::1', 'Computer', 'Windows 10', 'Chrome', 'about', '2022-02-27 12:22:34');
INSERT INTO `userlogs` VALUES ('11', '::1', 'Computer', 'Windows 10', 'Chrome', 'personnel', '2022-02-27 12:23:04');
INSERT INTO `userlogs` VALUES ('12', '::1', 'Computer', 'Windows 10', 'Chrome', 'personnel', '2022-02-27 12:26:21');
INSERT INTO `userlogs` VALUES ('13', '::1', 'Computer', 'Windows 10', 'Chrome', 'personnel', '2022-02-27 12:27:00');
INSERT INTO `userlogs` VALUES ('14', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:27:02');
INSERT INTO `userlogs` VALUES ('15', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:29:29');
INSERT INTO `userlogs` VALUES ('16', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:29:34');
INSERT INTO `userlogs` VALUES ('17', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:32:19');
INSERT INTO `userlogs` VALUES ('18', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail2', '2022-02-27 12:32:23');
INSERT INTO `userlogs` VALUES ('19', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail2', '2022-02-27 12:33:07');
INSERT INTO `userlogs` VALUES ('20', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:33:11');
INSERT INTO `userlogs` VALUES ('21', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:34:16');
INSERT INTO `userlogs` VALUES ('22', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail2', '2022-02-27 12:34:30');
INSERT INTO `userlogs` VALUES ('23', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:36:32');
INSERT INTO `userlogs` VALUES ('24', '::1', 'Computer', 'Windows 10', 'Chrome', 'personnel', '2022-02-27 12:36:34');
INSERT INTO `userlogs` VALUES ('25', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:36:38');
INSERT INTO `userlogs` VALUES ('26', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:42:12');
INSERT INTO `userlogs` VALUES ('27', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:43:04');
INSERT INTO `userlogs` VALUES ('28', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:44:46');
INSERT INTO `userlogs` VALUES ('29', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:45:16');
INSERT INTO `userlogs` VALUES ('30', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:46:32');
INSERT INTO `userlogs` VALUES ('31', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:46:52');
INSERT INTO `userlogs` VALUES ('32', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:49:38');
INSERT INTO `userlogs` VALUES ('33', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:50:12');
INSERT INTO `userlogs` VALUES ('34', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:50:47');
INSERT INTO `userlogs` VALUES ('35', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:51:26');
INSERT INTO `userlogs` VALUES ('36', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 12:51:49');
INSERT INTO `userlogs` VALUES ('37', '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2022-02-27 13:00:54');
INSERT INTO `userlogs` VALUES ('38', '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2022-02-27 15:00:38');
INSERT INTO `userlogs` VALUES ('39', '::1', 'Computer', 'Windows 10', 'Chrome', 'index', '2022-02-27 15:00:48');
INSERT INTO `userlogs` VALUES ('40', '::1', 'Computer', 'Windows 10', 'Chrome', 'student-detail', '2022-02-27 15:00:50');
