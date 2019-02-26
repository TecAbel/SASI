use sasi;
show privileges;
flush privileges;
#creando un nuevo usuario
#e necesario tener permisos dados por root, en caso de ser primera
#vez tienes que cerrar y volver a cargar la conexión
create user 'abelardo'@'localhost' identified by 'A8e1';
GRANT insert,select ON sasi.* to 'abelardo'@'localhost' ;

create user 'abelardo'@'localhost' identified by 'An18';


SELECT *FROM clientes;
#inserción de clientes
INSERT INTO clientes (cl_gc_cli,cl_tipo_cliente,cl_nom,cl_ap_pat,cl_ap_mat,cl_tel,cl_fac_a,cl_dir,cl_rfc)
VALUES ('CI190000','0','ABELARDO','AQUI','ARROYO','5578444332','','BENITO JUÁREZ','');
