USE phpmotors;

-- Query 1
INSERT INTO clients
VALUES (DEFAULT, 'Tony', 'Stark', 'tony@starknet.com', 'Iam1ronM@n', 1, "I am the real Ironman");

-- Query 2
UPDATE clients
SET clientLevel = 3
WHERE clientId = 1;

-- Query 3
UPDATE inventory
SET invDescription = replace(invDescription, 'small', 'spacious')
WHERE invId = 12;

-- Query 4
SELECT inventory.invModel, carclassification.classificationName
FROM inventory
INNER JOIN carclassification
ON inventory.classificationId = carclassification.classificationId
WHERE carclassification.classificationId = 1;

-- QUERY 5
DELETE FROM inventory
WHERE invId = 1;

-- Query 6
UPDATE inventory
SET invImage = CONCAT('/phpmotors', invImage), invThumbnail = CONCAT('/phpmotors', invThumbnail);