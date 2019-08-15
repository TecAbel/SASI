create database sasi2;

create table ordenes(
/*cliente*/
	gc_orden char(8) not null unique,
    primary key(gc_orden),
    fecha date not null,
    nombre char(40) not null,
    tel char(13) not null,
    correo char(50) null,
    fact_a char(50) not null,
    direccion varchar(100) not null,
    cp char(4) not null,
    rfc char(13) null,
    
    
    /*descripción del servicio*/
    ser_sol varchar(200) not null,
    importe double(7,2) null,
    total double(7,2) null,
    
    /*hardware*/
    eq_tipo char(30) not null,
    eq_marca char(20) not null,
    eq_modelo char(30) null,
    eq_procesador char(20) null,
    eq_mem_ram int(2) null,
    eq_cap_disco int(8) null,
    eq_disco_utilizado int(8) null,
    
    /*software*/
    eq_sis_ope char(20) not null,
    eq_sis_ope_lic char(30) null,
    eq_bits int(2) not null,
    eq_act boolean,/*1=activadas,0=desactivadas*/
    eq_drivers boolean,/*1->completo 0->faltan*/
    eq_ant_virus char(20) null,
    eq_ant_virus_lic char(30) null,
    eq_virus_ boolean,/*1=sí hay,0=no hay*/
    eq_office char(4) null,
    eq_lic_office char(30) null,
    
    /*comportamiento*/
    eq_arranque int(8) null,
    eq_apagado int(8) null,
    eq_mem_arranque double(3,1) null,
    eq_mem_chrome double(3,1) null,
    eq_nav_1 int(8) null,
    eq_nav_2 int(8) null,
    eq_notas varchar(200) null,
    
    /*servicios requerido, hecho, no requerido*/
    backup char(12) null,
    restauracion char(12) null,
    limpieza char(12) null,
    reparar char(12) null,
    reparar_det varchar(50) null, /*según cliente*/
    so char(12) null,
    so_det char(30) null,
    so_lic char(12) null,
    drivers char(12) null,
    ant_virus char(12) null,
    registro_ant char(12) null,
    chrome char(12) null,
    office char(12) null,
    office_det char(12) null,
    office_lic char(12) null,
	adobe_reader char(12) null,
    java char(12) null,
    red char(12) null,
    impresoras char(12) null,
    remoto char(12) null,
    pto_rest char(12) null,
    prueba_user char(12) null,
    otros1 char(12) null,
    otros2 char(12) null,
    otros3 char(12) null,
    otros4 char(12) null,
    
    /*quien*/
    tecnico char(30) not null
); 

use sasi2;