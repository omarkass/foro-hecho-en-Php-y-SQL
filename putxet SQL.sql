CREATE table P_INFO (doc char (3) , ndoc varchar(20) ,
 nom varchar (10) , cog1 varchar (20) ,cog2 varchar (20) , nacionalitat varchar (20) , cad date, vivenda varchar (10) ,
 date_neix date , familia char(2),estudis varchar (10) ,recu varchar (10) ,COND_PUTXET char (2)  , PRIMARY key (ndoc , doc) ) ;
 
 CREATE table ESTUDI (doc char (3) , ndoc varchar(20) ,
 formacio_act varchar (20)  , PRIMARY key (ndoc , doc , formacio_act) , 
 CONSTRAINT fk_estudi FOREIGN KEY (ndoc,doc) REFERENCES P_INFO (ndoc,doc) ) ;
 
 
 CREATE table FEINA (doc char (3) , ndoc varchar(20) , FEINA varchar (10) ,PRIMARY key (ndoc,doc,FEINA)
 ,CONSTRAINT fk_feina FOREIGN KEY (ndoc,doc) REFERENCES P_INFO (ndoc,doc)) ;
 
 
 CREATE table IDIOMES (doc char (3) , ndoc varchar(20) , IDIOMA varchar (10) ,PRIMARY key (ndoc,doc,IDIOMA)
 ,CONSTRAINT fk_idioma FOREIGN KEY (ndoc,doc) REFERENCES P_INFO (ndoc,doc)) ;
 
 
 CREATE table mal_inf (doc char (3) , ndoc varchar(20) ,
 MALALTIES_INFECTUESES varchar (20) ,PRIMARY key (ndoc,doc,MALALTIES_INFECTUESES) 
 ,CONSTRAINT fk_malinf FOREIGN KEY (ndoc,doc) REFERENCES P_INFO (ndoc,doc)) ;
 
 
 CREATE table mal_nor (doc char (3) , ndoc varchar(20) , 
 MALALTIES varchar (20) ,
 PRIMARY key (ndoc,doc,MALALTIES_NO_INFECTUESES) ,
 CONSTRAINT fk_maLnor FOREIGN KEY (ndoc,doc) REFERENCES P_INFO (ndoc,doc)) ;
 /*
 
  CREATE table mal_nor (doc char (3) , ndoc varchar(20) ,
 MALALTIES_FECTUESES varchar (20) ,PRIMARY key (ndoc,doc,MALALTIES_INFECTUESES) 
 ,CONSTRAINT fk_malno FOREIGN KEY (ndoc,doc) REFERENCES P_INFO (ndoc,doc)) ;
 */
 
 
 create table VIATGE ( doc char(3) , ndoc varchar (20) ,
 manera_de_enterada varchar (25), dificultat_enterada varchar(2),
 data_enterada date, PRIMARY key (ndoc,doc) ,
 CONSTRAINT fk_viatge FOREIGN key (ndoc,doc) REFERENCES p_info (ndoc,doc)) ;
 
 
 CREATE TABLE RESULTAT (ndoc integer , doc char(3) );
 CREATE TABLE RESULTAT1 (ndoc integer , doc char(3) );
 







DELIMITER //
CREATE PROCEDURE dni (ndni integer , dni char(3))
begin
del
insert into RESULTAT( select ndoc,doc from p_info where ndoc=ndni and dni=doc ) ;
end //

//DELIMITER ;






begin
declare i1 int  ;
DELETE FROM resultat ;
DELETE FROM resultat1 ;
  insert into resultat ( select ndoc ,doc from p_info p where p.nom =nom1 );
	insert into resultat1 (select ndoc , doc from resultat) ;
    select count(*) into i1 from resultat1 ;
    if cog11 <> null THEN
	select count(*) into i1 from resultat1 ;
    if i1 = 0 then  insert into resultat ( select ndoc ,doc from p_info p where p.cog1 =cog11 );
    insert into resultat1 (select ndoc , doc from resultat) ;
   else  DELETE FROM resultat ;
   
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p where  p.cog1 = cog11 and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
	 
	  if cog21 <> null THEN
	  select count(*) into i1 from resultat1 ;
    if i1 = 0 then  insert into resultat ( select ndoc ,doc from p_info p where p.cog2 =cog21 );
    insert into resultat1 (select ndoc , doc from resultat) ;
   else  DELETE FROM resultat ;
   
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p where  p.cog2 = cog21 and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
	 
    
end








nom

