CREATE DEFINER=`root`@`localhost` PROCEDURE `getLatestRecord`()
begin 
    declare latestID int(5); 
    select max(id) into latestID from file_uploads; 
    select * from file_uploads where id = latestID;
end