a SELECT v.*, naam, h.huurdernr FROM huurders h, verhuur v WHERE v.huurdernr=h.huurdernr
b SELECT v.*, naam, h.huurdernr FROM huurders h, verhuur v WHERE v.huurdernr=h.huurdernr AND datumverhuur="1999-11-11"
c SELECT v.*, a.merk, a.type FROM verhuur v, auto a WHERE a.kenteken=v.kenteken
d SELECT a.kenteken, merk, type, datumverhuur, naam FROM verhuur v, auto a, huurders h WHERE v.kenteken=a.kenteken AND h.huurdernr=v.huurdernr
e SELECT a.kenteken, merk, type, datumverhuur, naam FROM verhuur v, auto a, huurders h WHERE v.kenteken=a.kenteken AND h.huurdernr=v.huurdernr AND h.plaats = "Rotterdam"
f SELECT DISTINCT(naam), adres, postcode, plaats FROM huurders h, verhuur v, auto a WHERE v.huurdernr = h.huurdernr AND v.kenteken = a.kenteken AND a.merk = "Volkswagen"
g SELECT a.merk, a.type, prijsperdag, prijsperdag, prijsperweek FROM auto a, prijs p WHERE a.type = p.type
h SELECT naam, count(SELECT * FROM verhuur) FROM huurders h, verhuur v WHERE h.huurdernr = v.huurdernr
i SELECT a.merk, count(*) FROM verhuur v, auto a WHERE v.kenteken = a.kenteken
j SELECT sum(prijsperdag) FROM prijs p, verhuur v