begin
/*declare i1 int  ;*/
DELETE FROM resultat ;
DELETE FROM resultat1 ;
  if nom1 <> ''then insert into resultat ( select ndoc ,doc from p_info p where p.nom =nom1 );
	insert into resultat1 (select ndoc , doc from resultat) ;
 	end if ;
 
 if cog11 <> '' THEN
    /*select count(*) into i1 from resultat1 ;
    if i1 = 0 */  if nom1 = ''  then  insert into resultat ( select ndoc ,doc from p_info p where p.cog1 =cog11 );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p where  p.cog1 = cog11 and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
    
    if cog21 <> '' THEN
  /*  select count(*) into i1 from resultat1 ;
    if i1 = 0 then */ if ( nom1 = '' and cog11 = '' ) THEN insert into resultat ( select ndoc ,doc from p_info p where p.cog2 =cog21 );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p where  p.cog2 = cog21 and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
     
     

     
    
end








begin

DELETE FROM resultat ;
DELETE FROM resultat1 ;
  if malinf <> '' then insert into resultat ( select ndoc ,doc from  mal_inf n where n.MALALTIES_INFECTUESES =malinf );
	insert into resultat1 (select ndoc , doc from resultat) ;
 	end if ;
 
 if malnor <> '' THEN
     if malinf = ''  then  insert into resultat ( select ndoc ,doc from mal_nor n where n.MALALTIES_NO_INFECTUESES =malnor );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r , mal_nor n where  n.MALALTIES_NO_INFECTUESES = malnor and n.doc = r.doc and n.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;   
    
end




begin
DELETE from RESULTAT ;
DELETE from RESULTAT1 ;
insert into RESULTAT( select ndoc,doc from p_info where ndoc=ndni and dni=doc ) ;
end






DELIMITER //
CREATE or replace  PROCEDURE dni ( nom varchar(20), cog1 varchar(20) ,
 cog2 varchar(20) , neix date ,enter date , vivi varchar (15) 
 ,estudi varchar(16) , feines varchar(10), formacions varchar (20),idioma vatchar (10))
 
begin
/*declare i1 int  ;*/
DELETE FROM resultat ;
DELETE FROM resultat1 ;
  if es <> ''then insert into resultat ( select ndoc ,doc from p_info p where p.estudis =es );
	insert into resultat1 (select ndoc , doc from resultat) ;
 	end if ;
 
 if fe <> '' THEN
     if es = ''  then  insert into resultat ( select ndoc ,doc from feina f where f.FEINA =fe );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r ,  feina f where f.FEINA = fe and f.doc = r.doc and f.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
     
  
      if fo <> '' THEN
     if (es = '' and fe = '' )  then  insert into resultat ( select ndoc ,doc from estudi e where e.formacio_act = fo );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r ,   estudi e where e.formacio_act = fo and e.doc = r.doc and e.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
     
     
      if id <> '' THEN
      if (es = '' and fe = '' and fo = '')  then  insert into resultat ( select ndoc ,doc from idiomes i where i.IDIOMA =id );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r ,   idiomes i where i.IDIOMA = id and i.doc = r.doc and i.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
     
     
  if enter1 <> '' THEN
      if (es = '' and fe = '' and id = '' and fo = '')  then insert into resultat ( select ndoc ,doc from p_info p where p.date_enter >= enter1  );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p  where  p.date_enter >= enter1 and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
        
    
   if enter2 <> '' THEN
      if (es = '' and fe = '' and id = '' and fo = '' and enter1 = '')  then  insert into resultat ( select ndoc ,doc from p_info p where p.date_enter <= enter2  );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p  where  p.date_enter <= enter2 and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
        
       if neix1 <> '' THEN
      if (es = '' and fe = '' and id = '' and fo = '' and enter1 = '' AND  enter2 = '')  then  insert into resultat ( select ndoc ,doc from p_info p where p.date_neix >= neix1  );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p  where  p.date_neix >= neix1 and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
        
       if neix2 <> '' THEN
      if (es = '' and fe = '' and id = '' and fo = '' and enter1 = '' AND  enter2 = '' and neix1 = '')  then  insert into resultat ( select ndoc ,doc from p_info p where p.date_neix <= neix2  );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p  where  p.date_neix <= neix2 and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
     
     
      if vi <> '' THEN
      if (es = '' and fe = '' and id = '' and fo = '' and enter1 = '' AND  enter2 = '' and neix1 = '' and neix2 = '')  then  insert into resultat ( select ndoc ,doc from p_info p where p.vivenda = vi  );
    insert into resultat1 (select ndoc , doc from resultat) ;
  else  DELETE FROM resultat ;
    insert into resultat (select r.ndoc,r.doc from resultat1 r , p_info p  where  p.vivenda = vi and p.doc = r.doc and p.ndoc = r.ndoc ) ;
    DELETE from resultat1 ;
     insert into resultat1 (select ndoc , doc from resultat) ;
     end if ;
     end if ;
     
     

     
    
END
















