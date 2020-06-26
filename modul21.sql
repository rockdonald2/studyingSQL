The WHERE statement,
  a where kikötést arra használjuk, hogy azokat a feljegyzéseket kérjük le amik egy bizonyos kritériumot teljesítenek.

        syntax:
              SELECT column_name
              FROM table_name
              WHERE criteria;

SQL operators,
  az összehasonlítási valamint logikai operátorokat használjuk a WHERE állításban, hogy szürjük azt az adatot amit ki akarunk választani.
      - a következő operátorokat lehet használni a WHERE állításban:
              =, !=, <, >, <=, >=, BETWEEN

The BETWEEN operator,
  a BETWEEN operátor értékeket választ ki egy bizonyos skálán belül, bizonyos terjedelmen belül.
    - az első érték az alsó határ, a második érték pedig a felső határ.

        syntax:
              SELECT column_name
              FROM table_name
              WHERE column_name BETWEEN value1 AND value2;

Text values,
  amikor text értéket tartalmazó oszlopokból akarsz feljegyzést lekérni where állítással a szövegeket mindig '' közé rakd.

Logical operators,
  a logikai operátorokat arra használjuk, hogy összekombináljunk két boolean értéket eggyé, visszaadva a TRUE,FALSE,NULL trió egyikét.
      - a következő operátorokat lehet használni: OR, AND, IN, NOT
      ! mindegyik megegyezik a C++ társával, kivéve az IN ami akkor ad vissza TRUE ha az operándussa egyenlő valamelyikkel egy
        sor kifejezésben.
      - lényegében arra használjuk, hogy egy WHERE állításban több kondíciót füzzünk össze eggyé

      ! fontos amikor egyszerre használod az OR és AND logikai operátor használj zárójelet, hogy pontosítsd a végrehajtási sorrendet.

The IN operator,
  az IN operátort akkor használjuk amikor egy oszlopot több mint egy értékkel akarsz összehasonlítani.

        syntax:
              SELECT column_name
              FROM table_name
              WHERE column_name IN('value1', 'value2', 'value3');

The NOT IN operator,
  pontosan az IN operátor ellentetje, kiszüri a megadott értékeket a lekérésből.

The CONCAT function,
  a CONCAT funkciót arra használjuk, hogy összekapcsoljunk egy vagy több text értéket tartalmazó oszlopot és visszaadjuk mint egy string.

        syntax:
              SELECT CONCAT(column_name, ',', column_name) FROM table_name;

The AS keyword,
  ez az összekapcsolás egy új oszlopot eredményez, aminek a neve maga a concat funkció lesz,
    de akár saját nevet is adhatunk ennek az új oszlopnak az AS kulcsszó használatával

        syntax:
              SELECT CONCAT(column_name, ',', column_name) AS new_column_name FROM table_name;

The arithmetic operators,
  a számtani operátorokat arra használjuk, hogy számtani műveleteket végezzünk számoperándusokon.
      - ilyen pl. +, -, *, /
