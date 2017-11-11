select
*
from
user

SELECT
 *
FROM
 pg_catalog.pg_tables
WHERE
 schemaname = 'bookshare'

 CREATE TABLE "book_usersrate" (
   "book" INTEGER NOT NULL,
   "user" INTEGER NOT NULL,
   CONSTRAINT "pk_book_usersrate" PRIMARY KEY ("book", "user")
 );

 CREATE INDEX "idx_book_usersrate" ON "book_usersrate" ("user");

 ALTER TABLE "book_usersrate" ADD CONSTRAINT "fk_book_usersrate__book" FOREIGN KEY ("book") REFERENCES "book" ("id");

 ALTER TABLE "book_usersrate" ADD CONSTRAINT "fk_book_usersrate__users" FOREIGN KEY ("user") REFERENCES "users" ("id");


 CREATE TABLE "chapter_usersrate" (
  "chapter" INTEGER NOT NULL,
  "user" INTEGER NOT NULL,
  CONSTRAINT "pk_chapter_usersrate" PRIMARY KEY ("chapter", "user")
);

CREATE INDEX "idx_chapter_usersrate" ON "chapter_usersrate" ("user");

ALTER TABLE "chapter_usersrate" ADD CONSTRAINT "fk_chapter_usersrate__chapter" FOREIGN KEY ("chapter") REFERENCES "chapter" ("id");

ALTER TABLE "chapter_usersrate" ADD CONSTRAINT "fk_chapter_usersrate__user" FOREIGN KEY ("user") REFERENCES "users" ("id");
