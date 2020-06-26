The UPPER and LOWER functions,
  az UPPER funkció egy megadott oszlop minden stringjét nagy betűssé teszi.
  a LOWER úgyanennek az ellentetje.

      syntax:
          SELECT UPPER(column_name)


The SQRT and AVG functions,
  az SQRT funkció a négyzetgyőkét adja vissza a funkcióban belefoglalt értékeknek.

    syntax:
        SELECT SQRT(column_name)

  hasonlóan az AVG funkció egy bizonyos oszlop átlagát számolja ki.

    syntax:
        SELECT AVG(column_name)

The SUM function,
  arra használjuk, hogy egy oszlop summáját számoljuk ki

    syntax:
      SELECT SUM(column_name)

Subqueries,
  egy allehívás az egy lehívás egy másik lehíváson belül.

    például: kiszámolod egy oszlop átlagát, majd indítasz egy másik lehívást melyben csak az átlag fölötti értékeket kéred le.

    ezt lehet két külön lekérésben, vagy egyben a következő syntax alapján:

        SELECT column_name FROM table_name
        WHERE column_name > (SELECT AVG(column_name) from table_name)


LIKE and MIN,
  a like operátor akkor hasznos amikor egy keresési kondicíót akarsz megfogalmazni a where kikötésen belül.

      syntax:
        SELECT column_name FROM table_name WHERE column_name LIKE pattern;

        - az SQL pattern lehetőséget ad arra, hogy használd a "_" hogy összemérj bármely egyedüli karaktert,
          vagy az "%" hogy összemérj bármely önkényes számú karaktert.

          pl. hogy kiválasz olyan embereket akiknek a neve a betüvel kezdődik a következő like pattern használhatod: 'A%'

  a min funkció akkor hasznos amikor egy oszlop legkisebb értékét akarod megkeresni.

      syntax:
        SELECT MIN(column_name)
