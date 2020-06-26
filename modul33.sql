Inserting data,
  az SQL táblázat az adatokat sorokban tárolja, egyik sort a másik után.
  az INSERT INTO állítást arra használjuk, hogy egy új sor adatot vigyünk be egy táblázatba

    syntax:
      INSERT INTO table_name
      VALUES (value1, value2, value3)

      ! amikor az SQL insert állítást használod akkor minden oszlop számára adatokat kell megadj amelyeknek vagy nincs alapértelmezettként
        értékük, vagy nem támogatják a NULL-t.


    másképpen, képes vagy meghatározni pontosan az oszlopok nevét az insert állításban

      syntax:
      INSERT INTO table_name (column1, column2, column3, ...,columnN)
      VALUES (value1, value2, value3,...valueN);


Updating data,
  az UPDATE állítás lehetővé teszi, hogy megváltoztassuk az adatot a táblázatban.

    syntax:
      UPDATE table_name
      SET column1=value1, column2=value2, ..
      WHERE condition

        - ha kihagyod a WHERE kikötést a táblázat összes feljegyzése meglesz változtatva

Deleting data,
  a DELETE állítás lehetővé teszi, hogy feljegyzést törölj ki a táblázatból

    syntax:
      DELETE FROM table_name
      WHERE condition

      ! ha kihagyod a WHERE kikötést akkor az összes feljegyzés törlődik
