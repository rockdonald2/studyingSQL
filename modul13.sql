Multiple queries,
  az SQL lehetővé teszi, hogy több lekérdezést és parancsot hajts végre egyszerre.

    pl. SELECT FirstName FROM customers;
        SELECT City FROM customers;

        ! fontos minden SQL parancs után használj ;-ot, hogy jelezd vége az adott parancsnak és értelmezhető.

Case sensitivity,
  minden SQL parancs 'insensitive', ami azt jelenti, hogy nem számit, hogy kis-nagy-kevert betükkel írod, úgyan azt jelenti.

    ! de általában minden SQL parancsot nagy betükkel írunk.

Syntax rules,
  egyetlen SQL parancs egy vagy akár több sorra is el lehet helyezve, nem számit, ignorálva van.
  így akár több parancsot egy sorra is fel lehet vinni.

    ! a megfelelő helyek kihagyás valamit a tagolás nagyban segit az SQL parancsaid megértésében, és karbantartásában.

Selecting multiple columns,
  ahogyan azt korábban leírtuk az SQL SELECT parancs információkat ad az adott táblázatból
  lehetséges több táblázatoszlopot kiválasztani egyszerre, csak sorold fel őket és válaszd el őket egy vesszővel.

Selecting all columns,
  ahhoz, hogy a táblázatod összes oszlopából kiírd az információkat használj egy *(csillag) jelet, ahelyett, hogy a táblázat
    összes oszlopát kiírnád külön-külön.

      csillag jelentése minden.

The distinct keyword,
  olyan esetekben amikor több másolat tartalmad van a táblázatban, sokkal jobb lenne ha csak az egyedi tartalmakat írná ki, ahelyett
    hogy megfejtené a másolatokat is.

      az SQL DISTINCT kulcszó a SELECT kulcsszóval együtt van használva ahhoz, hogy kihagyjuk a másolt tartalmakat és csak az egyedi
        tartalmakat írassuk ki.

          syntax: SELECT DISTINCT column_name, column_name, ...
          FROM table_name;

The limit keyword,
  alapértelmezettként, minden eredmény ami kielégíti a kondicíót az SQL állításban vissza van adva.
  de vannak esetek amikor az összes tartalom közül csak egy bizonyos részhalmazt akarunk lekérni.
    - ezt elégíti ki a LIMIT kulcsszó.

      syntax: SELECT column_name
      FROM table_name
      LIMIT[number of records];


  úgyanakkor képes vagy úgyanígy lekérni az adatokat egy bizonyos eltolással.
    - alapértelmezettként mindig 0-ról indul a számolás, így eltolhatod másra.

        limit 3, 4 -- azt jelenti, hogy adjon vissza 4 feljegyzést kezdve a 3-ik helyről.
          - pontosabban ez azt jelenti, hogy mivel 0-ról indul a számolás 3 helyet toltuk el, azaz a 0, 1, 2 ignorálva van.

Fully qualified names,
  az SQL képes vagy odahelyezni a táblázat nevét a oszlop neve elé elválasztva őket egy ponttal, hogy teljesen képesitsd melyik táblázatból
    melyik oszlopot választod ki.

        syntax:
            SELECT table_name.column_name FROM table_name;

            ! ez főleg akkor hasznos ha sok táblázattal dolgozol amiben úgyanaz a oszlopok neve.

OrderBy,
  az ORDER BY kulcsszó az SELECT-el van együtt használva, és arra használjuk, hogy rendezzük valami szerint a visszaadott adatokat.

      syntax:
          SELECT column_name
          FROM table_name
          ORDER BY column_name;

          ! alapértelezettként a betüket abc sorrendben, a számokat csökkenő sorrendben rendezi

Sorting multiple columns,
  az ORDER BY parancs képes több oszlop szerint rendezi az adott visszanyert adatokat, ha kettőnek azonos az első adata,
    ez esetben úgyanúgy veszővel válaszd el, mint a több oszlop lekérés esetében.
