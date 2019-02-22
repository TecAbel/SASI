use sasi;
show privileges;
flush privileges;
#creando un nuevo usuario
#e necesario tener permisos dados por root, en caso de ser primera
#vez tienes que cerrar y volver a cargar la conexión
create user 'abelardo'@'localhost' identified by 'A8e1';
GRANT insert,select ON sasi.* to 'abelardo'@'localhost' ;



