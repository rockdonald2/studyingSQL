SQL tables,
  egyetlen adatbázis akár több száz táblázatnak is otthont adhat, melyben mindegyiknek megvan a saját meghatározott szerepe
    az adatbázis sémában.

    az SQL táblázatok sorokból és oszlopokból épülnek fel,
      a táblázat oszlopok azért felelősek, hogy rengeteg különböző adattípusú adatot raktározzanak, beleértve a számokat, szövegeket,
        vagy akár a fájlokat is.

        a CREATE TABLE állítást arra használjuk, hogy új táblázatot hozzunk létre.

          - egy alap táblázat létrehozása abból áll, hogy meghatározzuk a nevét, minden oszlop nevét és adattípusát.

          syntax:
            CREATE TABLE table_name
            (
              column_name1 data_type(size),
              ..

              PRIMARY KEY(column_name)
            );

            ! használd a PRIMARY KEY-t a táblázat létrehozása során ahhoz, hogy elsődleges kulcsot határozz meg.

Data Types,
  az adattípusokat meghatározzák egy adott oszlop adattípusát amit raktározni fog,
    ilyen például az int az egész számoknak, vagy varchar a szövegek(pl. nevek) számára.

    Numeric
  INT -A normal-sized integer that can be signed or unsigned.
  FLOAT(M,D) - A floating-point number that cannot be unsigned. You can optionally define the display length (M) and the number of decimals (D).
  DOUBLE(M,D) - A double precision floating-point number that cannot be unsigned. You can optionally define the display length (M) and the number of decimals (D).

    Date and Time
  DATE - A date in YYYY-MM-DD format.
  DATETIME - A date and time combination in YYYY-MM-DD HH:MM:SS format.
  TIMESTAMP - A timestamp, calculated from midnight, January 1, 1970
  TIME - Stores the time in HH:MM:SS format.

    String Type
  CHAR(M) - Fixed-length character string. Size is specified in parenthesis. Max 255 bytes.
  VARCHAR(M) - Variable-length character string. Max size is specified in parenthesis.
  BLOB - "Binary Large Objects" and are used to store large amounts of binary data, such as images or other types of files.
  TEXT - Large amount of text data.
