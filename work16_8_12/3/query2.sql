use ycfdb;
SELECT userName,currentUnit FROM user WHERE
userNo IN (SELECT userNo FROM point WHERE
courseNo='C2');
