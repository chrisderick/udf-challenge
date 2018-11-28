CREATE TABLE aluno (
  rgm_aluno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_aluno VARCHAR(255) NULL,
  turma_aluno VARCHAR(10) NULL,
  PRIMARY KEY(rgm_aluno)
);

CREATE TABLE professor (
  id_professor INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_professor VARCHAR(255) NULL,
  disciplina_professor VARCHAR(75) NULL,
  PRIMARY KEY(id_professor)
);

CREATE TABLE questao (
  id_questao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  professor_id_professor INTEGER UNSIGNED NOT NULL,
  aluno_rgm_aluno INTEGER UNSIGNED NOT NULL,
  prazo_questao DATE NULL,
  descricao_questao TEXT NULL,
  linguagem_questao INTEGER UNSIGNED NULL,
  dificuldade_questao INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_questao, professor_id_professor, aluno_rgm_aluno),
  INDEX questao_FKIndex1(professor_id_professor),
  INDEX questao_FKIndex2(aluno_rgm_aluno)
);


