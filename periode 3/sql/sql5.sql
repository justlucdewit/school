sql5
a SELECT count(*) FROM `huurders`
b SELECT min(postcode) FROM `huurders`
c SELECT max(kilometerstand) FROM `auto`
d SELECT avg(prijsperdag) FROM `prijs`
e SELECT sum(kilometerstand) FROM `auto`
f SELECT max(huurdernr) from `huurders` WHERE plaats="Rotterdam"
g SELECT min(kilometerstand) FROM `auto` WHERE merk="Volkswagen"
h SELECT sum(datumretour-datumverhuur) FROM verhuur