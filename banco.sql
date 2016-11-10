create table Funcionario(
	matricula int identity(1,1) primary key,
	nome varchar(50) not null,
	endereco varchar(100) not null,
	RG varchar(9) not null,
	CPF varchar(12) not null,
	telefone varchar(11) not null
)

create table Usuario(
	login varchar(50) primary key,
	senha char(8) not null,
	opcao varchar(20) not null 
)

create table Doador(
	codDoador int identity(1,1) primary key,
	nome varchar(50) not null,
	telefone varchar(11) not null,
	endereco varchar(100) not null,
	frequenciaDoacao varchar(50) not null,
	RG varchar(9) not null,
	email varchar(100) not null
)

create table Carente(
	codCarente int identity(1,1) primary key,
	nome varchar(50) not null,
	telefone varchar(11) not null,
	renda money not null,
	RG varchar(9) not null,
	email varchar(100) not null
)

create table Voluntario(
	codVoluntario int identity(1,1) primary key,
	nome varchar(50) not null,
	telefone varchar(11) not null,
	RG varchar(9) not null,
	email varchar(100) not null
)

create table Doacao(
	codDoacao int identity(1,1) primary key,
	codDoador int not null,
	constraint fkDoadorDoacao foreign key(codDoador) references Doador(codDoador),
	descricao varchar(100) not null,
	fequenciaDoacao varchar(50) not null
)

create table DoacaoCarente(
	codDoacaoCarente int identity(1,1) primary key,
	codCarente int not null,
	constraint fkCarentefuncionarioCarente foreign key(codCarente) references Carente(codCarente),
	valor money not null,
	dataTransferencia datetime not null
)

create table curriculo(
 codCurriculo int identity(1,1) primary key,
 codVoluntario int not null,
 constraint fkcodVoluntarioCurriculo foreign key(codVoluntario) references Voluntario(codVoluntario)
)

create table usuarioDoador(
login varchar(50) not null,
constraint fkusuarioUsuarioDoador foreign key(login) references usuario(login),
codDoador int not null,
constraint fkdoadorUsuarioDoador foreign key(codDoador) references Doador(codDoador)
)

create table usuarioVoluntario(
	login varchar(50) not null,
	constraint fkusuarioUsuarioVoluntario foreign key(login) references usuario(login),
	codVoluntario int not null,
	constraint fkVoluntarioUsuarioVoluntario foreign key(codVoluntario) references Voluntario(codVoluntario)
)

create table usuarioCarente(
	login varchar(50) not null,
	constraint fkusuarioUsuarioCarente foreign key(login) references usuario(login),
	codCarente int not null,
	constraint fkCarenteUsuarioCarente foreign key(codCarente) references Carente(codCarente)
)

create table usuarioFuncionario(
	matricula int primary key not null,
	constraint fkMatriculaUsuario foreign key (matricula) references Funcionario(matricula),
	senha varchar(20) not null
)