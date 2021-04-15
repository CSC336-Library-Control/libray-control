

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `book_info` (
  `id` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `author` char(30) NOT NULL,
  `press` char(20) NOT NULL,
  `press_time` char(10) NOT NULL,
  `price` char(10) NOT NULL,
  `ISBN` char(13) NOT NULL,
  `desc` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `book_info` (`id`, `name`, `author`, `press`, `press_time`, `price`, `ISBN`, `desc`) VALUES
(1,'Kite chaser','[America] Khaled Husseini','Shanghai Peoples Publishing House', '2006-5', '29.00', '9787208061644', '12-year-old Afghan rich family The young master Amir and his servant Hassan are brothers and sisters. However, after a kite match, a tragic incident happened. Amir felt self-blame and pained for his cowardice and forced Hassan away. Soon, he followed. Father fled to the United States.'),
(2,'Worry-free grocery store',' Keigo Higashino','Nankai Publishing Company', '2014-5', '39.50', '9787544270878','What is lost in modern peoples hearts, this grocery store can Help you find it--'),
(3,'The Little Prince',' Saint Exupery','Peoples Literature Publishing House', '2003-8', '22.00', '9787020042494','The little prince is an otherworldly fairy Tong, he lives on an asteroid that is only a little bigger than him. He is accompanied by a small rose that he loves very much. But the vanity of the rose hurts the little prince’s feelings for her. The little prince Saying goodbye to asteroids, he began a journey into space. He visited six planets one after another. All kinds of experiences made him sad. He felt that the adults were ridiculous and abnormal. Only on one of the planets where the lamplighter was, the little prince Only found a person who can be a friend. But the world of the lamplighter is very small, except for the lamplighter himself, can not accommodate a second person. Under the guidance of geographers, the lonely little prince came to the earth where humans live. '),
(4,'White Night Walk',' Keigo Higashino','Nankai Publishing Company', '2008-9', '29.80', '9787544242516','I only hope that I can walk hand in hand under the sun", this symbol The desperate thoughts at the core of the story are like a beautiful guise, restored one by one like a documentary along with countless messy, depressed, and sad story fragments: there is no idiotic lovesickness, no sea and stone, only a cold and desperate trick, the last trace The warmth was completely abandoned. Thousands of readers were sorrowful and moved in a sad song that redeems sin...'),
(5,'Besieged City','Qian Zhongshu','Peoples Literature Publishing House', '1991-2', '19.00', '9787020024759','The Besieged City is a novel by Qian Zhongshu. The first. The edition was published by Shanghai Chenguang Publishing Company in 1947. After 1949, due to political reasons, the book could not be reprinted in mainland China and Taiwan for a long time, and only pirated copies appeared in Hong Kong. After being revised by the author in 1980, The mainland of China was published and printed by Peoples Literature Publishing House. Since then, the author has made minor revisions several times. Since its publication, "The Besieged City" has been praised by many people. Since it was unable to be reprinted for a long time after 1949, the book gradually faded out of people’s vision. In the 1960s, Xia Zhiqing, a sinologist in the United States, made a very high evaluation of the book in A History of Modern Chinese Fiction, which regained people’s attention. People’s evaluation of it Generally focused on two aspects, humorous language and deep observation of life. Since the 1990s, some people have put forward different views on the book, thinking that this is a novel that has been "uplifted", not an outstanding work . Many people think this is a humorous work. In addition to the distinctive language of the characters, the author...'),
(6,'Three-body','Liu Cixin','Chongqing Publishing House', '2008-1', '23.00', '9787536692930','At the same time as the Cultural Revolution is in full swing. The militarys secret plan to explore alien civilization The “Red Bank Project” has made breakthrough progress. But at the moment when the launch button was pressed, Ye Wenjie, who had experienced catastrophes, did not realize that she had completely changed the destiny of mankind. The first cry from the earth civilization to the universe, The sun is the center, flying at the speed of light to the depths of the universe...'),
(7,'Norwegian Forest','Murakami Haruki','Shanghai Translation Publishing House', '2001-2', '18.80', '9787532725694','This is a moving, calming and elegant A romantic, slightly sentimental love novel. The protagonist of the novel, Watanabe, begins his love entanglement with two girls in the first person. Watanabe’s first lover, Naoko, was originally the girlfriend of his high school classmate, Kiyuki, who later committed suicide. A year later, Watanabe and Naoko met unexpectedly and began to date. Naoko has now become demure and shy, and there is a trace of elusive shadow in his beautiful crystal eyes from time to time. The two are just day after day. Naoko walked aimlessly forward, backward, or side by side on the streets of fallen leaves in Tokyo. On the night of Naokos 20th birthday, the two had sex. Unexpectedly, Naoko disappeared the next day. A few months later, Naoko wrote that she lived. Enter a mental sanatorium far away in the mountains. When Watanabe went to visit, he found that Naoko began to have the plump and sweetness of a mature woman. Although the two were in the same room at night, Watanabe restrained himself and said that he would wait forever before breaking up. Naoko. Soon after returning to school, due to an accidental encounter, Watanabe began to date the younger Midoriko. Midori is the opposite of the introverted Naoko, "its like a deer jumping into the world in the morning light of spring." This During the period, Watanabe was very depressed and hesitated. On the one hand, he never forgets...'),
(8,'Devotion of Suspect X',' Keigo Higashino','Nankai Publishing Company', '2008-9', '28.00', '9787544241694','A mathematics genius once in a hundred years, the only one every day The fun is to go to a fixed bento store to buy lunch, just to take a look at the neighbor Jingzi who works in the bento store.'),
(9,'Alive','Yu Hua','Nanhai Publishing Company', '1998-5', '12.00', '9787544210966','Landlords young master Fugui is addicted to gambling, and he finally gambled out of his family business. Among them, Fugui went to seek medical treatment because his mother was ill. He did not expect to be captured by the Kuomintang troops on the way, and later captured by the Peoples Liberation Army. When he returned to his hometown, he knew that his mother had passed away, and his wife Jiazhen worked hard to bring up a pair of children. Unfortunately, my daughter has become deaf and mute, and my son is very smart...'),
(10,'A Dream of Red Mansions','Chinese Classical Literature Reader Series','Peoples Literature Publishing House', '1996-12', '59.70', '9787020002207','A Dream of Red Mansions is an encyclopedic novel. Taking Bao Dai’s love tragedy as the main line, with the rise and fall of the four major families as the background, it depicts all aspects of the Chinese feudal society in the 18th century and the emergence of new capitalist democratic ideas under the feudal autocracy. The structure is grand, the plot is euphemistic, the details are exquisite, and the characters are The image is vivid and vivid, and it can be called a classic in ancient Chinese novels.');




CREATE TABLE `borrow_list` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `back_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `borrow_list` (`book_id`, `user_id`, `borrow_date`, `back_date`) VALUES
(1, 10000, '2018-10-18', '2020-12-18'),
(2, 10000, '2018-10-18', '2020-12-18'),
(3, 10000, '2019-11-18', '2021-03-18'),
(4, 10010, '2019-12-25', '2020-03-25'),
(5, 10010, '2018-10-13', '2021-04-13'),
(6, 10010, '2018-10-16', '2020-03-16'),
(8, 18888, '2018-10-17', '2021-02-17');



CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pwd` char(128) NOT NULL,
  `name` char(15) DEFAULT NULL,
  `Email` VARCHAR(32) DEFAULT NULL,
  `Phone` int(11) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT '0 is unnormal,1 is Normal',
  `admin` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0isuser,1is Admin',
  `last_login_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `user` (`id`, `pwd`, `name`, `Email`, `Phone`, `status`, `admin`, `last_login_time`) VALUES
(10000, 'e10adc3949ba59abbe56e057f20f883e', 'alice', 'alice@gmail.com','929333333', 1, 1, '2019-12-26 23:02:09'),
(10001, 'e10adc3949ba59abbe56e057f20f883e', 'andi', 'andi@gmail.com','929333333', 1, 0, '2019-12-25 10:55:58'),
(10010, 'e10adc3949ba59abbe56e057f20f883e', 'chen', 'chen@gmail.com','929333333', 1, 0, '2019-12-26 13:01:03'),
(10011, 'e10adc3949ba59abbe56e057f20f883e', 'james', 'james@gmail.com','929333333', 1, 0, '2019-12-26 05:03:36'),
(10086, 'e10adc3949ba59abbe56e057f20f883e', 'alex', 'alex@gmail.com','929333333', 1, 1, '2018-10-18 10:13:21'),
(18888, 'e10adc3949ba59abbe56e057f20f883e', 'leo', 'leo@gmail.com','929333334', 1, 0, '2018-10-18 10:13:04'),
(88888, 'e10adc3949ba59abbe56e057f20f883e', 'james', 'james@gmail.com','929323333', 0, 0, '2018-10-18 10:11:31');




ALTER TABLE `book_info`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `borrow_list`
  ADD PRIMARY KEY (`book_id`,`user_id`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `book_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

