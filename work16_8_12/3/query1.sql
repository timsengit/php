use ycfdb;
SELECT userNo,userName FROM user
NATURAL LEFT JOIN point
NATURAL RIGHT JOIN course
WHERE courseName='税收基础';
