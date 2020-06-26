SQL constraints,
  az SQL korlátok arra jók, hogy szabályokat határozzunk meg a táblázat adataira.

  gyakran használt korlátok:
    NOT NULL - meghatározza, hogy az adott oszlop adatai nem lehet nullák.
    UNIQUE - meghatározza az oszlop egyediségét azaz nem lehetnek benne duplikátumok.
    PRIMARY KEY - az elsődleges kulcs biztosít egy gyorsabb elérést a táblázatnak, kényszeríti a táblázatot, hogy abban az oszlopban
          csak egyedi adatok szerepelhetnek mindegyik sor számára.
    CHECK - eldönti, hogy az érték TRUE/FALSE egy logikai kifejezés által
    DEFAULT - alapértelmezett érték meghatározása

     ! általában a táblázat létrehozásnál az oszlop adattípusa után írjuk a korlátokat.


Auto increment,
  az automatikus növelés lehetővé tesz egy olyan egyedi számot amely automatikusan legenerálódik mikor egy új feljegyzést illesztünk
    be a táblázatba.

    - általában a primary keynél használjuk, mert ugye azt szeretnék, hogy automatikusan létrehozna egy egyedi számot bármikor illesztünk
        be egy új feljegyzést.

        alapértelmezettként egyesével növeli a számot, és a kezdő érték is egy.


Alter table,
  a táblázat megváltoztatását arra használjuk, hogy hozzáadjunk, töröljünk vagy modosítsunk oszlopokat a táblázatból.
   - úgyanakkor a korlátok változtatására is használatos

    syntax az hozzáadáshoz:
      ALTER TABLE table_name
      ADD new_column_name data_type constraints;

Dropping,
  a drop által tudunk törölni oszlopot

    syntax:
      ALTER TABLE table_name
      DROP COLUMN column_name;

    syntax:
      DROP TABLE table_name;

Renaming,
  oszlop átnevezéshez:
      syntax:
        ALTER TABLE table_name
        CHANGE column_name new_column_name data_type;

  táblázat átnevezéshez:
      syntax:
        RENAME TABLE table_name TO new_table_name;
