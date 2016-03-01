--DROP TABLE IF EXISTS articles;
CREATE TABLE articles
(
  id              smallint NOT NULL identity(1,1),
  publicationDate date NOT NULL,                             
  title           varchar(255) NOT NULL,                    
  summary         text NOT NULL,                              
  content         nvarchar(max) NOT NULL,                        

  PRIMARY KEY     (id)
);