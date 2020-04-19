a SELECT kenteken, COUNT(identificatie) FROM verhuur GROUP BY kenteken
b SELECT plaats, COUNT(huurdernr) FROM huurders GROUP BY plaats
c SELECT plaats, COUNT(huurdernr) FROM huurders GROUP BY plaats ORDER BY plaats
d SELECT plaats, COUNT(huurdernr) FROM huurders GROUP BY plaats ORDER BY COUNT(huurdernr) DESC
e SELECT plaats, COUNT(huurdernr) FROM huurders GROUP BY plaats HAVING plaats = "Rotterdam"
f SELECT kenteken, COUNT(identificatie) FROM verhuur GROUP BY kenteken HAVING COUNT(identificatie) > 3
g SELECT kenteken, COUNT(identificatie) FROM verhuur GROUP BY kenteken HAVING COUNT(identificatie) > 3 ORDER BY kenteken
