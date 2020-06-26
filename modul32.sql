Set operation,
  esetlegesen, szükséged lehet olyanra, hogy több táblázat adatát kelljen összekombinálnod, hogy egy átfogó dataset-et hozz létre.
  erre talán úgy lehet szükséged, hogy hasonló adatokat kombinálj össze egy adatbázison belül, vagy akár több adatbázison belül,
    vagy akár más szerverről is.

      - ahhoz, hogy ezt elérd használd a UNION, and UNION ALL operátorokat.

      ! a union, egyesít több datasetet egyetlen dataseté, kitörölve az esetleges duplikátumokat.
      ! a union all, úgyanezt teszi, de meghagyja a duplikátumokat


Union operator,
  a union operátor lényegében arra használatos, hogy több SELECT állítás result-setjét kombináld össze.
  ! minden SELECT állításnak a UNION operátoron belül azonos oszlopszámmal kell rendelkezzen
  ! úgyanakkor, azonos adattípusból is kell származzanak, és úgyanabban a sorrendben is kell legyenek.

    syntax:
      SELECT column_name(s) FROM table_name1
      UNION
      SELECT column_name(s) FROM table_name2

    ! tipp, ahhoz, hogy olyan táblázatokat összesíts amelyben nincs pont úgyanaz az oszlop, használd a NULL-t az oszlop neve helyett.

Union all operator,
  a union all operátor fogja egyik táblázat összes sorát és összesíti egy másik táblázat összes sorával egy táblázatba.

    syntax:
    SELECT column_name(s) FROM table_name1
    UNION ALL
    SELECT column_name(s) FROM table_name2
