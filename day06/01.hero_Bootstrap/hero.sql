/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : web28

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-03-26 11:55:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hero
-- ----------------------------
DROP TABLE IF EXISTS `hero`;
CREATE TABLE `hero` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `heroName` varchar(255) NOT NULL DEFAULT '' COMMENT '英雄姓名',
  `heroIcon` varchar(255) NOT NULL DEFAULT '' COMMENT '头像路径',
  `heroSkill` varchar(255) NOT NULL DEFAULT '' COMMENT '英雄技能',
  `isDel` tinyint(1) NOT NULL DEFAULT '1' COMMENT '表示是否显示  1表示显示 2表示不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hero
-- ----------------------------
INSERT INTO `hero` VALUES ('3', '驯龙高手·坤', 'imgs/icon/驯龙高手·坤_icon.png', '穿刺之箭', '1');
INSERT INTO `hero` VALUES ('4', '疾风半藏', 'imgs/icon/疾风半藏_icon.png', '手里剑', '1');
INSERT INTO `hero` VALUES ('5', '密使罗宾汉', 'imgs/icon/密使罗宾汉_icon.png', '惩戒之箭', '1');
INSERT INTO `hero` VALUES ('6', 'R-0', 'imgs/icon/R-0_icon.png', '箭如雨发', '1');
INSERT INTO `hero` VALUES ('7', '月圆奇波郎', 'imgs/icon/月圆奇波郎_icon.png', '炽焰矢', '1');
INSERT INTO `hero` VALUES ('9', '寒霜恶灵妮芬', 'imgs/icon/寒霜恶灵妮芬_icon.png', '冰霜射击', '1');
INSERT INTO `hero` VALUES ('10', '倾国倾城春香', 'imgs/icon/倾国倾城春香_icon.png', '召唤香丹', '1');
INSERT INTO `hero` VALUES ('11', '浪漫的麦格尼斯', 'imgs/icon/浪漫的麦格尼斯_icon.png', '翠绿生长', '1');
INSERT INTO `hero` VALUES ('12', '爱如潮涌的牛郎', 'imgs/icon/爱如潮涌的牛郎_icon.png', '月光之箭', '1');
INSERT INTO `hero` VALUES ('13', '月光追击者阿塔兰特', 'imgs/icon/月光追击者阿塔兰特_icon.png', '可爱的妖精', '1');
INSERT INTO `hero` VALUES ('14', '黑曼巴', 'imgs/icon/黑曼巴_icon.png', '野生牙', '1');
INSERT INTO `hero` VALUES ('15', '首席舞蹈家李', 'imgs/icon/首席舞蹈家李_icon.png', '风之舞', '1');
INSERT INTO `hero` VALUES ('16', '火焰之迎春', 'imgs/icon/火焰之迎春_icon.png', '庆典时间！', '1');
INSERT INTO `hero` VALUES ('17', '奇普·萨那弗', 'imgs/icon/奇普·萨那弗_icon.png', 'Y刃', '1');
INSERT INTO `hero` VALUES ('18', '鹰之女儿拉喜玛', 'imgs/icon/鹰之女儿拉喜玛_icon.png', '疾驶的箭', '1');
INSERT INTO `hero` VALUES ('19', '幽灵公主贝欧琳', 'imgs/icon/幽灵公主贝欧琳_icon.png', '幽灵派对', '1');
INSERT INTO `hero` VALUES ('20', '月姬辉夜姬', 'imgs/icon/月姬辉夜姬_icon.png', '樱花之雪', '1');
INSERT INTO `hero` VALUES ('21', '不知火舞', 'imgs/icon/不知火舞_icon.png', '池中舞', '1');
INSERT INTO `hero` VALUES ('22', '荣誉者凯伦', 'imgs/icon/荣誉者凯伦_icon.png', '罗曼的愤怒', '1');
INSERT INTO `hero` VALUES ('23', '收割者塞特', 'imgs/icon/收割者塞特_icon.png', '死灵之箭', '1');
INSERT INTO `hero` VALUES ('24', '五虎大将军韩胜', 'imgs/icon/五虎大将军韩胜_icon.png', '隔山打牛', '1');
INSERT INTO `hero` VALUES ('25', '视死如归达达尼昂', 'imgs/icon/视死如归达达尼昂_icon.png', '格林机枪', '1');
INSERT INTO `hero` VALUES ('26', '夜魔女麻美', 'imgs/icon/夜魔女麻美_icon.png', '最终歼灭之枪', '1');
INSERT INTO `hero` VALUES ('27', '牛仔梅西', 'imgs/icon/牛仔梅西_icon.png', 'MD-21大号铅弹', '1');
INSERT INTO `hero` VALUES ('28', '司令斯派洛', 'imgs/icon/司令斯派洛_icon.png', '空袭支援', '1');
INSERT INTO `hero` VALUES ('29', '最强佣兵斯内克', 'imgs/icon/最强佣兵斯内克_icon.png', '格林机枪', '1');
INSERT INTO `hero` VALUES ('30', '恶灵乌鸦', 'imgs/icon/恶灵乌鸦_icon.png', 'PD-21黑枪射击', '1');
INSERT INTO `hero` VALUES ('31', '审判者文森特', 'imgs/icon/审判者文森特_icon.png', '怒气-7榴弹', '1');
INSERT INTO `hero` VALUES ('32', '噬魂射手No.9', 'imgs/icon/噬魂射手No.9_icon.png', '狙击弹', '1');
INSERT INTO `hero` VALUES ('33', '哨兵R', 'imgs/icon/哨兵R_icon.png', '逆袭的浮游炮', '1');
INSERT INTO `hero` VALUES ('34', '超杀女明蒂', 'imgs/icon/超杀女明蒂_icon.png', '死神飞弹', '1');
INSERT INTO `hero` VALUES ('35', '黑暗驱逐者威廉', 'imgs/icon/黑暗驱逐者威廉_icon.png', '终极飞弹', '1');
INSERT INTO `hero` VALUES ('36', '赤色弹丸孙市', 'imgs/icon/赤色弹丸孙市_icon.png', '火炮发射！', '1');
INSERT INTO `hero` VALUES ('37', '武装女仆迪雅', 'imgs/icon/武装女仆迪雅_icon.png', '008公文包', '1');
INSERT INTO `hero` VALUES ('38', '名侦探夏洛克', 'imgs/icon/名侦探夏洛克_icon.png', '犯人就是你！', '1');
INSERT INTO `hero` VALUES ('39', '电子人斯佩妮', 'imgs/icon/电子人斯佩妮_icon.png', 'CS-爆破装甲', '1');
INSERT INTO `hero` VALUES ('40', '艾尔菲亚特·华伦泰', 'imgs/icon/艾尔菲亚特·华伦泰_icon.png', '草莓派', '1');
INSERT INTO `hero` VALUES ('41', '探究者罗蕾莱', 'imgs/icon/探究者罗蕾莱_icon.png', '训练枪', '1');
INSERT INTO `hero` VALUES ('42', '妮欧', 'imgs/icon/妮欧_icon.png', '连射激光', '1');
INSERT INTO `hero` VALUES ('43', '梅尔', 'imgs/icon/梅尔_icon.png', '发射闪弹', '1');
INSERT INTO `hero` VALUES ('44', '蕾拉', 'imgs/icon/蕾拉_icon.png', '突击滑翔机', '1');
INSERT INTO `hero` VALUES ('45', '海军上将斯嘉丽', 'imgs/icon/海军上将斯嘉丽_icon.png', '从未自卑', '1');
INSERT INTO `hero` VALUES ('46', '莉安娜·哈迪兰', 'imgs/icon/莉安娜·哈迪兰_icon.png', '儿童浆纱机', '1');
INSERT INTO `hero` VALUES ('47', '露比·罗丝', 'imgs/icon/露比·罗丝_icon.png', '尘晶弹', '1');
INSERT INTO `hero` VALUES ('48', '诺拉·瓦尔基里', 'imgs/icon/诺拉·瓦尔基里_icon.png', '钢炎之心', '1');
INSERT INTO `hero` VALUES ('49', '冰霜猎人雷芬', 'imgs/icon/冰霜猎人雷芬_icon.png', '冰霜子弹', '1');
INSERT INTO `hero` VALUES ('50', '百万富翁桃太郎', 'imgs/icon/百万富翁桃太郎_icon.png', '桃桃弹', '1');
INSERT INTO `hero` VALUES ('51', '双面人鲁伊希尔拉', 'imgs/icon/双面人鲁伊希尔拉_icon.png', '不稳定射击', '1');
INSERT INTO `hero` VALUES ('52', '美食家阿索斯', 'imgs/icon/美食家阿索斯_icon.png', '甩枪', '1');
INSERT INTO `hero` VALUES ('53', '修梅尔·托拉巴特', 'imgs/icon/修梅尔·托拉巴特_icon.png', '火爆散弹', '1');
INSERT INTO `hero` VALUES ('54', '约束者克里姆希尔特', 'imgs/icon/约束者克里姆希尔特_icon.png', '大地震颤', '1');
INSERT INTO `hero` VALUES ('55', '最初的帕拉丁罗兰', 'imgs/icon/最初的帕拉丁罗兰_icon.png', '炫光', '1');
INSERT INTO `hero` VALUES ('56', '雷神托尔', 'imgs/icon/雷神托尔_icon.png', '能量喷涌', '1');
INSERT INTO `hero` VALUES ('57', '皇帝亚历山大', 'imgs/icon/皇帝亚历山大_icon.png', '王之军势', '1');
INSERT INTO `hero` VALUES ('58', '战神阿基里斯', 'imgs/icon/战神阿基里斯_icon.png', '拒马', '1');
INSERT INTO `hero` VALUES ('59', '白胡子德雷克', 'imgs/icon/白胡子德雷克_icon.png', '惊涛骇浪', '1');
INSERT INTO `hero` VALUES ('60', '黑暗骑士贝恩', 'imgs/icon/黑暗骑士贝恩_icon.png', '黑暗制裁', '1');
INSERT INTO `hero` VALUES ('61', '圣魔该隐', 'imgs/icon/圣魔该隐_icon.png', '混沌漩涡', '1');
INSERT INTO `hero` VALUES ('62', '粉碎者斯黛拉', 'imgs/icon/粉碎者斯黛拉_icon.png', '苍穹之击', '1');
INSERT INTO `hero` VALUES ('63', '大莫离支文德', 'imgs/icon/大莫离支文德_icon.png', '势不可挡', '1');
INSERT INTO `hero` VALUES ('64', 'V-暴走型', 'imgs/icon/V-暴走型_icon.png', '无限锤制', '1');
INSERT INTO `hero` VALUES ('65', '风华绝代织女', 'imgs/icon/风华绝代织女_icon.png', '破坏铁球', '1');
INSERT INTO `hero` VALUES ('66', '意志坚定的赫克托尔', 'imgs/icon/意志坚定的赫克托尔_icon.png', '钢铁意志', '1');
INSERT INTO `hero` VALUES ('67', '战场上的圣女雅典娜', 'imgs/icon/战场上的圣女雅典娜_icon.png', '太阳的一击', '1');
INSERT INTO `hero` VALUES ('68', '不败将军秦琼', 'imgs/icon/不败将军秦琼_icon.png', '绚烂的长枪术', '1');
INSERT INTO `hero` VALUES ('69', '梅伊', 'imgs/icon/梅伊_icon.png', '海豚先生', '1');
INSERT INTO `hero` VALUES ('70', '龙骑士齐格弗里德', 'imgs/icon/龙骑士齐格弗里德_icon.png', '束缚之锁链', '1');
INSERT INTO `hero` VALUES ('71', '末世杜尔拉汗', 'imgs/icon/末世杜尔拉汗_icon.png', '刽子手的斧头', '1');
INSERT INTO `hero` VALUES ('72', '辛·奇斯库', 'imgs/icon/辛·奇斯库_icon.png', '鹰嘴钻', '1');
INSERT INTO `hero` VALUES ('73', '扭蛋鲁格斯', 'imgs/icon/扭蛋鲁格斯_icon.png', '燃烧贾斯蒂斯', '1');
INSERT INTO `hero` VALUES ('74', '冰锤沃尔夫冈', 'imgs/icon/冰锤沃尔夫冈_icon.png', '大锤袭来', '1');
INSERT INTO `hero` VALUES ('75', '比利·凯恩', 'imgs/icon/比利·凯恩_icon.png', '集点连击棍', '1');
INSERT INTO `hero` VALUES ('76', '金', 'imgs/icon/金_icon.png', '流星落', '1');
INSERT INTO `hero` VALUES ('77', '特瑞·博加德', 'imgs/icon/特瑞·博加德_icon.png', '火焰冲拳', '1');
INSERT INTO `hero` VALUES ('78', '阳小龙', 'imgs/icon/阳小龙_icon.png', '组合拳', '1');
INSERT INTO `hero` VALUES ('79', '皮拉·尼可丝', 'imgs/icon/皮拉·尼可丝_icon.png', '极性操控', '1');
INSERT INTO `hero` VALUES ('80', '节制的芬里尔', 'imgs/icon/节制的芬里尔_icon.png', '狼的威望', '1');
INSERT INTO `hero` VALUES ('81', '料理武术家雷玲', 'imgs/icon/料理武术家雷玲_icon.png', '调理准备', '1');
INSERT INTO `hero` VALUES ('82', '铁女修尔拉', 'imgs/icon/铁女修尔拉_icon.png', '匠魂', '1');
INSERT INTO `hero` VALUES ('83', '萨哈德·诺德拉斯', 'imgs/icon/萨哈德·诺德拉斯_icon.png', '大浪', '1');
INSERT INTO `hero` VALUES ('84', '莉柯妲·贝尔戴因', 'imgs/icon/莉柯妲·贝尔戴因_icon.png', '螺旋牙击', '1');
INSERT INTO `hero` VALUES ('85', '黑袍魔女桃乐丝', 'imgs/icon/黑袍魔女桃乐丝_icon.png', '奥能脉冲', '1');
INSERT INTO `hero` VALUES ('86', '魔法少女明日香', 'imgs/icon/魔法少女明日香_icon.png', '暴走爱情冲击！', '1');
INSERT INTO `hero` VALUES ('87', '觉醒的雅甘', 'imgs/icon/觉醒的雅甘_icon.png', '霹雳火', '1');
INSERT INTO `hero` VALUES ('88', '阎罗使者桂香', 'imgs/icon/阎罗使者桂香_icon.png', '恶灵退散', '1');
INSERT INTO `hero` VALUES ('89', '冰封王座萨斯夸奇', 'imgs/icon/冰封王座萨斯夸奇_icon.png', '钻石星辰', '1');
INSERT INTO `hero` VALUES ('90', '月光女神莉莉丝', 'imgs/icon/月光女神莉莉丝_icon.png', '黑暗噩梦', '1');
INSERT INTO `hero` VALUES ('91', '夜之女王瑞秋', 'imgs/icon/夜之女王瑞秋_icon.png', '召唤蝙蝠', '1');
INSERT INTO `hero` VALUES ('92', '黑桃王后爱丽丝', 'imgs/icon/黑桃王后爱丽丝_icon.png', '命运', '1');
INSERT INTO `hero` VALUES ('93', '自然的纳兹伦', 'imgs/icon/自然的纳兹伦_icon.png', '狩猎律动', '1');
INSERT INTO `hero` VALUES ('94', '状元李梦龙', 'imgs/icon/状元李梦龙_icon.png', '影分身之术', '1');
INSERT INTO `hero` VALUES ('95', '死灵法师内克伦', 'imgs/icon/死灵法师内克伦_icon.png', '召唤虚灵', '1');
INSERT INTO `hero` VALUES ('96', '丰饶女神德米特尔', 'imgs/icon/丰饶女神德米特尔_icon.png', '麦田守卫者', '1');
INSERT INTO `hero` VALUES ('97', '异端审判官乌列', 'imgs/icon/异端审判官乌列_icon.png', '刀锋十字架', '1');
INSERT INTO `hero` VALUES ('98', '稀世怪盗路尼昂', 'imgs/icon/稀世怪盗路尼昂_icon.png', '怪盗出现', '1');
INSERT INTO `hero` VALUES ('99', '创造者宾森恩', 'imgs/icon/创造者宾森恩_icon.png', '魔导粉碎机', '1');
INSERT INTO `hero` VALUES ('100', '苏醒的贝斯派', 'imgs/icon/苏醒的贝斯派_icon.png', '水之引导', '1');
INSERT INTO `hero` VALUES ('101', '拉姆蕾萨尔·华伦泰', 'imgs/icon/拉姆蕾萨尔·华伦泰_icon.png', '维尔法&维塔斯', '1');
INSERT INTO `hero` VALUES ('102', '婕克·欧', 'imgs/icon/婕克·欧_icon.png', '解放断头之锁', '1');
INSERT INTO `hero` VALUES ('103', '魔法傀儡师贝萝特', 'imgs/icon/魔法傀儡师贝萝特_icon.png', '傀儡术', '1');
INSERT INTO `hero` VALUES ('104', '月亮花伊吹', 'imgs/icon/月亮花伊吹_icon.png', '兔子猛击！', '1');
INSERT INTO `hero` VALUES ('105', '神乐千鹤', 'imgs/icon/神乐千鹤_icon.png', '212式迅速的贺词', '1');
INSERT INTO `hero` VALUES ('106', '荒狂电光夏尔美', 'imgs/icon/荒狂电光夏尔美_icon.png', '无月之天真', '1');
INSERT INTO `hero` VALUES ('107', '少女', 'imgs/icon/少女_icon.png', '和声', '1');
INSERT INTO `hero` VALUES ('108', '森罗万象海獭', 'imgs/icon/森罗万象海獭_icon.png', '海獭吼', '1');
INSERT INTO `hero` VALUES ('109', '风之魔女乌尔弗兰姆', 'imgs/icon/风之魔女乌尔弗兰姆_icon.png', '风之咆哮', '1');
INSERT INTO `hero` VALUES ('110', '引导者奥西里斯', 'imgs/icon/引导者奥西里斯_icon.png', '古代魔法阵', '1');
INSERT INTO `hero` VALUES ('111', '救世的圣母玛利亚', 'imgs/icon/救世的圣母玛利亚_icon.png', '召唤圣物', '1');
INSERT INTO `hero` VALUES ('112', '暗黑修女梅丽莎', 'imgs/icon/暗黑修女梅丽莎_icon.png', '黑暗圣经', '1');
INSERT INTO `hero` VALUES ('113', '猫咪大师喵', 'imgs/icon/猫咪大师喵_icon.png', '光之絮语', '1');
INSERT INTO `hero` VALUES ('114', '光之南丁格尔', 'imgs/icon/光之南丁格尔_icon.png', '光之絮语', '1');
INSERT INTO `hero` VALUES ('115', '九尾狐阿狸', 'imgs/icon/九尾狐阿狸_icon.png', '神圣乐钟', '1');
INSERT INTO `hero` VALUES ('116', 'ICU特工护士', 'imgs/icon/ICU特工护士_icon.png', '注射！', '1');
INSERT INTO `hero` VALUES ('117', '万能的乌帕', 'imgs/icon/万能的乌帕_icon.png', '三位一体', '1');
INSERT INTO `hero` VALUES ('118', '神女卑弥呼', 'imgs/icon/神女卑弥呼_icon.png', '八方鬼缚阵', '1');
INSERT INTO `hero` VALUES ('119', '疯狂科学家斯坦因', 'imgs/icon/疯狂科学家斯坦因_icon.png', '生命维持装置', '1');
INSERT INTO `hero` VALUES ('120', '美食猎人彩依', 'imgs/icon/美食猎人彩依_icon.png', '豪华套餐', '1');
INSERT INTO `hero` VALUES ('121', '追求幸福的达拉', 'imgs/icon/追求幸福的达拉_icon.png', '希望之歌', '1');
INSERT INTO `hero` VALUES ('122', '无限的贝阿朵莉切', 'imgs/icon/无限的贝阿朵莉切_icon.png', '治愈之梦', '1');
INSERT INTO `hero` VALUES ('123', '诱惑之奥菲欧', 'imgs/icon/诱惑之奥菲欧_icon.png', '缪斯之声', '1');
INSERT INTO `hero` VALUES ('124', '星光之娅莉娅', 'imgs/icon/星光之娅莉娅_icon.png', '星光之祝福', '1');
INSERT INTO `hero` VALUES ('125', '伊诺', 'imgs/icon/伊诺_icon.png', '极限强音', '1');
INSERT INTO `hero` VALUES ('126', '涅斯军长官尤莉娅', 'imgs/icon/涅斯军长官尤莉娅_icon.png', '传达指令！', '1');
INSERT INTO `hero` VALUES ('127', '虚无的福斯特', 'imgs/icon/虚无的福斯特_icon.png', '神秘能力', '1');
INSERT INTO `hero` VALUES ('128', '使者赛莲', 'imgs/icon/使者赛莲_icon.png', '深海的眼泪', '1');
INSERT INTO `hero` VALUES ('129', '圣都之守护者诺埃尔', 'imgs/icon/圣都之守护者诺埃尔_icon.png', '圣都之祈祷', '1');
INSERT INTO `hero` VALUES ('130', '椎拳崇', 'imgs/icon/椎拳崇_icon.png', '超球弹', '1');
INSERT INTO `hero` VALUES ('131', '麻宫雅典娜', 'imgs/icon/麻宫雅典娜_icon.png', '狂暴之球', '1');
INSERT INTO `hero` VALUES ('132', '白花瓦莉', 'imgs/icon/白花瓦莉_icon.png', '西天之花', '1');
INSERT INTO `hero` VALUES ('133', '阴阳师晴明', 'imgs/icon/阴阳师晴明_icon.png', '人灵：阳', '1');
INSERT INTO `hero` VALUES ('134', '先知墨菲斯', 'imgs/icon/先知墨菲斯_icon.png', '睡神的祝福', '1');
INSERT INTO `hero` VALUES ('135', '光明剑士里昂', 'imgs/icon/光明剑士里昂_icon.png', '召唤圣剑', '1');
INSERT INTO `hero` VALUES ('136', '必胜的罗什福尔', 'imgs/icon/必胜的罗什福尔_icon.png', '利刃华尔兹', '1');
INSERT INTO `hero` VALUES ('137', '钢铁骑士圣女贞德', 'imgs/icon/钢铁骑士圣女贞德_icon.png', '魔神剑', '1');
INSERT INTO `hero` VALUES ('138', '将军须佐能乎', 'imgs/icon/将军须佐能乎_icon.png', '一闪', '1');
INSERT INTO `hero` VALUES ('139', '绝对魔王薇薇安', 'imgs/icon/绝对魔王薇薇安_icon.png', '召唤魔剑', '1');
INSERT INTO `hero` VALUES ('140', '蒙泰终极型', 'imgs/icon/蒙泰终极型_icon.png', '斩月', '1');
INSERT INTO `hero` VALUES ('141', '二天一流香织', 'imgs/icon/二天一流香织_icon.png', '天翔龙闪', '1');
INSERT INTO `hero` VALUES ('142', '狩魔猎人亚伯', 'imgs/icon/狩魔猎人亚伯_icon.png', '负面起源', '1');
INSERT INTO `hero` VALUES ('143', '族长乌兹门特', 'imgs/icon/族长乌兹门特_icon.png', '狂野之怒', '1');
INSERT INTO `hero` VALUES ('144', '捕盗大将卞剑秀', 'imgs/icon/捕盗大将卞剑秀_icon.png', '百步飞剑', '1');
INSERT INTO `hero` VALUES ('145', '异能者伊莎贝尔', 'imgs/icon/异能者伊莎贝尔_icon.png', '狂暴恶灵', '1');
INSERT INTO `hero` VALUES ('146', '民族英雄郑成功', 'imgs/icon/民族英雄郑成功_icon.png', '水龙波', '1');
INSERT INTO `hero` VALUES ('147', '约定之维多利亚', 'imgs/icon/约定之维多利亚_icon.png', '胜利之旗', '1');
INSERT INTO `hero` VALUES ('148', '黑骑士莱昂内尔', 'imgs/icon/黑骑士莱昂内尔_icon.png', '索塔尔剑法', '1');
INSERT INTO `hero` VALUES ('149', '森林魔女娅莉塔', 'imgs/icon/森林魔女娅莉塔_icon.png', '魔鬼之藤', '1');
INSERT INTO `hero` VALUES ('150', '索尔·巴德凯', 'imgs/icon/索尔·巴德凯_icon.png', '背德之炎', '1');
INSERT INTO `hero` VALUES ('151', '凯·奇斯库', 'imgs/icon/凯·奇斯库_icon.png', '雷光剑气', '1');
INSERT INTO `hero` VALUES ('152', '暴走僵尸希恩', 'imgs/icon/暴走僵尸希恩_icon.png', '嗜血', '1');
INSERT INTO `hero` VALUES ('153', '乔尼', 'imgs/icon/乔尼_icon.png', '迷雾斩', '1');
INSERT INTO `hero` VALUES ('154', '米莉亚·蕾姬', 'imgs/icon/米莉亚·蕾姬_icon.png', '欲望摇摆', '1');
INSERT INTO `hero` VALUES ('155', '鬼王钟馗', 'imgs/icon/鬼王钟馗_icon.png', '毗沙门天', '1');
INSERT INTO `hero` VALUES ('156', '冥帝博格斯', 'imgs/icon/冥帝博格斯_icon.png', '博格斯斩', '1');
INSERT INTO `hero` VALUES ('157', '草薙京', 'imgs/icon/草薙京_icon.png', '百八式·暗払（物）', '1');
INSERT INTO `hero` VALUES ('158', '八神庵', 'imgs/icon/八神庵_icon.png', '百八式·暗払（魔）', '1');
INSERT INTO `hero` VALUES ('159', '欧米茄·卢卡尔', 'imgs/icon/欧米茄·卢卡尔_icon.png', '黑暗攻击', '1');
INSERT INTO `hero` VALUES ('160', '炎之宿命克里斯', 'imgs/icon/炎之宿命克里斯_icon.png', '射日之炎', '1');
INSERT INTO `hero` VALUES ('161', '魏丝·雪倪', 'imgs/icon/魏丝·雪倪_icon.png', '寒冰箭', '1');
INSERT INTO `hero` VALUES ('162', '布蕾克·贝拉多娜', 'imgs/icon/布蕾克·贝拉多娜_icon.png', '蝴蝶乱舞', '1');
INSERT INTO `hero` VALUES ('163', '战斗机器人 特-6', 'imgs/icon/战斗机器人 特-6_icon.png', '', '1');
INSERT INTO `hero` VALUES ('164', '火之魔女莎莎', 'imgs/icon/火之魔女莎莎_icon.png', '火焰一击', '1');
INSERT INTO `hero` VALUES ('165', '引领者伊西丝', 'imgs/icon/引领者伊西丝_icon.png', '沙之波纹', '1');
INSERT INTO `hero` VALUES ('166', '屠杀者哈尔菲亚', 'imgs/icon/屠杀者哈尔菲亚_icon.png', '华丽斩', '1');
INSERT INTO `hero` VALUES ('167', '亚特鲁·克里斯汀', 'imgs/icon/亚特鲁·克里斯汀_icon.png', '音速滑击', '1');
INSERT INTO `hero` VALUES ('168', '拉克夏·冯·罗斯威尔', 'imgs/icon/拉克夏·冯·罗斯威尔_icon.png', '连环穿刺', '1');
INSERT INTO `hero` VALUES ('169', '达娜·伊克露西亚', 'imgs/icon/达娜·伊克露西亚_icon.png', '双重利刃', '1');
