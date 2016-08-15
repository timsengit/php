use ycfdb;
SELECT userName,currentUnit FROM user WHERE
userNo NOT IN (SELECT userNo FROM point WHERE
courseNo='C5');
