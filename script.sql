create table tb_usuarios(

idusuarios int not null identity primary key,
deslogin varchar(64) not null,
dessenha varchar(256) not null,
dtcadastro datetime not null default getdate()

)
