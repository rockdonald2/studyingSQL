Views,
  az SQL-ben a nézet az egy virtuális táblázat ami egy SQL állítás result-setjén alapszik.
    - egy nézet úgyanúgy sorokból és oszlopokból áll, akárcsak egy valódi táblázat, azonban a mezők a táblázatban az egy vagy több
      másik táblázatból származnak.

      A nézet lehetővé teszi:
        - korlátozni a felhasználok  hozzáférést bizonyos adatokhoz, hogy csak azt érjék el amihez közük van.
        - összefoglalni az adatokat különböző táblázatokból, és használni jelentés készitéshez.
        - strukturálni úgy az adatot, hogy a felhasználok azt intuitívnak vagy természetesnek találják.

        syntax:
          CREATE VIEW view_name AS
          SELECT column_name(s)
          FROM table_name
          WHERE condition;

        - képes vagy modosítani a következő másképpen:
        syntax:
          CREATE OR REPLACE VIEW view_name AS
          SELECT column_name(s)
          FROM table_name
          WHERE condition;

        - vagy törölni
        syntax:
          DROP VIEW view_name;
