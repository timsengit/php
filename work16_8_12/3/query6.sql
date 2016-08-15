use ycfdb;
SELECT userName,currentUnit FROM user WHERE
userNo IN (SELECT userNo FROM (SELECT userNo,count(userNo) coun
FROM point GROUP BY userNo) as t
WHERE coun>5
)
;

