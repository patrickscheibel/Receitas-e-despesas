CREATE TABLE IF NOT EXISTS category(
  id SERIAL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  about TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS login(
  id SERIAL PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

insert into category (name, about) values('Teste1', 'Teste1');
insert into category (name, about) values('Teste2', 'Teste2');

insert into login (username, password) values('admin', 'admin123');
