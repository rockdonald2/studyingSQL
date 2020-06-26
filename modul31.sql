Joining tables,
  minden egyes lekérés amit eddig csináltunk csak egyetlen táblát használd egy időben.
  az egyik leghasznosabb tulajdonsága az SQL az, hogy képes adatokat összekombinálni kettő vagy több táblázatból.

  a "joining table" lényegében azt jelenti, hogy két vagy több táblázatot kombinálunk létrehozva egy új idéiglenes táblázatot.

  pl. a két táblázat amit létrehoztam a szerveren: customers és items.
        - az itemsben található egy customerID referencia, ami a customers táblázatra hivatkozik,
          ez egy sokkal hatékonyabb módszer, mint, hogy egy külön text stringet tartalmazzon mindkét táblázat.


          ! ahhoz, hogy két táblázatot összekombináljunk a FROM állításban mindkét táblzát nevét odaírjuk, és
            a SELECT állításban fully qualified column namet használunk.
Custom names,
  a személyre szabott neveket táblázatok esetében is lehet használni.
  - így letudod rövidíteni a join parancsokat a becenevek segítségével.

Types of JOIN,
  3 féle join típust különböztetünk meg: inner, right, left

  - az inner join lényegében az eddig használt join, azokat a sorokat adja vissza ahol egyezés van.

    syntax:
        SELECT column_name FROM table_name1 INNER JOIN table_name2 ON condition

  - a left join visszaadja az összes sort a bal oldali táblázatból még akkor is ha egyetlen egyezés sincs a jobb oldali táblázattal.

    syntax:
        SELECT column_name FROM table_name1 LEFT OUTER JOIN table_name2 ON condition

  - a right join úgyanaz csak az összes sort visszaadja a jobb oldali táblázatból

    syntax:
      SELECT column_name FROM table_name1 RIGHT OUTER JOIN table_name2 ON condition
