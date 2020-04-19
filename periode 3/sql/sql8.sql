a SELECT kenteken, merk FROM auto WHERE kilometerstand = (SELECT max(kilometerstand) FROM auto)
b (SELECT merk, count(*) FROM auto a, verhuur v WHERE v.kenteken = a.kenteken GROUP BY merk)
SELECT kenteken, merk FROM auto WHERE kenteken = ()
c ?