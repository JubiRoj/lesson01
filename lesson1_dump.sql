/*
 Navicat Premium Data Transfer

 Source Server         : lesson01
 Source Server Type    : PostgreSQL
 Source Server Version : 90303
 Source Host           : localhost:5432
 Source Catalog        : postgres
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 90303
 File Encoding         : 65001

 Date: 01/10/2018 18:50:46
*/


-- ----------------------------
-- Table structure for Description
-- ----------------------------
DROP TABLE IF EXISTS "public"."Description";
CREATE TABLE "public"."Description" (
  "ID" int4 NOT NULL,
  "Content" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of Description
-- ----------------------------
INSERT INTO "public"."Description" VALUES (1, 'Подробное описание этого элемента');

-- ----------------------------
-- Table structure for Films
-- ----------------------------
DROP TABLE IF EXISTS "public"."Films";
CREATE TABLE "public"."Films" (
  "ID" int4 NOT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default",
  "year" date,
  "producer_id" int4,
  "description_id" int4
)
;

-- ----------------------------
-- Records of Films
-- ----------------------------
INSERT INTO "public"."Films" VALUES (1, 'Новая эра Z', '2018-10-25', 4, 1);
INSERT INTO "public"."Films" VALUES (2, 'Дежавю ', '2018-10-14', 2, 1);
INSERT INTO "public"."Films" VALUES (3, 'Свадьба в Алчевске', '2007-07-07', 1, 1);
INSERT INTO "public"."Films" VALUES (4, 'Послезавтра', '2012-11-06', 3, 1);
INSERT INTO "public"."Films" VALUES (5, 'С легким паром', '1995-12-07', 5, 1);
INSERT INTO "public"."Films" VALUES (6, 'Матрица 2', '2003-07-05', 2, 1);
INSERT INTO "public"."Films" VALUES (7, 'Матрица', '2000-02-25', 2, 1);

-- ----------------------------
-- Table structure for Genres
-- ----------------------------
DROP TABLE IF EXISTS "public"."Genres";
CREATE TABLE "public"."Genres" (
  "ID" int4 NOT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default",
  "description_id" int4
)
;

-- ----------------------------
-- Records of Genres
-- ----------------------------
INSERT INTO "public"."Genres" VALUES (1, 'Фантастика', 1);
INSERT INTO "public"."Genres" VALUES (2, 'Триллер', 1);
INSERT INTO "public"."Genres" VALUES (3, 'Боевик', 1);
INSERT INTO "public"."Genres" VALUES (4, 'Ужасы', 1);
INSERT INTO "public"."Genres" VALUES (5, 'Драма', 1);
INSERT INTO "public"."Genres" VALUES (6, 'Комедия', 1);
INSERT INTO "public"."Genres" VALUES (7, 'Детектив', 1);

-- ----------------------------
-- Table structure for Producers
-- ----------------------------
DROP TABLE IF EXISTS "public"."Producers";
CREATE TABLE "public"."Producers" (
  "ID" int4 NOT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of Producers
-- ----------------------------
INSERT INTO "public"."Producers" VALUES (1, 'Алан Вудди');
INSERT INTO "public"."Producers" VALUES (2, 'Федр Бондарчук');
INSERT INTO "public"."Producers" VALUES (3, 'Харрисон Форд');
INSERT INTO "public"."Producers" VALUES (4, 'Лайам О’Доннелл');
INSERT INTO "public"."Producers" VALUES (5, 'Люси Фишер');

-- ----------------------------
-- Table structure for mtm_film_genre
-- ----------------------------
DROP TABLE IF EXISTS "public"."mtm_film_genre";
CREATE TABLE "public"."mtm_film_genre" (
  "film_id" int4 NOT NULL,
  "genre_id" int4 NOT NULL
)
;

-- ----------------------------
-- Records of mtm_film_genre
-- ----------------------------
INSERT INTO "public"."mtm_film_genre" VALUES (1, 1);
INSERT INTO "public"."mtm_film_genre" VALUES (1, 2);
INSERT INTO "public"."mtm_film_genre" VALUES (2, 3);
INSERT INTO "public"."mtm_film_genre" VALUES (2, 7);
INSERT INTO "public"."mtm_film_genre" VALUES (3, 5);
INSERT INTO "public"."mtm_film_genre" VALUES (3, 7);
INSERT INTO "public"."mtm_film_genre" VALUES (4, 6);
INSERT INTO "public"."mtm_film_genre" VALUES (4, 2);
INSERT INTO "public"."mtm_film_genre" VALUES (5, 1);
INSERT INTO "public"."mtm_film_genre" VALUES (5, 3);
INSERT INTO "public"."mtm_film_genre" VALUES (6, 1);
INSERT INTO "public"."mtm_film_genre" VALUES (6, 4);
INSERT INTO "public"."mtm_film_genre" VALUES (7, 7);

-- ----------------------------
-- Primary Key structure for table Description
-- ----------------------------
ALTER TABLE "public"."Description" ADD CONSTRAINT "Description_pkey" PRIMARY KEY ("ID");

-- ----------------------------
-- Primary Key structure for table Films
-- ----------------------------
ALTER TABLE "public"."Films" ADD CONSTRAINT "Films_pkey" PRIMARY KEY ("ID");

-- ----------------------------
-- Primary Key structure for table Genres
-- ----------------------------
ALTER TABLE "public"."Genres" ADD CONSTRAINT "Genres_pkey" PRIMARY KEY ("ID");

-- ----------------------------
-- Primary Key structure for table Producers
-- ----------------------------
ALTER TABLE "public"."Producers" ADD CONSTRAINT "Producers_pkey" PRIMARY KEY ("ID");

-- ----------------------------
-- Primary Key structure for table mtm_film_genre
-- ----------------------------
ALTER TABLE "public"."mtm_film_genre" ADD CONSTRAINT "mtm_film_genre_pkey" PRIMARY KEY ("film_id", "genre_id");
