use sasi;
show privileges;
flush privileges;
#creando un nuevo usuario
#e necesario tener permisos dados por root, en caso de ser primera
#vez tienes que cerrar y volver a cargar la conexión
create user 'abelardo'@'localhost' identified by 'A8e1';
GRANT insert,select ON sasi2.* to 'abelardo'@'localhost' ;

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
VALUES ('CI190000','0','GC','GC','GC','00000000000','','gc','');
INSERT INTO equipos 
VALUES('EQ190000','CI190000','toshiba','x','x','4','500','Windows 10','xxxx','64','1','Kaspersky','0','2016','','Primer equipo del año');
INSERT INTO servicios VALUES('SR190000','Revision','Revison rapida','100','');

#vaciar tabla
TRUNCATE table equipos;

#obtener los clientes
SELECT cl_gc_cli,cl_nom,cl_ap_pat FROM clientes ORDER BY cl_nom asc;

#equipo, marca, y de quien es
SELECT eq_marca, cl_nom,cl_ap_pat FROM equipos
INNER JOIN clientes ON equipos.cl_gc_cli = clientes.cl_gc_cli;

desc servicios;

##SASI2##
insert INTO ordenes VALUES ('gc_orden','fecha','nombre','tel','correo','fact_a','direccion','cp',
'rfc','ser_sol','total','eq_tipo','eq_marca','eq_modelo','eq_procesador','eq_mem_ram','eq_cap_disco',
'eq_disco_utilizado','eq_sis_ope','eq_sis_ope_lic','eq_bits','eq_act','eq_drivers','eq_ant_virus',
'eq_ant_virus_lic','eq_virus_','eq_office','eq_lic_office','eq_arranque','eq_apagado',
'eq_mem_arranque','eq_mem_chrome','eq_nav_1','eq_nav_2','eq_notas','backup','restauracion',
'limpieza','reparar','reparar_det','so','so_det','so_lic','drivers','ant_virus','registro_ant',
'chrome','office','office_det','office_lic','adobe_reader','java','red','impresoras','remoto',
'pto_rest','prueba_user','tecnico');

insert INTO ordenes VALUES ('19000001','2019-03-25','Abelardo Aqui','5578444332','abel@mail.com','','BJ','03440',
'','SASI','1400','Laptop','Toshiba','Satellite','Intel i7','8','120',
'90','Windows 10','Activa','64','1','1','Kaspersky',
'Free','0','2016','Activa','20','20',
'2','2.5','10','8','Todo cool','No','No',
'Requerido','No','','No','No','No','No','No','No',
'No','No','','No','No','No','No','No','No',
'No','requerido','abelardo');

select * from ordenes; 
select max(gc_orden) from ordenes; 
SELECT nombre FROM ordenes;
