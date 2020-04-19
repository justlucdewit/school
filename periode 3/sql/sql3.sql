sql 3
a SELECT * FROM `huurders` WHERE plaats="Rotterdam" OR plaats="Tilburg"
b SELECT * FROM `huurders` WHERE plaats="Rotterdam" AND huurdernr > 50000
c SELECT * FROM `huurders` WHERE huurdernr=73775 AND postcode="3087 AE"
d SELECT * FROM `auto` WHERE kilometerstand>25000 AND kilometerstand<50000