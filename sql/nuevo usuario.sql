use sasi;
show privileges;
flush privileges;
#creando un nuevo usuario
#e necesario tener permisos dados por root, en caso de ser primera
#vez tienes que cerrar y volver a cargar la conexión
create user 'abelardo'@'localhost' identified by 'A8e1';
GRANT insert,select ON sasi.* to 'abelardo'@'localhost' ;

create user 'abelardo'@'localhost' identified by 'An18';


SELECT *FROM servicios;
#inserción de clientes
INSERT INTO clientes (cl_gc_cli,cl_tipo_cliente,cl_nom,cl_ap_pat,cl_ap_mat,cl_tel,cl_fac_a,cl_dir,cl_rfc)
VALUES ('CI19000','0','ABELARDO','AQUI','ARROYO','5578444332','','BENITO JUÁREZ','');

#obtener el último registro
SELECT max(cl_gc_cli) as Último_registro FROM clientes;

#obtener últimos tres valores del registro
SELECT right(max(cl_gc_cli),3) FROM clientes;
#obtener últimos tres valores del registro y sumarle uno
SELECT right(max(cl_gc_cli),3)+ '00' + 1 FROM clientes;

select max(cl_gc_cli)+1 from clientes;

#ejecutar cada 01/01/XXXX
INSERT INTO clientes (cl_gc_cli,cl_tipo_cliente,cl_nom,cl_ap_pat,cl_ap_mat,cl_tel,cl_fac_a,cl_dir,cl_rfc)
VALUES ('CI190000','0','primer','año','de','00000000000','','operaciones','');
INSERT INTO equipos 
VALUES('EQ190000','CI190000','eq_marca','eq_modelo','eq_procesador','4','500','Windows 10','eq_so_lic','64','1','Kaspersky','0','2016','','Primer equipo del año');
INSERT INTO servicios VALUES('SR190000','Revision','Revison rapida','100','');

#vaciar tabla
TRUNCATE table CLIENTES;

#obtener los clientes
SELECT cl_gc_cli,cl_nom,cl_ap_pat FROM clientes ORDER BY cl_nom asc;

#equipo, marca, y de quien es
SELECT eq_marca, cl_nom,cl_ap_pat FROM equipos
INNER JOIN clientes ON equipos.cl_gc_cli = clientes.cl_gc_cli;

desc servicios;
