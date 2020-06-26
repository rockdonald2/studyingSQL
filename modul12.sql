Basic SQL commands,
  az SQL SHOW állítás bemutatja az információkat amik az adatbázisban illetve azok táblázataiban vannak.
    - ez a segítőkész eszköz segít nyomon követni az adatbázis tartalmát, illetve emlékeztetni a táblázataid struktúráit.

    pl. a SHOW DATABASES parancs felsorolja az összes adatbázist amit a szerver kezel.

  a SQL SHOW TABLES parancsot arra használjuk, hogy bemutassuk az összes táblázatot a jelenleg kiválasztott mySQL adatbázisban.
  a SQL SHOW COLUMNS FROM 'táblázatneve' információkat nyújt az oszlopokról az adott táblázatban
    - a SHOW COLUMNS parancs a következő információkat nyújta:
        Field: a sor neve;
        Type: a sor adattípusa;
        Key: megmutatja az adott sor elsődleges kulcs-e vagy sem;
        Default: az alapértelmezett érték az adott sorra;
        Extra: tartalmazhat bármilyen további elérhető információt az adott sorról.


The SELECT statement,
  a SELECT állítást használjuk arra, hogy adatot válasszunk ki az adott adatbázisból.
  - ennek az eredménye egy 'result' táblázatban van raktározva amit result-setnek hívunk.
  egy ilyen lekérdezés információkkal szolgálhat egy választott sorból vagy az összes sorból a táblázatban.
  - ahhoz, hogy egy alapvető SELECT állítást létrehozz határozd meg a sorok nevét amikre szükséged van a táblázatból.

    syntax:
      SELECT column_list // (1)
      FROM table_name // (2)
          1 - tartalmaz egy vagy több sort amiből az adat van lekérve
          2 - tartalmazza a táblázat nevét amiből az információ van lekérve
