CREATE database sasi;
use sasi;

drop table servicios;

create table clientes(
	cl_gc_cli char(8) not null unique,
    primary key( cl_gc_cli),
    cl_tipo_cliente boolean not null,
    cl_nom char(30) not null,
    cl_ap_pat char(15) not null,
    cl_ap_mat char(15) not null,
    cl_tel char(13) not null,
    cl_fac_a char(30) null,
    cl_dir char(100) null,
    cl_rfc char(13) null
);

create table equipos(
	eq_gc_equipo char(8) not null unique,
    primary key(eq_gc_equipo),
    cl_gc_cli char(8) not null,
    foreign key(cl_gc_cli) references clientes(cl_gc_cli),
    eq_marca char(20) not null,
    eq_modelo char(30) null,
    eq_procesador char(20) null,
    eq_mem_ram int(2) null,
    eq_cap_disco int(8) null,
    eq_sis_ope char(20) not null,
    eq_sis_ope_lic char(30) null,
    eq_bits int(2) not null,
    eq_act boolean,
    eq_ant_virus char(20) null,
    eq_virus_ boolean,
    eq_office char(4) null,
    eq_lic_office char(30) null,
    eq_notas varchar(200) null
);


create table servicios(
	sr_gc_ser char(8) not null unique,
    primary key(sr_gc_ser),
    sr_nombre char(20) not null,
    sr_desc char(100) not null,
    sr_precio double(7,2) not null,
    sr_costo double(7,2) null
);

create table tecnicos(
	tc_gc_tec char(8) not null unique,
    primary key(tc_gc_tec),
    tc_nombre char(30) not null,
    tc_ap_pat char(15) not null,
    tc_ap_mat char(15) not null,
    tc_tel char(13) not null,
    tc_cargo char(20) null
);

create table ticket(
	tk_gc_ticket char(8) not null unique,
    primary key(tk_gc_ticket),
    tk_fecha date,
    tk_total double(7,2) not null
);
create table detalleticket(
	dt_gc_dt char(8) not null unique,
    primary key(dt_gc_dt),
    tc_gc_tec char(8) not null,
    foreign key(tc_gc_tec) references tecnicos(tc_gc_tec),
    sr_gc_ser char(8) not null,
    foreign key(sr_gc_ser) references servicios(sr_gc_ser),
    eq_gc_equipo char(8) not null,
    foreign key(eq_gc_equipo) references equipos(eq_gc_equipo),
    tk_gc_ticket char(8) not null,
    foreign key(tk_gc_ticket) references ticket(tk_gc_ticket),
    dt_sub_total double(7,2) null
);